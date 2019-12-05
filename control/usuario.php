<?php
require_once "database.php";
class usuario {
	private $nome;
	private $email;
	private $senha;

	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setSenha($senha) {
		$this->senha = $senha;

	}

	public function getSenha() {
		return $this->senha;

	}


	// CRUD

	// Create

	public function insert() {
		try {
			$stmt = $this->conn->prepare("INSERT INTO `usuario`(`id`,`nome`,`email`,`senha`) VALUES (:id, :nome, :email,
				:senha);");
			$stmt->bindParam(":id",$this->id);
			$stmt->bindParam(":nome",$this->nome);
			$stmt->bindParam("email",$this->email);
			$stmt->bindParam(":senha",$this->senha);
			$stmt->execute();
			return 1;

		} catch (PDOException $e) {
			echo "Erro! " .$e->getMessage();
			return 0;
		}
	}

	// Edit

	public function edit() {
		try {
			$stmt = $this->conn->prepare("UPDATE `usuario`(`id`,`nome`,`email`,`senha`) SET (:id, :nome, :email,
				:senha) WHERE `id` = :id");
			$stmt->bindParam(":id",$this->id);
			$stmt->bindParam(":nome",$this->nome);
			$stmt->bindParam("email",$this->email);
			$stmt->bindParam(":senha",$this->senha);
			$stmt->execute();
			return 1;

		} catch (PDOException $e) {
			echo "Erro! " .$e->getMessage();
			return 0;

		}
	}


	// Delete

	public function delete() {
		try {
			$stmt = $this->conn->prepare("DELETE from `usuario` WHERE `id` = :id");
			$stmt->bindParam(":id",$this->id);
			$stmt->execute();
			return 1;

		} catch (PDOException $e) {
			echo $e->getMessage();
			return 0;
		}

	}

	// Search

	public function viewAll() {
		try {
			$stmt

		} catch (PDOException $e) {

		}
	}


	public function indexEmail() {
		try {
			$stmt = $this->conn->prepare("DELETE  FROM `usuario` WHERE id = :id");
			$stmt->bindParam(":id",$this->id);
			$stmt->execute();
			return 1; 

		} catch (PDOException $e) {
			echo $e->getMessage();
			return 0;
		}
	}

	public function existeEmail() {
		try {
			$stmt = $this->conn->prepare("SELECT * FROM `usuario` WHERE email = :email");
			$stmt->bindParam(":email", $this->email);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_OBJ);
			if(!empty($result)){
				return 1;
			}

		} catch (PDOException $e) {
			echo $e->getMessage();
			return 0;
			
		}

	}

	public function existeConta() {
		try {
			$stmt = $this->conn->prepare("SELECT * FROM `usuario` WHERE email = :email and senha = :senha");
			$stmt->bindParam(":email", $this->email);
			$stmt->bindParam(":senha", $this->senha);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_OBJ);
			if(!empty($result)){
				return $result->id;
			}

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
		}
	}

	public function senhaCorreta() {
		try {
			$stmt = $this->conn->prepare("SELECT senha FROM usuario WHERE id = :id and senha = :senha");
			$stmt->bindParam(":id", $this->id);
			$stmt->bindParam(":senha", $this->senha);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_OBJ);
			if(!empty($result)){
				return $result->senha;
			}

		} catch (PDOException $e) {
			echo $e->getMessage();
			return null;
			
		}
	}




}
?>
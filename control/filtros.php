<?php
require_once "database.php";
class filtros {
	private $codigo_prod;
	private $descricao;
	private $preco;
	private $tipo;
	private $codigo_lanchonete;


	public function __construct(){
		$database = new Database();
		$dbset = $database->dbset();
		$this->conn = $dbset;
		}

	public function setCodigo_prod($value) {
		$this->codigo_prod = $value;
	}

	public function getCodigo_prod() {
		return $this->codigo_prod;

	}

	public function setDescricao($value) {
		$this->descricao = $value;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function setPreco($value){
		$this->preco = $value;
	}

	public function getPreco() {
		return $this->preco;
	}

	public function setTipo($value) {
		$this->tipo = $value;
	}

	public function getTipo() {
		return $this->tipo;
	}


	public function setCodigo_Lanchonete($value) {
		$this->codigo_lanchonete = $value;
	}

	public function getCodigo_Lanchonete() {
		return $this->codigo_lanchonete;
	}

	public function Pesquisar() {
		try {
				$stmt = $this->conn->prepare("SELECT Descricao FROM `precos` WHERE codigo_prod = 28");
				$stmt->bindParam(":codigo_prod",$this->codigo_prod);	
				$stmt->execute(); 

			return $stmt;

		} catch (PDOException $e) {
			echo $e->getMessage;
			return 0;
		}
	}








}
?>
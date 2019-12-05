<?php
require_once "database.php";

class pesquisa {
	private $id_lanchonete;
	private $preco;
	private $qualidade;
	private $opcoes;
	private $atendimento;
	private $diferenciais;
	private $espaco;
	private $consumo;
	private $gasto;
	private $preco_justo;
	private $lanche;
	private $satisfacao;
	private $sobre_satisfacao;
	private $adicionais;
	private $sugestoes;
	private $recomendacao;
	private $email;

	// Construct
	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}
	
	// Id Lanchonete
	public function setIdLanchonete($id) {
		$this->id_lanchonete = $id;
	}

	public function getIdLanchonete() {
		return $this->id_lanchonete;
	}

	// Preço

	public function setPreco($value) {
		$this->preco = $value;
	}

	public function getPreco() {
		return $this->preco;
	}


	// Qualidade

	public function setQualidade($value) {
		$this->qualidade = $value;
	}

	public function getQualidade() {
		return $this->qualidade;
	}

	// Opções

	public function setOpcoes($value) {
		$this->opcoes = $value;
	}

	public function getOpcoes() {
		return $this->opcoes;
	}


	// Atendimento

	public function setAtendimento($value) {
		$this->atendimento = $value;
	}

	public function getAtendimento() {
		return $this->atendimento;
	}

	
	// Diferenciais

	public function setDiferenciais($value) {
		$this->diferenciais = $value;
	}

	public function getDiferenciais() {
		return $this->diferenciais;
	}

	// Espaço

	public function setEspaco($value) {
		$this->espaco = $value;
	}

	public function getEspaco() {
		return $this->espaco;
	}


	// Consumo

	public function setConsumo($value) {
		$this->consumo = $value;
	}

	public function getConsumo() {
		return $this->consumo;
	}


	// Gasto

	public function setGasto($value) {
		$this->gasto = $value;
	}

	public function getGasto() {
		return $this->gasto;
	}

	// Preco_justo

	public function setPrecoJusto($value) {
		$this->preco_justo = $value;
	}

	public function getPrecoJusto() {
		return $this->preco_justo;
	}

	// Lanche

	public function setLanche($value) {
		$this->lanche = $value;
	}

	public function getLanche() {
		return $this->lanche;
	}

	// Satisfacao

	public function setSatisfacao($value) {
		$this->satisfacao = $value;
	}

	public function getSatisfacao() {
		return $this->satisfacao;
	}

	// Sobre_satisfacao

	public function setSobreSatisfacao($value) {
		$this->sobre_satisfacao = $value;
	}

	public function getSobreSatisfacao() {
		return $this->sobre_satisfacao;
	}


	// Adicionais

	public function setAdicionais($value) {
		$this->adicionais = $value;

	}

	public function getAdicionais() {
		return $this->adicionais;
	}

	
	// Sugestão

	public function setSugestoes($value) {
		$this->sugestoes = $value;
	}

	public function getSugestoes() {
		return $this->sugestoes;
	}


	// Recomendação

	public function setRecomendacao($value) {
		$this->recomendacao = $value;
	}

	public function getRecomendacao() {
		return $this->recomendacao;
	}

	// E-mail

	public function setEmail($value) {
		$this->email = $value;
	}

	public function getEmail() {
		return $this->email;
	}



	// CRUD

	// Create

	 public function insert() {
		try {
			$stmt = $this->conn->prepare("INSERT INTO `avaliacao`(`id_lanchonete`,`preco`,`qualidade`,`opcoes`,
				`atendimento`,`diferenciais`, `espaco`,`consumo`,`gasto`, `preco_justo`,`lanche`,`satisfacao`,
				`sobre_satisfacao`, `adicionais`, `sugestoes`, `recomendacao`,`email`) VALUES(:id_lanchonete, :preco, :qualidade, :opcoes, :atendimento, :diferenciais, :espaco, :consumo, :gasto, :preco_justo, :lanche,
					:satisfacao, :sobre_satisfacao, :adicionais, :sugestoes, :recomendacao, :email);");
			$stmt->bindParam(":id_lanchonete",$this->id_lanchonete);
			$stmt->bindParam(":preco",$this->preco);
			$stmt->bindParam(":qualidade",$this->qualidade);
			$stmt->bindParam(":opcoes",$this->opcoes);
			$stmt->bindParam(":atendimento",$this->atendimento);
			$stmt->bindParam(":diferenciais",$this->diferenciais);
			$stmt->bindParam(":espaco",$this->espaco);
			$stmt->bindParam(":consumo",$this->consumo);
			$stmt->bindParam(":gasto",$this->gasto);
			$stmt->bindParam(":preco_justo",$this->preco_justo);
			$stmt->bindParam(":lanche",$this->lanche);
			$stmt->bindParam(":satisfacao",$this->satisfacao);
			$stmt->bindParam(":sobre_satisfacao",$this->sobre_satisfacao);
			$stmt->bindParam(":adicionais",$this->adicionais);
			$stmt->bindParam(":sugestoes",$this->sugestoes);
			$stmt->bindParam(":recomendacao",$this->recomendacao);
			$stmt->bindParam(":email",$this->email);
			$stmt->execute();
			return 1;

		} catch (PDOException $e) {
			echo "ERRO: " .$e->getMessage();
			return 0;
		}

	}

	// Read

	public function reader() {
		try {
			$stmt = $this->conn->prepare("SELECT *FROM `avaliacao` WHERE 1");
			$stmt->execute();
			return $stmt;
		} catch (PDOException $e) {
			echo "ERRO: " .$e->getMessage();
			return 0;
		}

	}


	// Update

	private function update($id) {
		try {
			$stmt = $this->conn->prepare("UPDATE `avaliacao`(`id_lanchonete`,`preco`,`qualidade`,`opcoes`,
				`atendimento`,`diferenciais`, `espaco`,`consumo`,`gasto`, `preco_justo`,`lanche`,`satisfacao`,
				`sobre_satisfacao`, `adicionais`, `sugestoes`, `recomendacao`,`email`) SET (:id_lanchonete, :preco, :qualidade, :opcoes, :atendimento, :diferenciais, :espaco, :consumo, :gasto, :preco_justo, :lanche,
					:satisfacao, :sobre_satisfacao, :adicionais, :sugestoes, :recomendacao, :email) 
					WHERE `id_avaliacao` = :id");
			$stmt->bindParameters(":id_lanchonete",$this->id_lanchonete);
			$stmt->bindParameters(":preco",$this->preco);
			$stmt->bindParameters(":qualidade",$this->qualidade);
			$stmt->bindParameters(":opcoes",$this->opcoes);
			$stmt->bindParameters(":atendimento",$this->atendimento);
			$stmt->bindParameters(":diferenciais",$this->diferenciais);
			$stmt->bindParameters(":espaco",$this->espaco);
			$stmt->bindParameters(":consumo",$this->consumo);
			$stmt->bindParameters(":gasto",$this->gasto);
			$stmt->bindParameters(":preco_justo",$this->preco_justo);
			$stmt->bindParameters(":lanche",$this->lanche);
			$stmt->bindParameters(":satisfacao",$this->satisfacao);
			$stmt->bindParameters(":sobre_satisfacao",$this->sobre_satisfacao);
			$stmt->bindParameters(":adicionais",$this->adicionais);
			$stmt->bindParameters(":sugestoes",$this->sugestoes);
			$stmt->bindParameters(":recomendacao",$this->recomendacao);
			$stmt->bindParameters(":email",$this->email);
			$stmt->execute();
			return 1;

		} catch (PDOException $e) {
			echo "ERRO: " .$e->getMessage();
			return 0;
		}

	}

	// Delete

	private function delete() {
		try {
			$stmt = $this->conn->prepare("DELETE FROM `avaliacao` WHERE `id_lanchonete` = :id_lanchonete");
			
			$stmt->bindParameters(":id_lanchonete",$this->id_lanchonete);
			$stmt->execute();
			return 1;

		} catch (PDOException $e) {
			echo "ERRO: " .$e->getMessage();
			return 0;
		}
		
	}
}
?>
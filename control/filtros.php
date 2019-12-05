<?php
require_once "database.php";
class filtros {
	private $preco;
	private $lanche;
	private $tempo;
	private $local;

	public function setPreco($value) {
		$this->preco = $value;
	}

	public function getPreco() {
		return $this->preco;

	}

	public function setLanche($value) {
		$this->lanche = $value;
	}

	public function getLanche() {
		return $this->lanche;
	}

	public function setTempo($value){
		$this->tempo = $value;
	}

	public function getTempo() {
		return $this->tempo;
	}

	public function setLocal($value) {
		$this->local = $value;
	}

	public function getLocal() {
		return $this->local;
	}
}
?>
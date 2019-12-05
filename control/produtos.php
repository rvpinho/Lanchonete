<?php
require_once "database.php";
class produtos {
	private $descricao;
	private $preco;
	private $codigo_lanchonete;

	public function getDescricao(){
		return $this->descricao;

	}

	public function setDescricao($value){
		$this->descricao = $value;
		
	}

	public function getPreco(){
		return $this->preco;
		
	}

	public function setPreco($value){
		$this->preco = $value;
		
	}

	public function getCodigo_lanchonete(){
		$this->codigo_lanchonete = $value;
		
	}

	public function setCodigo_lanchonete($value){
		return $this->codigo_lanchonete;
		
	}


	// CRUD

	// Create

	private function create() {

	}

	// Read

	private function reader() {

	}


	// Update

	private function update() {

	}

	// Delete

	private function delete() {
		
	}

}
?>
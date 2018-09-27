<?php 

class Produto{
	
	private $nome;
	private $preco;
	private $categoria;

	public function __construct($nome, $preco = 18500, Categoria $categoria){
		$this->nome = $nome;
		$this->preco = $preco;
		$this->categoria = $categoria;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function __toString(){
		return "O ".$this->nome." está custando R$".$this->preco." reais e está na categoria ".$this->categoria->getNome()."!";
	}

}
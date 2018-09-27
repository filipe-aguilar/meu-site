<?php
	include_once('Produto.php');
	include_once('Categoria.php');

	$categoria = new Categoria(5, "Teste");

	$produto = new Produto("Carro", 15, $categoria);
	echo $produto->__toString();

?>
<?php

	//Importando a classe

	require_once 'cesta.class.php';
	require_once 'produto.class.php';

	//Instanciando os produtos

	$arroz = new Produto();
	$arroz->setCodigo(123456);
	$arroz->setDescricao("Arroz Branco");
	$arroz->setPreco(3.00);

	$feijao = new Produto();
	$feijao->setCodigo(654321);
	$feijao->setDescricao("Feijão de corda");
	$feijao->setPreco(4.00);

	$tomate = new Produto();
	$tomate->setCodigo(666666);
	$tomate->setDescricao("Tomate cultivado de forma natural");
	$tomate->setPreco(15);

	//Instanciando a cesta

	$cesta = new Cesta();

	//Adicionando os produtos à cesta
	$cesta->adicionarProduto($arroz);
	$cesta->adicionarProduto($feijao);
	$cesta->adicionarProduto($tomate);


	//Exibindo produto específico
	$cesta->exibirProduto(666666);
	echo '<br>';
	echo '<br>';

	//Exibindo a lista de produtos
	$cesta->exibirLista();
	echo "Preço Total: ".$cesta->calcularValor();

?>
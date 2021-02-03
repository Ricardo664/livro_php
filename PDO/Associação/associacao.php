<?php

	//importando as classes

	require_once 'fornecedor.class.php';
	require_once 'produto.class.php';

	//Instanciando o objeto produto

	$fornecedor = new Fornecedor();
	$fornecedor->setCodigo(123456);
	$fornecedor->setRazaoSocial("Empresário do ramo de produtos alimentícios");
	$fornecedor->setCidade("Maracanaú");

	//Instanciando o objeto produto

	$produto = new Produto();
	$produto->setCodigo(123456);
	$produto->setDescricao("Arroz");
	$produto->setPreco(2.00);
	$produto->setQuantidade(10);
	$produto->setFornecedor($fornecedor);

	//Exibindo dados

	echo "------------VENDA-------------".'<br>';
	echo '<br>';
	echo "Código: ".$produto->getCodigo().'<br>';
	echo "Produto: ".$produto->getDescricao().'<br>';
	echo "Preço: ".$produto->getPreco().'<br>';
	echo "Quantidade da venda: ".$produto->getQuantidade().'<br>';
	echo "Código do fornecedor: ".$produto->getFornecedor()->getCodigo();

?>
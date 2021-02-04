<?php

	//importando as classes

	require_once 'fornecedor.class.php';
	require_once 'contato.class.php';

	//Instanciando fornecedor

	$fornecedor = new Fornecedor();
	$fornecedor->setCodigo(123456);
	$fornecedor->setRazaoSocial("Empresário do ramo de gêneros alimentícicios");
	$fornecedor->setCidade("Maracanaú");
	$fornecedor->setContato("Cleidson","cleidson@horroroso.com",988888888);

	//Exibindo dados do fornecedor

	echo "Código: ".$fornecedor->getCodigo().'<br>';
	echo "Razão social: ".$fornecedor->getRazaoSocial().'<br>';
	echo "Cidade: ".$fornecedor->getCidade().'<br>';
	echo $fornecedor->getContato();

?>
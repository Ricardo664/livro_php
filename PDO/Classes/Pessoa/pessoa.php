<?php

	require_once 'pessoa.class.php';

	$pessoa = new Pessoa(1234,"Ricardo Oliveira Sousa Filho",1.73,18,"08/05/2003","Ensino Médio Completo",300);

	$pessoa->setCodigo(123456);
	$pessoa->setNome("Ricardo Oliveira Sousa Filho");
	$pessoa->setAltura(1.73);
	$pessoa->setIdade(18);
	$pessoa->setNascimento("06/01/2003");
	$pessoa->setEscolaridade("Ensino Médio Completo");
	$pessoa->setSalario(550);

	echo $pessoa->getCodigo().'<br>';
	echo $pessoa->getNome().'<br>';
	echo $pessoa->getAltura().'<br>';
	echo $pessoa->getIdade().'<br>';
	echo $pessoa->getNascimento().'<br>';
	echo $pessoa->getEscolaridade().'<br>';
	echo $pessoa->getSalario().'<br>';

	echo '<br>';

	$pessoa->crescer(1);
	$pessoa->formar("Graduado em Análise e Desenvolvimento de Sistemas");
	$pessoa->envelhecer(3);

	echo $pessoa->getAltura().'<br>';
	echo $pessoa->getEscolaridade().'<br>';
	echo $pessoa->getIdade().'<br>';

?>
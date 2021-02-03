<?php

	require_once 'contacorrente.class.php';

	$conta = new ContaCorrente("Nordeste",1234,"05/12/2020","Cleidson","Cleidson@fei",10,100);

	$conta->setAgencia("Bradesco");
	$conta->setCodigo(123456);
	$conta->setData("01/12/2020");
	$conta->setTitular("Ricardo Oliveira Sousa Filho");
	$conta->setSenha("ricardofilho@123");
	$conta->setSaldo(550);
	$conta->setStatus(true);
	$conta->setLimite(150);

	echo $conta->getAgencia().'<br>';
	echo $conta->getCodigo().'<br>';
	echo $conta->getData().'<br>';
	echo $conta->getTitular().'<br>';
	echo $conta->getSenha().'<br>';
	echo $conta->getSaldo().'<br>';
	echo $conta->getStatus().'<br>';
	echo $conta->getLimite().'<br>';
	
	$conta->retirar(50);
	echo '<br>';
	echo $conta->getSaldo();
	

?>
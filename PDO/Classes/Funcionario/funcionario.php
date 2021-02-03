<?php

	require_once 'funcionario.class.php';

	$funcionario = new Funcionario();
	$funcionario->setSalario(230);

	echo "Salario: ".$funcionario->getSalario();

?>
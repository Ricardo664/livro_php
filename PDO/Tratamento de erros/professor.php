<?php
	
	//Importando a classa professor
	require_once 'professor.class.php';

	//instanciando um professor
	$professor = new Professor();
	$professor->setDisciplina("isica");
	$professor->getDisciplina();

?>
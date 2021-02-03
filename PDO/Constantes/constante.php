<?php
	
	class Biblioteca{

		//Declarando constante;

		const NOME = "GTK";

	}

	class Aplicacao extends Biblioteca{

		//Declarando constante

		const AMBIENTE = "Desktop";
		const VERSAO = "7";

		//Método construtor

		public function __construct($nome){

			echo parent:: NOME ."--". self::AMBIENTE ."--". self:: VERSAO."--".$nome.'<br>';

		}

	}


	new Aplicacao("PHP");
	new Aplicacao("JAVA");
	new Aplicacao("PYTHON");
	new Aplicacao("JAVASCRIP");

?>
<?php

	class Aplicacao{

		//Variável estáticas

		static $quantidade;

		//Método construtor
		public function __construct($nome){
			self::$quantidade++;

			echo self::$quantidade.'<br>';
			echo $nome.'<br>';
			echo '<br>';
		}

	}

	new Aplicacao("PHP");
	new Aplicacao("JAVA");
	new Aplicacao("PYTHON");

	echo Aplicacao::$quantidade;

?>
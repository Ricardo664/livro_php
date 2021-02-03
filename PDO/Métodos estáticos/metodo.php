<?php

	//require_once 'teste.txt';

	class Aplicacao{

		//Método estático

		public static function info(){
			$fopen = fopen("teste.txt","r");
			while(!feof($fopen)){
				$linha = fgets($fopen,4000);
				echo $linha.'<br>';
			}
		}

	}

	Aplicacao::info();

?>
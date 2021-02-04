<?php

	class Contato{

		//Atributos

		private $nome;
		private $email;
		private $telefone;

		//Método getter

		public function getContato(){
			return "Nome: ".$this->nome.'<br>'.
					"Email: ".$this->email.'<br>'.
					"Telefone".$this->telefone.'<br>';
		}

		//Método setter

		public function setContato($nome,$email,$telefone){
			$this->nome = $nome;
			$this->email = $email;
			$this->telefone = $telefone;
		}
	}

?>
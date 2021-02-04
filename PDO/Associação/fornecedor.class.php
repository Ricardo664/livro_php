<?php

	class Fornecedor{

		//Atributos

		private $codigo;
		private $razao_social;
		private $cidade;

		//Métodos getters

		public function getCodigo(){
			return $this->codigo;
		}

		public function getRazaoSocial(){
			return $this->razao_social;
		}

		public function getCidade(){
			return $this->cidade;
		}

		//Métodos setters

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function setRazaoSocial($razao_social){
			$this->razao_social = $razao_social;
		}

		public function setCidade($cidade){
			$this->cidade = $cidade;
		}



	}

?>
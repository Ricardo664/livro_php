<?php

	class Fornecedor{

		//Atributos

		private $codigo;
		private $razao_social;
		private $cidade;
		private $contato;

		//Método construtor

		public function __construct(){
			$this->contato = new Contato();
		}

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

		public function getContato(){
			return $this->contato->getContato();
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

		public function setContato($nome,$email,$telefone){
			$this->contato->setContato($nome,$email,$telefone);
		}

	}

?>
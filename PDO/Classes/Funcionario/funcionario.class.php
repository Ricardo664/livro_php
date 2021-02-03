<?php

	class Funcionario{

		//Atributos

		private $codigo;
		private $nome;
		private $nascimento;
		private $salario;

		//Métodos setters

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setNascimento($nascimento){
			$this->nascimento = $nascimento;
		}

		public function setSalario($salario){
			if(is_numeric($salario) and ($salario > 0)){
				$this->salario = $salario;
			}
		}

		//Método getter

		public function getCodigo(){
			return $this->codigo;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getNascimento(){
			return $this->nascimento;
		}

		public function getSalario(){
			return $this->salario;
		}

	}

?>
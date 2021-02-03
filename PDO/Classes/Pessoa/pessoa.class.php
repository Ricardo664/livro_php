<?php

	class Pessoa{
		//Atributos

		private $codigo;
		private $nome;
		private $altura;
		private $idade;
		private $nascimento;
		private $escolaridade;
		private $salario;

		//Método construtor

		public function __construct($codigo,$nome,$altura,$idade,$nascimento,$escolaridade,$salario){
			$this->codigo = $codigo;
			$this->nome = $nome;
			$this->altura = $altura;
			$this->idade = $idade;
			$this->nascimento = $nascimento;
			$this->escolaridade = $escolaridade;
			$this->salario = $salario;
		}

		//Métodos getters

		public function getCodigo(){
			return $this->codigo;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getAltura(){
			return $this->altura;
		}

		public function getIdade(){
			return $this->idade;
		}

		public function getNascimento(){
			return $this->nascimento;
		}

		public function getEscolaridade(){
			return $this->escolaridade;
		}

		public function getSalario(){
			return $this->salario;
		}

		//Métodos setters

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function setAltura($altura){
			$this->altura = $altura;
		}

		public function setIdade($idade){
			$this->idade = $idade;
		}

		public function setNascimento($nascimento){
			$this->nascimento = $nascimento;
		}

		public function setEscolaridade($escolaridade){
			$this->escolaridade = $escolaridade;
		}

		public function setSalario($salario){
			$this->salario = $salario;
		}

		//Métodos workers

		public function crescer($centimetros){
			if($centimetros > 0){
				$this->altura += $centimetros;
			}
		}

		public function formar($titulo){
			$this->escolaridade = $titulo;
		}

		public function envelhecer($anos){
			if($anos > 0){
				$this->idade += $anos;
			}
		}
	}

?>
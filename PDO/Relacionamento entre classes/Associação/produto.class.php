<?php

	class Produto{

		//Atributos

		private $codigo;
		private $descricao;
		private $preco;
		private $quantidade;
		private $fornecedor;

		//Métodos getters

		public function getCodigo(){
			return $this->codigo;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function getQuantidade(){
			return $this->quantidade;
		}

		public function getFornecedor(){
			return $this->fornecedor;
		}

		//Métodos setters

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function setPreco($preco){
			$this->preco = $preco;
		}

		public function setQuantidade($quantidade){
			$this->quantidade = $quantidade;
		}

		public function setFornecedor($fornecedor){
			$this->fornecedor = $fornecedor;
		}

	}

?>
<?php

	 class Produto {

		//ATRIBUTOS
		public $tipo;
		public $marca;
		public $preco;
		public $quantVenda;
		public $quantEstoque;

		//MÉTODO CONSTRUTOR
		public function __construct($tipo,$marca,$preco,$quantEstoque,$quantVenda){
			$this->tipo = $tipo;
			$this->marca = $marca;
			$this->preco = $preco;
			$this->quantVenda = $quantVenda;
			$this->quantEstoque = $quantEstoque;
		}

		//MÉTODOS SETTERS
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}

		public function setMarca($marca){
			$this->marca = $marca;
		}

		public function setPreco($preco){
			$this->preco = $preco;
		}

		public function setQuantVenda($quantVenda){
			$this->quantVenda = $quantVenda;
		}

		public function setQuantEstoque($quantEstoque){
			$this->quantEstoque = $quantEstoque;
		}

		//MÉTODOS GETTERS
		public function getTipo(){
			return $this->tipo;
		}

		public function getMarca(){
			return $this->marca;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function getQuantVenda(){
			return $this->quantVenda;
		}

		public function getQuantEstoque(){
			return $this->quantEstoque;
		}

		//MÉTODOS WORKERS
		public function dados(){
			echo "PRODUTO".'<br>';
			echo "----------".'<br>';
			echo "TIPO: ".$this->getTipo().'<br>';
			echo "MARCA: ".$this->getMarca().'<br>';
			echo "PREÇO: ".$this->getPreco().'<br>'."R$";
			echo "QUANTIDADE DO ESTOQUE: ".$this->getQuantEstoque().'<br>';
			echo "QUANTIDADE DA VENDA: ".$this->getQuantVenda().'<br>';
		}
	}

?>
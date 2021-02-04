<?php

	class Cesta{

		//Atributos

		private $produtos = array();

		//Métodos workers

		//Adicionar produto na cesta
		public function adicionarProduto($produtos){
			$this->produtos[] = $produtos;
		}

		//Exibe a lista de produtos
		public function exibirLista(){
			foreach ($this->produtos as $valor) {	
				$valor->imprimirEtiqueta();
			}
		}

		//Exibe os dados de um produto específico
		public function exibirProduto($codigo){
			foreach ($this->produtos as $valor) {
				if($valor->getCodigo() == $codigo){
					$valor->imprimirEtiqueta();
					break;
				}else{
					continue;
				}
			}
		}

		//Calcula o valor total da cesta
		public function calcularValor(){
			$total = 0;

			foreach ($this->produtos as $valor) {
				$total += $valor->getPreco();
			}

			return $total;
		}

	}

?>
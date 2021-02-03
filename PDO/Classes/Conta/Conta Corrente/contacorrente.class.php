<?php

	require_once '../conta.class.php';
	
	final class ContaCorrente extends Conta{

		//Atributos

		private $limite;

		//Método construtor

		public function __construct($agencia,$codigo,$data,$titular,$senha,$saldo,$limite){
			parent::__construct($agencia,$codigo,$data,$titular,$senha,$saldo);
			$this->limite = $limite;
		}

		//Método getter

		public function getLimite(){
			return $this->limite;
		}

		//Método setter

		public function setLimite($limite){
			$this->limite = $limite; 
		}

		//Método worker

		public function retirar($quantidade){
			$cpmf = 0.05;
			if(($this->getSaldo() + $this->limite) >= $quantidade){
				parent::retirar(($quantidade*$cpmf));
			}else{
				echo "Retirada não permitida";
			}
		}

		//Métodos finais

		public final function transferir($conta,$valor){
			if($this->retirar($valor)){
				$conta->depositar($valor);
			}

			if($this->getTitular() != $conta->getTitular()){
				$this->retirar($this->taxaTransferencia);
			}
		}
	}

?>
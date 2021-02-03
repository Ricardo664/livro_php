<?php
	
	require_once '../conta.class.php';

	final class ContaPoupanca extends Conta{

		//Atributos

		private $aniversario;

		//Método construtor

		public function __construct($agencia,$codigo,$data,$titular,$senha,$saldo,$aniversario){
			parent::__construct($agencia,$codigo,$data,$titular,$senha,$saldo);
			$this->aniversario = $aniversario;
		}

		//Método getter

		public function getAniversario(){
			return $this->aniversario;
		}

		//Método setter

		public function setAniversario($aniversario){
			$this->aniversario = $aniversario;
		}

		//Métodos workers

		public function retirar($quantidade){
			if($this->getSaldo() >= $quantidade){
				parent::retirar($quantidade);
			}else{
				echo "Retirada não permitida";
			}
		}

		//Método final

		public final function transferir($conta,$valor){
			if($this->retirar($valor)){
				$conta->depositar($valor);
			}
		}

	}

?>
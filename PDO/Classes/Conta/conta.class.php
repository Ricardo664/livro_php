<?php

	abstract class Conta{

		//Atributos

		private $conta;
		private $agencia;
		private $codigo;
		private $data;
		private $titular;
		private $senha;
		private $saldo;
		private $status;

		//Método construtor

		public function __construct($agencia,$codigo,$data,$titular,$senha,$saldo){
			$this->agencia = $agencia;
			$this->codigo = $codigo;
			$this->data = $data;
			$this->titular = $titular;
			$this->senha = $senha;
			$this->saldo = $saldo;
			$this->status = true;
		}

		//Métodos getters

		public function getAgencia(){
			if($this->status == true){
				return $this->agencia;
			}else{
				echo "Sua conta está cancelada";
			}
		}

		public function getCodigo(){
			if($this->status == true){
				return $this->codigo;
			}else{
				echo "Sua conta está cancelada";
			}
		}

		public function getData(){
			if($this->status == true){
				return $this->data;
			}else{
				echo "Sua conta está cancelada";
			}
		}

		public function getTitular(){
			if($this->status == true){
				return $this->titular;
			}else{
				echo "Sua conta está cancelada";
			}
		}

		public function getSenha(){
			if($this->status == true){
				return $this->senha;
			}else{
				echo "Sua conta está cancelada";
			}
		}

		public function getSaldo(){
			if($this->status == true){
				return $this->saldo;
			}else{
				echo "Sua conta está cancelada";
			}			
		}

		public function getStatus(){
			if($this->status == true){
				echo "Conta ativa".'<br>';
			}else{
				echo "Conta cancelada".'<br>';
			}
		}

		//Métodos setters

		public function setAgencia($agencia){
			if($this->status == true){
				if($this->agencia != $agencia){
					$this->agencia = $agencia;
				}else{
					echo "O valor que você digitou é igual ao atual".'<br>';
				}
			}
		}

		public function setCodigo($codigo){
			if($this->status == true){
				if($this->codigo != $codigo){
					$this->codigo = $codigo;
				}else{
					echo "O valor que você digitou é igual ao atual".'<br>';
				}
			}
		}

		public function setData($data){
			if($this->status == true){
				if($this->data != $data){
					$this->data = $data;
				}else{
					echo "O valor que você digitou é igual ao atual".'<br>';
				}
			}
		}

		public function setTitular($titular){
			if($this->status == true){
				if($this->titular != $titular){
					$this->titular = $titular;
				}else{
					echo "O valor que você digitou é igual ao atual".'<br>';
				}
			}
		}

		public function setSenha($senha){
			if($this->status == true){
				if($this->senha != $senha){
					$this->senha = $senha;
				}else{
					echo "O valor que você digitou é igual ao atual".'<br>';
				}
			}
		}

		public function setSaldo($saldo){
			if($this->status == true){
				if($this->saldo != $saldo){
					$this->saldo = $saldo;
				}else{
					echo "O valor que você digitou é igual ao atual".'<br>';
				}
			}
		}

		public function setStatus($status){
			$this->status = $status;
		}

		//Métodos Workers

		public function retirar($quantidade){
			if ($this->status == true) {
				if($quantidade > 0){
					$this->saldo -= $quantidade;
				}else{
					echo "O valor que você digitou é 0";
				}
			}else{
				echo "Sua conta está cancelada";
			}
		}

		public function depositar($quantidade){
			if ($this->status == true) {
				if($quantidade > 0){
					$this->saldo += $quantidade;
				}else{
					echo "O valor que você digitou é 0";
				}
			}else{
				echo "Sua conta está cancelada";
			}
		}

		public function obterSaldo(){
			if($this->status == true){
				echo "Saldo: ".$this->saldo;	
			}else{
				echo "Sua conta está cancelada";
			}
			
		}

		//Métodos abstratos

		public abstract function transferir($conta,$valor){
			
		}

	}

?>
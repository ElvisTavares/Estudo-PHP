<?php

class Conta1{
	var $nome;
	var $balance;


	function __construct($nome, $balance){
		$this->nome = $nome;
		

		if ($balance > 0) {
			# code...
			$this->balance = $balance;

		}

	}

	public function deposit($valor){
		if($valor > 0){
			$balance = $balance + $valor;
		}
	}

	public function getBalance(){
		return $this->balance;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	


}

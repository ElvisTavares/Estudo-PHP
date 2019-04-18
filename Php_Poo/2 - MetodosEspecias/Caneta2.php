<?php

class Caneta2{
	public $modelo;
	private $ponta;
	private $cor;


	public function __construct(){
		$this->modelo = "Bic";
		$this->ponta = "0.5";
		$this->cor = "Azul";

	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getPonta(){
		return $this->ponta;
	}

	public function setPonta($ponta){
		 $this->ponta = $ponta;
	}


	public function getCor(){
		return $this->cor;
	}

	public function setCor($cor){
		$this->cor = $cor;
	}


	public function status(){
		echo $this->getCor();
		 $this->setModelo("Lic");
		 echo"<br>";
		 echo $this->getModelo();

	}
}
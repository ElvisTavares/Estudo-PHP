<?php 
require_once "Controlador.php";

class ControleRemoto implements Controlador{

private $volume;
private $ligado;
private $tocando;

public function __construct(){
	$this->setVolume = 50;
	$this->ligado = false;
	$this->tocanddo = false;

}


public function getVolume(){
	return $this->volume;
}

public function setVolume($volume){
	$this->volume = $volume;
}

public function getLigado(){
	return $this->ligado;
}

public function setLigado($ligado){
	$this->ligado = $ligado;
}

public function getTocando(){
	return $this->tocando;
}

public function setTocando($tocando){
	$this->tocando = $tocando;
}



public function ligar(){
	$this->setLigado(true);
}

public function desligar(){
	$this->setLigado(false);
}

public function abrirMenu(){
	echo "<br> Esta Ligado?: ".($this->getLigado()?"SIM":"NÃO");
	echo "<br> Esta Tocando? ".($this->getTocando()?"SIM":"NÃO");
	echo "<br>Volume: ".$this->getVolume();

	for($i=0; $i<=$this->getVolume(); $i=+10){
		echo "I";
	}
}

public function fecharMenu(){
	echo "Fechando menu";
}


}
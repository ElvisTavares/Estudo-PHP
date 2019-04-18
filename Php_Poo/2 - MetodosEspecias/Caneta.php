<?php


class Caneta{
    public $modelo;
    private $ponta;
   private $cor;

public function __construct($m , $c, $p){ // ou function nomedaclasse(){}
    //$this->cor = "Azul";
    $this->modelo = $m;
    $this->cor = $c;
    $this->ponta = $p;
}

public function getModelo(){
    return $this->modelo;
}

public function setModelo($m){
    $this->modelo = $m;
}


public function getPonta(){
    return $this->ponta;
}

public function setPonta($p){
    $this->ponta = $p;
}
  
}

<?php 
require_once "Lutador.php";

class Luta{

private $desafiado;
private $desafiante;
private $rounds;
private $aprovada;


public function getDesafiado(){
	return $this->desafiado;
}

public function setDesafiado($desafiado){
	$this->desafiado = $desafiado;
}

public function getDesafiante(){
	return $this->desafiante;

}

public function setDesafiante($desafiante){
	$this->desafiante = $desafiante;
}

public function getRouds(){
	return $this->rounds;

}

public function setRouds($rounds){
	$this->rounds = $rounds;
}

public function getAprovada(){
	return $this->aprovada;

}

public function setAprovada($aprovada){
	$this->aprovada = $aprovada;
}

public function marcarLuta($l1, $l2){
	if ($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2) {
		$this->aprovada = true;
		$this->desafiado = $l1;
		$this->desafiante = $l2;


	}else{
		$this->aprovada = false;
		$this->desafiado = null;
		$this->desafiante = null;
	}
}


public function lutar(){
	if ($this->aprovada) {
		echo "DESAFIADO";
		$this->desafiado->apresentar();
		echo "DESAFIANTE";
		$this->desafiante->apresentar();

		$venc = rand(0,2);

		switch($venc){
			case 0:
			echo "EMPATE";
			$this->desafiado->empatarLuta();
			$this->desafiante->empatarLuta();
			break;

			case 1:
				echo "VENCEDOR";
				echo $this->desafiado->getNome();
				$this->desafiado->ganharLuta();
				$this->desafiante->perderLuta();
				break;

			case 2:  
				echo "VENCEDOR";
				echo $this->desafiante->getNome();
				$this->desafiante->ganharLuta();
				$this->desafiado->perderLuta();
				break;
		}



	}else{
		echo "A luta não pode acontecer";

	}
}

}

 ?>
<?php 
require_once "Lutador.php";
require_once "Luta.php";

// $l1 = new Lutador("Goku","Japonesa",80,1.78,80,6,0,1);

// $l1->apresentar();


$l= array();
$l[0] = new Lutador("Goku","Japonesa",80,1.78,80,6,0,1);
$l[1] = new Lutador("Vegeta","Japonesa",84,1.78,75,6,3,1);

$luta = new Luta();

$luta->marcarLuta($l[0], $l[1]);
$luta->lutar();

 ?>
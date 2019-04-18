<?php
/**
 * Created by PhpStorm.
 * User: Elvis
 * Date: 16/04/2019
 * Time: 21:23
 */

//$n = array("Elvis", "Jimmy","Morty", "Rick");
//
//foreach($n as $personagens){
//    echo "Personagens: ".$personagens."<br>";
//
//}


//$n = array(
//  array("nome"=>"Morty", "idade"=>15),
//  array("nome"=>"Rick","idade"=>70)
//);
//
//foreach($n as $p){
//    echo "Nome: ".$p["nome"]." - Idade: ".$p["idade"]. "<br>";
//}

$nome = array(
    "nome"=>"Rick",
    "idade"=>80,
    "pais"=>"USA"
);

foreach($nome as $chave=>$dado){
    echo $chave ." = " .$dado. "<br>";
}
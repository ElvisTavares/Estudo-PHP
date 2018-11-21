<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 10/11/18
 * Time: 17:24
 */

 $pessoas = array();

 array_push($pessoas, array( // Array_push adciona depos do array criado
    'nome'=>'Joao',
    'idade'=> 20
 ));

 array_push($pessoas,array(
    'nome'=>'Glaucio',
    'idade'=>25
 ));

 print_r($pessoas);
 echo"<br>";
 print_r($pessoas[0]);
echo"<br>";
print_r($pessoas[0]['nome']);
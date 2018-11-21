<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 06/11/18
 * Time: 23:33
 */

$nome = "Vegeta";

function dbz(){
    global $nome;
    echo $nome;
}

dbz();

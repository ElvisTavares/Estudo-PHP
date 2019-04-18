<?php

    include_once "Conta.php";

    $conta = new Conta();

    $conta->agencia = 12222;
    $conta->conta = 11222;
    $conta->saldo = 23;
    $conta->limite = 300;

    $disponivel = $conta->saldo + $conta->limite;

    echo $disponivel;
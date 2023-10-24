<?php

class Conta
{
    public $agencia;
    public $codigo;
    public $dataDeCriacao;
    public $titular;
    public $senha;
    public $saldo;
    public $cancelada;

function retirar()
{
    if ($quantia > 0) {
        $this->saldo -= $quantia;
    }
}

function depositar()
{
    if ($quantia > 0) {
        $this->saldo += $quantia;
    }
}

function obterSaldo()
{
    return $this->saldo;
}

}

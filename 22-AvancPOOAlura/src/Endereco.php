<?php

class Endereco 
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade,string $rua,string $bairro,string $numero)
    {
        $this->cidade = $cidade;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->numero = $numero;
    }

    public function getCidade() : string
    {
        return $cidade;
    }

    public function getRua() : string
    {
        return $rua;
    }

    public function getBairro() : string
    {
        return $bairro;
    }

    public function getNumero() : string
    {
        return $numero;
    }
}
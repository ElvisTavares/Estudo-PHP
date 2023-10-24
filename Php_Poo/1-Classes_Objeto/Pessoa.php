<?php

class Pessoa
{
    public $codigo;
    public $nome;
    public $altura;
    public $idade;
    public $nacimento;
    public $escolaridade;
    public $salario;

    function crescer()
    {
        if ($centimetros > 0) {
            $this->altura += $centimetros;
        }
    }

    function formar()
    {
        $this->escolaridade = $titulacao;
    }

    function envelhecer()
    {
        if ($anos > 0) {
            $this->idade += $anos;
        }
    }
}

<?php

class Pessoa
{
    public $nome;
    public $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() : string
    {
        return $nome;
    }

    public function getCpf() : string
    {
        return $this->cpf->recuperaNumero();
    }

    public function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo 'Nome precisa ter pelo menos 5 caracteres';
            exit();
        }
    }
}
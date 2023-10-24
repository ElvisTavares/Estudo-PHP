<?php

class Produto
{
    public $codigo;
    public $descricao;
    public $preco;
    public $qunatidade;

    function ImprimeEtiqueta()
    {
        print 'Código: ' . $this->codigo. "\n";
        print 'Descrição: ' . $this->descricao . "\n";
    }
}

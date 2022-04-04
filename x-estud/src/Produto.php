<?php

class Produto
{
    private string $nome;
    private int $codigo;
    private float $preco;
    private int $validade;
    private int $fabricacao;
    private int $quantidade;

    /**
     * @param string $nome
     * @param int $codigo
     * @param float $preco
     * @param int $validade
     * @param int $fabricacao
     * @param int $quantidade
     */
    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->codigo = 0;
        $this->preco = 0;
        $this->validade = 0;
        $this->fabricacao = 0;
        $this->quantidade = 0;

    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function addProduto($codigo, $preco, $validade) : void
    {
        $this->codigo = $codigo;
        $this->preco = $preco;
        $this->validade = $validade;
    }


    /**
     * @return int
     */
    public function getCodigo(): int
    {
        return $this->codigo;
    }

    /**
     * @return float|int
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @return int
     */
    public function getValidade(): int
    {
        return $this->validade;
    }

    /**
     * @return int
     */
    public function getFabricacao(): int
    {
        return $this->fabricacao;
    }

    /**
     * @return int
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }





}
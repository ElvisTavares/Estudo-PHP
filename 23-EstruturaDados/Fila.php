<?php

class Fila
{
    private array $fila;
    private int $tamanho;

    public function __construct()
    {
        $this->fila = [];
        $this->tamanho = 0;
    }

    public function adcionarNoFinal(string $nome): void
    {
        $this->fila[] = $nome;
        $this->tamanho++;

    }

    public function mostarQuemEstaNaFila(): void
    {
        foreach ($this->fila as $item){
            print_r("Nome: {$item}. \n");
        }
    }

    public function quantidadeDeItens(): int
    {
        return $this->tamanho;
    }

    public function removerDoInicio()
    {
        array_shift($this->fila);
        $this->tamanho--;
    }
}

$filaBanco = new Fila();
$filaBanco->adcionarNoFinal("Goku");
$filaBanco->adcionarNoFinal("Curirin");
$filaBanco->adcionarNoFinal("Picolo");
$filaBanco->adcionarNoFinal("Freeza");
$filaBanco->adcionarNoFinal("Vegeta");
$filaBanco->mostarQuemEstaNaFila();

print_r("\n\n");

$filaBanco->removerDoInicio();
$filaBanco->mostarQuemEstaNaFila();
print_r("Qauntidade de pessoas na fila: {$filaBanco->quantidadeDeItens()} \n\n");

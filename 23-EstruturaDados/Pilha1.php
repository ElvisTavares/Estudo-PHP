<?php

class Pilha1
{
    private array $pilha;
    private int $tamanho;

    public function __construct()
    {
        $this->pilha = [];
        $this->tamanho = 0;
    }

    public function adcionarNoInicio(string $nomeJogo): void
    {
        array_unshift($this->pilha, $nomeJogo); //adciona um ou mais elemento no inicio de um array
        $this->tamanho++;
    }

    public function mostarIntens(): void
    {
        foreach($this->pilha as $item){
            print_r("Nome do jogo =>  {$item}. \n");
        }
    }

    public function quantidadeItens(): int
    {
        return $this->tamanho;
    }

    public function removerDoInicio(): void
    {
        array_shift($this->pilha); //retira o primeiro elemento de um array
        $this->tamanho--;
    }


}

$pilhaDeJogos = new Pilha1();

$pilhaDeJogos->adcionarNoInicio("god of war");
$pilhaDeJogos->adcionarNoInicio("PES");
$pilhaDeJogos->adcionarNoInicio("GTA5");
$pilhaDeJogos->mostarIntens();

print_r("\n\n");
print_r("Numero de jogos: {$pilhaDeJogos->quantidadeItens()}");
print_r("\n\n");

$pilhaDeJogos->removerDoInicio();
$pilhaDeJogos->mostarIntens();
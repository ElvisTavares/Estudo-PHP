<?php

require_once 'src/Pessoa.php';
require_once 'src/Funcionario';
require_once 'src/CPF.php';
require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';


$teste = new Funcionario('Elvis', new CPF('123.456.789-10'),'Dev');
var_dump($teste);
$end1 = New Endereco('Pelotas', 'Rua lalal', 'Areal', '1045');
$cliente = new Titular(new CPF('123.456.789-10'), 'Master chief', $end1); // titular recebe um cpf no construtor
$conta1 = new Conta($cliente);
$conta1->deposita(300);

echo $conta1->recuperaNomeTitular() . PHP_EOL;
echo $conta1->recuperaCpfTitular() . PHP_EOL;
echo $conta1->recuperaSaldo() . PHP_EOL;

$end2 = new Endereco('Cidade do leste','Rua 1', 'Bairro lok','4542');
$cliente2 = new Titular(new CPF('123.365.698-55'), 'Juca Loko', $end2);
$conta2 = new Conta($cliente2);
$conta1->deposita(5000);
var_dump($conta2);
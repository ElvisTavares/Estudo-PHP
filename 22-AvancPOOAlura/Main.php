<?php

require 'src/Pessoa.php';
require 'src/Funcionario.php';
require 'src/CPF.php';

$func = new Funcionario('Wlaker', new CPF('123.456.789-10'), 'Vagabundo');

var_dump($func);
<?php

require_once 'Produto.php';

$prod = new Produto('Arroz');

$prod->addProduto(5532,19, 2022);

echo "Produto: ". $prod->getNome() . "<br>";
echo "Código: ". $prod->getCodigo(). "<br>";
echo "Preço: ". $prod->getPreco() . "<br>";
echo "Quantidade: " . $prod->getQuantidade();
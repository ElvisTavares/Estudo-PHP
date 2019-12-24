<?php

$nomeProd = filter_input(INPUT_POST ,'nomeProd', FILTER_SANITIZE_STRING);
$marcaProd = filter_Input(INPUT_POST,'marcaProd', FILTER_SANITIZE_STRING);
$precoProd = filter_Input(INPUT_POST,'precoProd', FILTER_SANITIZE_STRING);
$descricProd = filter_Input(INPUT_POST,'descricProd', FILTER_SANITIZE_STRING);

echo $nomeProd;
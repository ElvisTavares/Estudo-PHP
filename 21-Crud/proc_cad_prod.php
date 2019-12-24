<?php

session_start();
include_once "conexao.php";

$nomeProd = filter_input(INPUT_POST ,'nomeProd', FILTER_SANITIZE_STRING);
$marcaProd = filter_input(INPUT_POST,'marcaProd', FILTER_SANITIZE_STRING);
$precoProd = filter_input(INPUT_POST,'precoProd', FILTER_SANITIZE_STRING);
$descricProd = filter_input(INPUT_POST,'descricProd', FILTER_SANITIZE_STRING);

$resultado_prod = "INSERT INTO produtos (nomeProd, marcaProd,precoProd,descricProd) VALUES('$nomeProd', '$marcaProd',
    '$precoProd', '$descricProd' )";

$result_prod = mysqli_query($conn, $resultado_prod);

    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "Produto Cadastrado";
        header("Location:index.php");
    }else{
        $_SESSION['msg'] = "Produto não pode ser cadastrado";
        header("Location: cad_produto.php");
    }
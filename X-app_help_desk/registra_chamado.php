<?php 

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
session_start();

//montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#','-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $_SESSION['id'] . '#' .$titulo . '#'. $categoria . '#' . $descricao. PHP_EOL;
//echo $texto;

    //Abrindo o arquivo
    $arquivo = fopen('arquivo.hd','a');

    //Escrevendo texto no arquivo
    fwrite($arquivo,$texto);

    //Fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');
<?php
session_start();
include "view/cabecalho.php";
?>

<h2>Área Restrita</h2>

    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        };
    ?>
<form action="valida.php" method="POST">
    <label for="">Usuário</label>
    <input type="text" name="usuario" placeholder="Digite seu usuário"><br>

    <label for="">Senha</label>
    <input type="password" name="senha" placeholder="Digite sua senha"><br>

    <input type="submit" name="btLg" value="Acessar">


</form>
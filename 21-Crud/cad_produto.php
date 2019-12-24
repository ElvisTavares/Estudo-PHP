<?php
session_start();
?>
<html>
<head>

</head>

<body>
    <a href="">Cadastrar Produto</a>
    <a href="">Listar Produto</a>

    <h1>Cadastrar Produto</h1>

    <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

    ?>

    <form method="POST" action="proc_cad_prod.php">
        <label for="">Nome do produto:</label>
        <input type="text" name="nomeProd" placeholder="Digite o produto"><br>

        
        <label for="">Marca:</label>
        <input type="text" name="marcaProd" placeholder="informe a Marca do produto"><br>

        <label for="">Preço:</label>
        <input type="text" name="precoProd" placeholder="informe o preco"><br>

        <label for="">Descrição:</label>
        <input type="text" name="descricProd" placeholder=""><br>



        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
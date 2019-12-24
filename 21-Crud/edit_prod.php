<?php

include_once "conexao.php";
$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$result_prod = "SELECT * FROM produtos WHERE id= '$id' ";
$resultado_prod = mysqli_query($conn, $result_prod);
$row_prod = mysqli_fetch_assoc($resultado_prod);
?>

<h1>Editar Usuario</h1>

<form action="proc_edit_prod.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row_produto['id']; ?>">

    <label for="">Produto: </label>
    <input type="text" name="nomeProd" value="<?php echo $row_prod['nomeProd']; ?>"><br>

    <label for="">Marca: </label>
    <input type="text" name="marcaProd" value="<?php echo $row_prod['marcaProd']; ?>"><br>

    <label for="">Preço: </label>
    <input type="text" name="precoProd" value="<?php echo $row_prod['precoProd']; ?>"><br>

    <label for="">Descrição: </label>
    <input type="text" name="descricProd" value="<?php echo $row_prod['descricProd']; ?>">

    
</form>
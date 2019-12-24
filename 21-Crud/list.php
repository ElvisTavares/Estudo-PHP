<?php

include_once "conexao.php";
?>

<h1> Lista de Produtos</h1>

<?php

$result_prod = "SELECT * FROM produtos ";
$resultado_prod = mysqli_query($conn, $result_prod);

while($row_prod = mysqli_fetch_assoc($resultado_prod)){
    echo "Produto: ". $row_prod['nomeProd']. "<br>";
    echo "Marca: " . $row_prod['marcaProd']. "<br>";
    echo "Preço: " .$row_prod['precoProd']. "<br>";
    echo "Descrição: ". $row_prod['descricProd']. "<br>";
    echo "<a href='edit_prod.php?id=". $row_prod['id']."'>Editar</a><br>";
    echo "<a href='apag_prod.php?id=".$row_prod['id']."'>Apagar</a><br><br><hr>";
}

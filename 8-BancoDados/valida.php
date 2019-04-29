<?php

include "conexao.php";

$nome = $_POST["nome"];



$result = "SELECT * FROM personagem WHERE nome LIKE   '%$nome%'";
$resultado = mysqli_query($conn, $result);

while ($row = mysqli_fetch_assoc($resultado)) {
	echo $row['nome']." - ";
	echo $row['idade']. " anos";
	echo "<br>----------------<br>";
}

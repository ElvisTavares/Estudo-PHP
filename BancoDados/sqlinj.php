<?php

include "conexao.php";

$result = "SELECT * FROM personagem";
$resultado = mysqli_query($conn, $result);

while ($row = mysqli_fetch_assoc($resultado)) {
	echo $row['nome']." - ";
	echo $row['idade']. " anos";
	echo "<br>----------------<br>";
}

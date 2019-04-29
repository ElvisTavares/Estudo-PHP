<?php

include "acesso.php";

$nome = "Curirin";
$idade = "55";

$sql = "INSERT INTO tabela SET nome ='$nome', idade='$idade'";
$sql = $pdo->query($sql);

echo "Inserido ".$pdo->lastInsertId();  // mostra ultimo usuario inserido

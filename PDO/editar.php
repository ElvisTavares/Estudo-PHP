<?php 
	include "acesso.php";
	$novoNome = "Son1 goku";

	$sql = "UPDATE tabela SET nome='$novoNome' WHERE nome = 'Son goku'";

	$sql = $pdo->query($sql);

	echo "Nome editado";
 ?>
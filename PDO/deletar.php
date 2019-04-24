<?php 

	include "acesso.php";

	$sql = "DELETE FROM tabela WHERE id = 3";
	$sql = $pdo->query($sql);

	echo "usuario deletado com sucesso";

 ?>
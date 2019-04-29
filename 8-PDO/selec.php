<?php 
	include "acesso.php";

	$sql = "SELECT * FROM tabela";
	$sql = $pdo->query($sql);


	if ($sql->rowCount() > 0) {
		# code...
		
		foreach ($sql->fetchAll() as $nomes) {
			echo "Nome: ".$nomes["nome"]. "<br>";

		}



	}else{
		echo "não";
	}
 ?>
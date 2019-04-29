<?php 

	require "conexao.php";
	require "layout.php";
 ?>

 <a href="adicionar.php">Adicionar Usuário</a>

<table>
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</tr>

	<?php
		$sql = "SELECT * FROM usuarios";
		$sql = $pdo->query($sql);

		if ($sql->rowCount() > 0) {
			# code...
			foreach($sql->fetchAll() as $usuario){
				echo "<tr>";
				echo "<td>". $usuario['nome']. "</td>";
				echo "<td>". $usuario['email']."</td>";
				echo '<td> <a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
				echo "</tr>";


			}
		}

	?>
</table>
<?php 

	require "conexao.php";
	require "layout.php";
 ?>
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
				echo '<td> <a href="editar.php?id='.$usuario['id'].'">Editar</a>';
				echo "</tr>";


			}
		}

	?>
</table>
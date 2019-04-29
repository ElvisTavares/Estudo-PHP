<?php
	require "conexao.php";

	if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
		# code...

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = addslashes($_POST['senha']);

		$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
		$sql = $pdo->query($sql);

		header("Location: index.php");
	}
?>

<form method="POST">
	Nome: <br>
		<input type="text" name="nome"><br>
	E-mail <br>
		<input type="text" name="email"><br>
	Senha: <br>
		<input type="password" name="senha"><br>

		<input type="submit" name="Cadastrar"><br>



</form>
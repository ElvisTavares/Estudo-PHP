<?php 
session_start();
require "conexao.php";

if (isset($_POST['email']) && empty($_POST['email']) == false) {
	# code...

	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));


	$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";

	
	$sql = $pdo->query($sql);

	if ($sql->rowCount() >0) {
		# code...
		$dado = $sql->fetch();

		//print_r($dado);

		$_SESSION['id'] = $dado['id'];

		header("Location: index.php");

	}
}

 ?>
<form method="POST">

	E-mail <br>
		<input type="text" name="email"><br>

	Senha: <br>
		<input type="password" name="senha"><br>


		<input type="submit" name="Entrar" value="Entrar"><br>


</form>
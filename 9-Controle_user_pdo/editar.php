<?php
	require "conexao.php";
	$id = 0;

if (isset($_GET['id']) && empty($_GET['id']) == false) {
		# code...

		$id = addslashes($_GET['id']);

	}


	if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
		# code...
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);

		$sql = "UPDATE usuarios SET nome = '$nome', email= '$email' WHERE id= '$id'";
		$sql = $pdo->query($sql);

		header("Location: index.php");

	}


	$sql = "SELECT * FROM usuarios WHERE id='$id' ";
	$sql = $pdo->query($sql);

	if ($sql->rowCount() > 0) {
			# code...

		$dado = $sql->fetch();

	}else{
		header("Location: index.php");
	}

	?>

	<form method="POST">
	Nome: <br>
		<input type="text" name="nome" value=" <?php echo $dado['nome'] ; ?>"><br>
	E-mail <br>
		<input type="text" name="email" value="<?php echo $dado['email']; ?>"><br>

		<input type="submit" name="atualizar" value="Atualizar"><br>

</form>


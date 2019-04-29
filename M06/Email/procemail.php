<?php 
	if (isset($_POST['nome']) && !empty($_POST['nome'])) {
		# code...

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$msg = addslashes($_POST['msg']);

		$para = "email@mail.com";
		$assunto = "Assunto do e-mail";
		$corpo = "Nome: ".$nome." - E-mail: "." - Mensagem".$msg;
		$cabecalho = "From: email@email.com"."\r\n"."Replay-To: ".$email."\r\n". "X-Mailer: PHP/".phpversion();

		mail($para, $assunto, $corpo, $cabecalho);

		echo "<h2>E-mail enviado</h2>";
		exit;

	}
 ?>
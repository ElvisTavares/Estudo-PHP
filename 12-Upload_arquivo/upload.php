<?php 
$arquivo = $_FILES['arquivo'];

// print_r($arquivo);

if (isset($arquivo['tmp_name']) && empty($arquivo['tmp_name'] == false)) {
	# code...
	$nome_arquivo = md5(time().rand(0,99)).'.png';

	// move_uploaded_file($arquivo['tmp_name'], 'arquivo/'.$arquivo['name']);
	move_uploaded_file($arquivo['tmp_name'], 'arquivo/'.$nome_arquivo);

	echo "Upload OK";


}
 ?>
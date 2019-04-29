
<?php 

$arquivo = $_FILES['arquivo'];

if (isset($_FILES['arquivo'])) {
	# code...

	if (count($_FILES['arquivo']['tmp_name']) > 0) {
		# code...
		for($q = 0; $q < count($_FILES['arquivo']['tmp_name']); $q++){

			$nome_arquivo = md5($_FILES['arquivo']['name'][$q].time().rand(0,999)).'.jpg';


			move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivo/'. $nome_arquivo);
		}
	}

}

 ?>


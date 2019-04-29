<?php 

	$arquivo = "imagem.png";

	$largura = 200;
	$altura = 200;


	list($largura_original, $altura_original) = getimagesize($arquivo);

	$ratio = $largura_original / $altura_original;

	// echo $ratio;

	if ($largura/ $altura > $ratio) {
		# code...
		$largura = $altura * $ratio;
	}else{
		$altura = $largura /$ratio;
	}

	// echo "L ORIGINAL: ".$largura_original." A ORIGINAL".$altura_original;
	// echo "LARGURA: ". $largura. " - ALTURA: ".$altura;

	$imagem_final = imagecreatetruecolor($largura, $altura);

	$imagem_original = imagecreatefrompng($arquivo);

	imagecopyresampled( $imagem_final,$imagem_original, 0,0,0,0, $largura,$altura, $largura_original, $altura_original);

	// header("Content-Type: image/png"); //exibir no nav

	// imagepng($imagem_final, null);

	imagepng($imagem_final, "mini_img.png");

	echo "Imagem redimensionada";





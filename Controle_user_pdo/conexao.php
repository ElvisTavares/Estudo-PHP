<?php 

	$db = "mysql:dbname=banco1;host=localhost";
	$user = "root";
$pass = "1990";

try{
	$pdo = new PDO($db, $user, $pass);

	

}catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}


 ?>
<?php

/*
$conn = new mysqli("localhost", "root", "", "crud");

if($conn->connect_error){
    echo "Error: ".$conn->connect_error;
}

*/


$server = "localhost";
$user = "root";
$pass = "";
$db = "estprodutos";

$conn = mysqli_connect($server, $user, $pass,$db);


<?php

    $conn = new mysqli("localhost", "root","","teste1");

    if($conn->connect_error){
        echo "Error: ".$conn->connect_error;
    }

    $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

    while($row = $result->fetch_assoc()){
        var_dump($row); 
    }
<?php

$conn = new mysqli("localhost", "root", "", "crud");

if($conn->connect_error){
    echo "Error: ".$conn->connect_error;
}


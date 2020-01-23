<?php

session_start();

//$_SESSION['x'] = 'Lalala';

//print_r($_SESSION);


$user_autent = false;

$usuarios_app = array(
    array('email' => 'adm@teste.com','senha' =>'1234'),
    array('email'=>'eu@teste.com', 'senha' =>'loko'),
);

foreach($usuarios_app as $user){


    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $user_autent = true;
    }

    if($user_autent){
        //echo "OK";
        $_SESSION['autenticado'] = "SIM";
         header('Location: home.php');

    }else{
        $SESSION['autenticado'] = "NAO";
        header('Location: index.php?login=erro');
    }
}

/*
foreach($usuarios_app as $user){
    print_r($user);
    echo "<hr>";
        echo "Usuario app: ". $user['email']. " - ". $user['senha'];
    echo "<br>";
    echo "Usuario formulario: " . $_POST['email']. " - ". $_POST['senha'];
    echo "<br>";
}

echo "<pre>";
print_r ($usuarios_app);
echo "</pre>";
*/
//print_r($_GET);

//echo "<br>";
//echo $_GET['email'];
//echo $_GET['senha'];
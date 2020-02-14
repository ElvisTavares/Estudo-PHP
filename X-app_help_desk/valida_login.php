<?php

session_start();

//$_SESSION['x'] = 'Lalala';

//print_r($_SESSION);


$user_autent = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'Administrativo', 2 => 'Usuario');

$usuarios_app = array(
    array('id'=> 1, 'email' => 'adm@teste.com','senha' =>'1234', 'perfil_id' => 1),
    array('id'=> 2, 'email'=>'user@teste.com', 'senha' =>'123' , 'perfil_id' => 1),
    array('id'=> 3, 'email'=>'jose@teste.com', 'senha'=>'123', 'perfil_id' => 2),
    array('id'=> 4, 'email'=>'maria@teste.com', 'senha'=>'123', 'perfil_id' => 2)
);

foreach($usuarios_app as $user){


    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $user_autent = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }

    if($user_autent){
        //echo "OK";
        $_SESSION['autenticado'] = "SIM";
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
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
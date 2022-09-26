<?php

session_start();

if(!isset($_SESSION['telefone'])){
    header("Location: home.php");
}

if(isset($_GET['sair'])){
    session_unset($_SESSION['telefone']);
    session_destroy($_SESSION['telefone']);
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Seja bem vindo a area Restrita.
    <p>
        <a href="home.php">SAIR</a>
    </p>
</body>
</html>
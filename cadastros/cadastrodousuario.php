<?php

include('../config.php');

if(isset($_POST['submit'])) {

$nome = $_POST['nome'];
$cep = $_POST['cep'];
$endereco = $_POST['endereço'];
$telefone = $_POST['telefone'];

$result = mysqli_query($conexao, "INSERT INTO cadastrodousuario (nome, cep, endereço, telefone) VALUES ('$nome', '$cep', '$endereco', '$telefone')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Pedido</title>
    <link rel="stylesheet" href="../estilos/cadastro.css">
    <style>
        input{
            margin: 10px;
        }

        button{
            margin-top: 15px;
        }
    </style>
</head>
<body>
<main>
    <section>
        <h2>Pizzaria - Cadastro do Usuario</h2>
        <form action="cadastrodousuario.php" method="post">
        <label for="inome">Nome e Sobrenome :</label>
        <input type="text" name="nome" id="inome" autofocus required placeholder="Inserir nome completo">
        <br>
        <label for="icep">CEP :</label>
        <input type="text" name="cep" id="icep" required minlength="8" maxlength="8" placeholder="XXXXX-XXX">
        <br>
        <label for="iend">Endereço :</label>
        <input type="text" name="endereço" id="iend" required minlength="8" maxlength="50" placeholder="Inserir endereço">
        <br>
        <label for="itel">Telefone :</label>
        <input type="text" name="telefone" id="itel" required minlength="8" maxlength="14" placeholder="XXX-XXXXX-XXXX">
        <br>
        <br>
        <input type="submit" name="submit" value="CADASTRAR DADOS" class="btn">
        <?php
        if(isset($_POST['submit'])){
            echo "<h1 class='mensagem'>Você foi cadastrado na nossa plataforma com sucesso, seja bem-vindo ! :) </br>
            </br>
            Para prosseguir, basta clicar no botão abaixo.
            </h1>";
            echo "<a href='cadastrodopedido.php' class='next'>FAZER O PEDIDO AGORA</a>";
        } ?>
        </form>
        <p>Processo 1/2</p>
        <a href="../home.php" class="home">HOME</a>
    </section>
</main>
</body>
</html>
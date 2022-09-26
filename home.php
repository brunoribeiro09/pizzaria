<?php

include('config.php');

if(isset($_POST['telefone'])){

    $telefone = $conexao->real_escape_string($_POST['telefone']);

    $sql_code = "SELECT * FROM cadastrodousuario WHERE telefone = '$telefone' ";
    $sql_query = $conexao->query($sql_code) or die ('Falha na conexão') ;

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)) {
        session_start();
        }

        $_SESSION['id'] = $_SESSION['id'];
        $_SESSION['telefone'] = $telefone; 

        header("Location: cadastros/cadastrodousuario.php"); 
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/home.css">
</head>
<body>
    <header>
        <div class="img"></div>
        <div></div>
    </header>
    <main>
        <h1>Olá, Seja Bem-Vindo á Pizzaria do Bruno !</h1>
        <section class="area-login">
            <div>
                <div class="area-interna">
                    <p>Para acessar ao nosso site, basta estar inserindo os dados de login para acessar. :)</p>
                    <form action="home.php" method="post">
                    <?php if (isset($_POST['submit'])) { echo "Dados Inválidos ! Número inválido/ou você ainda não possui um cadastro.";}?>
                    <br>

                    <label for="itel">TELEFONE :</label>
                    <br>
                    <input type="text" name="telefone" id="itel">
                    <br>
                    <input type="submit" name="submit" value="ENTRAR">
                    
                    </form>
                    <p>Ainda não possui uma conta ? :( <br> <a href="cadastros/cadastrodousuario.php" target="_blank">CRIAR CONTA</a></p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
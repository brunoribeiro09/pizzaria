<?php
session_start();

if(!isset($_SESSION['telefone'])){
    header("Location: ../home.php");
}

if(isset($_GET['sair'])){
    session_unset($_SESSION['telefone']);
    session_destroy($_SESSION['telefone']);
    header("Location: ../home.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/cadastro.css">
</head>
<body>
    <main>
        <section>
            <div>
                <h2>Pizzaria do Bruno - Cadastro do Pedido</h2>
            </div>
            <section>
                <details>
                    <summary>Pizzas</summary>
                        <form action="cadastrodopedido.php1" method="post">
                            <label for="ipizza">Calabresa</label>
                            <input type="radio" name="pizza" id="ipizza" checked><br>

                            <label for="ipizza2">Mussarela</label>
                            <input type="radio" name="pizza" id="ipizza2"><br>

                            <label for="ipizza3">Presunto</label>
                            <input type="radio" name="pizza" id="ipizza3"><br>

                            <label for="ipizza4">Frango</label>
                            <input type="radio" name="pizza" id="ipizza4"><br>

                            <label for="ipizza5">Catupiry</label>
                            <input type="radio" name="pizza" id="ipizza5"><br> 
                            <br>
                            <input type="number" name="" id="" minlength="1" placeholder="Unidades" class="number">
                        </form>
                </details>
                <br>
                <details>
                    <summary>Bebidas</summary>

                        <label for="bebida1">Coca-Cola</label>                        
                        <input type="radio" name="bebida" id="bebida1"checked><br>

                        <label for="bebida2">Doly</label>
                        <input type="radio" name="bebida" id="bebida2"><br>

                        <label for="bebida3">Sprite</label>
                        <input type="radio" name="bebida" id="bebida3"><br>

                        <label for="bebida4">Schin</label>
                        <input type="radio" name="bebida" id="bebida4"><br>

                        <label for="bebida5">Fanta-Laranja</label>
                        <input type="radio" name="bebida" id="bebida5"><br>
                        <br>
                        <input type="number" name="" id="" minlength="1" placeholder="Unidades" class="number">
                </details>
            
            </section>
            <br>
            <form action="cadastrodopedido.php" method="post">
                <input type="submit" name ="submit" value="ADICIONAR AO CARRINHO" class="btn">
                <br>
                <?php
                if(isset($_POST['submit'])){
                    echo "<h1 class='mensagem'>Pedido recebido com sucesso ! Iremos prepará-lo e em breve entraremos em contato pelo WhatsApp. <br>:) </h1>";
                }?>
            </form>
            <br>
            <div class="carrinho">
                🛒Ver Carrinho  
            </div>
            <p>Processo 2/2</p>
            <a href="../home.php" class="home">HOME</a>
        </section>
    </main>
</body>
</html>
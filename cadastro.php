<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Realizar Cadastro</title>
</head>
<body>
    <div id="cadastro">
        <h1>Realizar Cadastro</h1>
        <form action="cadastrar.php" method="POST">
            
            <input name="nome" type="text" placeholder="Nome Completo" autofocus>
            <input name="usuario" type="text" placeholder="Username">
            <input name="senha" type="password" placeholder="Senha">
            <input type="submit" value="Cadastrar">
            
            <p id="clique-aqui">Já possui conta, clique <a href="login.php">aqui</a></p>

            <?php if ($_SESSION['cadastro']) { ?>
                <p id="cadastro-realizado">Cadastro realizado com sucesso!</p>
            <?php } else; unset($_SESSION['cadastro']); ?>

        </form>
    </div>
      
</body>
</html>
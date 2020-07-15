<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Loja Virtual</title>
</head>
<body>
    
    <div id="login">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            
            <input name="usuario" name="text" placeholder="Username" autofocus="">
            <input name="senha" type="password" placeholder="Senha">
            <input type="submit" value="Entrar">
            
            <p id="clique-aqui">Ainda não tem conta, <a href="cadastro.php">Cadastrar</a></p>
           
            <?php if (isset($_SESSION['nao_autenticado'])) { ?>
            <div>
                <p id="invalido">Usuário ou senha inválidos.</p>
            </div>
            <?php } else; unset($_SESSION['nao_autenticado']); ?>
        
        </form>
    </div>

</body>
</html>
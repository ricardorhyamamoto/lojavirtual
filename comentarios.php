<?php
    session_start();
    include('verifica_login.php');    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Comentário</title>
</head>
<body>
    <form action="insert_comentario.php" method="POST">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Comentário</label>
        <textarea rows="3" name="comentario"></textarea>
        <input type="submit" name="submit" value="Enviar Comentário">
    </form>
    
</body>
</html>
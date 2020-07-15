<?php 

    session_start();
    include('conexao.php');
    
?>

<?php

    $nome = $_POST['nome'];
    $comentario = $_POST['comentario'];

    $insert = "INSERT INTO comentarios(nome, comentario) VALUES ('$nome', '$comentario')";
    $query = mysqli_query($conexao, $insert);

    header('Location: main.php');
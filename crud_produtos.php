<?php

    function read() {
        $conn = include_once ( __DIR__ . '/conexao.php');
        $sql = 'SELECT * FROM produtos';
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function create($data) {

        $conn = include_once ( __DIR__ . '/conexao.php');

        $campos=implode(",", array_keys($data));
        $valores=implode("','", $data);

        $sql = "INSERT INTO produtos ($campos) VALUES ('$valores')";

        $conn->query($sql);
    }

    function delete($email) {

        $conn = include_once ( __DIR__ . '/conexao.php');
        
        $sql = "DELETE FROM produtos WHERE email = '$nome_produto'";

        $conn->query($sql);
    }

    function updata($data) {
        
        $conn = include_once ( __DIR__ . '/conexao.php');

        extract($data);

        $sql = "UPDATE clientes SET email='$email', cidade='$cidade', estado='$estado' WHERE nome='$nome'";

        $conn->query($sql);
    }
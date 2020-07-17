<?php

    include_once ( __DIR__ . '/crud_produtos.php');

    if (isset($_POST['cadastrar'])) {

        unset($_POST['cadastrar']);

        create($_POST);

        header('location: produtos.php');
    }


    if (isset($_POST['atualizar'])) {
        
        updata($_POST['data']);

        header('location: produtos.php');
    }


    if (isset($_POST['excluir'])) {

        delete($_POST['produto']);

        header('location: produtos.php');
    }
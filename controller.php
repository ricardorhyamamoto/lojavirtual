<?php

    include_once ( __DIR__ . '/crud.php');

    if (isset($_POST['cadastrar'])) {

        unset($_POST['cadastrar']);

        create($_POST);

        header('location: clientes.php');
    }


    if (isset($_POST['atualizar'])) {
        
        updata($_POST['data']);

        header('location: clientes.php');
    }


    if (isset($_POST['excluir'])) {

        delete($_POST['email']);

        header('location: clientes.php');
    }
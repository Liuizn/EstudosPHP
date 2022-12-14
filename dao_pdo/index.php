<?php

    require_once("config.php");

    // $sql = new Database();

    // $usuarios = $sql->select("SELECT carteira FROM clientes");

    // echo json_encode($usuarios);

    $cliente = new Clientes();

    // $cliente->loadById(1);

    $listaClientes = $cliente->getList();

    print_r($listaClientes);

?>
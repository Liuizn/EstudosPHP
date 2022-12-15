<?php

    require_once("config.php");

    // $sql = new Database();

    // $usuarios = $sql->select("SELECT carteira FROM clientes");

    // echo json_encode($usuarios);



    // --- TABELA CLIENTES ---

    $cliente = new Clientes();

    // -- SELECT por ID --

    // $cliente->loadById(1);
    // echo $cliente

    // -- SELECT PEGANDO TUDO --

    // $listaClientes = $cliente->getList();
    // echo $listaClientes;

    // -- CADASTRANDO NOVO USUÁRIO --
    $cliente->setNome("BRUNO HENRIQUE MAMADINHAS");
    $cliente->setEmail("bruno.henrique@yahoo.com");
    $cliente->setCarteira("Motorista");
    $cliente->setLogin("brunelson");
    $cliente->setSenha("123654789");
    $cliente->setDate(date('Y-m-d H:i:s'));

    $cliente->registerCustomer();

    echo $cliente;

?>
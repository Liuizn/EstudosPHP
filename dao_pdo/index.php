<?php
    
    require_once("config.php");

    // $sql = new Database();

    // $usuarios = $sql->select("SELECT carteira FROM clientes");

    // echo json_encode($usuarios);


    // --- TABELA CLIENTES ---
    $cliente = new Cliente();
    
    // -- SELECT por ID --
    // $cliente->loadById(1);
    // echo $cliente



    // -- SELECT PEGANDO TUDO --
    // $listaClientes = $cliente->getList();
    // echo $listaClientes;

    // -- CADASTRANDO NOVO CLIENTE --
    // $cliente->setNome("AAAAAA HENRIQUE MAMADINHAS");
    // $cliente->setEmail("AAAAAA.henrique@yahoo.com");
    // $cliente->setCarteira("Motorista");
    // $cliente->setLogin("brunelson");
    // $cliente->setSenha("123654789");
    // $cliente->setDate(date('Y-m-d H:i:s'));

    // $result = $cliente->insert();



    // -- Atualizando Senha do Cliente
    // $cliente->loadById(1);

    // $cliente->setSenha("Senha NOVA");

    // $result = $cliente->updatePassword();
    


    // --Deletando um Cliente --
    // $cliente->setId(10);
    // $result = $cliente->delete();




    // RESULTADO DO PROCESSO
    // if($result === true)
    // {
    //     echo json_encode("DEU TUDO CERTO");
    // }
    // else
    // {
    //     echo json_encode("DEU TUDO errado");
    // }

?>
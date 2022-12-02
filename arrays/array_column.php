<?php
    #Sobre a função array_column()
    #Imagine que voce tenha um array com vários arrays e um padrão de chaves pré-definido.
    $nosso_array = array(
        array(
            'identificador' => 2135,
            'nome' => 'John',
            'last_name' => 'Doe'
        ),
        array(
            'identificador' => 3245,
            'nome' => 'Sally',
            'last_name' => 'Smith',
        ),
        array(
            'identificador' => 5342,
            'nome' => 'Jane',
            'last_name' => 'Jones'
        ),
        array(
            'identificador' => 5623,
            'nome' => 'Peter',
            'last_name' => 'Doe'
        )
    );

    #Você deseja ter um array com o todos os valores da chave 'nome'

    $array_com_nomes = array_column($nosso_array, 'nome');


    var_dump($array_com_nomes);

?>

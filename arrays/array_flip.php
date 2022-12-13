<?php

    #Imagina que temos 1 array associativo
    
    $array_funcionarios = array(
        'Bruno'  => '2135', 
        'Camila' => '3245', 
        'Esdras' => '5342', 
        'Luiz'   => '5623'
    );

    var_dump($array_funcionarios);

    //Voce deseja transformar os valores dos itens em chave e as chaves em valor.
    $array_funcionarios = array_flip($array_funcionarios);

    var_dump($array_funcionarios);
?>

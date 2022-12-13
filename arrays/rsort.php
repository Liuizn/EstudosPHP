<?php
    //Imagina que temos 1 array 
    
    $array_funcionarios = array('Esdras','Bruno', 'Camila', 'Luiz');

    //E você deseja ordenar seus itens em ordem decrescente.
    rsort($array_funcionarios, SORT_STRING);

    var_dump($array_funcionarios);
?>

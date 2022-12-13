<?php
    //Imagina que temos 4 variáveis
    $Bruno = 'VALOR Bruno';
    $Camila = 'VALOR Camila';
    $Esdras = 'VALOR Esdras';
    $Luiz = 'VALOR Luiz';

    //e você deseja criar um array a partir das variáveis. 
    $array_funcionarios = compact("Bruno", "Camila", "Esdras", "Luiz");
    

    var_dump($array_funcionarios)

?>

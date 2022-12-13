<?php
    //Imagine que voce tenha um array com 9 posições
    //Pega esse aqui.
    $array_com_9_posicoes = array(0,1,2,3,4,5,6,7,8);


    //Você quer criar um array com base no de 9 posições e completar esse array com mais 11 posições, deixando assim com 20 itens.
    $array_com_20_posicoes = array_pad($array_com_9_posicoes, 20, "Complemento");


    var_dump($array_com_20_posicoes);
?>

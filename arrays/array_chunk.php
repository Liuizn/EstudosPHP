<?php
    //Imagina que você quer criar um array com 30 posições.
    
    $array_com_30_itens = range(1, 32, 1);

    //agora voce precisa de dividir em grupos de 2 sendo um array esses grupos.
    
    $array_com_pedacos = array_chunk($array_com_30_itens, 2);

    var_dump($array_com_pedacos);
?>

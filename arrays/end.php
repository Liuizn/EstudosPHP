<?php
    # Sobre a função end().
    # Imagine um array com 10 posições, imagine não toma esse.
    $nosso_array = array("1","2","3","4","5","6","7","8","9","10");


    ## no PHP para percorremos um array existe um ponteiro interno que está alocado na primeira posição.
    ## utilizando a função end(), fazemos este ponteiro ir a ultima posição e retornar esse elemento.

    ##Observe.

    echo end($nosso_array);

?>

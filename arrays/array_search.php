<?php

    // Imagine que voce tem um array associativo com 10 itens.
    //Imagina não, Pega esse.

    $seu_array = array(
        "item 01" => "01",
        "item 02" => "02",
        "item 03" => "03",
        "item 04" => "04",
        "item 05" => "05",
        "item 06" => "06",
        "item 07" => "07",
        "item 08" => "08",
        "item 09" => "09",
        "item 10" => "15450"
    );


    // E voce agora quer saber qual é o indice de um item em específico
    $indice_do_valor_pesquisado = array_search("15450", $seu_array);

    var_dump($indice_do_valor_pesquisado);


?>

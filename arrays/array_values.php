<?php

    // Imagine que voce tem um array associativo com 10 itens.
    //Imagina não, Pega esse.

    $seu_array = array(
        "item 01" => "Valor 01",
        "item 02" => "Valor 02",
        "item 03" => "Valor 03",
        "item 04" => "Valor 04",
        "item 05" => "Valor 05",
        "item 06" => "Valor 06",
        "item 07" => "Valor 07",
        "item 08" => "Valor 08",
        "item 09" => "Valor 09",
        "item 10" => "Valor 10"
    );


    // E voce agora precisa comprimir a seus valores e um único array.
    $seu_array_com_chaves = array_values($seu_array);

    var_dump($seu_array_com_chaves);


?>

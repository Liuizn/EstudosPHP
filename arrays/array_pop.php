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

    var_dump($seu_array);


    // E voce agora precisa remover o seu último item
    array_pop($seu_array);

    var_dump($seu_array);

?>

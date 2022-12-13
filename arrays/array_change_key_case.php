<?php

    // Imagine que voce tem um array associativo com 10 itens.
    //Imagina não, Pega esse.

    $seu_array = array(
        "ItEm 01" => "01",
        "ItEm 02" => "02",
        "ItEm 03" => "03",
        "ItEm 04" => "04",
        "ItEm 05" => "05",
        "ItEm 06" => "06",
        "ItEm 07" => "07",
        "ItEm 08" => "08",
        "ItEm 09" => "09",
        "ItEm 10" => "15450"
    );

    var_dump($seu_array);


    // E voce agora precisa transformar todas elas em caixa alta.
    $seu_array = array_change_key_case($seu_array,CASE_UPPER);
    
    var_dump($seu_array);

    // E voce agora precisa transformar todas elas em caixa baixa.

    $seu_array = array_change_key_case($seu_array,CASE_LOWER);

    var_dump($seu_array);

?>

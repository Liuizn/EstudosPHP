<?php
    # Sobre a função array_push().
    # Imagine um array com 10 posições, imagine não toma esse.
    $nosso_array = array("1","2","3","4","5","6","7","8","9","10"); 
    
    var_dump($nosso_array);

    ## voce deseja precisa inserir um novo elemento neste array e também quer colocar ele por úlitmo.
    ## passe como primeiro parâmetro o seu array a ser inserido e os campos ou array desejado.
    array_push($nosso_array, "11");

    var_dump($nosso_array);

    $array_com_valores = array("12", "13");

    array_push($nosso_array, $array_com_valores);

    var_dump($nosso_array);
?>

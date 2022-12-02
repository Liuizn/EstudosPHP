<?php
    # Sobre a função sort().
    # Imagine um array com 10 posições, imagine não toma esse.

    $nosso_array = array("1","6","7","8","4","5","9","2","3","10"); 

    var_dump($nosso_array);

    #porém dessa vez ele está bagunçado!!!! 
    # se voce quiser organizar terá que utilizar a função sort().

    sort($nosso_array, SORT_NUMERIC);

    var_dump($nosso_array);

?>

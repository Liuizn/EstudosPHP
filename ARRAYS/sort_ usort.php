<?php

    $carros = array("audi", "wolks", "fiat", "buggati");

    echo  "<h1>Méotodo sort </h1>";

    

    sort($carros);

    foreach ($carros as $key => $val)
    {
        echo "fruits[" . $key . "] = " . $val . "\n";
        echo "<br>";
    }

    echo "<hr>";

    echo  "<h1>Méotodo rsort </h1>";

    rsort($carros);

    foreach ($carros as $key => $val)
    {
        echo "fruits[" . $key . "] = " . $val . "\n";
        echo "<br>";
    }

?>
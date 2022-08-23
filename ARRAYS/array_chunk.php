<?php
    echo "<code>";

    $input_array = array('Atlético-MG', 'CRUZEIRO', 'VASCO', 'FLAMENGO', 'PALMEIRAS', 'SÃO PAULO', 'GRÊMIO', 'INTERNACIONAL');
    var_dump(array_chunk($input_array, 2));
    echo "<hr>";
    var_dump(array_chunk($input_array, 2, true));

    echo "</code>";

?>
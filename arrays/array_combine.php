<?php

    # Sobre a função array_combine()

    #Imagina que temos 2 arrays com a mesma quantidade de registros
    
    $array_matricula  = array('2135', '3245', '5342', '5623');

    $array_nome = array('Bruno', 'Camila', 'Esdras', 'Luiz');

    #voce deseja unificar eles. trazendo um array como indice e o outro como valor.

    $array_cliente = array_combine($array_matricula, $array_nome);

    var_dump($array_cliente);

?>

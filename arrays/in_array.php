<?php

    #Imagina que temos 1 array 
    
    $array_funcionarios = array('Bruno', 'Camila', 'Esdras', 'Luiz');

    var_dump($array_funcionarios);

    //Voce deseja verificar a existëncia de alguma informação em específico
    if(in_array("Luiz", $array_funcionarios) === true)
    {
        echo ("- Luiz Existe");
    }
    else
    {
        echo ("- Luiz Não existe");
    }

    

    if(in_array("Rafael", $array_funcionarios) === true)
    {
        echo ("\n- Rafael Existe");
    }
    else
    {
        echo ("\n- Rafael Não existe");
    }
?>

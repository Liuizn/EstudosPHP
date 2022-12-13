<?php 
    // Sobre a função array_diff()
    
    //Imagine que voce tenha 3 arrays com cada um contendo um valor diferente dos outros.
    
    $array_1 = array('1', '2', '3', 'Atlético-MG');
    $array_2 = array('1', '2', '3', 'Cruzeiro');
    $array_3 = array('1', '2', '3', 'América');
    
    //E voce quer trazer em um único array essa diferença entre eles.
    
    $array_com_diferenca = array_diff($array_1,$array_2,$array_3);
    
    var_dump($array_com_diferenca);
?>

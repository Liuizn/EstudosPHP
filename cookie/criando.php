<?php  

    $infoCookie = json_encode(array('nome' => 'Luiz Gabriel'));

    setcookie('teste_curso',$infoCookie, time() + 14400);


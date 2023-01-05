<?php
    if(isset($_COOKIE["teste_curso"]) === true)
    {
        $infoCookie = json_decode($_COOKIE["teste_curso"]);

        var_dump($infoCookie->nome);
    }
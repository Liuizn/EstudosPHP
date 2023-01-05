<?php
    $cep = "31110660";
    $link =  "https://viacep.com.br/ws/{$cep}/json/";

    $api = curl_init($link);
    
    curl_setopt($api, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($api, CURLOPT_SSL_VERIFYPEER , 0);

    $response = curl_exec($api);

    curl_close($api);

    $infoCEP = json_decode($response, true);

    print_r($infoCEP);

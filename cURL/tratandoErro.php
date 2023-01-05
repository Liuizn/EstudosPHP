<?php
    $cep = "31110660";
    $ch = curl_init("https://viacep.co5m.br/ws/{$cep}/json/");

    $ch_options = array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false
    );

    curl_setopt_array($ch, $ch_options);

    // Envia a requisição₢
    curl_exec($ch);

    // Verifica se houve erros e exibe a mensagem de erro
    if($errno = curl_errno($ch))
    {
        $error_message = curl_strerror($errno);
        echo "cURL error ({$errno}):\n {$error_message}";
    }

    // Fecha o manipulador
    curl_close($ch);

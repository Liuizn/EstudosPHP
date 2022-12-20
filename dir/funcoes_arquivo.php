<?php
    // $file = fopen('exemplo.txt', 'w+');

    // fwrite($file, 'TESTE');

    // fclose($file);

    // echo "Arquivo Gerado";


    $file = fopen('arquivoTeste.txt', 'w+');
    fclose($file);
    unlink('arquivoTeste.txt');

    // echo "Arquivo Excluído";

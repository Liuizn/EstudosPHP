<?php
    // $images = 'images';

    // if(is_dir($images) === false)
    // {
    //     mkdir($images);
    //     echo 'Diretório Criado com Sucesso !!!';
    // }
    // else
    // {
    //     rmdir($images);
    //     echo 'Diretório Excluído com Sucesso !!!'; 
    // }

    $data_files = array();

    $images2 = scandir('images2');

    foreach ($images2 as $image)
    {
        if(in_array($image, array('.', '..')) === true) continue;

        $fileName = 'images2' . DIRECTORY_SEPARATOR . $image;

        $fileInfo = pathinfo($fileName);

        $fileInfo['size'] = filesize($fileName);
        $fileInfo['last_modify'] = date('d/m/Y H:m:s',filemtime($fileName));

        array_push($data_files ,$fileInfo);
    }

    echo json_encode($data_files);
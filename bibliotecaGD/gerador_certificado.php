<?php
    $tempate_img = imagecreatefromjpeg("certificado.jpg");

    $titleColor = imagecolorallocate($tempate_img, 0,0,0);

    $purple = imagecolorallocate($tempate_img, 106,90,205);

    imagestring($tempate_img, 25, 450, 150, "EU TE AMO", $titleColor);
    
    imagestring($tempate_img, 35, 450, 250, "MEU AMOR", $purple);
    
    header("Content-type: image/jpeg");

    imagejpeg($tempate_img);

    imagedestroy($tempate_img);

<?php

    session_start();

    $_SESSION['Nome'] = 'Luiz';
    $_SESSION['OS'] = 'Windows';


    echo session_id();

?>

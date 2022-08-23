<?php 

    session_start();

    $_SESSION['nome'] = 'luiz';

    echo $_SESSION['nome'];

    session_unset();


    echo $_SESSION['nome'];
?>
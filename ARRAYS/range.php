<?php

    // The step parameter
    // array(0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100)
    foreach (range(1, 10, 2) as $number)
    {
        echo "<br>";
        echo $number;
    }

    echo "<hr>";

    // Usage of character sequences
    // array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');
    foreach (range('a', 'i',2) as $letter)
    {
        echo "<br>";
        echo $letter;
    }
?>
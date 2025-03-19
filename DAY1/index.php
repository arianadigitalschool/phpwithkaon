<?php

    $x = 120;
    $y = 50;

    // echo $x + $y
    // echo $x - $y
    // echo $x * $y
    // echo $x / $y
    echo $x % $y;

    $a = "Kaon";
    $b = "Krasniqi";

    $c = $a.$b;
    echo " <br> $c \n";

    $the_string = "Kaon Krasniqi";
    echo "<br>".strlen($the_string);
    echo "<br>".str_word_count($the_string);

    $programming = "Programming is not cool";
    echo "<br>".str_replace("not", "very", $programming);

    echo "<br>".strrev($the_string);

?>
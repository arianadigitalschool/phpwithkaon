<?php

    $num = 0;

    if($num<0){
        echo "$num is less than zero";
    }elseif($num==0){
        echo "$num is equal to zero";
    }
    else{
        echo "$num is bigger than zero";
    }

    $age = -13;

    if(($age>12) && ($age<20)){
        echo "<br> You are a teenager <br>";
    }

    switch($age){
        case($age >=0 && $age < 18);
            echo "You are a minor <br>";
            break;
        case($age >=18 && $age <= 25);
            echo "You are an adult <br> ";
            break;
        case($age >25);
            echo "You are a big adult <br>";
            break;
        default:
            echo " <br> Invalid age input <br>";
            break;
    }

   
?>
<?php

//$y = 6; // 1+1=2 // 3 // 4 // 5 // 6 //
// while($y <= 6){
//     echo "<br> The number is: $y <br>";

//     $y++;
// };

// do{
//     echo "The number is $y <br>";
//     $y++;
// }while($y<=5);

for($x=0; $x <=10; $x++){
    echo "The number is: $x <br>";
}

$cars = array("BMW", "Mercedes", "Audi");

foreach ($cars as $value){
    echo "$value <br>";
}

$age = array("John" => "18", "Michael" => "23", "Joe" => "10");

foreach($age as $key => $value){
    echo "$key = $value <br>";
}

$sentence = "Kaon Krasniqi is my student"; // "Kaon, "Krasniqi"
$words = explode(" ", $sentence);

foreach($words as $word){
    echo "$word <br>";

}

?>
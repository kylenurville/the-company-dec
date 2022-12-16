<?php

/********** 2D Array **********/
# assoc - assoc

$market = [
    "yellow" => ["fruit" => "Banana", "vegetable" => "Yellow Bell"],
    "green" => ["fruit" => "Avocado", "vegetable" => "Cucumber"],
    "red" => ["fruit" => "Strawberry", "vegetable" => "Red Cabbage"]
];

// print_r($market);
// echo count($market);            // 3
// echo count($market['yellow']);  // 2

// echo $market;           // Error: Cannot echo an array
// echo $market['yellow']; // Error: Cannot echo an array

// key --> left side
// echo $market['green']['fruit'];     // echo "Avocado";
// echo $market['red']['vegetable'];   // echo "Red Cabbage"

foreach($market as $k1 => $v1){
    // echo "$k1: ";
    foreach($v1 as $k2 => $v2){
        if($k2 == "vegetable"){
            echo $v2;
        }
        echo "<br>";
    }
}
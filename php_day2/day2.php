<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

<?php

// array tasks

// Q1

$colors = ["red" => "red", "white" => "white" , "green" => "green"];

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the"
 . $colors["red"].
 
 "carpet, the" .$colors["green"] .
 "lawn, the " .$colors["white"] .
  "house, the leaden sky. The new president and his first lady. -
Richard M. Nixon";

echo $paragraph;
echo "<hr>";

// Q2

$colors = array("white", "grren" , "red");

echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
echo "<hr>";

// Q3

$cities = array(
    "Netherlands" => "Amsterdam",
    "Greece" => "Athens",
    "Germany" => "Berlin",
);
arsort($cities);

foreach ($cities as $country =>$captial){
    echo "the capital of $country is $captial <br>";
}
echo "<hr>";

// Q4

$color = array(4 => "white" , 6 => "green" , 11 => "red");

echo reset($color);
echo "<hr>";

// Q5

$array = array(1 , 2 , 3 , 4 ,5);
$location =3;
$newitem = '$';

array_splice($array ,$location,0, $newitem);
foreach ($array as $value) {
    echo $value;
};
echo "<hr>";

// Q6

$fruits = array(
"c" => "lemon",
"b" => "orange",
"d" => "apple",
"a" => "banana",
);

ksort($fruits);

foreach ($fruits as $key => $value)
{
    echo " $key = $value<br>";
}
echo "<hr>";

// Q7
    $temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 
                     68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    $averageTemp = array_sum($temperatures) / count($temperatures);
    echo "Average Temperature is: " . number_format($averageTemp, 1) . "<br>";

    sort($temperatures);

    $lowestTemps = array_slice($temperatures, 0, 5);
    echo "List of five lowest temperatures: " . implode(", ", $lowestTemps) . "<br>";

    $highestTemps = array_slice($temperatures, -5);
    echo "List of five highest temperatures: " . implode(", ", $highestTemps) . "<br>";
    echo "<hr>";

    // Q8

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);    
    $mergedArray = array_merge($array1,$array2);
    print_r($mergedArray);
    echo "<hr>";

    // Q9

    function convert($array) {
        echo "Array\n(\n";
        foreach ($array as $item){
            echo strtoupper($item) . "\n";
        }       
        echo ")";
    }
    $colors = array("red", "green", "blue" , "yellow");
    convert($colors);
    echo "<hr>";

    // Q10


    function convertu($array) {
        echo "Array\n(\n";
        foreach ($array as $item) {
            echo strtolower($item) . "\n";
        }
        echo ")";
    }

    $colors = array("RED", "BLUE", "WHITE", "YELLOW");

    convertu($colors);
    echo "<hr>";

    // Q11

    $words = array("abcd", "abc", "de", "hjjj", "g", "wer");
     $lengths = array_map('strlen', $words);
     $shortest = min($lengths);
     $longest = max($lengths);
     echo "The shortest array length is $shortest. The longest array length is $longest.";
     echo "<hr>";
     
     // Q12
     
     $array1 = array(2, 0, 10, 12, 6);
 
     $filteredArray = array_filter($array1, function($num) {
         return $num > 0;
     });
 
     $smallestNonZero = min($filteredArray);
 
     echo $smallestNonZero;
 



?>
    
</body>
</html>
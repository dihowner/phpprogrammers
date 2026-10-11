<?php 
$x = 1; //int
$y = 2.5; //float
$sentence = "Hello, World!"; //string
$result = true; //boolean
$states = ['oyo', 'lagos', 'kano']; //compound data type

var_dump($x);
var_dump($y);
var_dump($sentence);
var_dump($result);
var_dump($states);

echo "<b>Casting to datatypes</b><hr>";

// Casting to datatypes
$x = (int) $x;
$y = (int) $y;

var_dump($y);
echo $y; //2 
?>
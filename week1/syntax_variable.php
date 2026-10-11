<?php

$x = 5;

$y = 10;

$food = "pizza";
$$food = "burger"; // Variable variable

echo "The value of x is: $x and the value of y is: $y";
echo "The value of food is: $food";
echo "The value of pizza is: ${$food}";
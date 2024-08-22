<?php

$str = "Milan";
$str1 = "This is $str";
//echo str_replace("This", "Hey", $str1);
// echo explode(' ', $str1);

$a = array("milan","sanjay","dhaval");

echo $a[0] . "</br>";
echo $a[1]  . "</br>";
echo $a[2];

echo "<br>";

echo "<pre>";
print_r($a);
echo "</pre>";  

//We are the so-called "Vikings" from the north.

$x = "We are the so-called \nr from the north.";

echo $x;
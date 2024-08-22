<?php

//equal (==) operator
$a = 10;   //$a & $b  same value that is true 
$b = 10;
echo $a == $b;

echo "<br>";
echo "<br>";

// identical (===) operator 
$a = 10;  //same valu and same data types that is true 
$b = 10;
echo $a === $b;

echo "<br>";
echo "<br>";

// not equal (!=) operator
$a = 10;  //not same value that is true
$b = 20;
echo $a != $b;

// not equal (<>) operator 
//that is work same not equal (!=)

echo "<br>";
echo "<br>";


// not identical (!==) operator 

$a = 10;  //not same data type and same values that is true 
$b = 10.12;
echo $a !== $b;

echo "<br>";
echo "<br>";


//greaterthan (>) operators 
$a = 15;
$b = 10;
echo $a > $b;

echo "<br>";
echo "<br>";

// lessthan (<) operator
$a = 10;
$b = 13;
echo $a < $b;

echo "<br>";
echo "<br>";


// greaterthan equal (>=) operator 
$a = 10;
$b = 9;
echo $a >= $b;

echo "<br>";
echo "<br>";

//spaceship (<=>) operator 

$a = 10;
$b = 15;
echo $a <=> $b;

echo "<br>";

$a = 10;
$b = 10;
echo $a <=> $b;

echo "<br>";

$a = 30;
$b = 25;
echo  $a <=> $b;
?>
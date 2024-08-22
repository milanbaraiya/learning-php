<?php

//use to array function and create array 
//first type write array
$cars = array("volvo",12,"bmw","ford",34,"toyota");

echo $cars[0] . "<br>";
echo $cars[1] . "<br>";
echo $cars[2] . "<br>";
echo $cars[3] . "<br>";
echo $cars[4] . "<br>";
echo $cars[5] . "<br>";

echo "<br>";
echo "<br>";

//seco type write array
$colors = ['red','green','blue','white'];

echo "<pre>";
print_r($colors);
echo "</pre>";

echo "<br>";
echo "<br>";


//third type write array
//for loop use and creat arrays
$cars = ["volvo",12,"bmw","ford",34,"toyota"];

for($i = 0; $i < 6; $i++){
    echo $cars[$i] . "<br>";
}


echo "<br>";
echo "<br>";

//use to <ul> & <li> tags 
$cars = ["volvo",12,"bmw","ford",34,"toyota"];

echo "<ul>";
for($i = 0; $i < 6; $i++){
    echo "<li> $cars[$i] </li>";
}
echo "<ul>";








?>
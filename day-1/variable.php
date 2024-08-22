<?php

//string variable 
$a = "hey baraiya milan";
echo ($a);
var_dump($a);

echo "<br>";
echo "<br>";

//integer variable
$b = 50;
echo ($b);
var_dump($b);

echo "<br>";
echo "<br>";

//float variable
$c = 70.90;
echo ($c);
var_dump($c);

echo "<br>";
echo "<br>";

//boolean variable
$d = 10;
$e = 12;
$f = $d > $e;
echo ($f);
var_dump ($f);

echo "<br>";
echo "<br>";

//array  variable
$g = array("html","css","javascript");
echo ($g);
var_dump($g);

echo "<br>";
echo "<br>";

//object variable
 class student{   //create a class 
    public $name;
    public $age;
    public $std;

    function work(){  //create a funcion
        echo "i am working";
    }

 } 
 $obj1 = new student();  //creat a new object
$obj1->name = "milan";
$obj1->age = 21;
$obj1->std = 12;
print_r($obj1);

echo "<br>";
echo "<br>";

// creat  a constant variable 
define("milan",5151);
echo milan;
?>
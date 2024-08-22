<?php

// (&&,and ) logical AND operator 
$age = 20;

if($age >= 18 && $age <= 21){
    echo "you are eligible1";
}

echo "<br>";

// (||,or)

if($age >= 18 ||
 $age <= 21){
    echo "you are eligible2";
}

echo "<br>";

// (!,not) operator 
if(!($age >= 21)){
    echo "you are eligible3";
}

echo "<br>";

if($age >= 18 xor $age <= 21){
    echo "you are eligible4";
}

?>
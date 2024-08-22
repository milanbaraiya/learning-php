<?php

// argument by value 
function testing($string){ 
    $string .= " and something extra";  //create variable 
}

$str = "this is string";  // crerate new variable
testing($str); //call a funtcion
echo $str;

echo "<br>";

//argument by refernece(&)

function test(&$string){ 
    $string .= " and something extra";  //create variable 
}

$str = "this is string";  // crerate new variable
test($str); //call a funtcion
echo $str;

<?php
//example 1 
function bhuro($fname="first",$lname="last"){

    $a = "$fname $lname";

    return $a;
    
}
//first print type
echo bhuro("milan","baraiya <br>");

//second print type 

$s = bhuro("royal","bhuro"); // create new variable 

echo $s;

echo "<br>";
echo "<br>";





//example 2 
//fisrt  example
 function sum($math,$eng,$sc){
  $s = $math + $eng + $sc;

  return $s;

 }

 //second function
function percentage($st){

    $per = $st / 3;

    echo $per;
}

//first function  print
 $total = sum(25,50,75);
 echo $total;
echo "<br>";

//second function print
 percentage($total);
?>
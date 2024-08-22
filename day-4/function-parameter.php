<?php
 
 //create fisrt function 
function name($fname="fisrt",$lname="last"){  //default value assign
       echo "Hello $fname $lname.<br>";
}
 
//second function create

function int($a,$b){
    echo $a + $b; 
    echo "<br>";
}
  
//third function create

function integer($a,$b){
    echo $a - $b;

}


// first function call 
name();
name("milan","baraiya");  //parameter argument
name("dhaval","baraiya"); //parameter argument 
name("sanjay","paramar"); //parameter argument
 
//second function call

int(10,20);
int(20,30);

//call  third function 

//create variable 

$one = 30;
$two = 20;

integer($one,$two);
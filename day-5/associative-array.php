<?php
//fist type write for associative array
$age = array("milan" => 22,
             "dhaval" => 23,
             "sanjay" => 27);

//fisrt type print output
echo "<pre>";
print_r($age);  //print_r use 
echo "</pre>";

//second type print output
echo $age["sanjay"] . "<br>";
echo $age["dhaval"];

//<br> tag use of start new line output
echo  "<br>";
echo  "<br>"; 

//fist type write for associative array
$age = [
    "milan" => 22,
    "dhaval" => 23,
    "sanjay" => 27];

$age["dhaval"] = 24; //change dhaval key value
$age["sanjay"] = 26;
echo $age["sanjay"] . "<br>";
echo $age["dhaval"];
?>
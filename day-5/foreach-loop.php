<?php

$colors = ["red","green","blue","white"];

foreach($colors as $milan){
   
       echo $milan . "<br>";
    
}

echo "<br>";
echo "<br>";

//associative aarray to use foreach loop 
$age = ["milan" => 22,"dhaval" => 23, "sanjay" => 27];
echo "<ul>";
foreach($age as $key => $milan){
    echo "<li> $key   =   $milan  </li>";
}
echo "</ul>";
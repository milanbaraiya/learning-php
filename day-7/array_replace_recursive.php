<?php
//array_replace_recusrsive array used to only  multidimensional array 

$array1 = array("a" => array("red"),"b" => array("green","pink"));

$array2 = array("a" => array("blue"),"b" => array("yellow","white"));

$newarray = array_replace_recursive($array1,$array2);
echo "<pre>";
print_r($newarray);
echo "</pre>";
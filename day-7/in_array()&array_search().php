<?php 

// in_array() function 
$name = array('milan','dhaval','sanjay','kiran');

echo in_array('kiran',$name) . "<br>";  //in_array()funcion


//if else conditionn 

if(in_array('dhaval',$name)){
    echo "dhaval is in array";
}
else{
    echo "dhaval is not in array";  
} 

echo "<br>";
echo "<br>";
//multidimentional arrays in_array() function

$a = array(array('m','a'), array('c','k'));

if(in_array(array('m','a'), $a)){
    echo "find successfully";
    }else{
        echo "not find";
}


echo "<br>";
echo "<br>";

//array_search() function 
$cars = array('bmw','volvo','toyota','thar');  //index 'array ' 

echo array_search('toyota',$cars) . "<br> <br>";


$car= array('a' => 'bmw','b' => 'volvo','c' => 'toyota','d' => 'thar'); //associative arrays

echo array_search('thar',$car); //output reaturn key value "d"
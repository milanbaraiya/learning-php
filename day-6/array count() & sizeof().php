<?php 
//single array create 
$fruits = array('orange','banana','apple','grapes');

//count() thru output
echo count($fruits) . "<br> <br>";

//sizeof() thru output
echo sizeof($fruits) . "<br>  <br>";

//multiple array create print value 
$emp = array(
    'name' => array('milan','dhaval','sanjay','ravi'),
    'age'  => array(22,24,27)
);

echo count($emp['name'],1) . "<br> <br>";

//create for loop and output 

$name = array('milan','sanjay','dhaval','kiran','ravi');

$nam = count($name);

for($i = 0; $i < $nam; $i++){
    echo $name[$i] . "<br>";
}

echo "<br>";
echo "<br>";

//array_count_values() function variable 

$name = array('tushar','tushar','satyam','namrata','dharmesh','kano');
echo array_count_values($name); //error show used to echo and only print arrays 

echo "<br>";
echo "<br>";

echo "<pre>";
print_r(array_count_values($name));
echo "</pre>";
<?php
//array replace used two arrays index & associative
//index array examole 1
$names = array('milan','sanjay','dhaval', 'kiran');
$name = array('tushar','satyam','dhamo');

$newArray = array_replace($names,$name);
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";
echo "<br>";


//index array example 2
$names = array('milan','sanjay','dhaval', 2 => 'kiran');
$name = array('tushar','satyam','dhamo');

$newArray = array_replace($names,$name);
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";
echo "<br>";

//index array example 3 & three variable create 
$names = array('milan','sanjay','dhaval', 'kiran');
$name = array('tushar','satyam','dhamo');
$new = array('darshan','dharmesh');

$newArray = array_replace($names,$name,$new);
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";
echo "<br>";



//associative array example 1
$names = array('milan','sanjay','dhaval', 'kiran');
$name = array('a' => 'tushar','b' => 'satyam','c' => 'dhamo');

$newArray = array_replace($names,$name);
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";
echo "<br>";

//associative array exapmle 2
$names = array('milan','sanjay','dhaval', 'kiran');
$name = array('a' => 'tushar', 3 => 'satyam', 'b' => 'dhamo');

$newArray = array_replace($names,$name);
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";
echo "<br>";



<?php



// local variable

function test(){
$a = 10;  //local variable
echo "variable  a inside funcion : $a";
}
test();
echo "variable  a outside funcion : $a";

echo "<br>";
echo "<br>";



//global variable  

//globle example 1 
$a = 30;
function the(){
    echo "variable  a inside funcion : $a";
}
the();
echo "variable  a outside funcion : $a";


echo "<br>";
echo "<br>";


//use global keyword variable
//gloable exapmle 2
$a = 20;
function tes(){
    global $a;  //global  keyword variable
    echo "variable  a inside funcion : $a <br>";
}
tes();
echo "variable  a outside funcion : $a";


echo "<br>";
echo "<br>";


//glable exapmle 3

$x = 20;
$y = 30;
function ankit(){
    global $x , $y;  //global  keyword variable
    $x= $x + $y;
}
ankit(); 
echo $x;

?>


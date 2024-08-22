<?php

echo "hey milan <br>";
echo "hey milan <br>";
echo "hey milan <br>";

goto abc;

echo "hey milan <br>"; //this statement is not print
echo "hey milan <br>";//this statement is not print
echo "hey milan <br>";//this statement is not print
echo "hey milan <br>";//this statement is not print
echo "hey milan <br>";//this statement is not print
echo "hey milan <br>";//this statement is not print

abc:
    echo "hey this is label abc";

echo "<br>";
echo "<br>";

$a = 20;

if($a == 20){
    goto jump;
}

$name = "milan babraiya <br>";

echo $name;

jump :

echo "hey baraiya milan how are you";

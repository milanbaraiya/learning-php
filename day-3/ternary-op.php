<?php
$a = 10;

$ternaryVar = $a == 10 ? 'Your value is matched' : 'Not matched';
echo $ternaryVar;

echo "<br>";

$color = 'red';
$ternaryColor = $color == 'red' ? 'Your value is matched' : 'Not matched';
echo $ternaryColor;

echo "<br>";

$b =21;
($b >20 ) ? $c = "$b is greater" : $c = "$b is not greater";

echo $c;
?>
<?php

$a = 5;     // integer
$b = 51.51;  //float
$c = true;   // boolean
$d = null;  // null
$e = "hello"; //string

$a = (string) $a . "<br>";
$b = (string) $b . "<br>";
$c = (string) $c . "<br>";
$d = (string) $d . "<br>";
$e = (string) $e;   

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
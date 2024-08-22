<?php
//include() function multytime load files
include 'file1.php'; //synax 1
echo "<br>";
include "file1.php"; //syntax 2
echo "<br>";  
//include_unce() one time file load not a maultytime load  
 include_once "file1.php"; //syntax 1

// include_once 'file1.php' . "<br>"; //syntax 2
//include_once is not load multiple file 
 for($i = 0;$i < 10; $i++){
    include_once'file1.php';   
 }

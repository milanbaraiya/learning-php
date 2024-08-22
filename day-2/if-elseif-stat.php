<?php

$per = 70;

if($per >= 80 && $per <=100){
    echo "you are in merit.";
}elseif($per >= 60 && $per < 80){
    echo "you are in first division.";
}elseif($per >= 45 && $per < 60){
    echo "you are in second division.";
}elseif($per >= 33 && $per < 45){
    echo "you are in third division.";
}elseif($per < 33){
    echo "you are fail.";
}else{
    echo "Invalid percentage";
}
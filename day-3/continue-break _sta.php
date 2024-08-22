<?php

for($a = 1; $a <= 10; $a++){
    if($a == 6){  // 6 is not print , 6 is skip 
        continue;
    }
    echo $a;
}

echo "<br>";

for($a = 1; $a <= 10; $a++){
    if($a ==6){
        break;  
    }
    echo $a;

}
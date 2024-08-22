<?php


$marks = array( 
    "krishna" => array
                 ("physics" =>  85,"maths" => 89,"chemistry" => 78),
    
    "salman" => array 
                ("physics" => 78, "maths" =>65,"chemistry" => 76),
                
    "mohan" => array
                ("physics" => 64, "maths" =>82,"chemistry" => 64)            
            
              );


echo "<table border='2px' cellpadiing='5px' cellspacing='0'> 
     <tr>
        <th> Student name</th>
        <th> Physics </th>
        <th> Maths </th>
        <th> Chemistry </th>
     </tr>

";
foreach($marks as $key => $v1){
    echo"<tr> 
       <td>$key </td>"; 
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}           







echo "<pre>";
print_r($marks);
echo "</pre>";
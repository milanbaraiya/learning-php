<?php
$emp = [
            
     [1,"krishna","manager",5000],
     [2,"milan","salesman",6000],
     [3,"krishna","salesman",7000],
     [4,"krishna","salesman",8000],
];


//create table and enter the data foreach loop to used 
 echo "<table border='2px' cellpadding='5px' cellspacing=0px'>";

echo "<tr>
        <th> Emp id.</th>
        <th> Emp name.</th>
        <th> Emp designation.</th>
        <th> Emp salary.</th>      
    </tr>";

foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2  </td>";

    } 
    echo "</tr>";
}
echo "</table>";


echo "<br>";
echo "<br>";
echo "<br>";


//print data used to for loop 
for($row = 0; $row < 4; $row++){
    for($col = 0;$col < 4;$col++){
        echo $emp[$row][$col] . " ";
}
echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

//print data used to $emp[][] 
echo $emp [0][0] . " ";
echo $emp [0][1] . " ";
echo $emp [0][2] . " ";
echo $emp [0][3] . " " , "<br>";

echo $emp [1][0] . " ";
echo $emp [1][1] . " ";
echo $emp [1][2] . " ";
echo $emp [1][3] . " " . "<br>";

echo $emp [2][0] . " ";
echo $emp [2][1] . " ";
echo $emp [2][2] . " ";
echo $emp [2][3] . " " . "<br>";

echo $emp [3][0] . " ";
echo $emp [3][1] . " ";
echo $emp [3][2] . " ";
echo $emp [3][3] . " ";


echo "<br>";
echo "<br>";
echo "<br>";


//print data used to print_r()
echo "<pre>";
print_r($emp);       
echo "</pre>";
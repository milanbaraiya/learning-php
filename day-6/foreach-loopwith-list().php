<?php

$emp = [
    [1,"krishna","manager",6000],
    [2,"suresh","developer",7000],
    [3,"sanjay","sd developer",8000],
    [4,"suresh","backend developer",9000],
];

//simple foreach use to output create
foreach($emp as list($id,$name,$designation,$salary)){
    echo "$id $name $designation $salary <br>";
}

echo "<br>";
echo "<br>";


//table thru create output
echo"<table border='2px' cellpadding='5px' cellspacing='0px'>";

echo "<tr>
        <th> Emp id.</th>
        <th> Emp name.</th>
        <th> Emp designation.</th>
        <th> Emp salary.</th>      
    </tr>";
foreach($emp as list($id,$name,$designation,$salary)){
    echo "<tr> <td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td> <tr>";
}
echo "</table>";
<?php

$emp = [
        [ 
            "id" => 1,
            "name" => "John",
            "age" => 25,
            "salary" => 5000
        ],

        [
            "id" => 2,
            "name" => "Jane",
            "age" => 30,
            "salary" => 6000
        ],

        [
            "id" => 3,
            "name" => "Bob",
            "age" => 35,
            "salary" => 7000
        ],

        [
            "id" => 4,
            "name" => "Bob",
            "age" => 35,
            "salary" => 8000

        ]
    ];


//use foreach loop 
foreach($emp as list("id" => $id, "name" => $name, "age" => $age, "salary" => $salary)){
    echo "$id $name $age $salary <br>";
}

echo "<br>";
echo "<br>";

//create a table 
echo "<table border='4px' cellpadding='5px' cellspacing='0px'>
  <tr>
      <th>Employee id </th>
      <th>Employee name </th>
      <th>Employee age </th>
      <th>Employee salary </th>   
  </tr>

";
foreach($emp as list("id" => $id,"name" => $name, "age" => $age , "salary" => $salary)){
    echo "<tr> <td>$id</td> <td>$name</td> <td>$age</td> <td>$salary</td> </tr>";
}
echo "</table>";
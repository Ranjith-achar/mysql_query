<?php

$db=mysqli_connect("localhost","root","","classicmodels");

$query="SELECT lastname, firstname, jobtitle

FROM
employees

";

$result=mysqli_query($db,$query);

$number_of_rows = mysqli_num_rows($result);
echo "Number of rows fetched are : ". $number_of_rows;


while($row=mysqli_fetch_array($result)){

      echo "<pre>";
      echo print_r($row);
      echo "</pre>";
}

echo "</br>";

$query="SELECT lastname, firstname, jobtitle

FROM
employees LIMIT 10

";

$result=mysqli_query($db,$query);

$number_of_rows = mysqli_num_rows($result);
echo "<h1>Number of rows fetched are : </h1>"."<h2>".$number_of_rows."</h2>";

while($row=mysqli_fetch_array($result)){

      echo "<pre>";
      echo print_r($row);
      echo "</pre>";

}
/*
if we want to check how many rows affected in quey then
we should use function mysqli_num_rows
before while loop
*/
?>

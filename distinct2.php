<?php


/*suppose any feild having repeated same names in coloms


then

we can remove those repated feilds by using


SELCT DISTINCT of that particular colom name it remove
all those records gives uniq results

SELECT DISTINCT lastname-> which gives a uniq result


*/
$db=mysqli_connect("localhost","root","root123","classicmodels");

$query="SELECT DISTINCT lastname FROM employees";

$result=mysqli_query($db,$query);


  while($row=mysqli_fetch_array($result)){
  echo  $row['lastname']."</br>";

}



?>

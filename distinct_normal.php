<?php




/*

ORDER BY NAME


use of ORDER BY clause

which arranges a feild in an assending order

or


DESC order

*/
$db=mysqli_connect("localhost","root","root123","classicmodels");



$query="SELECT lastname FROM employees ORDER BY lastname";

$result=mysqli_query($db,$query);


while($row=mysqli_fetch_array($result)){

  echo  $row['lastname']."</br>";

}



?>




?>

<?php

include 'connectdb.php';

/*

concate -> is a function which concates
two coloms and retuns
SELECT
    concat(contactFirstName,' ',contactLastName) Fullname
FROM
    customers;

$query="SELECT concat(lastname,' ',firstnam) Fullname FROM employees";

$result=mysqli_query($db,$query);
echo var_dump($result);

*/
$query="SELECT
    concat_ws(' ',contactFirstName,contactLastName) as Fullname
FROM
    customers";
  $result=mysqli_query($db,$query);




while($row=mysqli_fetch_array($result)){

      echo "<pre>";
      echo print_r($row);
      echo "</pre>";
}



/*

if we want any seperator between two coloms

then


contcat_ws('*',colomname,colomname)
//were * represents seperator

*/
?>

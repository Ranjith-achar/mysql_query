<?php

include 'connectdb.php';

/*

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

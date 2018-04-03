<?php

include 'connectdb.php';

$query="SELECT
    concat(lastname,' ',firstname) as fullNames
FROM
  employees";
  $result=mysqli_query($db,$query);




while($row=mysqli_fetch_array($result)){

      echo "<pre>";
      echo print_r($row);
      echo "</pre>";
}

/*
if we want space between two names then we should

  concat(lastname,' ',firstname) as fullNames -> where fullnames is a colom name reference to display in table

*/

?>

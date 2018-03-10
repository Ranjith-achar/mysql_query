<?php

/*
SELECT
    lastname, firstname, jobtitle
FROM
    employees
WHERE
    jobtitle = 'Sales Rep';

*/


/*suppose if we want

only a particular all rows of a particular colom valuse





then



*/

$db=mysqli_connect("localhost","root","root123","classicmodels");

$query="SELECT lastname, firstname, jobtitle

FROM
employees

WHERE

jobtitle = 'Sales Rep';

";
//if we give * insted of  lastname, firstname, jobtitle
//this colom names then it gives all colom information of
//those employees with jobTitle='sales rep'

$result=mysqli_query($db,$query);

while($row=mysqli_fetch_array($result)){

      echo "<pre>";
      echo print_r($row);
      echo "</pre>";
}

/*only sales represntitive peopels information is showing

of selected coloms of those employees

*/

/* var_dump =   echo "<pre>";
  echo print_r($row);
  echo "</pre>"; */



?>

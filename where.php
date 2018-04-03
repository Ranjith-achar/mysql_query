<?php
/*


suppose if we have
5 customers detail in 5 rows with some details like city age name

then kwe want only a particular person information


then query woulfd be
select * from table namee where name="";
or select only particular col names wwhere age= 32;




*/

/*
SELECT
    lastname, firstname, jobtitle
FROM
    employees
WHERE
    jobtitle = 'Sales Rep';

*/


/*rough
lastname, firstname, jobtitle,officeCode
n
*/

$db=mysqli_connect("localhost","root","","classicmodels");

$query="SELECT lastname, firstname, jobtitle,officeCode

FROM
employees

WHERE

jobtitle = 'Sales Rep' AND officeCode = '1';

";
//if we give * insted of  lastname, firstname, jobtitle
//this colom names then it gives all colom information of
//to see result see below
//those employees with jobTitle='sales rep'

//



$result=mysqli_query($db,$query);

while($row=mysqli_fetch_array($result)){

      echo "<pre>";
      echo print_r($row);
      echo "</pre>";
}
/*we cann add conditions
like
AND
OR
!=
< less than
> greater than
<=
>=
*/


/*
here is a result what suppose if we given

*

rturning all the coloms infornmation about that particular employess based on condition
Array
(
    [0] => 1165
    [employeeNumber] => 1165
    [1] => Jennings
    [lastName] => Jennings
    [2] => Leslie
    [firstName] => Leslie
    [3] => x3291
    [extension] => x3291
    [4] => ljennings@classicmodelcars.com
    [email] => ljennings@classicmodelcars.com
    [5] => 1
    [officeCode] => 1
    [6] => 1143
    [reportsTo] => 1143
    [7] => Sales Rep
    [jobTitle] => Sales Rep
)
1
Array
(
    [0] => 1166
    [employeeNumber] => 1166
    [1] => Thompson
    [lastName] => Thompson
    [2] => Leslie
    [firstName] => Leslie
    [3] => x4065
    [extension] => x4065
    [4] => lthompson@classicmodelcars.com
    [email] => lthompson@classicmodelcars.com
    [5] => 1
    [officeCode] => 1
    [6] => 1143
    [reportsTo] => 1143
    [7] => Sales Rep
    [jobTitle] => Sales Rep
)
1






*/






?>

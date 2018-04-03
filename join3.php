<?php



/*

inner_join we can use just join
means we can ommit inner keyword
boath are same

*/

/*

SELECT 1stcolomnameformtableone.tablename 2ndcolomnamefrom1sttabel.1sttablename 3rdcolomnamefrom1sttable.1sttablename
       1stcolomnameformtabletwo.tablename2 2ndcolomnamefrom2ndtable.2ndsttablename 3rdcolomnamefrom2ndttable.2ndstablename
       FROM tableone1 inner_join tabletwo on tableone.id=table2.id  (where )

*/

/*first selects all the colom name from boath the tbales

 then FROM condition


 INNER join tablename from firt table and table name from second table

then
on cluase
then
tableanme1.id=tablename2.id

</table>

*/


include 'connectdb.php';
$query="SELECT first_name_table.id as zun,
first_name_table.first_name as can,
last_name_table.id as tan,
last_name_table.last_name as dan
FROM first_name_table JOIN last_name_table";
$result=mysqli_query($db,$query);

/*here this ill not return menas not joins all the rows from baoth
the table it joins only matched values from boath table based on the
primary key and secondary key if we use on clause condition
*/


/*if we use on clause in query bsed on common valuse
feild from boat tables using primary key and forign key*/


/*the query would be*/


/*SELEC  firstnametable.id firstnametable.firstname lastname_table.id lastnametable.lastname
FROM
 firstnamtable INNER JOIN lastNametable on firstnametable.id=lastanme.id






//echo var_dump($result);
/*in inner_join joins each row
from first table joins
each row from second table
*/

/*
"SELECT first_name_table.id as zun,
first_name_table.first_name as can,
last_name_table.id as tan,
last_name_table.last_name as dan
FROM first_name_table JOIN last_name_table";
*/
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<table border="1" width="80%">
<tr>
<th>id of first table</th>
<th>first_name of first table</th>
<th>id of second table</th>
<th>last name of second table</th>
</tr>

<?php

while($row=mysqli_fetch_array($result)){
?>
<tr>
<td> <?php echo $row['zun'];?></td>
<td> <?php echo $row['can'];?></td>
<td> <?php echo $row['tan'];?></td>
<td> <?php echo $row['dan'];?></td>

</tr>
<?php
}

?>

</table>
</body>

</html>

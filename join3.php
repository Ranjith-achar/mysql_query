<?php



/*

inner_join we can use just join
means we can ommit inner keyword
boath are same

*/

/*wrong*/


include 'connectdb.php';


$query="SELECT first_name_table.id,
first_name_table.first_name,
last_name_table.id,
last_name_table.last_name
FROM first_name_table JOIN last_name_table";


$result=mysqli_query($db,$query);


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
<table border="1">
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
<td> <?php echo $row['id'];?></td>
<td> <?php echo $row['first_name'];?></td>
<td> <?php echo $row['id'];?></td>
<td> <?php echo $row['last_name'];?></td>

</tr>
<?php
}

?>

</table>
</body>

</html>
<?php


/*
there is no much differene between this and previous one
because boath are same but only difference is here we are giving alias as
reference for coom names to disply in table
*/



/*
inner_join we can use just join
means we can ommit inner keyword
boath are same

*/
include 'connectdb.php';


$query="SELECT first_name_table.id as zun,
first_name_table.first_name as can,
last_name_table.id as tan,
last_name_table.last_name as dan
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

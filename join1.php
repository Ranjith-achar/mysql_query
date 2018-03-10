<?php



/*

inner_join we can use just join
means we can ommit inner keyword
boath are same

*/




include 'connectdb.php';


$query="SELECT * FROM first_name_table JOIN last_name_table";



$result=mysqli_query($db,$query);


//echo var_dump($result);
/*in inner_join joins each row
from first table joins
each row from second table
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

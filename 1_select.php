<?php

include "connectdb.php";

$query="SELECT * FROM employees";

$result=mysqli_query($db,$query);

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
<th>employeeNumber</th>
<th>lastName</th>
<th>firstName</th>
<th>extension</th>
<th>email</th>
<th>officeCode</th>
<th>reportsTo</th>
<th>jobTitle</th>
</tr>

<?php while($row=mysqli_fetch_array($result)){?>
<tr>
<td><?php echo $row['employeeNumber']?></td>
<td><?php echo $row['lastName']?></td>
<td><?php echo $row['firstName']?></td>
<td><?php echo $row['extension']?></td>
<td><?php echo $row['email']?></td>
<td><?php echo  $row['officeCode']?></td>
<td><?php echo $row['reportsTo']?></td>
<td><?php echo $row['jobTitle']?></td>
</tr>


<?php } ?>

</table>
</body>
</html>

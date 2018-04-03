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

<table border="1">     <!--table tag outside the loop and tr is a static content-->

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

<?php while($row=mysqli_fetch_array($result)){?> <!--we can use mysqli_fecth_object(insted of mysqli fecth arrasy)-->
<tr>                                             <!--but the diffrence is $echo $row->name-->
<td><?php echo $row['employeeNumber']?></td>      <!--we can fetch and returns result set as object insted of array format-->
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

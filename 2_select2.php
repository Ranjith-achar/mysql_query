<?php
/*

what if we want only  selected coloms

like lastname and email office code

*/
include "connectdb.php";

$query="SELECT lastName,email,jobTitle FROM employees";

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

<th>lastName</th>


<th>email</th>

<th>jobTitle</th>
</tr>

<?php while($row=mysqli_fetch_array($result)){?>
<tr>

<td><?php echo $row['lastName']?></td>


<td><?php echo $row['email']?></td>

<td><?php echo $row['jobTitle']?></td>
</tr>


<?php } ?>




</table>


</body>

</html>
<?php

/*
errors

Warning: mysqli_fetch_array() expects
parameter 1 to be mysqli_result, boolean
given in C:\wamp\www\mysql_query\select2.php on line 40


error was in 11 line but showung in line 40

error($query="SELECT lastName,email,jobTitleFROM employees";)

     there was no space bewteenn select coloms and FROM


error->resolve ->($query="SELECT lastName,email,jobTitle FROM employees";)


*/




?>

<?php
include 'connectdb.php';
/*
it evaluates two boolean expression
expresiions are  comparing the the colom heading with colom values
by using AND operatior we can use two expresions

if two expressions return then query ill executes
suppose if we have

player A player B player c  country iplTeam //coloms of crircket players

 SELECT player A , player B from tablename WHERE country='india' AND iplTeam='RCB'


 which returns only indian players from boath colam and rcb players only


*/

$query="SELECT
    customername,
    country,
    state
FROM
    customers
WHERE
    country = 'USA' AND state = 'CA';
";

$result=mysqli_query($db,$query);

while($row=mysqli_fetch_array($result)){

      echo "<pre>";
      echo print_r($row);
      echo "</pre>";
}

/*in above example it not returning all


cutsomer details it fetches only that mathed


country usa and state ca ccustomers


it not selecting and displaying
 the customers who not belong to
those country and state


*/






?>

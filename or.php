<?php
include 'connectdb.php';
/*
it evaluates two boolean expression
expresiions are  comparing the
the colom heading with colom values
by using AND operatior we can use two
expresions

if two expressions return then query
ill executes
suppose if we have

player A player B player c  country iplTeam
 //coloms of crircket players

 SELECT player A , player B from tablename
 WHERE country='india' AND iplTeam='RCB'


 which returns only indian players from boath co
 lam and rcb players only


*/

$query="SELECT
    customername,
    country,
    state
FROM
    customers
WHERE
    country = 'USA' OR state = 'CA';
";

$result=mysqli_query($db,$query);

while($row=mysqli_fetch_array($result)){

      echo "<pre>";
      echo print_r($row);
      echo "</pre>";
}

/*


which evaluates two expresiions

eithther any one is true those records
ill disolay


suppose in colom called country consisti
ng of so
many  countries australiya srilanka n
ewzeland bermuda pakisthn



if we want cricket players information of
only two
teams pakistan and newzeland


then SELECT playername from players WHERE
country=newzelan
d or country =pakistan



suppose if we we want to select playsers
name whose belongs to country india whose
domestic
score more than 24,000

player_name country ipl_team domestic_score
   //colom feilds

then query would be


SELECT player_name FROM table WHERE team='indi
a' or score=>'20,000'

which returns the player name only with
indain country and score should be more
 than 20,000

 for example  raina his score is 19,000 ->he ill no


/** try example/




if we want to check more than two colom values
then we can use IN operator


instead of or

*/

?>

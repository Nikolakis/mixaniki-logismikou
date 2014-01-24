<?php
$mysql_host = "mysql9.000webhost.com";
$mysql_database = "a8643869_testing";
$mysql_user = "a8643869_testUsr";
$mysql_password = "testing1234";
$dbase="a8643869_testing";

$dblink=mysql_connect($mysql_host,$mysql_user ,$mysql_password) or die ("could not connect to database");
mysql_select_db($dbase) or die ("couldnt select that database");


$query="select * from Diklina";//query gia na paroume ola ta stoixeia tou pinaka stats;
$result=mysql_query($query) or die ("couldnt query stats correctly");

while($row=mysql_fetch_array($result))
{
echo $row["Id"];
echo $row["name"];
}


?>
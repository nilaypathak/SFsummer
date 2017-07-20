<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';

$mysql_db='userdata';
if(!($con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db))){
	die("could not connect");
}

?>
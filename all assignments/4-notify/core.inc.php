<?php
ob_start();
session_start();
$current_file = $_SERVER["SCRIPT_NAME"];
$http_referer = @$_SERVER["HTTP_REFERER"];

function loggedin(){
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
		return true;
	return false;
}
function getfield($field){
	/*$mysql_host='mysql.hostinger.in';
	$mysql_user='u568092389_nilay';
	$mysql_pass='Sanchita1*';

	$mysql_db='u568092389_udata';*/
	$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';

$mysql_db='userdata';
	if(!($con=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db))){
		die("could not connect");
	}
	$user_id= $_SESSION['user_id'];
	$query="SELECT `$field` FROM `users` WHERE id='$user_id'";
	if($query_run=mysqli_query($con,$query)){
		$row=mysqli_fetch_assoc($query_run);
		return $row[$field];
	} 

}

?>
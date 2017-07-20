<?php
include'core.inc.php';
include'ConnectDatabase.php';
$time=time();
$user_id=$_SESSION['user_id'];
$query="UPDATE `users` SET  `online` = '$time' WHERE `users`.`id` = '$user_id';";
$query_run=mysqli_query($con,$query);
session_destroy();
header("Location: ".$http_referer);
?>
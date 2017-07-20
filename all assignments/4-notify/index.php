<?php

include'ConnectDatabase.php';
include'core.inc.php';
include 'layout.php';
if(loggedin()){
	
	header("Location:profile.php");
	
	}
else
	include'loginform.php';
?>

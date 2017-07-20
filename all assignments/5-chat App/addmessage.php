<?php
include'ConnectDatabase.php';
include'core.inc.php';
if(isset($_GET['message'])&&isset($_GET['receiver']))
{
	$message= $_GET['message'];
	$receiver=$_GET['receiver'];
	$user_id=$_SESSION['user_id'];
	$time=time();
	if(!empty($message))
	{
		echo "hello".$message.$receiver;
		
		
			$query="INSERT INTO `messages` VALUES('','$receiver','$user_id','$message','$time','1')";
				if($query_run=mysqli_query($con,$query))
					echo "success";
				
		}
	}

?>
<?php
$error='';
if(isset($_POST['username'])&&isset($_POST['password']))
{
	$username= $_POST['username'];
	$password= $_POST['password'];
	$password_hash=md5($password);
	if(!empty($username)&&!empty($password))
	{
		$query="SELECT `id`FROM `users` WHERE username='$username' AND password='$password_hash'";
		if($query_run=mysqli_query($con,$query))
		{
			$query_num_rows= mysqli_num_rows($query_run);
			if($query_num_rows==0)
			{
				$error=$error.'<br>Invalid Username/Password';
			}
			else if($query_num_rows==1)
			{
				
				$row=mysqli_fetch_assoc($query_run);
				$user_id=$row['id'];
				$_SESSION['user_id']=$user_id;
				header('Location:index.php');
			}
		}
		
	}else{$error=$error.'<br>Enter Username/Password';}
}
include 'login.php';
?>

<!--
<form action="<?php echo $current_file;?>" method="POST">
Username:<input type="text" name="username" ><br>
Password:<input type="password" name="password" ><br>
<input type="submit" value="Submit"> 

</form>-->
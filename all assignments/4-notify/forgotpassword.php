<?php
include'ConnectDatabase.php';
include'core.inc.php';
include 'layout.php';
$error='';
$username="";
$email="";
if(!loggedin()){
	if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['confirm_password']))
	{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_hash=md5($password);
	$password_again=$_POST['confirm_password'];
	$email=$_POST['email'];
	if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($email)){
		if($password!=$password_again){
			$error=$error.'<br>Passwords do not match';
		}
		else{
			$query="SELECT `id`FROM `users` WHERE username='$username' AND `email`='$email' ";
		if($query_run=mysqli_query($con,$query))
		{
			$query_num_rows= mysqli_num_rows($query_run);
			if($query_num_rows!=1)
			{
				$error=$error.'Invalid Username/email';

			}
			else 
		 	{
				$query="UPDATE `users` SET `password` = '$password_hash' WHERE `users`.`username` = '$username';";
				if($query_run=mysqli_query($con,$query))
				{
					 header("Location:passwordupdatesuccess.php");
				}
				else{
					$error=$error.'<br>Sorry we could not update password at the moment,Please try again later.';
				}
			}
		}
		
	}}
	else{
		$error=$error.'<br>All fields are required';
	}
	}
		
?>

<div class="register-page">
  <div class="form form-register">
   
    <form class="login-form" method="POST" action="forgotpassword.php">
	<h3 style="font-weight:bold;">Forgot Password? No Problem!<h3>
	<h4>Fill in Your details and select new password</h4>
	<label for="username"><span class="glyphicon glyphicon-user" style="font-size:24px;"></span></label>
      <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $username;?>" required/>
	  <label for="email"><span class="glyphicon glyphicon-envelope" style="font-size:24px;"></span></label>
      <input type="email" name="email" id="email"placeholder="Email Address" value="<?php echo $email;?>" required />
	  <label for="password"><span class="glyphicon glyphicon-lock" style="font-size:24px;"></span></label>
      <input type="password" name="password" id="password" placeholder="New Password" required />
	  <label for="confirm_password"><span class="glyphicon glyphicon-lock" style="font-size:24px;"></span></label>
      <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required />
	  
      <button style="font-weight:bold;">Update Password</button>
      <p class="message">Remember Password? <a href="index.php">Sign In</a></p>
	  <?php echo '<h5 style="color:red; font-weight:bold;">'.$error.'</h5>';?>
    </form>
  </div>
</div>
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
<?php
}
else{
	echo '<div class="register-page">
    <div class="form form-register">
		<h2>You are Logged In.</h2>
		<h3>Please <a href="logout.php" style="color:76b852;">Log Out</a> to Change Password</h3>
    </div>
</div>';
}

?>
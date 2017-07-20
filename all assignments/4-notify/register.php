<?php
include'ConnectDatabase.php';
include'core.inc.php';
include 'layout.php';

$error='';
$username="";
$email="";
$firstname="";
$lastname="";
if(!loggedin()){
	if(isset($_POST['username'])&&	isset($_POST['password'])&&	isset($_POST['confirm_password'])&&	isset($_POST['email'])&&	isset($_POST['firstname'])&&isset($_POST['lastname']))
	{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_hash=md5($password);
	$password_again=$_POST['confirm_password'];
	$email=$_POST['email'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($email)&&!empty($firstname)&&!empty($lastname)){
		if($password!=$password_again){
			$error=$error.'<br>Passwords do not match';
		}
		else{
			$query="SELECT `id`FROM `users` WHERE username='$username' ";
			if($query_run=mysqli_query($con,$query))
			{
				$query_num_rows= mysqli_num_rows($query_run);
				if($query_num_rows==1)
				{
					$error=$error.'Username Already Exists,Please select another';
				$username='';}
				else{
					$query="SELECT `id`FROM `users` WHERE  `email`='$email' ";
					if($query_run=mysqli_query($con,$query))
					{
						$query_num_rows= mysqli_num_rows($query_run);
						if($query_num_rows==1)
						{
							$error=$error.'Email Already Exists,Please select another';
							$email='';
							
						}
				
						else 
						{
							$query="INSERT INTO `users` VALUES('','$username','$password_hash','$firstname','$lastname','$email','propic.png')";
							if($query_run=mysqli_query($con,$query))
							{
								 header("Location:registrationsucess.php");
							}
							else{
								$error=$error.'<br>Sorry we could not register you at the moment,Please try again later.';
							}
						}
					}		
				}	
			}
		}
	}
	else{
		$error=$error.'<br>All fields are required';
	}
}
		
?>

<div class="register-page">
  <div class="form form-register">
   
    <form class="login-form" method="POST" action="register.php">
	<h3 style="font-weight:bold;">Create Account!<h3>
	<label for="username"><span class="glyphicon glyphicon-user"></span></label>
      <input type="text" name="username" id="username" placeholder="username" value="<?php echo $username;?>" required/>
	  <label for="email"><span class="glyphicon glyphicon-envelope"></span></label>
      <input type="email" name="email" id="email"placeholder="email address" value="<?php echo $email;?>" required/>
	  <label for="firstname"><i class="fa fa-address-book" style="font-size:24px"></i></span></label>
      <input type="text" name="firstname" id="firstname" placeholder="firstname"value="<?php echo $firstname;?>" required/>
	  <label for="lastname"><i class="fa fa-address-book" style="font-size:24px"></i></span></label>
      <input type="text" name="lastname" id="lastname" placeholder="lastname"value="<?php echo $lastname;?>" required/>
	  <label for="password"><span class="glyphicon glyphicon-lock"></span></label>
      <input type="password" name="password" id="password" placeholder="password" required/>
	  <label for="confirm_password"><span class="glyphicon glyphicon-lock"></span></label>
      <input type="password" name="confirm_password" id="confirm_password" placeholder="confirm password" required/>
	  
      <button>create</button>
      <p class="message">Already registered? <a href="index.php">Sign In</a></p>
	  
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
		<h3>Please <a href="logout.php" style="color:76b852;">Log Out</a> to Create new Account</h3>
    </div>
</div>';
}

?>
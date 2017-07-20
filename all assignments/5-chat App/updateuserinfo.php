<?php
include'ConnectDatabase.php';
include'core.inc.php';
include 'layout.php';


if(loggedin()){
	$error="";
$username=getfield('username');
	$email=getfield('email');
	$firstname=ucwords(getfield('firstname'));
	$lastname=ucwords(getfield('lastname'));
	if(	isset($_POST['email'])&&	isset($_POST['firstname'])&&isset($_POST['lastname']))
	{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$user_id= $_SESSION['user_id'];
	if(!empty($email)&&!empty($firstname)&&!empty($lastname)){
		
				$query="UPDATE `users` SET  `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email' WHERE `users`.`id` = '$user_id';";
				if($query_run=mysqli_query($con,$query))
				{
					 header("Location:updatesuccess.php");
				}
				else{
					$error=$error.'<br>Sorry we could not update your details at the moment,Please try again later.';
				}
			}
		
		
	
	else{
		$error=$error.'<br>All fields are required';
	}
	}
	
		
?>
<div class="container">
<div class="profile-page update-page">
 
   
    <form class="login-form" method="POST" action="updateuserinfo.php">
	<h3 style="font-weight:bold;">Alter the fields you want to change.<h3><br>
	<table class="table ">
    <tbody>
      <tr>
        <td class="bold" style="vertical-align: middle;" ><label for="username">Username:</label></td>
        <td style="vertical-align: middle;" >:</td>
        <td><?php echo $username;?></td>
      </tr>
      <tr>
        <td class="bold" style="vertical-align: middle;"><label for="firstname">Firstname:</label></td>
        <td style="vertical-align: middle;";>:</td>
        <td style="vertical-align: middle;"><input type="text" name="firstname" id="firstname" placeholder="firstname"value="<?php echo $firstname;?>"/></td>
      </tr>
      <tr>
        <td class="bold" style="vertical-align: middle;"> <label for="lastname">Lastname:</label></td>
        <td style="vertical-align: middle;">:</td>
        <td style="vertical-align: middle;"><input type="text" name="lastname" id="lastname" placeholder="lastname"value="<?php echo $lastname;?>"/></td>
      </tr>
	  <tr>
        <td class="bold" style="vertical-align: middle;"><label for="email">Email Address:</label></td>
        <td style="vertical-align: middle;">:</td>
        <td style="vertical-align: middle;"><input type="email" name="email" id="email"placeholder="email address" value="<?php echo $email;?>"/></td>
      </tr>
    </tbody>
  </table>
	
	  <hr />
      <button>Update</button>
      <p class="message">No Changes? <a href="index.php">Go back to Profile Page</a></p>
	  <?php echo '<h5 style="color:red; font-weight:bold;">'.$error.'</h5>';?>
    </form>

</div>
</div>

<?php
}
else{
	echo '<div class="register-page">
    <div class="form form-register">
		<h2>You are not Logged In.</h2>
		<h3>Please <a href="index.php" style="color:76b852;">Log In</a> to Update your Account Info</h3>
    </div>
</div> ';
}

?>
<?php
include'ConnectDatabase.php';
include'core.inc.php';
include 'layout.php';
if(loggedin()){
$user_id= $_SESSION['user_id'];
$query="DELETE FROM `users` WHERE id='$user_id'";
$query_run=mysqli_query($con,$query);
session_destroy();
header("Location:accountdeletesuccess.php");		
?>



<?php
}
else{
	echo '<div class="register-page">
    <div class="form form-register">
		<h2>You are not Logged In.</h2>
		<h3>Please <a href="index.php" style="color:76b852;">Log In</a> to Delete your Account</h3>
    </div>
</div>';
}

?>
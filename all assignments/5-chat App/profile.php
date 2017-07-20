<?php
include'ConnectDatabase.php';
include'core.inc.php';
include 'layout.php';
if(loggedin()){
@$username=getfield('username');
	@$email=getfield('email');
	@$firstname=ucwords(getfield('firstname'));
	@$lastname=ucwords(getfield('lastname'));
	$error='';
	$image=getfield('propic');
	$image='uploads/'.$image;
	if(isset($_FILES['file']['name'])){
		$name=$_FILES['file']['name'];
	$size = $_FILES['file']['size'];
	$type = $_FILES['file']['type'];
	$user_id= $_SESSION['user_id'];
	$tmp_name = $_FILES['file']['tmp_name'];
	$imageFileType = pathinfo($name,PATHINFO_EXTENSION);
	
		if(!empty($name)&&($imageFileType=='png'||$imageFileType=='jpg'||$imageFileType=='gif')){
			$location = 'uploads/';
			$name=str_shuffle('abcdefghijklmnopqrstuvwxyz1234567890').'.'.$imageFileType;
			if(move_uploaded_file($tmp_name,$location.$name)){
				$query="UPDATE `users` SET  `propic` = '$name' WHERE `users`.`id` = '$user_id'";
				if($query_run=mysqli_query($con,$query))
				{
					 header("Location:index.php");
				}
				else{
					$error=$error.'<br>Sorry we could not update your details at the moment,Please try again later.';
				}
				
			}
			else{
				$error=$error.'<br>File upload failed,try again later';
				echo "not ok";
				
		}}else{
				$error=$error.'<br>Please select an image file';
				
			}
	}
	
?>
<head>
<style>

.cover{
	
	display:block;
	position:relative;
	z-index:-1;
	top:-380px;
	width:80%;
	height:530px;
	margin:0 auto;
	background:url(cover.jpg);
	background-repeat:no-repeat;
	background-size:100% 100%;
	
}
.profile-page{
	margin-top:250px;
	margin-bottom:-500px;
}
</style>
</head>
<div class="container">

<div class="profile-page"><br>
<a class="btn btn-primary" href="chat.php" style="float:right; font-size:18px;"><i class="fa fa-sticky-note"></i>  Chat </a><br><br>
<?php echo '<h5 style="color:red; font-weight:bold;">'.$error.'</h5>';?>
<h2 style="font-weight:bold;">My Details</h2><br>
<table class="table table-striped">
    <tbody>
      <tr>
        <td class="bold">Username</td>
        <td>:</td>
        <td><?php echo $username;?></td>
      </tr>
      <tr>
        <td class="bold">Firstname</td>
        <td>:</td>
        <td><?php echo $firstname;?></td>
      </tr>
      <tr>
        <td class="bold">Lastname</td>
        <td>:</td>
        <td><?php echo $lastname;?></td>
      </tr>
	  <tr>
        <td class="bold">Email</td>
        <td>:</td>
        <td><?php echo $email;?></td>
      </tr>
    </tbody>
  </table>
  <a class="btn btn-danger" href="accountdeleteconfirmation.php">Delete Account</a>
  <a class="btn btn-Warning" href="updateuserinfo.php">Change Details</a><br>
	<br><br>
  <div class="alert alert-info alert-dismissable">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Click on the image to change profile picture. </strong>
</div>

</div>
<form method="POST" action="profile.php" enctype="multipart/form-data">
<div class="propic">

<label class="custom-file-upload">
<img src=<?php echo $image;?> style="width:100%; height:100%;">
    <input type="file" name="file" onchange="this.form.submit()"/>
	<div id="newimage" >
	<i class="fa fa-camera"  style=""></i><div id="abcd"> Update Profile Picture</div>	
	</div>	</label>
</div></form>

<div class="username">
<?php echo $firstname.' '.$lastname?>
</div>
<div class="cover"><div>
</div>
<?php
}
else{
	header("Location:index.php");
}?>
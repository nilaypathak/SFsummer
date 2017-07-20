<html>
<head>
 <meta charset="utf-8">
 <title>Nilay Pathak</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet'>
<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 400px;
  padding: 7% 0 0;
  margin: auto;
}
.bold{
	font-weight:bold;
}
.btn-danger{
	width:120px;
	margin:5px;
}
.btn-warning{
	width:120px;
	margin:5px;
}
tr{
	height:60px;
}
td{
	
}

.navbar{
	border-radius:0px;
}
.container{
	width:100%;
}
.username{
	font-size:42px;
	color:white;
	font-weight:bold;
	position:absolute;
	top:-55px;
	left:32%;
	z-index:2;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 400px;
  margin: 0 auto 100px;
  padding: 35px 45px 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.register-page {
  width: 800px;
  padding: 3% 0 0;
  margin: auto;
}

.profile-page{
	position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 80%;
  margin: 170px auto 50px;
  padding: 35px 45px 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form-register {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 800px;
  margin: 0 auto 100px;
  padding: 35px 45px 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 85%;
  border: 0;
  margin:0 0 15px;
  padding: 13px;
  box-sizing: border-box;
  font-size: 16px;
  color:black;
}
.form input:focus {
	background: #f9f290;


}
.update-page input{
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  padding: 13px;
  box-sizing: border-box;
  font-size: 16px;
  color:black;
	
}
.update-page tbody > tr > td{
	border-top:solid 0px black;

}
.update-page{
	margin:50px auto ;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: linear-gradient(90deg, #AA076B 10%, #61045F 90%);;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  transition: background-color 0.1s;
  cursor: pointer;
}
.login-form button{
	font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: linear-gradient(to left, #56ab2f, #a8e063);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 1s ease;
  transition: all 1s ease;
  transition: background-color 0.5s
  cursor: pointer;
	
}
.form-register input{
	width: 41%;
	margin:15px;
}
.form button:hover,.form button:active,.form button:focus {
  background: linear-gradient(to left, #000000, #0f9b0f);
  transition: background-color 0.1s;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #148ce0;
  text-decoration: none;
}
.update-page .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.update-page .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; 
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(90deg, #1A2980 10%, #26D0CE 90%);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
.navbar-brand{
	 font-family: Bangers,'cursive';
	 font-size: 22px;
	 color:white;
	 
}
.btn:hover{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.propic{
	position:absolute;
	top:-90px;
	width:16%;
	left:15%;
	z-index:2;
	border:solid grey 5px;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
input[type="file"] {
    display: none;
}
.custom-file-upload {
    display: inline-block;
	width:100%;
	height:100%;
    cursor: pointer;
	
}
#newimage{
	position:relative;
	width:100%;
	height:50px;
	background-color:rgba(0,0,0,0.5);
	color:white;
	margin-top:-50px;
	font-size:18px;
	z-index:10;
	display:none;
	transition: display 1s ease-in-out;

}
#abcd{
width:75%;
float:right;
}
.propic{
height:230px;}

 .propic:hover #newimage{
   display : block;
 }
 .fa-camera{
	 font-size:30px; padding:10px 2px 10px 5px;
 }
@media screen and (max-width: 800px){
.login-page {
	width: 98%;
  padding: 3% 0 0;
  margin: auto;
}
.register-page {
  width: 98%;
  padding: 3% 0 0;
  margin: auto;
}
.form{
	width:100%;
	padding: 30px 5%;
}
.form-register{
	width:100%;
	padding: 30px 5%;
}

.form input{
	width: 90%;
	margin:0px 0px 30px;
	font-size:17px;
	height:45px;
}
.form-register input{
	width: 90%;
	margin:0px 0px 30px;
}
.form button {
	width:80%;
}

.propic{
	width:30%;
	top:-70px;
}
.profile-page{
	margin-top:100px;
	max-width:100%;
	padding:20px 10px;
}
.update-page{
	margin-top:30px;
	padding:25px 15px;
}
.username{
	font-size:22px;
	color:white;
	font-weight:bold;
	position:absolute;
	top:-30px;
	left:46%;
	
}
}
@media screen and (max-width: 800px){
.form-register input{
	width: 42%;
	margin:10px 2% 25px 0px;
}
.propic{
	width:20%;
	top:-70px;
}
.username{
	font-size:26px;
	top:-36px;
	left:36%;
	
}}
@media screen and (max-width: 650px){
.form-register input{
	width: 42%;
	margin:5px 1% 18px 0px;
}.propic{
	width:24%;
	top:-70px;
}
.username{
	font-size:26px;
	top:-36px;
	left:40%;
	
}}
@media screen and (max-width: 550px){
	.form-register input{
	width: 90%;

}}
@media screen and (max-width: 400px){
	.form-register input{
	width: 85%;
	
}
.form input{
	width: 85%;
	height:60px;
	height:45px;
	font-size:16px;
}
.propic{
	width:30%;
	top:-60px;
}
.username{
	font-size:20px;
	top:-30px;
	left:46%;
	
}
}	
@media screen and (max-width: 1200px){
	.propic{height:210px;}
	#newimage{font-size:15px;}#abcd{
	width:70%;}
	.fa-camera{
	 font-size:30px; padding:10px 2px 10px 2px;
 }
}
@media screen and (max-width: 1100px){
	.propic{height:190px;}
	#newimage{font-size:15px;}#abcd{
	width:70%;}
	.fa-camera{
	 font-size:30px; padding:10px 2px 10px 2px;
 }
}
@media screen and (max-width: 1000px){
	.propic{height:170px;}
	#newimage{font-size:15px;}#abcd{
	width:60%;}
	.fa-camera{
	 font-size:30px; padding:10px 2px 10px 2px;
 }
}
@media screen and (max-width: 800px){
	.propic{height:150px;}
	#newimage{font-size:14px;}#abcd{
	width:70%;}
	.fa-camera{
	 font-size:24px; padding:13px 2px 13px 5px;
 }
}
@media screen and (max-width: 600px){
	.propic{height:130px;}
#newimage{font-size:12px;}#abcd{
	width:60%;}
	.fa-camera{
	 font-size:20px; padding:15px 5px;
 }
	}
@media screen and (max-width: 400px){
	.propic{height:110px;} #newimage{font-size:12px;}#abcd{
	width:60%;}
	.fa-camera{
	 font-size:20px; padding:15px 5px;
 }
}

</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" style="color:white; font-family: 'Satisfy', cursive; font-size:30px;">Notify</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
 

	<?php
	if(!loggedin()){
	?>
     <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	 <li><a href="forgotpassword.php"><span class="glyphicon glyphicon-lock"></span> Forgot Password</a></li>
	 

	<?php
	}
	else{$username=getfield('username');
	if(@$page=="notes"){
		echo '<li><a onclick="newTopic()" style="cursor:pointer; color:white;"><i class="fa fa-sticky-note-o"></i> Add Note </a></li>';
	}
	?>
	<li><a >Welcome <?php echo $username;?></a></li>
	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
	
	<?php
	}

	?>
	</div>
    </ul>
  </div>
</nav>

</body>
</html>
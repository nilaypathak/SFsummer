<?php

$page="notes";
include'ConnectDatabase.php';
include'core.inc.php';
include 'layout.php';
$error='';
if(loggedin()){
if(isset($_POST['note'])&&isset($_POST['title']))
{
	$note= $_POST['note'];
	$title=$_POST['title'];
	$user_id=$_SESSION['user_id'];
	$date=date("d M Y");
	if(!empty($note)&&!empty($title))
	{
		$query="SELECT `id`FROM `users` WHERE username='$username' AND password='$password_hash'";
		if($query_run=mysqli_query($con,$query))
		{
			$query="INSERT INTO `notes` VALUES('','$user_id','$title','$note','$date')";
				if($query_run=mysqli_query($con,$query))
				{
					 header("Location:notes.php");
				}
				else{
					$error=$error.'<br>Sorry we could not register you at the moment,Please try again later.';
					}
		}
		
	}else{$error=$error.'<br>Please fill in title and the note';}
}

 if (isset($_GET['id'])) {
    $id = $_GET['id'];
	$query="DELETE FROM `notes` WHERE id='$id'";
	$query_run=mysqli_query($con,$query);
	header("Location:notes.php");
  }
?>

<head>
<style>
.tilt{
	-ms-transform: rotate(-7deg); /* IE 9 */
    -webkit-transform: rotate(-7deg); /* Chrome, Safari, Opera */
    transform: rotate(-6deg);
	padding:4vw 2vw 4vw 1.5vw;
	transition: all 0.2s ease-in-out;
	
}
@keyframes example {
    from {margin-top:-500px ;}
    to {margin-top: 0vw;}
}
.notebody{
	font-size:1vw;
}
.note{
	
	height:23vw;
	transition: all 0.2s ease-in-out;
	background-image:url(postit.png);
	background-repeat:no-repeat;
	background-size:100% 100%;
	animation: example 0.5s;
}
.notedate{
	font-size:1vw;
	color:blue;
	transition: all 0.2s ease-in-out;
}
.notetitle{
	font-size:1.25vw;
	text-decoration:underline;
	font-weight:bold;
	transition: all 0.2s ease-in-out;
}
.container{
	width:95%
}
body {
  background: #76b852; 
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(90deg, #F2994A , #F2C94C );
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
#newtopic1{
	width:70%;
	background-color:white;
	border-radius:10px;
	position: fixed;
	box-sizing:border-box;
	z-index:5;
	left:15%;
	top:15%;
	display: none;
	padding:3vw;
	border:solid black 2px;
	transition: display 0.5s;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);
}
#row1{
	box-sizing:border-box;
	width:100%;
	float:left;
	margin-top:20px;
	}
#title {
    width: 100%;
    height: 45px;
    padding: 9px 20px 0px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 1px;
    background-color: #f8f8f8;
    font-size: 17px;
    resize: none;
	font-weight:bold;
	font-family:inherit;
}
#myArea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 1px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
	font-family:inherit;
	margin-bottom:10px;
}
.button-style{
	width:30px;
	height:30px;
	margin-bottom:8px;
	font-size:20px;
	
    text-align: center;
    cursor: pointer;
    outline: none;
    color: #fff;
    background-color: #00af3e;
    border: none;
    border-radius: 2px;
    box-shadow: 0 4px #999;
}
.button-style:active {
  background-color: #0f7031;
  box-shadow: 0 2px #666;
  transform: translateY(2px);
}
.button-style:hover {background-color: #0f7031}

.notselected{
background-color:#00af3e;
 box-shadow: 0 4px #999;}
.selected{
background-color:#0f7031;
 box-shadow: 0 2px #666;
  transform: translateY(2px);}
  .button1 {
    border: none;
    color: white;
    padding: 12px 5px;
	float:right;
    text-align: center;
	border-radius:5px;
	width:20%;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	margin-left:20px;
}
.button1:hover{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#black-background{
	background-color:rgba(0,0,0 ,0.5);
	z-index:4;
	height:100%;
	width:100%;
	position:fixed;
	display:none;
	top:0px;
	left:0px;
}

.closebtn{
	text-decoration:none; 
	color:black;
	display:block;
	font-size:36px; 
	position:absolute; 
	left:75%; 
	top:25px;
	
	
}
.closebtn:hover{
	text-decoration:none;
}
<?php
if($error!="")
{
	

?>
#newtopic1{
	display:block;
}
#black-background{
	display:block;
}
<?php
}
?>
</style>

<script>
function closeNewTopic(){
	document.getElementById('newtopic1').style.display = "none";
	document.getElementById('black-background').style.display = "none";
}
function newTopic(){
	document.getElementById('newtopic1').style.display = "block";
	document.getElementById('black-background').style.display = "block";
}
function boldSelection () {
			
			var textarea = document.getElementById("myArea");
			if ('selectionStart' in textarea) {
					
				if (textarea.selectionStart != textarea.selectionEnd) {
					var newText = textarea.value.substring (0, textarea.selectionStart) + 
						"**" + textarea.value.substring  (textarea.selectionStart, textarea.selectionEnd) + "**" +
						textarea.value.substring (textarea.selectionEnd);
					textarea.value = newText;
				}
				else {
					textarea.value +="**";
					document.getElementById("bol").classList.toggle("selected");
				}
			}
			
		}
		function italicsSelection () {
			
			var textarea = document.getElementById("myArea");
			if ('selectionStart' in textarea) {
					
				if (textarea.selectionStart != textarea.selectionEnd) {
					var newText = textarea.value.substring (0, textarea.selectionStart) + 
						"//" + textarea.value.substring  (textarea.selectionStart, textarea.selectionEnd) + "//" +
						textarea.value.substring (textarea.selectionEnd);
					textarea.value = newText;
				}
				else{
					textarea.value +="//";
					document.getElementById("italic").classList.toggle("selected");
				}
			}
			
		}
		function underlineSelection () {
			
			var textarea = document.getElementById("myArea");
			if ('selectionStart' in textarea) {
					
				if (textarea.selectionStart != textarea.selectionEnd) {
					var newText = textarea.value.substring (0, textarea.selectionStart) + 
						"__" + textarea.value.substring  (textarea.selectionStart, textarea.selectionEnd) + "__" +
						textarea.value.substring (textarea.selectionEnd);
					textarea.value = newText;
				}
				else{
					textarea.value +="__";
					document.getElementById("under").classList.toggle("selected");
				}
			}
			
		}
	function reply(str,id){
		var res=str.split("**");
		var i;
		var result="";
		var result2="";
		var result3="";
		for(i=0;res[i]!=undefined;i++)
		{
			if(i%2==0)
			result=result+res[i]+"<b>";
			else
			result=result+res[i]+"</b>";
		}
		var res2=result.split("//");
		for(i=0;res2[i]!=undefined;i++)
		{
			if(i%2==0)
			result2=result2+res2[i]+"<i>";
			else
			result2=result2+res2[i]+"</i>";
		}
		var res3=result2.split("__");
		for(i=0;res3[i]!=undefined;i++)
		{
			if(i%2==0)
			result3=result3+res3[i]+"<u>";
			else
			result3=result3+res3[i]+"</u>";
		}
		document.getElementById(id).innerHTML = result3 ;
		}
</script>
</head>
<div class="container">
  <div class="row">
  <?php
  $user_id= $_SESSION['user_id'];
	$query="SELECT `id`,`title`,`note`,`date` FROM `notes` WHERE `user`='$user_id' ORDER BY `id` DESC";
	if($query_run=mysqli_query($con,$query)){
		while($row=mysqli_fetch_assoc($query_run)){
	   
	 
  ?>
    <div class="col-md-3 col-sm-3 note" >
	
	<div class="tilt">
	<a href='notes.php?id=<?php echo $row['id'];?>' class="closebtn"  onclick="deleteNote(<?php echo $row['id'];?>)" style=""  >&times;</a>
	<p class="notetitle">
<?php echo $row['title'];?></p><p class="notedate">
	<?php echo $row['date'];?></p><p class="notebody" id="<?php echo $row['id'];?>">
	<script>reply("<?php echo $row['note'];?>","<?php echo $row['id'];?>");</script></p>
	</div>
	</div>
  <?php
}
if (mysqli_num_rows($query_run) == 0){
echo '<div class="register-page">
    <div class="form form-register">
		<h2>Hey! seems like you do not have a note yet. </h2>
		<h3>Start by <a onclick="newTopic()" style="color:76b852; cursor:pointer;">Adding a note</a></h3>
    </div>
</div>';
	}}?>
  </div>
</div>

<div id="newtopic1">

<a href="javascript:void(0)" class="closebtn-newtopic" onclick="closeNewTopic()" style="text-decoration:none; color:black; font-size:36px; position:absolute; left:95%; top:5px;"  >&times;</a>
		<form method="POST" action="notes.php">
		<h3 style="margin-top:5px;">Add note</h3>
		<div id="row1">
			
            <textarea id="title" name="title" placeholder="Title" ></textarea>
            
		</div>
		<div id="row1">
			
			<button type="button" onclick="boldSelection ()" class="notselected button-style" id="bol"><b>B</b></button>
	        <button type="button" onclick="italicsSelection ()"class="notselected button-style" id="italic"><i>I</i></button>
	        <button type="button" onclick="underlineSelection ()"class="notselected button-style" id="under"><u>U</u></button><br/>
            
			<textarea id="myArea" name="note" placeholder="Write your note here...." ></textarea>
            
		</div>
		
			
			<button class="button1 btn-success" onclick="closeNewTopic()">Post</button></form>
		<button class="button1 btn-warning" onclick="closeNewTopic()">Cancel</button>
		<div class="alert alert-warning">
			<strong>Select text and click on Bold/Italics/Underline buttons or click button and type to add effects to your note.</strong>
		</div>
		<?php echo '<h5 style="color:red; font-weight:bold;">'.$error.'</h5>';?>

</div>

<div id="black-background">

</div>
<?php
}
else
	header("Location:index.php");
?>
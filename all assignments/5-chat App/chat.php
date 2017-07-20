<?php
include'ConnectDatabase.php';
include'core.inc.php';

if(loggedin()){
	$user_id=$_SESSION['user_id'];
if(isset($_GET['senderupdate'])){
	$sender=$_GET['senderupdate'];
	echo "hello";
	?>
	<script>
	//sender=<?php echo $sender;?>
	
	</script>
	<?php
}
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>chat room </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script>
var receiver=0;

 

	var previousheight=0;
	var currentheight=0;
	var loadfirst=0;
	receiver=19;
	function myFunction2() {

  var input, filter, table, tr, td, i;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myList");
  li = ul.getElementsByTagName("li");

  
  for (i = 0; i < ul.length; i++) {
    li = ul[i].getElementsByTagName("li")[1];
    if (li) {
      if (li.innerHTML.toUpperCase().indexOf(filter) > -1) {
        ul[i].style.display = "";
      } else {
        ul[i].style.display = "none";
      }
    } 
  }
}
function loadconversations(){
    $('#conversations').load('conversations.php',function () {
         document.getElementById(receiver).style.backgroundColor="#03b22f";
		 document.getElementById(receiver).style.color="white";
		 $(this).wrap();
		 
    });
}
function loadchat()
{
	if(window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
	}else
	{
		xhr = new ActiveObject('Microsoft.XMLHTTP');
	}
	
	xhr.onreadystatechange = function(){
		
	if((xhr.readyState==4)&&(xhr.status == 200||xhr.status == 304))
	{
		document.getElementById("messagesarea").innerHTML = xhr.response;
		currentheight=$('#messagesarea').prop("scrollHeight");
		if(loadfirst==0){
			if(currentheight!=previousheight){
		 $("#messagesarea").animate({ scrollTop: (currentheight)}, 1);
		previousheight=$('#messagesarea').prop("scrollHeight");
		loadfirst=1;}
		}
		else{
		 if(currentheight!=previousheight){
		 $("#messagesarea").animate({ scrollTop: (currentheight)}, 1000);
		previousheight=$('#messagesarea').prop("scrollHeight");}}
	}	
	
	}//close function xhr.onreadystatechange
	
		xhr.open("GET", 'search.inc.php?sender='+receiver, true);
		
		
		xhr.send();
	 loadconversations();
}

 
loadchat(); 
setInterval(function(){
	
    loadchat() 
}, 6000);
$(document).ready(function(){
	loadchat();
	loadconversations();
$("#submitmsg").click(function(){	
/*
		var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };*/
  var message = $("#messagetext").val();
 /* xhttp.open("POST", "addmessage.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("message="+message+"&receiver"+receiver);
*/
 	if(window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
	}else
	{
		xhr = new ActiveObject('Microsoft.XMLHTTP');
	}
	

	xhr.open("GET", 'addmessage.php?receiver='+receiver+'&message='+message, true);
		
		
		xhr.send();
		 $("textarea#messagetext").val('');
 loadchat();
	});
	
	$("#messagetext").keypress(function(evt) {
					if(evt.which == 13)
					{
						evt.preventDefault();
						$("#submitmsg").trigger('click');
					}
				});



	});
function changereceiver(id){
receiver=id;
	
}
  </script>

    <style type="text/css">
     #custom-search-input {
  background: #e8e6e7 none repeat scroll 0 0;
  margin: 0;
  padding: 10px;
}
   #custom-search-input .search-query {
   background: #fff none repeat scroll 0 0 !important;
   border-radius: 4px;
   height: 33px;
   margin-bottom: 0;
   padding-left: 7px;
   padding-right: 7px;
   }
   #custom-search-input button {
   background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
   border: 0 none;
   border-radius: 3px;
   color: #666666;
   left: auto;
   margin-bottom: 0;
   margin-top: 7px;
   padding: 2px 5px;
   position: absolute;
   right: 0;
   z-index: 9999;
   }
   .search-query:focus + button {
   z-index: 3;   
   }
   .all_conversation button {
   background: #f5f3f3 none repeat scroll 0 0;
   border: 1px solid #dddddd;
   height: 38px;
   text-align: left;
   width: 100%;
   }
   .all_conversation i {
   background: #e9e7e8 none repeat scroll 0 0;
   border-radius: 100px;
   color: #636363;
   font-size: 17px;
   height: 30px;
   line-height: 30px;
   text-align: center;
   width: 30px;
   }
   .all_conversation .caret {
   bottom: 0;
   margin: auto;
   position: absolute;
   right: 15px;
   top: 0;
   }
   .all_conversation .dropdown-menu {
   background: #f5f3f3 none repeat scroll 0 0;
   border-radius: 0;
   margin-top: 0;
   padding: 0;
   width: 100%;
   }
   .all_conversation ul li {
   border-bottom: 1px solid #dddddd;
   line-height: normal;
   width: 100%;
   }
   .all_conversation ul li a:hover {
   background: #dddddd none repeat scroll 0 0;
   color:#333;
   }
   .all_conversation ul li a {
  color: #333;
  line-height: 30px;
  padding: 3px 20px;
}
   .member_list .chat-body {
   margin-left: 47px;
   margin-top: 0;
   }
   
   .top_nav {
   overflow: visible;
   }
   .member_list .contact_sec {
   margin-top: 3px;
   }
   .member_list li {
   padding: 6px;
   }
   .member_list ul {
   border: 1px solid #dddddd;
   }
   .chat-img img {
   height: 34px;
   width: 34px;
   }
   .member_list li {
   border-bottom: 1px solid #dddddd;
   padding: 6px;
   }
   .member_list li:last-child {
   border-bottom:none;
   }
   .member_list {
   height: 520px;
   overflow-x: hidden;
   overflow-y: auto;
   }
   .sub_menu_ {
  background: #e8e6e7 none repeat scroll 0 0;
  left: 100%;
  max-width: 233px;
  position: absolute;
  width: 100%;
}
.sub_menu_ {
  background: #f5f3f3 none repeat scroll 0 0;
  border: 1px solid rgba(0, 0, 0, 0.15);
  display: none;
  left: 100%;
  margin-left: 0;
  max-width: 233px;
  position: absolute;
  top: 0;
  width: 100%;
}
.all_conversation ul li:hover .sub_menu_ {
  display: block;
}
.new_message_head button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
}
.new_message_head {
  background: #f5f3f3 none repeat scroll 0 0;
  float: left;
  font-size: 13px;
  font-weight: 600;
  padding: 18px 10px;
  width: 100%;
}
.message_section {
  border: 1px solid #dddddd;
}
.chat_area {
  float: left;
  height: 400px;
  overflow-x: hidden;
  overflow-y: auto;
  width: 100%;
}
.chat_area li {
  padding: 14px 14px 0;
}
.chat_area li .chat-img1 img {
  height: 40px;
  width: 40px;
}
#messagesarea{
	background:url('chatback.jpg');
	background-repeat:no-repeat;
	background-size:100% 100%;
}
.chat_area .chat-body1 {
  margin-left: 50px;
}
.chat-body1 p {
  background: #fbf9fa none repeat scroll 0 0;
  padding: 12px;
  font-size:18px;
}
.chat_area .admin_chat .chat-body1 {
  margin-left: 0;
  margin-right: 50px;
}
.chat_area li:last-child {
  padding-bottom: 10px;
}
.message_write {
  background: #f5f3f3 none repeat scroll 0 0;
  float: left;
  padding: 15px;
  width: 100%;
}

.message_write textarea.form-control {
  height: 70px;
  padding: 10px;
}
.chat_bottom {
  float: left;
  margin-top: 13px;
  width: 100%;
}
.upload_btn {
  color: #777777;
}
.sub_menu_ > li a, .sub_menu_ > li {
  float: left;
  width:100%;
}
.member_list li:hover {
  background: #428bca none repeat scroll 0 0;
  color: #fff;
  cursor:pointer;
}
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
       /* window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });*/
    </script>
</head>
<body>
	<script src="https://use.fontawesome.com/45e03a14ce.js"></script>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" style="color:white; font-family: 'Satisfy', cursive; font-size:30px;">What's Up?</a>
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
<div class="main_section"style="width:100%;height:100%;">
   <div class="container" style="width:1200px;height:100px;">
      <div class="chat_container">
         <div class="col-sm-3 chat_sidebar">
    	 <div class="row">
           
			
            <div class="dropdown all_conversation">
               <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <i class="fa fa-weixin" aria-hidden="true"></i>
               Start New Conversation
               <span class="caret pull-right"></span>
               </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
			   <?php
			   $query="SELECT * FROM `users` WHERE id!='$user_id' ";
               if($query_run=mysqli_query($con,$query)){
	
		while($run=mysqli_fetch_assoc($query_run)){
			$firstname=ucwords($run['firstname']);
			$lastname=ucwords($run['lastname']);
?>		
                  <li><a onclick="changereceiver(<?php echo $run['id'] ;?>)" style="cursor:pointer;"><?php echo $firstname.' '.$lastname.'('.$run['username'].')'?></a></li>
				  <?php
}}
				  ?>
                  
               </ul>
            </div>
			<div style="background:#f5f3f3;height:40px; padding:12px;font-weight:bold;">
			Recent Conversations
			</div>
            <div class="member_list" id="conversations" style="background:#f5f3f3;">

            </div></div>
         </div>
         <!--chat_sidebar-->
		 
		 
          <div class="col-sm-9 message_section">
		 <div class="row">
		 <div class="new_message_head" style="height:50px;">
		 <div class="pull-left" id="receivername"></div>
		 
		 </div><!--new_message_head-->
		 
		 <div class="chat_area" id="messagesarea">
	
		 </div><!--chat_area-->
          <div class="message_write">
		
    	 <textarea class="form-control" placeholder="type a message" id="messagetext" name="message"></textarea>
		 <div class="clearfix"></div>
		 <div class="chat_bottom">
 <input name="submitmsg" type="submit"  class="pull-right btn btn-success" id="submitmsg" value="Send" />
  
   </div>
         
		 </div>
		 </div>
         </div> <!--message_section-->
      </div>
   </div>
</div>
	<script >

	</script>
		    
</body>
</html>
<?php
}
else{
	header("Location:index.php");
}?>
<?php
include'ConnectDatabase.php';
include'core.inc.php';
date_default_timezone_set("Asia/Kolkata");
$user_id=$_SESSION['user_id'];
?>

<ul class="list-unstyled" id="myList">
 <?php                 
               


$query="SELECT * FROM `messages` WHERE sender='$user_id'  OR  receiver='$user_id' ORDER BY id DESC";
if($query_run=mysqli_query($con,$query)){
	$a=array("0");
	if(mysqli_fetch_assoc($query_run)){
		echo "ache";
		while($run=mysqli_fetch_assoc($query_run)){
		
		if($run['sender']!=$user_id){
		$sender_id=$run['sender'];
		$firstname=ucwords(getdata("firstname",$sender_id));
	    $lastname=ucwords(getdata("lastname",$sender_id));
		
		}
		else{
		$sender_id=$run['receiver'];
		$firstname=ucwords(getdata("firstname",$sender_id));
	    $lastname=ucwords(getdata("lastname",$sender_id));
		
		}
		
		
		if(in_array($sender_id,$a)){
			
		}
		else{
			array_push($a,$sender_id);
			$query1="SELECT * FROM `messages` WHERE receiver='$sender_id'  AND  sender='$user_id' AND seen='1' ORDER BY id DESC";
            if($query_run1=mysqli_query($con,$query1)){
			$query_num_rows= mysqli_num_rows($query_run1);
			if($query_num_rows==0)
				$message="";
			else
			$message=$query_num_rows.' new message ';}
			 ?>
			  <li class="left clearfix" id="<?php echo $sender_id ;?>" onclick='changereceiver(<?php echo $sender_id ;?>)'>
                     <span class="chat-img pull-left">
                     <img src="uploads/<?php echo getdata("propic",$sender_id);?>" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font"><?php echo $firstname.' '.$lastname?></strong> <strong class="pull-right">
                           <?php echo date("d M h:i A",$run['timestamp']);?></strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font"><?php echo getdata("username",$sender_id);?></strong> <span class="badge pull-right"><?php echo $message;?></span>
                        </div>
                     </div>
                  </li>
				  
				   <?php
}}}
else{
	echo "hello";
		$time=time();
		$query="INSERT INTO `messages` VALUES('','$user_id','19','Hello and welcome to this chat app, in case of any problems please message me.Thank you!','$time','1')";
								if($query_run=mysqli_query($con,$query))
								echo "success";
}
}
				  ?>
				  </ul>
				  
				  <script>
 
	function changereceiver(id){
	
		receiver=id;
		loadfirst=0;
		loadchat();
		
		
	
}

	
	
  </script>
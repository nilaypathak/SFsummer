
<?php
include'ConnectDatabase.php';
include'core.inc.php';
date_default_timezone_set("Asia/Kolkata");
$user_id=$_SESSION['user_id'];


if(isset($_GET['sender'])){
$receiverid=$_GET['sender'];
$query="SELECT * FROM `users` WHERE id='$receiverid'";
	if($query_run=mysqli_query($con,$query)){
		$receiver=mysqli_fetch_assoc($query_run);
		$firstname=ucwords($receiver['firstname']);
	    $lastname=ucwords($receiver['lastname']);
		$lastseentimestamp=(int)($receiver['online']);
		$timenow=time();
		$lastseen= 0;
		$time_elapsed=$timenow-$lastseentimestamp;
		if($time_elapsed<86400)
			$lastseen=(int)($time_elapsed/3600).' hours ago';
		
		if($time_elapsed<3600)
			$lastseen=(int)($time_elapsed/60).' min ago';
		if($time_elapsed<60)
			$lastseen=$time_elapsed.' sec ago';
		if($time_elapsed>86400)
			$lastseen=' at '.date("d M h:i A",$lastseentimestamp);;
?>

	 <ul class="list-unstyled">
	 <div style="position:absolute;top:15px;left:20px; font-size:20px;font-weight:bold;">
				  <?php 
				  if($lastseentimestamp!=1){
				  echo $firstname.' '.$lastname.' <small style="font-size:12px;font-weight:normal; ">Last seen '.$lastseen.'</small>';}
				  else{
				  echo $firstname.' '.$lastname.' <span class="glyphicon glyphicon-ok-sign" style="color:green;"></span>'.' <small style="font-size:12px;font-weight:normal; color:green; "> online </small>';
				  }?>
				  </div>
		 <?php
		 $query="UPDATE `messages` SET  `seen` = '0' WHERE receiver = '$receiverid' AND sender = '$user_id';";
		 $query_run=mysqli_query($con,$query);
		 $query="SELECT * FROM `messages` WHERE (sender='$user_id' AND receiver='$receiverid') OR (sender='$receiverid' AND receiver='$user_id')";
		if($query_run=mysqli_query($con,$query)){
		while($run=mysqli_fetch_assoc($query_run)){
		$sender_id=$run['sender'];

		 if($run['sender']==$user_id){
		 ?>
		 <li class="left clearfix">
		  <table style="">
				  <tr style="margin:0px;padding:0px;">
				  <td style="width:50px;"><span class="chat-img1 pull-right">
                     <img src="uploads/<?php echo getdata("propic",$run['receiver']);?>" alt="User Avatar" class="img-circle">
                     </span></td>
				  <td style="float:left; padding-left:15px;"> 
                        <p style="background-color:#e0ddde;padding: 12px;font-size:18px;"><?php echo $run['message'];?></td>
						
				  </tr>
				  <tr style="height:10px;">
				  <td></td>
				  <td><div class="chat_time pull-right" style="font-size:14px;"><?php echo date("d M h:i A",$run['timestamp']);?></div></td>
				  </tr>
				  </table>
                     
                  </li>
				  <?php
}
else{
	

				  ?>
				  <li class="left clearfix admin_chat" >
				  <table style="float:right;">
				  <tr style="margin:0px;padding:0px;">
				  
				  <td style="float:right;padding-right:15px;"> 
                        <p style="background-color:#9ffcc1;padding: 12px;font-size:18px;"><?php echo $run['message'];?></td>
						<td style="width:50px;"><span class="chat-img1 pull-right">
                     <img src="uploads/<?php echo getdata("propic",$run['receiver']);?>" alt="User Avatar" class="img-circle">
                     </span></td>
				  </tr>
				  <tr style="height:10px;">
				  <td><div class="chat_time pull-left" style="font-size:14px;"><?php echo date("d M  h:i A",$run['timestamp']);?></div></td>
				  </tr>
				  </table>
                 
                  </li>
				  <?php
}}}
				  ?>
				   
				  
				
		 
		 
		 </ul>
<?php
}}
				  ?>
				   
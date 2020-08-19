 <?php  
 include("config.php");
 session_start();  
 if(!isset($_SESSION["email"]))  
 {  
      header("location:index.php");  
 }  
 elseif(!isset($_SESSION["opponent"]))
 {
 	header("location:chat.php");
 }
 ?> 




<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<link rel="stylesheet" href="style-chat-box.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
<center>
	<div class="login" style="position: relative;">

			<h4 style="text-align: left;float:left;">
				<?php
					$email=$_SESSION["email"];
					$query = "SELECT * FROM users WHERE email = '$email'";  
           			$result = mysqli_query($connect, $query);  
           			if(mysqli_num_rows($result) == 1)  
			           {    
			           	$opponent=$_SESSION["opponent"];

			           	$query2="SELECT * FROM users WHERE id='$opponent'";
			           	$result2=mysqli_query($connect, $query2);
			           	$row2=mysqli_fetch_object($result2);

			                $row=mysqli_fetch_object($result);
			                $my_id=$row->id;
			                $other_id=$opponent;
			                echo "$row->username with $row2->username";
			                
			           }  
			$chat_query="SELECT * FROM chat_msg WHERE (sender_id='$my_id' OR sender_id='$other_id') AND (reciever_id='$other_id' OR reciever_id='$my_id')";
			$chat_result=mysqli_query($connect, $chat_query);
			$_SESSION["num-chat1"]=mysqli_num_rows($chat_result);
				?>
			</h4>


			<p style="text-align: right;float:right;"><a href="chat.php">Exit Chat</a></p><br><br><hr>
			<?php //echo $_SESSION["num-chat1"]."=".$_SESSION["num-chat2"]; ?>

	<div id="my-chat-div" style="overflow-y: scroll;height:350px;">	
		<div class="result">
			
		</div>
	</div>
		<form class='chat-form' action="" style="bottom: 10px; position: absolute; width: 92%;left:4%;" method="POST">
				<input type="text" name="send-msg" placeholder="Type Message..." required>
				<input type="submit" name="send" value="Send">
		</form>
	</div>
</center>

</body>
</html>

<?php
 if(isset($_POST["send"]))  
 {   
 					$email=$_SESSION["email"];
					$query = "SELECT * FROM users WHERE email = '$email'";  
           			$result = mysqli_query($connect, $query);  
           			$row=mysqli_fetch_object($result);
					$my_id=$row->id;
					$other_id=$_SESSION["opponent"];

           $send_msg= mysqli_real_escape_string($connect, $_POST["send-msg"]);  
            
           $query = "INSERT INTO chat_msg (sender_id, reciever_id, msg) VALUES ('$my_id', '$other_id', '$send_msg')";  
          
           if(!mysqli_query($connect, $query))  
           {  
           	 echo '<script>alert("Unable to send.")</script>'; 
           }  
           
           
 } 
 
 ?>

 	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>

			  function refresh_div() {
			   	
			        jQuery.ajax({
			            url:'ajax-chat.php',
			            type:'POST',
			            success:function(results) {
			                jQuery(".result").html(results);
			            }

			        });
				    
			        
			    }
			    t = setInterval(refresh_div,1000);

			    
			    
	</script>

<script type="text/javascript">
	var delayInMilliseconds = 2000; 

setTimeout(function() {
	var objDiv = document.getElementById("my-chat-div");
	objDiv.scrollTop = objDiv.scrollHeight;
	  
	}, delayInMilliseconds);



	
</script>




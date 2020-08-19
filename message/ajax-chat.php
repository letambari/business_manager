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
			                //echo "$row->username with $row2->username";
			                
			           }  
				?>
			</h4>
			

			
			<?php
			$chat_query="SELECT * FROM chat_msg WHERE (sender_id='$my_id' OR sender_id='$other_id') AND (reciever_id='$other_id' OR reciever_id='$my_id') ORDER BY date_time";
			$chat_result=mysqli_query($connect, $chat_query);
			$_SESSION["num-chat2"]=mysqli_num_rows($chat_result);
			
			while($chat_row=mysqli_fetch_object($chat_result))
			{

				
				if($chat_row->sender_id==$my_id)
				{
					echo "<p class='sender-text'>$chat_row->msg</p>";
					echo "<p class='sender-chat-time'> $chat_row->date_time ";
					if($chat_row->status==1)
					{
						echo "✓</p>";
					}
					elseif($chat_row->status==2)
					{
						echo "✓✓</p>";
					}
					elseif($chat_row->status==3)
					{
						echo "✓✓✓</p>";
					}

				}
				elseif($chat_row->sender_id==$other_id)
				{
					echo "<p class='reciever-text'>$chat_row->msg</p>";
					echo "<p class='reciever-chat-time'> $chat_row->date_time </p>";
					$status_query="UPDATE chat_msg SET status=3 WHERE sender_id='$other_id' AND reciever_id='$my_id'";
					$status_result=mysqli_query($connect, $status_query);
				}
			}
			?>
		


	</div>

<script type="text/javascript">
	var numchat1='<?php echo $_SESSION['num-chat1'];?>';
	var numchat2='<?php echo $_SESSION['num-chat2'];?>';
			        if(numchat1<numchat2)
			        {
			        	var objDiv = document.getElementById("my-chat-div");
						objDiv.scrollTop = objDiv.scrollHeight;

						<?php $_SESSION['num-chat1']=$_SESSION['num-chat2'];?>
			        }

</script>
 <?php  
 include("config.php");
 session_start();  
 if(!isset($_SESSION["email"]))  
 {  
      header("location:index.php");  
 }  
 ?> 


<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
<center>
	<div class="login">
		<form action="" method="POST">
			
			<h3>
				<?php
					$email=$_SESSION["email"];
					$query = "SELECT * FROM users WHERE email = '$email'";  
           			$result = mysqli_query($connect, $query);  
           			if(mysqli_num_rows($result) == 1)  
			           {  
			                $row=mysqli_fetch_object($result);
			                echo "Hi $row->username . . .";
			           }  
				?>
			</h3>
			Chat with<br>
			
				<?php
					$query="SELECT * FROM employees";
					$result = mysqli_query($connect, $query);  
					$num_user=mysqli_num_rows($result);
					if($num_user<1)
					{
						echo "No User Found.";
					}
					else
					{
						echo "<br><select name='chat-with'>";
						while($row=mysqli_fetch_object($result))
	           			{
	           				//For Delivery Status
	           				
							$query1 = "SELECT * FROM employees";  
		           			$result1 = mysqli_query($connect, $query1);  
		           			if(mysqli_num_rows($result1) == 1)  
					           {
					                $row1=mysqli_fetch_object($result1);
			                		$my_id=$row1->employee_id;
					             
					           }  
					        $other_id=$row->id; 
					        $status_query1="UPDATE chat_msg SET status=2 WHERE sender_id='$other_id' AND reciever_id='$my_id' AND status=1";
				            $status_result1=mysqli_query($connect, $status_query1);
	           				$status_query="SELECT * FROM chat_msg WHERE sender_id='$other_id' AND reciever_id='$my_id' AND status='2'";
							$status_result=mysqli_query($connect, $status_query);
							$num_message=mysqli_num_rows($status_result);
							//For Delivery Status End
				                echo "<option value='$row->id'>$row->username ($num_message Msg)</option>";
				            
	           			}
	           			echo "</select>";
	           			echo "<br><br><input type='submit' name='continue' value='Continue'>";
					}
           			
			         

				?>
			
			
		</form>
		<br>
		<p><a href="logout.php">Logout</a></p>
		
	</div>
</center>
</body>
</html>

<?php 
 if(isset($_POST["continue"])) 
 {
 	$_SESSION["opponent"]=$_POST['chat-with'];
 	header('location:chat-box.php');
 }


?>

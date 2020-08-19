<?php
include("config.php");
 session_start();  
 if(isset($_SESSION["email"]))  
 {  
      header("location:chat.php");  
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
			<h3>Registration</h3>
			<input type="text" name="username" placeholder="User Name" required>
			<input name="email" type="email" placeholder="Email" required>
			<input name="password" type="password" placeholder="Password" required>
			<input type="submit" name="signup" value="Sign Up">
		</form>
		
		<br>
		<p>Already have an account? <a href="login.php">Sign In</a></p>
	</div>
</center>
</body>
</html>

<?php
 if(isset($_POST["signup"]))  
 {  
      
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $email = mysqli_real_escape_string($connect, $_POST["email"]);  
           $password = md5($password);  
           $check_email_query = "SELECT *FROM users where email='$email'";  
           $result=mysqli_query($connect, $check_email_query);
			$number_email=mysqli_num_rows($result);
           
           if($number_email>0)
           {
           		echo '<script>alert("This email already exists.")</script>';
           }
           else
           {
	           	$query = "INSERT INTO users (username, password, email) VALUES('$username', '$password', '$email')";  
	           if(mysqli_query($connect, $query))  
	           {  
	                echo '<script>alert("Registration Done")</script>';  
	                header('location:login.php');
	           }  
           }
     
 } 
 ?>

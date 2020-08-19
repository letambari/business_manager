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
			<h3>Login to Chat</h3>
			<input name="email" type="email" placeholder="Email" required>
			<input name="password" type="password" placeholder="Password" required>
			<input type="submit" name="login" value="Login">
		</form>
		<br>
		<p><a href="#">Forgot Password?</a></p>
		<br>
		<p>Don't have an account? <a href="signup.php">Sign Up</a></p>
	</div>
</center>
</body>
</html>

<?php
 if(isset($_POST["login"]))  
 {   
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $email = mysqli_real_escape_string($connect, $_POST["email"]);  
           $password = md5($password);  
           $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['email'] = $email;  
                header("location:chat.php");  
           }  
           else  
           {  
                echo '<script>alert("Invalid User Credentials.")</script>';  
           }  
 } 
 ?>
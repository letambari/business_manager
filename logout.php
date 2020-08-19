<?php
session_start();
// Set Session data to an empty array
$_SESSION = array();
// Expire their cookie files
if(isset($_COOKIE["id"]) && isset($_COOKIE["user"]) && isset($_COOKIE["pass"])) {
  setcookie("id", '', strtotime( '-5 days' ), '/');
    setcookie("user", '', strtotime( '-5 days' ), '/');
  setcookie("pass", '', strtotime( '-5 days' ), '/');
}
// Destroy the session variables
session_destroy();
// Double check to see if their sessions exists
if(isset($_SESSION['username'])){
  header("location: message.php?msg=Error:_Logout_Failed");
} else {
		if (isset($_GET['user']) ) {
	# code...
	$user = $_GET['user'];

	$db_conx = mysqli_connect("localhost","root","","sphermanager");
 	$sql = "UPDATE users SET position = 'offline' WHERE username='$user' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);
 	//exit();
}
  header("location: http://localhost/blue/login.php");
  exit();
} 
?>
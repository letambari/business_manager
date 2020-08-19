<?php
// $user = '';
session_start();


$_SESSION = array();



if(isset($_COOKIE['employee_id']) && isset($_COOKIE['e_email']) && isset($_COOKIE['e_password']) && isset($_COOKIE['company_id'])){




 
	setcookie("employee_id", '', strtotime( '-5 days' ), '/');
	setcookie("e_email", '', strtotime( '-5 days' ), '/');
	setcookie("e_pasword", '', strtotime( '-5 days' ), '/');
    setcookie("company_id", '', strtotime( '-5 days' ), '/');

}
 
session_destroy();


// echo $e_email;
// exit();
// Double check to see if their sessions exists
if(isset($_SESSION['e_email'])){
	header("location: message.php?msg=Error:_Logout_Failed");
	exit();
} else {
	if (isset($_GET['user']) ) {
	# code...
	$user = $_GET['user'];

	$db_conx = mysqli_connect("localhost","root","","sphermanager");
 	$sql = "UPDATE employees SET position = 'offline' WHERE e_username='$user' LIMIT 1";
    $query = mysqli_query($db_conx, $sql);
 	//exit();
} 
	// $db_conx = mysqli_connect("localhost","root","","sphermanager");
	// $sql = "UPDATE employees SET position = 'offline' WHERE e_email='$e_email' LIMIT 1";
 //  $query = mysqli_query($db_conx, $sql);
	header("location: login");
	exit();
} 
?>
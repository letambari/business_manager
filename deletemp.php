<?php
include_once("php_includes/check_login_status.php");
if($user_ok != true){
    header("location: login.php");
    exit();
}
$departments = '';
?>
<?php 
// After uploading to online server, change this connection accordingly
include 'php_includes/db_conx.php';

if (isset($_GET['empd'])) {
	# code...

	$empd = $_GET['empd'];

$sql = "SELECT * FROM employees WHERE company_id = '$log_username' AND user_id = '$log_id' AND employee_id = '$empd'";
$query = mysqli_query($db_conx, $sql);
$count_employee = mysqli_num_rows($query);

if ($count_employee == 1) {
	# code...

	$sql = "DELETE FROM employees WHERE company_id = '$log_username' AND user_id = '$log_id' AND employee_id = '$empd'";
	$query = mysqli_query($db_conx, $sql);
	if ($query) {
		# this code deletes the employee records.
		 echo "<script>window.open('employees.php','_self')</script>";
	
	}else{

		echo "error";
	}
} else{

	echo "no";
}
}


if (isset($_GET['clind'])) {
	# code...

	$clind = $_GET['clind'];

$sql = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$log_id' AND client_id = '$clind'";
$query = mysqli_query($db_conx, $sql);
$count_employee = mysqli_num_rows($query);

if ($count_employee == 1) {
	# code...

	$sql = "DELETE FROM clients WHERE company_id = '$log_username' AND user_id = '$log_id' AND client_id = '$clind'";
	$query = mysqli_query($db_conx, $sql);
	if ($query) {
		# code...
		 echo "<script>window.open('clients.php','_self')</script>";
	
	}else{

		echo "error";
	}
} else{

	echo "no";
}
}
?>




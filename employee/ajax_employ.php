<?php
include_once("php_includes/check_login_status.php");
if($user_ok != true){
    header("location: login.php");
    exit();
}
$departments = '';
$e_email = '';
$e_phone = '';
?>
<?php 
// After uploading to online server, change this connection accordingly
include 'php_includes/db_conx.php';

    $FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Username = $_POST['company_code'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$re_password = $_POST['re_password'];
	$employee_id = $_POST['employee_id'];
	$join_date = $_POST['join_date'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$department = $_POST['department'];
	$designation = $_POST['designation'];
	$user_id = $_POST['userID'];

$sql = "SELECT * FROM employees WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query = mysqli_query($db_conx, $sql);
$count_employee = mysqli_num_rows($query);

while ($row = mysqli_fetch_array($query)) {
	# code...
	$e_email = $row['e_email'];
	$e_phone = $row['phone'];

}

//echo $count_employee;

if ($e_email == $email && $e_phone == $phone) {
	# code...
	echo "this Employee details already exists";
} else{

	$sql = "INSERT INTO employees (e_firstname, e_lastname, e_username, e_email, e_password, e_confirmpassword, join_date, phone, company, designation, department, user_id, company_id) VALUES ('$FirstName', '$LastName', '$Username', '$email', '$password', '$re_password', NOW(), '$phone', '$company', '$designation', '$department', '$user_id', '$Username')";
	$query = mysqli_query($db_conx, $sql);
	if ($query) {
		# code...
		echo "New Employee Added!";
	}else{

		echo "error";
	}
}

// if ($query == TRUE) {
	
// 	$sql = "SELECT * FROM videos WHERE id = '$id'";
// 	$query = mysqli_query($con, $sql);
// 	while ($row = mysqli_fetch_array($query)) {
		
// 		$id = $row['id'];
// 		$title = $row['title'];
      
// 	echo '<p><a href="add_category.php">'.$title.' Uploaded, add another video.</p>';
// } 
// }else{
// 	echo "error";
// }

?>


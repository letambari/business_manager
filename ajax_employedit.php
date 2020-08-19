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

    $FirstName = $_POST['firstName'];
	$LastName = $_POST['lastname'];
	$email = $_POST['email'];
	$employee_id = $_POST['employee_id'];
	$phone = $_POST['phone'];
	$department = $_POST['dept'];
	$designation = $_POST['desig'];
	

$sql = "SELECT * FROM employees WHERE employee_id = '$employee_id' AND company_id = '$log_username' AND user_id = '$log_id'";
$query = mysqli_query($db_conx, $sql);
$count_employee = mysqli_num_rows($query);

// while ($row = mysqli_fetch_array($query)) {
// 	# code...
// 	$e_email = $row['e_email'];
// 	$e_phone = $row['phone'];

// }

 // echo $count_employee;
 // exit();

if ($count_employee == 1) {
	# code...
//	echo "this Employee details already exists";
	$sql = "UPDATE employees SET e_firstname = '$FirstName', e_lastname = '$LastName', e_email = '$email', phone = '$phone', designation = '$designation', department = '$department' WHERE employee_id = '$employee_id' AND company_id = '$log_username' AND user_id = '$log_id'";
	$query = mysqli_query($db_conx, $sql);
	if ($query) {
		# code...
		echo "Employee Details Updated!";
	}else{

		echo "error";
	}
} else{

	// $sql = "INSERT INTO employees (e_firstname, e_lastname, e_username, e_email, e_password, e_confirmpassword, join_date, phone, company, designation, department, user_id, company_id) VALUES ('$FirstName', '$LastName', '$Username', '$email', '$password', '$re_password', NOW(), '$phone', '$company', '$designation', '$department', '$user_id', '$Username')";
	echo "this users is not found on your company's database";
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


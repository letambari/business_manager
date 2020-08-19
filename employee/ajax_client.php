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
	$employee_id = $_POST['employee_id'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$user_id = $_POST['userID'];


$sql = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query = mysqli_query($db_conx, $sql);
$count_employee = mysqli_num_rows($query);

while ($row = mysqli_fetch_array($query)) {
	# code...
	$e_email = $row['c_email'];
	$e_phone = $row['c_phone'];

}

//echo $count_employee;

if ($e_email == $email && $e_phone == $phone) {
	# code...
	echo "this Client details already exists";
} else{

	$sql = "INSERT INTO clients (c_firstname, c_lastname, c_email, c_phone, c_companyname, c_clientID, company_id, user_id, creation_date) VALUES ('$FirstName', '$LastName', '$email', '$phone', '$company', '$employee_id', '$Username', '$user_id', NOW())";
	$query = mysqli_query($db_conx, $sql);
	if ($query) {
		# code...
		echo "New Client Added!";
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


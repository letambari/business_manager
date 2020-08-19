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
	$company = $_POST['company'];
	$employee_code = $_POST['employee_code'];

// echo $FirstName;
 //exit();

$sql = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$log_id' AND client_id = '$employee_id' AND c_clientID = '$employee_code'";
$query = mysqli_query($db_conx, $sql);
$count_employee = mysqli_num_rows($query);
// echo $count_employee;
// exit();

if ($count_employee == 1) {
	# code...
	$sql = "UPDATE clients SET c_firstname = '$FirstName', c_lastname = '$LastName', c_email = '$email', c_phone = '$phone', c_companyname = '$company' WHERE company_id = '$log_username' AND user_id = '$log_id' AND client_id = '$employee_id' AND c_clientID = '$employee_code'";
	$query = mysqli_query($db_conx, $sql);
			if ($query) {
				# code...
				echo "Client Details Updated!";
			}else{

				echo "error";
		    } 

}else {

	echo "Client Note Found On Our Database";
	
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


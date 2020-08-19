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

    $project_name = $_POST['project_name'];
	$client = $_POST["client"];
	
	$end_date = $_POST['end_date'];
	$rate = $_POST['rate'];
	$Priority = $_POST['Priority'];
	$project_lead = $_POST['project_lead'];
	$Description = $_POST['Description'];
	//$file = $_POST['file'];
	$userID = $_POST['userID'];
	$company_id = $_POST['company_id'];
	$start = $_POST['start'];
// echo $file;
//   exit();
	// $document = $_FILES['filed']['name'];
 //    $document_tmp = $_FILES['filed']['tmp_name'];

 //      echo $document;
 //  exit();

    

 //    move_uploaded_file($document_tmp,"user/$company_id/$document");


$sql1 = "SELECT * FROM users WHERE username = '$company_id' AND id = '$userID'";
$query1 = mysqli_query($db_conx, $sql1);
$count_employee1 = mysqli_num_rows($query1);

while ($row1 = mysqli_fetch_array($query1)) {
	# code...
	// $e_email = $row['e_email'];
	// $e_phone = $row['phone'];

}

//echo $count_employee;

if ($count_employee1 == 1) {
	# code...
	$sql = "INSERT INTO project (project_title, start_date, end_date, rate, priority, description, leader_id, client_id, user_id, company_id, Status) VALUES ('$project_name', '$start', '$end_date', '$rate', '$Priority', '$Description', '$project_lead', '$client', '$userID', '$company_id', 'Pending')";
	$query = mysqli_query($db_conx, $sql);
	
} else{

	 echo '<p style="color: green">New Project Added</p>';

	// $sql = "INSERT INTO employees (e_firstname, e_lastname, e_username, e_email, e_password, e_confirmpassword, join_date, phone, company, designation, department, user_id, company_id) VALUES ('$FirstName', '$LastName', '$Username', '$email', '$password', '$re_password', NOW(), '$phone', '$company', '$designation', '$department', '$user_id', '$Username')";
	// $query = mysqli_query($db_conx, $sql);
	// if ($query) {
	// 	# code...
	// 	echo "New Employee Added!";
	// }else{

	// 	echo "error";
	// }

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


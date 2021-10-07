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

//getting the inserting items 
    $title = $_POST['Title'];
    $userID = $_POST['userID'];
    $company_code = $_POST['company_code'];
    $deptID = $_POST['deptID'];

// getting the departments
$sql = "SELECT * FROM departments WHERE user_id = '$log_id' AND company_id = '$log_username'";
$query = mysqli_query($db_conx, $sql);
$count_employee = mysqli_num_rows($query);

while ($row = mysqli_fetch_array($query)) {
	# code...
	$departments = $row['department_name'];

}



// checking if the designation already exists

$sql = "SELECT * FROM designation WHERE user_id = '$log_id' AND company_id = '$log_username'";
$query = mysqli_query($db_conx, $sql);
$count_employee = mysqli_num_rows($query);

while ($row = mysqli_fetch_array($query)) {
	# code...
	$designation = $row['designation_name'];

}

//echo $count_employee;

if ($designation == $title) {
	# code...
	echo "this designation already exists";
} else{
    // inserting into the designation database
	$sql = "INSERT INTO designation (department_id, designation_name, company_id, user_id) VALUES ('$deptID', '$title', '$log_username', '$log_id')";
	$query = mysqli_query($db_conx, $sql);
	if ($query) {
		# code...
		echo "New Designation Added!";
	}else{

		echo "error";
	}
}

?>


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

$title = $_POST['Title'];
// $userID = $_POST['userID'];
// $company_code = $_POST['company_code'];

$sql = "SELECT * FROM departments WHERE user_id = '$log_id' AND company_id = '$log_username'";
$query = mysqli_query($db_conx, $sql);
$count_employee = mysqli_num_rows($query);

while ($row = mysqli_fetch_array($query)) {
	# code...
	$departments = $row['department_name'];

}

echo $count_employee;

if ($departments == $title) {
	# code...
	echo "this department already exists";
} else{

	$sql = "INSERT INTO departments (department_name, company_id, user_id) VALUES ('$title', '$log_username', '$log_id')";
	$query = mysqli_query($db_conx, $sql);
	if ($query) {
		# code...
		echo "New Department Added!";
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


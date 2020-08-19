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

if(isset($_GET['task_id'])){

$task_id = $_GET['task_id'];
$tasktitile = $_GET['tasktitile'];
$companyID = $_GET['companyID'];
$userID = $_GET['userID'];
$project_id = $_GET['project_id'];

// echo $task_id.'<br/>'.$tasktitile.'<br/>'.$companyID.'<br/>'.$userID.'<br/>'.$project_id;
// exit();

$sql_p = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id = '$log_id' AND project_id = '$project_id' AND task_desc = '$tasktitile'";
$query_p = mysqli_query($db_conx, $sql_p);
$count_task = mysqli_num_rows($query_p);
while ($row_p = mysqli_fetch_array($query_p)) {
	# code...
	$task_id = $row_p['task_id'];
    $project_idss = $row_p['project_id'];
	$task_desc = $row_p['task_desc'];

}
//echo $count_employee;

if ($count_task >= 1) {
	# code...
	
	$sql = "DELETE FROM task WHERE company_id = '$log_username' AND user_id = '$log_id' AND project_id = '$project_id' AND task_desc = '$tasktitile'";
	$query = mysqli_query($db_conx, $sql);
	if ($query) {
		# code...
		 echo "<script>alert('Task Deleted!')</script>";
         echo "<script>window.open('tasks','_self')</script>";
	
	}else{

		echo "error";
	}
} else{

	// $sql = "INSERT INTO departments (department_name, company_id, user_id) VALUES ('$title', '$company_code', '$userID')";
	// $query = mysqli_query($db_conx, $sql);
	// if ($query) {
	// 	# code...
	// 	echo "New Department Added!";
	// }else{

	// 	echo "error";
	// }


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
}
}

?>


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

$task_desc = $_POST['task_desc'];
$task_id = $_POST['task_id'];
$projectsID = $_POST['projectsID'];


$sql = "SELECT * FROM task WHERE task_id = '$task_id' AND company_id = '$log_username' AND user_id = '$log_id'";
$query = mysqli_query($db_conx, $sql);
$count_record = mysqli_num_rows($query);
while ($row = mysqli_fetch_assoc($query)) {
 	# code...
 } 
 if ($count_record == 1) {
 	# code...
// echo $task_id;
// exit();
//   $task_desc;
 //	exit();
		 	$sql2 = "UPDATE task SET task_desc = '$task_desc', project_id = '$projectsID' WHERE task_id = '$task_id' AND company_id = '$log_username' AND user_id = '$log_id'";
		 	$query2 = mysqli_query($db_conx, $sql2); 
		 	if ($query2 == TRUE) {
		 		# code...
		 		echo "Task Updated!";
		 		exit();
		 	} else{

		 		echo "error";
		 		exit();
		 	}
 }
 


?>


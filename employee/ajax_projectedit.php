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
	$project_id = $_POST['project_id'];

// echo $file;
//   exit();
	// $document = $_FILES['filed']['name'];
 //    $document_tmp = $_FILES['filed']['tmp_name'];

 //      echo $document;
 //  exit();

    // echo $project_lead;
    // exit();

 //    move_uploaded_file($document_tmp,"user/$company_id/$document");


$sql1 = "SELECT * FROM project WHERE company_id = '$log_username' AND user_id = '$log_id' AND project_id = '$project_id'";
$query1 = mysqli_query($db_conx, $sql1);
$count_employee1 = mysqli_num_rows($query1);

while ($row1 = mysqli_fetch_array($query1)) {
	# code...
	// $e_email = $row['e_email'];
	// $e_phone = $row['phone'];
}



if ($count_employee1 == 1) {
	# code...
	echo $count_employee1;

							$sql = "UPDATE project SET project_title = '$project_name', start_date = '$start', end_date = '$end_date', rate = '$rate', priority = '$Priority', description = '$Description', leader_id = '$project_lead', client_id = '$client', Status = '$userID' WHERE user_id = '$log_id' AND company_id = '$log_username' AND project_id = '$project_id'";
	                         $query = mysqli_query($db_conx, $sql);
	if ($query) {
		# code...
		 echo '<p style="color:green">Project Updated Successfully<p>';
		
		} else {
          echo "error 1";
		}
	







}
else{

		echo "error 2";
	}

?>


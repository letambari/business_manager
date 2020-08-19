<?php
include_once("php_includes/check_login_status.php");
if($user_ok != true){
    header("location: login.php");
    exit();
} else{

// After uploading to online server, change this connection accordingly
//include 'php_includes/db_conx.php';

	# code...

  $paymentmethod = $_POST['FirstName'];
  $paymentdate = $_POST['LastName'];
  $invoicenumber = $_POST['userID'];
  $invoicestatus = $_POST['company_code'];

  
$sql_count_invoice = "SELECT * FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id' AND invoicenumber = '$invoicenumber'";
 $query_count_invoice = mysqli_query($db_conx, $sql_count_invoice);

 $count_invoice = mysqli_num_rows($query_count_invoice);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_invoice = mysqli_fetch_array($query_count_invoice)) {
 	
$invoice_id = $row_count_invoice['invoice_id'];

if ($count_invoice >= 1) {
	# code...
	$insert = "UPDATE invoice SET status = '$invoicestatus', paymentmethod = '$paymentmethod', paymentdate = '$paymentdate' WHERE invoicenumber = '$invoicenumber' AND user_id = '$log_id'";		
		$dinsert = mysqli_query($db_conx, $insert);

		if ($dinsert == TRUE) {
			# code...
			echo '<p style="color: green">Details Updated Successfully.</p>';

		} else {

            echo '<p style="color: red">Unfortunately, Something went wrong.</p>';
		}


}
}
// $sql = "SELECT * FROM task WHERE task_id = '$task_id' AND company_id = '$log_username' AND user_id = '$log_id'";
// $query = mysqli_query($db_conx, $sql);
// $count_record = mysqli_num_rows($query);
// while ($row = mysqli_fetch_assoc($query)) {
//  	# code...
//  } 
//  if ($count_record == 1) {
//  	# code...
// // echo $task_id;
// // exit();
// //   $task_desc;
//  //	exit();
// 		 	$sql2 = "UPDATE task SET task_desc = '$task_desc', project_id = '$projectsID' WHERE task_id = '$task_id' AND company_id = '$log_username' AND user_id = '$log_id'";
// 		 	$query2 = mysqli_query($db_conx, $sql2); 
// 		 	if ($query2 == TRUE) {
// 		 		# code...
// 		 		echo "Task Updated!";
// 		 		exit();
// 		 	} else{

// 		 		echo "error";
// 		 		exit();
// 		 	}
//  }
 

}
?>


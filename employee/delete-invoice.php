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

if (isset($_GET['invoicenumber']) && isset($_GET['user_id'])) {
 	# code...
 	$invoicenumber = $_GET['invoicenumber'];
 	$user_id = $_GET['user_id'];

$sql_count_invoice = "SELECT * FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id' AND invoicenumber = '$invoicenumber'";
 $query_count_invoice = mysqli_query($db_conx, $sql_count_invoice);

 $count_invoice = mysqli_num_rows($query_count_invoice);

if ($count_invoice == 1) {
	# code...
	$delete = "DELETE FROM invoice WHERE invoicenumber = '$invoicenumber' AND user_id = '$log_id'";
			$ddelete = mysqli_query($db_conx, $delete);

			if ($ddelete == TRUE) {
				# code...
				$delete = "DELETE FROM invoice_order_item WHERE invoicenumber = '$invoicenumber'";
			$ddelete = mysqli_query($db_conx, $delete);
			 echo "<script>window.open('invoices','_self')</script>";
			}
	exit();
}

}

 ?>
										

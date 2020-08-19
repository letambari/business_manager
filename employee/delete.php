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

if(isset($_GET['pro_id'])){

  $pro_id = $_GET['pro_id'];
  $userID = $_GET['userID'];
  $companyID = $_GET['company_id'];

  $sql = "SELECT * FROM project WHERE user_id = '$userID' AND company_id = '$companyID' AND project_id = '$pro_id'";
  $sql_query = mysqli_query($db_conx, $sql);
  $count = mysqli_num_rows($sql_query);

  if ($count == 1) {
  	# code...

  	$sql_d = "DELETE FROM project WHERE user_id = '$userID' AND company_id = '$companyID' AND project_id = '$pro_id'";
  	$sql_query_d = mysqli_query($db_conx, $sql_d);

  	$sql_c = "DELETE FROM projectclient WHERE user_id = '$userID' AND company_id = '$companyID' AND project_id = '$pro_id'";
  	$sql_query_c = mysqli_query($db_conx, $sql_c);

  	$sql_l = "DELETE FROM projectleaders WHERE user_id = '$userID' AND company_id = '$companyID' AND project_id = '$pro_id'";
  	$sql_query_l = mysqli_query($db_conx, $sql_l);

  	$sql_t = "DELETE FROM projectteam WHERE user_id = '$userID' AND company_id = '$companyID' AND project_id = '$pro_id'";
  	$sql_query_t = mysqli_query($db_conx, $sql_t);

  	$sql_f = "DELETE FROM projectfiles WHERE user_id = '$userID' AND company_id = '$companyID' AND project_id = '$pro_id'";
  	$sql_query_f = mysqli_query($db_conx, $sql_f);
  	  	echo "<script>alert('Project Deleted.!')</script>";
                    echo "<script>window.open('projects','_self')</script>";

  }else {

  	echo "You Don't Have This Project On Your Database";
  }


}

?>


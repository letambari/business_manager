<?php
session_start();
include_once("db_conx.php");



$user_ok = false;
$log_id = "";
$log_email = "";
$log_password = "";
$log_username = "";
//$_SESSION['currentchat'] = '';


// User Verify function
function evalLoggedUser($conx,$id,$e,$p,$u){

$sql = "SELECT ip FROM employees WHERE employee_id='$id' AND e_email='$e' AND e_password='$p' LIMIT 1";
    $query = mysqli_query($conx, $sql);
    $numrows = mysqli_num_rows($query);
  if($numrows > 0){
    return true;
  }
}



if(isset($_SESSION['employee_id']) && isset($_SESSION['e_email']) && isset($_SESSION['e_password']) && isset($_SESSION['company_id'])) {

  $log_id = preg_replace('#[^0-9]#', '', $_SESSION['employee_id']);
  $log_email = mysqli_real_escape_string($db_conx, $_SESSION['e_email']);
  $log_password = preg_replace('#[^a-z0-9]#i', '', $_SESSION['e_password']);
  $log_username = mysqli_real_escape_string($db_conx, $_SESSION['company_id']);


  // Verify the user
  $user_ok = evalLoggedUser($db_conx,$log_id,$log_email,$log_password,$log_username);

} else if(isset($_COOKIE['employee_id']) && isset($_COOKIE['e_email']) && isset($_COOKIE['e_password']) && isset($_COOKIE['company_id'])) {


  $_SESSION['employee_id'] = preg_replace('#[^0-9]#', '', $_COOKIE['employee_id']);
  $_SESSION['e_email'] = mysqli_real_escape_string($db_conx, $_COOKIE['e_email']);
  $_SESSION['e_password'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['e_password']);
  $_SESSION['company_id'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['company_id']);

  $log_id = $_SESSION['employee_id'];
  $log_email =  $_SESSION['e_email'];
  $log_password = $_SESSION['e_password'];
  $log_username = $_SESSION['company_id'];



// Verify the user
$user_ok = evalLoggedUser($db_conx,$log_id,$log_email,$log_password,$log_username);
  
  if($user_ok == true){

   $sql = "UPDATE employees SET ip='$ip', device = '$useragent', lastlogin=now(), position = 'online' WHERE employee_id='$db_id' LIMIT 1";
  $query = mysqli_query($db_conx, $sql);
  }
}



?>
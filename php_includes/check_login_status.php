<?php
session_start();
include_once("db_conx.php");



$user_ok = false;
$log_id = "";
$log_username = "";
$log_email = "";
$log_password = "";
$log_photo = "";
$log_adminType = "";
$log_adminAction = "";
$log_vendor = "";
$log_fullname = "";
$pidss = '';
//$_SESSION['currentchat'] = '';
 
// User Verify function
function evalLoggedUser($conx,$id,$u,$e,$p){

$sql = "SELECT ip FROM users WHERE id='$id' AND email='$e' AND password='$p' LIMIT 1";
    $query = mysqli_query($conx, $sql);
    $numrows = mysqli_num_rows($query);
  if($numrows > 0){
    return true;
  }
}



if(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['password'])) {

  $log_id = preg_replace('#[^0-9]#', '', $_SESSION['id']);
  $log_username = mysqli_real_escape_string($db_conx, $_SESSION['username']);
  $log_email = mysqli_real_escape_string($db_conx, $_SESSION['email']);
  $log_password = preg_replace('#[^a-z0-9]#i', '', $_SESSION['password']);
  //$log_pid = preg_replace('#[^a-z0-9]#i', '', $_SESSION['project_id']);
  


  // Verify the user
  $user_ok = evalLoggedUser($db_conx,$log_id,$log_username,$log_email,$log_password);

} else if(isset($_COOKIE['id']) && isset($_COOKIE['username']) && isset($_COOKIE['email']) && isset($_COOKIE['password'])) {


  $_SESSION['id'] = preg_replace('#[^0-9]#', '', $_COOKIE['id']);
  $_SESSION['username'] = mysqli_real_escape_string($db_conx, $_COOKIE['username']);
  $_SESSION['email'] = mysqli_real_escape_string($db_conx, $_COOKIE['email']);
  $_SESSION['password'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['password']);

  $log_id = $_SESSION['id'];
  $log_username = $_SESSION['username'];
  $log_email =  $_SESSION['email'];
  $log_password = $_SESSION['password'];
  //$log_pid =  $_SESSION['project_id'];



// Verify the user
$user_ok = evalLoggedUser($db_conx,$log_id,$log_fullname,$log_email,$log_password,$log_pid);
  
  if($user_ok == true){

    $sqlup = "UPDATE admin SET lastlogin=now() WHERE id='$log_id' LIMIT 1";
    $queryup = mysqli_query($db_conx, $sqlup);
  }
}
?>

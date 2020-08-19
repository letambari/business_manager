<?php
include_once("php_includes/check_login_status.php");

if($user_ok === true){
  header("location: home");
    exit();
}


if(isset($_POST["exampleInputEmail"])){
// CONNECT TO THE DATABASE

// GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
$e = mysqli_real_escape_string($db_conx, $_POST['exampleInputEmail']);
//$p = md5($_POST['exampleInputPassword']);
//47ecba0e4140332bf8e1cbce9a743210
$p = $_POST['exampleInputPassword'];
// GET USER IP ADDRESS
$ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
$useragent = $_SERVER['HTTP_USER_AGENT'];
$u = mysqli_real_escape_string($db_conx, $_POST['exampleInputUsername']);

// echo $e;
// exit();

if($e == "" || $p == "" || $u == ""){
    echo "login_failed";
    exit();
} else {


  $sql = "SELECT employee_id, e_email, e_password, company_id FROM employees WHERE e_email='$e' LIMIT 1";
  $query = mysqli_query($db_conx, $sql);
  $row = mysqli_fetch_row($query);


  $db_id = $row[0];
  $db_email = $row[1];
  $db_password = $row[2];
  $log_username = $row[3];


  if($p != $db_password || $u != $log_username){
    echo "login_failed";
    exit();
  } else {

    
  // CREATE THEIR SESSIONS AND COOKIES
  $_SESSION['employee_id'] = $db_id;
  $_SESSION['e_email'] = $db_email;
  $_SESSION['e_password'] = $db_password;
  $_SESSION['company_id'] = $log_username;


  setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
  setcookie("email", $db_email, strtotime( '+30 days' ), "/", "", "", TRUE); 
  setcookie("pasword", $db_password, strtotime( '+30 days' ), "/", "", "", TRUE); 
  setcookie("photo", $log_username, strtotime( '+30 days' ), "/", "", "", TRUE);
  


  // UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
  $sql = "UPDATE employees SET ip='$ip', device = '$useragent', lastlogin=now(), position = 'online' WHERE employee_id='$db_id' LIMIT 1";
  $query = mysqli_query($db_conx, $sql);


    echo 'home.php';
    exit();
  }

}
exit();
}
?>
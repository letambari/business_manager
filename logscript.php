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


if($e == "" || $p == ""){
    echo "login_failed";
    exit();
} else {


  $sql = "SELECT id, username, email, password FROM users WHERE email='$e' LIMIT 1";
  $query = mysqli_query($db_conx, $sql);
  $row = mysqli_fetch_row($query);


  $db_id = $row[0];
  $db_fname = $row[1];
  $db_email = $row[2];
  $db_password = $row[3];

//     $cryptpass = crypt($p);
//     include_once ("php_includes/randStrGen.php");
//     $p = randStrGen(20)."$cryptpass".randStrGen(20);
// echo $p;
// exit();

  if($p != $db_password){
    echo "login_failed";
    exit();
  } else {

    
  // CREATE THEIR SESSIONS AND COOKIES
  $_SESSION['id'] = $db_id;
  $_SESSION['username'] = $db_fname;
  $_SESSION['email'] = $db_email;
  $_SESSION['password'] = $db_password;
  


  setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
  setcookie("username", $db_fname, strtotime( '+30 days' ), "/", "", "", TRUE);
  setcookie("email", $db_email, strtotime( '+30 days' ), "/", "", "", TRUE); 
  setcookie("pasword", $db_password, strtotime( '+30 days' ), "/", "", "", TRUE); 




  // UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
  $sql = "UPDATE users SET ip='$ip', device = '$useragent', lastlogin=now(), position = 'online' WHERE id='$db_id' LIMIT 1";
  $query = mysqli_query($db_conx, $sql);


    echo 'home';
    exit();
  }

}
exit();
}
?>
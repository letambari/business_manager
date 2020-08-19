<?php 

/*function generatekey(){
  $keylength = 8;
  $str = "1234567890abcdefghijklmnopqrstuvwxyz()\|][{}?/><;:";
  $randstr = substr(str_shuffle($str), 0, $keylength);
  return $randstr;
} */

/*function generatekey(){
  //$keylength = 8;
  $randstr = uniqid('destiny', true);
  //$randstr = str_shuffle($str);
  return $randstr;
}
*/

include 'php_includes/db_conx.php';

function checkkeys($db_conx, $randstr){
  $sql = "SELECT username FROM Users";
  $result = mysqli_query($db_conx, $sql);

  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['username'] == $randstr) {
      $keyexists = true;
      break;
    } else{
      $keyexists = false;

    }
    
  }

 // return $keyexists;
}

function generatekey($db_conx){

  $keylength = 8;
  $str ="1234567890abcdefghijklmnopqrstuvwxyz";
  $randstr = substr(str_shuffle($str), 0, $keylength);

  $checkkey = checkkeys($db_conx, $randstr);

  while ($checkkey == true) {
    $randstr = substr(str_shuffle($str), 0, $keylength);
    $checkkey = checkkeys($db_conx, $randstr);
  }

  return $randstr;

}

//echo generatekey($con);


?>
<?php
include_once("php_includes/check_login_status.php");
if($user_ok == true){
    header("location: dashboard.php");
    exit();
}

?><?php
// Ajax calls this NAME CHECK code to execute
if(isset($_POST["usernamecheck"])){
  include_once("php_includes/db_conx.php");
  $username = preg_replace('#[^a-z0-9]#i', '', $_POST['usernamecheck']);
  $sql = "SELECT id FROM users WHERE username='$username' LIMIT 1";
    $query = mysqli_query($db_conx, $sql); 
    $uname_check = mysqli_num_rows($query);
    if (strlen($username) < 3 || strlen($username) > 16) {
      echo '<strong style="color:#F00;">3 - 16 characters please</strong>';
      exit();
    }
  if (is_numeric($username[0])) {
      echo '<strong style="color:#F00;">Usernames must begin with a letter</strong>';
      exit();
    }
    if ($uname_check < 1) {
      echo '<strong style="color:#009900;">' . $username . ' is OK</strong>';
      exit();
    } else {
      echo '<strong style="color:#F00;">' . $username . ' is taken</strong>';
      exit();
    }
}
?><?php
// Ajax calls this REGISTRATION code to execute
if(isset($_POST["u"])){
  // CONNECT TO THE DATABASE
  include_once("php_includes/db_conx.php");
  // GATHER THE POSTED DATA INTO LOCAL VARIABLES
  $u = preg_replace('#[^a-z0-9]#i', '', $_POST['u']);
  $e = mysqli_real_escape_string($db_conx, $_POST['e']);
  $p = $_POST['p'];
  
  // GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
  // DUPLICATE DATA CHECKS FOR USERNAME AND EMAIL
  $sql = "SELECT id FROM users WHERE username='$u' LIMIT 1";
    $query = mysqli_query($db_conx, $sql); 
  $u_check = mysqli_num_rows($query);
  // -------------------------------------------
  $sql = "SELECT id FROM users WHERE email='$e' LIMIT 1";
    $query = mysqli_query($db_conx, $sql); 
  $e_check = mysqli_num_rows($query);
  // FORM DATA ERROR HANDLING
  if($u == "" || $e == "" || $p == ""){
    echo "The form submission is missing values.";
        exit();
  } else if ($u_check > 0){ 
        echo "The username you entered is alreay taken";
        exit();
  } else if ($e_check > 0){ 
        echo "That email address is already in use in the system";
        exit();
  } else if (strlen($u) < 3 || strlen($u) > 16) {
        echo "Username must be between 3 and 16 characters";
        exit(); 
    } else if (is_numeric($u[0])) {
        echo 'Username cannot begin with a number';
        exit();
    } else {
  // END FORM DATA ERROR HANDLING
      // Begin Insertion of data into the database
    // Hash the password and apply your own mysterious unique salt
    $cryptpass = crypt($p);
    include_once ("php_includes/randStrGen.php");
    $p_hash = randStrGen(20)."$cryptpass".randStrGen(20);
    // Add user info into the database table for the main site table
    $sql = "INSERT INTO users (username, email, password, ip, signup, lastlogin, notescheck)       
            VALUES('$u','$e','$p_hash','$ip',now(),now(),now())";
    $query = mysqli_query($db_conx, $sql); 
    $uid = mysqli_insert_id($db_conx);
    // Establish their row in the useroptions table
    $sql = "INSERT INTO useroptions (id, username, background) VALUES ('$uid','$u','original')";
    $query = mysqli_query($db_conx, $sql);
    // Create directory(folder) to hold each user's files(pics, MP3s, etc.)
    if (!file_exists("user/$u")) {
      mkdir("user/$u", 0755);
    }
    // Email the user their activation link
    $to = "$e";              
    $from = "auto_responder@yoursitename.com";
    $subject = 'yoursitename Account Activation';
    $message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>yoursitename Message</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><a href="http://www.yoursitename.com"><img src="http://www.yoursitename.com/images/logo.png" width="36" height="30" alt="yoursitename" style="border:none; float:left;"></a>yoursitename Account Activation</div><div style="padding:24px; font-size:17px;">Hello '.$u.',<br /><br />Click the link below to activate your account when ready:<br /><br /><a href="http://www.yoursitename.com/activation.php?id='.$uid.'&u='.$u.'&e='.$e.'&p='.$p_hash.'">Click here to activate your account now</a><br /><br />Login after successful activation using your:<br />* E-mail Address: <b>'.$e.'</b></div></body></html>';
    $headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    mail($to, $subject, $message, $headers);
    echo "signup_success";
    exit();
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Register - HRMS admin template</title>
    
    <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
   
<script src="js/main.js"></script>
<script src="js/ajax.js"></script>
<script>
function restrict(elem){
  var tf = _(elem);
  var rx = new RegExp;
  if(elem == "email"){
    rx = /[' "]/gi;
  } else if(elem == "username"){
    rx = /[^a-z0-9]/gi;
  }
  tf.value = tf.value.replace(rx, "");
}
function emptyElement(x){
  _(x).innerHTML = "";
}
function checkusername(){
  var u = _("username").value;
  if(u != ""){
    _("unamestatus").innerHTML = 'Checking<img src="assets/img/preloader.gif" alt="checking ...">';
    var ajax = ajaxObj("POST", "register.php");
        ajax.onreadystatechange = function() {
          if(ajaxReturn(ajax) == true) {
              _("unamestatus").innerHTML = ajax.responseText;
          }
        }
        ajax.send("usernamecheck="+u);
  }
}
function signup(){
  var u = _("username").value;
  var e = _("email").value;
  var p1 = _("pass1").value;
  var p2 = _("pass2").value;
 
  var status = _("status");
  if(u == "" || e == "" || p1 == "" || p2 == ""){
    status.innerHTML = "Fill out all of the form data";
  } else if(p1 != p2){
    status.innerHTML = "Your password fields do not match";
  } else if( _("terms").style.display == "none"){
    status.innerHTML = "Please view the terms of use";
  } else {
    _("signupbtn").style.display = "none";
    status.innerHTML = '<img src="assets/img/preloader.gif" alt="Processing...">';
    var ajax = ajaxObj("POST", "register.php");
        ajax.onreadystatechange = function() {
          if(ajaxReturn(ajax) == true) {
              if(ajax.responseText != "signup_success"){
          status.innerHTML = ajax.responseText;
          _("signupbtn").style.display = "block";
        } else {
          window.scrollTo(0,0);
          _("signupform").innerHTML = "OK "+u+", check your email inbox and junk mail box at <u>"+e+"</u> in a moment to complete the sign up process by activating your account. You will not be able to do anything on the site until you successfully activate your account.";
        }
          }
        }
        ajax.send("u="+u+"&e="+e+"&p="+p1);
  }
}
function openTerms(){
  _("terms").style.display = "block";
  emptyElement("status");
}
/* function addEvents(){
  _("elemID").addEventListener("click", func, false);
}
window.onload = addEvents; */
</script>
</head>
 <body class="account-page">
  
    <!-- Main Wrapper -->
        <div class="main-wrapper">
      <div class="account-content">
        <a href="job-list" class="btn btn-primary apply-btn">Apply Job</a>
        <div class="container">
        
          <!-- Account Logo -->
          <div class="account-logo">
            <a href="index"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
          </div>
          <!-- /Account Logo -->
          
          <div class="account-box">
            <div class="account-wrapper">
              <h3 class="account-title">Register</h3>
              <p class="account-subtitle">Access to our dashboard</p>
              
              <!-- Account Form -->
           
<div id="pageMiddle">
  
  <form name="signupform" id="signupform" onsubmit="return false;">
   
    <div class="form-group">
                  <label>Company Code</label>
                 
    <input id="username" type="text" class="form-control" onblur="checkusername()" onkeyup="restrict('username')" maxlength="8" value="<?php echo generatekey($db_conx); ?>">
    <span id="unamestatus"></span>
     </div>

  <div class="form-group">
                  <label>Email Address</label>
    <input id="email" class="form-control" type="text" onfocus="emptyElement('status')" onkeyup="restrict('email')" maxlength="88">
  </div>


     <div class="form-group">
                  <label>Password</label>
    <input id="pass1" class="form-control" type="password" onfocus="emptyElement('status')" maxlength="16">
  </div>


     <div class="form-group">
                  <label>Confirm Password</label>
    <input id="pass2" class="form-control" type="password" onfocus="emptyElement('status')" maxlength="16">
  </div>
   
    
    <div class="form-group text-center">
                 <button class="btn btn-primary account-btn" id="signupbtn" onclick="signup()">Create Account</button>
                
                </div>
                
                  <div class="account-footer">
                   <span style="color: green;" id="status"></span>
                </div>

                <div class="account-footer">
                  <p>Already have an account? <a href="login">Login</a></p>
                </div>

                <br><br>

                <div class="form-group">
      <a href="#" onclick="return false" onmousedown="openTerms()">
        View the Terms Of Use
      </a>
    </div>
    <div id="terms" class="form-group" style="display:none;">
      <h3>Terms Of Use</h3>
      <p>1. Play nice here.</p>
      <p>2. Take a bath before you visit.</p>
      <p>3. you're welcome.</p>
    </div>

                
              </form>
   </div>
          </div>
        </div>
      </div>
        </div>
    <!-- /Main Wrapper -->
    
    <!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
    
    <!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>
    
    </body>
</html>
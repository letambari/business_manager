<?php
include_once("php_includes/check_login_status.php");
if($user_ok == true){
    header("location: home");
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
        <title>Login - HRMS admin template</title>
		
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
  function emptyElement(x){
  _(x).innerHTML = "";
  }
  function login(){
  var exampleInputEmail = _("exampleInputEmail").value;
  var exampleInputUsername = _("exampleInputUsername").value;
  var exampleInputPassword = _("exampleInputPassword").value;
  if(exampleInputEmail == "" || exampleInputPassword == "" || exampleInputUsername == ""){
  _("status").innerHTML = "Fill out all of the form data";
  } else {
  _("loginbtn").style.display = "none";
  _("status").innerHTML = '<img src="assets/img/preloader.gif" alt="Processing...">';
  var ajax = ajaxObj("POST", "logscript.php");
          ajax.onreadystatechange = function() {
         if(ajaxReturn(ajax) == true) {
             if(ajax.responseText == "login_failed"){
                  _("status").innerHTML = "Login unsuccessful, please try again.";
                  _("loginbtn").style.display = "block";
          } else {

              window.location = ajax.responseText;
          
          }

         }
          }
          ajax.send("exampleInputEmail="+exampleInputEmail+"&exampleInputPassword="+exampleInputPassword+"&exampleInputUsername="+exampleInputUsername);
  }
  }
  </script>
 </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<a href="employee/login" class="btn btn-primary apply-btn">Employee Portal</a>
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.html"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to our dashboard</p>

							<div for="exampleInputEmail" class="form-group">
									<label>Email Address</label>
									<input id="exampleInputEmail" class="form-control" type="email">
								</div>

								<div for="exampleInputEmail" class="form-group">
									<label>Company Code</label>
									<input id="exampleInputUsername" class="form-control" type="text">
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col">
											<label for="exampleInputPassword">Password</label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="forgot-password">
												Forgot password?
											</a>
										</div>
									</div>
									<input class="form-control" type="password" id="exampleInputPassword">
								</div>



                 
                </div>
             
                <div class="form-group text-center">
                  <input type="submit" value="LOGIN" class="btn btn-primary account-btn"  id="loginbtn" onClick="javascript:login();" name="">

                   <label class="form-check-label" id="status">
                      
                    </label>
                </div>
                   
              
                <div class="account-footer">
									<p>Don't have an account yet? <a href="register.php">Register</a></p>
								</div>
							</form>
					</div>
					</div>
					<br>
					 <div class="form-group text-center">
            <p class="text-black font-weight-medium text-center flex-grow align-self-end">Copyright &copy; SPHERE <?php echo date("Y");?>  All rights reserved.</p>
          </div>
        
				</div>

			</div>

        </div>
		<!-- /Main Wrapper -->
         
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>

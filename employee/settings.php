<?php include 'parsers/header.php'; ?>
			<!-- /Header -->
			
			<!-- Sidebar -->
           <?php include 'parsers/Sidebar2.php'; ?>
			<!-- Sidebar -->
			<?php 

			$sql_users = "SELECT * FROM users WHERE id = '$user_id' AND username = '$log_username'";
$query_users = mysqli_query($db_conx, $sql_users);

 $count_users = mysqli_num_rows($query_users);
// printf("Result set has %d rows.\n",$rowcount)
while ($getusers = mysqli_fetch_array($query_users)) {
	# code...
	
$id = $getusers['id'];
$ContactPerson = $getusers['ContactPerson'];
$address = $getusers['address'];
$city = $getusers['city'];
$state_province = $getusers['state_province'];
$username = $getusers['username'];
$email = $getusers['email'];
$password = $getusers['password'];
$CompanyName = $getusers['CompanyName'];
$website = $getusers['website'];
$country = $getusers['country'];
$PostalCode = $getusers['PostalCode'];
$phone1 = $getusers['phone'];

$userlevel = $getusers['userlevel'];
$avatar = $getusers['avatar'];
$ip = $getusers['ip'];
$signup = $getusers['signup'];
$lastlogin = $getusers['lastlogin'];
$notescheck = $getusers['notescheck'];
$activated = $getusers['activated'];
$service = $getusers['service'];
$ALTphone = $getusers['ALTphone'];

}
 ?>
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
						
							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-title">Company Settings</h3>
									</div>
								</div>
							</div>
							<!-- /Page Header -->
							
							 <form id="upload_form" enctype="multipart/form-data" method="post">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Company Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="CompanyName" id="CompanyName" value="<?php echo $CompanyName; ?>" disabled>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Contact Person</label>
											<input class="form-control" name="ContactPerson" id="ContactPerson" value="<?php echo $ContactPerson; ?>" type="text" disabled>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label>Address</label>
											<input class="form-control" name="address" id="address"  value="<?php echo $address; ?>" type="text" disabled>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>Country</label>
											<select name="country" id="country" class="form-control select" disabled>
												<option><?php echo $country; ?></option>
												<option>USA</option>
												<option>United Kingdom</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>City</label>
											<input name="city" id="city" class="form-control" value="<?php echo $city; ?>" type="text" disabled>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>State/Province</label>
											<input name="state_province" id="state_province" class="form-control" value="<?php echo $state_province; ?>" type="text" disabled>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-3">
										<div class="form-group">
											<label>Postal Code</label>
											<input class="form-control" name="PostalCode" id="PostalCode" value="<?php echo $PostalCode; ?>" type="text" disabled>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" name="email" id="email" value="<?php echo $email; ?>" type="email" disabled>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Phone Number</label>
											<input name="phone" id="phone" class="form-control" value="<?php echo $phone1; ?>" type="text" disabled>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Alternate Number</label>
											<input name="ALTphone" id="ALTphone" class="form-control" value="<?php echo $ALTphone; ?>" type="text" disabled>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Company Code</label>
											<input class="form-control" name="username" id="username" value="<?php echo $username; ?>" type="text" disabled>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label>Website Url</label>
											<input class="form-control" name="website" id="website" value="<?php echo $website; ?>" type="text" disabled>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label>Service</label>
											<input class="form-control" name="service" id="service" value="<?php echo $service; ?>" type="text" disabled>
										</div>
									</div>
								</div>
								<!-- <div class="submit-section">
                                        <button name="myBtn" type="submit" onclick="ajax_sett();" class="btn btn-primary submit-btn">Save</button>
                                    </div> -->
                                     <div id="status"></div>
							</form>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
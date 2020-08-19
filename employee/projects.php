<?php include 'parsers/header.php'; ?>
			<!-- /Header -->
		<?php include'parsers/sidebar.php' ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Projects</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="home">Dashboard</a></li>
									<li class="breadcrumb-item active">Projects</li>
								</ul>
							</div>
							
							<?php echo $addprojectlicence; ?>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
				<!-- 	<div class="row filter-row">
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Project Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>Select Roll</option>
									<option>Web Developer</option>
									<option>Web Designer</option>
									<option>Android Developer</option>
									<option>Ios Developer</option>
								</select>
								<label class="focus-label">Designation</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div> -->
					<!-- Search Filter -->
					
					<div class="row">
						<?php echo $project; ?>
						
					
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Create Project Modal -->
				<div id="create_project" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="upload_form" method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Project Name</label>
												<input name="project_name" id="project_name" class="form-control" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Client</label>
												<select class="form-control" name="client" id="client">
													<option>Select Client</option>
	<?php 

$sql_count_users = "SELECT * FROM users WHERE username = '$log_username' AND id = '$log_id'";
$query_count_user = mysqli_query($db_conx, $sql_count_users);

 $count_user = mysqli_num_rows($query_count_user);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_user = mysqli_fetch_array($query_count_user)) {
 	
 	$userid = $row_count_user['id'];
	$ContactPerson = $row_count_user['ContactPerson'];
	$lastname = $row_count_user['lastname'];
	$CompanyName = $row_count_user['CompanyName'];
	$user_id = $row_count_user['user_id'];
	

	echo '<option value="'.$Sphere.'">'.$CompanyName.'</option>';


}

													?>
													<?php 

													$sql_count_client = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query_count_client = mysqli_query($db_conx, $sql_count_client);

 $count_client = mysqli_num_rows($query_count_client);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_client = mysqli_fetch_array($query_count_client)) {
 	
 	$client_id = $row_count_client['client_id'];
	$e_firstname = $row_count_client['c_firstname'];
	$e_lastname = $row_count_client['c_lastname'];
	$c_clientID = $row_count_client['c_clientID'];
	$e_email = $row_count_client['c_email'];
	$join_date = $row_count_client['creation_date'];
	$phone = $row_count_client['c_phone'];
	$company = $row_count_client['c_companyname'];
	$user_id = $row_count_client['user_id'];
	$company_id = $row_count_client['company_id'];

	echo '<option value="'.$client_id.'">'.$e_firstname.' '.$e_lastname.'</option>';


}

													?>												
													
												</select>
											</div>
										</div>
									</div>
									<div class="row">
									<!-- 	<div class="col-sm-6">
											<div class="form-group">
												<label>Start Date</label>
												<div class="cal-icon">
													<input class="form-control" type="date" name="start_dat" id="date">
												</div>
											</div>
										</div> -->

										<div class="col-sm-6">
											<div class="form-group">
												<label>Start Date</label>
												<div class="cal-icon">
													<input class="form-control" type="date" name="start" id="start">
												</div>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>End Date</label>
												<div class="cal-icon">
													<input class="form-control" type="date" name="end_date" id="end_date">
												</div>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label>Rate</label>
												<input placeholder="$50" class="form-control" type="text" name="rate" id="rate">

											</div>
										</div>
										<input value="<?php echo $log_id; ?>" class="form-control" type="hidden" name="userID" id="userID">
										<input value="<?php echo $log_username; ?>" class="form-control" type="hidden" name="company_id" id="company_id">
										<!-- <div class="col-sm-3">
											<div class="form-group">
												<label>&nbsp;</label>
												<select class="select" name="hourly" id="hourly">
													<option value="Hourly">Hourly</option>
													<option value="Fixed">Fixed</option>
												</select>
											</div>
										</div> -->
										<div class="col-sm-6">
											<div class="form-group">
												<label>Priority</label>
												<select class="form-control" name="Priority" id="Priority">
													<option value="High">High</option>
													<option value="Medium">Medium</option>
													<option value="Low">Low</option>
												</select>
											</div>
										</div>

										<!-- <div class="col-sm-6">
											<div class="form-group">
												<label>Status</label>
												<select class="select" name="status" id="status">
													<option value="Pending">Pending</option>
													<option value="Completed">Completed</option>
													<option value="Not Started">Not Started</option>
												</select>
											</div>
										</div> -->
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Add Project Leader</label>
												<select class="form-control" name="project_lead" id="project_lead">
													<option>Choose Project Lead</option>
													<option value="<?php echo $userid; ?>"><?php echo $ContactPerson; ?></option>
													<?php
$sql_count_employee = "SELECT * FROM employees WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query_count_employee = mysqli_query($db_conx, $sql_count_employee);



 $count_employee = mysqli_num_rows($query_count_employee);

 while ($row_employee = mysqli_fetch_array($query_count_employee)) {
 	
 	$employee_id = $row_employee['employee_id'];
	$e_firstname = $row_employee['e_firstname'];
	$e_lastname = $row_employee['e_lastname'];
	$e_username = $row_employee['e_username'];
	$e_email = $row_employee['e_email'];
	$e_password = $row_employee['e_password'];
	$e_confirmpassword = $row_employee['e_confirmpassword'];
	$join_date = $row_employee['join_date'];
	$phone = $row_employee['phone'];
	$company = $row_employee['company'];
	$designation = $row_employee['designation'];	
	$department = $row_employee['department'];
	$user_id = $row_employee['user_id'];
	$company_id = $row_employee['company_id'];

	echo '<option value="'.$employee_id.'">'.$e_firstname.' '.$e_lastname.'</option>';
}
													?>

												</select>
											</div>
										</div>
									
									</div>
								
									<div class="form-group">
										<label>Description</label>
										<textarea rows="4" class="form-control summernote" placeholder="Enter your message here" name="Description" id="Description"></textarea>
									</div>
									<!-- <div class="form-group">
										<label>Upload Files</label>
										<input class="form-control" type="file" name="file" id="file">
									</div> -->
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" name="myBtn" type="submit" onclick="ajax_project();">Submit</button>
									</div>
									<div id="status"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Create Project Modal -->
				
				<!-- Edit Project Modal -->
				<div id="edit_project" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Project</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form id="upload_form" method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Project Name</label>
												<input name="project_title" id="project_title" class="form-control" value="<?php echo $project_title; ?>" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Client</label>
												<select class="select" name="client" id="client">
													<option><?php echo $p_firstname; ?> <?php echo $p_lastname; ?></option>
													<?php 

													$sql_count_client = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query_count_client = mysqli_query($db_conx, $sql_count_client);

 $count_client = mysqli_num_rows($query_count_client);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_client = mysqli_fetch_array($query_count_client)) {
 	
 	$client_id = $row_count_client['client_id'];
	$e_firstname = $row_count_client['c_firstname'];
	$e_lastname = $row_count_client['c_lastname'];
	$c_clientID = $row_count_client['c_clientID'];
	$e_email = $row_count_client['c_email'];
	$join_date = $row_count_client['creation_date'];
	$phone = $row_count_client['c_phone'];
	$company = $row_count_client['c_companyname'];
	$user_id = $row_count_client['user_id'];
	$company_id = $row_count_client['company_id'];

	echo '<option value="'.$client_id.'">'.$e_firstname.' '.$e_lastname.'</option>';


}

													?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
									<!-- 	<div class="col-sm-6">
											<div class="form-group">
												<label>Start Date</label>
												<div class="cal-icon">
													<input class="form-control" type="date" name="start_dat" id="date">
												</div>
											</div>
										</div> -->

										<div class="col-sm-6">
											<div class="form-group">
												<label>Start Date</label>
												<div class="cal-icon">
													<input class="form-control" type="date" name="start" id="start" value="<?php echo $start_date; ?>">
												</div>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>End Date</label>
												<div class="cal-icon">
													<input class="form-control" type="date" name="end_date" id="end_date" value="<?php echo $end_date; ?>">
												</div>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label>Rate</label>
												<input placeholder="$50" class="form-control" type="text" name="rate" id="rate" value="<?php echo $rate; ?>">

											</div>
										</div>
										<input value="<?php echo $log_id; ?>" class="form-control" type="hidden" name="userID" id="userID">
										<input value="<?php echo $log_username; ?>" class="form-control" type="hidden" name="company_id" id="company_id">
										<input value="<?php echo $project_id; ?>" class="form-control" type="hidden" name="project_id" id="project_id">
										<!-- <div class="col-sm-3">
											<div class="form-group">
												<label>&nbsp;</label>
												<select class="select" name="hourly" id="hourly">
													<option value="Hourly">Hourly</option>
													<option value="Fixed">Fixed</option>
												</select>
											</div>
										</div> -->
										<div class="col-sm-6">
											<div class="form-group">
												<label>Priority</label>
												<select class="select" name="Priority" id="Priority">
													<option><?php echo $priority; ?></option>
													<option value="High">High</option>
													<option value="Medium">Medium</option>
													<option value="Low">Low</option>
												</select>
											</div>
										</div>

										<!-- <div class="col-sm-6">
											<div class="form-group">
												<label>Status</label>
												<select class="select" name="status" id="status">
													<option value="Pending">Pending</option>
													<option value="Completed">Completed</option>
													<option value="Not Started">Not Started</option>
												</select>
											</div>
										</div> -->
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Add Project Leader</label>
												<select class="select" name="project_lead" id="project_lead">
													<option><?php echo $peee_firstname; ?> <?php echo $peee_lastname; ?></option>
													<?php
$sql_count_employee = "SELECT * FROM employees WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query_count_employee = mysqli_query($db_conx, $sql_count_employee);



 $count_employee = mysqli_num_rows($query_count_employee);

 while ($row_employee = mysqli_fetch_array($query_count_employee)) {
 	
 	$employee_id = $row_employee['employee_id'];
	$e_firstname = $row_employee['e_firstname'];
	$e_lastname = $row_employee['e_lastname'];
	$e_username = $row_employee['e_username'];
	$e_email = $row_employee['e_email'];
	$e_password = $row_employee['e_password'];
	$e_confirmpassword = $row_employee['e_confirmpassword'];
	$join_date = $row_employee['join_date'];
	$phone = $row_employee['phone'];
	$company = $row_employee['company'];
	$designation = $row_employee['designation'];	
	$department = $row_employee['department'];
	$user_id = $row_employee['user_id'];
	$company_id = $row_employee['company_id'];

	echo '<option value="'.$employee_id.'">'.$e_firstname.' '.$e_lastname.'</option>';
}
													?>
												</select>
											</div>
										</div>
									
									</div>
								
									<div class="form-group">
										<label>Description</label>
										<textarea rows="4" class="form-control summernote" placeholder="Enter your message here" name="Description" id="Description"><?php echo $description; ?></textarea>
									</div>
									<!-- <div class="form-group">
										<label>Upload Files</label>
										<input class="form-control" type="file" name="file" id="file">
									</div> -->
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" name="myBtn" type="submit" onclick="ajax_projectedit();">Submit</button>
									</div>
									<div id="status"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Project Modal -->
				
				<!-- Delete Project Modal -->
			
				<!-- /Delete Project Modal -->
				
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
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Summernote JS -->
		<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
    </body>
</html>
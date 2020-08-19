<?php include 'parsers/header.php'; ?>
            <!-- /Header -->
        <?php include'parsers/sidebar.php' ?>
			<!-- /Sidebar -->
	
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title"><?php echo $log_username; ?></h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Project</a></li>
									<li class="breadcrumb-item active">Task</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Edit Task</h4>
								</div>
								<div class="card-body">
									<?php if (isset($_GET['taskID'])) {
	# code...
	$taskID = $_GET['taskID'];

    
$sql_p = "SELECT * FROM task WHERE task_id = '$taskID'";
$query_p = mysqli_query($db_conx, $sql_p);
while ($row_p = mysqli_fetch_array($query_p)) {
	# code...
	$task_id = $row_p['task_id'];
    $project_idss = $row_p['project_id'];
	$task_desc = $row_p['task_desc'];
	$task_status = $row_p['status'];   

	$sql_p = "SELECT * FROM project WHERE project_id = '$project_idss'";
$query_p = mysqli_query($db_conx, $sql_p);
while ($row_p = mysqli_fetch_array($query_p)) {
    # code...
    $project_id = $row_p['project_id'];
    $project_titled = $row_p['project_title'];
    $start_date = $row_p['start_date'];
    $end_date = $row_p['end_date'];
    $rate = $row_p['rate'];
    $rate_time = $row_p['rate_time'];
    $priority = $row_p['priority'];
    $description = $row_p['description'];
    $user_id = $row_p['user_id'];
    $company_id = $row_p['company_id'];
    $status = $row_p['Status'];

    $op = '<option value='.$project_id.'">'.$project_title.'</option>
                           ';                                              
                                                   
	//echo $taskID;
	//exit();
}}}
	?>

	 <form id="upload_form" enctype="multipart/form-data" method="post">
									
										<div class="form-group row">
											<label class="col-form-label col-md-2">Select Project</label>
											<div class="col-md-10">
												<select class="form-control" id="projectsID">
													$op
													 <?php 

$sql_p = "SELECT * FROM project WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query_p = mysqli_query($db_conx, $sql_p);
while ($row_p = mysqli_fetch_array($query_p)) {
    # code...
    $project_id = $row_p['project_id'];
    $project_title = $row_p['project_title'];
    $start_date = $row_p['start_date'];
    $end_date = $row_p['end_date'];
    $rate = $row_p['rate'];
    $rate_time = $row_p['rate_time'];
    $priority = $row_p['priority'];
    $description = $row_p['description'];
    $user_id = $row_p['user_id'];
    $company_id = $row_p['company_id'];
    $status = $row_p['Status'];

    echo '<option value='.$project_id.'">'.$project_title.'</option>
                           ';
}
                            ?>
													
												</select>
											</div>
										</div>
									
										
										<div class="form-group row">
											<label class="col-form-label col-md-2">Task Description</label>
											<div class="col-md-10">
												<textarea rows="5" cols="5" class="form-control" placeholder="Enter text here" name="editdept" id="task_desc"></textarea>
												 <input class="form-control" name="editdeptid" id="task_id" value="<?php echo $taskID; ?>" type="hidden">
											</div>
										</div>
										<div class="form-group mb-0 row">
											<label class="col-form-label col-md-2"></label>
											<div class="col-md-10">
												<div class="input-group">
												
												
													<div class="input-group-append">
														<button class="btn btn-primary" type="button" name="myBtn" type="submit" onclick="ajax_edittask();">Update</button>
													</div>
                                                  
													<div class="input-group-append" style="padding-left: 15px;">
														<a href="tasks" class="btn btn-primary" type="button">Back</a>
													</div>
												</div>
												<div id="status"></div>
											</div>
										</div>
									</form>
 


								</div>
							</div>
							
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/app.js"></script>
		
    </body>
</html>
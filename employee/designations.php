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
								<h3 class="page-title">Designations</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Designations</li>
								</ul>
							</div>
							<?php echo $ddesign; ?>

						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th style="width: 30px;">#</th>
											<th>Designation </th>
											<th>Department </th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									
										
										
											<?php echo $getdesgn; ?>
										
									
									
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

				<!-- Add Designation Modal -->
				<div id="add_designation" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Designation</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								 <form id="upload_form" enctype="multipart/form-data" method="post">
                        

                                   <div class="form-group">
                                        <label>Designation Name <span class="text-danger">*</span></label>
                                        <input name="title" id="title" class="form-control" type="text">
                                    </div>

                                    <div class="form-group">
                                        <label>Department <span class="text-danger">*</span></label>
                                        <select class="select" name="deptID" id="deptID">
                                            <option>Select Department</option>
                                             <?php 
    $sql_count_departments = "SELECT * FROM departments WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query_count_departments = mysqli_query($db_conx, $sql_count_departments);

 $count_departments = mysqli_num_rows($query_count_departments);

 while ($row_departments = mysqli_fetch_array($query_count_departments)) {
    
    $department_id = $row_departments['department_id'];
    $department_name = $row_departments['department_name'];
    $company_id = $row_departments['company_id'];
    $user_id = $row_departments['user_id'];


    echo "<option value='".$department_id."'>".$department_name."</option>";
       

        $i++;

             
 } ?>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>user id <span class="text-danger">*</span></label>
                                        <input name="userID" id="userID" value="<?php echo $log_id; ?>" class="form-control" type="text">
                                    </div> 

                                    <div class="form-group">
                                        <label>company code <span class="text-danger">*</span></label>
                                        <input name="company_code" id="company_code" value="<?php echo $log_username; ?>" class="form-control" type="text">
                                    </div>

                                    <div class="submit-section">
                                        <button name="myBtn" type="submit" onclick="ajax_desgn();" class="btn btn-primary submit-btn">Save</button>
                                    </div>
                                     <div id="status"></div>

                    </form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Designation Modal -->
				
				<!-- Edit Designation Modal -->
				<div id="edit_designation" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Designation</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label>Designation Name <span class="text-danger">*</span></label>
										<input class="form-control" value="Web Developer" type="text">
									</div>
									<div class="form-group">
										<label>Department <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select Department</option>
											<option>Web Development</option>
											<option>IT Management</option>
											<option>Marketing</option>
										</select>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Designation Modal -->
				
				<!-- Delete Designation Modal -->
				<div class="modal custom-modal fade" id="delete_designation" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Designation</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Designation Modal -->
			
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
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>
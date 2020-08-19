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
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<div class="profile-img-wrap">
											<div class="profile-img">
												<a href="">
													<img src="assets/img/profiles/avatar-19.jpg" alt="">
												</a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0"><?php echo $profile_company; ?></h3>
														<h5 class="company-role m-t-0 mb-0"><?php echo $profile_e_firstname .' '. $profile_e_lastname; ?></h5>
														<!--<small class="text-muted">CEO</small>-->
														<div class="staff-id">Client ID : <?php echo $CLIENTID; ?></div>
														<div class="staff-msg"><a href="https://wa.me/<?php echo $profile_phone; ?>" class="fa fa-whatsapp"></a>
															<a href="#" class="fa fa-zoom"></a></div>

														
													</div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<span class="title">Phone:</span>
															<span class="text"><a href=""><?php echo $profile_phone; ?></a></span>
														</li>
														<li>
															<span class="title">Email:</span>
															<span class="text"><a href="mailto:<?php echo $profile_e_email; ?>"><?php echo $profile_e_email; ?></a></span>
														</li>
														<!--
														<li>
															<span class="title">Birthday:</span>
															<span class="text">2nd August</span>
														</li> -->
														<li>
															<span class="title">Reg Date:</span>
															<span class="text"><?php echo $profile_join_date; ?></span>
														</li>
														<!-- <li>
															<span class="title">Address:</span>
															<span class="text">5754 Airport Rd, Coosada, AL, 36020</span>
														</li>
														<li>
															<span class="title">Gender:</span>
															<span class="text">Male</span>
														</li> -->
													</ul>
												</div>
											</div>
										</div>
									</div>
										
									<div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#" style="color: white; background-color: blue;"><i class="fa fa-pencil"></i></a></div>
									<div class="pro-edit"><a class="edit-icon" href="deletemp.php?clind=<?php echo $profile_client_id; ?>" style="color: white; background-color: red;"><i class="fa fa-trash" style="color: white; background-color: red;"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					 <div class="card tab-box">
						<div class="row user-tabs">
							<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item col-sm-3"><a class="nav-link active" data-toggle="tab" href="#myprojects">Projects</a></li>
									<!-- <li class="nav-item col-sm-3"><a class="nav-link" data-toggle="tab" href="#tasks">Tasks</a></li> -->
								</ul>
							</div>
						</div>
					</div>

					<!-- Profile Modal -->
				 <div id="profile_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Profile Information</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="post" id="upload_form" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-12">
											<div class="profile-img-wrap edit-img">
												<img class="inline-block" src="assets/img/profiles/avatar-02.jpg" alt="user">
												<div class="fileupload btn">
													<span class="btn-text">edit</span>
													<input class="upload" type="file">
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>First Name</label>
														<input type="text" class="form-control" name="firstname" id="firstName" value="<?php echo $profile_e_firstname; ?>">
													</div>
												</div>

													<div class="col-md-6">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" name="lastname" id="lastname"class="form-control" value="<?php echo $profile_e_lastname; ?>">
													</div>
												</div>

												
												<input type="hidden" name="employee_id" id="employee_id"class="form-control" value="<?php echo $profile_client_id; ?>">
												<input type="hidden" name="employee_code" id="employee_code"class="form-control" value="<?php echo $CLIENTID; ?>">

												<!-- <div class="col-md-6">
													<div class="form-group">
														<label>Birth Date</label>
														<div class="cal-icon">
															<input class="form-control datetimepicker" type="text" value="05/06/1985">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Gender</label>
														<select class="select form-control">
															<option value="male selected">Male</option>
															<option value="female">Female</option>
														</select>
													</div>
												</div> -->
											</div>
										</div>
									</div>

									<div class="row">
										<!-- <div class="col-md-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control" value="4487 Snowbird Lane">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>State</label>
												<input type="text" class="form-control" value="New York">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Country</label>
												<input type="text" class="form-control" value="United States">
											</div>
										</div> -->

										 <div class="col-md-6">
											<div class="form-group">
												<label>Email</label>
												<input type="email" name="email" id="email" class="form-control" value="<?php echo $profile_e_email; ?>">
											</div>
										</div> 

										<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number</label>
												<input type="text" name="phone" id="phone"class="form-control" value="<?php echo $profile_phone; ?>">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Company Name</label>
												<input type="text" name="phone" id="company"class="form-control" value="<?php echo $profile_company; ?>">
											</div>
										</div>

										
										<!-- <div class="col-md-6">
											<div class="form-group">
												<label>Reports To <span class="text-danger">*</span></label>
												<select class="select">
													<option>-</option>
													<option>Wilmer Deluna</option>
													<option>Lesley Grauer</option>
													<option>Jeffery Lalor</option>
												</select>
											</div>
										</div> -->
									</div>
											
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" name="myBtn" type="submit" onclick="ajax_editclient();">Submit</button>
									</div>
									 <div id="status"></div>
								</form>
							</div>
						</div>
					</div>
				</div> 
				<!-- /Profile Modal -->

                  <div class="row">
                        <div class="col-lg-12"> 
							<div class="tab-content profile-tab-content">
								
								<!-- Projects Tab -->
								<div id="myprojects" class="tab-pane fade show active">
									<div class="row">
									
										
										
										<?php echo $thedetails2; ?>
										
									</div>
								</div>
								<!-- /Projects Tab -->
								
								<!-- Task Tab -->
								<!--
								<div id="tasks" class="tab-pane fade">
									<div class="project-task">
										<ul class="nav nav-tabs nav-tabs-top nav-justified mb-0">
											<li class="nav-item"><a class="nav-link active" href="#all_tasks" data-toggle="tab" aria-expanded="true">All Tasks</a></li>
											<li class="nav-item"><a class="nav-link" href="#pending_tasks" data-toggle="tab" aria-expanded="false">Pending Tasks</a></li>
											<li class="nav-item"><a class="nav-link" href="#completed_tasks" data-toggle="tab" aria-expanded="false">Completed Tasks</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane show active" id="all_tasks">
												<div class="task-wrapper">
													<div class="task-list-container">
														<div class="task-list-body">
															<ul id="task-list">
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient appointment booking</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Appointment booking with payment gateway</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="completed task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label">Doctor available module</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient and Doctor video conferencing</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Private chat module</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient Profile add</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
															</ul>
														</div>
														<div class="task-list-footer">
															<div class="new-task-wrapper">
																<textarea  id="new-task" placeholder="Enter new task here. . ."></textarea>
																<span class="error-message hidden">You need to enter a task first</span>
																<span class="add-new-task-btn btn" id="add-task">Add Task</span>
																<span class="btn" id="close-task-panel">Close</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="pending_tasks"></div>
											<div class="tab-pane" id="completed_tasks"></div>
										</div>
									</div>
								</div> -->
								<!-- /Task Tab -->
								
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Content -->
				
            </div>
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
		
		<!-- Task JS -->
		<script src="assets/js/task.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
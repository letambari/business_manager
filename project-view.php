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
								<h3 class="page-title"><?php echo $project_titles; ?></h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Project</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#edit_project"><i class="fa fa-plus"></i> Edit Project</a>
								<!-- <a href="task-board" class="btn btn-white float-right m-r-10" data-toggle="tooltip" title="Task Board"><i class="fa fa-bars"></i></a> -->
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									<div class="project-title">
										<h5 class="card-title"><?php echo $project_titles; ?></h5>
										 <small class="block text-ellipsis m-b-15"><span class="text-xs"><?php echo $countthetask2; ?></span> <span class="text-muted">open tasks, </span><span class="text-xs"><?php echo $countthetask1; ?></span> <span class="text-muted">tasks completed</span></small> 
									</div>
									<p><?php echo $descriptions; ?></p>
								</div>
							</div>
							<!-- <div class="card">
								<div class="card-body">
				                    <h5 class="card-title m-b-20">Uploaded image files</h5>
									<div class="row">
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/placeholder.jpg" class="img-fluid" alt="">
												</div>
												<div class="uploaded-img-name">
													 demo.png
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/placeholder.jpg" class="img-fluid" alt="">
												</div>
												<div class="uploaded-img-name">
													 demo.png
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/placeholder.jpg" class="img-fluid" alt="">
												</div>
												<div class="uploaded-img-name">
													 demo.png
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
											<div class="uploaded-box">
												<div class="uploaded-img">
													<img src="assets/img/placeholder.jpg" class="img-fluid" alt="">
												</div>
												<div class="uploaded-img-name">
													 demo.png
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<div class="card">
								<div class="card-body">
									<!-- <h5 class="card-title m-b-20">Uploaded files</h5>
									<ul class="files-list">
										<li>
											<div class="files-cont">
												<div class="file-type">
													<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
												</div>
												<div class="files-info">
													<span class="file-name text-ellipsis"><a href="#">AHA Selfcare Mobile Application Test-Cases.xls</a></span>
													<span class="file-author"><a href="#">John Doe</a></span> <span class="file-date">May 31st at 6:53 PM</span>
													<div class="file-size">Size: 14.8Mb</div>
												</div>
												<ul class="files-action">
													<li class="dropdown dropdown-action">
														<a href="" class="dropdown-toggle btn btn-link" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Download</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Share</a>
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<div class="files-cont">
												<div class="file-type">
													<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
												</div>
												<div class="files-info">
													<span class="file-name text-ellipsis"><a href="#">AHA Selfcare Mobile Application Test-Cases.xls</a></span>
													<span class="file-author"><a href="#">Richard Miles</a></span> <span class="file-date">May 31st at 6:53 PM</span>
													<div class="file-size">Size: 14.8Mb</div>
												</div>
												<ul class="files-action">
													<li class="dropdown dropdown-action">
														<a href="" class="dropdown-toggle btn btn-link" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Download</a>
															<a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Share</a>
															<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														</div>
													</li>
												</ul>
											</div>
										</li>
									</ul> -->
								</div>
							</div>
							<!-- <div class="project-task">
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
							</div> -->
						</div>
						<div class="col-lg-4 col-xl-3">
							<div class="card">
								<div class="card-body">
									<h6 class="card-title m-b-15">Project details</h6>
									<table class="table table-striped table-border">
										<tbody>
											<tr>
												<td>Cost:</td>
												<td class="text-right">$<?php echo $rates; ?></td>
											</tr>
											<!-- <tr>
												<td>Total Hours:</td>
												<td class="text-right">100 Hours</td>
											</tr> -->
											<tr>
												<td>Created:</td>
												<td class="text-right"><?php echo $start_date; ?> <!-- 25 Feb, 2019 --></td>
											</tr>
											<tr>
												<td>Deadline:</td>
												<td class="text-right"><?php echo $end_date; ?><!-- 12 Jun, 2019 --></td>
											</tr>
											<tr>
												<td>Priority:</td>
												<td class="text-right">
													<div class="btn-group">
														<?php echo $pri; ?>
														
													</div>
												</td>
											</tr>
											<tr>
												<td>Client:</td>
												<td class="text-right"><a href="client-profile?CLIENTID=<?php echo $p_clientID; ?>" style="color:green;"><?php echo $p_firstname; ?> <?php echo $p_lastname; ?></a></td>
											</tr>
											<tr>
												<td>Leader:</td>
												<td class="text-right"><a href="profile?empID=<?php echo $peee_employeee_id; ?>"><?php echo $peee_firstname; ?> <?php echo $peee_lastname; ?></a></td>
											</tr>
											
											<tr>
												<td>Status:</td>
												<td class="text-right">
													<div class="btn-group">
														<?php echo $sta; ?>
														
													</div>
												</td>
											</tr>
										</tbody>
									</table>
									<!-- <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
									</div> -->
								</div>
							</div>
						<!-- 	<div class="card project-user">
								<div class="card-body">
									<h6 class="card-title m-b-20">Assigned Leader <button type="button" class="float-right btn btn-primary btn-sm" data-toggle="modal" data-target="#assign_leader"><i class="fa fa-plus"></i> Add</button></h6>
									<ul class="list-box">
										<li>
											<a href="profile">
												<div class="list-item">
													<div class="list-left">
														<span class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></span>
													</div>
													<div class="list-body">
														<span class="message-author">Wilmer Deluna</span>
														<div class="clearfix"></div>
														<span class="message-content">Team Leader</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="profile">
												<div class="list-item">
													<div class="list-left">
														<span class="avatar"><img alt="" src="assets/img/profiles/avatar-01.jpg"></span>
													</div>
													<div class="list-body">
														<span class="message-author">Lesley Grauer</span>
														<div class="clearfix"></div>
														<span class="message-content">Team Leader</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div> -->
						<!-- 	<div class="card project-user">
								<div class="card-body">
									<h6 class="card-title m-b-20">
										Assigned users 
										<button type="button" class="float-right btn btn-primary btn-sm" data-toggle="modal" data-target="#assign_user"><i class="fa fa-plus"></i> Add</button>
									</h6>
									<ul class="list-box">
										<li>
											<a href="profile">
												<div class="list-item">
													<div class="list-left">
														<span class="avatar"><img alt="" src="assets/img/profiles/avatar-02.jpg"></span>
													</div>
													<div class="list-body">
														<span class="message-author">John Doe</span>
														<div class="clearfix"></div>
														<span class="message-content">Web Designer</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="profile">
												<div class="list-item">
													<div class="list-left">
														<span class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></span>
													</div>
													<div class="list-body">
														<span class="message-author">Richard Miles</span>
														<div class="clearfix"></div>
														<span class="message-content">Web Developer</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div> -->
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Assign Leader Modal -->
				<!-- <div id="assign_leader" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Assign Leader to this project</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="input-group m-b-30">
									<input placeholder="Search to add a leader" class="form-control search-input" type="text">
									<span class="input-group-append">
										<button class="btn btn-primary">Search</button>
									</span>
								</div>
								<div>
									<ul class="chat-user-list">
										<li>
											<a href="#">
												<div class="media">
													<span class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></span>
													<div class="media-body align-self-center text-nowrap">
														<div class="user-name">Richard Miles</div>
														<span class="designation">Web Developer</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="media">
													<span class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></span>
													<div class="media-body align-self-center text-nowrap">
														<div class="user-name">John Smith</div>
														<span class="designation">Android Developer</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="media">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-16.jpg">
													</span>
													<div class="media-body align-self-center text-nowrap">
														<div class="user-name">Jeffery Lalor</div>
														<span class="designation">Team Leader</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- /Assign Leader Modal -->
				
				<!-- Assign User Modal -->
				<!-- <div id="assign_user" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Assign the user to this project</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="input-group m-b-30">
									<input placeholder="Search a user to assign" class="form-control search-input" type="text">
									<span class="input-group-append">
										<button class="btn btn-primary">Search</button>
									</span>
								</div>
								<div>
									<ul class="chat-user-list">
										<li>
											<a href="#">
												<div class="media">
													<span class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></span>
													<div class="media-body align-self-center text-nowrap">
														<div class="user-name">Richard Miles</div>
														<span class="designation">Web Developer</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="media">
													<span class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></span>
													<div class="media-body align-self-center text-nowrap">
														<div class="user-name">John Smith</div>
														<span class="designation">Android Developer</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="media">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-16.jpg">
													</span>
													<div class="media-body align-self-center text-nowrap">
														<div class="user-name">Jeffery Lalor</div>
														<span class="designation">Team Leader</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- /Assign User Modal -->
				
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
												<input name="project_name" id="project_name" class="form-control" type="text" value="<?php echo $project_titles; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Client</label>
												<select class="form-control" name="client" id="client">
													<option value="<?php echo $p_client_id; ?>" selected><?php echo $p_firstname; ?> <?php echo $p_lastname; ?></option>
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
													<?php echo $end_date; ?>
													<input class="form-control" type="date" name="start" id="start" value="<?php echo $end_date; ?>">
												</div>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>End Date</label>
												<div class="cal-icon">
													<?php echo $end_date; ?>
													<input class="form-control" type="date" name="end_date" id="end_date" value="<?php echo $end_date; ?>">
												</div>
											</div>
										</div>
										
									</div>
									<div class="row">
										<div class="col-sm-3">
											<div class="form-group">
												<label>Rate</label>
												$<input value="<?php echo $rate; ?>" class="form-control" type="text" name="rate" id="rate">

											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Status</label>
												<select class="form-control" name="Priority" id="userID">
													<option value="<?php echo $statuss ; ?>"><?php echo $statuss ; ?></option>
													<option value="Pending">Pending</option>
													<option value="Completed">Completed</option>
													<option value="On Going">On Going</option>
												</select>
											</div>
										</div>
										
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
													<option value="<?php echo $prioritys ; ?>"><?php echo $prioritys ; ?></option>
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
										</div>  -->
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Add Project Leader</label>
												<select class="form-control" name="project_lead" id="project_lead">
													<option>Choose Project Lead</option>
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

										<div class="col-sm-6">
											<div class="form-group">
												<label>Team Leader</label>
												<div class="project-members">
													<a class="avatar" href="#" data-toggle="tooltip" title="<?php echo $peee_firstname; ?> <?php echo $peee_lastname; ?>">
														<img alt="" src="assets/img/profiles/avatar-16.jpg">
													</a>
												</div>
											</div>
										</div>
									
									</div>
								
									<div class="form-group">
										<label>Description</label>
										<textarea rows="4" class="form-control summernote" placeholder="Enter your message here" name="Description" id="Description"><?php echo $descriptions; ?></textarea>
									</div>

									<div class="submit-section">
									<input value="<?php echo $projectsID; ?>" class="form-control" type="hidden" name="project_id" id="project_id">
									<div class="submit-section">
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
				<!-- /Create Project Modal -->
				
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Project Modal -->
				
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
		
		<!-- Task JS -->
		<script src="assets/js/task.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>
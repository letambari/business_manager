<?php
include_once("php_includes/check_login_status.php");
if($user_ok != true){
    header("location: login.php");
    exit();
}

?>

<?php
//$_SESSION['currentchat'] = '';
$CompanyName = '';
$adminPhoto = '';
$adminControl = '';
$pid = '';
$id = '';
$ContactPerson = '';
$address = '';
$city = '';
$state_province = '';
$username = '';
$email = '';
$password = '';
$CompanyName = '';
$website = '';
$country = '';
$PostalCode = '';
$phone = '';
$ALTphone = '';
$userlevel = '';
$avatar = '';
$ip = '';
$signup = '';
$lastlogin = '';
$notescheck = '';
$activated = '';
$service = '';
$thetitle = '';
$button = '';
$editdepartment_name2 = '';
$project = '';
$leader_id = '';
$project_id1 = '';
$task = '';
$addtask = '';
$task_status_color = '';
$processing = '';
$project_idss = '';
$taskp = '';
$pri = '';
$sta = '';
$statusresponse = '';
$toaddtask = '';
$invoiceclients = '';
$thedetails = '';
$thedetails2 = '';
$e_firstnames = '';
$e_lastnames = '';
$theleaderleader_firstname = '';
$theleaderleader_lastname = '';
$pid = '';
//$_SESSION['currentchat'] = '';
$thechatfullname = '';
$currentchat = '';
$edesignation_name = '';
$withoutcontact2 = '';
//$_SESSION['currentchat'] = '';
if ($user_ok == true) {

  // if ($log_photo != "") {
  //   $adminPhoto = '<img src="user/log_username/'.$log_photo.'" alt="image" class="profile-pic">';
  // }else{
  //   $adminPhoto = '<img src="user/log_username/face15.jpg" alt="image" class="profile-pic">';
  // }
  // $CompanyName = $log_username;
  
}

$count_project = 0;
$count_client = 0;
$count_task = 0;
$count_employee = 0;
$getemp = '';
$getcmp = '';
$getdpt = '';
$getdesgn = '';
$getclient = '';
$getclient2 = '';
$task = '';
$Assign = '';
$fullname = '';

$sql_users = "SELECT * FROM employees WHERE employee_id = '$log_id' AND company_id = '$log_username'";
$query_users = mysqli_query($db_conx, $sql_users);

 $count_users = mysqli_num_rows($query_users);
// printf("Result set has %d rows.\n",$rowcount)
while ($getusers = mysqli_fetch_array($query_users)) {
	# code...
	
    $employee_id = $getusers['employee_id'];
	$e_firstnames = $getusers['e_firstname'];
	$e_lastnames = $getusers['e_lastname'];
	$e_usernames = $getusers['e_username'];
	$e_emails = $getusers['e_email'];
	$e_passwords = $getusers['e_password'];
	$e_confirmpasswords = $getusers['e_confirmpassword'];
	$join_dates = $getusers['join_date'];
	$phones = $getusers['phone'];
	$companys = $getusers['company'];
	$designations = $getusers['designation'];	
	$e_departments = $getusers['department'];
	$user_ids = $getusers['user_id'];
	$company_ids = $getusers['company_id'];
	$position = $getusers['position'];

	$fullname = $e_firstnames.' '. $e_lastnames;
	// setting the privilages
if ($position != 'YES') {
		# code...
		$ddept = "";
		$adddept = '';
		$addmpl = '';
		$ddesign = "";
		$dddesgn = '';
		$addclientlicence = '';
		$editclintprofilelicence = '';
		$editprojectlicence = '';
		$addprojectlicence = '';
		$projectvieweditlicence = '';

		
	} else{
        $ddept = '<div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="editdept?dept='.$department_id.'" ><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="editdept?deletedept='.$department_id.'" ><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>';
          $adddept = '<div class="col-auto float-right ml-auto">
                                <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_department"><i class="fa fa-plus"></i> Add Department</a>
                            </div>';

                            $addmpl = '<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
								<div class="view-icons">
									<a href="employees" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
									<a href="employees-list" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
								</div>
							</div>';
		$dddesgn = '<div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="editdept?designaedit='.$designation_id.'" ><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="editdept?designadelete='.$designation_id.'" ><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>';

        $ddesign = '<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_designation"><i class="fa fa-plus"></i> Add Designation</a>
							</div>';

		$addclientlicence = '<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Add Client</a>
								<div class="view-icons">
									<a href="clients" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
									<a href="clients-list" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
								</div>
							</div>';
		$editclintprofilelicence = '<div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#" style="color: white; background-color: blue;"><i class="fa fa-pencil"></i></a></div>
									<div class="pro-edit"><a class="edit-icon" href="deletemp.php?clind='.$profile_client_id.'" style="color: white; background-color: red;"><i class="fa fa-trash" style="color: white; background-color: red;"></i></a></div>
								</div>';

		$editprojectlicence = '<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
										<!--	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a> -->
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project'.$project_id.''.$user_id.''.$company_id.'"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>';

		$addprojectlicence = '<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i> Create Project</a>
								<div class="view-icons">
									<a href="projects" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
									<!-- <a href="project-list" class="list-view btn btn-link"><i class="fa fa-bars"></i></a> -->
								</div>
							</div>';

		$projectvieweditlicence = '<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#edit_project"><i class="fa fa-plus"></i> Edit Project</a>
								<!-- <a href="task-board" class="btn btn-white float-right m-r-10" data-toggle="tooltip" title="Task Board"><i class="fa fa-bars"></i></a> -->
							</div>';
	}
// end of setting the privilages

$sql_t = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id = '$user_ids'";
$query_t = mysqli_query($db_conx, $sql_t);
$count_task = mysqli_num_rows($query_t);



$sql_project_count = "SELECT * FROM project WHERE company_id = '$log_username' AND user_id = '$user_ids'";
$query_project_count = mysqli_query($db_conx, $sql_project_count);

 $count_project = mysqli_num_rows($query_project_count);
// printf("Result set has %d rows.\n",$rowcount)


$sql_count_client = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$user_ids'";
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

	//$invoiceclients .= '<option>'.$e_firstname.' '.$e_lastname.'</option>';

	$getclient .= '<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="client-profile?CLIENTID='.$c_clientID.'" class="avatar"><img src="assets/img/profiles/avatar-06.jpg" alt=""></a>
								</div>
							<!--	<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
								</div> -->
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profileclient-profile?CLIENTID='.$c_clientID.'">'.$company.'</a></h4>
								<h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">'.$e_firstname.' '.$e_lastname.'</a></h5>
						<!--		<div class="small text-muted">CEO</div> -->
								<a href="chat" class="btn btn-white btn-sm m-t-10">Message</a>
								<a href="client-profile?CLIENTID='.$c_clientID.'" class="btn btn-white btn-sm m-t-10">View Profile</a>
							</div>
						</div>';

						$getclient2 .= '<tr>
													<td>
														<h2 class="table-avatar">
															<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-19.jpg"></a>
															<a href="client-profile?CLIENTID='.$c_clientID.'">'.$e_firstname.' '.$e_lastname.'<span>'.$company.'</span></a>
														</h2>
													</td>
													<td>'.$e_email.'</td>
													<!--
													<td>
														<div class="dropdown action-label">
															<a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
																<i class="fa fa-dot-circle-o text-success"></i> Active
															</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
																<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
															</div>
														</div>
													</td>
												-->
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>';

}
$sql_count_task = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id = '$user_ids'";
$query_count_task = mysqli_query($db_conx, $sql_count_task);

 $count_task = mysqli_num_rows($query_count_task);
// printf("Result set has %d rows.\n",$rowcount)

 $sql_count_employee = "SELECT * FROM employees WHERE company_id = '$log_username' AND user_id = '$user_ids'";
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
	$e_department = $row_employee['department'];
	$user_id = $row_employee['user_id'];
	$company_id = $row_employee['company_id'];
	$lastlogin = $row_employee['lastlogin'];

// $sql_count_departments = "SELECT * FROM departments WHERE department_id = '$e_department'";
// $query_count_departments = mysqli_query($db_conx, $sql_count_departments);

//  $count_departments = mysqli_num_rows($query_count_departments);

//  while ($row_departments = mysqli_fetch_array($query_count_departments)) {
 	
//  	$department_id = $row_departments['department_id'];
// 	$department_name = $row_departments['department_name'];
// 	$company_id = $row_departments['company_id'];
// 	$user_id = $row_departments['user_id'];


	$getemp .= '<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="profile?empID='.$employee_id.'" class="avatar"><img src="assets/img/profiles/avatar-08.jpg" alt=""></a>
								</div>
							<!--	<div class="dropdown profile-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
									</div>
								</div> -->
								<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile">'.$e_firstname.' '.$e_lastname.'</a></h4>
								
							</div>
						</div>';
 
}


 $sql_count_departments = "SELECT * FROM departments WHERE company_id = '$log_username' AND user_id = '$user_ids'";
$query_count_departments = mysqli_query($db_conx, $sql_count_departments);

 $count_departments = mysqli_num_rows($query_count_departments);

 while ($row_departments = mysqli_fetch_array($query_count_departments)) {
 	
 	$department_id = $row_departments['department_id'];
	$department_name = $row_departments['department_name'];
	$company_id = $row_departments['company_id'];
	$user_id = $row_departments['user_id'];


	
	


				$getdpt .= '   <tr>
                                            <td>'.$department_id.' </td>
                                            <td>'.$department_name.'</td>
                                            <td class="text-right">
                                             '.$ddept.'
                                                </div>
                                            </td>
                                        </tr>';


                 



 }



 $sql_count_employee = "SELECT * FROM designation WHERE company_id = '$log_username' AND user_id = '$user_ids'";
$query_count_employee = mysqli_query($db_conx, $sql_count_employee);



 while ($row_employee = mysqli_fetch_array($query_count_employee)) {
 	
 	$designation_id = $row_employee['designation_id'];
 	$designation_name = $row_employee['designation_name'];
	$department_id = $row_employee['department_id'];
	$company_id = $row_employee['company_id'];
	$user_id = $row_employee['user_id'];

$sql_count_employee2 = "SELECT * FROM departments WHERE company_id = '$log_username' AND user_id = '$user_ids' AND department_id = '$department_id'";
$query_count_employee2 = mysqli_query($db_conx, $sql_count_employee2);

 $count_employee2 = mysqli_num_rows($query_count_employee2);

 while ($row_employee2 = mysqli_fetch_array($query_count_employee2)) {
 	
 	
	$department_name2 = $row_employee2['department_name'];
	$company_id2 = $row_employee2['company_id'];
	$user_id2 = $row_employee2['user_id'];

    

	$getdesgn .= '<tbody><tr>
	                    <td>2</td>
											<td>'.$designation_name.'</td>
											<td>'.$department_name2.'</td>
											<td class="text-right">
                                            <div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                '.$dddesgn.'
												</div>
											</td>
											</tr>
											</tbody>
				';
 }

}}


$sql_p = "SELECT * FROM project WHERE company_id = '$log_username' AND user_id = '$user_ids'";
$query_p = mysqli_query($db_conx, $sql_p);
$count_d_projects = mysqli_num_rows($query_p);
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
	$projectpercentage = $row_p['project_percentage'];
	$projectleader = $row_p['leader_id'];
	$projectclient = $row_p['client_id'];


     $gettheemployeedetailsss = "SELECT * FROM employees WHERE employee_id = '$projectleader'";
     $querytheemployees = mysqli_query($db_conx, $gettheemployeedetailsss);
     while ($rowquerys = mysqli_fetch_array($querytheemployees)) {
     	# code...
    $pe_employeee_ids = $rowquerys['employee_id'];
	$inner_employee_firstnamess = $rowquerys['e_firstname'];
	$inner_employee_lastnamess = $rowquerys['e_lastname'];
	$ee_usernames = $rowquerys['e_username'];
	$ee_emails = $rowquerys['e_email'];

	$getthetaskinfoe = "SELECT * FROM task WHERE project_id = '$project_id' AND status = 'Completed'";
	$querythetaske = mysqli_query($db_conx, $getthetaskinfoe);
	$countthetask1 = mysqli_num_rows($querythetaske);
	$getthetaskinfos = "SELECT * FROM task WHERE project_id = '$project_id' AND status = 'Pending'";
	$querythetasks = mysqli_query($db_conx, $getthetaskinfos);
	$countthetask2 = mysqli_num_rows($querythetasks);

	$getthetaskinfo = "SELECT * FROM task WHERE project_id = '$project_id' AND status = 'Completed'";
	$querythetask = mysqli_query($db_conx, $getthetaskinfo);
    
    

	 $project .= '<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
							<div class="card">
								<div class="card-body">
									'.$editprojectlicence.'
									<h4 class="project-title"><a href="project-view?projectsID='.$project_id.'&userID='.$user_id.'&company_id='.$company_id.'">'.$project_title.'</a></h4>
									<input type="hidden" value="'.$project_id.'">
									<!-- <small class="block text-ellipsis m-b-15">
										<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
										<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
									</small> -->
									<p class="text-muted">'.$description.'
									</p>
									<div class="pro-deadline m-b-15">
										<div class="sub-title">
											Deadline:
										</div>
										<div class="text-muted">
											 '.$end_date.'
										</div>
									</div>
								 	<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="'.$inner_employee_firstnamess.'"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a><span>'.$inner_employee_firstnamess.'</span>
											</li>
										</ul>
									</div> 
									<!-- <div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-02.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-09.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-10.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-05.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-11.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-12.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-13.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-01.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-16.jpg">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="sr-only">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="sr-only">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div> -->
									 <p class="m-b-5">Progress <span class="text-success float-right">'.$projectpercentage.'%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="'.$projectpercentage.'%" style="width: '.$projectpercentage.'%"></div>
									</div> 
								</div>
							</div>
						</div>

			<div class="modal custom-modal fade" id="delete_project'.$project_id.''.$user_id.''.$company_id.'" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Project</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="delete.php?pro_id='.$project_id.'&userID='.$user_id.'&company_id='.$company_id.'" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';


$sql_c = "SELECT * FROM projectclient WHERE company_id = '$log_username' AND user_id = '$user_ids' AND project_id = $project_id";
$query_c = mysqli_query($db_conx, $sql_c);
while ($row_c = mysqli_fetch_array($query_c)) {
	# code...
	$projectclient_id = $row_c['projectclient_id'];
	$project_id1 = $row_c['project_id'];
	$client_id = $row_c['client_id'];
	$user_id = $row_c['user_id'];
	$company_id = $row_c['company_id'];

	if ($project_id1 == $project_id) {
		# code...
	$getit2 = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$user_ids' AND client_id = '$client_id'";

	$query_get2 = mysqli_query($db_conx, $getit2);

	while ($rowclient2 = mysqli_fetch_array($query_get2)) {
		# code...
	$p_client_id = $rowclient2['client_id'];
	$p_firstname = $rowclient2['c_firstname'];
	$p_lastname = $rowclient2['c_lastname'];
	$p_clientID = $rowclient2['c_clientID'];
	$p_email = $rowclient2['c_email'];
	$p_phone = $rowclient2['c_phone'];
	$p_companyname = $rowclient2['c_companyname'];


	
}
}
}
}}


if (isset($_GET['projectsID'])) {
	# code...
	$projectsID = $_GET['projectsID'];


$sql_ps = "SELECT * FROM project WHERE company_id = '$log_username' AND user_id = '$user_ids' AND project_id = '$projectsID'";
$query_ps = mysqli_query($db_conx, $sql_ps);
while ($row_ps = mysqli_fetch_array($query_ps)) {
	# code...
	$project_ids = $row_ps['project_id'];
    $project_titles = $row_ps['project_title'];

	$start_dates = $row_ps['start_date'];
	$end_dates = $row_ps['end_date'];
	$rates = $row_ps['rate'];
	$rate_times = $row_ps['rate_time'];
	$prioritys = $row_ps['priority'];
	$descriptions = $row_ps['description'];
	$user_ids = $row_ps['user_id'];
	$company_ids = $row_ps['company_id'];
	$statuss = $row_ps['Status'];
	$pleader_id = $row_ps['leader_id'];
	$pclient_id = $row_ps['client_id'];

	if ($prioritys == 'Low') {
		# code...
		$pri .= '<a href="#" class="badge badge-info">'.$prioritys.'</a>';
	} elseif($prioritys == 'Medium'){
        $pri .= '<a href="#" class="badge badge-warning">'.$prioritys.'</a>';

	} else{
		$pri .= '<a href="#" class="badge badge-danger">'.$prioritys.'</a>';
	}

	if ($statuss == 'Completed') {
		# code...
		$sta .= '<a href="#" class="badge badge-success">'.$statuss.'</a>';
	} elseif($statuss == 'On Going'){
        $sta .= '<a href="#" class="badge badge-warning">'.$statuss.'</a>';

	} else{
		$sta .= '<a href="#" class="badge badge-danger">'.$statuss.'</a>';
	}


    $getthetaskinfoe = "SELECT * FROM task WHERE project_id = '$project_ids' AND status = 'Completed'";
	$querythetaske = mysqli_query($db_conx, $getthetaskinfoe);
	$countthetask1 = mysqli_num_rows($querythetaske);
	$getthetaskinfos = "SELECT * FROM task WHERE project_id = '$project_ids' AND status = 'Pending'";
	$querythetasks = mysqli_query($db_conx, $getthetaskinfos);
	$countthetask2 = mysqli_num_rows($querythetasks);

	$getthetaskinfo = "SELECT * FROM task WHERE project_id = '$project_ids' AND status = 'Completed'";
	$querythetask = mysqli_query($db_conx, $getthetaskinfo);


		# code...
	$getit2 = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$user_ids' AND client_id = '$pclient_id'";

	$query_get2 = mysqli_query($db_conx, $getit2);

	while ($rowclient2 = mysqli_fetch_array($query_get2)) {
		# code...
	$p_client_id = $rowclient2['client_id'];
	$p_firstname = $rowclient2['c_firstname'];
	$p_lastname = $rowclient2['c_lastname'];
	$p_clientID = $rowclient2['c_clientID'];
	$p_email = $rowclient2['c_email'];


	}


$geteme = "SELECT * FROM employees WHERE company_id = '$log_username' AND user_id = '$user_ids' AND employee_id = '$pleader_id'";

	$query_geteme = mysqli_query($db_conx, $geteme);

	while ($rowgeteme = mysqli_fetch_array($query_geteme)) {
		# code...
	$peee_employeee_id = $rowgeteme['employee_id'];
	$peee_firstname = $rowgeteme['e_firstname'];
	$peee_lastname = $rowgeteme['e_lastname'];


}
}

}
if (isset($_GET['CLIENTID'])) {
	# code...
	$CLIENTID = $_GET['CLIENTID'];

	$getit = "SELECT * FROM clients WHERE c_clientID = '$CLIENTID'";

	$query_get = mysqli_query($db_conx, $getit);

	while ($rowclient = mysqli_fetch_array($query_get)) {
		# code...
	$profile_client_id = $rowclient['client_id'];
	$profile_e_firstname = $rowclient['c_firstname'];
	$profile_e_lastname = $rowclient['c_lastname'];
	$profile_c_clientID = $rowclient['c_clientID'];
	$profile_e_email = $rowclient['c_email'];
	$profile_join_date = $rowclient['creation_date'];
	$profile_phone = $rowclient['c_phone'];
	$profile_company = $rowclient['c_companyname'];
	$profile_user_id = $rowclient['user_id'];
	$profile_company_id = $rowclient['company_id'];

 }
	 $getprojectdetailsr = "SELECT `project_id`, `project_title`, `start_date`, `end_date`, `rate`, `rate_time`, `priority`, `description`, `leader_id`, `client_id`, `user_id`, `company_id`, `Status`, `project_percentage` FROM `project` WHERE client_id = '$profile_client_id'";
	 $queryprojectdetailsr = mysqli_query($db_conx, $getprojectdetailsr);
	 while ($rowproprojectsr = mysqli_fetch_array($queryprojectdetailsr)) {
	 	# code...
	$project_project_idr = $rowproprojectsr['project_id'];
	$project_projectleader_id = $rowproprojectsr['leader_id'];
	 $project_project_titler = $rowproprojectsr['project_title'];
	 $project_project_descriptionr = $rowproprojectsr['description'];
	 $project_project_end_dater = $rowproprojectsr['end_date'];
	 $inner_project_percentager = $rowproprojectsr['project_percentage'];


	// $inner_task_desc = $rowproprojects['task_desc'];
	// $inner_task_percentage = $rowproprojects['percentage'];
	 $project_project_percentager = $rowproprojectsr['project_percentage'];

	  $gettheemployeedetailsr = "SELECT `employee_id`, `e_firstname`, `e_lastname`, `e_username`, `e_email`, `e_password`, `e_confirmpassword`, `join_date`, `phone`, `company`, `designation`, `department`, `user_id`, `company_id` FROM `employees` WHERE employee_id = '$project_projectleader_id'";
     $querytheemployeer = mysqli_query($db_conx, $gettheemployeedetailsr);
     while ($rowqueryr = mysqli_fetch_array($querytheemployeer)) {
     	# code...
    $pe_employeee_idr = $rowqueryr['employee_id'];
	$inner_employee_firstnamer = $rowqueryr['e_firstname'];
	$inner_employee_lastnamer = $rowqueryr['e_lastname'];
	$ee_usernamer = $rowqueryr['e_username'];
	$ee_emailr = $rowqueryr['e_email'];

	$getthetaskinfoer = "SELECT `task_id`, `task_desc`, `project_id`, `company_id`, `user_id`, `creation_date`, `status`, `percentage`, `status_date` FROM `task` WHERE status = 'Completed' AND project_id = '$project_project_idr'";
	$querythetasker = mysqli_query($db_conx, $getthetaskinfoer);
	$countthetask1r = mysqli_num_rows($querythetasker);

	$getthetaskinfosr = "SELECT `task_id`, `task_desc`, `project_id`, `company_id`, `user_id`, `creation_date`, `status`, `percentage`, `status_date` FROM `task` WHERE status = 'Pending' AND project_id = '$project_project_idr'";
	$querythetasksr = mysqli_query($db_conx, $getthetaskinfosr);
	$countthetask2r = mysqli_num_rows($querythetasksr);
	

	  $thedetails2 .= '<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									 <div class="card">
										<div class="card-body">
											
											<h4 class="project-title"><a href="project-view?projectsID='.$project_id.'&userID='.$user_id.'&company_id='.$company_id.'"><?php //echo $project_id; ?>'.$project_project_titler.'</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs"></span>'.$countthetask2r.'<span class="text-muted">open tasks, </span>
												<span class="text-xs"></span>'.$countthetask1r.'<span class="text-muted">tasks completed</span>
											</small> 
											<p class="text-muted">'.$project_project_descriptionr.'
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													'.$project_project_end_dater.'
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="'.$inner_employee_firstnamer.' '.$inner_employee_lastnamer.'"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
														<span>'.$inner_employee_firstnamer.' '.$inner_employee_lastnamer.'</span>
													</li>
												</ul>
											</div>
											<!-- <div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a></a>
													</li>
													<li>
														<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
													</li>
													<li>
														<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div> -->
											<p class="m-b-5">Progress <span class="text-success float-right">'.$inner_project_percentager.'%</span></p>
											<div class="progress progress-xs mb-0">
												<div style="width:'.$inner_project_percentager.'%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="'.$inner_project_percentager.'%"></div>
											</div>
										</div>
									</div>
							</div>';


}
}
}

if (isset($_GET['empID'])) {
	# code...
	$empID = $_GET['empID'];

	$getem = "SELECT * FROM employees WHERE employee_id = '$empID'";

	$query_getem = mysqli_query($db_conx, $getem);

	while ($rowgetem = mysqli_fetch_array($query_getem)) {
		# code...
	$ee_employeee_id = $rowgetem['employee_id'];
	$ee_firstname = $rowgetem['e_firstname'];
	$ee_lastname = $rowgetem['e_lastname'];
	$ee_username = $rowgetem['e_username'];
	$ee_email = $rowgetem['e_email'];
	$ee_password = $rowgetem['e_password'];
	$ee_confirmpassword = $rowgetem['e_confirmpassword'];
	$e_join_date = $rowgetem['join_date'];
	$e_phone = $rowgetem['phone'];
	$e_company = $rowgetem['company'];
	$e_designation = $rowgetem['designation'];	
	$e_department = $rowgetem['department'];
	$e_user_id = $rowgetem['user_id'];
	$e_company_id = $rowgetem['company_id'];

$sql_count_edepartments = "SELECT * FROM departments WHERE company_id = '$log_username' AND user_id = '$user_ids' AND department_id = '$e_department'";
$query_count_edepartments = mysqli_query($db_conx, $sql_count_edepartments);

 $count_edepartments = mysqli_num_rows($query_count_edepartments);


 $sql_count_eemployee = "SELECT * FROM designation WHERE company_id = '$log_username' AND user_id = '$user_ids' AND designation_id = '$e_designation'";
$query_count_eemployee = mysqli_query($db_conx, $sql_count_eemployee);
 $count_edesignation = mysqli_num_rows($query_count_eemployee);

 if ($count_edepartments != 1) {
   # code...
  $edepartment_name = '<p style="color : orange;">Not assigned a Department yet</p>';
 } else{

  while ($row_edepartments = mysqli_fetch_array($query_count_edepartments)) {
  
  $edepartment_id = $row_edepartments['department_id'];
  $edepartment_name = $row_edepartments['department_name'];
  $ecompany_id = $row_edepartments['company_id'];
  $euser_id = $row_edepartments['user_id'];

 }

 



if ($count_edesignation != 1) {
  # code...
 $edesignation_name = '<p style="color : orange;">Not assigned a Designation yet</p>';
 
} else {

   while ($row_eemployee = mysqli_fetch_array($query_count_eemployee)) {
  
  $edesignation_id = $row_eemployee['designation_id'];
  $edesignation_name = $row_eemployee['designation_name'];
  $edepartment_id = $row_eemployee['department_id'];
  $ecompany_id = $row_eemployee['company_id'];
  $euser_id = $row_eemployee['user_id'];

}


//  while ($row_edepartments = mysqli_fetch_array($query_count_edepartments)) {
 	
//  	$edepartment_id = $row_edepartments['department_id'];
// 	$edepartment_name = $row_edepartments['department_name'];
// 	$ecompany_id = $row_edepartments['company_id'];
// 	$euser_id = $row_edepartments['user_id'];

// $sql_count_eemployee = "SELECT * FROM designation WHERE company_id = '$log_username' AND user_id = '$user_ids' AND designation_id = '$e_designation'";
// $query_count_eemployee = mysqli_query($db_conx, $sql_count_eemployee);



//  while ($row_eemployee = mysqli_fetch_array($query_count_eemployee)) {
 	
//  	$edesignation_id = $row_eemployee['designation_id'];
//  	$edesignation_name = $row_eemployee['designation_name'];
// 	$edepartment_id = $row_eemployee['department_id'];
// 	$ecompany_id = $row_eemployee['company_id'];
// 	$euser_id = $row_eemployee['user_id'];

	// SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName
// FROM ((Orders
// INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)
// INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);

$inner = "SELECT projectleaders.leader_id, project.project_id, project.project_title, project.description, project.end_date, task.task_desc, task.percentage, project.project_percentage FROM ((projectleaders INNER JOIN project ON projectleaders.project_id = project.project_id) INNER JOIN task ON projectleaders.project_id = task.project_id) WHERE projectleaders.leader_id = '$ee_employeee_id'";
$inquery = mysqli_query($db_conx, $inner);
while ($kkk = mysqli_fetch_array($inquery)) {
	# code...
	$inner_project_id = $kkk['project_id'];
	$inner_projectleader_id = $kkk['leader_id'];
	 $inner_project_title = $kkk['project_title'];
	 $inner_project_description = $kkk['description'];
	 $inner_project_end_date = $kkk['end_date'];
	 $inner_task_desc = $kkk['task_desc'];
	 $inner_task_percentage = $kkk['percentage'];
	 $inner_project_percentage = $kkk['project_percentage'];

	 //  $getthetask = "SELECT * FROM task WHERE user_id = '$user_ids' AND company_id = '$log_username' AND project_id = '$inner_project_id' AND Status = 'Completed'";
	 // $yougetthetask = mysqli_query($db_conx, $getthetask);
  //    $countask1 = mysqli_num_rows($yougetthetask);

  //    $getthetask = "SELECT * FROM task WHERE user_id = '$user_ids' AND company_id = '$log_username' AND project_id = '$inner_project_id' AND Status = 'Pending'";
	 // $yougetthetask = mysqli_query($db_conx, $getthetask);
  //    $countask2 = mysqli_num_rows($yougetthetask);

	
	$gettheemployee = "SELECT * FROM employees WHERE user_id = '$user_ids' AND company_id = '$log_username' AND employee_id = '$inner_projectleader_id'";
	$youget = mysqli_query($db_conx, $gettheemployee);
    $countam = mysqli_num_rows($youget);
    
    while ($ccc = mysqli_fetch_array($youget)) {
    	# code...
    	$inner_employee_firstname = $ccc['e_firstname'];
    	$inner_employee_lastname = $ccc['e_lastname'];

    	$thedetails .= '<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									 <div class="card">
										<div class="card-body">
											
											<h4 class="project-title"><a href="project-view?projectsID='.$project_id.'&userID='.$user_id.'&company_id='.$company_id.'"><?php //echo $project_id; ?>'.$inner_project_title.'</a></h4>
										<!--	<small class="block text-ellipsis m-b-15">
												<span class="text-xs"></span><span class="text-muted">open tasks, </span>
												<span class="text-xs"></span><span class="text-muted">tasks completed</span>
											</small>  -->
											<p class="text-muted">'.$inner_project_description.'
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													'.$inner_project_end_date.'
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="'.$inner_employee_firstname.' '.$inner_employee_lastname.'"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
														<span>'.$inner_employee_firstname.' '.$inner_employee_lastname.'</span>
													</li>
												</ul>
											</div>
											<!-- <div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
													</li>
													<li>
														<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a></a>
													</li>
													<li>
														<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
													</li>
													<li>
														<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div> -->
											<p class="m-b-5">Progress <span class="text-success float-right">'.$inner_project_percentage.'%</span></p>
											<div class="progress progress-xs mb-0">
												<div style="width:'.$inner_project_percentage.'%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="'.$inner_project_percentage.'%"></div>
											</div>
										</div>
									</div>
							</div>';
    }

   }
    
   
    // while ($ccc = mysqli_fetch_array($youget)) {
    // 	# code...
    // 	$inner_employee_firstname = $ccc['e_firstname'];
    // 	$inner_employee_lastname = $ccc['e_lastname'];
    // }


}

}
	}
}

if (isset($_GET['dept'])) {
	# code...
	$dept = $_GET['dept'];


$sql_count_editdept2 = "SELECT * FROM departments WHERE company_id = '$log_username' AND user_id = '$user_ids' AND department_id = '$dept'";
$query_count_editdept2 = mysqli_query($db_conx, $sql_count_editdept2);

 $count_editdept2 = mysqli_num_rows($query_count_editdept2);

 while ($row_editdept2 = mysqli_fetch_array($query_count_editdept2)) {
 	
 	
	$editdepartment_name2 = $row_editdept2['department_name'];
	$editdepartment_id2 = $row_editdept2['department_id'];
	$editcompany_id2 = $row_editdept2['company_id'];
	$edituser_id2 = $row_editdept2['user_id'];

	$thetitle .= 'Edit Department';

	$button .= '<button class="btn btn-primary" name="myBtn" type="submit" onclick="ajax_editdept();" type="button">Button</button>
';


//echo $editdepartment_name2;

	}
}


if (isset($_GET['deletedept'])) {
	# code...
	$deletedept = $_GET['deletedept'];


$sql_count_editdept2 = "SELECT * FROM departments WHERE company_id = '$log_username' AND user_id = '$user_ids' AND department_id = '$deletedept'";
$query_count_editdept2 = mysqli_query($db_conx, $sql_count_editdept2);

 $count_editdept2 = mysqli_num_rows($query_count_editdept2);

 while ($row_editdept2 = mysqli_fetch_array($query_count_editdept2)) {
 	
 	
	$editdepartment_name2 = $row_editdept2['department_name'];
	$editdepartment_id2 = $row_editdept2['department_id'];
	$editcompany_id2 = $row_editdept2['company_id'];
	$edituser_id2 = $row_editdept2['user_id'];

	$thetitle .= 'Delete Department';

	$button .= '<button class="btn btn-primary" name="myBtn" type="submit" onclick="ajax_deeletedept();" type="button">Button</button>
';

//echo $editdepartment_name2;

	}
}

if (isset($_GET['designaedit'])) {
	# code...
	$designaedit = $_GET['designaedit'];


$sql_count_editdept2 = "SELECT * FROM designation WHERE company_id = '$log_username' AND user_id = '$user_ids' AND designation_id = '$designaedit'";
$query_count_editdept2 = mysqli_query($db_conx, $sql_count_editdept2);

 $count_editdept2 = mysqli_num_rows($query_count_editdept2);

 while ($row_editdept2 = mysqli_fetch_array($query_count_editdept2)) {
 	
 	
	$editdepartment_name2 = $row_editdept2['designation_name'];
	$editdepartment_id2 = $row_editdept2['designation_id'];
	$editcompany_id2 = $row_editdept2['company_id'];
	$edituser_id2 = $row_editdept2['user_id'];

	$thetitle .= 'Edit designation';

	$button .= '<button class="btn btn-primary" name="myBtn" type="submit" onclick="ajax_editdesig();" type="button">Button</button>
';

//echo $editdepartment_name2;

	}
}


if (isset($_GET['designadelete'])) {
	# code...
	$designaedit = $_GET['designadelete'];


$sql_count_editdept2 = "SELECT * FROM designation WHERE company_id = '$log_username' AND user_id = '$user_ids' AND designation_id = '$designaedit'";
$query_count_editdept2 = mysqli_query($db_conx, $sql_count_editdept2);

 $count_editdept2 = mysqli_num_rows($query_count_editdept2);

 while ($row_editdept2 = mysqli_fetch_array($query_count_editdept2)) {
 	
 	
	$editdepartment_name2 = $row_editdept2['designation_name'];
	$editdepartment_id2 = $row_editdept2['designation_id'];
	$editcompany_id2 = $row_editdept2['company_id'];
	$edituser_id2 = $row_editdept2['user_id'];

	$thetitle .= 'Delete designation';

	$button .= '<button class="btn btn-primary" name="myBtn" type="submit" onclick="ajax_deletedesig();" type="button">Button</button>
';

//echo $editdepartment_name2;

	}
}


if (isset($_GET['pid'])) {
	# code...
	$pid = $_GET['pid'];

$sql_p = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id = '$user_ids' AND project_id = '$pid'";
$query_p = mysqli_query($db_conx, $sql_p);
while ($row_p = mysqli_fetch_array($query_p)) {
	# code...
	$task_id = $row_p['task_id'];
    $project_idss = $row_p['project_id'];
	$task_desc = $row_p['task_desc'];

	$task_status = $row_p['status'];

	if ($task_status == 1) {
		# code...
	 $task_status_color = '<li class="task"><div class="task-container">
																		<span class="task-action-btn task-check">
																		<span class="action-circle large complete-btn" title="Mark Complete" id="add-task" name="myBtn" type="submit" onclick="ajax_taskcomplete();" class="action-circle large complete-btn">
																				<i class="material-icons">check</i>
																			</span>';
	} elseif($task_status == 2){

		$task_status_color = '<li class="completed task"><div class="task-container">
																		<span class="task-action-btn task-check">
																		<span class="action-circle large complete-btn" title="Mark ongoing" id="add-task" name="myBtn" type="submit" onclick="ajax_taskcomplete();" class="action-circle large complete-btn">
																				<i class="material-icons">check</i>
																			</span>';
	} else{

		$task_status_color = '<li class="task"><div class="task-container">
																		<span class="task-action-btn task-check">
																		<span class="action-circle large complete-btn" title="Mark Pending" id="add-task" name="myBtn" type="submit" onclick="ajax_taskcomplete();" class="action-circle large complete-btn">
																				<i class="material-icons">check</i>
																			</span>';
	}

	$task .= '<input type="text" name="taskID" id="new-task" value="'.$task_id.'"/>

																			<input type="text" name="taskID2" id="Description2" value="'.$task_desc.'"/>

																			<input type="text" name="taskID2" id="pros" value="'.$project_idss.'"/>

																			<input type="text" name="status" id="statuss" value="'.$task_status.'"/>
																			'.$task_status_color.'
																		</span>
																		
																		<span class="task-label" contenteditable="true">'.$task_desc.'</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<a href="deletetask?task_id='.$task_id.'&tasktitile='.$task_desc.'&companyID='.$log_username.'&userID='.$user_ids.'&project_id='.$project_idss.'">
																				<i class="material-icons">delete</i>
																				</a>
																			</span>
																		</span>
																	</div>
																	</li>
	';


}
$addtask .= '<span class="add-task-btn btn btn-white btn-sm">

													Add Task
												</span>';
$Assign = '';
$Assign = '<a class="task-chat profile-rightbar float-right" id="task_chat" href="#task_window"><i class="fa fa fa-comment"></i></a>';

}

	
else {
$sql_p = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id = '$user_ids'";
$query_p = mysqli_query($db_conx, $sql_p);
while ($row_p = mysqli_fetch_array($query_p)) {
	# code...
	$task_id = $row_p['task_id'];
    $project_idss = $row_p['project_id'];
	$task_desc = $row_p['task_desc'];
	$task_status = $row_p['status'];

	if ($task_status == 1) {
		# code...
	 $task_status_color = '<li class="task"><div class="task-container">
																		<span class="task-action-btn task-check">
																		<span class="action-circle large complete-btn" title="Mark Complete" id="add-task" name="myBtn" type="submit" onclick="ajax_taskcomplete();" class="action-circle large complete-btn">
																				<i class="material-icons">check</i>
																			</span>';
	} elseif($task_status == 2){

		$task_status_color = '<li class="completed task"><div class="task-container">
																		<span class="task-action-btn task-check">
																		<span class="action-circle large complete-btn" title="Mark Complete" id="add-task" name="myBtn" type="submit" onclick="ajax_taskcomplete();" class="action-circle large complete-btn">
																				<i class="material-icons">check</i>
																			</span>';
	} else{

		$task_status_color = '<li class="task"><div class="task-container">
																		<span class="task-action-btn task-check">
																		<span class="action-circle large complete-btn" title="Mark Complete" id="add-task" name="myBtn" type="submit" onclick="ajax_taskcomplete();" class="action-circle large complete-btn">
																				<i class="material-icons">check</i>
																			</span>';
		$processing = '<div id="status">
																</div>';
	}

	$task .= '
																			<input type="text" name="taskID" id="new-task" value="'.$task_id.'"/>

																			<input type="text" name="taskID2" id="Description2" value="'.$task_desc.'"/>

																			

																			<input type="text" name="status" id="statuss" value="'.$task_status.'"/>
																			<input type="text" name="taskID2" id="pros" value="'.$project_idss.'"/>
																			'.$task_status_color.'
																		</span>
																		
																		<span class="task-label" contenteditable="true">'.$task_desc.'</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<a href="deletetask?task_id='.$task_id.'&tasktitile='.$task_desc.'&companyID='.$log_username.'&userID='.$user_ids.'&project_id='.$project_idss.'">
																				<i class="material-icons">delete</i>
																				</a>
																			</span>
																		</span>
																	</div>
																	</li>
	';
}
}

$lang = '';
$headpart = '';
$lang = "
<script type='text/javascript'>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>";

// $lang2 = "
// <script type='text/javascript'>
// function googleTranslateElementInit() {
//   new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
// }
// </script>";


$showfollowers = '';
$showchat = '';
$markascomplete = '';
$addfollowers = '';
if (isset($_GET['pid']) && isset($_GET['project'])) {
    # code...
    $pid = $_GET['pid'];
    $projecttitle = $_GET['project'];
  $_SESSION['pidss'] = $pid;
  $getproject = "SELECT * FROM project WHERE project_id = '$pid'";
  $queryprojects = mysqli_query($db_conx, $getproject);


    $sql_p = "SELECT employees.employee_id, employees.e_firstname, employees.e_lastname, projectteam.employee_id FROM projectteam INNER JOIN employees ON projectteam.employee_id = employees.employee_id WHERE projectteam.project_id = '$pid' AND projectteam.employee_id = '$log_id'";
    $queryit = mysqli_query($db_conx, $sql_p);
    $counting = mysqli_num_rows($queryit);
 //echo $counting;
 //exit();
    if ($counting <= 0) {
    	# code...
    	echo "<script>alert('You are not assigned to this project.')</script>";
    	echo "<script>window.open('tasks','_self')</script>";
    	//header("location: tasks");
        exit();
    } 

    if ($status != 'Completed') {
        # code...
        $thestatus = ' <div class="task-assign">
                                            <span class="task-complete" id="task_complete" onclick="completeproject()">
                                            <input type="hidden" id="completep" value="'.$pid.'">
                                                <i class="material-icons">check</i> Mark Incomplete
                                            </span>
                                            <div id="status"></div>
                                        </div>';
    } else{

        $thestatus = ' <div class="task-assign">
                                            <span class="task-complete-btn" id="task_complete" onclick="completeproject()">
                                            <input type="text" id="completep" value="'.$pid.'">
                                                <i class="material-icons">check</i> Mark Complete
                                            </span>
                                            <div id="status"></div>
                                        </div>';
    }
$query_p = mysqli_query($db_conx, $sql_p);
while ($row_p = mysqli_fetch_array($query_p)) {

    # code...
  //  $project_id = $row_p['project_id'];
    
    $theleaderleader_firstname = $row_p['e_firstname'];
    $theleaderleader_lastname = $row_p['e_lastname'];
    $employee_idsss = $row_p['employee_id'];
   

    // if ($log_id != $employee_idsss ) {
    // 	# code...
    // 	echo $log_id;
    // //	header("location: tasks");
    //     exit();

   // }
} 
 $queryprojects = mysqli_query($db_conx, $getproject);
while ($rowprojects = mysqli_fetch_array($queryprojects)) {
 $end_date = $rowprojects['end_date'];
}
    include 'server2.php';

    $getassign = '';

    $markascomplete = '<div class="fixed-header">
                                    <div class="navbar">
                                       '.$thestatus.'
                                        <ul class="nav float-right custom-menu">
                                            <li class="dropdown dropdown-action">
                                                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Delete Task</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Settings</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>';


$addfollowers = ' <a href="#" class="followers-add" data-toggle="modal" data-target="#task_followers"><i class="material-icons">add</i></a>';



    $getassign = ' <a class="task-chat profile-rightbar float-right" id="task_chat" href="#task_window"><i class="fa fa fa-comment"></i></a>';
    $showchat = '<div class="chat-wrap-inner">
                                            <div class="chat-box">
                                                <div class="chats">
                                                    <h4>'.$projecttitle.'</h4>
                                                    <div class="task-header">
                                                        <div class="assignee-info">
                                                            <a href="#" data-toggle="modal">
                                                                <div class="avatar">
                                                                    <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                                                </div>
                                                                <div class="assigned-info">
                                                                    <div class="task-head-title">Assigned To</div>
                                                                    <div class="task-assignee">'.$theleaderleader_firstname.' '.$theleaderleader_lastname.'</div>
                                                                </div>
                                                            </a>
                                                            <span class="remove-icon">
                                                                <i class="fa fa-close"></i>
                                                            </span>
                                                        </div>
                                                        <div class="task-due-date">
                                                            <a href="#" data-toggle="modal" data-target="#assignee">
                                                                <div class="due-icon">
                                                                    <span>
                                                                        <i class="material-icons">date_range</i>
                                                                    </span>
                                                                </div>
                                                                <div class="due-info">
                                                                    <div class="task-head-title">Due Date</div>
                                                                    <div class="due-date">'.$end_date.'</div>
                                                                </div>
                                                            </a>
                                                            <span class="remove-icon">
                                                                <i class="fa fa-close"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <hr class="task-line">
                                                    <div class="task-desc">
                                                        <div class="task-desc-icon">
                                                            <i class="material-icons">subject</i>
                                                        </div>
                                                        <div class="task-textarea">
                                                            <textarea class="form-control" placeholder="Description"></textarea>
                                                        </div>
                                                    </div>
                                                   
                                                   
                                                  
       
                                               <div id="chat"></div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-footer">
                                    <div class="message-bar">
                                        <form id="upload_form" enctype="multipart/form-data" method="post">
                                        <div class="message-inner">
                                            <a class="link attach-icon" href="#"><img src="assets/img/attachment.png" alt=""></a>
                                            <div class="message-area">
                                                <div class="input-group">
                                                    <textarea class="form-control" id="msg" name="msg" placeholder="Type message..."></textarea>
                                                     <input type="hidden" id="name" name="name" placeholder="enter name" value="'.$fullname.'" /> 
                                                     <input type="hidden" id="pid" name="pid" placeholder="enter name" value="'.$pid.'" /> 
                                                      <input type="hidden" id="username" name="username" placeholder="enter name" value="'.$e_usernames.'" /> 
                                                    <span class="input-group-append">
                                                        <span class="btn btn-primary" type="myBtn" name="submit" onclick="ajaxchat()"><i class="fa fa-send"></i></span>
                                                    </span>
                                                </div>
                                                <div id="status"></div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>';

$showfollowers = '';
 $followers = "SELECT employees.employee_id, employees.e_firstname, employees.e_lastname, projectteam.employee_id FROM projectteam INNER JOIN employees ON projectteam.employee_id = employees.employee_id WHERE projectteam.project_id = '$pid'";
 $getfollowers = mysqli_query($db_conx, $followers);
 $countfollowers = mysqli_num_rows($getfollowers);
 //echo $countfollowers;
 if ($countfollowers > 0) {
     # code...
    while ($rowfollowers = mysqli_fetch_array($getfollowers)) {
        # code...
        $employee_id = $rowfollowers['employee_id'];
        $pem_firstname = $rowfollowers['e_firstname'];
        $pem_lastname = $rowfollowers['e_lastname'];

       $showfollowers .= '<a class="avatar" href="#" data-toggle="tooltip" title="'.$pem_firstname.' '.$pem_lastname.'">
                                            <img alt="" src="assets/img/profiles/avatar-16.jpg">
                                        </a>';
    } 
}else {

        echo "";
    }


            
} else{
    include 'server.php';
    $getassign = '';
    $assignmentchat = '';
}


$contacts = '';
  $getemployees = "SELECT employees.employee_id, employees.e_username, employees.e_firstname, employees.e_lastname, users.id, users.ContactPerson, users.username, employees.position FROM employees INNER JOIN users ON employees.company_id = users.username WHERE users.username = '$log_username' AND employees.employee_id != '$log_id'";
  $queryemployees = mysqli_query($db_conx, $getemployees);
  $countemployees = mysqli_num_rows($queryemployees);



  while ($rowemployees = mysqli_fetch_array($queryemployees)) {
    # code...
    $chat_employee_id = $rowemployees['e_username'];
    $chat_firstname = $rowemployees['e_firstname'];
    $chat_lastname = $rowemployees['e_lastname'];
    $chat_ContactPerson = $rowemployees['ContactPerson'];
    $chat_ContactPersonid = $rowemployees['id'];
    $chat_username = $rowemployees['username'];

    $position = $rowemployees['position'];

    if ($position == 'online') {
    	# code...
    	$thestate = '<span class="status online"></span>';
    	$lastlogins = '';
    } else{
    	$thestate = '<span class="status offline"></span>';
    	$lastlogins =  '<span class="last-seen">Last seen today at '.$lastlogin.'</span>';
    }

$chat_query="SELECT * FROM chat_msg WHERE reciever_id='$e_usernames' AND  status = 2";
$chat_result=mysqli_query($db_conx, $chat_query);
$_SESSION["num-chat2"]=mysqli_num_rows($chat_result);
$mmm = $_SESSION["num-chat2"];


    $thefullname = $chat_firstname.' '.$chat_lastname;

    $contacts .= '<li>
                <a href="chats?currentchat='.$chat_employee_id.'">
                  <span class="chat-avatar-sm user-img">
                    <img class="rounded-circle" alt="" src="assets/img/profiles/avatar-09.jpg">
                    '.$thestate.'
                  </span> 
                  <span class="chat-user">'.$thefullname.'</span> <span class="badge badge-pill bg-info"></span>
                   
                </a>
              </li>
              <li>';
          // $thefullname = $chat_username;
          $contacts2 = '<a href="chats?currentchat='.$chat_username.'">
                  <span class="chat-avatar-sm user-img">
                    <img class="rounded-circle" alt="" src="assets/img/profiles/avatar-09.jpg"><span class="status offline"></span>
                  </span> 
                  <span class="chat-user">'.$chat_ContactPerson.'</span><span class="badge badge-pill bg-warning"></span>
                   
                </a>
              </li>'; 
  }
//$_SESSION['currentchat'] = '';
 $currentchat = '';
if (isset($_GET['currentchat'])) {
  # code...
  $withoutcontact = '';
 
  $currentchat = $_GET['currentchat'];
  // $_SESSION['currentchat'] = $currentchat;

 $updateit = "UPDATE chat_msg SET status = 1 WHERE sender_id = '$currentchat'";
 $udatequery = mysqli_query($db_conx, $updateit);

 $_SESSION['currentchat'] = $currentchat;
  $getchat = "SELECT employees.employee_id, employees.e_username, employees.e_firstname, employees.e_lastname, users.id, users.ContactPerson, users.username, employees.position FROM employees INNER JOIN users ON employees.company_id = users.username WHERE (employees.company_id = '$log_username' OR users.username = '$log_username') AND (employees.user_id = '$user_ids' OR users.id = '$user_ids') AND (employees.e_username = '$currentchat' OR users.username = '$currentchat')";
  $querychat = mysqli_query($db_conx, $getchat);
  $countchat = mysqli_num_rows($querychat);

  while ($rowchat = mysqli_fetch_array($querychat)) {
    # code...
    $chat_employee_id = $rowchat['employee_id'];
    $current_chat_firstname = $rowchat['e_firstname'];
    $current_chat_lastname = $rowchat['e_lastname'];
    $position = $rowchat['position'];

    if ($position == 'online') {
    	# code...
    	$thestate = '<span class="status online"></span>';
    	$lastlogins = '';
    } else{
    	$thestate = '<span class="status offline"></span>';
    	$lastlogins =  '<span class="last-seen">Last seen today at '.$lastlogin.'</span>';
    }

    $thechatfullname = $current_chat_firstname.' '.$current_chat_lastname;

    $withoutcontact = '<div class="user-details mr-auto">
                      <div class="float-left user-img">
                        <a class="avatar" href="#" title="'.$thechatfullname.'">
                          <img src="assets/img/profiles/avatar-05.jpg" alt="" class="rounded-circle">
                          '.$thestate.'
                        </a>
                      </div>
                      <div class="user-info float-left">
                        <a href="#" title="'.$thechatfullname.'"><span>'.$thechatfullname.'</span><!-- <i class="typing-text"></i> --></a>
                       '.$lastlogins.'
                      </div>
                    </div>


                      <!--  <div class="search-box">
                      <div class="input-group input-group-sm">
                        <input type="text" placeholder="Search" class="form-control">
                        <span class="input-group-append">
                          <button type="button" class="btn"><i class="fa fa-search"></i></button>
                        </span>
                      </div>
                    </div> -->



                    <!-- <ul class="nav custom-menu">
                      <li class="nav-item">
                        <a class="nav-link task-chat profile-rightbar float-right" id="task_chat" href="#task_window"><i class="fa fa-user"></i></a>
                      </li>
                      <li class="nav-item">
                        <a href="voice-call" class="nav-link"><i class="fa fa-phone"></i></a>
                      </li>
                      <li class="nav-item">
                        <a href="video-call" class="nav-link"><i class="fa fa-video-camera"></i></a>
                      </li>
                      <li class="nav-item dropdown dropdown-action">
                        <a aria-expanded="false" data-toggle="dropdown" class="nav-link dropdown-toggle" href=""><i class="fa fa-cog"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a href="javascript:void(0)" class="dropdown-item">Delete Conversations</a>
                          <a href="javascript:void(0)" class="dropdown-item">Settings</a>
                        </div>
                      </li>
                    </ul> -->';

}

} else{
 $currentchat = '';
  $withoutcontact = '<div class="user-details mr-auto">
                      <div class="float-left chat-img">
                        <a class="avatar" href="#" title="<?php echo $ContactPerson; ?>">
                          <!-- <img src="assets/img/profiles/avatar-05.jpg" alt="" class="rounded-circle"> -->
                          <span class="status online"></span>
                        </a>
                      </div>
                      <div class="user-info float-left">
                        <a href="profile" title="Mike Litorus"><span>Chosse a contact from the sidebar to chat with</span> <i class="typing-text"><!-- Typing... --></i></a>
                        <span class="last-seen"><!-- Last seen today at 7:50 AM --></span>
                      </div>
                    </div>';
}

$messagebox = ' <form id="upload_form" enctype="multipart/form-data" method="post">
                
        <div class="chat-footer">
                  <div class="message-bar">
                    
                    <div class="message-inner">
                      <a class="link attach-icon" href="#" data-toggle="modal" data-target="#drag_files"><img src="assets/img/attachment.png" alt=""></a>
                      <div class="message-area">
                        <div class="input-group">
                          <input type="hidden" id="s_company_id" name="" value="'.$log_username.'">
                          <input type="hidden" id="r_company_id" value="'.$log_username.'">
                          <input type="hidden" id="sender_id" value="'.$e_usernames.'">
                          <input type="hidden" id="reciever_id" value="'.$_SESSION['currentchat'].'">
                          <input type="hidden" id="sender_fullname" value="'.$fullname.'">
                        
                          <textarea class="form-control" id="msg" placeholder="Type message..."></textarea>
                          <span class="input-group-append">
                                                        <button class="btn btn-primary" type="myBtn" name="submit" onclick="ajaxpchat()"><i class="fa fa-send"></i></span>
                                                    </button>
                        </div>
                        <div id="status"></div>
                      </div>
                    </div>
                  
                  </div>
                </div>
                </form>';

  // if($sender_id == $currentchat){
?>

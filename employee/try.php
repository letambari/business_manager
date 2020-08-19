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
                            <div class="col-auto float-right ml-auto">
                                <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_designation"><i class="fa fa-plus"></i> Add Designation</a>
                            </div>
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
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Web Designer</td>
                                            <td>Web Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <?php echo $getdesgn; ?>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Android Developer</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>IOS Developer</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>UI Designer</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>UX Designer</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>IT Technician</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Product Manager</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>SEO Analyst</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Front End Designer</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Front End Developer</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Systems Engineer</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Systems Administrator</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Technical Lead</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Quality Assurance</td>
                                            <td>Application Development</td>
                                            <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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


                   <form method="post" id="upload_form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                                <input name="FirstName" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Last Name</label>
                                                <input name="LastName" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Empolyer Company Code <span class="text-danger">*</span></label>
                                                <input name="Username" id="Username" value="<?php echo $log_username; ?>" class="form-control" type="text" disabled>

                                                 <input name="user_id" id="user_id" value="<?php echo $log_id; ?>" class="form-control" type="hidden" disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                <input name="email" id="email" class="form-control" type="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Password</label>
                                                <input name="password" id="password" class="form-control" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Confirm Password</label>
                                                <input name="re_password" id="re_password" class="form-control" type="password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">  
                                            <div class="form-group">
                                                <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                                <input name="employee_id" id="employee_id" value="<?php echo generatekey($db_conx); ?>" type="text" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">  
                                            <div class="form-group">
                                                <label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
                                                <div class="cal-icon">
                                                    <input name="join_date" id="join_date" class="form-control datetimepicker" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Phone </label>
                                                <input name="phone" id="phone" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Company</label>
                                                <input name="company" id="company" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Department <span class="text-danger">*</span></label>
                                                <select class="select" name="department" id="department">
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
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Designation <span class="text-danger">*</span></label>
                                                <select class="select" name="designation" id="designation">
                                                    <option>Select Designation</option>
                                                   <?php 
    $sql_count_departments = "SELECT * FROM Designation WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query_count_departments = mysqli_query($db_conx, $sql_count_departments);

 $count_departments = mysqli_num_rows($query_count_departments);

 while ($row_departments = mysqli_fetch_array($query_count_departments)) {
    
    $designation_id = $row_departments['designation_id'];
    $designation_name = $row_departments['designation_name'];
    $company_id = $row_departments['company_id'];
    $user_id = $row_departments['user_id'];


    echo "<option value='".$designation_id."'>".$designation_name."</option>";
       

        $i++;

             
 } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="table-responsive m-t-15">
                                        <table class="table table-striped custom-table">
                                            <thead>
                                                <tr>
                                                    <th>Module Permission</th>
                                                    <th class="text-center">Read</th>
                                                    <th class="text-center">Write</th>
                                                    <th class="text-center">Create</th>
                                                    <th class="text-center">Delete</th>
                                                    <th class="text-center">Import</th>
                                                    <th class="text-center">Export</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Holidays</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Leaves</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Clients</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Projects</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Tasks</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Chats</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Assets</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Timing Sheets</td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input checked="" type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                    <td class="text-center">
                                                        <input type="checkbox">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> -->
                                    <div class="submit-section">
                                        <button name="myBtn" type="submit" class="btn btn-primary submit-btn" onclick="ajax_employ();">Submit</button>
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
                                        <button class="btn btn-primary submit-btn" onclick="ajax_employ();">Save</button>
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
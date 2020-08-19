<?php include 'parsers/header.php'; ?>

<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li> 
                                <a href="home"><i class="la la-home"></i> <span>Back to Home</span></a>
                            </li>
                            <li class="menu-title">Projects <a href="#" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i></a></li>

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

    
    echo '<li> 
                                <a href="tasks?project='.$project_title.'&pid='.$project_id.'">'.$project_title.'</a>
                            </li>';
                            $taskp .= '<option value="'.$project_id.'">'.$project_title.'</option>';
}
                            ?>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="chat-main-row">
                    <div class="chat-main-wrapper">
                        <div class="col-lg-7 message-view task-view task-left-sidebar">
                            <div class="chat-window">
                                <div class="fixed-header">
                                    <div class="navbar">
                                        <div class="float-left mr-auto">
                                            <div class="add-task-btn-wrapper">
                                               <?php echo $addtask; ?>
                                            </div>
                                        </div>
                                        <a class="task-chat profile-rightbar float-right" id="task_chat" href="#task_window"><i class="fa fa fa-comment"></i></a>
                                        <ul class="nav float-right custom-menu">
                                            <li class="nav-item dropdown dropdown-action">
                                                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0)">Pending Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Completed Tasks</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">All Tasks</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="chat-contents">
                                    <div class="chat-content-wrap">
                                        <div class="chat-wrap-inner">
                                            <div class="chat-box">
                                                <div class="task-wrapper">
                                                    <div class="task-list-container">
                                                        <div class="task-list-body">
                                                            <ul id="task-list" class="task-list">
                                                                
                                                                    
                                                                
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
                                                <div class="notification-popup hide">
                                                    <p>
                                                        <span class="task"></span>
                                                        <span class="notification-text"></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-5 message-view task-chat-view task-right-sidebar" id="task_window">
                            <div class="chat-window">
                                <div class="fixed-header">
                                    <div class="navbar">
                                        <div class="task-assign">
                                            <a class="task-complete-btn" id="task_complete" href="javascript:void(0);">
                                                <i class="material-icons">check</i> Mark Complete
                                            </a>
                                        </div>
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
                                </div>
                                <div class="chat-contents task-chat-contents">
                                    <div class="chat-content-wrap">
                                        <div class="chat-wrap-inner">
                                            <div class="chat-box">
                                                <div class="chats">
                                                    <h4>Hospital Administration Phase 1</h4>
                                                    <div class="task-header">
                                                        <div class="assignee-info">
                                                            <a href="#" data-toggle="modal" data-target="#assignee">
                                                                <div class="avatar">
                                                                    <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                                                </div>
                                                                <div class="assigned-info">
                                                                    <div class="task-head-title">Assigned To</div>
                                                                    <div class="task-assignee">John Doe</div>
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
                                                                    <div class="due-date">Mar 26, 2019</div>
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
                                                    <hr class="task-line">
                                                    <div class="task-information">
                                                        <span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">created task</span></span>
                                                        <div class="task-time">Jan 20, 2019</div>
                                                    </div>
                                                    <div class="task-information">
                                                        <span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">added to Hospital Administration</span></span>
                                                        <div class="task-time">Jan 20, 2019</div>
                                                    </div>
                                                    <div class="task-information">
                                                        <span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">assigned to John Doe</span></span>
                                                        <div class="task-time">Jan 20, 2019</div>
                                                    </div>
                                                    <hr class="task-line">
                                                    <div class="task-information">
                                                        <span class="task-info-line"><a class="task-user" href="#">John Doe</a> <span class="task-info-subject">changed the due date to Sep 28</span> </span>
                                                        <div class="task-time">9:09pm</div>
                                                    </div>
                                                    <div class="task-information">
                                                        <span class="task-info-line"><a class="task-user" href="#">John Doe</a> <span class="task-info-subject">assigned to you</span></span>
                                                        <div class="task-time">9:10pm</div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="profile.html" class="avatar">
                                                                <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <span class="task-chat-user">John Doe</span> <span class="chat-time">8:35 am</span>
                                                                    <p>I'm just looking around.</p>
                                                                    <p>Will you tell me something about yourself? </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="completed-task-msg"><span class="task-success"><a href="#">John Doe</a> completed this task.</span> <span class="task-time">Today at 9:27am</span></div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="profile.html" class="avatar">
                                                                <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <span class="task-chat-user">John Doe</span> <span class="file-attached">attached 3 files <i class="fa fa-paperclip"></i></span> <span class="chat-time">Feb 17, 2019 at 4:32am</span>
                                                                    <ul class="attach-list">
                                                                        <li><i class="fa fa-file"></i> <a href="#">project_document.avi</a></li>
                                                                        <li><i class="fa fa-file"></i> <a href="#">video_conferencing.psd</a></li>
                                                                        <li><i class="fa fa-file"></i> <a href="#">landing_page.psd</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="profile.html" class="avatar">
                                                                <img alt="" src="assets/img/profiles/avatar-16.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <span class="task-chat-user">Jeffery Lalor</span> <span class="file-attached">attached file <i class="fa fa-paperclip"></i></span> <span class="chat-time">Yesterday at 9:16pm</span>
                                                                    <ul class="attach-list">
                                                                        <li class="pdf-file"><i class="fa fa-file-pdf-o"></i> <a href="#">Document_2016.pdf</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <a href="profile.html" class="avatar">
                                                                <img alt="" src="assets/img/profiles/avatar-16.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">
                                                                    <span class="task-chat-user">Jeffery Lalor</span> <span class="file-attached">attached file <i class="fa fa-paperclip"></i></span> <span class="chat-time">Today at 12:42pm</span>
                                                                    <ul class="attach-list">
                                                                        <li class="img-file">
                                                                            <div class="attach-img-download"><a href="#">avatar-1.jpg</a></div>
                                                                            <div class="task-attach-img"><img src="assets/img/user.jpg" alt=""></div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="task-information">
                                                        <span class="task-info-line">
                                                            <a class="task-user" href="#">John Doe</a>
                                                            <span class="task-info-subject">marked task as incomplete</span>
                                                        </span>
                                                        <div class="task-time">1:16pm</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-footer">
                                    <div class="message-bar">
                                        <div class="message-inner">
                                            <a class="link attach-icon" href="#"><img src="assets/img/attachment.png" alt=""></a>
                                            <div class="message-area">
                                                <div class="input-group">
                                                    <textarea class="form-control" placeholder="Type message..."></textarea>
                                                    <span class="input-group-append">
                                                        <button class="btn btn-primary" type="button"><i class="fa fa-send"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-members task-followers">
                                        <span class="followers-title">Followers</span>
                                        <a class="avatar" href="#" data-toggle="tooltip" title="Jeffery Lalor">
                                            <img alt="" src="assets/img/profiles/avatar-16.jpg">
                                        </a>
                                        <a class="avatar" href="#" data-toggle="tooltip" title="Richard Miles">
                                            <img alt="" src="assets/img/profiles/avatar-09.jpg">
                                        </a>
                                        <a class="avatar" href="#" data-toggle="tooltip" title="John Smith">
                                            <img alt="" src="assets/img/profiles/avatar-10.jpg">
                                        </a>
                                        <a class="avatar" href="#" data-toggle="tooltip" title="Mike Litorus">
                                            <img alt="" src="assets/img/profiles/avatar-05.jpg">
                                        </a>
                                        <a href="#" class="followers-add" data-toggle="modal" data-target="#task_followers"><i class="material-icons">add</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
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
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Client</label>
                                                <select class="select">
                                                    <option>Global Technologies</option>
                                                    <option>Delta Infotech</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Start Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Rate</label>
                                                <input placeholder="$50" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <select class="select">
                                                    <option>Hourly</option>
                                                    <option>Fixed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Priority</label>
                                                <select class="select">
                                                    <option>High</option>
                                                    <option>Medium</option>
                                                    <option>Low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Add Project Leader</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Team Leader</label>
                                                <div class="project-members">
                                                    <a class="avatar" href="#" data-toggle="tooltip" title="Jeffery Lalor">
                                                        <img alt="" src="assets/img/profiles/avatar-16.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Add Team</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Team Members</label>
                                                <div class="project-members">
                                                    <a class="avatar" href="#" data-toggle="tooltip" title="John Doe">
                                                        <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                                    </a>
                                                    <a class="avatar" href="#" data-toggle="tooltip" title="Richard Miles">
                                                        <img alt="" src="assets/img/profiles/avatar-09.jpg">
                                                    </a>
                                                    <a class="avatar" href="#" data-toggle="tooltip" title="John Smith">
                                                        <img alt="" src="assets/img/profiles/avatar-10.jpg">
                                                    </a>
                                                    <a class="avatar" href="#" data-toggle="tooltip" title="Mike Litorus">
                                                        <img alt="" src="assets/img/profiles/avatar-05.jpg">
                                                    </a>
                                                    <span class="all-team">+2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="4" class="form-control summernote" placeholder="Enter your message here"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Files</label>
                                        <input class="form-control" type="file">
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Create Project Modal -->
                 <div id="tableManager" class="modal fade">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Task Description</h2>
                    </div>

                    <div class="modal-body">
                        <div id="editContent">
                            <input type="text" class="form-control" placeholder="Description" id="countryName"><br>
                           <br>
                            <select class="form-control" id="shortDesc">
                                <option>Choose Task Project</option>
                                <?php echo $taskp; ?>
                            </select>
                           
                            <input type="hidden" id="editRowID" value="0">
                        </div>

                        <div id="showContent" style="display:none;">
                            <h3>Short Description</h3>
                            <div id="shortDescView"></div>
                            <hr>
                            <h3>Long Description</h3>
                            <div id="longDescView" style="overflow-y: scroll; height: 300px;"></div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close" id="closeBtn" style="display: none;">
                        <input type="button" id="manageBtn" onclick="manageData('addNew')" value="Save" class="btn btn-success">
                    </div>
                </div>
            </div>
        </div>
                <!-- Assignee Modal -->
                <div id="assignee" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Assign to this task</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group m-b-30">
                                    <input placeholder="Search to add" class="form-control search-input" type="text">
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
                                    <button class="btn btn-primary submit-btn">Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Assignee Modal -->
                
                <!-- Task Followers Modal -->
                <div id="task_followers" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add followers to this task</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group m-b-30">
                                    <input placeholder="Search to add" class="form-control search-input" type="text">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary">Search</button>
                                    </span>
                                </div>
                                <div>
                                    <ul class="chat-user-list">
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <span class="avatar"><img alt="" src="assets/img/profiles/avatar-16.jpg"></span>
                                                    <div class="media-body media-middle text-nowrap">
                                                        <div class="user-name">Jeffery Lalor</div>
                                                        <span class="designation">Team Leader</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <span class="avatar"><img alt="" src="assets/img/profiles/avatar-08.jpg"></span>
                                                    <div class="media-body media-middle text-nowrap">
                                                        <div class="user-name">Catherine Manseau</div>
                                                        <span class="designation">Android Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <span class="avatar"><img alt="" src="assets/img/profiles/avatar-26.jpg"></span>
                                                    <div class="media-body media-middle text-nowrap">
                                                        <div class="user-name">Wilmer Deluna</div>
                                                        <span class="designation">Team Leader</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Add to Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Task Followers Modal -->
                
            </div>
            <!-- /Page Wrapper -->

        </div>
        <!-- /Main Wrapper -->


  


    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#addNew").on('click', function () {
               $("#tableManager").modal('show');
            });

            $("#tableManager").on('hidden.bs.modal', function () {
               $("#showContent").fadeOut();
               $("#editContent").fadeIn();
               $("#editRowID").val(0);
               $("#longDesc").val("");
               $("#shortDesc").val("");
               $("#countryName").val("");
               $("#closeBtn").fadeOut();
               $("#manageBtn").attr('value', 'Add New').attr('onclick', "manageData('addNew')").fadeIn();
            });

            getExistingData(0, 50);
        });

        function deleteRow(rowID) {
            if (confirm('Are you sure??')) {
                $.ajax({
                    url: 'ajax.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        key: 'deleteRow',
                        rowID: rowID
                    }, success: function (response) {
                        $("#country_"+rowID).parent().remove();
                        alert(response);
                    }
                });
            }
        }

        function viewORedit(rowID, type) {
            if (confirm('Are you sure??')) {
                $.ajax({
                    url: 'ajax.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        key: 'updateRow',
                        rowID: rowID
                    }, success: function (response) {
                        $("#country_"+rowID).parent().remove();
                        alert(response);
                    }
                });
            }
        }

          function edit(rowID, type) {
            $.ajax({
                url: 'ajax.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    key: 'getRowData',
                    rowID: rowID
                }, success: function (response) {
                    if (type == "view") {
                        $("#showContent").fadeIn();
                        $("#editContent").fadeOut();
                        $("#shortDescView").html(response.shortDesc);
                        $("#manageBtn").fadeOut();
                        $("#closeBtn").fadeIn();
                    } else {
                        $("#editContent").fadeIn();
                        $("#editRowID").val(rowID);
                        $("#showContent").fadeOut();
                        $("#shortDesc").val(response.shortDesc);
                        $("#countryName").val(response.countryName);
                        $("#closeBtn").fadeOut();
                        $("#manageBtn").attr('value', 'Save Changes').attr('onclick', "manageData('edit')");
                    }
                      
                    $(".modal-title").html(response.countryName);
                    $("#tableManager").modal('show');

                }

            });
        }

        function getExistingData(start, limit) {
            $.ajax({
                url: 'ajax.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    key: 'getExistingData',
                    start: start,
                    limit: limit
                }, success: function (response) {
                    if (response != "reachedMax") {
                        $('#task-list').append(response);
                        start += limit;
                        getExistingData(start, limit);
                    } else
                        $(".task-list").DataTable();
                }
            });
        }

        function manageData(key) {
            var name = $("#countryName");
            var shortDesc = $("#shortDesc");
            var longDesc = $("#longDesc");
            var editRowID = $("#editRowID");

            if (isNotEmpty(name) && isNotEmpty(shortDesc) && isNotEmpty(longDesc)) {
                $.ajax({
                   url: 'ajax.php',
                   method: 'POST',
                   dataType: 'text',
                   data: {
                       key: key,
                       name: name.val(),
                       shortDesc: shortDesc.val(),
                       longDesc: longDesc.val(),
                       rowID: editRowID.val()
                   }, success: function (response) {
                       if (response != "success")
                           alert(response);
                       else {
                           $("#country_"+editRowID.val()).html(name.val());
                           name.val('');
                           shortDesc.val('');
                           longDesc.val('');
                           $("#tableManager").modal('hide');
                           $("#manageBtn").attr('value', 'Add').attr('onclick', "manageData('addNew')");
                       }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == '') {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

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
        
        <!-- Task JS -->
        <script src="assets/js/task.js"></script>

        <!-- Custom JS -->
        <script src="assets/js/app.js"></script>
</body>
</html>
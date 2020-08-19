<?php
include_once("php_includes/check_login_status.php");
if($user_ok != true){
    header("location: login.php");
    exit();
}
$departments = '';
$toaddtask .= 'Click a project to add a task';

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

}
?>
<?php 
 
  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO task (task_desc, project_id) VALUES ('{$name}', '{$comment}')";
    if (mysqli_query($db_conx, $sql)) {
      $id = mysqli_insert_id($db_conx);
      $saved_comment = '<div class="comment_box">
          <span class="delete" data-id="' . $id . '" >delete</span>
          <span class="edit" data-id="' . $id . '">edit</span>
          <div class="display_name">'. $name .'</div>
          <div class="comment_text">'. $comment .'</div>
        </div>';
      echo $saved_comment;
    }else {
      echo "Error: ". mysqli_error($db_conx);
    }
    exit();
  }
  // delete comment fromd database
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM task WHERE company_id = '$log_username' AND user_id = '$user_ids' AND task_id=" . $id;
    mysqli_query($db_conx, $sql);
    exit();
  }

    // status comment fromd database
  if (isset($_GET['status'])) {
  // $id = $_POST['id'];
   $id = $_GET['id'];
 // $status = 'Completed';

$sql_p = "SELECT * FROM task WHERE task_id = '$id' AND company_id = '$log_username' AND user_id = '$user_ids'";
$query_p = mysqli_query($db_conx, $sql_p);
while ($row_p = mysqli_fetch_array($query_p)) {
  # code...
  $task_id = $row_p['task_id'];
  $project_idss = $row_p['project_id'];
  $task_desc = $row_p['task_desc'];
  $task_status = $row_p['status'];

    if($task_status == 'Completed'){

    $sql = "UPDATE task SET status = 'Pending', status_date = NOW() WHERE company_id = '$log_username' AND user_id = '$user_ids' AND task_id=" . $id;
    mysqli_query($db_conx, $sql);

    $statusresponse = ' <p>
                                                        <span class="task">'.$task_desc.' is now Completed</span>
                                                        <span class="notification-text">'.$task_desc.' is now Completed</span>
                                                    </p>';
    exit();

   } else{

     $sql = "UPDATE task SET status = 'Completed', status_date = NOW() WHERE company_id = '$log_username' AND user_id = '$user_ids' AND task_id=" . $id;
    mysqli_query($db_conx, $sql);

    $statusresponse = '
                                                    '.$task_desc.' is now Pending';
    exit();
   }
}
}
  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $sql = "UPDATE task SET task_desc='{$name}', project_id='{$comment}' WHERE company_id = '$log_username' AND user_id = '$user_ids' AND task_id=" . $id;
    if (mysqli_query($db_conx, $sql)) {
      $id = mysqli_insert_id($db_conx);
      $saved_comment = '<div class="comment_box">
        <span class="delete" data-id="' . $id . '" >delete</span>
        <span class="edit" data-id="' . $id . '">edit</span>
        <div class="display_name">'. $name .'</div>
        <div class="comment_text">'. $comment .'</div>
      </div>';
      echo $saved_comment;
    }else {
      echo "Error: ". mysqli_error($db_conx);
    }
    exit();
  }

  // Retrieve comments from database
  $sql = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id = '$user_ids'";
  $result = mysqli_query($db_conx, $sql);
  $comments = '<ul id="task-list">'; 
  while ($row = mysqli_fetch_array($result)) {

   if($row['status'] == 'Completed'){

   // $task_status_color .= '<li class="completed task"><div class="task-container">';
    $comments .= ' <li class="completed task">
                                                                    <div class="task-container">
                                                                        <span class="task-action-btn task-check">
                                                                           <span class="action-square large complete-btn" title="Status"  data-id="' . $row['task_id'] . '" id="check">
                                                                                <i class="material-icons">check</i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="task-label" contenteditable="true">'. $row['task_desc'] .'</span>
                                                                        <span class="task-action-btn task-btn-right">

                                                                          <span class="assignee-info">
                                                                            <a href="edittask.php?taskID='. $row['task_id'] . '">
                                                                            <span class="action-circle large" title="Assign">
                                                                                <i class="material-icons">edit</i>
                                                                            </span>
                                                                            </a>
                                                                            </span>



                                                                             <span id="delete" class="action-circle large delete-btn" title="Delete Task"  data-id="' . $row['task_id'] . '" ><i class="material-icons">delete</i></span>


                                                                        </span>
                                                                    </div>
                                                                </li>



                                                                ';
  }
 
#$comments .= '</div>';
  else{
    $get = $row['task_id'];
      $comments .= ' <li class="task">
                                                                     <div class="task-container">
                                                                        <span class="task-action-btn task-check">
                                                                           <span class="action-square large complete-btn" title="Status"  data-id="' . $row['task_id'] . '" id="check">
                                                                                <i class="material-icons">check</i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="task-label" contenteditable="true">'. $row['task_desc'] .'</span>
                                                                        <span class="task-action-btn task-btn-right">

                                                                          <span class="assignee-info">
                                                                           <a href="edittask.php?taskID='. $row['task_id'] . '">
                                                                            <span class="action-circle large" title="Assign">
                                                                                <i class="material-icons">edit</i>
                                                                            </span>
                                                                            </a>
                                                                            </span>



                                                                             <span id="delete" class="action-circle large delete-btn" title="Delete Task"  data-id="' . $row['task_id'] . '" ><i class="material-icons">delete</i></span>


                                                                        </span>
                                                                    </div>
                                                                </li>';

  }
}
 
#$comments .= '</div>';
?>



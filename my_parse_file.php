<?php 
include_once("php_includes/check_login_status.php");
include 'php_includes/db_conx.php';
if($user_ok != true){
    header("location: login.php");
    exit();
}
// After uploading to online server, change this connection accordingly

$title = $_POST['Title'];
$desc = $_POST['Desc'];
  $msg = mysqli_real_escape_string($db_conx, $title);
// echo $msg;
// echo $desc;
//exit();

$sql_p = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id = '$log_id' AND project_id = '$desc' AND task_desc = '$msg'";
$query_p = mysqli_query($db_conx, $sql_p);
$count_task = mysqli_num_rows($query_p);
while ($row_p = mysqli_fetch_array($query_p)) {
	# code...
	$task_id = $row_p['task_id'];
    $project_idss = $row_p['project_id'];
	$task_desc = $row_p['task_desc'];

}

if ($count_task >= 1) {
	# code...
	
	echo "Task Already exists";

		
	
	}else{

		$sql = "INSERT INTO task (task_desc, project_id, company_id, user_id, creation_date) VALUES ('$msg', '$desc', '$log_username', '$log_id', NOW())";
		$query = mysqli_query($db_conx, $sql);
		if ($query) {
			# code...
		//	echo "error";

			echo '<div class="notification-popup hide">
													<p>
														<span class="task"></span>
														<span class="notification-text"></span>
													</p>
												</div>';

		
            if(file_exists('employee_data.json'))  
           {  
                $current_data = file_get_contents('employee_data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                	 'task_id'    => $_POST['Title'],
                     'task_desc'               =>      $_POST['Desc'],  
                     'company_id'          =>     $log_username,  
                     'user_id'     =>     $log_id,  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('employee_data.json', $final_data))  
                {  
                     echo "<label class='text-success'>New Task Added</p>";  
                }  
           }  
           else  
           {  
                echo 'JSON File not exits';  
           }  
		}
	}
?>


<?php
	if (isset($_POST['key'])) {

		$conn = new mysqli('localhost', 'root', '', 'sphermanager');

		if ($_POST['key'] == 'getRowData') {
			$rowID = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT task_desc, project_id, company_id, status FROM task WHERE task_id='$rowID'");
			$data = $sql->fetch_array();
			$jsonArray = array(
				'task_desc' => $data['task_desc'],
				'project_id' => $data['project_id'],
				'company_id' => $data['company_id'],
				'status' => $data['status'],
			);

			exit(json_encode($jsonArray));
 		}

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT task_id, task_desc, status FROM task LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {

                    if ($data["status"] != 2) {
                    	# code...
                    	$task_status_color = '<li class="task"><div class="task-container">
																		<span class="task-action-btn task-check">';
                   
                      
					$response .= ''.$task_status_color.'
																			<span class="action-circle large complete-btn" title="Mark Complete" onclick="status('.$data["task_id"].')">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">'.$data["task_desc"].'</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign" onclick="edit('.$data["task_id"].', \'Edit\')" value="Edit" ajax_taskcomplete>
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task" onclick="deleteRow('.$data["task_id"].')" value="Delete">
																				<i class="material-icons">delete</i>
																			</span>
																			
																		</span>
																	</div>
																	</li>
																';
				} else{

            $task_status_color = '<li class="completed task"><div class="task-container">
																		<span class="task-action-btn task-check">';
                   
                      
					$response .= ''.$task_status_color.'
																			<span class="action-circle large complete-btn" title="Mark Complete" onclick="status('.$data["task_id"].')">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">'.$data["task_desc"].'</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign" onclick="edit('.$data["task_id"].', \'Edit\')" value="Edit" ajax_taskcomplete>
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task" onclick="deleteRow('.$data["task_id"].')" value="Delete">
																				<i class="material-icons">delete</i>
																			</span>
																			
																		</span>
																	</div>
																	</li>
																';



				}  }
				exit($response);
			} else
				exit('reachedMax');
		}

		$rowID = $conn->real_escape_string($_POST['rowID']);

		if ($_POST['key'] == 'deleteRow') {
			$conn->query("DELETE FROM task WHERE task_id='$rowID'");
			exit('The Task Has Been Deleted!');
		}

		// $name = $conn->real_escape_string($_POST['name']);
		// $shortDesc = $conn->real_escape_string($_POST['shortDesc']);
		// $longDesc = $conn->real_escape_string($_POST['longDesc']);

		if ($_POST['key'] == 'status') {
			$sql_p = "SELECT status FROM task WHERE task_id='$rowID'";
			$query_p = mysqli_query($conn, $sql_p);
			$count_task = mysqli_num_rows($query_p);
			while ($row = mysqli_fetch_assoc($query_p)) {
				# code...
				$status = $row['status'];
			if ($status == 0) {
				# code...
				$name = 1;
			    $conn->query("UPDATE task SET status='$name' WHERE task_id='$rowID'");
			}elseif($status == 1){

			$name = 2;
			$conn->query("UPDATE task SET status='$name' WHERE task_id='$rowID'");
			}else{

			$name = 0;
			$conn->query("UPDATE task SET status='$name' WHERE task_id='$rowID'");
			}
			exit('success');
		}
	}

		// $name = $conn->real_escape_string($_POST['name']);
		// $shortDesc = $conn->real_escape_string($_POST['shortDesc']);
		// //$longDesc = $conn->real_escape_string($_POST['longDesc']);

		// if ($_POST['key'] == 'updateRow') {
		// 	$conn->query("UPDATE task SET task_desc='$name', project_id='$shortDesc' WHERE task_id='$rowID'");
		// 	exit('success');
		// }

	    $name = $conn->real_escape_string($_POST['name']);
		$shortDesc = $conn->real_escape_string($_POST['shortDesc']);
		//$longDesc = $conn->real_escape_string($_POST['longDesc']);
		$rowID = $conn->real_escape_string($_POST['rowID']);

		if ($_POST['key'] == 'updateRow') {
			$conn->query("UPDATE task SET task_desc='$name', project_id='$shortDesc' WHERE task_id='$rowID'");
			exit('success');
		}

		if ($_POST['key'] == 'addNew') {
			$sql = $conn->query("SELECT task_id FROM task WHERE task_desc = '$name'");
			if ($sql->num_rows > 0)
				exit("Task With This Name Already Exists!");
			else {
				$conn->query("INSERT INTO task (task_desc, project_id, company_id) 
							VALUES ('$name', '$shortDesc', '$longDesc')");
				exit('Task Has Been Inserted!');
			}
		}
	}

	 //    $name = $conn->real_escape_string($_POST['name']);
		// $shortDesc = $conn->real_escape_string($_POST['shortDesc']);
  //        // echo $shortDesc;
  //        // exit();
		// if ($_POST['key'] == 'edit') {
		// 	$conn->query("UPDATE task SET task_desc='$name', project_id='$shortDesc' WHERE task_id='$rowID'");
		// 	echo "success";
		// 	exit();

		// }

?>
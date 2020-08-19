 <?php 

$sql_p = "SELECT * FROM project WHERE company_id = '$log_username' AND user_id = '$user_ids'";
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
    $leader_id = $row_p['leader_id'];

    echo '<li> 
                                <a href="tasks?project='.$project_title.'&pid='.$project_id.'">'.$project_title.'</a>
                            </li>';
}
                            ?>

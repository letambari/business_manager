<?php
include('connect.php');


if(isset($_POST['view'])){

// $con = mysqli_connect("localhost", "root", "", "notif");

if($_POST["view"] != '')
{
    $update_query = "UPDATE chat_msg SET status = 2 WHERE status=1";
    mysqli_query($con, $update_query);
}
$query = "SELECT * FROM chat_msg WHERE status = 1 ORDER BY date_time DESC LIMIT 5";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
   <li>
   <a href="#">
   <strong>'.$row["sender_fullname"].'</strong><br />
   <small><em>'.$row["msg"].'</em></small>
   </a>
   </li>
   ';

 }
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
}



$status_query = "SELECT * FROM chat_msg WHERE status=1";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}

?>
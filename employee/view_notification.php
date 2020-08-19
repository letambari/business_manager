<?php
$conn = new mysqli("localhost","root","","sphermanager");

$sql="UPDATE comments SET status=1 WHERE status=0";	
$result=mysqli_query($conn, $sql);

$sql="select * from chat_msg ORDER BY id DESC limit 5";
$result=mysqli_query($conn, $sql);

$response='<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
while($row=mysqli_fetch_array($result)) {
	$response = $response ."<li class='notification-message'><a href='chat.html'>" .
	"<div class='list-item'>
												<div class='list-left'>
													<span class='avatar'>
														<img alt='' src='assets/img/profiles/avatar-09.jpg'>
													</span>
												</div>
												<div class='list-body'>
													<span class='message-author'>". $row["sender_fullname"] . "</span><span class='message-time'>".$row["date_time"]."</span>" . 
	"<div class='clearfix'></div>
													<span class='message-content' style='color:blue'>" . $row["msg"]  . "</span>
												
   " .
	"</div>
											</div>
										</a>
									</li>";
}
if(!empty($response)) {
	print $response;
}


?>
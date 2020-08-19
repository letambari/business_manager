
<?php 
	include 'php_includes/check_login_status.php';
	include 'parsers/codes.php';
	//$pid = $pidss;
	//echo $pid;

$pid = $_SESSION['pidss'];

// echo $pid;
// exit();

	$query = "SELECT * FROM chat WHERE cproject_id = '$pid' AND ursercode = '$log_username'";
	$run = $db_conx->query($query);
	while($row = $run->fetch_array()) :
		?><div class="chat chat-left"  id="chat_data">
			 <div class="chat-avatar">
                                                            <a href="profile" class="avatar">
                                                                <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                                            </a>
                                                        </div>
		 <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">


				  <span class="task-chat-user"><?php echo $row['name']; ?>
				  </span> <span class="chat-time"><?php echo $row['date']; ?></span>
				<!--   <h5><?php //echo $pid; ?></h5> -->
				
                                                                    <p style="color: blue;"> <?php echo $row['msg']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>



			<?php endwhile;?>

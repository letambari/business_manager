


<!DOCTYPE html>
<html>
<head>
	<title>okay</title>
</head>
<body>

<?php 
	include 'php_includes/db.php';
	
	$pid = $_POST['pid'];
	
	$query = "SELECT * FROM chat WHERE project_id = '$pid' ORDER BY id DESC";
	$run = $db_conx->query($query);
	while($row = $run->fetch_array()) :
		?><div class="chat chat-left"  id="chat_data">
			 <div class="chat-avatar">
                                                            <a href="profile.html" class="avatar">
                                                                <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                                            </a>
                                                        </div>
		 <div class="chat-body">
                                                            <div class="chat-bubble">
                                                                <div class="chat-content">


				  <span class="task-chat-user"><?php echo $row['name']; ?>
				  </span> <span class="chat-time"><?php echo $row['date']; ?></span>
				
                                                                    <p> <?php echo $row['msg']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>



			<?php endwhile;?>
 <?php
echo " <br />";
$counter = rand();
echo $counter;


?>


<p>Below is the example to only update one div in HTML USING JS timing function setInterval
 Part 1: using ajax and jquery to update content posted from test.php
Part 2: Only use Javascript</p>
</body>
</html>
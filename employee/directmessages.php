<?php
include 'php_includes/check_login_status.php';
	include 'parsers/codes.php';
?>
<?php
 $currentchat = $_SESSION['currentchat'];



		$chat_query="SELECT * FROM chat_msg WHERE (sender_id='$e_usernames' OR sender_id='$currentchat') AND (reciever_id='$currentchat' OR reciever_id='$e_usernames')  ORDER BY date_time";
			$chat_result=mysqli_query($db_conx, $chat_query);
			$_SESSION["num-chat2"]=mysqli_num_rows($chat_result);
			
			while($chat_row=mysqli_fetch_object($chat_result))
			{
                 $fileType = ' ';   
                    if($chat_row->status==1)
					{
						$sent = "<p>✓</p>";
					}
					elseif($chat_row->status==2)
					{
						$sent = "<p style='color:green'>✓✓</p>";
					}
					
				
				if($chat_row->sender_id==$e_usernames)
				{
					if($chat_row->fileType=='image/jpeg')
					{
						$fileType = '<a class="chat-img-attach" href="#">
																	
																			<img width="182" height="137" alt="" src="test_uploads/'.$chat_row->file.'">
																			<div class="chat-placeholder">
																				<div class="chat-img-name">'.$chat_row->fileSize.' KB</div>
																			</div>
																		</a>';
					}
					elseif($chat_row->fileType=='video/mp4')
					{
						$fileType = "none";
					}
					elseif($chat_row->fileType=='application/octet-stream')
					{
						$fileType = '<li class="file"><i class="fa fa-file"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>
						';
						
					}
					elseif($chat_row->fileType=='application/pdf')
					{
						$fileType = '<li class="pdf-file"><i class="fa fa-file-pdf-o"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>';
					}
					elseif($chat_row->fileType=='application/docx')
					{
						$fileType = '<li class="pdf-file"><i class="fa fa-word-pdf-o"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>';
					}
					elseif($chat_row->fileType=='application/xls')
					{
						$fileType = '<li class="pdf-file"><i class="fa fa-word-excel-o"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>';
					}
					elseif($chat_row->fileType=='application/csv')
					{
						$fileType = '<li class="pdf-file"><i class="fa fa-csv-pdf-o"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>';
					}
					elseif($chat_row->fileType=='application/xlsx')
					{
						$fileType = '<li class="pdf-file"><i class="fa fa-excel-pdf-o"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>';
					} else{

						$fileType = ' ';
					}
					echo '<div class="chat chat-right">
													<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
 																	<p>'.$chat_row->msg.'</p>
																	<span class="chat-time">'.$chat_row->date_time.'</span>

																	'.$fileType.'
																</div>
																<div class="chat-action-btns">
																	<ul>
																	<li><i class="fa fa-good-alt"></i>'.$sent.'</li>
 																	<!--	<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
 																		<li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
																		<li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li> -->
																	</ul>
 																</div>
 															</div> 
 														</div>
 													</div>';
					// if($chat_row->status==1)
					// {
					// 	echo "✓</p>";
					// }
					// elseif($chat_row->status==2)
					// {
					// 	echo "✓✓</p>";
					// }
					// elseif($chat_row->status==3)
					// {
					// 	echo "✓✓✓</p>";
					// }

				}
				elseif($chat_row->sender_id==$currentchat)
				{
					if($chat_row->fileType=='image/jpeg')
					{
						$fileType = '<a class="chat-img-attach" href="#">
																	
																			<img width="182" height="137" alt="" src="test_uploads/'.$chat_row->file.'">
																			<div class="chat-placeholder">
																				<div class="chat-img-name">'.$chat_row->fileSize.' KB</div>
																			</div>
																		</a>';
					}
					elseif($chat_row->fileType=='video/mp4')
					{
						$fileType = "none";
					}
					elseif($chat_row->fileType=='application/octet-stream')
					{
						$fileType = '<li class="file"><i class="fa fa-file"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>
						';
						
					}
					elseif($chat_row->fileType=='application/pdf')
					{
						$fileType = '<li class="pdf-file"><i class="fa fa-file-pdf-o"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>';
					}
					elseif($chat_row->fileType=='application/docx')
					{
						$fileType = '<li class="pdf-file"><i class="fa fa-word-pdf-o"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>';
					}
					elseif($chat_row->fileType=='application/xls')
					{
						$fileType = '<li class="pdf-file"><i class="fa fa-word-excel-o"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>';
					}
					elseif($chat_row->fileType=='application/csv')
					{
						$fileType = '<li class="pdf-file"><i class="fa fa-csv-pdf-o"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>';
					}
					elseif($chat_row->fileType=='application/xlsx')
					{
						$fileType = '<li class="pdf-file"><i class="fa fa-excel-pdf-o"></i> <a href="#">'.$chat_row->file.'</a><small> '.$chat_row->fileSize.' KB </small></li>';
					} else{

						$fileType = ' ';
					}
					echo '<div class="chat chat-left">
													<div class="chat-avatar">
															<a href="profile.html" class="avatar">
																<img alt="" src="assets/img/profiles/avatar-05.jpg">
 															</a>
														</div>
 														<div class="chat-body">
 															<div class="chat-bubble">
 																<div class="chat-content">
 																	<p>'.$chat_row->msg.'</p>
 																	<!-- <p>Will you tell me something about yourself? </p> -->
 																	<span class="chat-time">'.$chat_row->date_time.'</span>

 																	'.$fileType.'
 																</div>
 																<!-- <div class="chat-action-btns">
																	<ul>
 																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
																		<li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
 																		<li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
																     </ul>
	  															</div> -->
															</div>
														</div>
 													</div>';
				}
			}
		
























			// $chat_query="SELECT * FROM direct_messages WHERE (sender_id='$log_id' OR sender_id='$currentchat') AND (reciever_id='$currentchat' OR reciever_id='$log_id') AND (s_company_id='$log_username') AND (r_company_id='$log_username') ORDER BY date_time";
			// $chat_result=mysqli_query($db_conx, $chat_query);
			// $_SESSION["num-chat2"]=mysqli_num_rows($chat_result);
			
			// while($chat_row=mysqli_fetch_object($chat_result))
			// {

				
			// 	if($chat_row->sender_id==$log_id)
			//	{
// 					echo '<div class="chat chat-right">
// // 														<div class="chat-body">
// // 															<div class="chat-bubble">
// // 																<div class="chat-content">
// // 																	<p>'.$chat_row->message.'</p>
// // 																	<span class="chat-time">'.$chat_row->date_time.'</span>
// // 																</div>
// // 																<!-- <div class="chat-action-btns">
// // 																	<ul>
// // 																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
// // 																		<li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
// // 																		<li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
// // 																	</ul>
// // 																</div> -->
// // 															</div>
// // 														</div>
// // 													</div>';
				
// 					// if($chat_row->status==1)
// 					// {
// 					// 	echo "✓</p>";
// 					// }
// 					// elseif($chat_row->status==2)
// 					// {
// 					// 	echo "✓✓</p>";
// 					// }
// 					// elseif($chat_row->status==3)
// 					// {
// 					// 	echo "✓✓✓</p>";
// 					// }

// 				}
// 				elseif($chat_row->sender_id==$currentchat)
// 				{
// 					echo '<div class="chat chat-left">
// 														<div class="chat-avatar">
// 															<a href="profile.html" class="avatar">
// 																<img alt="" src="assets/img/profiles/avatar-05.jpg">
// 															</a>
// 														</div>
// 														<div class="chat-body">
// 															<div class="chat-bubble">
// 																<div class="chat-content">
// 																	<p>'.$chat_row->message.'</p>
// 																	<!-- <p>Will you tell me something about yourself? </p> -->
// 																	<span class="chat-time">'.$chat_row->date_time.'</span>
// 																</div>
// 																<!-- <div class="chat-action-btns">
// 																	<ul>
// 																		<li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
// 																		<li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
// 																		<li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
// 																	</ul>
// 																</div> -->
// 															</div>
// 														</div>
// 													</div>';
	
// 				}
// 			}
			?>
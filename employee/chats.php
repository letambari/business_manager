<?php 

include 'parsers/header2.php'; 
                           
	?>
	
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Chat Main Row -->
				<div class="chat-main-row">
				
					<!-- Chat Main Wrapper -->
					<div class="chat-main-wrapper">
					
						<!-- Chats View -->
						<div class="col-lg-9 message-view task-view">
							<div class="chat-window">
							 <div class="fixed-header">
									<div class="navbar">
										<?php echo $withoutcontact; ?>
								
										

										</div>
								</div>
									
								 <div class="chat-contents">
									<div class="chat-content-wrap">
										<div class="chat-wrap-inner">
											<div class="chat-box">
												<div class="chats">
												<div id="chatps"></div>
													<div class="chat-line">
														<span class="chat-date"><!-- October 8th, 2018 --></span>
													</div>
													
											
												
												</div>
											</div>
										</div>
									</div>
								</div> 
							<?php echo $messagebox; ?>
							</div>
						</div>
						<!-- /Chats View -->
						
						<!-- Chat Right Sidebar -->
						<!-- <div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="task_window">
							<div class="chat-window video-window">
								<div class="fixed-header">
									<ul class="nav nav-tabs nav-tabs-bottom">
										<li class="nav-item"><a class="nav-link" href="#calls_tab" data-toggle="tab">Calls</a></li>
										<li class="nav-item"><a class="nav-link active" href="#profile_tab" data-toggle="tab">Profile</a></li>
									</ul>
								</div>
								<div class="tab-content chat-contents">
									<div class="content-full tab-pane" id="calls_tab">
										<div class="chat-wrap-inner">
											<div class="chat-box">
												<div class="chats">
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.html" class="avatar">
																<img alt="" src="assets/img/profiles/avatar-02.jpg">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<span class="task-chat-user">You</span> <span class="chat-time">8:35 am</span>
																	<div class="call-details">
																		<i class="material-icons">phone_missed</i>
																		<div class="call-info">
																			<div class="call-user-details">
																				<span class="call-description">Jeffrey Warden missed the call</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
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
																	<div class="call-details">
																		<i class="material-icons">call_end</i>
																		<div class="call-info">
																			<div class="call-user-details"><span class="call-description">This call has ended</span></div>
																			<div class="call-timing">Duration: <strong>5 min 57 sec</strong></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="chat-line">
														<span class="chat-date">January 29th, 2019</span>
													</div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.html" class="avatar">
																<img alt="" src="assets/img/profiles/avatar-05.jpg">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<span class="task-chat-user">Richard Miles</span> <span class="chat-time">8:35 am</span>
																	<div class="call-details">
																		<i class="material-icons">phone_missed</i>
																		<div class="call-info">
																			<div class="call-user-details">
																				<span class="call-description">You missed the call</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
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
																	<span class="task-chat-user">You</span> <span class="chat-time">8:35 am</span>
																	<div class="call-details">
																		<i class="material-icons">ring_volume</i>
																		<div class="call-info">
																			<div class="call-user-details">
																				<a href="#" class="call-description call-description--linked" data-qa="call_attachment_link">Calling John Smith ...</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="content-full tab-pane show active" id="profile_tab">
										<div class="display-table">
											<div class="table-row">
												<div class="table-body">
													<div class="table-content">
														<div class="chat-profile-img">
															<div class="edit-profile-img">
																<img src="assets/img/profiles/avatar-02.jpg" alt="">
																<span class="change-img">Change Image</span>
															</div>
															<h3 class="user-name m-t-10 mb-0">John Doe</h3>
															<small class="text-muted">Web Designer</small>
															<a href="javascript:void(0);" class="btn btn-primary edit-btn"><i class="fa fa-pencil"></i></a>
														</div>
														<div class="chat-profile-info">
															<ul class="user-det-list">
																<li>
																	<span>Username:</span>
																	<span class="float-right text-muted">johndoe</span>
																</li>
																<li>
																	<span>DOB:</span>
																	<span class="float-right text-muted">24 July</span>
																</li>
																<li>
																	<span>Email:</span>
																	<span class="float-right text-muted">johndoe@example.com</span>
																</li>
																<li>
																	<span>Phone:</span>
																	<span class="float-right text-muted">9876543210</span>
																</li>
															</ul>
														</div>
														<div class="transfer-files">
															<ul class="nav nav-tabs nav-tabs-solid nav-justified mb-0">
																<li class="nav-item"><a class="nav-link active" href="#all_files" data-toggle="tab">All Files</a></li>
																<li class="nav-item"><a class="nav-link" href="#my_files" data-toggle="tab">My Files</a></li>
															</ul>
															<div class="tab-content">
																<div class="tab-pane show active" id="all_files">
																	<ul class="files-list">
																		<li>
																			<div class="files-cont">
																				<div class="file-type">
																					<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
																				</div>
																				<div class="files-info">
																					<span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
																					<span class="file-author"><a href="#">Loren Gatlin</a></span> <span class="file-date">May 31st at 6:53 PM</span>
																				</div>
																				<ul class="files-action">
																					<li class="dropdown dropdown-action">
																						<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
																						<div class="dropdown-menu">
																							<a class="dropdown-item" href="javascript:void(0)">Download</a>
																							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Share</a>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</li>
																	</ul>
																</div>
																<div class="tab-pane" id="my_files">
																	<ul class="files-list">
																		<li>
																			<div class="files-cont">
																				<div class="file-type">
																					<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
																				</div>
																				<div class="files-info">
																					<span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
																					<span class="file-author"><a href="#">John Doe</a></span> <span class="file-date">May 31st at 6:53 PM</span>
																				</div>
																				<ul class="files-action">
																					<li class="dropdown dropdown-action">
																						<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
																						<div class="dropdown-menu">
																							<a class="dropdown-item" href="javascript:void(0)">Download</a>
																							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#share_files">Share</a>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- /Chat Right Sidebar -->
						
					</div>
					<!-- /Chat Main Wrapper -->
					
				</div>
				<!-- /Chat Main Row -->
				
				<!-- Drogfiles Modal -->
				<div id="drag_files" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Drag and drop files upload</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">

								<div class="upload-div">
    <!-- File upload form -->
    <form id="uploadForm" enctype="multipart/form-data">
									
										<i class="fa fa-cloud-upload fa-2x"></i> <input type="file" name="images[]" class="form-control" id="fileInput" multiple >
							
                                        <div id="uploadStatus"></div>
                                    <ul class="upload-list">
                                        <li class="file-list">
                                            <div class="upload-wrap">
                                                <div class="file-name">
                                                    <div class="gallery"></div>
                                                 
                                                </div>
                                     
                                                <button type="button" class="file-close">
                                                    <i class="fa fa-close"></i>
                                                </button>
                                            </div>
                                         
                                         
                                        </li>

								
    	 <div class="form-group">
     
        <textarea class="form-control" id="msg" name="msg" placeholder="Type message..."></textarea>
        <input type="hidden" id="s_company_id" name="s_company_id" value="<?php echo $log_username; ?>">
        <input type="hidden" id="r_company_id" name="r_company_id" value="<?php echo $log_username; ?>">
        <input type="hidden" id="sender_id" name="sender_id" value="<?php echo $e_usernames; ?>">
        <input type="hidden" id="reciever_id" name="reciever_id" value="<?php echo $_SESSION['currentchat']; ?>">
        <input type="hidden" id="sender_fullname" name="sender_fullname"  value="<?php echo $fullname; ?>">
    </div>

         <div class="submit-section">
        <input class="btn btn-primary submit-btn" type="submit" name="submit" value="send"/>
    </div>
    </form>
	
    <!-- Display upload status -->
 
</div>



                          
								

							</div>
						</div>
					</div>
				</div>
				<!-- /Drogfiles Modal -->
				
				<!-- Add Group Modal -->
				<div id="add_group" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create a group</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p>Groups are where your team communicates. They’re best when organized around a topic — #leads, for example.</p>
								<form>
								<div class="form-group">
									<label>Group Name <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
								<div class="form-group">
									<label>Send invites to: <span class="text-muted-light">(optional)</span></label>
									<input class="form-control" type="text">
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Submit</button>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Group Modal -->
				
				<!-- Add Chat User Modal -->
				<div id="add_chat_user" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Direct Chat</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="input-group m-b-30">
									<input placeholder="Search to start a chat" class="form-control search-input" type="text">
									<span class="input-group-append">
										<button class="btn btn-primary">Search</button>
									</span>
								</div>
								<div>
									<h5>Recent Conversations</h5>
									<ul class="chat-user-list">
										<li>
											<a href="#">
												<div class="media">
													<span class="avatar align-self-center">
														<img src="assets/img/profiles/avatar-16.jpg" alt="">
													</span>
												<div class="media-body align-self-center text-nowrap">
													<div class="user-name">Jeffery Lalor</div>
													<span class="designation">Team Leader</span>
												</div>
												<div class="text-nowrap align-self-center">
													<div class="online-date">1 day ago</div>
												</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="media ">
													<span class="avatar align-self-center">
														<img src="assets/img/profiles/avatar-13.jpg" alt="">
													</span>
													<div class="media-body align-self-center text-nowrap">
														<div class="user-name">Bernardo Galaviz</div>
														<span class="designation">Web Developer</span>
													</div>
													<div class="align-self-center text-nowrap">
														<div class="online-date">3 days ago</div>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="media">
													<span class="avatar align-self-center">
														<img src="assets/img/profiles/avatar-02.jpg" alt="">
													</span>
													<div class="media-body text-nowrap align-self-center">
														<div class="user-name">John Doe</div>
														<span class="designation">Web Designer</span>
													</div>
													<div class="align-self-center text-nowrap">
														<div class="online-date">7 months ago</div>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Chat User Modal -->
				
				<!-- Share Files Modal -->
				<div id="share_files" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Share File</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="files-share-list">
									<div class="files-cont">
										<div class="file-type">
											<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
										</div>
										<div class="files-info">
											<span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
											<span class="file-author"><a href="#">Bernardo Galaviz</a></span> <span class="file-date">May 31st at 6:53 PM</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Share With</label>
									<input class="form-control" type="text">
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Share</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Share Files Modal -->
				
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Dropfiles JS -->
		<script src="assets/js/dropfiles.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
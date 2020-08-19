
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="active" href="home">Admin Dashboard</a></li>
									
								</ul>
							</li>
						<li class="submenu">
								<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="messages">Chat</a></li>
								<!--	<li class="submenu">
										<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="voice-call">Voice Call</a></li>
											<li><a href="video-call">Video Call</a></li>
											<li><a href="outgoing-call">Outgoing Call</a></li>
											<li><a href="incoming-call">Incoming Call</a></li>
										</ul>
									</li>
									<li><a href="events">Calendar</a></li>
									<li><a href="contacts">Contacts</a></li>
									<li><a href="inbox">Email</a></li>
									<li><a href="file-manager">File Manager</a></li>-->
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Employees</span>
							</li>
							<li class="submenu">
								<a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="employees">All Employees</a></li>
									<!-- <li><a href="holidays">Holidays</a></li>
									<li><a href="leaves">Leaves (Admin) <span class="badge badge-pill bg-primary float-right">1</span></a></li>
									<li><a href="leaves-employee">Leaves (Employee)</a></li>
									<li><a href="leave-settings">Leave Settings</a></li>
									<li><a href="attendance">Attendance (Admin)</a></li>
									<li><a href="attendance-employee">Attendance (Employee)</a></li> -->
									<li><a href="departments">Departments</a></li>
									<li><a href="designations">Designations</a></li>
									<!-- <li><a href="timesheet">Timesheet</a></li>
									<li><a href="overtime">Overtime</a></li> -->
								</ul>
							</li>
							<li> 
								<a href="clients"><i class="la la-users"></i> <span>Clients</span></a>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="projects">Projects</a></li>
                                    
									<li><a href="tasks">Tasks</a></li>
									<!--
									 <li><a href="task-board">Task Board</a></li> 
									-->
								</ul>
							</li>
						
							<!-- <li> 
								<a href="leads"><i class="la la-user-secret"></i> <span>Leads</span></a>
							</li>
							<li> 
								<a href="tickets"><i class="la la-ticket"></i> <span>Tickets</span></a>
							</li> -->
							<?php 

				if ($e_departments != 'finance') {
								# code...
								$finanelicense = '';
							} else {

								$finanelicense = '<li class="menu-title"> 
								<span>HR</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-bank"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
						<!--			<li><a href="estimates">Estimates</a></li> -->
									<li><a href="invoices">Invoices</a></li>
									<li><a href="payments">Payments</a></li>
									<li><a href="expenses">Expenses</a></li>

							<!--		<li><a href="provident-fund">Provident Fund</a></li>
									<li><a href="taxes">Taxes</a></li> -->
								</ul>
							</li>
					<!--		<li class="submenu">
								<a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="salary"> Employee Salary </a></li>
									<li><a href="salary-view"> Payslip </a></li>
									<li><a href="payroll-items"> Payroll Items </a></li>
								</ul>
							</li>
							<li> 
								<a href="policies"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
							</li>
							-->
							<li class="submenu">
								<a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="expensereport">Expenses Rport</a></li>
									<li><a href="dailyreports">Daily Expenses</a></li>
									<li><a href="monthlyreports">Monthly Expenses</a></li>
									<li><a href="yearlyreports">Yearly Expenses</a></li>
									<li><a href="allreports">All Time Expenses</a></li>
								</ul>
							</li> ';
							}
							?>

							<?php echo $finanelicense; ?>
							 

	<!--
							<li class="menu-title"> 
								<span>Performance</span>
							</li>
						 <li class="submenu">
								<a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="performance-indicator"> Performance Indicator </a></li>
									<li><a href="performance"> Performance Review </a></li>
									<li><a href="performance-appraisal"> Performance Appraisal </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="goal-tracking"> Goal List </a></li>
									<li><a href="goal-type"> Goal Type </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="training"> Training List </a></li>
									<li><a href="trainers"> Trainers</a></li>
									<li><a href="training-type"> Training Type </a></li>
								</ul>
							</li> -->
							<!-- <li><a href="promotion"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
							<li><a href="resignation"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
							<li><a href="termination"><i class="la la-times-circle"></i> <span>Termination</span></a></li> -->
							<li class="menu-title"> 
								<span>Administration</span>
							</li>
							<!-- <li> 
								<a href="assets"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="jobs"> Manage Jobs </a></li>
									<li><a href="job-applicants"> Applied Candidates </a></li>
								</ul>
							</li>
							<li> 
								<a href="knowledgebase"><i class="la la-question"></i> <span>Knowledgebase</span></a>
							</li>
							<li> 
								<a href="activities"><i class="la la-bell"></i> <span>Activities</span></a>
							</li>
							<li> 
								<a href="users"><i class="la la-user-plus"></i> <span>Users</span></a>
							</li> -->
							<li> 
								<a href="settings"><i class="la la-cog"></i> <span>Settings</span></a>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							<!-- <li class="submenu">
								<a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="profile"> Employee Profile </a></li>
									<li><a href="client-profile"> Client Profile </a></li>
								</ul>
							</li> -->
							<!-- <li class="submenu">
								<a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="login"> Login </a></li>
									<li><a href="register"> Register </a></li>
									<li><a href="forgot-password"> Forgot Password </a></li>
									<li><a href="otp"> OTP </a></li>
									<li><a href="lock-screen"> Lock Screen </a></li>
								</ul>
							</li> -->
							<!-- <li class="submenu">
								<a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="error-404">404 Error </a></li>
									<li><a href="error-500">500 Error </a></li>
								</ul>
							</li> -->
							<li class="submenu">
								<a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<!-- <li><a href="subscriptions"> Subscriptions (Admin) </a></li> 
									<li><a href="subscriptions-company"> Subscriptions (Company) </a></li>
									 <li><a href="subscribed-companies"> Subscribed Companies</a></li> -->
								</ul>
							</li>
							<!-- <li class="submenu">
								<a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="search"> Search </a></li>
									<li><a href="faq"> FAQ </a></li>
									<li><a href="terms"> Terms </a></li>
									<li><a href="privacy-policy"> Privacy Policy </a></li>
									<li><a href="blank-page"> Blank Page </a></li>
								</ul>
							</li> -->
							<!-- <li class="menu-title"> 
								<span>UI Interface</span>
							</li> -->
							<!-- <li> 
								<a href="components"><i class="la la-puzzle-piece"></i> <span>Components</span></a>
							</li> -->
							<!-- <li class="submenu">
								<a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="form-basic-inputs">Basic Inputs </a></li>
									<li><a href="form-input-groups">Input Groups </a></li>
									<li><a href="form-horizontal">Horizontal Form </a></li>
									<li><a href="form-vertical"> Vertical Form </a></li>
									<li><a href="form-mask"> Form Mask </a></li>
									<li><a href="form-validation"> Form Validation </a></li>
								</ul>
							</li> -->
							<!-- <li class="submenu">
								<a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="tables-basic">Basic Tables </a></li>
									<li><a href="data-tables">Data Table </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Extras</span>
							</li>
							<li> 
								<a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
							</li> -->
							<li> 
								<a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ml-auto">v1.0</span></a>
							</li>
						<!-- 	<li class="submenu">
								<a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li> -->
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
<?php include 'parsers/header.php'; ?>
			<!-- /Header -->
		<?php include'parsers/sidebar.php' ?>
		
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome Admin!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						 <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
									<div class="dash-widget-info">
										<h3><?php  echo $count_project; ?></h3>
										<span>Projects</span>
									</div>
								</div>
							</div>
						</div> 
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
									<div class="dash-widget-info">
										<h3><?php echo $count_client; ?></h3>
										<span>Clients</span>
									</div>
								</div>
							</div>
						</div>
						 <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
									<div class="dash-widget-info">
										<h3><?php echo $count_task; ?></h3>
										<span>Tasks</span>
									</div>
								</div>
							</div>
						</div> 
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-user"></i></span>
									<div class="dash-widget-info">
										<h3><?php echo $count_employee; ?></h3>
										<span>Employees</span>
									</div>
								</div>
							</div>
						</div>
					</div>
	<?php 
	$totalexpense = '';
    $gettheexpense = "SELECT sum(grand_total)  AS monexpense FROM expense WHERE company_id = '$log_username' AND user_id = '$log_id' AND status = 'Paid'";
	$querytheexpense = mysqli_query($db_conx, $gettheexpense);
	$counttheexpense = mysqli_num_rows($querytheexpense);
	$expense = mysqli_fetch_array($querytheexpense);
	$allexpense=$expense['monexpense'];

	if ($allexpense == '') {
		# code...
		$totalexpense = '0';
	} else {

		$totalexpense = number_format($allexpense);

	}
 $monthlyresult = '';
$monthdate=  date("Y-m-d", strtotime("-1 month")); 
$crrntdte=date("Y-m-d");
$query3=mysqli_query($db_conx,"select sum(grand_total) as monthlyexpense from expense where ((paymentdate) between '$monthdate' and '$crrntdte') && (user_id='$log_id') && (company_id = '$log_username') && (status = 'Paid');");
$result3=mysqli_fetch_array($query3);
$sum_monthly_expense=$result3['monthlyexpense'];

 if($sum_monthly_expense==""){
  $monthlyresult = "0";
} else {
 $monthlyresult = number_format($sum_monthly_expense);
}

$income = '';
$sql_count_invoice = "SELECT sum(grand_total) as income FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id'";
 $query_count_invoice = mysqli_query($db_conx, $sql_count_invoice);
 $count_invoice = mysqli_num_rows($query_count_invoice);
$result1=mysqli_fetch_array($query_count_invoice);
$income =$result1['income'];

 if($income==""){
  $income = "0";
} else {
 $income = number_format($income);
}

$lastincome = '';
$monthdates=  date("Y-m-d", strtotime("-1 month")); 
$crrntdtes=date("Y-m-d");
$query=mysqli_query($db_conx,"select sum(grand_total) as lastincome from invoice where ((invoice_date) between '$monthdates' and '$crrntdtes') && (user_id='$log_id') && (company_id = '$log_username');");
$result=mysqli_fetch_array($query);
$lastincome=$result['lastincome'];

 if($lastincome==""){
  $lastincome = "0";
} else {
 $lastincome = number_format($lastincome);
}

 $profit = '';
$sql_count_invoicep = "SELECT sum(grand_total) as profit FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id' AND status = 'Paid'";
 $query_count_invoicep = mysqli_query($db_conx, $sql_count_invoicep);
 $count_invoicep = mysqli_num_rows($query_count_invoicep);
$resultp=mysqli_fetch_array($query_count_invoicep);
$profit =$resultp['profit'];

 if($profit==""){
  $profit = "0";
} else {
 $profit = number_format($profit);
}

$lastprofit = '';
$monthdatese=  date("Y-m-d", strtotime("-1 month")); 
$crrntdtese=date("Y-m-d");
$querye=mysqli_query($db_conx,"select sum(grand_total) as lastprofit from invoice where ((invoice_date) between '$monthdatese' and '$crrntdtese') && (user_id='$log_id') && (company_id = '$log_username') && (status = 'Paid');");
$resulte=mysqli_fetch_array($querye);
$lastprofit=$resulte['lastprofit'];

 if($lastprofit==""){
  $lastprofit = "0";
} else {
 $lastprofit = number_format($lastprofit);
}

$employee_id = '';
$monthdatesed=  date("Y-m-d", strtotime("-1 month")); 
$crrntdtesed=date("Y-m-d");
$queryed=mysqli_query($db_conx,"select count(employee_id) as employee_id from employees where ((join_date) between '$monthdatese' and '$crrntdtese') && (user_id='$log_id') && (company_id = '$log_username');");
$resulted=mysqli_fetch_array($queryed);
$employee_id=$resulted['employee_id'];

 if($employee_id==""){
  $employee_id = "0";
} else {
 $employee_id = number_format($employee_id);
}
	?>				
					 
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Monthly Income</h3>
											<div id="bar-charts"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Yearly Income</h3>
											<div id="line-charts"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 

					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Monthly Expense</h3>
											<div id="bare-charts"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Yealy Expense</h3>
											<div id="linee-charts"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 
					
				 	<div class="row">
						<div class="col-md-12">
							<div class="card-group m-b-30">
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">New Employees</span>
											</div>
											<div>
												<span class="text-success"><!--+10% --></span>
											</div>
										</div>
										<h3 class="mb-3"><?php echo $employee_id; ?></h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Overall Employees <?php echo $count_employee; ?></p>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Earnings</span>
											</div>
											<div>
												<span class="text-success"><!--+12.5%--></span>
											</div>
										</div>
										<h3 class="mb-3">$<?php echo $income; ?></h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$<?php echo $lastincome; ?></span></p>
									</div>
								</div> 
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Expenses</span>
											</div>
											<div>
												<span class="text-danger"><!-- -2.8% --></span>
											</div>
										</div>
										<h3 class="mb-3">$<?php echo $totalexpense; ?></h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$<?php echo $monthlyresult; ?></span></p>
									</div>
								</div>
							
								<div class="card">
									<div class="card-body">
										<div class="d-flex justify-content-between mb-3">
											<div>
												<span class="d-block">Profit</span>
											</div>
											<div>
												<span class="text-danger"><!---75%--></span>
											</div>
										</div>
										<h3 class="mb-3">$<?php echo $profit; ?></h3>
										<div class="progress mb-2" style="height: 5px;">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="mb-0">Previous Month <span class="text-muted">$<?php echo $lastprofit; ?></span></p>
									</div>
								</div>
							</div>
						</div>	
					</div> 
					
					<!-- Statistics Widget -->
	<?php 
 $value = '0';
 $count_invoice_paid = '0';
 $count_invoice = '0';
$sql_count_invoice = "SELECT * FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id'";
 $query_count_invoice = mysqli_query($db_conx, $sql_count_invoice);
 $count_invoice = mysqli_num_rows($query_count_invoice);
// printf("Result set has %d rows.\n",$rowcount)
 $sql_count_invoice_paid = "SELECT * FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id' AND status = 'Paid'";
 $query_count_invoice_paid = mysqli_query($db_conx, $sql_count_invoice_paid);

 $count_invoice_paid = mysqli_num_rows($query_count_invoice_paid);

if ($count_invoice_paid == 0 ||  $count_invoice == 0) {
	# code...
	echo "";
} else {
 $value = ($count_invoice_paid / $count_invoice )* 100;
	if ($value > 50) {
 	# code...
 	$partialstat = 'success';
 }
 elseif ($value == 50) {
 	# code...
 	$partialstat = 'info';
 }
 else{
 	$partialstat = 'danger';
 }
}

 


 $partialvalue = '';
 $count_invoice = '';
 $count_invoice_ppaid = '';
 $sql_count_invoice_ppaid = "SELECT * FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id' AND status = 'Partially Paid'";
 $query_count_invoice_ppaid = mysqli_query($db_conx, $sql_count_invoice_ppaid);
 $count_invoice_ppaid = mysqli_num_rows($query_count_invoice_ppaid);
 if ($count_invoice == 0 || $count_invoice_ppaid == 0) {
 	# code...
 	echo "";
 } else{

 	$partialvalue = $count_invoice_ppaid / $count_invoice * 100;
 if ($partialvalue > 50) {
 	# code...
 	$paidstat = 'success';
 }
 elseif ($partialvalue == 50) {
 	# code...
 	$paidstat = 'info';
 }
 else{
 	$paidstat = 'danger';
 }
 }

$pendingvalue = '';
$count_invoice_pepaid = '';
$count_invoice = '';
$sql_count_invoice_pepaid = "SELECT * FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id' AND status = 'Pending'";
$query_count_invoice_pepaid = mysqli_query($db_conx, $sql_count_invoice_pepaid);

$count_invoice_pepaid = mysqli_num_rows($query_count_invoice_pepaid);
if ($count_invoice_pepaid == 0 || $count_invoice == 0) {
	# code...
	echo "";
} else{
	$pendingvalue = $count_invoice_pepaid / $count_invoice * 100;
 if ($pendingvalue > 50) {
 	# code...
 	$pendingstat = 'success';
 }
 elseif ($pendingvalue == 50) {
 	# code...
 	$pendingstat = 'info';
 }
 elseif ($pendingvalue < 50) {
 	# code...
 }else{
 	$pendingstat = 'danger';
 }
}

$projectvalue = '';
$count_d_projectsc = '';
$count_d_projects = '';
$sql_p = "SELECT * FROM project WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query_p = mysqli_query($db_conx, $sql_p);
$count_d_projects = mysqli_num_rows($query_p);

$sql_pc = "SELECT * FROM project WHERE company_id = '$log_username' AND user_id = '$log_id' AND Status = 'Completed'";
$query_pc = mysqli_query($db_conx, $sql_pc);
$count_d_projectsc = mysqli_num_rows($query_pc);
if ($count_d_projects == 0 || $projectvalue == 0) {
	# code...
	echo "";
} else{
	$projectvalue = $count_d_projectsc / $count_d_projects * 100;
 if ($projectvalue > 50) {
 	# code...
 	$projectstat = 'success';
 }
 elseif ($projectvalue == 50) {
 	# code...
 	$projectstat = 'info';
 }
else{
 	$projectstat = 'danger';
 }
}
	?>					
				 	<div class="row">
						<div class="col-md-12 col-lg-12 col-xl-6 d-flex">
							<div class="card flex-fill dash-statistics">
								<div class="card-body">
									<h5 class="card-title">Statistics</h5>
									<div class="stats-list">
										<div class="stats-info">
											<p>Completed Projects <strong><?php echo $count_d_projectsc; ?> <small>/ <?php echo $count_d_projects; ?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-<?php echo $projectstat; ?>" role="progressbar" style="width: <?php echo $projectvalue; ?>%" aria-valuenow="<?php echo $projectvalue; ?>" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>


										<div class="stats-info">
											<p>Pending Invoice <strong><?php echo  $count_invoice_pepaid; ?> <small>/ <?php echo $count_invoice; ?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-<?php echo $pendingstat; ?>" role="progressbar" style="width: <?php echo $pendingvalue; ?>%" aria-valuenow="<?php echo $pendingvalue; ?>" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										
										<?php// echo  $value ;?>
										<div class="stats-info">
											<p>Paid Invoice <strong><?php echo $count_invoice_paid; ?> <small>/ <?php echo $count_invoice; ?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-<?php echo $paidstat; ?>" role="progressbar" style="width: <?php echo $value ;?>%" aria-valuenow="<?php echo  $value ;?>" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
										 <div class="stats-info">
											<p>Paitially Paid Invoice <strong><?php echo $count_invoice_ppaid; ?> <small>/ <?php echo $count_invoice; ?></small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-<?php echo $partialstat; ?>" role="progressbar" style="width: <?php echo $partialvalue; ?>%" aria-valuenow="<?php echo $partialvalue; ?>" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div> 
										<!-- <div class="stats-info">
											<p>Goals <strong>4 <small>/ 65</small></strong></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>
	<?php 
	$taskpending = '';
	$countthetask = '';
    $getthetaskinfo = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id = '$log_id'";
	$querythetask = mysqli_query($db_conx, $getthetaskinfo);
	$countthetask = mysqli_num_rows($querythetask);

$taskpending = '';
	$getthetaskinfoPending = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id AND status = 'Pending'";
	$querythetaskPending = mysqli_query($db_conx, $getthetaskinfoPending);
	$countthetaskPendingPending = mysqli_num_rows($querythetaskPending);
	  if ($countthetask == 0 || $countthetaskPendingPending == 0) {
	  	# code...
	  	echo "";
	  }else {
	  	 $taskpending = $countthetaskPendingPending / $countthetask * 100;
	  }
//  if ($taskcomplete > 50) {
//  	# code...
//  	$taskcompletestat = 'success';
//  }
//  elseif ($taskcomplete == 50) {
//  	# code...
//  	$taskcompletestat = 'info';
//  }
// else{
//  	$taskcompletestat = 'danger';
//  }


$countthetaskCompleted = '';
$taskcomplete = '';
	$getthetaskinfoCompleted = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id AND status = 'Completed'";
	$querythetaskCompleted = mysqli_query($db_conx, $getthetaskinfoCompleted);
	$countthetaskCompleted = mysqli_num_rows($querythetaskCompleted);
    if ($countthetaskCompleted == 0 || $countthetask == 0) {
    	# code...
    	echo "";
    } else{

    	$taskcomplete = $countthetaskCompleted / $countthetask * 100;
    }
$countthetaskhold = '';
$taskhold = '';
    $getthetaskinfohold = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id AND status = 'On Hold'";
	$querythetaskhold = mysqli_query($db_conx, $getthetaskinfohold);
	$countthetaskhold = mysqli_num_rows($querythetaskhold);
   if ($countthetaskhold == 0 || $countthetask == 0) {
   	# code...
   	echo "";
   } else{
   	 $taskhold = $countthetaskhold / $countthetask * 100;
   }


$countthetaskReview = '';
$taskprogress = '';
$countthetask = '';
    $getthetaskinfoprogress = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id AND status = 'In Progress'";
	$querythetaskprogress = mysqli_query($db_conx, $getthetaskinfoprogress);
	$countthetaskprogress = mysqli_num_rows($querythetaskprogress);
    if ($countthetaskprogress == 0 || $countthetask == 0) {
    	# code...
    	echo "";
    } else{
	$taskprogress = $countthetaskprogress / $countthetask * 100;
    }
$taskReview = '';
     $getthetaskinfoReview = "SELECT * FROM task WHERE company_id = '$log_username' AND user_id AND status = 'Review Task'";
	$querythetaskReview = mysqli_query($db_conx, $getthetaskinfoReview);
	$countthetaskReview = mysqli_num_rows($querythetaskReview);
   if ($countthetaskReview == 0 || $countthetask == 0) {
   	# code...
   	echo "";
   } else{
   	 $taskReview = $countthetaskReview / $countthetask * 100;
   }

	?>
						<div class="col-md-12 col-lg-12 col-xl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									<h4 class="card-title">Task Statistics</h4>
									<div class="statistics">
										<div class="row">
											<div class="col-md-12 col-12 text-center">
												<div class="stats-box mb-4">
													<p>Total Tasks</p>
													<h3><?php echo $countthetask; ?></h3>
												</div>
											</div>
											<!-- <div class="col-md-6 col-6 text-center">
												<div class="stats-box mb-4">
													<p>Overdue Tasks</p>
													<h3>19</h3>
												</div>
											</div> -->
										</div>
									</div>
									<div class="progress mb-4">
										<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $taskcomplete;?>%" aria-valuenow="<?php echo $taskcomplete;?>" aria-valuemin="0" aria-valuemax="100"><?php echo $taskcomplete;?>%</div>

										<div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $taskprogress; ?>%" aria-valuenow="<?php echo $taskprogress; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $taskprogress; ?>%</div>

										<div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $taskhold; ?>%" aria-valuenow="<?php echo $taskhold; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $taskhold; ?>%</div>

										<div class="progress-bar bg-purple" role="progressbar" style="width: <?php echo  $taskpending; ?>%" aria-valuenow="<?php echo  $taskpending; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo  $taskpending; ?>%</div>

										<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo  $taskReview; ?>%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"><?php echo  $taskReview; ?>%</div>
									</div>
									<div>
										<p><i class="fa fa-dot-circle-o text-success mr-2"></i>Completed Tasks <span class="float-right"><?php echo $countthetaskCompleted; ?></span></p>

										<p><i class="fa fa-dot-circle-o text-warning mr-2"></i>Inprogress Tasks <span class="float-right"><?php echo $taskprogress; ?></span></p>

										<p><i class="fa fa-dot-circle-o text-danger mr-2"></i>On Hold Tasks <span class="float-right"><?php echo $countthetaskhold; ?></span></p>

										<p><i class="fa fa-dot-circle-o text-purple mr-2"></i>Pending Tasks <span class="float-right"><?php echo $countthetaskPendingPending; ?></span></p>

										<p class="mb-0"><i class="fa fa-dot-circle-o text-info mr-2"></i>Review Tasks <span class="float-right"><?php echo  $taskReview; ?></span></p>
									</div>
								</div>
							</div>
						</div> 
						
					<!--	<div class="col-md-12 col-lg-6 col-xl-4 d-flex">
							<div class="card flex-fill">
								<div class="card-body">
									<h4 class="card-title">Today Absent <span class="badge bg-inverse-danger ml-2">5</span></h4>
									<div class="leave-info-box">
										<div class="media align-items-center">
											<a href="profile" class="avatar"><img alt="" src="assets/img/user.jpg"></a>
											<div class="media-body">
												<div class="text-sm my-0">Martin Lewis</div>
											</div>
										</div>
										<div class="row align-items-center mt-3">
											<div class="col-6">
												<h6 class="mb-0">4 Sep 2019</h6>
												<span class="text-sm text-muted">Leave Date</span>
											</div>
											<div class="col-6 text-right">
												<span class="badge bg-inverse-danger">Pending</span>
											</div>
										</div>
									</div>
									<div class="leave-info-box">
										<div class="media align-items-center">
											<a href="profile" class="avatar"><img alt="" src="assets/img/user.jpg"></a>
											<div class="media-body">
												<div class="text-sm my-0">Martin Lewis</div>
											</div>
										</div>
										<div class="row align-items-center mt-3">
											<div class="col-6">
												<h6 class="mb-0">4 Sep 2019</h6>
												<span class="text-sm text-muted">Leave Date</span>
											</div>
											<div class="col-6 text-right">
												<span class="badge bg-inverse-success">Approved</span>
											</div>
										</div>
									</div>
									<div class="load-more text-center">
										<a class="text-dark" href="javascript:void(0);">Load More</a>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- /Statistics Widget -->
					
					 <div class="row">
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Invoices</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-nowrap custom-table mb-0">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Client</th>
													<th>Due Date</th>
													<th>Total</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
													<?php 

$sql_count_invoice = "SELECT * FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id'";
 $query_count_invoice = mysqli_query($db_conx, $sql_count_invoice);

 $count_invoice = mysqli_num_rows($query_count_invoice);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_invoice = mysqli_fetch_array($query_count_invoice)) {
 	
$invoice_id = $row_count_invoice['invoice_id'];
$client_id = $row_count_invoice['client_id'];
$project_id = $row_count_invoice['project_id'];
$address = $row_count_invoice['address'];
$acct_name = $row_count_invoice['acct_name'];
$invoice_date = $row_count_invoice['invoice_date'];
$due_date = $row_count_invoice['due_date'];
$invoicenumber = $row_count_invoice['invoicenumber'];
$user_id = $row_count_invoice['user_id'];
$order_total_before_tax = $row_count_invoice['order_total_before_tax'];
$discount = $row_count_invoice['discount'];
$grand_total = $row_count_invoice['grand_total'];
$order_amount_paid = $row_count_invoice['order_amount_paid'];
$order_total_amount_due = $row_count_invoice['order_total_amount_due'];
$note = $row_count_invoice['note'];
$tax = $row_count_invoice['tax'];
$order_tax_per = $row_count_invoice['order_tax_per'];
$bank_name = $row_count_invoice['bank_name'];
$acct_number = $row_count_invoice['acct_number'];
$phone = $row_count_invoice['phone'];
$bank_country = $row_count_invoice['bank_country'];
$invoicestatus = $row_count_invoice['status'];
$company_id = $row_count_invoice['company_id'];

//$invoicestatus = '';

if ($invoicestatus == 'Paid') {
	# code...
	$thestatus = '<td><span class="badge bg-inverse-success">'.$invoicestatus.'</span></td>';
} elseif ($invoicestatus == 'Pending') {
	# code...
	$thestatus = '<td><span class="badge bg-inverse-info">'.$invoicestatus.'</span></td>';
} else{
	$thestatus = '<td><span class="badge bg-inverse-warning">'.$invoicestatus.'</span></td>';
}

$sql_count_client = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$log_id' AND client_id = '$client_id'";
$query_count_client = mysqli_query($db_conx, $sql_count_client);

 $count_client = mysqli_num_rows($query_count_client);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_client = mysqli_fetch_array($query_count_client)) {
 	
 	$client_id = $row_count_client['client_id'];
	$e_firstname = $row_count_client['c_firstname'];
	$e_lastname = $row_count_client['c_lastname'];

}

// $sql_order_item = "SELECT * FROM invoice_order_item WHERE company_id = '$log_username' AND user_id = '$log_id'";
// $query_order_item = mysqli_query($db_conx, $sql_order_item);
// $count_order_item = mysqli_num_rows($query_order_item);
 






  echo ' <tr><td><a href="invoice-view?invoicenumber='.$invoicenumber.'&user_id='.$log_id.'">'.$invoicenumber.'</a></td>
											<td>'.$e_firstname.' '.$e_lastname.'</td>
											<td>'.$invoice_date.'<!-- 11 Mar 2019--></td>
											<td>'.$due_date.'<!-- 17 Mar 2019--></td>
											<td>$'.$order_total_amount_due.'</td>
											'.$thestatus.'
											</tr>';

}
	?>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="invoices">View all invoices</a>
								</div>
							</div>
						</div>
					<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Payments</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">	
										<table class="table custom-table table-nowrap mb-0">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Client</th>
													<th>Payment Type</th>
													<th>Paid Date</th>
													<th>Paid Amount</th>
												</tr>
											</thead>
											<tbody>
													<?php 

$sql_count_invoice = "SELECT * FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id' AND status = 'Paid'";
 $query_count_invoice = mysqli_query($db_conx, $sql_count_invoice);

 $count_invoice = mysqli_num_rows($query_count_invoice);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_invoice = mysqli_fetch_array($query_count_invoice)) {
 	
$invoice_id = $row_count_invoice['invoice_id'];
$client_id = $row_count_invoice['client_id'];
$project_id = $row_count_invoice['project_id'];
$address = $row_count_invoice['address'];
$acct_name = $row_count_invoice['acct_name'];
$invoice_date = $row_count_invoice['invoice_date'];
$due_date = $row_count_invoice['due_date'];
$invoicenumber = $row_count_invoice['invoicenumber'];
$user_id = $row_count_invoice['user_id'];
$order_total_before_tax = $row_count_invoice['order_total_before_tax'];
$discount = $row_count_invoice['discount'];
$grand_total = $row_count_invoice['grand_total'];
$order_amount_paid = $row_count_invoice['order_amount_paid'];
$order_total_amount_due = $row_count_invoice['order_total_amount_due'];
$note = $row_count_invoice['note'];
$tax = $row_count_invoice['tax'];
$order_tax_per = $row_count_invoice['order_tax_per'];
$bank_name = $row_count_invoice['bank_name'];
$acct_number = $row_count_invoice['acct_number'];
$phone = $row_count_invoice['phone'];
$bank_country = $row_count_invoice['bank_country'];
$invoicestatus = $row_count_invoice['status'];
$company_id = $row_count_invoice['company_id'];
$paymentmethod = $row_count_invoice['paymentmethod'];
$paymentdate = $row_count_invoice['paymentdate'];

//$invoicestatus = '';

if ($invoicestatus == 'Paid') {
	# code...
	$thestatus = '<td><span class="badge bg-inverse-success">'.$invoicestatus.'</span></td>';
} elseif ($invoicestatus == 'Pending') {
	# code...
	$thestatus = '<td><span class="badge bg-inverse-info">'.$invoicestatus.'</span></td>';
} else{
	$thestatus = '<td><span class="badge bg-inverse-warning">'.$invoicestatus.'</span></td>';
}

$sql_count_client = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$log_id' AND client_id = '$client_id'";
$query_count_client = mysqli_query($db_conx, $sql_count_client);

 $count_client = mysqli_num_rows($query_count_client);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_client = mysqli_fetch_array($query_count_client)) {
 	
 	$client_id = $row_count_client['client_id'];
	$e_firstname = $row_count_client['c_firstname'];
	$e_lastname = $row_count_client['c_lastname'];
	$ec_companyname = $row_count_client['c_companyname'];

}

// $sql_order_item = "SELECT * FROM invoice_order_item WHERE company_id = '$log_username' AND user_id = '$log_id'";
// $query_order_item = mysqli_query($db_conx, $sql_order_item);
// $count_order_item = mysqli_num_rows($query_order_item);
 






  echo ' <tr>
											<td><a href="invoice-view?invoicenumber='.$invoicenumber.'&user_id='.$log_id.'">'.$invoicenumber.'</a></td>
											<td>
												<h2><a href="#">'.$e_firstname.' '.$e_lastname.'</a><br/><span style="color:blue;">'.$ec_companyname.'</span></h2>
											</td>
											<td>'.$paymentmethod.'</td>
											<td>'.$paymentdate.'</td>
											<td>$'.number_format($grand_total).'</td>
										</tr>';

}
	?>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="payments">View all payments</a>
								</div>
							</div>
						</div>
					</div> 
					
					<div class="row">
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Clients</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table custom-table mb-0">
											<thead>
												<tr>
													<th>Name</th>
													<th>Email</th>
												<!--	<th>Status</th> -->
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php echo $getclient2; ?>
												
											
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="clients">View all clients</a>
								</div>
							</div>
						</div>

						<!-- ///////////////////////// -->
						<div class="col-md-6 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Recent Projects</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table custom-table mb-0">
											<thead>
												<tr>
													<th>Project Name </th>
													<th>Progress</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php 

												$sql_p = "SELECT * FROM project WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query_p = mysqli_query($db_conx, $sql_p);
$count_d_projects = mysqli_num_rows($query_p);
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
	$projectpercentage = $row_p['project_percentage'];
	$projectleader = $row_p['leader_id'];
	$projectclient = $row_p['client_id'];

     $gettheemployeedetailsss = "SELECT * FROM employees WHERE employee_id = '$projectleader'";
     $querytheemployees = mysqli_query($db_conx, $gettheemployeedetailsss);
     while ($rowquerys = mysqli_fetch_array($querytheemployees)) {
     	# code...
    $pe_employeee_ids = $rowquerys['employee_id'];
	$inner_employee_firstnamess = $rowquerys['e_firstname'];
	$inner_employee_lastnamess = $rowquerys['e_lastname'];
	$ee_usernames = $rowquerys['e_username'];
	$ee_emails = $rowquerys['e_email'];

	$getthetaskinfoe = "SELECT * FROM task WHERE project_id = '$project_id' AND status = 'Completed'";
	$querythetaske = mysqli_query($db_conx, $getthetaskinfoe);
	$countthetask1 = mysqli_num_rows($querythetaske);
	$getthetaskinfos = "SELECT * FROM task WHERE project_id = '$project_id' AND status = 'Pending'";
	$querythetasks = mysqli_query($db_conx, $getthetaskinfos);
	$countthetask2 = mysqli_num_rows($querythetasks);

	$getthetaskinfo = "SELECT * FROM task WHERE project_id = '$project_id' AND status = 'Completed'";
	$querythetask = mysqli_query($db_conx, $getthetaskinfo);

                     echo '<tr>
													<td>
														<h2><a href="project-view?projectsID='.$project_id.'&userID='.$user_id.'&company_id='.$company_id.'">'.$project_title.'</a></h2>
														<small class="block text-ellipsis">
															<span>'.$countthetask2.'</span> <span class="text-muted">open tasks, </span>
															<span>'.$countthetask1.'</span> <span class="text-muted">tasks completed</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped" style="color:green">
															<div class="progress-bar" role="progressbar" data-toggle="tooltip" title="'.$projectpercentage.'%" style="width: '.$projectpercentage.'%; color:green"></div>
														</div>
													</td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
															<div class="dropdown-menu dropdown-menu-right">
															<!--	<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-pencil m-r-5"></i> Edit</a>-->
																<a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
															</div>
														</div>
													</td>
												</tr>';
										}	}	?>
												
												
												
												
											
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="projects">View all projects</a>
								</div>
							</div>
						</div> 
					</div>
				
				</div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		<?php
// bar chart
//index.php


//$query = "SELECT * FROM invoice";
$query = "SELECT month, sum(order_total_amount_due) as profit, sum(grand_total) as purchase FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id' GROUP BY month ORDER BY invoice_id";
$result = mysqli_query($db_conx, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{   
	$profit = $row['profit'];
	$purchase = $row['purchase'];
	//$month = $row['month'];

//	$year = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

 $chart_data .= "{ year:'".$row['month']."', profit:".$profit.", purchase:".$purchase."}, ";
}
$chart_data = substr($chart_data, 0, -2);

?>

<?php

// bare chart
//index.php


//$query = "SELECT * FROM invoice";
$query2 = "SELECT month, sum(grand_total) as purchase FROM expense WHERE status = 'Paid' AND company_id = '$log_username' AND user_id = '$log_id' GROUP BY month ORDER BY expense_id";
$result2 = mysqli_query($db_conx, $query2);
$chart_data2 = '';
while($row2 = mysqli_fetch_array($result2))
{   
	//$profit2 = $row2['profit'];
	$purchase2 = $row2['purchase'];
	//$month = $row['month'];

//	$year = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

 $chart_data2 .= "{ year:'".$row2['month']."', purchase:".$purchase2."}, ";
}
$chart_data2= substr($chart_data2, 0, -2);

?>

<?php
// linee chart
//index.php


//$query = "SELECT * FROM invoice";
$querylinee = "SELECT paymentdate, sum(grand_total) as purchase FROM expense WHERE status = 'Paid' AND company_id = '$log_username' AND user_id = '$log_id' GROUP BY month ORDER BY expense_id";
$result2linee = mysqli_query($db_conx, $querylinee);
$chart_datalinee = '';
while($rowlinee = mysqli_fetch_array($result2linee))
{   
	$datelinee = $rowlinee['paymentdate'];
	$yearlinee = intval($datelinee);
//	$profitlinee = $rowlinee['profit'];
	$purchaselinee = $rowlinee['purchase'];
	//$month = $row['month'];

//	$year = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

 $chart_datalinee .= "{ year:'".$yearlinee."', purchase:".$purchaselinee."}, ";
}
$chart_datalinee= substr($chart_datalinee, 0, -2);

?>

<?php
// line chart
//index.php


$query1 = "SELECT * FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id'";
$result1 = mysqli_query($db_conx, $query1);
$chart_data1 = '';
while($row1 = mysqli_fetch_array($result1))
{   
	$date = $row1['invoice_date'];
	$year1 = intval($date);

//	$year = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

 $chart_data1 .= "{ year:'".$year1."', profit:".$row1["order_total_amount_due"].", purchase:".$row1["grand_total"]."}, ";
}
$chart_data1 = substr($chart_data1, 0, -2);

?>
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael.min.js"></script>
	<!-- 	<script src="assets/js/chart.js"></script> -->




	<script type="text/javascript">
			$(document).ready(function() {

	// Bar Chart
	
	Morris.Bar({
		element: 'bar-charts',
		 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['purchase', 'profit'],
 labels:['Total Invoice', 'Unpaid', 'yets'],
		lineColors: ['#00c5fb','#0253cc'],
		lineWidth: '3px',
		barColors: ['#00c5fb','#0253cc'],
		resize: true,
		redraw: true
	});
	
	// Line Chart
	
	Morris.Line({
		element: 'line-charts',
		data: [
		<?php echo $chart_data1; ?>
		],
		xkey: 'year',
		 ykeys:['purchase', 'profit'],
		labels: ['Total Invoice', 'Unpaid'],
		lineColors: ['#00c5fb','#0253cc'],
		lineWidth: '3px',
		resize: true,
		redraw: true
	});


	// expenses
	Morris.Bar({
		element: 'bare-charts',
		 data:[<?php echo $chart_data2; ?>],
 xkey:'year',
 ykeys:['purchase'],
 labels:['Total Expense'],
		lineColors: ['#0253cc','#0253cc'],
		lineWidth: '3px',
		barColors: ['#0253cc','red'],
		resize: true,
		redraw: true
	});


	// expense Line Chart
	
	Morris.Line({
		element: 'linee-charts',
		data: [
		<?php echo $chart_datalinee; ?>
		],
		xkey: 'year',
		 ykeys:['purchase'],
		labels: ['Total Expense'],
		lineColors: ['#0253cc','#0253cc'],
		lineWidth: '3px',
		resize: true,
		redraw: true
	});
		
});
		</script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
<?php include 'parsers/header.php'; ?>
			<!-- /Header -->
		<?php include'parsers/sidebar.php' ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Expense Records</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Expenses</li>
								</ul>
							</div>
						<!-- 	<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Add Client</a>
								<div class="view-icons">
									<a href="clients.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
									<a href="clients-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
								</div>
							</div> -->
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
		
					<!-- Search Filter -->
					
					<div class="row staff-grid-row">
						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="panel-body easypiechart-panel">
								<?php
//Today Expense

$tdate=date('Y-m-d');
$query=mysqli_query($db_conx,"select sum(grand_total)  as todaysexpense from expense where (paymentdate)='$tdate' && (user_id='$log_id');");
$result=mysqli_fetch_array($query);
$sum_today_expense=$result['todaysexpense'];
 ?> 

						<h4>Today's Expense</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $sum_today_expense;?>" ><span class="percent">$<?php if($sum_today_expense==""){
echo "0";
} else {
echo  number_format($sum_today_expense);
}

	?>
</span>
</div>
</div>
							</div>
						</div>


						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="panel-body easypiechart-panel">
													<?php
//Yestreday Expense
//$user_id=$_SESSION['detsuid'];
$ydate=date('Y-m-d',strtotime("-1 days"));
$query1=mysqli_query($db_conx,"select sum(grand_total)  as yesterdayexpense from expense where (paymentdate)='$ydate' && (user_id='$log_id');");
$result1=mysqli_fetch_array($query1);
$sum_yesterday_expense=$result1['yesterdayexpense'];
 ?> 

						<h4>Yesterday's Expense</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $sum_yesterday_expense;?>" ><span class="percent">$<?php if($sum_yesterday_expense==""){
echo "0";
} else {
echo number_format($sum_yesterday_expense);
}

	?>
</span>
</div>
</div>
							</div>
						</div>








						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="panel-body easypiechart-panel">
								<?php
//Weekly Expense
//$user_id=$_SESSION['detsuid'];
 $pastdate=  date("Y-m-d", strtotime("-1 week")); 
$crrntdte=date("Y-m-d");
$query2=mysqli_query($db_conx,"select sum(grand_total)  as weeklyexpense from expense where ((paymentdate) between '$pastdate' and '$crrntdte') && (user_id='$log_id');");
$result2=mysqli_fetch_array($query2);
$sum_weekly_expense=$result2['weeklyexpense'];
 ?>

						<h4>Last 7day's Expense</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $sum_weekly_expense;?>"><span class="percent">$<?php if($sum_weekly_expense==""){
echo "0";
} else {
echo number_format($sum_weekly_expense);
}

	?>
</span>
</div>
</div>
							</div>
						</div>







						<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
							<div class="profile-widget">
								<div class="panel-body easypiechart-panel">
							<?php
//Monthly Expense
//$user_id=$_SESSION['detsuid'];
 $monthdate=  date("Y-m-d", strtotime("-1 month")); 
$crrntdte=date("Y-m-d");
$query3=mysqli_query($db_conx,"select sum(grand_total)  as monthlyexpense from expense where ((paymentdate) between '$monthdate' and '$crrntdte') && (user_id='$log_id');");
$result3=mysqli_fetch_array($query3);
$sum_monthly_expense=$result3['monthlyexpense'];
 ?>
						<h4>Last 30day's Expenses</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $sum_monthly_expense;?>" ><span class="percent">$<?php if($sum_monthly_expense==""){
echo "0";
} else {
echo number_format($sum_monthly_expense);
}

	?>
</span>
</div>
</div>
							</div>
						</div>
					

					

					


					</div>
                </div>
				<!-- /Page Content -->
			
				<!-- Add Client Modal -->
				
				<!-- /Add Client Modal -->
				
				<!-- Edit Client Modal -->
				
				<!-- /Edit Client Modal -->
				
				<!-- Delete Client Modal -->
			
				<!-- /Delete Client Modal -->
				
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		<script src="chart/jquery-1.11.1.min.js"></script>
	<script src="chart/bootstrap.min.js"></script>
	<script src="chart/chart.min.js"></script>
	<script src="chart/chart-data.js"></script>
	<script src="chart/easypiechart.js"></script>
	<script src="chart/easypiechart-data.js"></script>
	<script src="chart/bootstrap-datepicker.js"></script>
	<script src="chart/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		<!-- jQuery -->
       
		 <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Task JS -->
		<script src="assets/js/task.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
    </body>
</html>
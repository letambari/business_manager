<?php include 'parsers/header.php'; ?>
			<!-- /Header -->
			
		<?php include 'parsers/sidebar.php'; ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Daily Expense</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Search For Expense Record</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-xl-6 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<!-- <h4 class="card-title mb-0">Basic Form</h4> -->
								</div>
								<div class="card-body">
									<form role="form" method="post" action="dailyresults" name="bwdatesreport">
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">From Date</label>
											<div class="col-lg-9">
												<input type="date"  id="fromdate" name="fromdate" required="true" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">To Date</label>
											<div class="col-lg-9">
												<input type="date"  id="todate" name="todate" required="true" class="form-control">
											</div>
										</div>
										
										<div class="text-right">
											<button type="submit" class="btn btn-primary" name="submit">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					
					</div>
					
				
				</div>			
			</div>
			<!-- /Main Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/app.js"></script>
		
    </body>
</html>
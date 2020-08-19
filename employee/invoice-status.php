<?php include'parsers/header.php'; ?>
<?php include'parsers/sidebar.php'; ?>
			<!-- /Sidebar -->
		<?php

if (isset($_GET['invoicenumber']) && isset($_GET['user_id'])) {
 	# code...
 	$invoicenumber = $_GET['invoicenumber'];
 	$user_id = $_GET['user_id'];
 	$paymentmethod = '';
 	$paymentdate = '';

$sql_count_invoice = "SELECT * FROM invoice WHERE company_id = '$log_username' AND user_id = '$log_id' AND invoicenumber = '$invoicenumber'";
 $query_count_invoice = mysqli_query($db_conx, $sql_count_invoice);

 $count_invoice = mysqli_num_rows($query_count_invoice);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_invoice = mysqli_fetch_array($query_count_invoice)) {
 	
$invoice_id = $row_count_invoice['invoice_id'];
$client_id = $row_count_invoice['client_id'];
$iproject_id = $row_count_invoice['project_id'];
$c_address = $row_count_invoice['address'];
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
$taxtype = $row_count_invoice['taxtype'];
$paymentmethod = $row_count_invoice['paymentmethod'];
$paymentdate = $row_count_invoice['paymentdate'];


}
}

?>	
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Change Invoice Status</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="home">Dashboard</a></li>
									<li class="breadcrumb-item active">Invoice Status</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0">Invoice no. </h4>
								</div>
								<div class="card-body">
									<h4 class="card-title"></h4>
									<form id="upload_form" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Payment Method</label>
													<div class="col-lg-9">
														<input type="text" name="task_desc" id="task_desc" value="<?php echo $paymentmethod; ?>" class="form-control" placeholder="e.g cheque / bank transer / etc..">
													</div>
												</div>
											
										</div>
									
										
										<div class="text-left">
											<span class="btn btn-primary submit-btn" name="myBtn" type="submit" onclick="ajax_edittask();">Submit</span>
										</div>
										<div class="text-right" id="status"></div>

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
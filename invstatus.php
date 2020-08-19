	<?php include 'parsers/header.php'; ?>
			<!-- /Header -->
			
		<?php include 'parsers/sidebar.php'; ?>
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

	                              <form id="upload_form" enctype="multipart/form-data" method="post">
                                 	<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Payment Method</label>
													<div class="col-lg-9">
														<input type="text" name="paymentmethod" id="FirstName" value="<?php echo $paymentmethod; ?>" class="form-control" placeholder="e.g cheque / bank transer / etc..">
													</div>
												</div>
											
										</div>

										<div class="form-group row">
													<label class="col-lg-3 col-form-label">Date Of Completion</label>
													<div class="col-lg-9">
														<?php echo $paymentdate; ?>
														<input type="date" id="LastName" name="payment" class="form-control">
													</div>
												</div>

												<input type="hidden" name="invoicenumber" id="userID" value="<?php echo $invoicenumber; ?>">
																							</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Payment Status</label>
													<div class="col-lg-9">
														<select class="select" id="company_code">
															<option value="<?php echo $invoicestatus; ?>"><?php echo $invoicestatus; ?></option>
															<option value="Pending">Pending</option>
															<option value="Approved">Approved</option>
															<option value="Declined">Declined</option>
															<option value="Partially Paid">Partially Paid</option>
															<option value="Paid">Paid</option>
														</select>
													</div>
												</div>

												
												
											</div>
										</div>




                                   <div class="submit-section">
                                        <span name="myBtn" type="submit" onclick="ajax_postss();" class="btn btn-primary submit-btn">Save</span>
                                    </div>
                                     <div id="status"></div>

                    </form>


                       <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
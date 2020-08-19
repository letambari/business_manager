<?php include'parsers/header.php' ?>
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
								<h3 class="page-title">Invoices</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="home">Dashboard</a></li>
									<li class="breadcrumb-item active">Invoices</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="create-invoice" class="btn add-btn"><i class="fa fa-plus"></i> Create Invoice</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
				<!-- 	<div class="row filter-row">
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">From</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
								<label class="focus-label">To</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3"> 
							<div class="form-group form-focus select-focus">
								<select class="select floating"> 
									<option>Select Status</option>
									<option>Pending</option>
									<option>Paid</option>
									<option>Partially Paid</option>
								</select>
								<label class="focus-label">Status</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div> -->
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0">
									<thead>
										<tr>

											<th>Invoice Number</th>
											<th>Client</th>
											<th>Created Date</th>
											<th>Due Date</th>
											<th>Amount</th>
											<th>Status</th>
											<th class="text-right">Action</th>
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
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="edit-invoice?invoicenumber='.$invoicenumber.'&user_id='.$log_id.'"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="invstatus?invoicenumber='.$invoicenumber.'&user_id='.$log_id.'"><i class="fa fa-eye m-r-5"></i>Change Status</a>
													
														<a class="dropdown-item" href="delete-invoice?invoicenumber='.$invoicenumber.'&user_id='.$log_id.'"><i class="fa fa-trash-o m-r-5"></i>Delete</a>
													</div>
												</div>
											</td></tr>';

}
	?>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
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
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
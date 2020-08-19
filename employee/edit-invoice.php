<?php include 'parsers/header.php'; 

if (isset($_GET['invoicenumber']) && isset($_GET['user_id'])) {
 	# code...
 	$invoicenumber = $_GET['invoicenumber'];
 	$user_id = $_GET['user_id'];

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



}
$sql_count_client = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$log_id' AND client_id = '$client_id'";
$query_count_client = mysqli_query($db_conx, $sql_count_client);

 $count_client = mysqli_num_rows($query_count_client);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_client = mysqli_fetch_array($query_count_client)) {
 	
 	$c_client_id = $row_count_client['client_id'];
	$e_firstname = $row_count_client['c_firstname'];
	$e_lastname = $row_count_client['c_lastname'];
	$c_companyname = $row_count_client['c_companyname'];
	$c_state = $row_count_client['c_state'];
	$c_country = $row_count_client['c_country'];
	$c_email = $row_count_client['c_email'];
 }
$sql_p = "SELECT * FROM project WHERE company_id = '$log_username' AND user_id = '$log_id' AND project_id = '$iproject_id'";
$query_p = mysqli_query($db_conx, $sql_p);
while ($row_p = mysqli_fetch_array($query_p)) {
    # code...
    $project_iddddddddddddss = $row_p['project_id'];
    $project_titledss = $row_p['project_title'];
    $start_date = $row_p['start_date'];
 }
}
 ?>
            <!-- /Header -->
        <?php include'parsers/sidebar.php' ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Create Invoice</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Create Invoice</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							
							<form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate=""> 
		<div class="load-animate animated fadeInUp">
			
			<div class="row">
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Client <span class="text-danger">*</span></label>
											<select class="select" name="Client">
												<option value="<?php echo $c_client_id; ?>"><?php echo $e_firstname;?> <?php echo $e_lastname;?></option>
					<?php 

$sql_count_users = "SELECT * FROM users WHERE username = '$log_username' AND id = '$log_id'";
$query_count_user = mysqli_query($db_conx, $sql_count_users);

 $count_user = mysqli_num_rows($query_count_user);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_user = mysqli_fetch_array($query_count_user)) {
 	
 	$userid = $row_count_user['id'];
	$ContactPerson = $row_count_user['ContactPerson'];
	$lastname = $row_count_user['lastname'];
	$CompanyName = $row_count_user['CompanyName'];
	$user_id = $row_count_user['user_id'];
	

	echo '<option value="'.$userid.'">'.$ContactPerson.'</option>';


}

													?>
										<?php 

$sql_count_client = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$log_id'";
$query_count_client = mysqli_query($db_conx, $sql_count_client);

 $count_client = mysqli_num_rows($query_count_client);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_client = mysqli_fetch_array($query_count_client)) {
 	
 	$eclient_id = $row_count_client['client_id'];
	$ee_firstname = $row_count_client['c_firstname'];
	$ee_lastname = $row_count_client['c_lastname'];
	$ce_clientID = $row_count_client['c_clientID'];
	$ee_email = $row_count_client['c_email'];
	$join_date = $row_count_client['creation_date'];
	$phone = $row_count_client['c_phone'];
	$company = $row_count_client['c_companyname'];
	$user_id = $row_count_client['user_id'];
	$company_id = $row_count_client['company_id'];

	echo '<option value="'.$eclient_id.'">'.$ee_firstname.' '.$ee_lastname.'</option>';

}
	?>
											</select>
										</div>
									</div>


									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Project <span class="text-danger">*</span></label>
											<select class="select" name="project">
												<option value="<?php echo $project_iddddddddddddss; ?>"><?php echo $project_titledss; ?></option>
												<?php 

$sql_p = "SELECT * FROM project";
$query_p = mysqli_query($db_conx, $sql_p);
while ($row_p = mysqli_fetch_array($query_p)) {
    # code...
    $project_idddddddddddd = $row_p['project_id'];
    $project_titled = $row_p['project_title'];
    $start_date = $row_p['start_date'];
    $end_date = $row_p['end_date'];
    $rate = $row_p['rate'];
    $rate_time = $row_p['rate_time'];
    $priority = $row_p['priority'];
    $description = $row_p['description'];
    $user_id = $row_p['user_id'];
    $company_id = $row_p['company_id'];
    $status = $row_p['Status'];

    echo '<option value='.$project_idddddddddddd.'">'.$project_titled.'</option>
                           ';                                             


}

													?>		
											</select>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label> Your Account Name <span class="text-danger">*</span></label>
											<input class="form-control" name="acct_name" type="text" value="<?php echo $acct_name; ?>">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label> Your Bank Name <span class="text-danger">*</span></label>
											<input class="form-control" name="bankname" type="text" value="<?php echo $bank_name; ?>">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Your Account Number <span class="text-danger">*</span></label>
											<input class="form-control" name="acctnum" type="text" value="<?php echo $acct_number; ?>">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Client Phone Number</label>
											<input class="form-control" name="phone" type="text" value="<?php echo $phone; ?>">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Client Email</label>
											<input class="form-control" name="email" type="email" value="<?php echo $ee_email; ?>">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Tax</label>
											<select class="select" name="taxtype">
												<option><?php echo $taxtype; ?></option>
												<option>VAT</option>
												<option>GST</option>
												<option>No Tax</option>
											</select>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Client Address</label>
											<textarea class="form-control" rows="3" name="c_address" value="<?php echo $address; ?>"><?php echo $c_address; ?></textarea>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Your Address</label>
											<textarea class="form-control" rows="3" name="y_address" value="<?php echo $address; ?>"><?php echo $address; ?></textarea>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Invoice date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control" type="date" name="idate" value="<?php echo $invoice_date; ?>">
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Due Date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control" type="date" name="ddate" value="<?php echo $due_date; ?>">
											</div>
										</div>
									</div>
								</div>
		<div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="table-responsive">

											<table class="table table-hover table-white" id="invoiceItem">
												<thead>
												<tr>
														<th style="width: 20px"><input id="checkAll" class="formcontrol" type="checkbox"></th>
														<th class="col-sm-2">Item</th>
														<th class="col-md-6">Description</th>
														<th style="width:100px;">Unit Cost</th>
														<th style="width:80px;">Qty</th>
														<th>Amount</th>
														<th> Action</th>
													</tr>
												</thead>
                                          <tbody>
												<tr>
													<td><input class="itemRow" type="checkbox"></td>
													<td>
														<input class="form-control" type="text" name="productCode[]" id="productCode_1"  style="min-width:150px" autocomplete="off">
													</td>
													<td>
														<input class="form-control" name="productName[]" id="productName_1" type="text" style="min-width:150px" autocomplete="yes">
													</td>
													<td>
														<input class="form-control" type="number" name="quantity[]" id="quantity_1" style="width:80px" type="text" autocomplete="off">
													</td>
													
													<td>
														<input class="form-control" name="price[]" id="price_1" style="width:100px" type="text" autocomplete="off">
													</td>
													
													<td>
														<input class="form-control" name="total[]" id="total_1" readonly style="width:120px" type="text" autocomplete="off">
													</td>

													<td>
														<a id="addRows" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a>
					                                    <a id="removeRows" class="text-danger font-18" title="Remove"><i class="fa fa-trash-o"></i></a>
													</td>
													
												</tr>
												
												</tbody>

											</table>
										</div>
	


			<div class="table-responsive">
											<table class="table table-hover table-white">
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														
														<tr>
														<td colspan="5" class="text-right">Sub-total: $</td>
														<td style="text-align: right; padding-right: 30px;width: 230px">
															<input value="" type="number" class="form-control" name="subtotal" id="subTotal" placeholder="Subtotal">
														</td>
													</tr>
													</tr>

													<tr>
														<td colspan="5" class="text-right">Tax &nbsp;</td>
														<td style="text-align: right; padding-right: 30px;width: 230px">
															<input value="" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate">
														</td>
													</tr>

													<tr>
														<td colspan="5" class="text-right">Tax Amount: $</td>
														<td style="text-align: right; padding-right: 30px;width: 230px">
															<input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Rate">
														</td>
													</tr>

													<tr>
														<td colspan="5" class="text-right">
															Discount: $
														</td>
														<td style="text-align: right; padding-right: 30px;width: 230px">
															<input value="" type="number" class="form-control" name="discount" id="discount" placeholder="discount">
														</td>
													</tr>

													<tr>
														<td colspan="5" class="text-right">
															Grand Total: $
														</td>
														<td style="text-align: right; padding-right: 30px;width: 230px">
								<input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
							</td>
													</tr>



                                                     <tr>
														<td colspan="5" class="text-right">Amount Paid: $</td>
							<td style="text-align: right; padding-right: 30px;width: 230px">
								<input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
							</td>
													</tr>


													
													<tr>
														<td colspan="5" style="text-align: right; font-weight: bold">Amount Due: $</td>
							<td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
								<input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
							</td>
													</tr>

													</tbody>
											</table>                               
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Other Information</label>
													<textarea rows="5" name="note" id="notes" placeholder="Your Notes" class="form-control" value="<?php echo $note; ?>"><?php echo $note; ?></textarea>
												</div>
											</div>
										</div>

										<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Invoice Status<span class="text-danger">*</span></label>
											<select class="select" name="invoicestatus">
												<option>Select Status</option>
												<option value="Pending">Pending</option>
												<option value="Partially Paid">Partially Paid</option>
												<option value="Paid">Paid</option>
												<option value="Approved">Approved</option>
											</select>
										</div>
									</div>
									</div>
								</div>
                       <input type="hidden" value="<?php echo $invoicenumber; ?>" class="form-control" name="item">
                        <input type="hidden" value="<?php echo $_SESSION['userid']; ?>" class="form-control" name="userId">
								<div class="submit-section">
									<!-- <button class="btn btn-primary submit-btn m-r-10">Save & Send</button> -->
									<button class="btn btn-primary submit-btn" type="submit" name="invoice_btn" value="Save Invoice">Save</button>
								</div>
								 <div id="status"></div>
							</form>

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
		<script src="js/invoice.js"></script>
		
    </body>
</html>

<?php

if (isset($_POST['invoice_btn'])) {
	# code...
$client = $_POST["Client"];
    $project = $_POST["project"];
    $email = $_POST["email"];

    $taxtype = $_POST["taxtype"];
    $c_address = $_POST["c_address"];
    $y_address = $_POST["y_address"];
    $idate = $_POST["idate"];
    $ddate = $_POST["ddate"];
   // $productCode_1 = $_POST["productCode_1"];
    $taxAmount = $_POST["taxAmount"];
    $productName = $_POST["taxAmount"];
  //  $quantity = $_POST['quantity'];

    //$price = $_POST["price"];
    $subtotal = $_POST["subtotal"];
    $taxRate = $_POST['taxRate'];

    $discount = $_POST["discount"];
    $subTotal = $_POST["subTotal"];
    $totalAftertax = $_POST['totalAftertax'];

    $amountPaid = $_POST["amountPaid"];
    $amountDue = $_POST["amountDue"];
    $note = $_POST['note'];
    $invoicestatus = $_POST['invoicestatus'];
    $totalAftertax = $_POST['totalAftertax'];
    $item = $_POST['item'];
    $acct_name = $_POST['acct_name'];
    $bankname = $_POST['bankname'];
     $acctnum = $_POST['acctnum'];
      $phone = $_POST['phone'];

      $date = $idate;
$d = date_parse_from_format("Y-m-d", $date);
//echo $d["month"];
if ($d["month"] == 1) {
	# code...
	echo "Jan";
} elseif($d["month"] == 2){
    $month = "Feb";
}elseif($d["month"] == 3){
    $month = "Mar";
}elseif($d["month"] == 4){
    $month = "Apr";
}elseif($d["month"] == 5){
    $month = "May";
}elseif($d["month"] == 6){
    $month = "Jun";
}elseif($d["month"] == 7){
    $month = "Jul";
}elseif($d["month"] == 8){
    $month = "Aug";
}elseif($d["month"] == 9){
    $month = "Sep";
}elseif($d["month"] == 10){
    $month = "Oct";
}elseif($d["month"] == 11){
    $month = "Nov";
}else{
    $month = "Dec";
}


//$productCode = $_POST['productCode'];
//$lastInsertId = 1;
    


		$insert = "UPDATE invoice SET client_id = '$client', project_id = '$project', address = '$c_address', acct_name = '$acct_name ', invoice_date = '$idate', due_date = '$ddate', invoicenumber = '$item', user_id = '$log_id', order_total_before_tax = '$subtotal', discount = '$discount', grand_total = '$totalAftertax', order_amount_paid = '$amountPaid', order_total_amount_due = '$amountDue', note = '$note', taxtype = '$taxtype', tax = '$taxAmount', order_tax_per = '$taxRate', bank_name = '$bankname', acct_number = '$acctnum', phone = '$phone', status = '$invoicestatus', company_id = '$log_username' WHERE invoicenumber = '$invoicenumber' AND user_id = '$log_id', month = '$month'";		
		$dinsert = mysqli_query($db_conx, $insert);

		if ($dinsert == TRUE) {

			$delete = "DELETE FROM invoice_order_item WHERE invoicenumber = '$invoicenumber'";
			$ddelete = mysqli_query($db_conx, $delete);
			# code...

							for ($i = 0; $i < count($_POST['productCode']); $i++) {

		$put = "INSERT INTO invoice_order_item (invoicenumber, itemname, item_desc, order_item_price, order_item_quantity, order_item_final_amount) 

			VALUES ('".$item."', '".$_POST['productCode'][$i]."', '".$_POST['productName'][$i]."', '".$_POST['price'][$i]."', '".$_POST['quantity'][$i]."', '".$_POST['total'][$i]."')";			
			$dput = mysqli_query($db_conx, $put);


		if ($dput) {
			# code...
			echo "<script>alert('Invoice Created!')</script>";
              //  header("Location:main.php");
            echo "<script>window.open('invoice-view?invoicenumber=".$invoicenumber."&user_id=".$log_id."','_self')</script>";
		}
		}


		







		// for ($i = 0; $i < count($POST['productCode']); $i++) {
		// 	$sqlInsertItem = "
		// 	INSERT INTO ".$this->invoiceOrderItemTable."(order_id, item_code, item_name, order_item_quantity, order_item_price, order_item_final_amount) 
		// 	VALUES ('".$lastInsertId."', '".$POST['productCode'][$i]."', '".$POST['productName'][$i]."', '".$POST['quantity'][$i]."', '".$POST['price'][$i]."', '".$POST['total'][$i]."')";			
		// 	mysqli_query($this->dbConnect, $sqlInsertItem);
		// }       	
	// }
  


	}	


}


?>
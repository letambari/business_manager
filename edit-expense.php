<?php include 'parsers/header.php'; ?>
            <!-- /Header -->
        <?php include'parsers/sidebar.php' ?>
			<!-- /Sidebar -->
		<?php if (isset($_GET['expensenumber']) && isset($_GET['user_id'])) {
			# code...
           $expensenumber = $_GET['expensenumber'];
           $user_id = $_GET['user_id'];

$sql_count_invoice = "SELECT * FROM expense WHERE company_id = '$log_username' AND user_id = '$log_id' AND expensenumber = '$expensenumber'";
 $query_count_invoice = mysqli_query($db_conx, $sql_count_invoice);

 $count_invoice = mysqli_num_rows($query_count_invoice);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_invoice = mysqli_fetch_array($query_count_invoice)) {
 	
$expense_id = $row_count_invoice['expense_id'];
$reciever_name = $row_count_invoice['reciever_name'];
$reciever_address = $row_count_invoice['reciever_address'];
$reciever_acct_name = $row_count_invoice['reciever_acct_name'];
$send_date = $row_count_invoice['send_date'];
$due_date = $row_count_invoice['due_date'];
$expensenumber = $row_count_invoice['expensenumber'];
$user_id = $row_count_invoice['user_id'];
$order_total_before_tax = $row_count_invoice['order_total_before_tax'];
$discount = $row_count_invoice['discount'];
$grand_total = $row_count_invoice['grand_total'];
$order_amount_paid = $row_count_invoice['order_amount_paid'];
$order_total_amount_due = $row_count_invoice['order_total_amount_due'];
$note = $row_count_invoice['note'];
$taxtype = $row_count_invoice['taxtype'];
$tax = $row_count_invoice['tax'];
$taxRate = $row_count_invoice['taxRate'];
$reciever_bank_name = $row_count_invoice['reciever_bank_name'];
$acct_number = $row_count_invoice['acct_number'];
$reciever_phone = $row_count_invoice['reciever_phone'];
$reciever_email = $row_count_invoice['reciever_email'];
$status = $row_count_invoice['status'];
$company_id = $row_count_invoice['company_id'];
$paymentmethod = $row_count_invoice['paymentmethod'];
$paymentdate = $row_count_invoice['paymentdate'];
$purchase_by = $row_count_invoice['purchase_by'];

//$invoicestatus = '';

if ($status == 'Paid') {
	# code...
	$thestatus = '<i class="fa fa-dot-circle-o text-success"></i>'.$status.'';
} elseif ($status == 'Pending') {
	# code...
	$thestatus = '<i class="fa fa-dot-circle-o text-danger"></i>'.$status.'';
} else{
	$thestatus = '<i class="fa fa-dot-circle-o text-info"></i>'.$status.'';
}
}
}
		?>
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Edit Expense</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Edit Expense Record</li>
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
											<label>Pay To<span class="text-danger">*</span></label>
											<input class="form-control" value="<?php echo $reciever_name; ?>" name="Client" placeholder="person / company name" type="text">
										</div>
									</div>


									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Reciever's Account Name <span class="text-danger">*</span></label>
											<input class="form-control" value="<?php echo $reciever_acct_name; ?>" name="acct_name" type="text">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Reciever's Account Number <span class="text-danger">*</span></label>
										<input class="form-control" value="<?php echo $acct_number; ?>" name="acctnum" type="text">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Reciever's Bank Name <span class="text-danger">*</span></label>
											<input class="form-control" value="<?php echo $reciever_bank_name; ?>" name="bankname" type="text">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Reciever's Phone Number</label>
											<input class="form-control" value="<?php echo $reciever_phone; ?>" name="phone" type="text">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Reciever's Email</label>
											<input class="form-control" value="<?php echo $reciever_phone; ?>" name="email" type="email">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Payed By<span class="text-danger">*</span></label>
											<input class="form-control" name="Payedby" value="<?php echo $paymentmethod; ?>" placeholder="Cheque / Bank Transfer" type="text">
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Tax</label>
											<select class="select" name="taxtype">
												<option value="<?php echo $taxtype; ?>"><?php echo $taxtype; ?></option>
												<option>VAT</option>
												<option>GST</option>
												<option>No Tax</option>
											</select>
										</div>
									</div>

									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Reciever's Address</label>
											<textarea class="form-control" value="<?php echo $reciever_address; ?>" rows="3" name="c_address"><?php echo $reciever_address; ?></textarea>
										</div>
									</div>
									
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Sending Date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control" value="<?php echo $send_date; ?>" type="date" name="idate">
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Due Date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control" value="<?php echo $due_date; ?>" type="date" name="ddate">
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
													<textarea rows="5" name="note" id="notes" placeholder="Your Notes" class="form-control"></textarea>
												</div>
											</div>
										</div>

										<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Expense Status<span class="text-danger">*</span></label>
											<select class="select" name="invoicestatus">
												<option><?php echo $status; ?></option>
												<option value="Pending">Pending</option>
												<option value="Partially Paid">Partially Paid</option>
												<option value="Paid">Paid</option>
												<option value="Approved">Approved</option>
											</select>
										</div>
									</div>
									</div>
								</div>
                       <input type="hidden" value="<?php echo $expensenumber; ?>" class="form-control" name="item">
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
    $email = $_POST["email"];

    $taxtype = $_POST["taxtype"];
    $c_address = $_POST["c_address"];
   // $y_address = $_POST["y_address"];
    $idate = $_POST["idate"];
    $ddate = $_POST["ddate"];
   // $productCode_1 = $_POST["productCode_1"];
    $taxAmount = $_POST["taxAmount"];
    $productName = $_POST["taxAmount"];
  //  $quantity = $_POST['quantity'];

    $Payedby = $_POST["Payedby"];
    $subtotal = $_POST["subtotal"];
    $taxRate = $_POST['taxRate'];

    $discount = $_POST["discount"];
   // $subTotal = $_POST["subTotal"];
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
    


		$insert = "UPDATE expense SET reciever_name = '$client', reciever_address = '$c_address', reciever_acct_name = '$acct_name ', purchase_by = '$Payedby', send_date = '$idate', due_date = '$ddate', expensenumber = '$item', user_id = '$log_id', order_total_before_tax = '$subtotal', discount = '$discount', grand_total = '$totalAftertax', order_amount_paid = '$amountPaid', order_total_amount_due = '$amountDue', note = '$note', taxtype = '$taxtype', tax = '$taxAmount', taxRate = '$taxRate', reciever_bank_name = '$bankname', acct_number = '$acctnum', reciever_phone = '$phone', reciever_email = '$email', status = '$invoicestatus', company_id = '$log_username' WHERE expensenumber = '$expensenumber' AND user_id = '$log_id' AND company_id = '$log_username', month = '$month'";		
		$dinsert = mysqli_query($db_conx, $insert);

 
		if ($dinsert == TRUE) {
			# code...
               // echo 'okay';
               //  exit();
							for ($i = 0; $i < count($_POST['productCode']); $i++) {

		$put = "INSERT INTO expense_order_item (expenseID, itemname, itemdescription, order_item_price, order_item_quantity, order_item_final_amount) 

			VALUES ('".$item."', '".$_POST['productCode'][$i]."', '".$_POST['productName'][$i]."', '".$_POST['price'][$i]."', '".$_POST['quantity'][$i]."', '".$_POST['total'][$i]."')";			
			$dput = mysqli_query($db_conx, $put);


		if ($dput) {
			# code...
			echo "<script>alert('Expense Recorded!')</script>";
              //  header("Location:main.php");
             echo "<script>window.open('Expenses','_self')</script>";
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
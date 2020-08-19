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
$taxtype = $row_count_invoice['taxtype'];



}
$sql_count_client = "SELECT * FROM clients WHERE company_id = '$log_username' AND user_id = '$log_id' AND client_id = '$client_id'";
$query_count_client = mysqli_query($db_conx, $sql_count_client);

 $count_client = mysqli_num_rows($query_count_client);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_client = mysqli_fetch_array($query_count_client)) {
 	
 	$client_id = $row_count_client['client_id'];
	$e_firstname = $row_count_client['c_firstname'];
	$e_lastname = $row_count_client['c_lastname'];
	$c_companyname = $row_count_client['c_companyname'];
	$c_state = $row_count_client['c_state'];
	$c_country = $row_count_client['c_country'];
	$c_email = $row_count_client['c_email'];
 }

 }

 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Generate Invoice");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <ul class="list-unstyled">
												<li>'. $CompanyName.'</li>
												<li>'. $address.'</li>
												<li>'. $city.'</li>
												<li>'.  $state_province.'</li>
												<li>'. $country.'</li>
												<li>'.$PostalCode.'</li>
											</ul>
      ';  
      $content .= fetch_data();  
      $content .= '<table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I');  
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
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Invoice</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="home">Dashboard</a></li>
									<li class="breadcrumb-item active"><a href="invoices">Invoice</a></li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<div class="btn-group btn-group-sm">
									<button class="btn btn-white" id="csv">CSV</button>
									<form method="post">
										<button class="btn btn-white" type="submit" name="generate_pdf">PDF</button>
									</form>
									
									<button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card" >
								<div class="card-body">
									<div class="row">
										<div class="col-sm-6 m-b-20">
											<img src="assets/img/logo2.png" class="inv-logo" alt="">
				 							<ul class="list-unstyled">
												<li><?php echo $CompanyName; ?> Technologies</li>
												<li><?php echo $address; ?></li>
												<li><?php echo $city; ?></li>
												<li><?php echo $state_province; ?></li>
												<li><?php echo $country; ?></li>
												<li><?php echo $PostalCode; ?></li>
											</ul>
										</div>
										<div class="col-sm-6 m-b-20">
											<div class="invoice-details">
												<h4 class="text-uppercase">#<?php echo $invoicenumber; ?></h4>
												<ul class="list-unstyled">
													<li>Date: <span><?php echo $invoice_date; ?></span></li>
													<li>Due date: <span><?php echo $due_date; ?></span></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">
											<h5>Invoice to:</h5>
				 							<ul class="list-unstyled">
												<li><h5><strong><?php echo $e_firstname; ?> <?php echo $e_lastname; ?></strong></h5></li>
												<li><span><?php echo $c_companyname; ?></span></li>
												<li><?php echo $address; ?></li>
												<li><?php echo $c_state; ?></li>
												<li><?php echo $c_country; ?></li>
												<li><?php echo $phone; ?></li>
												<li><a href="#"><?php echo $c_email; ?></a></li>
											</ul>
										</div>
										<div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">
											<span class="text-muted">Payment Details:</span>
											<ul class="list-unstyled invoice-payment-details">
												<li><h5>Total Due: <span class="text-right">$<?php echo number_format($order_total_amount_due); ?></span></h5></li>
												<li>Acct Name: <span><?php echo $acct_name; ?></span></li>
												<li>Acct Number: <span><?php echo $acct_number; ?></span></li>
												<li>Bank name: <span><?php echo $bank_name; ?></span></li>
												<!-- <li>IBAN: <span>KFH37784028476740</span></li>
												<li>SWIFT code: <span>BPT4E</span></li> -->
											</ul>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-striped table-hover" id="example">
											<thead>
												<tr>
													<!-- <th>#</th> -->
													<th>ITEM</th>
													<th class="d-none d-sm-table-cell">DESCRIPTION</th>
													<th>UNIT COST</th>
													<th>QUANTITY</th>
													<th class="text-right">TOTAL</th>
												</tr>
											</thead>
											<tbody>
												<?php 
 $sql_count_item = "SELECT * FROM invoice_order_item WHERE invoicenumber = '$invoicenumber'";
$query_count_item = mysqli_query($db_conx, $sql_count_item);

 $count_item = mysqli_num_rows($query_count_item);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_item = mysqli_fetch_array($query_count_item)) {
 	
 	$order_item_id = $row_count_item['order_item_id'];
	$invoicenumber = $row_count_item['invoicenumber'];
	$itemname = $row_count_item['itemname'];
	$item_desc = $row_count_item['item_desc'];
	$order_item_quantity = $row_count_item['order_item_quantity'];
	$order_item_price = $row_count_item['order_item_price'];
	$order_item_final_amount = $row_count_item['order_item_final_amount'];
    
	echo '<tr>
													
													<td>'.$itemname.'</td>
													<td class="d-none d-sm-table-cell">'.$item_desc.'</td>
													
                                                    <td>$'.number_format($order_item_quantity).'</td>
													<td>'.number_format($order_item_price).'</td>

													<td class="text-right">$'.number_format($order_item_final_amount).'</td>
												</tr>';
	
	
	
}; ?> 
												
											</tbody>
										</table>
									</div>
									<div>
										<div class="row invoice-payment">
											<div class="col-sm-7">
											</div>
											<div class="col-sm-5">
												<div class="m-b-20">
													<div class="table-responsive no-border">
														<table class="table mb-0">
															<tbody>
																<tr>
																	<th>Subtotal:</th>
																	<td class="text-right">$<?php echo number_format($order_total_before_tax); ?></td>
																</tr>
																<tr>
																	<th>Tax : <span class="text-regular">(<?php echo $order_tax_per; ?>%) <?php echo $taxtype; ?></span></th>
																	<td class="text-right">$<?php echo number_format($tax); ?></td>
																</tr>

																<tr>
																	<th>Discount:</th>
																	<td class="text-right">$<?php echo number_format($discount); ?></td>
																</tr>

																<tr>
																	<th>Total:</th>
																	<td class="text-right text-primary"><h5>$<?php echo number_format($grand_total); ?></h5></td>
																</tr>
																<tr>
																	<th>Amount Paid:</th>
																	<td class="text-right">$<?php echo number_format($order_amount_paid); ?></td>
																</tr>
																<!-- <tr>
																	<th>Tax: <span class="text-regular">(25%)</span></th>
																	<td class="text-right">$1,750</td>
																</tr> -->
																<tr>
																	<th>Amount Due:</th>
																	<td class="text-right text-primary"><h5>$<?php echo number_format($order_total_amount_due); ?></h5></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="invoice-info">
											<h5>Other information</h5>
											<p class="text-muted"><?php echo $note; ?></p>
										</div>
									<!-- 	<button id="json" class="btn btn-primary">TO JSON</button><button id="pdf" class="btn btn-danger">TO PDF</button> -->
									</div>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
<script src="src/tableHTMLExport.js"></script>
<script>
  $('#json').on('click',function(){
    $("#example").tableHTMLExport({type:'json',filename:'sample.json'});
  })
  $('#csv').on('click',function(){
    $("#example").tableHTMLExport({type:'csv',filename:'sample.csv'});
  })
  $('#pdf').on('click',function(){
    $("#example").tableHTMLExport({type:'pdf',filename:'sample.pdf'});
  })
  </script>
  <script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>
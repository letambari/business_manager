<?php include 'parsers/header.php'; ?>
			<!-- /Header -->
			
		<?php include 'parsers/sidebar.php'; ?>
			<!-- /Sidebar -->
			<?php 
			if (isset($_GET['expensenumber']) && isset($_GET['user_id'])) {
 	# code...
 	$expensenumber = $_GET['expensenumber'];
 	$user_id = $_GET['user_id'];

$sql_count_invoice = "SELECT * FROM expense WHERE company_id = '$log_username' AND user_id = '$log_id' AND expensenumber = '$expensenumber'";
 $query_count_invoice = mysqli_query($db_conx, $sql_count_invoice);

 $count_invoice = mysqli_num_rows($query_count_invoice);

}
 ?>
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Expense Details</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Expense Table</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
			
				
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
								<!-- 	<h4 class="card-title mb-0">Contextual Classes</h4> -->
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr class="table-primary">
													<th>ExpenseID</th>
													<th>Item Name</th>
													<th>Item Description</th>
													<th>Quantity</th>
													<th>Price</th>
													<th>Total Amount</th>
												</tr>
											</thead>
											<tbody>
												<?php 
 											
 $sql_count_item = "SELECT * FROM expense_order_item WHERE expenseID = '$expensenumber'";
$query_count_item = mysqli_query($db_conx, $sql_count_item);

 $count_item = mysqli_num_rows($query_count_item);
// printf("Result set has %d rows.\n",$rowcount)
 while ($row_count_item = mysqli_fetch_array($query_count_item)) {
 	
 	// $order_item_id = $row_count_item['order_item_id'];
	$invoicenumber = $row_count_item['expenseID'];
	$itemname = $row_count_item['itemname'];
	$item_desc = $row_count_item['itemdescription'];
	$order_item_quantity = $row_count_item['order_item_quantity'];
	$order_item_price = $row_count_item['order_item_price'];
	$order_item_final_amount = $row_count_item['order_item_final_amount'];
    
	echo '<tr class="table-secondary">
	           <td>'.$invoicenumber.'</td>
													<td>'.$itemname.'</td>
													<td>'.$item_desc.'</td>
													<td>$'.number_format($order_item_quantity).'</td>
													<td>'.number_format($order_item_price).'</td>
													<td>$'.number_format($order_item_final_amount).'</td>
												</tr>';
	
	
	
}; ?> 
												
													
												
											</tbody>
										</table>
									</div>
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
		
		<!-- Custom JS -->
		<script  src="assets/js/app.js"></script>
		
    </body>
</html>
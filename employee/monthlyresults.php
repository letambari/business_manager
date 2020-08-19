<?php include 'parsers/header.php'; ?>
			<!-- /Header -->
			
		<?php include 'parsers/sidebar.php'; ?>
		
	<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Monthly Expense Details</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Monthly Expense Table</li>
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

<?php
$fdate=$_POST['fromdate'];
 $tdate=$_POST['todate'];
//$rtype=$_POST['requesttype'];
?>
<h5 align="center" style="color:blue">Monthwise Expense Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
<hr />
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <tr>
              <th>S.NO</th>
              <th>Month-Year</th>
              <th>Expense Amount</th>
                </tr>
                                        </tr>
                                        </thead>
 <?php
//$userid=$_SESSION['detsuid'];
$ret=mysqli_query($db_conx,"SELECT month(paymentdate) as rptmonth,year(paymentdate) as rptyear,SUM(grand_total) as totalmonth FROM expense  where (paymentdate BETWEEN '$fdate' and '$tdate') && (User_id='$log_id') group by month(paymentdate),year(paymentdate)");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['rptmonth']."-".$row['rptyear'];?></td>
                  <td>$<?php  echo number_format($ttlsl=$row['totalmonth']);?></td>
           
           
                </tr>
                <?php
                $totalsexp = '';
                $totalsexp+=$ttlsl; 
$cnt=$cnt+1;
}?>

 <tr>
  <th colspan="2" style="text-align:center">Grand Total</th>     
  <td>$<?php echo number_format($totalsexp);?></td>
 </tr>

                                    </table>
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
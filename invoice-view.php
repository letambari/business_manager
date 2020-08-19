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
                 
                    <button class="btn btn-white" type="submit" id="btnExport">PDF</button>
                
                  
                  <button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
                </div>
              </div>
            </div>
          </div>
      

 <div class="row">
            <div class="col-md-12">
              <div class="card" >
                <div class="card-body" id="tblCustomers">
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
                  <!--  <button id="json" class="btn btn-primary">TO JSON</button><button id="pdf" class="btn btn-danger">TO PDF</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
  
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("customer-details.pdf");
                }
            });
        });
    </script>
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

    <!-- Custom JS -->
    <script src="assets/js/app.js"></script>
    
    </body>
</html>
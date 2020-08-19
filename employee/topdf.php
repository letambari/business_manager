<?php  
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "", "sphermanager");  
      $sql = "SELECT * FROM invoice";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6 m-b-20">
                      <img src="assets/img/logo2.png" class="inv-logo" alt="">
                      <ul class="list-unstyled">
                        <li>Dreamguys Technologies</li>
                        <li>3864 Quiet Valley Lane,</li>
                        <li>Sherman Oaks, CA, 91403</li>
                        <li>GST No:</li>
                      </ul>
                    </div>
                    <div class="col-sm-6 m-b-20">
                      <div class="invoice-details">
                        <h3 class="text-uppercase">Invoice #INV-0001</h3>
                        <ul class="list-unstyled">
                          <li>Date: <span>March 12, 2019</span></li>
                          <li>Due date: <span>April 25, 2019</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">
                      <h5>Invoice to:</h5>
                      <ul class="list-unstyled">
                        <li><h5><strong>Barry Cuda</strong></h5></li>
                        <li><span>Global Technologies</span></li>
                        <li>5754 Airport Rd</li>
                        <li>Coosada, AL, 36020</li>
                        <li>United States</li>
                        <li>888-777-6655</li>
                        <li><a href="#">barrycuda@example.com</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">
                      <span class="text-muted">Payment Details:</span>
                      <ul class="list-unstyled invoice-payment-details">
                        <li><h5>Total Due: <span class="text-right">$8,750</span></h5></li>
                        <li>Bank name: <span>Profit Bank Europe</span></li>
                        <li>Country: <span>United Kingdom</span></li>
                        <li>City: <span>London E1 8BF</span></li>
                        <li>Address: <span>3 Goodman Street</span></li>
                        <li>IBAN: <span>KFH37784028476740</span></li>
                        <li>SWIFT code: <span>BPT4E</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>ITEM</th>
                          <th class="d-none d-sm-table-cell">DESCRIPTION</th>
                          <th>UNIT COST</th>
                          <th>QUANTITY</th>
                          <th class="text-right">TOTAL</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Android Application</td>
                          <td class="d-none d-sm-table-cell">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                          <td>$1000</td>
                          <td>2</td>
                          <td class="text-right">$2000</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Ios Application</td>
                          <td class="d-none d-sm-table-cell">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                          <td>$1750</td>
                          <td>1</td>
                          <td class="text-right">$1750</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Codeigniter Project</td>
                          <td class="d-none d-sm-table-cell">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                          <td>$90</td>
                          <td>3</td>
                          <td class="text-right">$270</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Phonegap Project</td>
                          <td class="d-none d-sm-table-cell">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                          <td>$1200</td>
                          <td>2</td>
                          <td class="text-right">$2400</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Website Optimization</td>
                          <td class="d-none d-sm-table-cell">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                          <td>$200</td>
                          <td>2</td>
                          <td class="text-right">$400</td>
                        </tr>
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
                                  <td class="text-right">$7,000</td>
                                </tr>
                                <tr>
                                  <th>Tax: <span class="text-regular">(25%)</span></th>
                                  <td class="text-right">$1,750</td>
                                </tr>
                                <tr>
                                  <th>Total:</th>
                                  <td class="text-right text-primary"><h5>$8,750</h5></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="invoice-info">
                      <h5>Other information</h5>
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero, eu finibus sapien interdum vel</p>
                    </div>
                  </div>
                </div>
             
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('TCPDF-master/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");  
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
     <div class="row">
            <div class="col-md-12">
              <div class="card">


               </div>
            </div>
          </div>
      ';  
      $content .= fetch_data();  
      $content .= '</div>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I');  
 }  
 ?>  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="nohome, nofollow">
        <title>SphereManager</title>
    <!-- Favicon -->
    
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    
    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css">
    
    <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
 
        
<!-- Favicon -->

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    
    <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/style2.css">

        <link rel="stylesheet" href="assets/css/style3.css">
         <link rel="stylesheet" href="assets/css/buttons.css">




        <script src="js/invoice.js"></script>
          <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
 

    </head>
    <body>
    <!-- Main Wrapper -->
        <div class="main-wrapper">
    
      <!-- Header -->
            <div class="header">
      
        <!-- Logo -->
                <div class="header-left">
                    <a href="home" class="logo">
            <img src="assets/img/logo.png" width="40" height="40" alt="">
          </a>
                </div>
        <!-- /Logo -->
        
        <a id="toggle_btn" href="javascript:void(0);">
          <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </a>
        
        <!-- Header Title -->
                <div class="page-title-box">
          <h3><?php //echo $CompanyName; ?></h3>
                </div>
        <!-- /Header Title -->
        
        <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
        
        <!-- Header Menu -->
        <ul class="nav user-menu">
        
          <!-- Search -->
          <li class="nav-item">
            <div class="top-nav-search">
              <a href="javascript:void(0);" class="responsive-search">
                <i class="fa fa-search"></i>
               </a>
              <form action="search">
                <input class="form-control" type="text" placeholder="Search here">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </li>
          <!-- /Search -->
        
          <!-- Flag -->
          
          <!-- /Flag -->
          
          <!-- Notifications -->
          <!--
          <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
            </a>
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
              </div>
              <div class="noti-content">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="activities">
                      <div class="media">
                        <span class="avatar">
                          <img alt="" src="assets/img/profiles/avatar-02.jpg">
                        </span>
                        <div class="media-body">
                          <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                          <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities">
                      <div class="media">
                        <span class="avatar">
                          <img alt="" src="assets/img/profiles/avatar-03.jpg">
                        </span>
                        <div class="media-body">
                          <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                          <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities">
                      <div class="media">
                        <span class="avatar">
                          <img alt="" src="assets/img/profiles/avatar-06.jpg">
                        </span>
                        <div class="media-body">
                          <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                          <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities">
                      <div class="media">
                        <span class="avatar">
                          <img alt="" src="assets/img/profiles/avatar-17.jpg">
                        </span>
                        <div class="media-body">
                          <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                          <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities">
                      <div class="media">
                        <span class="avatar">
                          <img alt="" src="assets/img/profiles/avatar-13.jpg">
                        </span>
                        <div class="media-body">
                          <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                          <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="activities">View all Notifications</a>
              </div>
            </div>
          </li>
        -->
          <!-- /Notifications -->
          
          <!-- Message Notifications -->
          <!--
          <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
            </a>
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span class="notification-title">Messages</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
              </div>
              <div class="noti-content">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="chat">
                      <div class="list-item">
                        <div class="list-left">
                          <span class="avatar">
                            <img alt="" src="assets/img/profiles/avatar-09.jpg">
                          </span>
                        </div>
                        <div class="list-body">
                          <span class="message-author">Richard Miles </span>
                          <span class="message-time">12:28 AM</span>
                          <div class="clearfix"></div>
                          <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="chat">
                      <div class="list-item">
                        <div class="list-left">
                          <span class="avatar">
                            <img alt="" src="assets/img/profiles/avatar-02.jpg">
                          </span>
                        </div>
                        <div class="list-body">
                          <span class="message-author">John Doe</span>
                          <span class="message-time">6 Mar</span>
                          <div class="clearfix"></div>
                          <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="chat">
                      <div class="list-item">
                        <div class="list-left">
                          <span class="avatar">
                            <img alt="" src="assets/img/profiles/avatar-03.jpg">
                          </span>
                        </div>
                        <div class="list-body">
                          <span class="message-author"> Tarah Shropshire </span>
                          <span class="message-time">5 Mar</span>
                          <div class="clearfix"></div>
                          <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="chat">
                      <div class="list-item">
                        <div class="list-left">
                          <span class="avatar">
                            <img alt="" src="assets/img/profiles/avatar-05.jpg">
                          </span>
                        </div>
                        <div class="list-body">
                          <span class="message-author">Mike Litorus</span>
                          <span class="message-time">3 Mar</span>
                          <div class="clearfix"></div>
                          <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="chat">
                      <div class="list-item">
                        <div class="list-left">
                          <span class="avatar">
                            <img alt="" src="assets/img/profiles/avatar-08.jpg">
                          </span>
                        </div>
                        <div class="list-body">
                          <span class="message-author"> Catherine Manseau </span>
                          <span class="message-time">27 Feb</span>
                          <div class="clearfix"></div>
                          <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="chat">View all Messages</a>
              </div>
            </div>
          </li>
        -->
          <!-- /Message Notifications -->
  
          <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
              <span class="status online"></span></span>
              <span>Admin</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="profile">My Profile</a>
              <a class="dropdown-item" href="settings">Settings</a>
              <a class="dropdown-item" href="logout">Logout</a>
            </div>
          </li>
        </ul>
        <!-- /Header Menu -->
        
        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile">My Profile</a>
            <a class="dropdown-item" href="settings">Settings</a>
            <a class="dropdown-item" href="logout">Logout</a>
          </div>
        </div>
        <!-- /Mobile Menu -->
        
            </div>

 
      <body>  
        <?php include'parsers/sidebar.php' ?>
          
           <div class="container">  
                <h4 align="center"> Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP</h4><br />  
                <div class="table-responsive">  
                	<div class="col-md-12" align="right">
                     <form method="post">  
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />  
                     </form>  
                     </div>
                     <br/>
                     <br/>
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">Id</th>  
                               <th width="30%">Name</th>  
                               <th width="15%">Age</th>  
                               <th width="50%">Email</th>  
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
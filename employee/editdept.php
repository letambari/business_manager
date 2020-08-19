<?php include 'parsers/header.php'; ?>
            <!-- /Header -->
        <?php include'parsers/sidebar.php' ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title"></h3>
								<ul class="breadcrumb">

								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title mb-0"><?php echo $thetitle; ?></h4>
								</div>
								<div class="card-body">
									<form id="upload_form" enctype="multipart/form-data" method="post">
									
										
										
									
										<div class="form-group mb-0 row">
											<label class="col-form-label col-md-2">Input Addons</label>
											<div class="col-md-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"></span>
													</div>
													<input class="form-control" name="editdept" id="editdept" value="<?php echo $editdepartment_name2;
; ?>" type="text">
<input class="form-control" name="editdeptid" id="editdeptid" value="<?php echo $editdepartment_id2;
; ?>" type="hidden">
													<div class="input-group-append">
														<?php echo $button;	?>												</div>
														<div id="status"></div>
												</div>
											</div>
										</div>
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
		
		<!-- Custom JS -->
		<script  src="assets/js/app.js"></script>
		
    </body>
</html>
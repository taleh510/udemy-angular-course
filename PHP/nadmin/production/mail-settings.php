<?php 
include('header.php'); ?>
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2> Sosial setting <small>
									<?php
									 
									 if($_GET['durum']=="ok"){ ?>
									 <b style="color:green;">Success!</b>
									 <?php }
									 elseif ($_GET['durum']=="no") {?>
									 <b style="color:red;">Unsuccess!</b>
									 <?php } ?>
									</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="../netting/process.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SMTPHost: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="sett_smtphost" required="required" class="form-control " value="<?php echo $settingcek['sett_smtphost'] ?>">
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SMTPUser: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="sett_smtpuser" required="required" class="form-control " value="<?php echo $settingcek['sett_smtpuser'] ?>">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SMTPPassword:<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="password" id="first-name" name="sett_smtppassword" required="required" class="form-control " value="<?php echo $settingcek['sett_smtppassword'] ?>">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SMTPPort: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="sett_smtpport" required="required" class="form-control "value="<?php echo $settingcek['sett_smtpport'] ?>">
											</div>
										</div>
										<div class="form-group">
											<div align="right" class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-primary" name="mailsave">Update</button>
											</div>
										</div>
										</div>
										
									</form>
								</div>
							</div>
						</div>
					</div>
									 </div>
			<!-- /page content -->
			<?php include('footer.php'); ?> 
<?php 
include('header.php'); 
$userssorus=$db->prepare("SELECT * FROM admins where admin_id=:id");
$userssorus->execute(array('id' => $_GET['admin_id']));
$userscek=$userssorus->fetch(PDO::FETCH_ASSOC);
?>

			<div class="right_col" role="main">
				<div class="">
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2> Edit user <small>
										<?php
									 
									 if($_GET['status']=="ok"){ ?>
									 <b style="color:green;">Success!</b>
									 <?php }
									 elseif ($_GET['status']=="no") {?>
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
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">User's regisstration time: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input disabled type="text" id="" name="admin_regtime" required="required" class="form-control " value="<?php echo $userscek['admin_regtime'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Admin's mail: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="" name="admin_mail" required="required" class="form-control "value="<?php echo $userscek['admin_mail'] ?>">
											</div>
										</div>


										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Admin's name: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="admin_name" required="required" class="form-control " value="<?php echo $userscek['admin_name'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">User's photo: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="users_photo" class="form-control "value="<?php echo $userscek['users_phpto'] ?>">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Admin's password: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="admin_password" required="required" class="form-control "value="<?php echo $userscek['admin_password'] ?>">
											</div>
										</div>
										</div><div class="form-group">
											<input hidden type="text" name="admin_id" value="<?php echo $userscek['admin_id'];?>"> 
											<div align="right" class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-primary" name="adminsupdate">Update</button>
												<?php //echo $_GET['users_id'];?>
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
			<?php include('footer.php'); 
			

			//<option value="<?php echo $userscek['users_type'];selected><?php echo $userscek['users_type'];</option>
			//<option value="<?php if($userscek['users_type']==Admin){echo $userr = User;} "><?php  echo $userr; </option>
			
			?> 
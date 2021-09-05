<?php 
include('header.php'); 
$menusorus=$db->prepare("SELECT * FROM users where users_id=:id");
$menusorus->execute(array(
  'id' => $_GET['menu_id']
));
$menucek=$menusorus->fetch(PDO::FETCH_ASSOC);
?>


			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2> Edit menu <small>
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
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Menu id: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input disabled type="text" id="first-name" name="menu_id" required="required" class="form-control " value="<?php echo $menucek['menu_id'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Menu name: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input disabled type="text" id="first-name" name="menu_name" required="required" class="form-control "value="<?php echo $menucek['menu_name'] ?>">
											</div>
										</div>


										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">User's name: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="users_name" required="required" class="form-control " value="<?php echo $userscek['users_name'] ?>">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">User's birth day: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="users_age" required="required" class="form-control " value="<?php echo $userscek['users_age'] ?>">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">User's sex: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<!-- <input type="text" id="first-name" name="users_sex" required="required" class="form-control "value="<?//php echo $userscek['users_sex'] ?>"> -->
												<select name="users_sex" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                    <option value="<?php echo $userscek['users_sex'] ?>"><?php echo $userscek['users_sex'] ?></option>
													<option value="Man">Man</option>
													<option value="Woman">Woman</option>
                                           		 </select>
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
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">User's password: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="users_password" required="required" class="form-control "value="<?php echo $userscek['users_password'] ?>">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">User's status: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                            <select name="users_yetki" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                    <option value="<?php echo $userscek['users_yetki']; ?>"> <?php echo $userscek['users_yetki'] ;?></option>
													<option value="Admin">Admin</option>
													<option value="User">User</option>
                                           		 </select>
											</div>
										</div><div class="form-group">
											<div align="right" class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-primary" name="userseditsave">Update</button>
												<?php //echo $_GET['users_id'];?>
											</div>
										</div>
										</div>
										
									</form>
								</div>
							</div>
						</div>
					</div>
			<!-- /page content -->
			<?php include('footer.php'); 
			

			//<option value="<?php echo $userscek['users_yetki'];selected><?php echo $userscek['users_yetki'];</option>
			//<option value="<?php if($userscek['users_yetki']==Admin){echo $userr = User;} "><?php  echo $userr; </option>
			
			?> 
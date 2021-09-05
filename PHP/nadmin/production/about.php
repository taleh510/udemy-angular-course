<?php 
include('header.php'); 
 $aboutsorus=$db->prepare("SELECT * FROM about where about_id=:id");
 $aboutsorus->execute(array(
   'id' => 0
 ));
 $aboutcek=$aboutsorus->fetch(PDO::FETCH_ASSOC);
?>
			<!-- page content -->
			<head>
			<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
			</head>
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
									<h2>About<small>
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
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">About title: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="about_title" required="required" class="form-control " value="<?php echo $aboutcek['about_title'] ?>">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">About text: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea type="text" id="editor1" name="about_text" required="required" class="ckeditor"><?php echo $aboutcek['about_text'] ?></textarea>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">About video: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="about_video" required="required" class="form-control "value="<?php echo $aboutcek['about_video'] ?>">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">About mission: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" name="about_mission" required="required" class="form-control "value="<?php echo $aboutcek['about_mission'] ?>">
											</div>
										</div>
											<div class="form-group">
												<div align="right" class="col-md-6 col-sm-6 offset-md-3">
													<button type="submit" class="btn btn-primary" name="aboutsave">Update</button>
												</div>
											</div>
										</div>
										
										
									</form>
								</div>
							</div>
						</div>
					</div>
			<!-- /page content -->
			<?php include('footer.php'); ?> 
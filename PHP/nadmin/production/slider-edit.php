<?php
include('header.php');
$slidersorus = $db->prepare("SELECT * FROM slider where slider_id=:id");
$slidersorus->execute(array('id' => $_GET['slider_id']));
$slidercek = $slidersorus->fetch(PDO::FETCH_ASSOC); ?>

<div class="right_col" role="main">
	<div class="">
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2> Slider Edit <small>
								<?php

								if ($_GET['status'] == "ok") { ?>
									<b style="color:green;">Success!</b>
								<?php } elseif ($_GET['status'] == "no") { ?>
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
						<form action="../netting/process.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Slider edit time: <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input disabled type="text" id="" name="slider_edittime" required="required" class="form-control " value="<?php echo $slidercek['slider_edittime'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Slider ID: <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input disabled type="text" id="" name="slider_id" required="required" class="form-control " value="<?php echo $slidercek['slider_id'] ?>">
								</div>
							</div>


							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Slider Title: <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="first-name" name="slider_title" required="required" class="form-control " value="<?php echo $slidercek['slider_title'] ?>">
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Slider Photo:</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="file" id="first-name" name="slider_photo" class="form-control " value="<?php echo $slidercek['slider_photo'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Slider Description: <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="first-name" name="slider_description" required="required" class="form-control " value="<?php echo $slidercek['slider_description'] ?>">
								</div>
							</div>


							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Slider Cost: <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="first-name" name="slider_cost" class="form-control " value="<?php echo $slidercek['slider_cost'] ?>">
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Slider Cost 2: <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="first-name" name="slider_costpercent" required="required" class="form-control " value="<?php echo $slidercek['slider_costpercent'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Slider Cost Text: <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="first-name" name="slider_costtext" required="required" class="form-control " value="<?php echo $slidercek['slider_costtext'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Slider Item brand: <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="first-name" name="slider_itembrand" required="required" class="form-control " value="<?php echo $slidercek['slider_itembrand'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Item Description: <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="first-name" name="slider_itemdes" required="required" class="form-control " value="<?php echo $slidercek['slider_itemdes'] ?>">
								</div>
							</div>
							<div class="form-group">
								<input hidden type="text" name="slider_id" value="<?php echo $slidercek['slider_id'] ?>">
								<div align="right" class="col-md-6 col-sm-6 offset-md-3">
									<button type="submit" class="btn btn-primary" name="slideredit">Update</button>
								</div>
							</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>
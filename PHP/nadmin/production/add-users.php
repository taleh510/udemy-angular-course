<?php include('header.php');?>
<body>
<div class="right_col">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Add new user</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
				<div class="clearfix"></div>
			</div>
		<div class="x_content">
	<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="../netting/process.php" method="POST">
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name and Surname:<span class="required">*</span></label>
		 <div class="col-md-6 col-sm-6 ">
			<input type="text" id="" name="users_name" required="required" class="form-control ">
				</div>
					</div>
						<div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Mail Adress:<span class="required">*</span>
	            </label>
			<div class="col-md-6 col-sm-6 ">
		<input type="text" id="last-name" name="users_mail" required="required" class="form-control">
	</div>
</div>
	<div class="item form-group">
		<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password:</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="password" id="middle-name"  class="form-control" type="text" name="users_password">
					</div>
						</div>
					<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
			<div class="col-md-6 col-sm-6"style="display:flex; justify-content:space-around;">
		<div id="sex" class="btn-group" data-toggle="buttons">
	<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
<input type="radio" name="users_sex" value="Male" class="join-btn"> &nbsp; Male &nbsp;
	</label>
		<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
			<input type="radio" name="users_sex" value="Female" class="join-btn"> Female
				</label>
                    </div>
                         <div id="usersyetki" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
		        <input type="radio" name="users_yetki" value="Admin" class="join-btn"> &nbsp; Admin &nbsp;
			</label>
		<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
	<input type="radio" name="users_yetki" value="User" class="join-btn"> User
</label>
    </div>
		</div>
			</div>

				<!-- </div>
			</div>
				<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
		</label>
	<div class="col-md-6 col-sm-6 ">
<input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
	<script>
		function timeFunctionLong(input) {
			setTimeout(function() {
				input.type = 'text';
					}, 60000);}
					    </script>
					</div>
                </div>
            <!-- <div class="item form-group">
		<label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
	<div class="col-md-6 col-sm-6 "> -->
<!-- <div id="gender" class="btn-group" data-toggle="buttons">
	<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
		<input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Male &nbsp;
			</label>
				<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
					<input type="radio" name="gender" value="female" class="join-btn"> Female
						</label>
					</div> -->
				<!-- </div>
			</div> -->
		<div class="ln_solid"></div>
	<div class="item form-group" style="display:flex; justify-content:space-around;">
<div class="col-md-6 col-sm-6 offset-md-3">
	<button class="btn btn-primary" type="button">Cancel</button>
		<button class="btn btn-primary" type="reset">Reset</button>
			<button type="submit" class="btn btn-success" name="addnewuser">Submit</button>
				</div>
					</div>
                        </form>
					</div>
				</div>
			</div>
		</div>
    </body>
<?php include('footer.php');?>
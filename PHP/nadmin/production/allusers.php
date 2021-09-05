<?php include('header.php');

$userssorus=$db->prepare("SELECT * FROM users");
$userssorus->execute();?>
?>

<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>All users<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                                <div class="clearfix"></div>
                                    </div>
                                        <div class="x_content">
                                    <div class="row">
                                <div class="col-sm-12">
                            <div class="card-box table-responsive">
					    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                <tr>
            <th>ID</th>
        <th>Name and L/name</th>
    <th>Mail</th>
<th>Age</th>
    <th>Sex</th>                  
        <th>Registration time</th>
            <th>Edit</th>
                <th>Delete</th>
                    <th>Password</th>
                        <th>Status</th>
                            <th>Photo</th>
                                </tr>
                                    </thead>
                                        <tbody>
                                    <?php while($userscek=$userssorus->fetch(PDO::FETCH_ASSOC)){ ?>
                                <tr>
                            <td><?php echo $userscek['users_id'];?></td>          
                        <td><?php echo $userscek['users_name'];?></td>          
                    <td><?php echo $userscek['users_mail'];?></td>          
                <td><?php echo $userscek['users_age'];?></td>          
            <td><?php echo $userscek['users_sex'];?></td>          
        <td><?php echo $userscek['users_regtime'];?></td>          
    <td><a href="users-edit.php?users_id=<?php echo $userscek['users_id'];?>">
<button type="button" class="btn btn-success btn-sm px-4">Edit</button></a></td>          
    <td><a href="../netting/process.php?users_id=<?php echo $userscek['users_id']; ?>&userdelete=ok">
        <button type="button" class="btn btn-danger btn-sm px-4">Delete</button></a></td>
            <td><?php echo $userscek['users_password'];?></td>          
                <td><?php echo $userscek['users_yetki'];?></td>          
                    <td><?php echo $userscek['users_photo'];?></td>          
                        </tr>          
                            <?php } ?>          
                                </tbody>
                                    </table>
					                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                    </div>

<?php include('footer.php');?>
<?php include('header.php');
$menusorus=$db->prepare("SELECT * FROM menu");
$menusorus->execute();?>


<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>All Menu<small></small></h2>
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
        <th>Menu name</th>
    <th>Menu Detail</th>
<th>Menu URL</th>
    <th>Menu ROW</th>   
        <th>Edit</th>
            <th>Delete</th>               
                <th>Menu SEOURL</th>
                    <th>Menu Status</th>
                        </tr>
                            </thead>
                                <tbody>
                                    <?php while($menuscek=$menusorus->fetch(PDO::FETCH_ASSOC)){ ?>
                                <tr>
                            <td><?php echo $menuscek['menu_id'];?></td>          
                        <td><?php echo $menuscek['menu_name'];?></td>          
                    <td><?php echo $menuscek['menu_detay'];?></td>          
                <td><?php echo $menuscek['menu_url'];?></td>          
            <td><?php echo $menuscek['menu_sira'];?></td>                    
    <td><a href="menus-edit.php?menu_id=<?php echo $menuscek['menu_id'];?>">
<button type="button" class="btn btn-success btn-sm px-4">Edit</button></a></td>          
    <td><a href="../netting/process.php?users_id=<?php echo $userscek['users_id']; ?>&userdelete=ok">
        <button type="button" class="btn btn-danger btn-sm px-4">Delete</button></a></td>
            <td><?php echo $menuscek['menu_seourl'];?></td>          
                <td><?php echo $menuscek['menu_status'];?></td>                   
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
    <?php include('footer.php');?>
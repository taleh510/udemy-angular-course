<?php include('header.php');
$slidersorus = $db->prepare("SELECT * FROM slider");
$slidersorus->execute(); ?>

<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Slider<small></small></h2>
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
                                        <th>Photo</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Cost</th>
                                        <th>Percent</th>
                                        <th>Text</th>
                                        <th>Edit</th>
                                        <th>Brand</th>
                                        <th>Brand Des</th>
                                        <th>Edit time</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($slidercek = $slidersorus->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $slidercek['slider_id']; ?></td>
                                            <td><?php echo $slidercek['slider_photo']; ?></td>
                                            <td><?php echo $slidercek['slider_title']; ?></td>
                                            <td><?php echo $slidercek['slider_description']; ?></td>
                                            <td><?php echo $slidercek['slider_cost']; ?></td>
                                            <td><?php echo $slidercek['slider_costpercent']; ?></td>
                                            <td><?php echo $slidercek['slider_costtext']; ?></td>
                                            <td><a href="slider-edit.php?slider_id=<?php echo $slidercek['slider_id']; ?>">
                                                    <button type="button" class="btn btn-success btn-sm px-4">Edit</button></a></td>
                                            <td><?php echo $slidercek['slider_itembrand']; ?></td>
                                            <td><?php echo $slidercek['slider_itemdes']; ?></td>
                                            <td><?php echo $slidercek['slider_edittime']; ?></td>
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
</div>
<?php include('footer.php'); ?>
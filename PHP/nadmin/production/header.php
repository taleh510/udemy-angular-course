<?php 
ob_start();
session_start();
include '../netting/connect.php';
$settingsorus=$db->prepare("SELECT * FROM setting where sett_id=:id");
$settingsorus->execute(array('id' => 0));
$settingcek=$settingsorus->fetch(PDO::FETCH_ASSOC);
// $userssorus=$db->prepare("SELECT * FROM users where users_mail=:mail");
// $userssorus->execute(array('mail' => $_SESSION['users_mail']));
$adminsorus=$db->prepare("SELECT * FROM admins where admin_mail=:mail");
$adminsorus->execute(array('mail' => $_SESSION['admin_mail']));
$say=$adminsorus->rowCount();
// $userscek=$userssorus->fetch(PDO::FETCH_ASSOC);
$admincek=$adminsorus->fetch(PDO::FETCH_ASSOC);
if($say==0){header("location:login.php?status=nopermittion");}?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
                <title><?php echo $settingcek['sett_title'];?></title>
                  <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
                    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
                      <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
                    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
                  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
                <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
              <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
            <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
          <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
      <link href="../build/css/custom.min.css" rel="stylesheet">
    </head>
  <body class="nav-md">
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;" style="display:flex; justify-content: center;">
          <a style="display:flex; justify-content: center;" href="index.html" class="site_title"><!--<i class="fa fa-user"></i> --><span>Admin Panel</span></a>
            </div>
              <div class="clearfix"></div>
                <div class="profile clearfix">
                  <div class="profile_pic">
                    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                  </div>
                <div class="profile_info">
              <span>Welcome,</span>
            <h2><?php echo $admincek['admin_name']; ?></h2>
          </div>
        </div>
      <br />
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
<h3>General</h3>
  <ul class="nav side-menu">
    <li><a href="main-page.php"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="all-admins.php"><i class="fa fa-users"></i>Admins</a>
          <ul class="nav child_menu">
            <li><a href="all-admins.php">All admins</a></li>
              <li><a href="add-users.php">Add admin</a></li>
                </ul>
                  </li>
                  <li><a href="all-menus.php"><i class="fa fa-bookmark"></i>Menu</a>
                  <ul class="nav child_menu">
                  <!-- <li><a href="">All users</a></li>
                  <li><a href="">Add user</a></li> -->
                  </ul>
                  </li>
                  <li><a href="slider.php"><i class="fa fa-sliders"></i>Slider</a></li>
                  <li><a><i class="fa fa-cogs"></i>Settings <span class="fa fa-cogs"></span></a>
                  <ul class="nav child_menu">
                <li><a href="general-settings.php">General</a></li>
              <li><a href="sosial-settings.php">Sosial</a></li>
            <li><a href="contact-settings.php">Contact</a></li>
          <li><a href="api-settings.php">Api</a></li>
        <li><a href="mail-settings.php">Mail</a></li>
      </ul>
    </li>
    <li><a href="about.php"><i class="fa fa-info"></i>About</a></li>  
  </ul>
</div>
  </div>
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
          <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                  <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span></a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>
    <div class="top_nav">
  <div class="nav_menu">
<div class="nav toggle">
  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>
      <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <img src="images/img.jpg" alt=""><?php echo $_SESSION['admin_mail']; ?>
                </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"  href="javascript:;"><i class="fa fa-user pull-right"></i> Profile</a>
              <a class="dropdown-item"  href="javascript:;">
            <i class="fa fa-cogs pull-right"></i>
          <span>Settings</span>
        </a>
      <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
    </div>
  </li>
</ul>
  </nav>
    </div>
      </div>
        <!-- /top navigation -->
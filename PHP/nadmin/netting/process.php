<?php
ob_start();
session_start();
include 'connect.php';
date_default_timezone_set('Etc/GMT-4');
$slideredittime = date_create('now')->format('Y-m-d H:i:s');
// $userid= $_POST['users_id'];

if (isset($_POST['adminlog'])) {
    $admin_mail = $_POST['admin_mail'];
    $admin_password = $_POST['admin_password'];

    $adminsor = $db->prepare("SELECT * FROM admins where admin_password=:passwort and  admin_mail=:mail");
    $adminsor->execute(array(
        'passwort' => $admin_password,
        'mail' => $admin_mail

    ));
    echo $say = $adminsor->rowCount();

    if ($say == 1) {
        $_SESSION['admin_mail'] = $admin_mail;
        header("location: ../production/main-page.php");
        exit;
    } else {
        header("location: ../production/login.php?status=no");
        exit;
    }
}
if (isset($_POST['adminsupdate'])) {
    $admin_id = $_POST['admin_id'];
    $adminsedit = $db->prepare("UPDATE admins SET
    
    admin_name=:admin_name,
    admin_mail=:admin_mail,
    admin_password=:admin_password
    -- admin_regtime=:admin_regtime
    
    WHERE admin_id={$_POST['admin_id']}");

    $update = $adminsedit->execute(array(
        'admin_name' => $_POST['admin_name'],
        'admin_mail' => $_POST['admin_mail'],
        'admin_password' => $_POST['admin_password']
        //    'admin_regtime'=>"00.00.00"
    ));
    if ($update) {
        header("Location: ../production/admins-edit.php?admin_id=$admin_id&status=ok");
    } else {
        header("location: ../production/users-edit.php?users_id=$admin_id&status=no");
    }
}

if (isset($_POST['generalsetsave'])) {
    $gsetsave = $db->prepare("UPDATE setting SET
    
    sett_title=:sett_title,
    sett_destcription=:sett_destcription,
    sett_keywords=:sett_keywords,
    sett_author=:sett_author
    WHERE sett_id=0");

    $update = $gsetsave->execute(array(
        'sett_title' => $_POST['sett_title'],
        'sett_destcription' => $_POST['sett_destcription'],
        'sett_keywords' => $_POST['sett_keywords'],
        'sett_author' => $_POST['sett_author']
    ));
    if ($update) {
        header("Location: ../production/general-settings.php?status=ok");
    } else {
        header("location: ../production/general-settings.php?status=no");
    }
}

if (isset($_POST['sosialsave'])) {
    $sosialssave = $db->prepare("UPDATE setting SET

    sett_facebook=:sett_facebook,
    sett_instagram=:sett_instagram,
    sett_googleplus=:sett_googleplus,
    sett_twitter=:sett_twitter

    WHERE sett_id=0");

    $update = $sosialssave->execute(array(
        'sett_facebook' => $_POST['sett_facebook'],
        'sett_instagram' => $_POST['sett_instagram'],
        'sett_googleplus' => $_POST['sett_googleplus'],
        'sett_twitter' => $_POST['sett_twitter']
    ));
    if ($update) {
        header("Location: ../production/sosial-settings.php?status=ok");
    } else {
        header("location: ../production/sosial-settings.php?status=no");
    }
}

if (isset($_POST['contactsave'])) {
    $contactssave = $db->prepare("UPDATE setting SET

    sett_tel=:sett_tel,
    sett_mail=:sett_mail,
    sett_adres=:sett_adres,
    sett_mesaj=:sett_mesaj

    WHERE sett_id=0");

    $update = $contactssave->execute(array(
        'sett_tel' => $_POST['sett_tel'],
        'sett_mail' => $_POST['sett_mail'],
        'sett_adres' => $_POST['sett_adres'],
        'sett_mesaj' => $_POST['sett_mesaj']
    ));
    if ($update) {
        header("Location: ../production/contact-settings.php?status=ok");
    } else {
        header("location: ../production/contact-settings.php?status=no");
    }
}

if (isset($_POST['apisave'])) {
    $apissave = $db->prepare("UPDATE setting SET

    sett_analystic=:sett_analystic,
    sett_maps=:sett_maps,
    sett_zopim=:sett_zopim

    WHERE sett_id=0");

    $update = $apissave->execute(array(
        'sett_analystic' => $_POST['sett_analystic'],
        'sett_maps' => $_POST['sett_maps'],
        'sett_zopim' => $_POST['sett_zopim']
    ));
    if ($update) {
        header("Location: ../production/api-settings.php?status=ok");
    } else {
        header("location: ../production/api-settings.php?status=no");
    }
}

if (isset($_POST['mailsave'])) {
    $mailssave = $db->prepare("UPDATE setting SET

    sett_smtphost=:sett_smtphost,
    sett_smtpuser=:sett_smtpuser,
    sett_smtppassword=:sett_smtppassword,
    sett_smtpport=:sett_smtpport

    WHERE sett_id=0");

    $update = $mailssave->execute(array(
        'sett_smtphost' => $_POST['sett_smtphost'],
        'sett_smtpuser' => $_POST['sett_smtpuser'],
        'sett_smtppassword' => $_POST['sett_smtppassword'],
        'sett_smtpport' => $_POST['sett_smtpport']
    ));
    if ($update) {
        header("Location: ../production/mail-settings.php?status=ok");
    } else {
        header("location: ../production/mail-settings.php?status=no");
    }
}

if (isset($_POST['aboutsave'])) {
    $aboutssave = $db->prepare("UPDATE about SET

    about_title=:about_title,
    about_text=:about_text,
    about_video=:about_video,
    about_mission=:about_mission

    WHERE about_id=0");

    $update = $aboutssave->execute(array(
        'about_title' => $_POST['about_title'],
        'about_text' => $_POST['about_text'],
        'about_video' => $_POST['about_video'],
        'about_mission' => $_POST['about_mission']
    ));
    if ($update) {
        header("Location: ../production/about.php?status=ok");
    } else {
        header("Location: ../production/about.php?status=no");
    }
}
// if($_GET['userdelete']=="ok"){
//     $usersdelete=$db->prepare("DELETE FROM users where  users_id=:id");
//     $control=$usersdelete->execute(array(
//     'id'=>$_GET['users_id']
//  )); 
//  if($control){
//     header("Location: ../production/all-users.php?userdelete=ok");
//  }
//  else {
//     header("Location: ../production/all-users.php?userdelete=no");
//  }
// }

if (isset($_POST['logoupdate'])) {

    $uploads_dir = '../../img';
    @$tmp_name = $_FILES['sett_logo']["tmp_name"];
    @$name = $_FILES['sett_logo']["name"];
    $randomnum = rand(51000, 99999);
    $imgyol = substr($uploads_dir, 6) . "/" . $randomnum . $name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$randomnum$name");

    $logoupdate = $db->prepare("UPDATE setting SET sett_logo=:logo
    where sett_id=0");
    $logo = $logoupdate->execute(array(
        'logo' => $imgyol
    ));
    if ($logo) {
        header("Location: ../production/general-settings.php?logoupdate&status=ok");
    } else {
        header("Location: ../production/general-settings.php?logoupdate&status=no");
    }
}
if (isset($_POST['slideredit'])) {

    $slider_id = $_POST['slider_id'];
    $uploads_dir = '../../img';
    @$tmp_name = $_FILES['slider_photo']["tmp_name"];
    @$name = $_FILES['slider_photo']["name"];
    $randomnum = rand(51000, 99999);
    $imgyol = substr($uploads_dir, 6) . "/" . $randomnum . $name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$randomnum$name");

    $sliderupdate = $db->prepare("UPDATE slider SET 

    slider_photo=:photo,
    slider_title=:slider_title,
    slider_description=:slider_description,
    slider_cost=:slider_cost,
    slider_costpercent=:slider_costpercent,
    slider_costtext=:slider_costtext,
    slider_itembrand=:slider_itembrand,
    slider_itemdes=:slider_itemdes,
    slider_edittime=:slider_edittime

    where slider_id={$_POST['slider_id']}");
    $slider = $sliderupdate->execute(array(
        'photo' => $imgyol,
        'slider_title' => $_POST['slider_title'],
        'slider_description' => $_POST['slider_description'],
        'slider_cost' => $_POST['slider_cost'],
        'slider_costpercent' => $_POST['slider_costpercent'],
        'slider_costtext' => $_POST['slider_costtext'],
        'slider_itembrand' => $_POST['slider_itembrand'],
        'slider_itemdes' => $_POST['slider_itemdes'],
        'slider_edittime'=>$slideredittime
    ));
    if ($slider) {
        header("Location: ../production/slider-edit.php?slider_id=$slider_id&slideredit&status=ok");
    } else {
        header("Location: ../production/slider-edit.php?slider_id=$slider_id&slideredit&status=no");
    }
}


// date_default_timezone_set('Etc/GMT-4');
// $users_name = $_POST['users_name'];
// $users_age = $_POST['users_age'];
// $users_sex=$_POST['users_sex'];
// $users_regtime = date_create('now')->format('Y-m-d H:i:s');
// $users_mail = $_POST['users_mail'];
// $users_password = $_POST['users_password'];
// $users_yetki = $_POST['users_yetki'];
// if(isset($_POST['addnewuser'])){
//      $addnewuser=$db->prepare("insert into users(users_name,users_age,users_sex,users_regtime,users_mail,users_password,users_yetki) 
//      values('$users_name,$users_age,$users_sex,$users_regtime,$users_mail,$users_password,$users_yetki')");
//      $addnewuser->bind_param("sss",$users_name,$users_mail,$users_password);
//     $addnewuser->execute();
//     // $addnewuser->close();
//     // $db->close();

// }

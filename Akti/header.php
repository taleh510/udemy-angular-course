<?php
// ob_start();
// session_start();
// include 'connect.php'; 
// $userssorus=$db->prepare("SELECT * FROM users where users_mail=:mail");
// $userssorus->execute(array('mail' => $_SESSION['users_mail']));
// $logsor=$db->prepare("SELECT * FROM log");
// $logsor->execute();
// $say=$logsor->rowCount();
// $userscek=$userssorus->fetch(PDO::FETCH_ASSOC);
// $logcek=$logsor->fetch(PDO::FETCH_ASSOC);
// if($say==0){header("location:login.php?status=nopermittion");}

?>
<html>

<head>
  <link rel="icon" href="http://konullu.gov.az/img/icon.svg" type="image/svg" sizes="25x25">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <div style="text-align: center;"><a href="/"><img src="http://konullu.gov.az/img/logo-white.svg" alt="" style="height: 100px; width: 300px;"></a></div>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Azərbaycan Könüllü Təşkilatları İttifaqı</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background-color: #E6E6FA;
    }

    @media (max-width:500px) {
      body {
        padding-left: 20px;
        padding-right: 20px;
      }

      .box {

        padding-left: 10px;
        display: inline;
      }
    }

    .box {
      width: 800px;
      margin: 0 auto;

    }

    .active_tab1 {
      background-color: #fff;
      color: #333;
      font-weight: 600;
    }

    .inactive_tab1 {
      background-color: #f5f5f5;
      color: #333;
      cursor: not-allowed;
    }

    .has-error {
      border-color: #cc0000;
      background-color: #ffff99;
    }

    .container-box {
      position: relative;
      top: 0;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
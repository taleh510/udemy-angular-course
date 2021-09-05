<?php
ob_start();
session_start();
include 'connect.php';
$sqlog = "SELECT * FROM log";
$resultlog = $conn->query($sqlog);
// $result = $conn->query("SELECT COUNT(*) FROM `log`");
// $row = $result->fetch_row();
// $userssorus=$db->prepare("SELECT * FROM users where users_mail=:mail");
// $userssorus->execute(array('mail' => $_SESSION['users_mail']));
// $logsor=$db->prepare("SELECT * FROM log");
// $logsor->execute();
// $say=$logsor->rowCount();
// $userscek=$userssorus->fetch(PDO::FETCH_ASSOC);
// $logcek=$logsor->fetch(PDO::FETCH_ASSOC);
if ($_SESSION["logname"] == "") {
  header("location:login?status=nopermittion");
}
if (time() - $_SESSION['lasttime'] > 900) {
  header("location:login?status=nopermittion");
}
?>
<!doctype html>
<html>

<head>
  <link rel="icon" href="http://konullu.gov.az/img/icon.svg" type="image/svg" sizes="25x25">
  <div style="text-align:center;"><a href="/"><img src="http://konullu.gov.az/img/logo-white.svg" alt="" style="height: 100px;
        width: 100px;
        padding: 0;
        margin: 0 auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;"></a></div>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="UTF-8">
  <title>Azərbaycan Könüllüləri Təşkilatı İttifaqı</title>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/af-2.3.7/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/rr-1.2.8/datatables.min.css" />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/af-2.3.7/b-1.7.1/b-html5-1.7.1/b-print-1.7.1/rr-1.2.8/datatables.min.js"></script>
   <!-- <script src=""></script>  -->
  <!-- <link rel="stylesheet" href="" /> -->

  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.11.0/sb-1.2.0/sl-1.3.3/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.11.0/sb-1.2.0/sl-1.3.3/datatables.min.js"></script> -->
  <script>
    $(document).ready(function() {
      $('#tableid').DataTable({
        language: {
          url: '//cdn.datatables.net/plug-ins/1.10.25/i18n/Azerbaijan.json',
        },
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'print',
               { extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
              }
        ],
        select: true,
      });
    });
  </script>
  <style>
    @media (max-width:500px) {
      body {
        padding-left: 20px;
        padding-right: 20px;
      }

      #container0 {
        display: inline;
      }
    }
  </style>
</head>
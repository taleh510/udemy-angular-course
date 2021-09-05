<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
   header("location: registration");
}
ob_start();
$ad = $_POST['ad'];
$yas = $_POST['yas'];
$serya = $_POST['seriya'];
$fin = $_POST['fin'];
$gender = $_POST['gender'];
$tehsil = $_POST['tehsil'];
$fakulte = $_POST['fakulte'];
$ixtisas = $_POST['ixtisas'];
$nomre = $_POST['mobile_no'];
$mail = $_POST['mail'];
date_default_timezone_set('Etc/GMT-4');
$now = date_create('now')->format('Y-m-d H:i:s');
// mysql_query("SET NAMES 'utf8';");
include('connect.php');
if ($conn->connect_error) {
   die('Connection Failed : ' . $conn->connect_error);
} else {
   if ($ad != "" || $yas != "" || $seya != "" || $fin != "" || $fin != "" || $gender != "" || $tehsil != "" || $fakulte != "" || $ixtisas != "" || $nomre != "" || $mail != "") {
      $stmt = $conn->prepare("insert into Yeni(Ad,Yas,Serya,Fin,Cins,Tehsil,Ixtisas,Fakulte,Email,Nomre,Zaman)
   values('$ad','$yas','$serya','$fin','$gender','$tehsil','$ixtisas','$fakulte','$mail','$nomre','$now')");
      $stmt->bind_param("sssssssssss", $ad, $yas, $serya, $fin, $gender, $tehsil, $ixtisas, $fakulte, $mail, $nomre, $now);
      $stmt->execute();
      $stmt->close();

      $conn->close();
      header("location: complate");
      die();
   }
}

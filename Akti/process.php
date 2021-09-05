<?php
ob_start();
session_start();
include 'connect.php';
$sqlog = "SELECT * FROM log";
$resultlog = $conn->query($sqlog);
$row = $resultlog->fetch_assoc();
if (isset($_POST['logele'])) {
    $logname = $_POST['logname'];
    $logpass = $_POST['logpass'];
    if ($logname == $row["logname"] && $logpass == $row["logpass"]) {
        $_SESSION['logname'] = $logname;
        $_SESSION['lasttime'] = time();
        header("location: table");
        //exit;
    } else {
        header("location: login");
        //exit;
    }
}
?>
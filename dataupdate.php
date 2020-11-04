<?php session_start(); ?>
<?php
require('conn.php');
$id = $_SESSION['p_id'];
$img = $_POST['img'];
$fname = $_POST['fname'];
$cname = $_POST['cname'];
$lname = $_POST['lname'];
$nname = $_POST['nname'];
$dates = $_POST['dates'];
$years = $_POST['years'];
$cardid = $_POST['cardid'];
$caddress = $_POST['caddress'];
$province = $_POST['province'];

$joblv = $_POST['joblv'];
$jobname = $_POST['jobname'];
$jobaddress = $_POST['jobaddress'];
$jobprov = $_POST['jobprov'];

$hphone = $_POST['hphone'];
$email = $_POST['email'];
$facebook = $_POST['facebook'];

$sql = "UPDATE `customer` SET `img`= '" . $img . "' , `fname` = '" . $fname . "'
,lname = '" . $lname . "',nname = '" . $nname . "',dates = '" . $dates . "',years = '" . $years . "',caddress = '" . $caddress . "'
,province = '" . $province . "' ,`cardid`= '" . $cardid . "',`cname`= '" . $cname . "' WHERE p_id = '" . $id . "' ";
$stmt = $conn->query($sql);


$sql1 = "UPDATE `workplace` SET `joblv`= '" . $joblv . "' , `jobname` = '" . $jobname . "', `jobaddress` = '" . $jobaddress . "', `jobprov` = '" . $jobprov . "'
 WHERE p_id = '" . $id . "' ";
$stmt1 = $conn->query($sql1);


$sql2 = "UPDATE `contact` SET `hphone`= '" . $hphone . "' , `email` = '" . $email . "', `facebook` = '" . $facebook . "'
 WHERE p_id = '" . $id . "' ";
$stmt2 = $conn->query($sql2);
Header("Location: index.php");
?>
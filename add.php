<?php
require 'conn.php';
if(isset($_FILES['img'])){
$name_file = $_FILES['img']['name'];
$tmp_name =  $_FILES['img']['tmp_name'];
$locate_img ="img/";
move_uploaded_file($tmp_name,$locate_img.$name_file);

$sql = "INSERT INTO customer (years,fname,cname,lname,nname,dates,img,caddress,province,cardid) VALUES (:years, :fname, :cname, :lname, :nname, :dates, :img , :caddress, :province,:cardname)";
$stmt = $conn->prepare($sql);	
$stmt->bindParam(':years', $_POST['years']);
$stmt->bindParam(':fname', $_POST['fname']);
$stmt->bindParam(':cname', $_POST['cname']);
$stmt->bindParam(':lname', $_POST['lname']);
$stmt->bindParam(':nname', $_POST['nname']);
$stmt->bindParam(':dates', $_POST['dates']);
$stmt->bindParam(':cardname', $_POST['cardname']);
$stmt->bindParam(':img', $name_file);
$stmt->bindParam(':caddress', $_POST['caddress']);
$stmt->bindParam(':province', $_POST['province']);

	if ($stmt->execute()) :
		$message = 'Successfully add new customer';
	else :
		$message = 'Fail to add new customer';
	endif;
	$conn = null;
}
header("location:index.php");

	?>

	<?php

	require 'conn.php';
	$sql = "INSERT INTO workplace (joblv,jobname,jobaddress,jobprov) VALUES (:joblv, :jobname, :jobaddress, :jobprov)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':joblv', $_POST['joblv']);
	$stmt->bindParam(':jobname', $_POST['jobname']);
	$stmt->bindParam(':jobaddress', $_POST['jobaddress']);
	$stmt->bindParam(':jobprov', $_POST['jobprov']);

	if ($stmt->execute()) :
		$message = 'Successfully add new customer';
	else :
		$message = 'Fail to add new customer';
	endif;
	$conn = null;
	header("location:index.php");

	?>


<?php
require 'conn.php';
$sql = "INSERT INTO contact (hphone,email,facebook) VALUES (:hphone,:email,:facebook)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':hphone', $_POST['hphone']);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':facebook', $_POST['facebook']);

if ($stmt->execute()) :
	$message = 'Successfully add new customer';
else :
	$message = 'Fail to add new customer';
endif;
$conn = null;
header("location:index.php");
?>


<?php  
session_start();
if($_SESSION['status_login'] == ""){
	header("location:../login");
}
include '../../../config/dbconfig.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<?php  
	include '../../../views/v_home/v_upload_berkas/head_upload_berkas.php';
	include '../../../views/v_home/v_upload_berkas/body_upload_berkas.php';
	include '../../../views/v_home/v_upload_berkas/footer_upload_berkas.php'
?>
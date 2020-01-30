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
	include '../../../views/v_home/v_report_sertifikat/head_report_sertifikat.php';
	include '../../../views/v_home/v_report_sertifikat/body_report_sertifikat.php';
	include '../../../views/v_home/v_report_sertifikat/footer_report_sertifikat.php'
?>
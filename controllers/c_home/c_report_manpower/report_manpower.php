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
	include '../../../views/v_home/v_report_manpower/head_report_manpower.php';
	include '../../../views/v_home/v_report_manpower/body_report_manpower.php';
	include '../../../views/v_home/v_report_manpower/footer_report_manpower.php'
?>
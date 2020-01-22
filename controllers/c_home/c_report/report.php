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
	include '../../../views/v_home/v_report/head_report.php';
	include '../../../views/v_home/v_report/body_report.php';
	include '../../../views/v_home/v_report/footer_report.php'
?>
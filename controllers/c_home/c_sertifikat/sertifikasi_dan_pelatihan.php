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
	include '../../../views/v_home/v_sertifikat/head_sertifikat.php';
	include '../../../views/v_home/v_sertifikat/body_sertifikat.php';
	include '../../../views/v_home/v_sertifikat/footer_sertifikat.php'
?>
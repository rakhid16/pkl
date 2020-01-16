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
	include '../../../views/v_home/v_karyawan_aktif/head_aktif.php';
	include '../../../views/v_home/v_karyawan_aktif/body_aktif.php';
	include '../../../views/v_home/v_karyawan_aktif/footer_aktif.php'
?>
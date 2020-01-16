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
	include '../../../views/v_home/v_karyawan_nonaktif/head_nonaktif.php';
	include '../../../views/v_home/v_karyawan_nonaktif/body_nonaktif.php';
	include '../../../views/v_home/v_karyawan_nonaktif/footer_nonaktif.php'
?>
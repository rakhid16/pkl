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
	include '../../../views/v_home/v_master_pelatihan/head_master_pelatihan.php';
	include '../../../views/v_home/v_master_pelatihan/body_master_pelatihan.php';
	include '../../../views/v_home/v_master_pelatihan/footer_master_pelatihan.php'
?>
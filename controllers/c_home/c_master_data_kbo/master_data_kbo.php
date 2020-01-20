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
	include '../../../views/v_home/v_master_data_kbo/head_master.php';
	include '../../../views/v_home/v_master_data_kbo/body_master_kbo.php';
	include '../../../views/v_home/v_master_data_kbo/footer_master.php'
?>
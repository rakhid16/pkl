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
	include '../../../views/v_home/v_master_data_cc/head_master.php';
	include '../../../views/v_home/v_master_data_cc/body_master_cc.php';
	include '../../../views/v_home/v_master_data_cc/footer_master.php'
?>
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
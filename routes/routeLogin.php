<?php
	session_start();
	include '../config/dbconfig.php';

	// SQL INJECT STEP 1
	$nama = mysqli_real_escape_string(connDB(), $_POST['nama']);
	$sandi = mysqli_real_escape_string(connDB(), $_POST['sandi']);

	$data1 = "admin";
	$data2 = "admin";

	// SQL INJECT STEP 2
	if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
		header("location:../login?status=error");
	}
	elseif(!preg_match("/^[a-zA-Z ]*$/",$sandi)){
		header("location:../login?status=error");	
	}
	elseif((strlen($nama)) > 6 && strlen($sandi > 6)){
		header("location:../login?status=error");
	}
	else{
		if ($data1 == $nama && $data2 == $sandi) {
			
			$_SESSION['nama'] = $nama;
			$_SESSION['status_login'] = "login";
			header("location:../home");
		}
		else{
			header("location:../login?status=salah");
		}
	}
?>
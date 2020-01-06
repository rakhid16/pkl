<?php
	session_start();
	include '../config/dbconfig.php';

	// SQL INJECT
	$nama = mysqli_real_escape_string(connDB(), $_POST['nama']);
	$sandi = mysqli_real_escape_string(connDB(), $_POST['sandi']);

	$data1 = "admin";
	$data2 = "admin";
	// $query_data = mysqli_query(connDB(), "SELECT * FROM coba WHERE nama='$nama' and sandi='$sandi'");
	// $cek = mysqli_num_rows($query_data);

	if ($data1 == $nama && $data2 == $sandi) {
		$_SESSION['nama'] = $nama;
		$_SESSION['status'] = "login";
		header("location:../home/");
	}
	else{
		header("location:../login/?status=gagal");
	}
?>
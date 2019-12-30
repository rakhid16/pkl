<?php  
session_start();
include '../config/dbconfig.php';

// SQL INJECT
$nama = mysqli_real_escape_string(connDB(),$_POST['nama']);
$sandi = mysqli_real_escape_string(connDB(),$_POST['sandi']);

// $nama = $_POST['nama'];
// $sandi = $_POST['sandi'];


$query_data = mysqli_query(connDB(), "SELECT * FROM coba WHERE nama='$nama' and sandi='$sandi'");
$cek = mysqli_num_rows($query_data);

if ($cek > 0) {
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";
	header("location:../home/");
}
else{
	// echo '<script>alert("Login Gagal !!!");</script>';
	header("location:../login/?status=gagal");
}
?>
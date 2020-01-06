<?php  
	function connDB(){
		$dbServer = 'localhost';
		$dbUser = 'root';
		$dbPass = '';
		$dbName = 'pekerja_mor_v';

		$conn = mysqli_connect($dbServer, $dbUser, $dbPass);

		if (! $conn) {
			die("Koneksi Gagal");
		}
		else{
			mysqli_select_db($conn, $dbName);
		}

		return $conn;
	}

	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB1', 'pekerja_mor_v');

	// Buat Koneksinya
	$db1 = new mysqli(HOST, USER, PASS, DB1);
?>
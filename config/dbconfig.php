<?php  
	function connDB(){
		$dbServer = 'localhost';
		$dbUser = 'root';
		$dbPass = '';
		$dbName = 'users';

		$conn = mysqli_connect($dbServer, $dbUser, $dbPass);

		if (! $conn) {
			die("Koneksi Gagal");
		}
		else{
			mysqli_select_db($conn, $dbName);
		}

		return $conn;
	}
?>
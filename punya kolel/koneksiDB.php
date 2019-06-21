<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "project";
//option
mysql_connect($host, $user, $password);
$config = mysql_select_db($database);

if(!$config)
{
	die("Koneksi Gagal");
}
else
{
	echo "<b>Koneksi Sukses<b>";
}

?>
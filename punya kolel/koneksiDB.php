<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "project";
//option
mysql_connect($host, $user, $password);
$config = mysql_select_db($database) or die('Koneksi Gagal');

?>

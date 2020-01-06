<?php 

include '../config/dbconfig.php';

  $status = 'Aktif';
  $notif = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['nopeg'])) {
          //query SQL
          $nopeg = $_GET['nopeg'];
          $query = "UPDATE data_karyawan SET status1='$status' WHERE nopeg='$nopeg'"; 

          //eksekusi query
          $result = mysqli_query(connDB(),$query);

          if ($result) {
            $notif = 'ok';
          }
          else{
            $notif = 'err';
          }

          //redirect ke halaman lain
          header('Location: http://localhost/pertamina/home/karyawanNonAktif?notif='.$notif);
          exit;
      }  
  }
<?php 

include '../../pertamina/config/dbconfig.php';

  $status = 'Aktif';
  $notif = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['nopeg'])) {
          //query SQL
          $nopeg = $_POST['nopeg'];
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
          header('Location: ../home/karyawan_nonaktif?notif='.$notif);
          exit;
      }  
  }
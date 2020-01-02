<?php 

include '../config/dbconfig.php';

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['nopeg'])) {
          //query SQL
          $nopeg_upd = $_GET['nopeg'];
          $query = "DELETE FROM data_karyawan WHERE nopeg = '$nopeg_upd'"; 

          //eksekusi query
          $result = mysqli_query(connDB(),$query);

          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }

          //redirect ke halaman lain
          header('Location: home.php?status='.$status);
      }  
  }
<?php 
  include ('../config/dbconfig.php'); 

  $status = '';
  $result = '';
  
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['nopeg'])) {
          //query SQL
          $nopeg = $_GET['nopeg'];
          $query = "SELECT * FROM data_karyawan WHERE nopeg = '$nopeg'"; 

          //eksekusi query
          $result = mysqli_query(connDB(),$query);
      }  
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $jabatan = $_POST['jabatan'];
      $subarea = $_POST['subarea'];
      //query SQL
      $sql = "UPDATE data_karyawan SET nama='$nama', email='$email', jabatan='$jabatan' WHERE subarea='$subarea'";

      //eksekusi query
      $result = mysqli_query(connDB(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: home.php?status='.$status);
  }
  

?>
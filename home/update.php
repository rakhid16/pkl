<?php 
  include ('../config/dbconfig.php'); 

  $notif = '';
  $result = '';
      //menangkap data post
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nopeg = $_POST['nopeg'];
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $jabatan = $_POST['jabatan'];
      $subarea = $_POST['subarea'];
      //query SQL
      $sql = "UPDATE data_karyawan SET nama='$nama', email='$email', jabatan='$jabatan', subarea='$subarea' WHERE nopeg='$nopeg'";

      //eksekusi query
      $result = mysqli_query(connDB(),$sql);
      if ($result) {
        $notif = 'ok';
      }
      else{
        $notif = 'err';
      }

      //redirect ke halaman lain
      header('Location: ./?notif='.$notif);
  }
  

?>
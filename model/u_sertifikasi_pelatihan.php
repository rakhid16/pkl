<?php 
  include '../../pertamina/config/dbconfig.php';

  $notif = '';
  $result = '';
      //menangkap data post
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $no_sertif = $_POST['no_sertifikat'];
      $nopeg = $_POST['nopeg'];
      $start_date = $_POST['start_date'];
      $expired_date = $_POST['expired_date'];
      $kode = $_POST['kode'];
      $file_name = $_POST['file_name'];
      //query SQL
      $sql = "UPDATE pelatihan_sertifikasi SET no_sertifikat='$no_sertif', nopeg='$nopeg', start_date='$start_date', expired_date='$expired_date', kode='$kode', file_name='$file_name' WHERE nopeg='$nopeg'";

      //eksekusi query
      $result = mysqli_query(connDB_versi1(),$sql);
      if ($result) {
        $notif = 'ok';
      }
      else{
        $notif = 'err';
      }

      //redirect ke halaman lain
      header('Location: ../home/sertifikat?notif='.$notif);
  }
  

?>
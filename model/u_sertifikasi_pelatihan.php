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
      $sql = "UPDATE pelatihan_sertifikasi SET no_sertifikat='$no_sertif', nopeg='$nopeg', start_date='$start_date', expired_date='$expired_date', kode='$kode', file_name='$file_name' WHERE no_sertifikat='$no_sertif'";

      //eksekusi query
      $result = mysqli_query(connDB(),$sql);
      if ($result) {
        $notif = 'sukses';
      }
      else{
        $notif = 'error';
      }

      //redirect ke halaman lain
      header('Location: ../home/sertifikat?notif='.$notif.$sql);
  }
  

?>
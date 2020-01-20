<?php 
  include ('../../pertamina/config/dbconfig.php'); 

  $notif = '';
  $result = '';
      //menangkap data post
  if (isset($_POST['ubah_kode'])) {

      $kbo_lama = $_POST['s_judul'];
      $kbo_baru = $_POST['kode_baru'];
      //query SQL
      $sql = "UPDATE master_pelatihan_sertifikasi SET kode='$kbo_baru' WHERE kode='$kbo_lama'";

      //eksekusi query
      $result = mysqli_query(connDB(),$sql);
      if ($result) {
        $notif = 'sukses';
      }
      else{
        $notif = 'error';
      }

      //redirect ke halaman lain
      header('Location: http://localhost/pertamina/home/master_pelatihan?notif='.$notif);
      exit;
  }
  

?>
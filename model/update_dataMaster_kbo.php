<?php 
  include ('../config/dbconfig.php'); 

  $notif = '';
  $result = '';
      //menangkap data post
  if(isset($_POST['ubah_kode'])){
      $kbo_lama = $_POST['s_fungsi'];
      $kbo_baru = $_POST['kode_baru'];
      //query SQL
      $sql = "UPDATE data_kbo SET kbo='$kbo_baru' WHERE kbo='$kbo_lama'";

      //eksekusi query
      $result = mysqli_query(connDB(),$sql);
      if ($result) {
        $notif = 'ok';
      }
      else{
        $notif = 'err';
      }

      //redirect ke halaman lain
      header('Location: http://localhost/pertamina/home/data_master?notif='.$notif);
      exit;
  }
  

?>
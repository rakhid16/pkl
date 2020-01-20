<?php 
  include ('../../pertamina/config/dbconfig.php'); 

  $notif = '';
  $result = '';
      //menangkap data post
  if (isset($_POST['ubah_kode'])) {

      $cc_lama = $_POST['s_cc'];
      $cc_baru = $_POST['kode_baru'];
      //query SQL
      $sql = "UPDATE cost_center SET kode_cc='$cc_baru' WHERE kode_cc='$cc_lama'";

      //eksekusi query
      $result = mysqli_query(connDB(),$sql);
      if ($result) {
        $notif = 'sukses';
      }
      else{
        $notif = 'error';
      }

      //redirect ke halaman lain
      header('Location: http://localhost/pertamina/home/master_data_cc?notif='.$notif);
      exit;
  }
  

?>
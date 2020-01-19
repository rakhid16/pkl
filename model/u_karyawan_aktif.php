<?php 
  include '../../pertamina/config/dbconfig.php';

  $notif = '';
  $result = '';
      //menangkap data post
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nopeg = $_POST['nopeg'];
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $jabatan = $_POST['position'];
      
      //query SQL
      $sql = "UPDATE data_karyawan, posisi SET data_karyawan.nama='$nama', data_karyawan.email='$email', posisi.position='$jabatan' WHERE data_karyawan.id_position = posisi.id_position AND data_karyawan.nopeg='$nopeg'";

      //eksekusi query
      $result = mysqli_query(connDB(),$sql);
      if ($result) {
        $notif = 'sukses';
      }
      else{
        $notif = 'error';
      }

      //redirect ke halaman lain
      header('Location: ../home/karyawan_aktif?notif='.$notif);
  }
  

?>
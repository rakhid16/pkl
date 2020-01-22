<?php

include '../config/dbconfig.php';
	if($_POST['upload_file']){
	$notif = '';
	$s_kode = $_POST['s_kode'];
	$s_nopeg = $_POST['s_nopeg'];
	$no_sertif = $_POST['no_sertifikat'];
	$tanggal_file = $_POST['tanggal_file'];
	$exp_date = $_POST['exp_date'];
	$edit_file = $s_kode.'_'.$s_nopeg.'_'.$tanggal_file;
	$ekstensi_diperbolehkan	= array('pdf','');
	$nama = $_FILES['pilih_file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['pilih_file']['size'];
	$file_tmp = $_FILES['pilih_file']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 8000000 ){ //	100.000.000 [100mb]		
		    		
			$query = "INSERT INTO pelatihan_sertifikasi (no_sertifikat, nopeg, start_date, expired_date, kode, file_name) VALUES ('$no_sertif','$s_nopeg','$tanggal_file','$exp_date','$s_kode','$edit_file')";			
			$result = mysqli_query(connDB(),$query);
				if($result){
					$notif = 'sukses';
					move_uploaded_file($file_tmp, '../views/v_home/v_upload_berkas/data_berkas/'.$s_kode."_".$s_nopeg."_".$tanggal_file.".pdf");
					header('Location: ../home/upload_berkas?notif='.$notif);
          			exit;
				}else{
				$notif = 'gagal';
				header('Location: ../home/upload_berkas?notif='.$notif);
          		exit;
			}
			}else{
			$notif = 'ukuran_terlalu_besar';
			header('Location: ../home/upload_berkas?notif='.$notif);
          	exit;
			}
		}else{
			$notif = 'ekstensi_tidak_diperbolehkan';
			header('Location: ../home/upload_berkas?notif='.$notif);
          	exit;
		}
    }
?>

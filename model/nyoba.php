<?php
include '../config/dbconfig.php';
	if($_POST['upload']){
	$notif = '';
	$edit_file = ($_POST['edit_file']);
	$ekstensi_diperbolehkan	= array('pdf');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 104857600 // 100 mb
			 ){			
			move_uploaded_file($file_tmp, '../views/v_home/v_upload_berkas/data_berkas/'.$edit_file.".pdf");
			$query = "INSERT INTO upload VALUES(NULL,'$edit_file.pdf')";
			$result = mysqli_query(connDB(),$query);
				if($result){
					$notif = 'ok';
					header('Location: ../home/op?notif='.$notif);
          			exit;
				}else{
				$notif = 'gagal';
				header('Location: ../home/op?notif='.$notif);
          		exit;
			}
			}else{
			$notif = 'ukuran_terlalu_besar';
			header('Location: ../home/op?notif='.$notif);
          	exit;
			}
		}else{
			$notif = 'ekstensi_tidak_diperbolehkan';
			header('Location: ../home/op?notif='.$notif);
          	exit;
		}
    }
?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "krywn_mor_v";
    include_once '../config/dbconfig.php';

    // MEMBUAT KONEKSI
    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // MELAKUKAN PENGECEKAN KONEKSI
    if ($koneksi->connect_error){
        die("Koneksi ke pangkalan data gagal : " . $koneksi->connect_error);
    } 

    if($_POST['no_sertifikat']) {
        $no_sertifikat = $_POST['no_sertifikat'];

        // AMBIL DATA BERDASARKAN ID DAN MENAMPILKANNYA KE DALAM FORM MODAL BOOTSTRAP
        $sql = "SELECT DISTINCT no_sertifikat, file_name FROM pelatihan_sertifikasi WHERE no_sertifikat = '$no_sertifikat'";
        $result = $koneksi->query($sql);


        if (is_array($result) || is_object($result)){
            foreach ($result as $data){ ?>
                <div class="form-group">

                    <input type="hidden" class="form-control" name="no_sertifikat" value="<?php echo $data['no_sertifikat']; ?>">
                </div>
                <div class="form-group">
                    <center><iframe src="../views/v_home/v_upload_berkas/data_berkas/<?php echo $data['file_name'].'.pdf'; ?>" height="500px" width="1000px"></iframe></center>
                </div>
                
                <div class="modal-footer">

                  <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>

        <?php }}
    } $koneksi->close();
?>
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
        $sql = "SELECT DISTINCT no_sertifikat, nopeg, start_date, expired_date, kode, file_name FROM pelatihan_sertifikasi WHERE no_sertifikat = '$no_sertifikat'";
        $result = $koneksi->query($sql);


        if (is_array($result) || is_object($result)){
            foreach ($result as $data){ ?>

            <form action="../../pertamina/model/u_sertifikasi_pelatihan.php" method="post">
                <div class="form-group">
                    <label>No Sertifikat</label>
                    <input type="text" class="form-control" name="no_sertifikat" value="<?php echo $data['no_sertifikat']; ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label>No Pegawai</label>
                    <input type="text" class="form-control" name="nopeg" value="<?php echo $data['nopeg']; ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label>Start Date</label>
                    <input type="date" class="form-control" name="start_date" value="<?php echo $data['start_date']; ?>">
                </div>
                <div class="form-group">
                    <label>Expired Date</label>
                    <input type="date" class="form-control" name="expired_date" value="<?php echo $data['expired_date']; ?>">
                </div>
                <div class="form-group">
                    <label>Kode</label>
                    <input type="text" class="form-control" name="kode" value="<?php echo $data['kode']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama File </label>
                    <input type="text" class="form-control" name="file_name" value="<?php echo $data['file_name']; ?>">
                </div>
                <div class="modal-footer">
                  <button class="btn btn-success" type="submit">Simpan</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </form>
        <?php }}
    } $koneksi->close();
?>
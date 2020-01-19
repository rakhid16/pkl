<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "krywn_mor_v";

    // MEMBUAT KONEKSI
    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // MELAKUKAN PENGECEKAN KONEKSI
    if ($koneksi->connect_error){
        die("Koneksi ke pangkalan data gagal : " . $koneksi->connect_error);
    } 

    if($_POST['nopeg']) {
        $nopeg = $_POST['nopeg'];

        // AMBIL DATA BERDASARKAN ID DAN MENAMPILKANNYA KE DALAM FORM MODAL BOOTSTRAP
        $sql = "SELECT * FROM data_karyawan WHERE nopeg = $nopeg";
        $result = $koneksi->query($sql);

        if (is_array($result) || is_object($result)){
            foreach ($result as $data){ ?>

            <form action="../../pertamina/model/q_aktifkan_karyawan.php" method="post">
                <div class="form-group">
                    <label>No Pegawai</label>
                    <input type="text" class="form-control" name="nopeg" value="<?php echo $data['nopeg']; ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" readonly="readonly">
                </div>
                <h4>Anda yakin mau melakukannya?</h4>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Iya</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </form>
        <?php }}
    } $koneksi->close();
?>
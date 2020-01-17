<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pekerja_mor_v";

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
                <input type="hidden" name="nopeg" value="<?php echo $data['nopeg']; ?>">
                <h4>Anda yakin mau melakukannya?</h4>
                <div class="modal-footer">
                  <button class="btn btn-success" type="submit">Iya</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                </div>
            </form>
        <?php }}
    } $koneksi->close();
?>
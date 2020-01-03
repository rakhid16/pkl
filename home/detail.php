<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pekerja_mor_v";

    // membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $dbname);

    // melakukan pengecekan koneksi
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    } 

    if($_POST['nopeg']) {
        $nopeg = $_POST['nopeg'];
        // mengambil data berdasarkan id
        // dan menampilkan data ke dalam form modal bootstrap
        $sql = "SELECT * FROM data_karyawan WHERE nopeg = $nopeg";
        $result = $koneksi->query($sql);
        if (is_array($result) || is_object($result)) 
        {
        



        foreach ($result as $data) { ?>


        <form action="update.php" method="post">
            <input type="hidden" name="nopeg" value="<?php echo $data['nopeg']; ?>">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>">
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" class="form-control" name="jabatan" value="<?php echo $data['jabatan']; ?>">
            </div>
            <div class="form-group">
                <label>Sub Area</label>
                <input type="text" class="form-control" name="subarea" value="<?php echo $data['subarea']; ?>">
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>
        
        <?php }}
    }
    $koneksi->close();
?>
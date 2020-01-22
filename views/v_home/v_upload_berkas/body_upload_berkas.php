<body class="materialdesign">
    <div class="wrapper-pro">

        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="../static/img/admin_photo.png" style="width:80px; height:80px" />
                    </a>
                    <h3>Spongebob</h3>
                    <p>Squarepants</p>
                </div>
<?php  
    include '../../../views/v_home/v_karyawan_aktif/sidebar_aktif.php';
?>

<div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">

                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="../static/img/log.png" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <!-- PASS -->
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="../routes/routeLogout.php" class="nav-link dropdown-toggle">
                                                <span style="float: right;">Keluar <i class="fas fa-sign-out-alt"></i> </span>
                                            </a>
                                        </li>
                                        
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php include '../../../views/v_home/v_karyawan_aktif/view_mobile_aktif.php' ?>

            <!-- welcome Project, sale area start-->
            <div class="welcome-adminpro-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        </div>
                    </div>
                </div>
            </div>
            <!-- welcome Project, sale area start-->
            <!-- stockprice, feed area start-->
            <div class="stockprice-feed-project-area">
                <div class="container-fluid">
                    <div class="row">
                    </div>
                </div>
            </div>
            <!-- stockprice, feed area end-->
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd" style="margin-top: 15px;">

                                <p align=center style="font-size:20px; font-color: black">Unggah Berkas</p>
                                </div>

                                    <div class="sparkline8-graph">
                                <?php 

                                        if(isset($_GET['notif'])){
                                          if($_GET['notif']=="gagal"){
                                            echo '<center style="color:#DA251C; font-weight: bold" class="alert alert-danger">Gagal Upload File, Dicek Kembali!</center>';
                                          }
                                          elseif($_GET['notif']=="ekstensi_tidak_diperbolehkan"){
                                            echo '<center style="color:#DA251C; font-weight: bold" class="alert alert-danger">Ekstensi File Tidak Diperbolehkan!</center>';
                                          }
                                          elseif($_GET['notif']=="ukuran_terlalu_besar"){
                                            echo '<center style="color:#DA251C; font-weight: bold" class="alert alert-danger">Ukuran Terlalu Besar!</center>';
                                          }
                                          else{
                                            echo '<img id="imageID" src="../static/assetUploadBerkas/img/load_bar_berkas.gif">';
                                         }
                                        }
                                ?>
                                        <div class="toolbar">
                                            <form  action="../../pertamina/model/m_upload_berkas.php" method="post" enctype="multipart/form-data" style="height: 450px" class="md-form">
                                            <?php
                                                require_once '../../../config/dbconfig.php';
                                                $query = "SELECT distinct kode, judul from master_pelatihan_sertifikasi ORDER BY judul ASC";
                                                $result = mysqli_query(connDB(), $query);
                                            ?>

                                            <label style="float: left; margin-top: 5px">No Sertifikat&emsp;&emsp;&emsp; : &emsp;</label><input type="text" class="form-control" name="no_sertifikat" placeholder="No Sertifikat" style="height: 30px; padding: 4px; width: 300px; margin-top: 10px; margin-bottom: 25px;" required>

                                            <label style="float: left; margin-top: 5px">Kategori/Judul&emsp;&emsp;&nbsp; : &emsp;</label>
                                            <div class="judul" style="margin-left: 0px; float: left;">
                                            <select name="s_kode" id="s_kode" class="chosen" style="float: left; width: 330px !important;margin-left: 0px;" required>
                                                    <option value="">Pilih Kategori/Judul -- Kode</option>
                                                    <?php while ($data = mysqli_fetch_assoc($result)) {?>
                                                        <option style="font-size: 12px !important; text-align: left;" value="<?php echo $data['kode'];?>" required>
                                                            <?php echo $data['judul']."&nbsp;"."---"."&nbsp;".$data['kode']."<br>";?>
                                                            <?php if ($data['kode'] == 1 ){ echo "selected"; } ?>
                                                        </option>
                                                    <?php } ?>
                                            </select></div><br><br><br>
                                            <?php
                                                require_once '../../../config/dbconfig.php';
                                                $query = "SELECT distinct nopeg, nama from data_karyawan ORDER BY nama ASC";
                                                $result = mysqli_query(connDB(), $query);
                                            ?>

                                            <label style="float: left; margin-top: 5px">Nama Pegawai&emsp;&emsp; : &emsp;</label>
                                            <div class="judul" style="margin-left: 0px; float: left;">
                                            <select name="s_nopeg" id="s_nopeg" class="chosen" style="float: left; width: 330px !important;margin-left: 0px;" required>
                                                    <option value="">Pilih Nama Pegawai -- No Pegawai</option>
                                                    <?php while ($data = mysqli_fetch_assoc($result)) {?>
                                                        <option style="font-size: 12px !important; text-align: left;" value="<?php echo $data['nopeg'];?>" required>
                                                            <?php echo $data['nama']."&nbsp;"."---"."&nbsp;".$data['nopeg']."<br>";?>
                                                            <?php if ($data['nopeg'] == 1 ){ echo "selected"; } ?>
                                                        </option>
                                                    <?php } ?>
                                            </select></div><br><br><br>

                                            <label style="float: left; margin-top: 5px">Pelatihan&emsp;</label><input type="radio" name="radios" value="456" style="float: left; margin-top: 10px">

                                            <label style="float: left; margin-top: 5px">&emsp;&emsp;&emsp;&emsp;Sertifikasi&emsp;</label><input type="radio" name="radios" value="123" style="float: left; margin-top: 10px"><br><br><br>
                                            
                                            <div id="info_123" style="display:none;">
                                                <label style="float: left; margin-top: 5px">Start Date&emsp;&emsp;&emsp;&emsp;&nbsp; : &emsp;</label>
                                                <input id="tanggal_file" type="date" class="form-control" name="tanggal_file" placeholder="Start Date" style="float: left; width: 250px;" value="2000-01-01" required><br><br><br>
                                            </div>

                                            <div id="info_abc" style="display:none;">
                                                <label style="float: left; margin-top: 5px">Expired Date&emsp;&emsp;&emsp; : &emsp;</label>
                                                <input id="exp_date" type="date" class="form-control" name="exp_date" placeholder="Expired Date" style="float: left; width: 250px;" value=""><br><br><br>  
                                            </div>

                                            <input type="file" name="pilih_file" value="Pilih File" style="background-color: #f0ede9; border-radius: 5px; height: 30px; padding: 4px; width: 250px; margin-top: 5px;" required>
                                            
                                            <input type="hidden" name="edit_file" value="<?php echo $s_kode.'_'.$s_nopeg.'_'.$tanggal_file; ?>">
                                            <p align="left"><input id="btn" type="submit" name="upload_file" class="btn btn-primary" value="Upload" style="margin-top: 20px; float: left; margin-left: 5px"></p>  
                                        </form>           

                                            </div>
                                        </div> 
                                            


                                        <div class="datatable-dashv1-list custom-datatable-overright">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data table area End-->
        </div>
    </div>


</body>
<script type="text/javascript">
    $(":input[type='radio']").on("change", function () {
    if ($(this).prop("checked") && $(this).val() == 123) $("#info_123").show();
        else $("#info_abc").hide();
});
</script>

<script type="text/javascript">
    $(":input[type='radio']").on("change", function () {
    if ($(this).prop("checked") && $(this).val() != 123) $("#info_123").show();
       else $("#info_abc").show();
});
</script>
</html>
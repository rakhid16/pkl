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
            
 <!-- Mobile Menu END -->
 <?php include '../../../views/v_home/v_karyawan_aktif/view_mobile_aktif.php' ?>
            <!-- Breadcome start-->
            
            <!-- Breadcome End-->
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


                                <?php
                                    $s_fungsi="";
                                    $kode_baru="";
                                    if (isset($_POST['search'])) {
                                        $s_fungsi = $_POST['s_fungsi'];
                                        $kode_baru = $_POST['kode_baru'];
                                    }
                                ?>
                                <p align=center style="font-size:20px; font-color: black">Ubah KBO</p>
                                </div>

                                    <div class="sparkline8-graph">
                                <?php 

                                        if(isset($_GET['notif'])){
                                          if($_GET['notif']=="gagal"){
                                            echo '<center style="color:#DA251C; font-weight: bold">Gagal Upload File, Dicek Kembali!</center>';
                                          }
                                          elseif($_GET['notif']=="ekstensi_tidak_diperbolehkan"){
                                            echo '<center style="color:#DA251C; font-weight: bold" class="alert alert-danger">Ekstensi File Tidak Diperbolehkan!</center>';
                                          }
                                          elseif($_GET['notif']=="ukuran_terlalu_besar"){
                                            echo '<center style="color:#DA251C; font-weight: bold">Ukuran Terlalu Besar!</center>';
                                          }
                                          else{
                                            echo '<center style="color:#DA251C; font-weight: bold">Berhasil Upload File!</center>';
                                         }
                                        }
                                ?>

                                        <div class="toolbar">
                                            <div>
                                        <?php
                                                    require_once '../../../config/dbconfig.php';
                                                    $query = "SELECT distinct fungsi, kbo from data_kbo ORDER BY fungsi ASC";
                                                    $result = mysqli_query(connDB(), $query);
                                            ?>

                                                <select name="s_fungsi" id="s_fungsi" class="form-control-filter2 chosen" style="margin-left: 0px; margin-right=1000px;">
                                                    <option value="">Pilih Kode KBO -- Fungsi</option>
                                                    <?php while ($data = mysqli_fetch_assoc($result)) {?>
                                                        <option style="float: left;" value="<?php echo $data['kbo'];?>">
                                                            <?php echo $data['kbo']."&nbsp;"."---"."&nbsp;".$data['fungsi']."<br>";?>
                                                            <?php if ($data['kbo'] == 1 ){ echo "selected"; } ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>

                                                <input type="text" class="form-input-data" name="kode_baru">
                                                <a title='Ubah Kode KBO' href='#myModal1' id='custId' data-toggle='modal' data-id=".$data['kbo']."><button type="submit" class="btn btn-danger btn-filter-search btn-ubah-kode" style="border-radius: 5px;">Ubah Kode KBO</button></a>
                                                    <!-- <button type="submit" name="ubah_kode" class="btn btn-danger btn-ubah-kode">Ubah Kode</button> -->
                                                    <br>
                                                    <br>
</div>


                                        </div> 
                                        
                                                                                                                   
                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table>
                                            <thead>
                                                <tbody>

                                                </tbody>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>



            </div>
            <!-- Data table area End-->

        </div>
    </div>


    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Aktifkan Karyawan</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
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
                                <?php
                                    $s_fungsi="";
                                    $kode_baru="";
                                    if (isset($_POST['search'])) {
                                        $s_fungsi = $_POST['s_fungsi'];
                                        $kode_baru = $_POST['kode_baru'];
                                    }
                                ?>
                                <p align=center style="font-size:20px; font-color: black">Ubah Kode KBO</p>
                                </div>

                                    <div class="sparkline8-graph">
                                <?php 
                                        if(isset($_GET['notif'])){
                                          if($_GET['notif']=="error"){
                                            echo '<center style="color:#DA251C; font-weight: bold" class="alert alert-danger">Error, Dicek Kembali!</center>';
                                          }
                                          else{
                                            echo '<center style="color:#519c05; font-weight: bold" class="alert alert-success" role="alert">Berhasil Diupdate!</center>';
                                           }
                                        }
                                        
                                ?>
                                        <div class="toolbar">
                                            <form action="../model/update_dataMaster_kbo.php" method="POST" class="md-form" style="height: 300px">
                                            <?php
                                                    require_once '../../../config/dbconfig.php';
                                                    $query = "SELECT distinct nama_fungsi, kbo from fungsi ORDER BY nama_fungsi ASC";
                                                    $result = mysqli_query(connDB(), $query);
                                            ?>
                                                <div style="margin-left: -768px">
                                                <select name="s_fungsi" id="s_fungsi" class="form-control-filter2 chosen" style="float: left; width: 330px !important; margin-left: 0px;" required>
                                                    <option value="">Pilih Nama Fungsi -- Kode KBO</option>
                                                    <?php while ($data = mysqli_fetch_assoc($result)) {?>
                                                        <option style="font-size: 12px !important; text-align: left;" value="<?php echo $data['kbo'];?>">
                                                            <?php echo $data['nama_fungsi']."&nbsp;"."---"."&nbsp;".$data['kbo']."<br>";?>
                                                            <?php if ($data['kbo'] == 1 ){ echo "selected"; } ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                </div><br>
                                                <input type="text" class="form-control" name="kode_baru" style="width: 150px" placeholder="Ubah Kode" required>
                                             
                                                <button name="ubah_kode" type="submit" class="btn btn-danger btn-filter-search btn-ubah-kode" style="border-radius: 5px; margin-top: 15px">Ubah Kode KBO</button>
                                            </form>
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
            </div>
            <!-- Data table area End-->
        </div>
    </div>

<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ubah Kode KBO</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>
</div>


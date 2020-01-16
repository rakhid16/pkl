<!DOCTYPE html>
<html>
<head>
  <title></title>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/adminpro-custon-icon.css">
    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/meanmenu.min.css">
    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/animate.css">
    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/normalize.css">
    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/c3.min.css">
    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/form/all-type-forms.css">
    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/style.css">
    <link rel="stylesheet" href="../../../pertamina/static/css/homeCSS/responsive.css">
    <script src="../../../pertamina/static/js/homeJS/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body class="materialdesign">
    <style type="text/css">
    tbody tr:nth-child(odd) {background-color: #f5f5f5;}</style>
    <div class="wrapper-pro">

        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="../static/img/admin_photo.png" style="width:80px; height:80px" />
                    </a>
                    <h3>Spongebob</h3>
                    <p>Squarepants</p>
                </div>
<div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item"> <a href="../home" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i>&nbsp;&nbsp;<span class="mini-dn">Beranda</span></a></li>
                        <li class="nav-item"> <a href="karyawan_aktif" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-users"></i>&nbsp;&nbsp;<span class="mini-dn">Karyawan Aktif</span></a></li>
                        <li class="nav-item"> <a href="karyawan_nonaktif" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-user-slash"></i>&nbsp;&nbsp;<span class="mini-dn">Karyawan Nonaktif</span></a></li>
                        <li class="nav-item"> <a href="upload_berkas" role="button" aria-expanded="false" class="nav-link dropdown-toggle">&nbsp;<i class="fas big-icon fa-file-upload"></i>&nbsp;&nbsp;&nbsp;<span class="mini-dn">Unggah Berkas</span></a></li>
                        <li class="nav-item"> <a href="sertifikat" role="button" aria-expanded="false" class="nav-link dropdown-toggle">&nbsp;<i class="fas fa-file-alt"></i>&nbsp;&nbsp;&nbsp;<span class="mini-dn">Sertifikat</span></a></li>
                        
                        <li class="nav-item"> <a href="home/master_data" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas big-icon fa-chalkboard-teacher"></i>&nbsp;&nbsp;<span class="mini-dn">Master Data</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="master_data_kbo" class="dropdown-item">Ubah Kode KBO</a>
                                <a href="master_data_cc" class="dropdown-item">Ubah Kode Cost Center</a>
                            </div>
                        </li>

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-edit"></i> <span class="mini-dn">MENU 7</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="#" class="dropdown-item">Sub Menu 7.1</a>
                                <a href="#" class="dropdown-item">Sub Menu 7.2</a>
                                <a href="#" class="dropdown-item">Sub Menu 7.3</a>
                                <a href="#" class="dropdown-item">Sub Menu 7.4</a> 
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-desktop"></i> <span class="mini-dn">MENU 8</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                                <a href="#" class="dropdown-item">Sub Menu 8.1</a>
                                <a href="#" class="dropdown-item">Sub Menu 8.2</a>
                                <a href="#" class="dropdown-item">Sub Menu 8.3</a>
                                <a href="#" class="dropdown-item">Sub Menu 8.4</a> 
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-table"></i> <span class="mini-dn">MENU 9</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="#" class="dropdown-item">Sub Menu 9.1</a>
                                <a href="#" class="dropdown-item">Sub Menu 9.2</a>
                                <a href="#" class="dropdown-item">Sub Menu 9.3</a>
                                <a href="#" class="dropdown-item">Sub Menu 9.4</a> 
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
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
                                    <a href="#"><img src="../../pertamina/static/img/log.png" alt=""/></a>
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
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="welcome-adminpro-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                
                                <div class="sparkline8-hd" style="margin-top: 15px;">
                                    <p align=center style="font-size:20px; font-color: black">Data Karyawan MOR V</p>
                                </div>

                                <?php
                                    $s_fungsi="";
                                    $s_keyword="";
                                    if (isset($_POST['search'])) {
                                        $s_fungsi = $_POST['s_fungsi'];
                                        $s_keyword = $_POST['s_keyword'];
                                    }
                                ?>
                                
                                <form method="POST" action="">
                                    <div class="sparkline8-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright" >
                                            <div class="toolbar">
                                                <?php
                                                    require_once '../../../config/dbconfig.php';
                                                    $query = "SELECT distinct fungsi from data_kbo ORDER BY fungsi ASC";
                                                    $result = mysqli_query(connDB(), $query);
                                                ?>
                                                
                                                <select name="s_fungsi" id="s_fungsi" class="form-control-filter">
                                                    <option value="">-- Pilih Fungsi --</option>
                                                    <?php while ($data = mysqli_fetch_assoc($result)) {?>
                                                        <option value="<?php echo $data['fungsi'];?>">
                                                            <?php echo $data['fungsi'];?>
                                                            <?php if ($data['fungsi'] == 1 ){ echo "selected"; } ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                                        
                                                <?php
                                                    $query = "SELECT distinct cost_center FROM data_cc order by cost_center ASC";
                                                    $result = mysqli_query(connDB(), $query);
                                                ?>
                                                
                                                <select name="s_keyword" id="s_keyword" class="form-control-filter1" style="margin-left: 5px;">
                                                    <option value="">-- Pilih Cost Center --</option>
                                                    <?php while ($data = mysqli_fetch_assoc($result)) {?>
                                                        <option value="<?php echo $data['cost_center'];?>">
                                                            <?php echo $data['cost_center'];?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                                        
                                                <button id="search" name="search" class="btn btn-danger btn-filter-search" style="border-radius: 5px;">Filter</button>
                                                                        
                                            </div>                            
                                </form>

                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="gayel-data" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar" data-filter-control="true" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                    <th data-field="id"><center>No Sertifikat</center></th>
                                                    <th data-field="nopeg" data-editable="false"><center>NoPeg</center></th>
                                                    <th data-field="start_date" data-editable="false"><center>Start Date</center></th>
                                                    <th data-field="expired_date" data-editable="false"><center>Expired Date</center></th>
                                                    <th data-field="kode" data-editable="false"><center>Kode</center></th>
                                                    <th data-field="file" data-editable="false"><center>File</center></th>
                                                    <td data-field="action" data-editable="false" data-filter="false"><center>Opsi</center></td>
                                            </tr>
                                        </thead>
                                    
                                        <tbody>
                                            <?php
                                                $search_fungsi = '%'. $s_fungsi .'%';
                                                $search_keyword = '%'. $s_keyword .'%';
                                                $search_aktif = 'Aktif';
                                                $query = "SELECT * FROM pelatihan_sertifikasi ORDER BY no_sertifikat ASC";
                                                $result = mysqli_query(connDB_versi1(),$query);
                                                
                                                if ($result->num_rows > 0) {
                                                    while ($data = $result->fetch_assoc()) {
                                                    
                                                    $no_sertif = $data['no_sertifikat'];
                                                    $nopeg = $data['nopeg'];
                                                    $start_date = $data['start_date'];
                                                    $expired_date = $data['expired_date'];
                                                    $kode = $data['kode'];
                                                    $file_name = $data['file_name'];                                                    
                                            ?>
                                            <tr>
                                                <td><?php echo "<center><p style='margin-left:-9.6px'>$no_sertif</p></center>";?></td>
                                                <td><?php echo "<center><p style='margin-left:-9.6px'>$nopeg</p></center>"; ?></td>
                                                <td><?php echo "<center><p style='margin-left:-9.6px'>$start_date</p></center>";?></td>
                                                <td><?php
                                                if ($expired_date == '0000-00-00' OR $expired_date == '') {
                                                    echo "<center><p style='margin-left:-9.6px'>-</p></center>";;
                                                }else{
                                                    echo "<center><p style='margin-left:-9.6px'>$expired_date</p></center>";     
                                                }
                                                ?>
                                                </td>
                                                <td><?php echo "<center><p style='margin-left:-9.6px'>$kode</p></center>"; ?></td>
                                                <td><?php echo "<center><p style='margin-left:-9.6px'>$file_name</p></center>"; ?></td>
                                                <?php echo "<td><center>

                                                <a style='margin-left: -9.6px' title='Edit Data Sertifikat' href='#myModal' id='custId' data-toggle='modal' data-id=".$data['nopeg']."><i class='fas fa-edit'></i></a>

                                                <a style='margin-left: 5.6px' title='Lihat File Sertifikat' href='#myModal1' id='custId' data-toggle='modal' data-id=".$data['nopeg']."><i class='fas fa-address-card'></i></a></center>"; ?>
                                             
                                                </td>                           
                                            </tr>
                                                    
                                            <?php } } else { ?> 
                                                <tr>
                                                    <td colspan='9'>Tidak Terdapat Data Yang Ditemukan</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Data table area End-->

        </div> <!-- INNER ALL END -->

    </div> <!-- WRAPPER PRO END -->

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Sertifikat</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Nonaktifkan Karyawan</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
$(document).ready(function (){
    var table = $('#gayel-data').DataTable( {
  "columnDefs": [ {
      "targets": [ 6 ],
      "orderable": false
    } ]
});
});
 
</script>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
    
    <!-- <script src="../static/js/homeJS/vendor/jquery-1.11.3.min.js"></script> -->
    
    <script src="../static/js/homeJS/bootstrap.min.js"></script>
    
    <script src="../static/js/homeJS/jquery.meanmenu.js"></script>
    
    <script src="../static/js/homeJS/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <script src="../static/js/homeJS/jquery.sticky.js"></script>
    
    <script src="../static/js/homeJS/jquery.scrollUp.min.js"></script>
    
    <script src="../static/js/homeJS/counterup/waypoints.min.js"></script>
    <script src="../static/js/homeJS/counterup/counterup-active.js"></script>
    <script src="../static/js/homeJS/counterup/jquery.counterup.min.js"></script>    

    <script src="../static/js/homeJS/peity/peity-active.js"></script>
    <script src="../static/js/homeJS/peity/jquery.peity.min.js"></script>
    
    <script src="../static/js/homeJS/sparkline/sparkline-active.js"></script>
    <script src="../static/js/homeJS/sparkline/jquery.sparkline.min.js"></script>

    <script src="../static/js/homeJS/flot/Chart.min.js"></script>
    <script src="../static/js/homeJS/flot/flot-active.js"></script>
    
    <script src="../static/js/homeJS/map/usa_states.js"></script>
    <script src="../static/js/homeJS/map/map-active.js"></script>
    <script src="../static/js/homeJS/map/raphael.min.js"></script>
    <script src="../static/js/homeJS/map/jquery.mapael.js"></script>
    <script src="../static/js/homeJS/map/world_countries.js"></script>
    <script src="../static/js/homeJS/map/france_departments.js"></script>
    
    <script src="../static/js/homeJS/data-table/tableExport.js"></script>
    <!-- <script src="../static/js/homeJS/data-table/bootstrap-table.js"></script> -->
    <script src="../static/js/homeJS/data-table/data-table-active.js"></script>
    
    <script src="../static/js/homeJS/data-table/bootstrap-editable.js"></script>
    <script src="../static/js/homeJS/data-table/bootstrap-table-export.js"></script>
    <script src="../static/js/homeJS/data-table/colResizable-1.5.source.js"></script>
    <script src="../static/js/homeJS/data-table/bootstrap-table-editable.js"></script>
    <script src="../static/js/homeJS/data-table/bootstrap-table-resizable.js"></script>
    
    <script src="../static/js/homeJS/main.js"></script>
</html>
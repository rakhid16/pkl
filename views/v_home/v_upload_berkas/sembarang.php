<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../../pertamina/static/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
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
</head>

<body class="materialdesign">
	<style type="text/css">
	.container{width: 500px;}
	.ui-widget-header{background: lightblue}
	.lb{
		height: 40px;
	}
	.nilai{
		margin-left: 220px;
		padding: 9px;
		text-align: center;
		position: absolute;
	}
	#btn{
		background: red;	
	}

</style>

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
                                            <form  action="../../pertamina/model/nyoba.php" method="post" enctype="multipart/form-data" style="height: 200px">
                                            <input type="file" name="file" style="margin-bottom: 10px">
                                            <input type="text" name="edit_file" placeholder="Rename File" style="margin-top: 10px; float: left;"><br><br><br>
                                            <p align="left"><input type="submit" name="upload" class="btn btn-primary" value="Upload"></p>
                                            <input type="submit" id="btn" value="cok">

                                                                                	<!-- <input type="button" id="btn" value="Download"> -->
<div class="container">
	<div class="lb">	<span class="nilai"></span></div>

</div>
                                        </form>
                                        
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
                    <h4 class="modal-title">Edit Data Karyawan</h4>
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
                    <h4 class="modal-title">Aktifkan Karyawan</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
	$("#btn").click(function() {
		var val=0;
		var interval=setInterval(function() {
			val = val+1;
			$('.lb').progressbar({value: val});
			$('.nilai').text(val+'%');
			if (val == 100) {
				clearInterval(interval);
			}
		}, 50);
	});
</script>
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
    <script src="../static/js/homeJS/data-table/bootstrap-table.js"></script>
    <script src="../static/js/homeJS/data-table/data-table-active.js"></script>
    
    <script src="../static/js/homeJS/data-table/bootstrap-editable.js"></script>
    <script src="../static/js/homeJS/data-table/bootstrap-table-export.js"></script>
    <script src="../static/js/homeJS/data-table/colResizable-1.5.source.js"></script>
    <script src="../static/js/homeJS/data-table/bootstrap-table-editable.js"></script>
    <script src="../static/js/homeJS/data-table/bootstrap-table-resizable.js"></script>
    
    <script src="../static/js/homeJS/main.js"></script>
</html>

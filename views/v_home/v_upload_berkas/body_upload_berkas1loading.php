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
                                          <!--   <form  action="../../pertamina/model/m_upload_berkas.php" method="post" enctype="multipart/form-data" style="height: 200px">
                                            <input type="file" name="file" style="margin-bottom: 10px">
                                            <input id="rename_file" type="text" name="edit_file" placeholder="Rename File" style="margin-top: 10px; float: left;"><br><br><br>
                                            <p align="left"><input type="submit" name="upload" class="btn btn-primary" value="Upload"></p>
                                        </form>
 -->
                                        <div style="height: 100px">
                                            <button name="tombol_upload" type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah" style="margin-top: 20px; float: left; margin-left: 20px">Upload File</button>
                                        
                                        </div>
                                        <!-- <div id='preview'> -->

                                           
                                            // <!-- <embed src="../views/v_home/v_upload_berkas/data_berkas/" width="400px" height="600px" />' -->
                                           
                                            <!-- // '<embed src="../views/v_home/v_upload_berkas/data_berkas/.'$global_upload'.pdf" width="400px" height="600px" />';
                                            // '$glob -->
                                            </div>
                                        <!-- </div>  -->
                                        <div class="container" style="margin-top:10px;">
        <div class="row">
            <div class="col-xs-12">
                <form method="POST">
                    <div class="form-group">
                        <label for="InputFile">File input</label>
                        <input type="file" id="InputFile" name="file">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Upload">
                    </div>                 
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="progress">
                    <div id="progressBar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        <span class="sr-only">0% Complete</span>
                    </div>
                </div>                
            </div>
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

    <div id="tambah" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="mdodal-title">Upload File</h4>
                </div>
                <form action="../../pertamina/model/m_upload_berkas.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="modal-group">
                            <label class="control-label" for="nama_file">Nama File</label>
                            <input type="text" name="nama_file" class="form-control" id="nama_file" required>
                        </div><br>
                        <div class="modal-group">
                            <label class="control-label" for="file">Pilih File</label>
                            <input type="file" name="file" class="form-control" id="file" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" name="upload" value="Upload" id="upload">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                   
                    </script>
                </form>
                
            </div>
        </div>


    </div>
<script>
        $(document).ready(function() {
            $('form').on('submit', function(event){
                event.preventDefault();
                var formData = new FormData($('form')[0]);
               
                $.ajax({
                    xhr : function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener('progress', function(e){
                            var percent = Math.round((e.loaded / e.total) * 100);
                            $('#progressBar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
                        });
                        return xhr;
                    },
                    
                    type : 'POST',
                    url : 'upload.php',
                    data : formData,
                    processData : false,
                    contentType : false,
                    success : function(response){
                        $('form')[0].reset();
                    },
                    error : function(response){
                        console.log(response);
                    }
                });
            });
        });
    </script>   
</body>

</html>
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
<?php include '../../../views/v_home/v_karyawan_aktif/sidebar_aktif.php' ?>
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
            <?php include '../../../views/v_home/v_karyawan_aktif/view_mobile_aktif.php' ?>
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
                                        <div class="datatable-dashv1-list custom-datatable-overright">
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
                                                    $query = "SELECT distinct cc FROM cost_center order by cc ASC";
                                                    $result = mysqli_query(connDB(), $query);
                                                ?>
                                                
                                                <select name="s_keyword" id="s_keyword" class="form-control-filter1" style="margin-left: 5px;">
                                                    <option value="">-- Pilih Cost Center --</option>
                                                    <?php while ($data = mysqli_fetch_assoc($result)) {?>
                                                        <option value="<?php echo $data['kode_cc'];?>">
                                                            <?php echo $data['cc'];?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                                        
                                                <button id="search" name="search" class="btn btn-danger btn-filter-search" style="border-radius: 5px;">Filter</button>
                                                                        
                                            </div>                            
                                </form>
                                                    
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar" class="tabel-karyawan">
                                        <thead>
                                            <tr>
                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                    <th data-field="id"><center>NoPeg</center></th>
                                                    <th data-field="name" data-editable="false"><center>Nama</center></th>
                                                    <th data-field="email" data-editable="false"><center>Email</center></th>
                                                    <th data-field="phone" data-editable="false"><center>Jabatan</center></th>
                                                    <th data-field="task" data-editable="false"><center>Subarea</center></th>
                                                    <th data-field="action" data-editable="false"><center>Opsi</center></th>
                                            </tr>
                                        </thead>
                                    
                                        <tbody>
                                            <?php
                                                $search_fungsi = '%'. $s_fungsi .'%';
                                                $search_keyword = '%'. $s_keyword .'%';
                                                $search_aktif = 'Aktif';
                                                $query = "SELECT nopeg, nama, email, jabatan, subarea from data_karyawan INNER JOIN data_cc on data_karyawan.kode_cc = data_cc.kode_cc INNER JOIN data_kbo on data_karyawan.kbo = data_kbo.kbo WHERE data_karyawan.status1='Aktif' AND data_kbo.fungsi LIKE ? AND data_cc.cost_center LIKE ?";
                                                $dewan1 = $conn->prepare($query);
                                                $dewan1->bind_param('ss', $search_fungsi, $search_keyword);
                                                $dewan1->execute();
                                                $res1 = $dewan1->get_result();
                                                if ($res1->num_rows > 0) {
                                                    while ($data = $res1->fetch_assoc()) {
                                                    
                                                    $nopeg = $data['nopeg'];
                                                    $nama = $data['nama'];
                                                    $email = $data['email'];
                                                    $jabatan = $data['jabatan'];
                                                    $subarea = $data['subarea'];
                                            ?>
                                            <tr>
                                                <td><?php echo $nopeg ?></td>
                                                <td><?php echo $nama; ?></td>
                                                <td><?php echo $email; ?></td>
                                                <td><?php echo $jabatan; ?></td>
                                                <td><?php echo $subarea; ?></td>
                                                <?php echo "<td><center><a title='Edit Data Karyawan' href='#myModal' id='custId' data-toggle='modal' data-id=".$data['nopeg']."><i class='fas fa-user-edit'></i></a></center>"; ?><br>
                                                <?php echo "<center><a title='Non Aktifkan Karyawan' href='#myModal1' id='custId' data-toggle='modal' data-id=".$data['nopeg']."><i style='color: red' class='fas fa-user-times'></i></a></center>"; ?>
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
                    <h4 class="modal-title">Nonaktifkan Karyawan</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>
    </div>
<body class="materialdesign">
    <style type="text/css">
    tbody tr:nth-child(odd) {background-color: #f5f5f5;}
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
                                    <p align=center style="font-size:20px; font-color: black">Data Sertifikat MOR V</p>
                                </div>

                                
                                    <div class="sparkline8-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright" >
                                            <div class="toolbar">
                                                
                                                                        
                                            </div>                            


                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="domainsTable" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar" data-filter-control="true" >
                                        <thead>
                                            <tr>
                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                    <th data-field="id"><center>No Sertifikat</center></th>
                                                    <th data-field="nopeg" data-editable="false"><center>NoPeg</center></th>
                                                    <th data-field="start_date" data-editable="false"><center>Start Date</center></th>
                                                    <th data-field="expired_date" data-editable="false"><center>Expired Date</center></th>
                                                    <th data-field="kode" data-editable="false"><center>Kode</center></th>
                                                    <th data-field="file" data-editable="false"><center>File</center></th>
                                                    <th data-field="action" data-editable="false"><center>Opsi</center></th>
                                            </tr>
                                        </thead>
                                    
                                        <tbody>
                                            <?php

                                                $query = "SELECT * FROM pelatihan_sertifikasi ORDER BY no_sertifikat ASC";
                                                $result = mysqli_query(connDB(),$query);
                                                
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

                                                <a style='margin-left: -9.6px' title='Edit Data Sertifikat' href='#myModal' id='custId' data-toggle='modal' data-id='".$data['no_sertifikat']."'><button class='btn btn-xs btn-primary' style='border-radius:3px; background-color:#ffb92b !important'><i class='fas fa-edit' style='color:black'></i></button></a>

                                                <a style='margin-left: 5.6px' title='Lihat File Sertifikat' href='#myModal1' id='custId' data-toggle='modal' data-id='".$data['no_sertifikat']."'><button class='btn btn-xs btn-primary' style='border-radius:3px; background-color:#70a5fa !important'><i class='fas fa-address-card' style='color:black'></i></button></a></center>"; ?>
                                             
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
                    <h4 class="modal-title">Lihat Sertifikat</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>
    </div>

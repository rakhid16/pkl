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
                                    <p align=center style="font-size:20px; font-color: black">Data Report Sertifikat</p>
                                </div>

                                
                                    <div class="sparkline8-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright" >
                                            <div class="toolbar"></div>                            

                                <div class="datatable-dashv1-list custom-datatable-overright">
                                
                                    <form method="POST" action="">
                                    <div class="sparkline8-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                            <div class="toolbar">
                                                <?php
                                                    require_once '../../../config/dbconfig.php';
                                                    $query = "SELECT distinct kode, judul from master_pelatihan_sertifikasi ORDER BY judul ASC";
                                                    $result = mysqli_query(connDB(), $query);
                                                ?>
                                        
                                                <select name="s_kode" id="s_kode" class="form-control-filter1 chosen" style="margin-left: 5px; width: 450px !important">
                                                    <option value="" style="width: 500px !important">-- Pilih Kateogri/Judul --</option>
                                                    <?php while ($data = mysqli_fetch_assoc($result)) {?>
                                                        <option value="<?php echo $data['kode'];?>">
                                                            <?php echo $data['judul'].' --- '.$data['kode'];?>
                                                            <?php if ($data['kode'] == 1 ){ echo "selected"; } ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                                        
                                                <button id="search" name="search" class="btn btn-danger btn-filter-search" style="border-radius: 5px;">Filter</button>
                                                                        
                                            </div>                            
                                    </form>

            <br><div style="width: 900px; margin: 0px auto;"><br><br>
                <canvas id="myChart"></canvas>
            </div>

            <?php    
                $kode="";
            ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Data table area End-->

        </div> <!-- INNER ALL END -->

    </div> <!-- WRAPPER PRO END -->

    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        ctx.canvas.width = 800;
        ctx.canvas.height = 320;
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels: ["Expired 3 bulan lagi", "Expired 2 bulan lagi", "Expired 1 bulan lagi"],
                datasets: [{
                    label : 'Jumlah',
                    data: [
                    <?php
                    if (isset($_POST['s_kode'])) { // Query Spesifik Judul/Kategori
                        $kode=trim($_POST['s_kode']);
                        $query1 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 90 and DATEDIFF(expired_date, CURRENT_DATE) >60 AND kode='$kode'";
                        $res1 = mysqli_query(connDB(),"$query1");
                        echo mysqli_num_rows($res1);
                    }
                    elseif (!isset($_POST['s_kode'])) { // Query ALL
                        $query4 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 90 and DATEDIFF(expired_date, CURRENT_DATE) >60";
                        $res4 = mysqli_query(connDB(),"$query4");
                        echo mysqli_num_rows($res4);
                    }
                    ?>,

                    <?php
                    if (isset($_POST['s_kode'])) {
                        $query2 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 60 and DATEDIFF(expired_date, CURRENT_DATE) >30 AND kode='$kode'";
                        $res2 = mysqli_query(connDB(),"$query2");
                        echo mysqli_num_rows($res2);
                    }
                    elseif (!isset($_POST['s_kode'])) {
                        $query5 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 60 and DATEDIFF(expired_date, CURRENT_DATE) >30";
                        $res5 = mysqli_query(connDB(),"$query5");
                        echo mysqli_num_rows($res5);
                    }
                    ?>,
                    <?php
                    if (isset($_POST['s_kode'])) {
                        $query3 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 30 AND kode='$kode'";
                        $res3 = mysqli_query(connDB(),"$query3");
                        echo mysqli_num_rows($res3);
                    }
                    elseif (!isset($_POST['s_kode'])) {
                        $query6 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 30";
                        $res6 = mysqli_query(connDB(),"$query6");
                        echo mysqli_num_rows($res6);
                    }
                    ?>
            
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
    <script type="text/javascript">
    $(function() {
    if (localStorage.getItem('s_kode')) {
        $("#s_kode option").eq(localStorage.getItem('s_kode')).prop('selected', true);
    }

    $("#s_kode").on('change', function() {
        localStorage.setItem('s_kode', $('option:selected', this).index());
        });
    });
    </script>

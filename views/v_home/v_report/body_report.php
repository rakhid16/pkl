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
                                                
                                                <div style="margin-left: -500px">
                                                    <!-- <button>aaa</button> -->
                                                <select name="s_kode" id="s_kode" class="form-control-filter1 chosen" style="float: left; width: 330px !important; margin-left: 300px; width: 400px !important; margin-top: -50px" required>
                                                    <option value="" style="text-align: left;">-- Pilih Kode Sertifikat --</option>
                                                    <option value="all" style="text-align: left;">Semua Data Sertifikat</option>
                                                    <?php while ($data = mysqli_fetch_assoc($result)) {?>
                                                        <option style="text-align: left; font-size: 11px" value="<?php echo $data['kode'];?>">
                                                            <?php echo $data['judul'].' --- '.$data['kode'];?>
                                                            <?php if ($data['kode'] == 1 ){ echo "selected"; } ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                                
                                            &emsp;<button id="search" name="search" class="btn btn-danger" style="border-radius: 4px; padding: 5px; font-size: 11px">Filter</button>

                                                <!-- <button class="btn btn-success" style="float: right; font-size: 11px; border-radius: 4px">Ubah Ke Tabel</button> -->
                                                </div>
                                                                        
                                            </div>                            
                                    </form>
                        
                                    
                                    

            <div style="width: 780px; margin: 0px auto; margin-left: 100px; margin-top: 10px"><br><br>
                <?php
                                        $s_kode="";

                                        if (isset($_POST['s_kode'])) {
                                            
                                            $s_kode = $_POST['s_kode'];
                                            
                                            if ($s_kode == 'all') {
                                                 echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Semua Data Sertifikat";
                                            }
                                            else {
                                            
                                            $s_kode = '%'. $s_kode .'%';

                                            $query = "SELECT * FROM master_pelatihan_sertifikasi where kode LIKE ?";
                                            $dewan1 = $conn->prepare($query);
                                            $dewan1->bind_param('s', $s_kode);
                                                $dewan1->execute();
                                                $res1 = $dewan1->get_result();
                                                if ($res1->num_rows > 0) {
                                                    while ($data = $res1->fetch_assoc()) {
                                                    
                                                    $kode = $data['kode'];
                                                    $judul = $data['judul'];
                                            ?>
                                            <tr>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $kode ?>
                                                <?php echo '- '.$judul ?>
                                            </tr>
                                                    
                                            <?php } } else { ?> 
                                                <tr>

                                                </tr>
                                        <?php }
                                            }
                                        }
                                        elseif (!isset($_POST['s_kode'])) {
                                            echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Semua Data Sertifikat";
                                        }
                                   
                                ?>
                <br><br><canvas id="myChart"></canvas></div>

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
                labels: ["Jumlah Data Sertifikat","Expired 3 bulan lagi", "Expired 2 bulan lagi", "Expired 1 bulan lagi"],
                datasets: [{
                    label : 'Jumlah',
                    data: [
                    <?php
                        $queryAll = mysqli_query(connDB(), "SELECT * FROM pelatihan_sertifikasi"); 
                        echo mysqli_num_rows($queryAll);
                    ?>,

                    <?php
                    if (isset($_POST['s_kode'])) { // Query Spesifik Judul/Kategori
                        $s_kode = $_POST['s_kode'];

                        if ($s_kode == 'all') {
                            $query1 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 90 and DATEDIFF(expired_date, CURRENT_DATE) >60";
                            $res1 = mysqli_query(connDB(),"$query1");    
                            echo mysqli_num_rows($res1);
                        }
                        elseif ($s_kode != 'all'){

                        $query2 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 90 and DATEDIFF(expired_date, CURRENT_DATE) >60 AND kode='$s_kode'";
                        $res2 = mysqli_query(connDB(),"$query2");
                        echo mysqli_num_rows($res2);
                        }
                        
                    }
                    elseif (!isset($_POST['s_kode'])) { // Query ALL
                        $query3 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 90 and DATEDIFF(expired_date, CURRENT_DATE) >60";
                        $res3 = mysqli_query(connDB(),"$query3");
                        echo mysqli_num_rows($res3);
                    }
                    ?>,

                    <?php
                    if (isset($_POST['s_kode'])) { // Query Spesifik Judul/Kategori
                        $s_kode = $_POST['s_kode'];

                        if ($s_kode == 'all') {
                            $query4 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 60 and DATEDIFF(expired_date, CURRENT_DATE) >30";
                            $res4 = mysqli_query(connDB(),"$query4");    
                            echo mysqli_num_rows($res4);
                        }
                        elseif ($s_kode != 'all'){

                        $query5 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 60 and DATEDIFF(expired_date, CURRENT_DATE) >30 AND kode='$s_kode'";
                        $res5 = mysqli_query(connDB(),"$query5");
                        echo mysqli_num_rows($res5);
                        }
                        
                    }
                    elseif (!isset($_POST['s_kode'])) { // Query ALL
                        $query6 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 60 and DATEDIFF(expired_date, CURRENT_DATE) >30";
                        $res6 = mysqli_query(connDB(),"$query6");
                        echo mysqli_num_rows($res6);
                    }
                    ?>,

                    <?php
                    if (isset($_POST['s_kode'])) { // Query Spesifik Judul/Kategori
                        $s_kode = $_POST['s_kode'];

                        if ($s_kode == 'all') {
                            $query7 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 30";
                            $res7 = mysqli_query(connDB(),"$query7");    
                            echo mysqli_num_rows($res7);
                        }
                        elseif ($s_kode != 'all'){

                        $query8 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 30 AND kode='$s_kode'";
                        $res8 = mysqli_query(connDB(),"$query8");
                        echo mysqli_num_rows($res8);
                        }
                        
                    }
                    elseif (!isset($_POST['s_kode'])) { // Query ALL
                        $query9 = "SELECT * FROM pelatihan_sertifikasi WHERE expired_date is not null and DATEDIFF(expired_date, CURRENT_DATE) <= 30";
                        $res9 = mysqli_query(connDB(),"$query9");
                        echo mysqli_num_rows($res9);
                    }

                    ?>
            
                    ],
                    backgroundColor: [
                    'rgba(24, 0, 245, 0.3)',
                    'rgba(60, 255, 0, 0.3)',
                    'rgba(225, 255, 0, 0.3)',
                    'rgba(255, 0, 0, 0.3)'
                    ],
                    borderColor: [
                    '#444a3f',
                    '#444a3f',
                    '#444a3f',
                    '#444a3f'
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
                },
                tooltips: [
                    'Link 1: <a href="http://www.google.com" target="_blank" >Google</a>',
                    'Link 2: <a href="http://www.yahoo.com" target="_blank" >Yahoo</a>',
                    'Link 3: <a href="http://www.bing.com" target="_blank" >Bing</a>'
                ],
                xaxisLabels: [
                    'Google','Yahoo','Bing'
                ],
                animation: {
                  duration: 500,
                  onComplete: function () {
                  console.log('zhopa');
                  var ctx = this.chart.ctx;
                      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
                      ctx.fillStyle = this.chart.config.options.defaultFontColor;
                      ctx.textAlign = 'left';
                      ctx.textBaseline = 'top';
                      this.data.datasets.forEach(function (dataset) {
                          for (var i = 0; i < dataset.data.length; i++) {
                              var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
                              ctx.fillText(dataset.data[i], model.x, model.y - 5);
                          }
                      });
                    }
                }
            },
        });
    </script>


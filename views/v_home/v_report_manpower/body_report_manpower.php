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
                                    <p align=center style="font-size:20px; font-color: black">Data Report Manpower</p>
                                </div>
												<?php
                                                    require_once '../../../config/dbconfig.php';
                                                    $query = "SELECT distinct nama_fungsi from fungsi ORDER BY nama_fungsi ASC";
                                                    $result = mysqli_query(connDB(), $query);
                                                ?>
                                
                                    <div class="sparkline8-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright" >
                                            <div class="toolbar"></div>                            

                              <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="false" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar" class="tabel-karyawan">
                                        <thead>
                                            <tr>
                                                    <th data-field="id"><center>NoPeg</center></th>
                                                    <th data-field="name" data-editable="false"><center>Nama</center></th>
                                                    <th data-field="email" data-editable="false"><center>Email</center></th>
                                            </tr>
                                        </thead>
                                    
                                        <tbody>
                                            <?php
                                                
                                                $query = "SELECT nama_fungsi, (SELECT count(fungsi.kbo) FROM posisi, fungsi WHERE posisi.kbo = fungsi.kbo) as total, (SELECT count(fungsi.kbo) FROM posisi, fungsi, data_karyawan WHERE posisi.kbo = fungsi.kbo and data_karyawan.id_position = posisi.id_position) as terisi from posisi, data_karyawan, fungsi GROUP by nama_fungsi";

                                                $res1 = mysqli_query(connDB(),$query);
                                                if ($res1->num_rows > 0) {
                                                    while ($data = $res1->fetch_assoc()) {
                                                    
                                                    $nopeg = $data['nama_fungsi'];
                                                    $nama = $data['total'];
                                                    $email = $data['terisi'];
                                            ?>
                                            <tr>
                                                <td><?php echo "<center><p style='margin-left:-9.6px'>$nopeg</p></center>" ?></td>
                                                <td><?php echo $nama ?></td>
                                                <td><?php echo $email ?></td>
                                                                           
                                            </tr>
                                                    
                                            <?php } } else { ?> 
                                                <tr>
                                                    <td colspan='9'>Tidak Terdapat Data Yang Ditemukan</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>                  
                                    
                               
						            <canvas id="myChart"></canvas>
						            </div>

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
            type: 'bar',
            data: {
                labels: ["Jumlah Data Sertifikat","Expired 3 bulan lagi", "Expired 2 bulan lagi", "Expired 1 bulan lagi", "a","b","c","d","a"],
                datasets: [
			    {
			      label: "American Express",
			      backgroundColor: "pink",
			      borderColor: "red",
			      borderWidth: 1,
			      data: [<?php
                        $queryAll = mysqli_query(connDB(), "SELECT * FROM pelatihan_sertifikasi"); 
                        echo mysqli_num_rows($queryAll);
                    ?>,
                    , 
                    5, 
                    6, 
                    7],
			      
			    },
			    {
			      label: "Mastercard",
			      backgroundColor: "lightblue",
			      borderColor: "blue",
			      borderWidth: 1,
			      data: [4, 7, 3, 6]
			    },
			    {
			      label: "Paypal",
			      backgroundColor: "lightgreen",
			      borderColor: "green",
			      borderWidth: 1,
			      data: [7,7,4, 8]
			    },
			    {
			      label: "Visa",
			      backgroundColor: "yellow",
			      borderColor: "orange",
			      borderWidth: 1,
			      data: [6,9,7,3]
			    }]
            },
            options: {
                legend: {
                    display: true
                },
                scales: {
                	xAxes:[{
                        gridLines: {
                            color: "rgba(0,0,0,0)",
                        }
                	}],
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        },
                    }]
                },
                animation: {
                  duration: 500,
                  onComplete: function () {
                  console.log('zhopa');
                  var ctx = this.chart.ctx;
                      ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
                      ctx.fillStyle = this.chart.config.options.defaultFontColor;
                      ctx.textAlign = 'center';
                      ctx.textBaseline = 'bottom';
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


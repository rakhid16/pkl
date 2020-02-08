<?php
	require_once '../../../config/dbconfig.php';
    $query = mysqli_query(connDB(),"SELECT distinct nama_fungsi from fungsi ORDER BY nama_fungsi ASC");
?>
<script>
        var ctx = document.getElementById("myChart1").getContext('2d');
        ctx.canvas.width = 800;
        ctx.canvas.height = 320;
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                //sadam start
                <?php
                    $halaman = 12;

                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

                    $result = mysqli_query(connDB(),"SELECT * FROM fungsi GROUP by nama_fungsi ASC");
                    $total = mysqli_num_rows($result);

                    $pages = ceil($total/$halaman);
          
                    $query = mysqli_query(connDB(),"SELECT * FROM fungsi GROUP by nama_fungsi ASC LIMIT $mulai, $halaman");

                    $no=mysqli_num_rows($query);                             
                    while($fungsi=$query->fetch_assoc()){
                        echo '"';
                        echo $fungsi['nama_fungsi'];
                        echo '"';
                    if($no>1){
                        echo ",";
                    }
                        $no--;
                    }

                ?>
                //sadam end
               
                        ],
                datasets: [
          {
            label: "Formation",
            backgroundColor: "lightblue",
            borderColor: "blue",
            borderWidth: 1,
            data: [
                    <?php 
                        $halaman = 12;

                        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

                        $result = mysqli_query(connDB(),"SELECT * FROM fungsi GROUP BY nama_fungsi ASC");
                        $total = mysqli_num_rows($result);
                        $pages = ceil($total/$halaman);
            
                        // LOOP Nama Fungsi
                        $query = "SELECT * FROM fungsi GROUP by nama_fungsi ASC LIMIT $mulai, $halaman";
                        $hasil = mysqli_query(connDB(),$query);
                        // End LOOP

                        $no = 0;

                        while($fungsi=$hasil->fetch_assoc()){
                        $alah1 = $fungsi['nama_fungsi']; // MANGGIL LOOP NAMA FUNGSI

                        $queryy = mysqli_query(connDB(),"SELECT nama_fungsi FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='$alah1'");

                        echo mysqli_num_rows($queryy);
                        if($no<$halaman+1){
                        echo ",";
                        }

                        $no++;
                                    
                                        
                        }
                    ?>
                  ]
            
          },
          {
            label: "Filled",
            backgroundColor: "lightgreen",
            borderColor: "green",
            borderWidth: 1,
            data: [
                    <?php  
                        $halaman = 12;

                        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

                        $result = mysqli_query(connDB(),"SELECT * FROM fungsi GROUP BY nama_fungsi ASC");
                        $total = mysqli_num_rows($result);
                        $pages = ceil($total/$halaman);
            
                        // LOOP Nama Fungsi
                        $query = "SELECT * FROM fungsi GROUP by nama_fungsi ASC LIMIT $mulai, $halaman";
                        $hasil = mysqli_query(connDB(),$query);
                        // End LOOP

                        $no = 0;

                        while($fungsi=$hasil->fetch_assoc()){
                        $alah1 = $fungsi['nama_fungsi']; // MANGGIL LOOP NAMA FUNGSI

                        $queryy = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='$alah1'");

                        echo mysqli_num_rows($queryy);
                        if($no<$halaman+1){
                        echo ",";
                        }

                        $no++;
                                    
                                        
                        }

                    ?>

                  ]
          },
          {
            label: "Vacant",
            backgroundColor: "pink",
            borderColor: "red",
            borderWidth: 1,
            data: [
          
                    <?php
                        $halaman = 12;

                        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

                        $result = mysqli_query(connDB(),"SELECT * FROM fungsi GROUP BY nama_fungsi ASC");
                        $total = mysqli_num_rows($result);
                        $pages = ceil($total/$halaman);
            
                        // LOOP Nama Fungsi
                        $query = "SELECT * FROM fungsi GROUP by nama_fungsi ASC LIMIT $mulai, $halaman";
                        $hasil = mysqli_query(connDB(),$query);
                        // End LOOP

                        $no = 0;

                        while($fungsi=$hasil->fetch_assoc()){
                        $alah1 = $fungsi['nama_fungsi']; // MANGGIL LOOP NAMA FUNGSI

                        $query1 = mysqli_query(connDB(),"SELECT nama_fungsi FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='$alah1'");
                        $query2 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='$alah1'");

                        echo (mysqli_num_rows($query1) - mysqli_num_rows($query2));;
                        if($no<$halaman+1){
                        echo ",";
                        }

                        $no++;
                                    
                                        
                        }

                    ?>

                  ]
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
                        },
                        ticks:{
                          display: true,
                          maxTicksLimit: 10,
                          autoSkip: false
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
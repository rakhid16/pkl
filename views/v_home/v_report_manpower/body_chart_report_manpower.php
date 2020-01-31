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
                                $query = "SELECT * FROM fungsi GROUP by nama_fungsi asc LIMIT 13";
                                $result = mysqli_query(connDB(),$query);
                                $no=mysqli_num_rows($result);                             
                                while($fungsi=$result-> fetch_assoc()){
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
                /*
                "Asset Operation MOR V","Corporate Operation & Service Region V", "Corporate Sales Region V", "Corporate Secretary", "Finance MOR V","Geosecurity Intelligence","HSSE Region V","Internal Audit Jatimbalinus","IT MOR V","Legal Counsul MOR V","Marine Region V","Medical Jatim Balinus","MOR V"
                */
                        ],
                datasets: [
			    {
			      label: "Formation",
			      backgroundColor: "lightblue",
			      borderColor: "blue",
			      borderWidth: 1,
			      data: [
			      	<?php  
                    $query1 = mysqli_query(connDB(),"SELECT * FROM posisi WHERE kbo='I20140'");
                    echo mysqli_num_rows($query1);
                    ?>, 
                    <?php  
                    $query2 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='Corporate Operation & Service Region V'");
                    echo mysqli_num_rows($query2);
                    ?>, 
                    <?php  
                    $query3 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='Corporate Sales Region V'");
                    echo mysqli_num_rows($query3);
                    ?>, 
                    <?php  
                    $query4 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='Corporate Secretary'");
                    echo mysqli_num_rows($query4);
                    ?>,
                    <?php  
                    $query5 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='Finance MOR V'");
                    echo mysqli_num_rows($query5);
                    ?>,
                    <?php  
                    $query6 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='Geosecurity Intelligence'");
                    echo mysqli_num_rows($query6);
                    ?>,
                    <?php  
                    $query7 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='Internal Audit Jatimbalinus'");
                    echo mysqli_num_rows($query7);
                    ?>,
                    <?php  
                    $query7 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='HSSE Region V'");
                    echo mysqli_num_rows($query7);
                    ?>,
                    <?php  
                    $query7 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='IT MOR V'");
                    echo mysqli_num_rows($query7);
                    ?>,
                    <?php  
                    $query7 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='Legal Counsul MOR V'");
                    echo mysqli_num_rows($query7);
                    ?>,
                    <?php  
                    $query7 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='Marine Region V'");
                    echo mysqli_num_rows($query7);
                    ?>,
                    <?php  
                    $query7 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='Medical Jatim Balinus'");
                    echo mysqli_num_rows($query7);
                    ?>,
                    <?php
                    $query7 = mysqli_query(connDB(),"SELECT nama_fungsi as total FROM posisi, fungsi WHERE fungsi.kbo = posisi.kbo AND nama_fungsi='MOR V'");
                    echo mysqli_num_rows($query7);
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
                    $query2 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='Asset Operation MOR V'");
                    echo mysqli_num_rows($query2);
                    ?>, 
                    <?php  
                    $query2 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='Corporate Operation & Service Region V'");
                    echo mysqli_num_rows($query2);
                    ?>, 
                    <?php  
                    $query3 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='Corporate Sales Region V'");
                    echo mysqli_num_rows($query3);
                    ?>, 
                    <?php  
                    $query2 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='Corporate Secretary'");
                    echo mysqli_num_rows($query2);
                    ?>,
                    <?php  
                    $query3 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='Finance MOR V'");
                   
                    echo mysqli_num_rows($query3);
                    ?>,
                    <?php  
                    $query3 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='Geosecurity Intelligence'");
                    echo mysqli_num_rows($query3);
                    ?>,
                    <?php  
                    $query3 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='Internal Audit Jatimbalinus'");
                    echo mysqli_num_rows($query3);
                    ?>,
                    <?php  
                    $query2 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='HSSE Region V'");
                    echo mysqli_num_rows($query3);
                    ?>,
                    <?php  
                    $query3 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='IT MOR V'");
                    echo mysqli_num_rows($query3);
                    ?>,
                    <?php  
                    $query3 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='Legal Counsul MOR V'");
                    echo mysqli_num_rows($query2);
                    ?>,
                    <?php  
                    $query2 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='Marine Region V'");
                    echo mysqli_num_rows($query2);
                    ?>,
                    <?php  
                    $query2 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='Medical Jatim Balinus'");
                    echo mysqli_num_rows($query2);
                    ?>,
                    <?php  
                    $query2 = mysqli_query(connDB(),"SELECT nama_fungsi as terisi FROM posisi, fungsi, data_karyawan WHERE fungsi.kbo = posisi.kbo and posisi.id_position = data_karyawan.id_position AND nama_fungsi='MOR V'");
                    echo mysqli_num_rows($query2);
                    ?>
                  ]
			    },
			    {
			      label: "Vacant",
			      backgroundColor: "pink",
			      borderColor: "red",
			      borderWidth: 1,
			      data: [
			      	2, 
                    20, 
                    4, 
                    1,
                    0,
                    0,
                    2,
                    1,
                    4,
                    0,
                    22,
                    2,
                    0
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
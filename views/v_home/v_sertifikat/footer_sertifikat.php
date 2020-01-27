    <script src="../static/assetHome/js/jquery-3.1.1.min.js"></script>
  
    <script type="text/javascript">
        $(document).ready(function(){
            $('#myModal').on('show.bs.modal', function (e) {
                var no_sertifikat = $(e.relatedTarget).data('id');
                //menggunakan fungsi ajax untuk pengambilan data
                $.ajax({
                    type : 'post',
                    url : '../../pertamina/model/m_edit_sertifikasi_pelatihan.php',
                    data :  'no_sertifikat='+no_sertifikat,
                    success : function(data){
                    $('.fetched-data').html(data);//menampilkan data ke dalam modal
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#myModal1').on('show.bs.modal', function (e) {
                var no_sertifikat = $(e.relatedTarget).data('id');
                //menggunakan fungsi ajax untuk pengambilan data
                $.ajax({
                    type : 'post',
                    url : '../../pertamina/model/m_lihat_sertifikat.php',
                    data :  'no_sertifikat='+ no_sertifikat,
                    success : function(data){
                    $('.fetched-data').html(data);//menampilkan data ke dalam modal
                    }
                });
             });
        });
    </script>

    <script  src="../static/assetHome/js/bootstrapJS/bootstrap.min.js"></script>
    
    <script src="../static/assetHome/js/vendor/jquery-1.11.3.min.js"></script>
    
    <script src="../static/assetHome/js/bootstrap.min.js"></script>
    
    <script src="../static/assetHome/js/jquery.meanmenu.js"></script>
    
    <script src="../static/assetHome/js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <script src="../static/assetHome/js/jquery.sticky.js"></script>
    
    <script src="../static/assetHome/js/jquery.scrollUp.min.js"></script>
    
    <script src="../static/assetHome/js/counterup/waypoints.min.js"></script>

    <script src="../static/assetHome/js/counterup/jquery.counterup.min.js"></script>    

    <script src="../static/assetHome/js/peity/jquery.peity.min.js"></script>
    
    <script src="../static/assetHome/js/sparkline/jquery.sparkline.min.js"></script>

    <script src="../static/assetHome/js/flot/Chart.min.js"></script>
    
    <script src="../static/assetHome/js/data-table/tableExport.js"></script>

    <script src="../static/assetHome/js/data-table/bootstrap-table.js"></script>

    <script src="../static/assetHome/js/data-table/data-table-active.js"></script>
    
    <script src="../static/assetHome/js/data-table/bootstrap-editable.js"></script>

    <script src="../static/assetHome/js/data-table/bootstrap-table-export.js"></script>

    <script src="../static/assetHome/js/data-table/colResizable-1.5.source.js"></script>

    <script src="../static/assetHome/js/data-table/bootstrap-table-editable.js"></script>

    <script src="../static/assetHome/js/data-table/bootstrap-table-resizable.js"></script>
    
    <script src="../static/assetHome/js/main.js"></script>

    
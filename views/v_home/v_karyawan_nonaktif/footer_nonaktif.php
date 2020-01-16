    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  
    <script type="text/javascript">
        $(document).ready(function(){
            $('#myModal').on('show.bs.modal', function (e) {
                var nopeg = $(e.relatedTarget).data('id');
                //menggunakan fungsi ajax untuk pengambilan data
                $.ajax({
                    type : 'post',
                    url : '../../pertamina/model/m_edit_karyawan_nonaktif.php',
                    data :  'nopeg='+ nopeg,
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
                var nopeg = $(e.relatedTarget).data('id');
                //menggunakan fungsi ajax untuk pengambilan data
                $.ajax({
                    type : 'post',
                    url : '../../pertamina/model/m_aktifkan.php',
                    data :  'nopeg='+ nopeg,
                    success : function(data){
                    $('.fetched-data').html(data);//menampilkan data ke dalam modal
                    }
                });
             });
        });
    </script>

</script>
    <script type="text/javascript">
    $(function() {
    if (localStorage.getItem('s_fungsi')) {
        $("#s_fungsi option").eq(localStorage.getItem('s_fungsi')).prop('selected', true);
    }

    $("#s_fungsi").on('change', function() {
        localStorage.setItem('s_fungsi', $('option:selected', this).index());
        });
    });
    $(function() {
    if (localStorage.getItem('s_keyword')) {
        $("#s_keyword option").eq(localStorage.getItem('s_keyword')).prop('selected', true);
    }

    $("#s_keyword").on('change', function() {
        localStorage.setItem('s_keyword', $('option:selected', this).index());
        });
    });

    </script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    
    <script src="../static/js/homeJS/vendor/jquery-1.11.3.min.js"></script>
    
    <script src="../static/js/homeJS/bootstrap.min.js"></script>
    
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
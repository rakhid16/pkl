    <script type="text/javascript">
        setTimeout(function() {
      document.getElementById('imageID').style.display='none'
    }, 4*1000);

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

    </script>

    <script  src="../static/assetHome/js/bootstrapJS/bootstrap.min.js"></script>
        
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

    <script type="text/javascript">$(".chosen").chosen()</script>
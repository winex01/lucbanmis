
    


    <script src="public/js/jquery-1.10.2.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/custom.js"></script>

    <!-- Data Tables -->
    <script type="text/javascript" src="public/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="public/js/dataTables.bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/icon/font-awesome-4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="public/icon/ionicons-2.0.1/css/ionicons.min.css">



<!-- <span class="glyphicon glyphicon-plus-sign"></span>-->

<script type="text/javascript">
	
	function printreport(id)
	{

	 window.open('printForm137?id='+id,'name','width=600,height=400');

	}
</script>




<script type="text/javascript">
        
    function loadTables(tableID){
        $(function() {
            $(tableID).DataTable();
        });
    }

    loadTables('#myTable-subject');

    loadTables('#myTable-student');

    loadTables('#myTable-user');

</script>	

 




  </body>
</html>
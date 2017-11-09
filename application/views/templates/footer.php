
<?php $this->load->view('user/changePassword'); ?>



</div>
<!-- end of container -->


<script src="public/js/jquery-2.2.3.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>

<!-- Data Tables -->
<script type="text/javascript" src="<?= base_url('public/js/jquery.dataTables.min.js'); ?>"></script>

<script type="text/javascript">
$(document).ready(function() {
 
    //datatables
var table = $('#users-table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('usersList')?>",
            "type": "POST",
            "data": {
                '<?php csrfName(); ?>' : '<?php csrfHash(); ?>'
            }
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
});
</script>



  </body>
</html>
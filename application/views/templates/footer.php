
<!-- modals -->
<?php $this->load->view('user/changePassword'); ?>
<?php $this->load->view('flash/info'); ?>
<!-- end modals -->


</div>
<!-- end of container -->


<script src="public/js/jquery-2.2.3.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>

<!-- Data Tables -->
<script type="text/javascript" src="<?= base_url('public/js/jquery.dataTables.min.js'); ?>"></script>

<script type="text/javascript">
$(document).ready(function() {
    //datatables
    $('#users-table').DataTable({ 
 
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

    //datatables
var table = $('#subjects-table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('subjectsList')?>",
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


$(function() {
    <?php if($this->session->userdata('modalChangePassword')): ?>
        $('#modal-change-password').modal();
    <?php endif; ?>
});

$(function() {
    <?php if($this->session->userdata('flashInfo')): ?>
        $('#modal-info').modal();
    <?php endif; ?>
});

</script>



  </body>
</html>
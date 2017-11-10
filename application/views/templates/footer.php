
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




<?php $this->load->view('datatable/users'); ?>
<?php $this->load->view('datatable/subjects'); ?>




<script type="text/javascript">
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
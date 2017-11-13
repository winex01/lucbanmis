</div>
<!-- end of container -->


<!-- modals -->
<?php $this->load->view('user/changePassword'); ?>
<?php $this->load->view('flash/info'); ?>
<?php $this->load->view('flash/confirmDelete'); ?>
<!-- end modals -->


<script src="<?= base_url('public/js/jquery-2.2.3.min.js'); ?>"></script>
<script src="<?= base_url('public/js/bootstrap.min.js'); ?>"></script>
<!-- Data Tables -->
<script type="text/javascript" src="<?= base_url('public/js/jquery.dataTables.min.js'); ?>"></script>


<?php $this->load->view('datatable/users'); ?>
<?php $this->load->view('datatable/students'); ?>
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

function confirmDelete(id, url){
	$('#id').val(id);
	 $('#form-delete').attr('action', url);
	$('#modal-confirm-delete').modal();
}
</script>


  </body>
</html>
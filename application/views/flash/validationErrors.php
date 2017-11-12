<?php if(validation_errors() || $this->session->flashdata('info') || !empty($this->session->userdata('error'))): ?>
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?= validation_errors(); ?>
    <?= $this->session->flashdata('info'); ?>
    <?= $this->session->userdata('error'); ?>
  </div>
<?php endif; ?>


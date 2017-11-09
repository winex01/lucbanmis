<div class="modal fade" id="modal-change-password">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Change Password</h4>
			</div>
			<div class="modal-body">

				<?php if(!empty($this->session->userdata('error'))): ?>
		          <div class="alert alert-danger">
		            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		            <?= $this->session->userdata('error'); ?>
		          </div>
		        <?php endif; ?>

				<form class="form-horizontal" method="POST" action="changePassword">

				  <?php csrf(); ?>
				  <?php currentURI(); ?>

				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Current:</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="current" name="current" placeholder="Current Password" autofocus="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-2" for="password">Password:</label>
				    <div class="col-sm-10"> 
				      <input type="password" class="form-control" id="password" name="password" placeholder="New password">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-2" for="passconf">Confirm:</label>
				    <div class="col-sm-10"> 
				      <input type="password" class="form-control" id="passconf" name="passconf" placeholder="Confirm password">
				    </div>
				  </div>


			</div>
			<div class="modal-footer">
				
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 
				 Update</button>
				
				</form>
			</div>
		</div>
	</div>
</div>
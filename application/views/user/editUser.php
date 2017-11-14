
<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-body">
  
      <ol class="breadcrumb">
        <li>
          <a href="<?= base_url('dashboard') ?>">Dashboard</a>
        </li>
        <li>
          <a href="<?= base_url('users') ?>">View Users</a>
        </li>
        <li class="active">Edit User</li>
      </ol>

        <?php $this->load->view('flash/validationErrors'); ?>

        <form class="form-horizontal" method="POST" action="<?= base_url('updateUser'); ?>">
          <?php csrf(); ?>
          <?php currentURI(); ?>


          <input type="hidden" name="id" value="<?= $id; ?>">

          <fieldset>
            <legend>Edit User</legend>
            <div class="form-group">
              <label for="fname" class="col-lg-2 control-label">First Name</label>
              <div class="col-lg-4">
                <input value="<?= $first_name; ?>" type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
              </div>
            </div>
            <div class="form-group">
              <label for="mname" class="col-lg-2 control-label">Middle Name</label>
              <div class="col-lg-4">
                <input value="<?= $middle_name; ?>" type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name">
              </div>
            </div>
            <div class="form-group">
              <label for="lname" class="col-lg-2 control-label">Last Name</label>
              <div class="col-lg-4">
                <input value="<?= $last_name; ?>" type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
              </div>
            </div>
              
            <div class="form-group">
              <label for="birthdate" class="col-lg-2 control-label">Birthdate</label>
              <div class="col-lg-2">
                <input value="<?= $birth_date; ?>" type="date" class="form-control" id="birthdate" name="birthdate">
              </div>
            </div>

            <div class="form-group">
              <label for="gender" class="col-lg-2 control-label">Gender</label>
              <div class="col-lg-2">
                   <select class="form-control" id="gender" name="gender">
                    <option value="M">Male</option>
                    <option <?= $gender == 'F' ? 'selected':''; ?> value="F">Female</option>
                  </select>
              </div>
            </div>


            <div class="form-group">
              <label for="gender" class="col-lg-2 control-label">Groups</label>
              <div class="col-lg-2">
                   <select class="form-control" id="gender" name="group">
                    <?php foreach(groups() as $group): ?>
                      <option <?= $group_id == $group->id ? 'selected':''; ?> value="<?= $group->id ?>"><?= ucfirst($group->description); ?></option>
                    <?php endforeach; ?>
                  </select>
              </div>
            </div>


            <div class="form-group">
              <label for="uname" class="col-lg-2 control-label">User Name</label>
              <div class="col-lg-3">
                <input value="<?= $username; ?>" type="text" class="form-control" id="uname" name="uname" placeholder="User Name" disabled>
              </div>
            </div>


            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <a href="<?= base_url('users') ?>" class="btn btn-default"><i class="ion ion-android-cancel"> </i> Cancel
                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </a>
                <button type="submit" class="btn btn-primary"><i class="ion ion-android-checkbox-outline"> </i> Update
                  <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
                </butto>
              </div>
            </div>
          </fieldset>
        </form>

    </div>
  </div>


</div>



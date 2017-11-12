


<div class="container">
    

    <ol class="breadcrumb">
      <li>
        <a href="<?= base_url('dashboard') ?>">Dashboard</a>
      </li>
      <li>
        <a href="<?= base_url('students') ?>">View Students</a>
      </li>
      <li class="active">Add Student</li>
    </ol>


    <div class="panel panel-default">
      <div class="panel-body">

          <form class="form-horizontal" method="post" action="<?= base_url('addNewStudent') ?>">
            <?php csrf(); ?>
            <fieldset>
              <legend>Add New Student Record</legend>
              <div class="form-group">
                <label for="fname" class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                </div>
              </div>
              <div class="form-group">
                <label for="mname" class="col-lg-2 control-label">Middle Name</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="mname" placeholder="Middle Name" required>
                </div>
              </div>
              <div class="form-group">
                <label for="lname" class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="lname" ="lname" placeholder="Last Name" required>
                </div>
              </div>
              
              <div class="form-group">
                <label for="gender" class="col-lg-2 control-label">Gender</label>
                <div class="col-lg-10">
                    <select class="form-control" name="gender" required>
                      <option> 
                      </option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                </div>
              </div>
              


              <div class="form-group">
                <label for="Year" class="col-lg-2 control-label">Birth Date</label>
                <div class="row">
                <div class="col-sm-3">

                <input type="date" class="form-control" name="bdate" required>

                </div>
              </div>
            </div>


 

              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default"><i class="ion ion-android-cancel"> </i> Cancel</button>
                  <button type="submit" class="btn btn-primary"><i class="ion ion-android-checkbox-outline"> </i> Submit</butto>
                </div>
              </div>
            </fieldset>
          </form>


      </div>
    </div>

</div>

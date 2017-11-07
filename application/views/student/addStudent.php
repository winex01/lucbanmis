        <div class="col-md-9" style="background:white;">

        <ul class="breadcrumb">
            <li><a href="studentRecord">Student Records</a></li>
            <li class="active">Add New Student</li>
          </ul>



<form class="form-horizontal">
  <fieldset>
    <legend>Add New Student Record</legend>
    <div class="form-group">
      <label for="fname" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="fname" placeholder="First Name">
      </div>
    </div>
    <div class="form-group">
      <label for="mname" class="col-lg-2 control-label">Middle Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="mname" placeholder="Middle Name">
      </div>
    </div>
    <div class="form-group">
      <label for="lname" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="lname" placeholder="Last Name">
      </div>
    </div>
    <div class="form-group">
      <label for="gender" class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="Male">Male
          </label>
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="Female">Female
          </label>
        </div>
      </div>
    </div>
      
    <div class="form-group">
      <label for="Year" class="col-lg-2 control-label">Birth Date</label>
      <div class="row">
      <div class="col-sm-3">
        <select class="form-control" id="month">
          <option value="">Select Month</option>
          <option value="janauary">January</option>
          <option value="february">February</option>
          <option value="march">March</option>
        </select>
      </div>
            <div class="col-sm-2">
        <select class="form-control" id="day">
          <option value="">Select Day</option>
          <?php
          $end = 31;
          for($i=1; $i<$end; $i++){
            echo '<option value="'.$i.'">'.$i.'</option>';
            }?>
        </select>
      </div>
            <div class="col-sm-3">
        <select class="form-control" id="year">
          <option value="">Select Year</option>
           <?php
          $firstYear = (int)date('Y') - 15;
          $lastYear = $firstYear + 20;
          for($i=$firstYear;$i<=$lastYear;$i++)
          {
              echo '<option value='.$i.'>'.$i.'</option>';
          }?>
        </select>
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
  </div>
</div>
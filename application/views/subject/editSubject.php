

<div class="container">
  

  <ol class="breadcrumb">
    <li>
      <a href="dashboard">Dashboard</a>
    </li>
    <li>
      <a href="subjects">View Subjects</a>
    </li>
    <li class="active">Add Subject</li>
  </ol>


  <div class="panel panel-default">
    <div class="panel-body">
      

      <form class="form-horizontal" method="post" action="editSubject">
        <?php csrf(); ?>

        <fieldset>
          <legend>Update Subject</legend>
          <div class="form-group">
            <label for="scode" class="col-lg-2 control-label">Subject Code</label>
            <div class="col-lg-10">
               <input value="<?php echo $sub->id; ?>" name="id" type="hidden" class="form-control" id="scode">
              <input value="<?php echo $sub->subcode; ?>" name="scode" type="text" class="form-control" id="scode" placeholder="Subject Code">
            </div>
          </div>
          <div class="form-group">
            <label for="subdes" class="col-lg-2 control-label">Descriptions</label>
            <div class="col-lg-10">
              <input value="<?php echo $sub->descriptions; ?>" name="subdes" type="text" class="form-control" id="subdes" placeholder="Descriptions">
            </div>
          </div>

         <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="reset" class="btn btn-default"><i class="ion ion-android-cancel"> </i> Cancel</button>
              <button type="submit" class="btn btn-primary" name="addSubject"><i class="ion ion-android-checkbox-outline"> </i> Update</butto>
            </div>
          </div>
        </fieldset>
      </form>


    </div>
  </div>


</div>


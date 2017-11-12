

<div class="container">
  

  <ol class="breadcrumb">
    <li>
      <a href="<?= base_url('dashboard') ?>">Dashboard</a>
    </li>
    <li>
      <a href="<?= base_url('subjects') ?>">View Subjects</a>
    </li>
    <li class="active">Add Subject</li>
  </ol>


  <div class="panel panel-default">
    <div class="panel-body">
      

      <form class="form-horizontal" method="post" action="<?= base_url('editSubject'); ?>">
        <?php csrf(); ?>
         <?php currentURI(); ?>

        <fieldset>
          <legend>Update Subject</legend>
          <div class="form-group">
            <label for="scode" class="col-lg-2 control-label">Subject Code</label>
            <div class="col-lg-10">
               <input value="<?php echo $id; ?>" name="id" type="hidden" class="form-control" id="scode">
              <input value="<?php echo $subcode; ?>" name="scode" type="text" class="form-control" id="scode" placeholder="Subject Code">
            </div>
          </div>
          <div class="form-group">
            <label for="subdes" class="col-lg-2 control-label">Descriptions</label>
            <div class="col-lg-10">
              <input value="<?php echo $descriptions; ?>" name="subdes" type="text" class="form-control" id="subdes" placeholder="Descriptions">
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


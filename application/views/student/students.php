
<div class="container">
  

  <div class="panel panel-default">
     <div class="panel-body">
       
        <ol class="breadcrumb">
          <li>
            <a href="<?= base_url('dashboard') ?>">Dashboard</a>
          </li>
          <li class="active">View Students</li>
        </ol>


        <?php if ($this->group->accessAddStudent()): ?>
          <a href="<?= base_url('addStudentPage') ?>" class="btn btn-success"><i class="ion ion-ios-plus"> </i> 
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
           New Student</a>
        <?php endif; ?>

      <br>
      <br>

        <table id="students-table" class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

     </div>
   </div> 

</div>  





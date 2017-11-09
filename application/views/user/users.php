
<div class="container">
  

  <div class="panel panel-default">
     <div class="panel-body">
       
        <ol class="breadcrumb">
          <li>
            <a href="dashboard">Dashboard</a>
          </li>
          <li class="active">View Users</li>
        </ol>

      <?php if($this->group->accessAddUser()): ?>
        <a href="addUser" class="btn btn-success"><i class="ion ion-ios-plus"> </i> Add New User</a>
      <?php endif; ?> 
      <br>
      <br>

        <table id="users-table" class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Created</th>
                    <th>Group</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

     </div>
   </div> 

</div>  





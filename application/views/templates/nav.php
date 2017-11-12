<?php $this->auth->redirectIfNotLogged(); ?>

<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="dashboard" class="navbar-brand">Lucban MIS</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
              
              <!-- dashboard -->
              <li class="<?php active('dashboard'); ?>">
                <a href="dashboard"><i class="fa fa-phone text-green"></i> Dashboard</a>
              </li>
         

               <?php if($this->group->accessUsers()): ?>       
                    <!-- users -->
                    <li class="dropdown <?php active('users'); active('addUser'); ?>">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="ion ion-android-settings"> </i> User <span class="caret"></span></a>
                      <ul class="dropdown-menu" aria-labelledby="download">
                        
                        <?php if($this->group->accessViewUsers()): ?>
                          <li class="<?php active('users'); ?>"><a href="users"><i class="ion ion-ios-search"> </i> View Users</a></li>
                        <?php endif; ?>
                        
                        <?php if($this->group->accessAddUser()): ?>
                          <li class="<?php active('addUser'); ?>"><a href="addUser"><i class="ion ion-ios-plus"> </i> Add User</a></li>
                        <?php endif; ?>
                      
                      </ul>
                    </li>
              <?php endif; ?>


             <?php if($this->group->accessStudents()): ?>  
                    <!-- students -->
                    <li class="dropdown <?php active('students'); active('addStudent'); ?>">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="ion ion-android-settings"> </i> Student <span class="caret"></span></a>
                      <ul class="dropdown-menu" aria-labelledby="download">

                        <?php if($this->group->accessViewStudents()): ?>
                          <li class="<?php active('students'); ?>"><a href="students"><i class="ion ion-ios-search"> </i> View Students</a></li>
                        <?php endif; ?>
                      
                        <?php if($this->group->accessAddStudent()): ?>
                          <li class="<?php active('addStudent'); ?>"><a href="addNewStudent"><i class="ion ion-ios-plus"> </i> Add Student</a></li>
                        <?php endif; ?>

                      </ul>
                    </li>
             <?php endif; ?>


             <?php if($this->group->accessSubjects()): ?>  
                    <!-- subjects -->
                    <li class="dropdown <?php active('subjects'); active('addSubject'); ?>">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="ion ion-android-settings"> </i> Subject<span class="caret"></span></a>
                      <ul class="dropdown-menu" aria-labelledby="download">

                        <?php if($this->group->accessViewSubjects()): ?>
                          <li class="<?php active('subjects'); ?>"><a href="subjects"><i class="ion ion-ios-search"> </i> View Subjects</a></li>
                        <?php endif; ?>
                        
                        <?php if($this->group->accessAddSubject()): ?>
                        <li class="<?php active('addSubject'); ?>"><a href="addSubjectPage"><i class="ion ion-ios-plus"> </i> Add Subject</a></li>
                        <?php endif; ?>

                      </ul>
                    </li>
            <?php endif; ?>



          </ul>

          <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="ion ion-android-person"> </i> 
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <?= $this->auth->name() ?> <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                 
                <li><a data-toggle="modal" href='#modal-change-password'><i class="ion ion-android-refresh"> </i> 
                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                Change Password</a></li>
                <li><a href="logout"><i class="ion ion-log-out"> </i><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
</div>
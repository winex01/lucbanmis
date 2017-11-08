<?php $this->auth->redirectIfNotLogged(); ?>

<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="home" class="navbar-brand">Lucban MIS</a>
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
                
              <!-- users -->
              <li class="dropdown <?php active('users'); active('addUser'); ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="ion ion-android-settings"> </i> User <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="download">
                  <li class="<?php active('users'); ?>"><a href="users"><i class="ion ion-ios-search"> </i> View Users</a></li>
                  <li class="<?php active('addUser'); ?>"><a href="addUser"><i class="ion ion-ios-plus"> </i> Add User</a></li>
                </ul>
              </li>


              <!-- students -->
              <li class="dropdown <?php active('students'); active('addStudent'); ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="ion ion-android-settings"> </i> Student <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="download">
                  <li class="<?php active('students'); ?>"><a href="students"><i class="ion ion-ios-search"> </i> View Students</a></li>
                  <li class="<?php active('addStudent'); ?>"><a href="addStudent"><i class="ion ion-ios-plus"> </i> Add Student</a></li>
                </ul>
              </li>


              <!-- subjects -->
              <li class="dropdown <?php active('subjects'); active('addSubject'); ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="ion ion-android-settings"> </i> Subject<span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="download">
                  <li class="<?php active('subjects'); ?>"><a href="subjects"><i class="ion ion-ios-search"> </i> View Subjects</a></li>
                  <li class="<?php active('addSubject'); ?>"><a href="addSubject"><i class="ion ion-ios-plus"> </i> Add Subject</a></li>
                </ul>
              </li>


              <!-- reports -->
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="ion ion-android-settings"> </i> Report <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="download">
                  <li><a href="printForm137"><i class="ion ion-ios-plus"> </i> Form 137-A</a></li>
                </ul>
              </li>





          </ul>

          <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="ion ion-android-person"> </i> <?= $this->auth->name() ?> <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                 
                <li><a href="changePassword"><i class="ion ion-android-refresh"> </i> Change Password</a></li>
                <li><a href="logout"><i class="ion ion-log-out"> </i><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
</div>
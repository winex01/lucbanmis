
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DepEd MIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="public/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="public/css/custom.min.css">
    <link href="public/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="public/img/favico.ico" type="image/x-icon"/>
  </head>
  <body>

<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="home" class="navbar-brand">DepEd MIS</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            
            <li>
              <a href="home"><i class="ion ion-android-home"> </i> Home</a>
            </li>
            <li>
              <a href="about"><i class="ion ion-information-circled"></i> About</a>
            </li>
              <li>
              <a href="contact"><i class="fa fa-phone text-green"></i> Contact</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="ion ion-android-settings"> </i> Settings <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
   
                <li><a href="studentRecord"><i class="ion ion-ios-search"> </i> View Students</a></li>
                <li><a href="addStudent"><i class="ion ion-ios-plus"> </i> Add Students</a></li>
                <li class="divider"></li>
                <li><a href="subject"><i class="ion ion-ios-search"> </i> View Subjects</a></li>
                <li><a href="addSubject"><i class="ion ion-ios-plus"> </i> Add Subjects</a></li>
                <li class="divider"></li>
                <li><a href="user"><i class="ion ion-ios-search"> </i> View Users</a></li>
                <li><a href="addUser"><i class="ion ion-ios-plus"> </i> Add Users</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"><i class="ion ion-android-person"> </i> Chris Jim Egot <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                 
                <li><a href="changePassword"><i class="ion ion-android-refresh"> </i> Change Password</a></li>
                <li><a href="viewProfile"><i class="ion ion-android-person"> </i> View Profile</a></li>
                <li><a href="signout"><i class="ion ion-log-out"> </i> Sign Out</a></li>
              </ul>
            </li>
            <!-- <li><a href="http://builtwithbootstrap.com/" target="_blank">Built With Bootstrap</a></li>
            <li><a href="https://wrapbootstrap.com/?ref=bsw" target="_blank">WrapBootstrap</a></li> -->
          </ul>
        </div>
      </div>
    </div>

<div class="container container-fluid">
 <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>DepEd MIS</h1>
            <p class="lead">Management Information System</p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-6">
            <div class="sponsor">
              <img src="public/img/Logo.png">
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-3">
            <div class="list-group table-of-contents">
              <a class="list-group-item" href="home"><i class="ion ion-android-home"> </i> Home</a>
              <a class="list-group-item" href="about"><i class="ion ion-information-circled"></i> About</a>
              <a class="list-group-item" href="contact"><i class="fa fa-phone text-green"></i> Contact</a>
              <a class="list-group-item" href="studentRecord"><i class="ion ion-person-stalker"></i> Students</a>
              <a class="list-group-item" href="subject"><i class="ion ion-ios-book-outline"></i> Subjects</a>
              <a class="list-group-item" href="user"><i class="ion ion-person-stalker"></i> Users</a>
            </div>
         </div>



 
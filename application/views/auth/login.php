<?php $this->load->view('templates/header'); ?>

<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand">Lucban MIS</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
          </ul>
        </div>
      </div>
</div>



<div class="col-md-3 col-lg-3 col-sm-3"></div>
<div class="col-md-6 col-lg-6 col-sm-6">
    
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Login</h3>
    </div>
    <div class="panel-body">


        <?php $this->load->view('flash/validationErrors'); ?>

        <form class="form-horizontal" method="POST" action="login">
          <?php csrf(); ?>
          <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-10">
              <input value="<?= set_value('username'); ?>" type="text" class="form-control" id="username" name="username" placeholder="Enter Username" autofocus="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10"> 
              <input value="<?= set_value('password'); ?>" type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div>
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Submit
                <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
              </button>
            </div>
          </div>
        </form>



    </div>
  </div>

</div>
<div class="col-md-3 col-lg-3 col-sm-3"></div>

<?php $this->load->view('templates/footer'); ?>

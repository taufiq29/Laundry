<!DOCTYPE html>
<?php $this->load->view('template/header')?>
  <body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Chantix's </b>Laundry</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Mohon Sign in Terlebih Dahulu</p>
            <form action="<?php echo site_url('auth/login')?>" method="post">
                <div class="form-group has-feedback">
                    <input required="" type="text" class="form-control" placeholder="Username" name="name"/></input>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required="" type="password" class="form-control" placeholder="Password" name="pass"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-8">
                    <a href="<?php echo site_url('auth/register')?>" class="text-center">Register a new membership</a>
                  </div>
                  <div class="pull-right col-xs-4">
                    <button class="btn btn-primary btn-block" type="submit" value="Sign in" name="login">Sign In</button>
                  </div><!-- /.col -->
                </div>
              </form>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

<?php $this->load->view('template/js') ?>
</body>
</html>

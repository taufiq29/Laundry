<!DOCTYPE html>
<?php $this->load->view('template/header') ?>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>Chantix's </b>Laundry</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="<?php echo site_url('auth/tambah_pengguna')?>" method="post">
      <div class="form-group has-feedback">
        <input required="" type="text" class="form-control" placeholder="Full name" name="nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input required="" id="pass" type="password" class="form-control" placeholder="Password" name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input required="" id="repass" type="password" class="form-control" placeholder="Retype password" name="repass">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input required="" type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block normal" value="register">Register</button>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row-->
    </form>
    <a href="<?php echo site_url('auth/index')?>" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<?php $this->load->view('template/js') ?>
</body>
</html>

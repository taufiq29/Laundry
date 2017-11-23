<?php
if (!isset ($_SESSION['ID'])){
  $this->load->view('login');
} else {
  $this->load->view('template/header');
  $this->load->view('template/topbar');
  $this->load->view('template/sidebar');
  ?>
  <!--Content Wrapper. Contains page content-->
  <div class="content-wrapper">
  <!-- Content Header (Page Header) -->
  <section class="content-header">
    <h1>Pengguna</h1>
  </section>
  <!-- Main Content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <!--form start -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pengguna</h3>
            </div>
            <?php echo form_open('halaman/tambah_pengguna'); ?>
            <div class="box-body">
                  <!-- nama pengguna-->
                    <div class="form-group">
                      <label>Username:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </div>
                        <input required="" type="text" name="nama_pengguna" id="nama_pengguna" class="form-control" placeholder="Masukkan Nama Pelanggan...">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- password pengguna -->
                    <div class="form-group">
                      <label>Password:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-key"></i>
                        </div>
                        <input required="" type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password...">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- repassword pengguna -->
                    <div class="form-group">
                      <label>Masukkan Password lagi:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-key"></i>
                        </div>
                        <input required="" type="password" class="form-control" name="repassword" id="repassword" placeholder="Masukkan Password Sekali lagi...">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                  </div>
                  <!-- /.box-body -->
                <div class="box-footer">
                  <button class="pull-right btn btn-primary" type="submit" name="order_baru">Simpan <i class="fa fa-check"></i></button>
                </div>
                <!-- /.box-footer-->
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!--/.row-->

  </section><!-- /.content section -->
</div><!-- /.content wrapper -->
  <?php $this->load->view('template/js');
} ?>

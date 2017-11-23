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
  <!--Content Header (Page Header)
  <section class="content-header">
    <h1>Tambah Order Baru</h1>
  </section>-->
  <!-- Main Content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <!--form start -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Pengguna</h3>
            </div>
            <?php echo form_open('halaman/edit_pengguna'); ?>
            <div class="box-body">

                  <!-- id pengguna-->
                  <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $ID?>" style="width:50%;">

                  <!-- nama pengguna-->
                  <div class="form-group">
                      <label>Username:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </div>
                        <input type="text" name="nama_pengguna" id="nama_pengguna" class="form-control" value="<?php echo $NAME?>">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- privilege pengguna-->
                      <div class="form-group">
                        <label>Privilege:</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-binoculars"></i>
                          </div>
                          <select class="form-control select2" name="privilege" id="privilege" style="width: 100%;">
                            <option disabled selected value="">Pilih salah satu...</option>
                            <option value="Operasional">Operasional</option>
                            <option value="ADMIN">ADMIN</option>
                          </select>
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
                        <input type="password" class="form-control" name="password" id="password" value="<?php echo $PASSWORD?>">
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
                        <input type="password" class="form-control" name="repassword" id="repassword" value="<?php echo $PASSWORD?>">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                  </div>
                  <!-- /.box-body -->
                <div class="box-footer">
                  <button class="pull-right btn btn-primary" type="submit" name="simpan_datapengguna">Simpan <i class="fa fa-check"></i></button>
                  <a href ="<?php echo site_url('halaman/invoke/halaman_daftarpengguna') ?>">
                    <button class="pull-left col-md-offset btn btn-warning" type="button" name="" value=""><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                  </a>
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

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
      <h1>Orderan</h1>
    </section>
    <!-- Main Content -->
    <section class="content">
      <!--form start -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Item</h3>
            </div>
            <?php echo form_open('halaman/edit_item'); ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">

                  <!-- no id item-->
                  <input type="hidden" name="id_item" id="id_item" class="form-control" value="<?php echo $id_item?>">

                  <!-- nama item-->
                    <div class="form-group">
                      <label>Nama Item:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-opencart"></i>
                        </div>
                        <input required="" type="text" name="nama_item" id="nama_item" class="form-control" value="<?php echo $nama_item?>">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Satuan Ukur -->
                    <div class="form-group">
                      <label>Satuan Ukur:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-compass"></i>
                        </div>
                        <input required="" type="text" class="form-control" name="satuan_ukur" id="satuan_ukur" value="<?php echo $satuan_ukur?>">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Harga Satuan -->
                    <div class="form-group">
                      <label>Harga Satuan:</label>
                      <div class="input-group">
                       <div class="input-group-addon">
                          <i class="fa fa-money"></i>
                        </div>
                        <input required="" type="text" class="form-control" name="harga_satuan" id="harga_satuan" value="<?php echo $harga_satuan?>">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Harga Setrika Saja-->
                    <div class="form-group">
                      <label>Harga Setrika Saja:</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-money"></i>
                          </div>
                            <input type="text" class="form-control" name="harga_setrika_saja" id="harga_setrika_saja" value="<?php echo $harga_setrika_saja?>">
                        </div>
                    </div>
                    <!--/.form group -->
                  </div>
                  <!-- /.col-md-6 -->
                  <div class="col-md-6">

                    <!-- Harga Cuci Saja-->
                    <div class="form-group">
                      <label>Harga Cuci Saja:</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-money"></i>
                          </div>
                            <input type="text" class="form-control" name="harga_cuci_saja" id="harga_cuci_saja" value="<?php echo $harga_cuci_saja?>">
                        </div>
                    </div>
                    <!--/.form group -->

                    <!-- Harga Cuci Setrika -->
                    <div class="form-group">
                      <label>Harga Cuci Setrika:</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-money"></i>
                          </div>
                            <input type="text" class="form-control" name="harga_cuci_setrika" id="harga_cuci_setrika" value="<?php echo $harga_cuci_setrika?>">
                        </div>
                    </div>

                    <!-- Date and time range -->
                    <div class="form-group">
                      <label>Waktu Pengerjaan:</label>

                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>
                            <input required="" type="text" class="form-control" name="waktu_pengerjaan" id="waktu_pengerjaan" value="<?php echo $waktu_pengerjaan?>">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    <div class="form-group">
                      <label>Keterangan:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-commenting-o"></i>
                        </div>
                        <input required="" type="text" class="form-control" name="keterangan" id="keterangan" value="<?php echo $keterangan?>">
                      </div>
                      <!--/.input-group-->
                    </div>
                    <!--/.form group -->
                  </div>
                  <!--/.col-md-6-->
                </div>
                <!--/.row-->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="pull-right btn btn-primary" type="submit" name="simpan_dataitem">Simpan <i class="fa fa-check"></i></button>
                <a href ="<?php echo site_url('halaman/invoke/halaman_daftarharga') ?>">
                  <button class="pull-left col-md-offset btn btn-warning" type="button" name="" value=""><i class="fa fa-arrow-circle-left"></i> Cancel</button>
                </a>
              </div>
            </div><!-- /.box primary -->
    </section><!-- /.content section -->
  </div><!-- /.content wrapper -->
  <?php $this->load->view('template/js');
 } ?>

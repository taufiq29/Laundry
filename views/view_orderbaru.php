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
              <h3 class="box-title">Input Orderan Baru</h3>
            </div>
            <?php echo form_open('halaman/index/tambah_order'); ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <!-- nama pelanggan-->
                    <div class="form-group">
                      <label>Nama Pelanggan:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                        </div>
                        <input required="" type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" placeholder="Masukkan Nama Pelanggan...">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Nomer handphone -->
                    <div class="form-group">
                      <label>No.Handphone:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control" name="nohp" id="nohp" data-inputmask='"mask": "(<?php echo +628?>) 9999999999"' data-mask>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Jenis Cucian -->
                    <div class="form-group">
                      <label>Jenis Cucian:</label>
                      <div class="input-group">
                       <div class="input-group-addon">
                          <i class="fa fa-opencart"></i>
                        </div>
                        <select class="form-control select2" onchange="isi_jenis_penyelesaian_otomatis()" name="nama_item" id="nama_item" style="width: 100%;">
                          <option disabled selected value="">Pilih salah satu...</option>
                          <?php
                          foreach ($nama_item as $row) {
                            # code...
                            echo "<option value = '$row->nama_item'>$row->nama_item</option>";
                          }
                          ?>
                          <!--<option value="pakaian">Pakaian</option>
                          <option value="karpet">Karpet</option>
                          <option value="sepatu">Sepatu</option>
                          <option value="seprai">Seprai</option>
                          <option value="bedcover">Bedcover</option>-->
                        </select>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Waktu Layanan Cucian -->
                    <p><div id="jenis_penyelesaian"></div></p>
                  </div>
                  <!-- /.col-md-6 -->
                  <div class="col-md-6">
                    <!-- Berat-->

                    <p><div id="berat"></div></p>
                  <!--  <div class="form-group">
                      <label>Berat:</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-bold"></i>
                          </div>
                            <input type="text" class="form-control" placeholder="Masukkan Berat..." name="berat" id="berat" value="">
                        </div>
                    </div>-->
                    <!--/.form group -->

                    <!-- Jenis Layanan Cucian -->
                    <div class="form-group">
                      <label>Metode Pengerjaan:</label>
                      <div class="input-group">
                       <div class="input-group-addon">
                          <i class="fa fa-reorder"></i>
                        </div>
                        <select class="form-control select2" name="metode_pengerjaan" id="metode_pengerjaan" style="width: 100%;">
                          <option value="harga_cuci_saja">Cuci Saja</option>
                          <option value="harga_cuci_setrika">Cuci Setrika</option>
                          <option value="harga_setrika_saja">Setrika Saja</option>
                        </select>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- Date and time range -->
                    <div class="form-group">
                      <label>Lama Pengerjaan:</label>
                      <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>
                          <select name="tanggal_selesai" id="tanggal_selesai" class="form-control select2" style="width: 100%;">
                            <option value="-">Tidak diketahui</option>
                            <option value="+12 hours">12 Jam</option>
                            <option value="+1 days">1 Hari</option>
                            <option value="+2 days">2 Hari</option>
                            <option value="+3 days">3 Hari</option>
                          </select>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    <div class="form-group">
                      <label>Keterangan:</label>
                        <textarea class="form-control" rows="3" placeholder="Masukkan Keterangan...." name="keterangan" id="keterangan" value=""></textarea>
                    <!--/.form group -->
                  </div>
                  <!--/.col-md-6-->
                </div>
                <!--/.row-->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="pull-right btn btn-primary" type="submit" name="order_baru">Simpan <i class="fa fa-check"></i></button>
              </div>
            </div><!-- /.box primary -->
    </section><!-- /.content section -->
  </div><!-- /.content wrapper -->
  <?php $this->load->view('template/js');?>
  <!--<script type="text/javascript">
    function isi_jenis_penyelesaian_otomatis() {
      var nama_item = $("#nama_item").val();
      $.ajax({
        url: "<?php echo base_url(); ?>index.php/halaman/jenis_penyelesaian_otomatis",
        data: "nama_item="+nama_item,
      }).success(function (data) {
        var json = data,
        obj = JSON.parse(json);
        $('#jenis_penyelesaian').val(obj.jenis_penyelesaian);
      });
    }
  </script>-->
  <script type="text/javascript">
      function isi_jenis_penyelesaian_otomatis()
      {
          var nama_item = $("#nama_item").val();
          $.ajax({
              type: 'GET',
              url: "<?php echo base_url(); ?>index.php/halaman/jenis_penyelesaian_otomatis",
              data: "nama_item=" + nama_item,
              success: function(html)
              {
                  $("#jenis_penyelesaian").html(html);
                  $("#berat").html(html);
              }
          });
      }
  </script>
<?php } ?>

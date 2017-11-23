<?php
if (!isset($_SESSION['ID'])) {
    $this->load->view('login_view');
} else {
    $this->load->view('template/header');
    $this->load->view('template/topbar');
    $this->load->view('template/sidebar');
    ?>
    <!--Content Wrapper. Contains page content-->
    <div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <section class="content-header">
      <h1>Item</h1>
    </section>
    <!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Harga Tiap Item</h3>
            </div>
            <!--/.box-header-->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nama item</th>
                    <th>Satuan (Harga /lembar)</th>
                    <th>Setrika saja (Harga /kg)</th>
                    <th>Cuci saja (Harga /kg)</th>
                    <th>Cuci setrika (Harga /kg)</th>
                    <th>Waktu pengerjaan</th>
                    <th>Keterangan</th>
                    <?php if ($privilege == 'ADMIN'): ?>
                    <th>Pengaturan</th>
                    <?php endif; ?>
                  </tr>
                </thead>
                <!--/.thead-->
                <tbody>
                    <?php
                    foreach ($data_item as $row) {
                      # code...
                    ?>
                    <tr>
                      <td><?php echo $row->nama_item; ?></td>
                      <td><?php echo $row->harga_satuan;?></td>
                      <td><?php echo $row->harga_setrika_saja;?></td>
                      <td><?php echo $row->harga_cuci_saja;?></td>
                      <td><?php echo $row->harga_cuci_setrika;?></td>
                      <td><?php echo $row->waktu_pengerjaan; ?></td>
                      <td><?php echo $row->keterangan;?></td>
                      <?php if ($privilege == 'ADMIN'): ?>
                      <td>
                        <div class="" align="left">
                            <?php echo form_open('halaman/invoke/halaman_edititem'); ?>
                            <button class="pull-center btn btn-warning btn-xs" type="submit" name="nama_item" value="<?php echo $row->nama_item ?>">Edit <i class="fa fa-edit"></i></button>
                            <?php echo form_close(); ?>
                        </div>
                        <div class="" align="">
                            <?php echo form_open('halaman/delete_item'); ?>
                            <button class="btn btn-danger btn-xs" type="submit" name="nama_item" value="<?php echo $row->nama_item ?>">Delete <i class="fa fa-eraser"></i></button>
                            <?php echo form_close(); ?>
                        </div>
                      </td>
                      <?php endif; ?>
                    </tr>
                    <!--/.tr-->
                  <?php } ?>
                </tbody>
              </table>
              <!--/.table-->
            </div>
            <!--/.box-body-->
          </div>
          <!--/.box-->
        </div>
        <!--/.col-->
      </div>
      <!--/.row-->
    </section>
    <!--/.content-->
  </div>
  <!--/.content wrapper-->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>
  </div>
  <!-- ./wrapper -->
  <?php
  $this->load->view('template/js');
  }
  ?>
  </body>
  </html>

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
      <h1>Pengguna</h1>
    </section>
    <!-- Main Content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Pengguna</h3>
            </div>
            <!--/.box-header-->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nomor ID</th>
                    <th>Nama</th>
                    <th>Privilege</th>
                    <th>Pengaturan</th>
                  </tr>
                </thead>
                <!--/.thead-->
                <tbody>
                    <?php
                    foreach ($data_pengguna as $row) {
                      # code...
                    ?>
                    <tr>
                      <td><?php echo $row->ID ?></td>
                      <td><?php echo $row->NAME; ?></td>
                      <td><?php echo $row->PRIVILEGE;?></td>
                      <td>
                        <?php if ($privilege == "ADMIN") { ?>
                        <div class="" align="left">
                            <?php echo form_open('halaman/invoke/halaman_editpengguna'); ?>
                            <button class="pull-center btn btn-warning btn-xs" type="submit" name="NAME" value="<?php echo $row->NAME ?>">Edit <i class="fa fa-edit"></i></button>
                            <?php echo form_close(); ?>
                        </div>
                        <div class="" align="">
                            <?php echo form_open('halaman/delete_pengguna'); ?>
                            <button class="btn btn-danger btn-xs" type="submit" name="NAME" data-toggle="modal" data-target="#modal-warning" value="<?php echo $row->NAME ?>">Delete <i class="fa fa-eraser"></i></button>
                            <?php echo form_close(); ?>
                        </div>
                      <?php } ?>
                        <div class="" align="">
                          <button class="btn btn-success btn-xs" type="submit" name="NAME" value="<?php echo $row->NAME ?>">Active <i class="fa fa-check"></i></button>
                        </div>
                      </td>
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
      <div class="modal modal-warning fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Warning Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
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

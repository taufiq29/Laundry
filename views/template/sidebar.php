<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/laundry/assets/adminlte2.4.0/dist/img/avatar.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $name ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="<?php echo site_url('halaman/invoke/dashboard') ?>">
          <i class="fa fa-dashboard"></i> <span>Halaman Utama</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-opencart"></i>
          <span>Orderan</span>
          <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('halaman/invoke/halaman_orderbaru')?>"><i class="fa fa-cart-arrow-down"></i> Order Cucian Baru</a></li>
          <li><a href="<?php echo site_url('halaman/invoke/halaman_daftarcucian')?>"><i class="fa fa-spinner"></i> Daftar Cucian On Proses</a></li>
          <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o-notch"></i> Riwayat Orderan</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cubes"></i>
          <span>Item</span>
          <span class="pull-right-container">
            <span class="fa fa-angle-left pull-right"></span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('halaman/invoke/halaman_daftarharga')?>"><i class="fa fa-money"></i> Daftar Harga</a></li>
          <?php if ($privilege == "ADMIN"): ?>
            <li><a href="<?php echo site_url('halaman/invoke/halaman_tambahitem')?>"><i class="fa fa-plus-square"></i> Tambah Item</a></li>
          <?php endif; ?>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Pengguna</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('halaman/invoke/halaman_daftarpengguna')?>"><i class="fa fa-users"></i> Data Pengguna</a></li>
          <?php if ($privilege == "ADMIN") { ?>
          <li><a href="<?php echo site_url('halaman/invoke/halaman_tambahpengguna')?>"><i class="fa fa-user-plus"></i> Tambah Pengguna</a></li>
        <?php } ?>
        </ul>
      </li>
      <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

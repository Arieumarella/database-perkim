<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $tittle; ?></title>
  <!-- jQuery -->
  <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- datepacker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- Clocpicker -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/clockpicker/src/clockpicker.css">
  <!-- datepacker -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dtsel/dtsel.css">
  <!-- Fav Icon -->
  <link rel="shortcut icon" type="image/jpg" href="<?php echo base_url(); ?>assets/logo/pu.png">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Gijo -->
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Pace -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/pace/themes/black/pace-theme-flash.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/leaflet/leaflet.css"> -->
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- summernote -->
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
  <!-- iziToast -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/iziToast/css/iziToast.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/sweetalert/tools/sweetAlert.css">
  <style type="text/css">
    .note-insert.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
    display:none;}

    .note-insert.btn-group>.btn:last-child:not(:first-child), .btn-group>.dropdown-toggle:not(:first-child) {
    display:none;}

    .bg {
        /*background-image: url('../assets/img/bg1.jpg');*/
        background-attachment: fixed;
        background-image: url(<?php echo base_url();?>assets/img/bg1.jpg);
      }
  

  </style>
  <script src="<?php echo base_url(); ?>assets/sweetalert/sweetAlert.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
  <script type="text/javascript">
    function base_url(){
      return '<?php echo base_url(); ?>';
    }
  </script>
  
  <!-- <script type="text/javascript" src="assets/leaflet/leaflet.js"></script> -->
</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse" >
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #17a2b8;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="<?php echo base_url();?>assets/#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="<?php echo base_url();?>assets/#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->

      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="<?php echo base_url();?>assets/#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url();?>assets/logo/logo.png" alt="AdminLTE Logo" class="brand-image  elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Manajemen Aset</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- SidebarSearch Form -->
           

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <?php $dashboard = $tittle == 'Dashboard || PFID' ? 'active' : '' ; ?>
            <a href="<?php echo base_url();?>dashboard" class="nav-link <?php echo $dashboard; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <?php $dashboard = $tittle == 'Data Event' ? 'active' : '' ; ?>
            <a href="<?php echo base_url();?>c_event" class="nav-link <?php echo $dashboard; ?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>Event</p>
            </a>
          </li>
          <li class="nav-item">
            <?php $dashboard = $tittle == 'Data Bidang' ? 'active' : '' ; ?>
            <a href="<?php echo base_url();?>c_bidang" class="nav-link <?php echo $dashboard; ?>">
              <i class="nav-icon fab fa-buffer"></i>
              <p>Bidang</p>
            </a>
          </li>
          <li class="nav-item">
            <?php $dashboard = $tittle == 'Data Peserta' ? 'active' : '' ; ?>
            <a href="<?php echo base_url();?>c_peserta" class="nav-link <?php echo $dashboard; ?>">
              <i class="nav-icon fas fa-restroom"></i>
              <p>Peserta</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <?php $this->load->view($content); ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer> -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- Bootstrap -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url();?>assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>assets/plugins/raphael/raphael.min.js"></script>
<!-- <script src="<?php echo base_url();?>assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery-mapael/maps/indonesia.min.js"></script> -->
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard2.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!-- Data Tables Responsive -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script> -->
<script src="<?php echo base_url();?>assets/plugins/jszip/jszip.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/dtsel/dtsel.js"></script>
<script src="<?php echo base_url();?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Clocpicer -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/clockpicker/src/clockpicker.js"></script>

<!-- izi toast -->
<script src="<?php echo base_url();?>assets/iziToast/js/iziToast.min.js"></script>
<!-- clipboard ja -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
<script src="<?php echo base_url();?>assets/iziToast/cutomJs.js"></script>
<!-- Loading Jquery -->
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url(); ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Gijo -->
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url(); ?>assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- Datepacer -->
<script src="<?php echo base_url(); ?>assets/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/daterangepicker/daterangepicker.js"></script>
<script>
  $(function () {
  bsCustomFileInput.init();
  });
  $('.select2').select2({
     
  })




</script>

</body>
</html>

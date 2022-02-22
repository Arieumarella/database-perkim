<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $tittle; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/logo/pu1.jpg" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- jhvb -->
  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css"> -->
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <!-- <link href="<?php echo base_url();?>assets/vendor/simple-datatables/style.css" rel="stylesheet"> -->

  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/select2.css" />
 <link rel="stylesheet" href="<?= base_url();?>assets/css/select2.theme.boot.css" />
<!-- Or for RTL support -->

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

  <!-- Pace -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/pace/themes/black/pace-theme-flash.css"> 

  <!-- Css Datatables -->
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/dataTables/dataTables.bootstrap5.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/dataTables/dataTables.bootstrap.css">

  <!-- iziToast -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/iziToast/css/iziToast.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/sweetalert/tools/sweetAlert.css">

  <script src="<?php echo base_url(); ?>assets/sweetalert/sweetAlert.js"></script>
  <script src="<?= base_url();?>assets/js/pace.js"></script>
  <script src="<?= base_url();?>assets/js/jquery.js"></script>
  <script src="<?= base_url();?>assets/js/jq-ui.js" ></script>
  
 
  <script type="text/javascript">
    function base_url(){
      return '<?php echo base_url(); ?>';
    }
  </script>
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url();?>C_dashboard" class="logo d-flex align-items-center">
        <img src="<?php echo base_url();?>assets/logo/pu1.jpg" alt="">
        <span class="d-none d-lg-block">Database Perkim</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="<?php echo base_url();?>#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="<?php echo base_url();?>#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url();?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $this->session->userdata('name'); ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $this->session->userdata('name'); ?></h6>
              <span><?= $this->session->userdata('roll'); ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

           

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url();?>C_login/Distroy">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <?php $cek = ($tittle != 'Dashboard') ? "collapsed" : ""; ?>
        <a class="nav-link <?php echo $cek; ?>"  href="<?php echo base_url();?>C_dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <?php $cek = ($tittle != 'History Kegiatan') ? "collapsed" : ""; ?>
        <a class="nav-link <?php echo $cek; ?>"  href="<?php echo base_url();?>C_kegiatan">
          <i class="bi bi-clock-history"></i>
          <span>History Kegiatan</span>
        </a>
      </li>

      <li class="nav-item">
        <?php $cek = ($tittle != 'History Lokpri') ? "collapsed" : ""; ?>
        <a class="nav-link <?php echo $cek; ?>"  href="<?php echo base_url();?>C_lokpri">
          <i class="bi bi-clock-history"></i>
          <span>History Lokpri</span>
        </a>
      </li>

      <li class="nav-item">
        <?php $cek = ($tittle != 'Download Rekap') ? "collapsed" : ""; ?>
        <a class="nav-link <?php echo $cek; ?>"  href="<?php echo base_url();?>C_dr">
          <i class="bi bi-cloud-arrow-up"></i>
          <span>Download Rekap</span>
        </a>
      </li>

      <li class="nav-item">
        <?php $cek = ($tittle != 'Input Excel') ? "collapsed" : ""; ?>
        <a class="nav-link <?php echo $cek; ?>"  href="<?php echo base_url();?>C_inEx">
          <i class="bi bi-cloud-arrow-down"></i>
          <span>Input Excel</span>
        </a>
      </li>



    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?php echo $tittle; ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url();?>C_dashboard">Home</a></li>
          <li class="breadcrumb-item active"><?php echo $tittle; ?></li>
        </ol>
      </nav>
  </div>

    <?php $this->load->view($content); ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 
  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/quill/quill.min.js"></script>
  <!-- <script src="<?php echo base_url();?>assets/vendor/simple-datatables/simple-datatables.js"></script> -->
  <script src="<?php echo base_url();?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/php-email-form/validate.js"></script>



  <!-- izi toast -->
  <script src="<?php echo base_url();?>assets/iziToast/js/iziToast.min.js"></script>

  <!-- clipboard ja -->
  <script src="<?= base_url();?>assets/js/clipboard.js"></script>
  
   <script src="<?php echo base_url();?>assets/iziToast/cutomJs.js"></script>
  
  <!-- Loading Jquery -->
  <script src="<?= base_url();?>assets/js/loading_jq.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>

  <!-- Datepacer -->
  <script src="<?php echo base_url(); ?>assets/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/daterangepicker/daterangepicker.js"></script>

  <!-- Datatables JS -->
  <script src="<?= base_url();?>assets/js/datatables/jq-dataTtables.js"></script>
  <script src="<?= base_url();?>assets/js/datatables/dataTables.bootsrap5.js"></script>
  <script src="<?= base_url();?>assets/js/datatables/dataTables.responsive.js"></script>
  
  <!-- Select2 -->
  <script src="<?= base_url();?>assets/js/select2.js"></script>

  <script type="text/javascript">
  $.LoadingOverlaySetup({
    background      : "rgba(0, 0, 0, 0.1)",
    image           : base_url()+"assets/lte/gift/loading.gif",
    // fontawesome     : "fas fa-sync-alt fa-spin",
    
    });

  function scrollOnTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  } 
    
  </script>

</body>

</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SISAsistencias</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-2">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SISAsistencias</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="../widgets.html" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Supervisores
                    <!-- <span class="right badge badge-danger">New</span> -->
                </p>
                </a>
            </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Empleados
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Servicios
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Asistencias
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-2">
      <h5>SISAsistencias</h5>
      <p></p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>/dist/js/adminlte.min.js"></script>
</body>
</html>

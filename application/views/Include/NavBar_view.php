<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OFPPT | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'Style/plugins/fontawesome-free/css/all.min.css'?>">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url().'Style/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url().'Style/plugins/icheck-bootstrap/icheck-bootstrap.min.css'?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url().'Style/plugins/jqvmap/jqvmap.min.css'?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'Style/dist/css/adminlte.min.css'?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url().'Style/plugins/datatables-bs4/css/dataTables.bootstrap4.css'?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url().'Style/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'Style/plugins/daterangepicker/daterangepicker.css'?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url().'Style/plugins/summernote/summernote-bs4.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'Style/dist/css/jquery.dataTables.css'?>">
    <style>
        @media screen and (max-width: 738px){
            .tableData{
                font-size: 80%;
            }
        }
        code{
            color: black;
            font-size: 98%;
        }
        
    </style>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <form method="POST" action="<?php echo base_url()."index.php/Welcome/loguot"; ?>">
                <input type="submit" class="btn btn-primary" name="logout" value="Logout">
            </form>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->


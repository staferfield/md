<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Motherland | <?php echo $this->router->fetch_class(); ?></title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/bootstrap/dist/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'' ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'' ?>bower_components/Ionicons/css/ionicons.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css' ?>">


  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'' ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="<?php echo base_url().'' ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <!-- <link rel="stylesheet" href="<?php echo base_url().'' ?>bower_components/morris.js/morris.css"> -->
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="<?php //echo base_url().'' ?>bower_components/jvectormap/jquery-jvectormap.css"> -->
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="<?php //echo base_url().'' ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="<?php //echo base_url().'' ?>bower_components/bootstrap-daterangepicker/daterangepicker.css"> -->

  <!-- <link rel="stylesheet" href="<?php //echo base_url().'' ?>"> -->

</head>
<body class="skin-red sidebar-mini" style="background-color: #222D32;">

<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Motherland</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url().'dist/img/avatar5.png'; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata("nama"); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'dist/img/avatar5.png'; ?>" class="img-circle" alt="User Image">

                <p>
                <?php echo $this->session->userdata("nama"); ?>
                  <small><?php 
              if($this->session->userdata("level")==0){
                echo "Root";
              } elseif($this->session->userdata("level")==1){
                echo "Owner";
              }elseif($this->session->userdata("level")==2){
                echo "Manajer";
              }elseif($this->session->userdata("level")==4){
                echo "Sales";
              }; ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-right">
                  <a href="<?php echo site_url('Logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
<!-- <section class=""> -->
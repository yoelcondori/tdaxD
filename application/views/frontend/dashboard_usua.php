<!DOCTYPE html>  
<html>  
<head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>sistemabiblioteca</title>  
    <link href="<?php echo base_url();?>assests/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assests/css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css">
  .obli{
    color: red;
  }

   .caja{
      cursor: pointer;
      transition: 0.5s;

    }
   .caja:hover{
     background: #f2f2f2;
      color: #000;
       transition: 0.5s; 
    }
</style>
</head> 

<?php 
    $host= $_SERVER["HTTP_HOST"];
    $url= $_SERVER["REQUEST_URI"];
    //echo "http://" . $host . $url;
    $page = "http://" . $host . $url;
    ?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion small" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url()?>index.php/user" style="height: 60px;">
        <div class="sidebar-brand-text mx-3">BiblioSis</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php if (base_url().'index.php/user'== $page) {
          echo '<li class="nav-item active">';}
      else echo '<li class="nav-item">';?>
        <a class="nav-link" href="<?php echo base_url()?>index.php/user">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Portada</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <?php if (base_url().'index.php/user/busqueda'== $page) {
          echo '<li class="nav-item active">';}
      else echo '<li class="nav-item">';?>
        <a class="nav-link" href="<?php echo base_url()?>index.php/user/busqueda">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Buscar Libro</span></a>
      </li>
      <!-- Nav Item - Charts -->
      <?php if (base_url().'index.php/user/prestado'== $page) {
          echo '<li class="nav-item active">';}
      else echo '<li class="nav-item">';?>
        <a class="nav-link" href="<?php echo base_url()?>index.php/user/prestado">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Libros Prestados</span></a>
      </li>      
      <!-- Nav Item - Charts -->
      <?php if (base_url().'index.php/user/favorito'== $page) {
          echo '<li class="nav-item active">';}
      else echo '<li class="nav-item">';?>
        <a class="nav-link" href="<?php echo base_url()?>index.php/user/favorito">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Mis Libros Favoritos</span></a>
      </li>      
      <!-- Nav Item - Charts -->
      <?php if (base_url().'index.php/user/historial'== $page) {
          echo '<li class="nav-item active">';}
      else echo '<li class="nav-item">';?>
        <a class="nav-link" href="<?php echo base_url()?>index.php/user/historial">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Historial de Busquedas</span></a>
      </li>      
      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- Divider -->
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php if (base_url().'index.php/user/about'== $page) {
          echo '<li class="nav-item active">';}
      else echo '<li class="nav-item">';?>
        <a class="nav-link" href="<?php echo base_url()?>index.php/user/about">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Datos del usario</span></a>
      </li>   


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand small navbar-light border-bottom-primary topbar mb-4 static-top shadow" style="height: 60px;">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

                 <!-- Nav Item - Dashboard -->
          <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-800"><?php echo $this->session->userdata('usua_nombres').' '. $this->session->userdata('usua_apellidos') ;?></span>
                <img class="img-profile rounded" src="<?php echo base_url();?>assests/img/IMG_0037.PNG">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid small">

      
      <!-- End of Main Content -->

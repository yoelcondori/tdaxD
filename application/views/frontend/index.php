<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TDAbiblioteca</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/alertify/themes/alertify.core.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/alertify/themes/alertify.default.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dashboard.css">
</head>
<body class="hold-transition skin-blue sidebar-mini" >
<div class="wrapper">
    

    <header class="main-header" >
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>backend/dashboard" class="logo" style="background-color: #385555">
            <!-- deslizar pequeño -->
            <span class="logo-mini"><b style="text-shadow: 1px 0px 3px #ffffff
          ;color: #ffffff">SDB</b></span>
            <!-- deslizar grande -->
            <span class="logo-lg" style="text-shadow: 1px 0px 3px #ffffff
          ;color: #ffffff"><b>SISTDA</b></span>
        </a>
        <!-- Header Navbar:  -->
        <nav class="navbar navbar-static-top" style="background-color: #094848">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">


                    <li class="info-user">
                    😃  Bienvenido , <?php echo $this->session->userdata("user"); ?>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>backend/auth/logout" title="Cerrar Sesion" id="logout">
                            <img src="<?php echo base_url(); ?>assets/images/logout.png"alt="Cerrar Session" >
                        </a>
                    </li>
                                        <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar" style="background-color: #030909  ">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!--- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header" style="background-color: #212F30">MENU DE NAVEGACION</li>
                <li class="<?php echo $this->uri->segment(2) === "dashboard" ? 'active' : '' ?> treeview">
                    <a href="<?php echo base_url(); ?>frontend/principal/search" style="background-color: #031F20">
                        <i class="fa fa-dashboard" ></i>
                        <span style="text-shadow: 1px 0px 1px #ffffff
          ;color: #ffffff" >DASHBOARD</span>
                    </a>
                </li>
                <li class="<?php echo $this->uri->segment(2) === "facultades" ? 'active' : '' ?> treeview">
                    <a href="<?php echo base_url(); ?>frontend/principal/search">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <span style="text-shadow: 1px 0px 1px #ffffff
          ;color: #ffffff">BUSCAR LIBRO</span>
                    </a>



                </li>
                <li class="<?php echo $this->uri->segment(2) === "lectores" ? 'active' : '' ?> treeview">
                    <a href="<?php echo base_url(); ?>frontend/principal/search">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span style="text-shadow: 1px 0px 1px #ffffff
          ;color: #ffffff">LIBROS FAVORITOS</span>
                    </a>

                </li>
                <li class="<?php echo $this->uri->segment(2) === "libros" ? 'active' : '' ?> treeview">
                    <a href="<?php echo base_url(); ?>frontend/principal/search">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        <span style="text-shadow: 1px 0px 1px #ffffff
          ;color: #ffffff">HISTORIAL</span>
                    </a>
                </li>
                <li class="<?php echo $this->uri->segment(2) === "prestamos" ? 'active' : '' ?> treeview">
                    <a href="#">
                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                        
                    </a>
                </li>




                <!-- <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-image:url('https://portal.unap.edu.pe/sites/default/files/presentacion.jpg');">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            
            <ol class="breadcrumb">
                <section>
 <center>
     <h2 style=" font-family:Cooper Black;
  text-shadow: 0px 0px 2px #3D3032,
               3px 3px 2px #3D3032;">libros</h2>
 </center> 
 <br>
 <br>
  <center>
 <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">

<div> 
    <button style="  background-color:#EFDDC5 " role="button" class="btn btn-default, rounded-circle" data-toggle="modal" data-target="#dialogo1"> <img style="
              width:200px;
              height: 240px;
     " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRYXXtgVhJTHfwyuYl_N9hDAJ9mtVAhHIYHr0yZ0RqXH947DCZ" class="rounded-circle" width="180" height="180"> </button>

    <div class="modal fade" id="dialogo1">
      <div class="modal-dialog">
        <div class="modal-content">  
          <!-- cuerpo del diálogo -->
          <div class="modal-body">
             <img style="
          box-shadow: 0px 10px 28px ;   
    color:#674A47;
    width:430px;
    height:550px;
     " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRYXXtgVhJTHfwyuYl_N9hDAJ9mtVAhHIYHr0yZ0RqXH947DCZ">

          </div>
    
          <!-- pie del diálogo -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">salir</button>
          </div>
    
        </div>
      </div>
    </div> 

  </div>
         <h2 style="text-shadow: 1px 0px 3px #ffffff
          ;color: #ffffff
               ">Aprende PYTHON</h2>

         
          <p><a style="box-shadow: inset 0px 0px 50px #9B9593,
                    0px 0px 50px #9B9593;background: #5D5856;border: 6px solid #D1CCCB;padding: 13px;border-radius: 30px; " class="btn btn-primary" href="https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwj46JvAja_lAhUBvFkKHRFYDbUQjhx6BAgBEAI&url=https%3A%2F%2Froboticaeducativa.top%2Fpython%2F&psig=AOvVaw0f9z2PsEK2x1gaF5sy6E3k&ust=1571807344857934" role="button">Ver mas detalles </a></p>
        </div><!-- /.col-lg-4 -->
       


       
          <div class="col-lg-4">
            <br>
          <img style="
          box-shadow: 0px 10px 28px ;   
    color:#674A47;
    width:200px;
    height: 240px;
     " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9JlImUPtpVGuG0ClmCJWkblbrLFhAR4A5vEDTSzYiTXsZuEN-" class="rounded-circle" width="180" height="180">
          <h2 style="text-shadow: 1px 0px 3px #ffffff
          ;color: #ffffff">Programacion con Linux</h2>
          
          <p><a style="box-shadow: inset 0px 0px 50px #9B9593,
                    0px 0px 50px #9B9593;background: #5D5856;border: 6px solid #D1CCCB;padding: 13px;border-radius: 30px; " class="btn btn-primary" href="https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=&url=https%3A%2F%2Fwww.iberlibro.com%2FProgramaci%25C3%25B3n-Linux-descubierto-segunda-edici%25C3%25B3n-soluci%25C3%25B3n%2F22891513709%2Fbd&psig=AOvVaw0f9z2PsEK2x1gaF5sy6E3k&ust=1571807344857934" role="button">Ver mas detalles</a></p>
        </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <br>
            
         <img style="
          box-shadow: 0px 10px 28px ;   
    color:#674A47;
    width:200px;
    height: 240px;
     " src="https://cloud10.todocoleccion.online/libros-segunda-mano-informatica/tc/2017/03/23/18/80855035.jpg" class="rounded-circle" width="180" height="180">
          <h2 style="text-shadow: 1px 0px 3px #ffffff
          ;color: #ffffff"> programacion</h2>
              
          
          <p><a style="box-shadow: inset 0px 0px 50px #9B9593,
                    0px 0px 50px #9B9593;background: #5D5856;border: 6px solid #D1CCCB;padding: 13px;border-radius: 30px; " class="btn btn-primary" href="https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjZ2JPnja_lAhXipVkKHblVD3YQjhx6BAgBEAI&url=https%3A%2F%2Fwww.todocoleccion.net%2Flibros-segunda-mano-informatica%2Ffundamentos-programacion-libro-probemas-luis-joyanes-aguilar-1996~x80855035&psig=AOvVaw0f9z2PsEK2x1gaF5sy6E3k&ust=1571807344857934" role="button">Ver mas detalles</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    </div><!-- /.container -->
      </center>
</section>

               
            </ol>
        </section>

        <!-- Main content -->

       

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer" style="background-color: #479093">

        <center>
        <a style="color: black"> derechos reservados © yoel-lizbeth-mathiaz</a>
        </center>
        
    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/locales/bootstrap-datepicker.es.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/alertify/lib/alertify.min.js"></script>

<script src="<?php echo base_url();?>assets/dist/js/dashboard.js"></script>
</body>
</html>
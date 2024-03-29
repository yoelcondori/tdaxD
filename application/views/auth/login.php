 <?php $this->load->view('templates/header');?>
 <!-- container --> 
  <section class="showcase" >
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <center><h2>TDA "BIBLIOTECA"</h2></center>
        
      </div> 
      <form action="<?php print site_url();?>auth/doLogin" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">
        <div class="row"><?php echo validation_errors('<div class="col-12 col-md-12 col-lg-12"><div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div></div>'); ?></div>
        <!--Form with header-->
            <div class="card border-info rounded-0">
                <div class="card-header p-0">
                    <div class="bg-login-page text-white text-center py-2" style="background-color: #17302E">
                        <h3><i class="fa fa-user"></i> Login</h3>
                    </div>
                </div>
                <div class="card-body p-3" style="background-color: #CFEAE8">                
                    <!--Body-->
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                            </div>
                            <input type="text" class="form-control" id="remail" name="user_name" placeholder="Email *" value="<?php if(isset($_COOKIE["loginId"])) { echo $_COOKIE["loginId"]; } ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-key text-info" aria-hidden="true"></i></div>
                            </div>
                            <input type="password" class="form-control" id="rpassword" name="password" placeholder="Contraseña *" value="<?php if(isset($_COOKIE["loginPass"])) { echo $_COOKIE["loginPass"]; } ?>">
                        </div>
                    </div>                                
                    
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" <?php if(isset($_COOKIE["loginId"])) { ?> checked="checked" <?php } ?>> Recordar Cuenta
                            </label>                                    
                        </div>
                    </div>
                    
                    <div class="text-center" >
                        <button type="submit" id="contact-send-a" class="btn btn-info btn-block rounded-0 py-2" style="background-color: #17302E">Login</button>
                    </div>
                    <br>
                    <div>
                        <span>No eres usuario?</span>
                        <div class="bg-login-page text-white text-center py-2" style="background-color: #17302E; color: #000000">
                    <span><a href="<?php print site_url()?>auth/registration" 6>Nuevo registro</a></span>
                </div>
                </div>
            </div> 
          </div>
        </div>
    </form>
    </div>
  </section>
 <?php $this->load->view('templates/footer');?>        

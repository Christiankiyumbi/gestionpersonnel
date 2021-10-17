
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo"><br><br><br>
    
    <h3 class="text-center text-info">Connexion</h3>
  </div>
  <!-- /.login-logo -->
  <div class="container">
  <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-info">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
    <div class="row justify-content-center align-items-center">
      <div class='col-md-6'>
        <div class="card">
          <div class="card-body login-card-body">
            <p></p>
            <form  method="POST" encrypte="multipart/form-data" action = "<?php echo base_url('auth/connecter')?>" >
              <div class="form-group">
                <label for="nom" class="text-info">Nom:</label></br>
                <input type="text" class="form-control" name="nm" placeholder="Nom">
                <div class="input-group-append">
                  
                </div>
              </div>
              <div class="form group">
              <label for="motdepasse" class="text-info">Mot de passe:</label></br>
                <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
                <div class="input-group-append">            
                </div>
              </div><br>
              
                <!-- /.col -->
                <div class="form-row text-center">
                   <div class="col-12">
                      <button type="submit" class="btn btn-primary">Se connecter</button>
                   </div>
                </div>
                <!-- /.col -->
              </div>
            </form>

           
            <!-- /.social-auth-links -->

            
          <!-- /.login-card-body -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

</body>
</html>

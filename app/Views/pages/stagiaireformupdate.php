<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Project Add</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->

<br><br><br>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-8">
          <div class="col-sm-8">
            
      </div><!-- /.container-fluid -->
    </section>


    <div class='col-md-12'>
    <!-- Main content -->
    <section class="content">
    <div class="container">
    <div class="row justify-content-center">
      
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><center>FORMULAIRE MODIFICATION DU STAGIAIRE</center></h3>

            
            </div>
            <div class="card-body">
            <form method ="post"encrypte="multipart/form-data" action="">
            <div class="form-row">
        <div class="form-group col-md-6">
                <label for="inputNom">Nom</label>
                <input type="text" class="form-control" id="inputNom" name="inputNom" value="">
                
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputPostNom">PostNom</label>
                <input type="text" class="form-control" id="inputPostNom" name="inputPostNom" value="">
            </div>
            <div class="form-row">
        <div class="form-group col-md-6">
                <label for="inputNom">Prenom</label>
                <input type="text" class="form-control" id="inputNom" name="inputNom" value="">
                
            </div>
            
        
       <div class="form-group col-md-6">
                <label for="inputType">Sexe</label>
                <select id="inputType" class="form-control"  name="inputType" value="">
                    <option selected>Maculin</option>
                    <option>Feminin</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputDatenaiss">Date naissance</label>
                <input type="date" class="form-control" id="inputDatenaiss" name="inputDatenaiss" value="">
            </div>
        
        <div class="form-group col-md-6">
                <label for="inputNom">Lieu naissance</label>
                <input type="text" class="form-control" id="inputNom" name="inputNom" value="">
                
            </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputTel">Numero Telephone </label>
                    <input type="text" class="form-control" id="inputTel" name="inputTel" value="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail" name="inputEmail" value="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputadressePhyique">Adresse Phyique</label>
                <input type="text" class="form-control" id="inputadressePhyique" name="inputadressePhyique">
            </div>
            
            
            <div class="form-group col-md-6">
                <label for="inputTypeStagiaire">Type Stagiaire</label>
                <select name="inputTypeStagiaire" class="form-control" id="inputTypeStagiaire">
                    <option value="professionelle">Professionnel</option>
                    <option value="academique">Academique</option>
                </select>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputservice">Service</label>
                <select name="inputService" class="form-control" id="inputservice">
                    <option value="">Direction</option>
                    <option value="">Division</option>
                    <option value="">Secretariat</option>
                    <option value="">bureau de statistique economique et financiere</option>
                    <option value="">bureau de statistique et social</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="inputEncadreur">Encadreur</label>  
                <select name="inputidAgent" class="form-control" id="">
                    
                </select>              
                
            </div>
            <div class="form-group col-md-6">
                <label for="inputdomaineEtude">Domaine Etude</label>
                <input type="text" class="form-control" id="inputdomaineEtude" name="inputDomaineEtude">
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputEtablissement">Etablissement</label>
                <input type="text" class="form-control" id="inputEtablissement" name="inputEtablissement">
            
        </div>  
            <div class="form-group col-md-6">
                <label for="inputdatedebut">Datedebut</label>
                <input type="Date" class="form-control" id="inputtdatedebut" name="inputDatedebut">
            </div>
            <div class="form-group col-md-6">
                <label for="inputdatefin">Datefin</label>
                <input type="date" class="form-control" id="inputdatefin" name="inputDatefin">
            </div>
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card --> <div><br><br>
             <input type="submit" value="Modifier" class="btn btn-success float-right"><br><br>
        </div>
        </div>
</div>
      <div>
</div>        
      </section>
      
</div>
</form>
      
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
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

      

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
          <div class="col-sm-4">
            
      </div><!-- /.container-fluid -->
    </section>


    <div class='col-md-8'>
    <!-- Main content -->
    <section class="content">
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary mb-4">
            <div class="card-header">
              <h3 class="card-title">Identite</h3>

            
            </div>
            <div class="card-body">
            <form method ="post"encrypte="multipart/form-data" action="">
              <div class="form-group">
                <label for="inputnom">Nom</label>
                <input type="text" id="inputnom" class="form-control">
              </div>
            
              <div class="form-group">
                <label for="inputpostnom">Postnom</label>
                <input type="text" id="inputpostnom" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputprenom">Prenom</label>
                <input type="text" id="inputprenom" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="inputStatus">Genre</label>
                <select class="form-control custom-select">
                  <option selected>Masculin</option>
                  <option>Feminin</option>
                  
                </select>
              </div>
              <div class="form-group">
                <label for="inputdateNaiss">Date de naissance</label>
                <input type="date" id="inputdateNaiss" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputlieuNaiss">Lieu de naissance</label>
                <input type="text" id="inputlieuNaiss" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="inputStatus">Situation matrimoniale</label>
                <select class="form-control custom-select">
                  <option selected>Marier</option>
                  <option>Celibataire</option>
                  <option>Divorcer</option>
                  <option>Veuf</option>
                  <option>Veuve</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputnombreEnfant">Nombre enfant</label>
                <input type="text" id="inputnombreEnfant" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary mb-4">
            <div class="card-header">
              <h3 class="card-title">Contact</h3> 
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputnumerotelephone">Numero telephone</label>
                <input type="number" id="inputnumerotelephone" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputemail">Email</label>
                <input type="number" id="inputemail" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputville">Ville</label>
                <select class="form-control custom-select">
                  <option selected>Lubumbashi</option>
                  <option>Kipushi</option>
                  <option>Kolwezi</option>
                  <option>Kasumbalesa</option>
                  <option>Likasi</option>
                </select>
            </div>
              <div class="form-group">
                <label for="inputStatus">Commune</label>
                <select class="form-control custom-select">
                  <option selected>Lubumbashi</option>
                  <option>Kenya</option>
                  <option>Katuba</option>
                  <option>Kampemba</option>
                  <option>Kamalondo</option>
                  <option>Annexe</option>
                  <option>Ruashi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputadressephysique">Adresse physique</label>
                <input type="number" id="inputadressephysique" class="form-control">
              </div>
      
         
      </div>

            </div>
            <!-- /.card-body -->
          <!-- /.card -->
        </div>
</section>

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Identite</h3></div>
            <div class="card-body">

              <div class="form-group">
                <label for="inputdateembauche">Date embauche</label>
                <input type="date" id="inputembauche" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputgradestatutt">Grade statut</label>
                <input type="number" id="inputgradestatut" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputgradefonction">Grade fonction</label>
                <input type="text" id="inputgradefonction" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputservice">Annee obtention diplôme</label>
                <input type="text" id="inputesrvice" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputservice">Service</label>
                <input type="text" id="inputesrvice" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputgradestatut">Mecanisation</label>
                <input type="number" id="inputstatut" class="form-control">
              </div>

          </div>
      </div>
</div>
<div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Contact</h3> 
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputnumerotelephone">Numero telephone</label>
                <input type="number" id="inputnumerotelephone" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputemail">Email</label>
                <input type="number" id="inputemail" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputville">Ville</label>
                <select class="form-control custom-select">
                  <option selected>Lubumbashi</option>
                  <option>Kipushi</option>
                  <option>Kolwezi</option>
                  <option>Kasumbalesa</option>
                  <option>Likasi</option>
                </select>
            </div>
              <div class="form-group">
                <label for="inputStatus">Commune</label>
                <select class="form-control custom-select">
                  <option selected>Lubumbashi</option>
                  <option>Kenya</option>
                  <option>Katuba</option>
                  <option>Kampemba</option>
                  <option>Kamalondo</option>
                  <option>Annexe</option>
                  <option>Ruashi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputadressephysique">Adresse physique</label>
                <input type="number" id="inputadressephysique" class="form-control">
              </div>
      <div>
              
      </section>
             <input type="submit" value="Enregitrer" class="btn btn-success float-right"><br><br>
        </div>
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
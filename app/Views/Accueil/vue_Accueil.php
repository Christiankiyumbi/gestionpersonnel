
<body>
	<div class="">
		<div class="row">
			<div class="col-lg-8">
			<img src="../assets/images/recrutement (1).png" class="float-left"/>
			</div>
			<div class="col-lg-4">
				<div class="thumbnail">
					<label class="text text-14 offset-1" style="margin-top:20px;" for="exampleInputEmail1"><h1>Connectez-vous</h1></label>
				  <div class="container">
				  	<form class="form-group" method="post" action="<?= base_url('/GestionAgent/listerAgent');?>">
      					<div class="form-group">
   							<label for="exampleInputEmail1"></label>
    						<input type="text" class="form-control" placeholder="Votre login">

  						</div>
  						<div class="form-group">
						    <label for="exampleInputPassword1"></label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
						  </div>
					  	<button type="submit" class="btn btn-primary  center">Se connecter</button>
					</form>
				 
				   
				  </div>
				</div>
			</div>
		
		</div>
	</div>
</body>
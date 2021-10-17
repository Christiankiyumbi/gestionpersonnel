<Style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload{
        width: 100%;
    }   
</style>

Ajout agent

<?php 

$session = \Config\Services::session();
$session_agent = session();
//var_dump(isset($session_agent->sessionAgent));
//var_dump($session_agent->sessionAgent);
$sess_agent = null;
if(isset($session_agent->sessionAgent)){
    $sess_agent = $session_agent->sessionAgent;
}
//var_dump(isset($sess_agent['matricule']));
?>
<?php

?>
<br><br><br>
<div class="container mt-5">
    <form method ="post"encrypte="multipart/form-data" action="<?php
    if(isset($sess_agent['id'])){echo site_url('/GestionAgent/miseAjourInfosAgentInDataBase/'.$sess_agent['id']);}
    else{echo site_url('/GestionAgent/enregistrerAgent');}?>">
        <!-- Formulaire -->
        <div class="form-row">
            <div class="col-md-12">
            </div>
        </div>
        <hr>
        <div class="form-row bg- ">
                <div class="form-group col-md-2 ">
                    <label for="inputmatricule">Matricule</label>
                    <input type="text" class="form-control" id="inputmatricule" name="inputmatricule"
                    value="<?php if($sess_agent != null && isset($sess_agent['matricule']))
                    {
                        echo "".$session_agent->sessionAgent['matricule'];
                        }?>"/>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputProfile">Profile</label>
                    <input type="file" class="form-control" id="inputProfile" name="inputProfile"
                    value="<?php if($sess_agent != null && isset($sess_agent['matricule']))
                    {
                        echo "".$session_agent->sessionAgent['photo'];
                        }?>"/>
                </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputNom">Nom</label>
                <input type="text" class="form-control" id="inputNom" name="inputNom"
                value="<?php if($sess_agent != null && isset($sess_agent['nom']))
                    {
                        echo "".$session_agent->sessionAgent['nom'];
                        }?>"/>
            </div>
            <div class="form-group col-md-2">
                <label for="inputPostNom">PostNom</label>
                <input type="text" class="form-control" id="inputPostNom" name="inputPostNom"
                value="<?php if($sess_agent != null && isset($sess_agent['postnom']))
                    {
                        echo "".$session_agent->sessionAgent['postnom'];
                        }?>"/>
            </div>
            <div class="form-group col-md-2">
                <label for="inputPrenom">Prenom</label>
                <input type="text" class="form-control" id="inputPrenom" name="inputPrenom"
                value="<?php if($sess_agent != null && isset($sess_agent['prenom']))
                    {
                        echo "".$session_agent->sessionAgent['prenom'];
                        }?>"/>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="selecetedSexe">Sexe</label>
                <select id="selecetedSexe" class="form-control"  name="selecetedSexe">
                    <option value="M" <?php if($sess_agent != null && isset($sess_agent['sexe'])){echo "selected";}?> >Maculin</option>
                    <option Value="F"<?php if($sess_agent != null && isset($sess_agent['sexe'])){echo "selected";}?> >Feminin</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputDateNaiss">Date Naissance</label>
                <input type="date" class="form-control" id="inputDateNaiss" name="inputDateNaiss"
                value="<?php if($sess_agent != null && isset($sess_agent['dateNaissance']))
                    {
                        echo "".$session_agent->sessionAgent['dateNaissance'];
                        }?>"/>
            </div>
            <div class="form-group col-md-2">
                <label for="inputLieuNaiss">Lieu Naissance</label>
                <input type="text" class="form-control" id="inputLieuNaiss" name="inputLieuNaiss"
                value="<?php if($sess_agent != null && isset($sess_agent['lieuNaissance']))
                    {
                        echo "".$session_agent->sessionAgent['lieuNaissance'];
                        }?>"/>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="selecetedSitMatrimoniale">Situation Matrimoniale </label>
                <select id="selecetedSitMatrimoniale" class="form-control"  name="selecetedSitMatrimoniale">
                    <option value="Marié" <?php if($sess_agent != null && isset($sess_agent['situationMatrimoniale'])){echo "selected";}?> >Marié</option>
                    <option value="Célibataire" <?php if($sess_agent != null && isset($sess_agent['situationMatrimoniale'])){echo "selected";}?> >Célibataire</option>
                    <option value="Divorcé/Veuf" <?php if($sess_agent != null && isset($sess_agent['situationMatrimoniale'])){echo "selected";}?> >Divorcé/Veuf</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputNombreEnfant">Nombre Enfant</label>
                <input type="number" class="form-control" id="inputNombreEnfant" name="inputNombreEnfant" 
                value="<?php if($sess_agent != null && isset($sess_agent['nbEnfant']))
                    {
                        echo "".$session_agent->sessionAgent['nbEnfant'];
                        }?>"/>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputnumTel">Numero Telephone</label>
                <input type="text" class="form-control" id="inputnumTel" name="inputnumTel" 
                value="<?php if($sess_agent != null && isset($sess_agent['numTel']))
                    {
                        echo "".$session_agent->sessionAgent['numTel'];
                        }?>"/>
            </div>
            <div class="form-group col-md-2">
                <label for="inputemail">Email</label>
                <input type="text" class="form-control" id="inputemail" name="inputemail" 
                value="<?php if($sess_agent != null && isset($sess_agent['email']))
                    {
                        echo "".$session_agent->sessionAgent['email'];
                        }?>"/>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="selecetedVille">Ville</label>
                <select id="selecetedVille" class="form-control"  name="selecetedVille">
                    <option value="Lubumbashi" <?php if($sess_agent != null && isset($sess_agent['ville'])){echo "selected";}?> >Lubumbashi</option>
                    <option value="Kipushi" <?php if($sess_agent != null && isset($sess_agent['ville'])){echo "selected";}?> >Kipushi</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="selecetedCommune">Commune</label>
                <select id="selecetedCommune" class="form-control"  name="selecetedCommune">
                    <option value="Lubumbashi" <?php if($sess_agent != null && isset($sess_agent['commune'])){echo "selected";}?> >Lubumbashi</option>
                    <option value="Kenya" <?php if($sess_agent != null && isset($sess_agent['commune'])){echo "selected";}?> >Kenya</option>
                    <option value="Annexe" <?php if($sess_agent != null && isset($sess_agent['commune'])){echo "selected";}?> >Annexe</option>
                    <option value="Gambel" <?php if($sess_agent != null && isset($sess_agent['commune'])){echo "selected";}?> >Gambela</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputadressePhyique">Addresse Phyique</label>
                <input type="text" class="form-control" id="inputadressePhyique" name="inputadressePhyique"
                value="<?php if($sess_agent != null && isset($sess_agent['adressePhysique']))
                    {
                        echo "".$session_agent->sessionAgent['adressePhysique'];
                        }?>"/>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputdateEmbauche">Date Embauche</label>
                <input type="date" class="form-control" id="inputdateEmbauche" name="inputdateEmbauche"
                value="<?php if($sess_agent != null && isset($sess_agent['dateEmbauche']))
                    {
                        echo "".$session_agent->sessionAgent['dateEmbauche'];
                        }?>"/>
            </div>
            <div class="form-group col-md-4">
                <label for="selectedGradeStatut">Grade Statut</label>
                <select id="selectedGradeStatut" class="form-control"  name="selectedGradeStatut">
                    <option value="Direction provinciale"<?php if($sess_agent != null && isset($sess_agent['gradeStatut'])){echo "selected";}?> >Directeur Provinciale</option>
                    <option value="Directeur de division" <?php if($sess_agent != null && isset($sess_agent['gradeStatut'])){echo "selected";}?> >Directeur de division</option>
                    <option value="Chef de bureau" <?php if($sess_agent != null && isset($sess_agent['gradeStatut'])){echo "selected";}?> >Chef de bureau</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="selectedService">Service</label>
                <select id="selectedService" class="form-control"  name="selectedService">
                    <option value="Direction" <?php if($sess_agent != null && isset($sess_agent['service'])){echo "selected";}?> >Direction</option>
                    <option value="Division" <?php if($sess_agent != null && isset($sess_agent['service'])){echo "selected";}?> >Division</option>
                    <option value="Bureau stat et Demog" <?php if($sess_agent != null && isset($sess_agent['service'])){echo "selected";}?> >Bureau statistique et démographique</option>
                    <option value="Bureau stat économique" <?php if($sess_agent != null && isset($sess_agent['service'])){echo "selected";}?> >Bureau statistique économique</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="selectedMecanisé">Mecanisation</label>
                <select id="selectedMecanisé" class="form-control"  name="selectedMecanisé">
                    <option value="Oui" <?php if($sess_agent != null && isset($sess_agent['mecanisation'])){echo "selected";}?> >Mécanisé</option>
                    <option value="Non" <?php if($sess_agent != null && isset($sess_agent['mecanisation'])){echo "selected";}?> >Non mécanisé</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            
            <div class="form-group col-md-2">
                <label for="inputdernierDiplome">Dernier Diplome</label>
                <input type="text" class="form-control" id="inputdernierDiplome" name="inputdernierDiplome"
                value="<?php if($sess_agent != null && isset($sess_agent['dernierDiplome']))
                    {
                        echo "".$session_agent->sessionAgent['dernierDiplome'];
                        }?>"/>
            </div>
            <div class="form-group col-md-2">
                <label for="inputAnneeobtention">Annee Obtention</label>
                <input type="number" class="form-control" id="inputAnneeobtention" name="inputAnneeobtention" value="2021"
                value="<?php if($sess_agent != null && isset($sess_agent['anneeObtention']))
                    {
                        echo "".$session_agent->sessionAgent['anneeObtention'];
                        }?>"/>
            </div>
            <div class="form-group col-md-2">
                <label for="inputdomaineEtude">Domaine Etude</label>
                <input type="text" class="form-control" id="inputdomaineEtude" name="inputdomaineEtude"
                value="<?php if($sess_agent != null && isset($sess_agent['domaineEtude']))
                    {
                        echo "".$session_agent->sessionAgent['domaineEtude'];
                        }?>"/>
            </div>
        </div>
        <div class="form row">
            <div class="form-group col-md-4">
                <label for="inputEtablissement">Etablissement</label>
                <input type="text" class="form-control" id="inputEtablissement" name="inputEtablissement"
                value="<?php if($sess_agent != null && isset($sess_agent['etablissement']))
                    {
                        echo "".$session_agent->sessionAgent['etablissement'];
                        }?>"/>
            </div>
        </div>  
        <div class="form-group row">
        <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
        </div>
        </div>
    </form>
</div>
<script src="">
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}
</script>
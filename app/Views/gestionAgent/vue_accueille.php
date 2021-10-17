



    <div class="row">
        <div class="form-inline col-md-5 bg container">
            <div class="form-inline col-md-2">
                <a class="" href="<?=base_url().'\GestionAgent\ajouterAgent';?>">
                    <img src="../assets/icones/Entypo_e700(2)_64.png" alt="Ajouter un nouvel agent" width="40px"/>
                </a><br>  
            </div>
            <div class="form-inline col-md-5 offset-0 bg-gray row">
                <a class="col-md-4" href="<?=base_url().'\GestionAgent\ajouterAgent';?>">
                    <img src="../assets/icones/Entypo_e754(0)_64.png" alt="Extraire une base" width="40px"/>
                </a><br>
                <a href="" class=" col-md-2 offset-0" >
                    <img src="../assets/icones/Entypo_e716(2)_64.png" alt="Imprimer" width="40px"/>
                </a>
            </div>
        </div>
        <form class="form-inline my-4 my-lg-0 offset-2">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" id="myInput" onkeyup="functionFiltre()">
            
            <Select class="form-control col-md-4 bg-success text-white" id="typeFilerSelector">
                            <option value="2" >Matricule</option>
                            <option value="3" selected >Nom</option>
                            <option value="4" >Postnom</option>
                            <option value="5" >Prenom</option>
                            <option value="6" >Sexe M</option>
                        </Select>
        </form>
    </div>
</div>
<?php

if(isset($lesAgents))
{
    ?>
    
    <table class="table table-border" id="myTable">
        <thead>
            <tr>
                <td><b>N°</b></td>
                <td><b>Profile</b></td>
                <td><b>Matricule</b></td>
                <td><b>Nom</b></td>
                <td><b>Postnom</b></td>
                <td><b>Prenom</b></td>
                <!-- ------------------------------------------------------------------------------------ -->
                <td id="identity"><b>Sexe</b></td>
                <!--td id="identity"><b>Date Naissance</b></td>
                <td id="identity"><b>Lieu De Naissance</td-->
                <td id="identity"><b>Situation matrimonialle</b></td>
                <!--td id="identity"><b>Enfant</td-->
                <!-- ------------------------------------------------------------------------------------ -
                <td id="localisation"><b>Téléphone</b></td>
                <td id="localisation"><b>Email</td-->
                <td id="localisation"><b>Ville</b></td>
                <!--td id="localisation"><b>Commune</b></td>
                <td id="localisation"><b>Adresse physique</td-->
                <!-- ------------------------------------------------------------------------------------ -
                <td id="service"><b>DateEmbauche</b></td>
                <td id="service"><b>Grade statut</b></td>
                <td id="service"><b>Service</b></td>
                <td id="service"><b>Mécanisation</td-->
                <!-- ------------------------------------------------------------------------------------ --
                <td id="profession"><b>Dernier diplome</b></td>
                <td id="profession"><b>Année obtention</b></td>
                <td id="profession"><b>Domaine d'étude</b></td>
                <td id="profession"><b>Etablissement</td-->
                <td>
                    <div class="row">
                        <span id="demo">Opérations</span>
                        <!--Select class="form-control col-md-6 offset-1 bg-success text-white" id="mySelectTri" onchange="myFunction()">
                            <option value="1" selected >Identité</option>
                            <option value="2" >Localisation</option>
                            <option value="3" >Service</option>
                            <option value="4" >Professionnel</option>
                        </Select-->
                    </div>
                </td>                         
            </tr>
        </thead>
        <?php
        $i = 1;
    foreach( $lesAgents as $agent)
    {
        ?>
        <tr>
        <td><b><?=$i++?></a></td>
        <td><img src="" alt="profile" width="50px"/></td>
        <td><?=$agent['matricule']?></td>
        <td><?=$agent['nom']?></td>
        <td><?=$agent['postnom']?></td>
        <td><?=$agent['prenom']?></td>
        <td><?=$agent['sexe']?></td>
        <td><?=$agent['situationMatrimoniale']?></td>
        <td><?=$agent['ville']?></td>
        <td>
            <a href="<?=base_url().'/GestionAgent/voirDetailAgent/'.$agent['id'];?>" ><img src="../assets/icones/Entypo_e722(1)_64.png" alt="Voir plus" width="30px"/></a>
        </td>
        <td>
            <a href="<?=base_url().'/GestionAgent/modifierAgent/'.$agent['id'];?>"><img src="../assets/icones/Entypo_e722(0)_32.png" alt="Modifier" width="30px"/></a>
        </td>
        <td><a href="">Archiver</a></td>
        </tr>
        <?php
    }
    ?>
    <?php
}else{
    echo "no data";
}

?>
</div>
</div>
<script>
    /**/
        //alert(indexfiltreType);
function functionFiltre() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue, elt;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  elt = document.querySelector('#typeFilerSelector');
    //alert(elt.value);
  //t = document.getElementById('filtreTypeSelected');
    //alert(t.textContent);
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[elt.value];
    //alert(tdNom.textContent);
    if (td) {
      txtValue = td.textContent || td.innerText;
      //alert(txtValue);
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function myFunction_() {
    // Declare variables
  var input, filter, table, tr, td, i, j, txtValue, elt;
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  elt = document.querySelector('#typeFilerSelector');
  var x = document.getElementById("mySelectTri").value;
  var s = document.getElementById("demo");//.innerHTML = "You selected: " + x;
    //alert(x);
    for(j = 0; j < tr.length; j++){
        td = tr[j].getElementsByTagName('td');
        for (i = 0; i < td.length; i++) {
            //if(x == 2){
                //alert("x = 2");
                //td[i].style.display = "non";
                //s.innerHTML = td.TextContent;
//}
        }
    }
}
</script>
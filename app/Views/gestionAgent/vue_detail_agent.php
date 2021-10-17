
<h1>Détail agent</h1>
<hr>
<?php
   
        $session = \Config\Services::session();
        $session_agent = session();
        //var_dump(isset($session_agent->sessionAgent));
        //var_dump($session_agent->sessionAgent);
        $sess_agent = null;
        if(isset($session_agent->sessionAgent)){
            $sess_agent = $session_agent->sessionAgent;
            //var_dump($sess_agent);
            
            $itemTab = [
                'MATRICULE',
                'PROFILE',
                'NOM',
                'POSTNOM',
                'PRENOM',
                'SEXE',
                'DATE DE NAISSANCE',
                'LIEU DE NAISSANCE',
                'SITUATION MATRIMONIALE',
                'NOMBRE D\'ENFANT',
                'TELEPHONE',
                'ADRESSE ELECTRONIQUE',
                'VILLE',
                'COMMUNE',
                'ADRESSE PHYSIQUE',
                'DATE D\'EMBAUCHE',
                'GRADE STATUT',
                'SERVICE',
                'MECANISATION',
                'DERNIER DIPLOME',
                'ANNEE D\'OBTENTION',
                'DOMAINE D\'ETUDE',
                'ETABLISSEMENT'
            ];
        ?>
<!-- ------------------------PRESENTATION----------------------------------------- -->
        <div class="form-inline bg- container">
            <div class="form-inline col-md-12 offset-0 row">
                <a class="col-md-2" href="">
                    <img src="../assets/icones/Entypo_e754(0)_64.png" alt="Extraire une base" width="40px"/>
                </a><br>
                <a href="" class=" col-md-2 offset-0" >
                    <img src="../assets/icones/Entypo_e716(2)_64.png" alt="Imprimer" width="40px"/>
                </a>
                <a href="<?=base_url().'/GestionAgent/modifierAgent/'.$sess_agent['id'];?>" class=" col-md-2 offset-6" >
                    <img src="../assets/icones/Entypo_e722(0)_32.png" alt="Modifier" width="40px"/>
                </a>
            </div>
        </div>
<table class="table col-md-6" Style="margin : 10px; margin-left:250px;">
    <thead class="head">
        <tr>
            <td><b>ITEM</b></td>
            <td><b>VALEUR</b></td>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($sess_agent as $index => $item) {
            if ($index != 'id' && $i < 23){
        ?>
        <tr>
            <td class="text"><b><?=$itemTab[$i] ?></b></td>
            <td><?=$item ?></td>
        </tr>
        <?php 
            $i++;
            }
        } ?>
    </tbody>
</table>






<?php
    }else{
        echo "nonthing to show !";
    }
?>
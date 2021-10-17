<section>
    <div>
        <h1 class="">Gestionnaire affectation mission</h1>
        <hr/>
</div>
<div class="container form-inline" style="margin-top: 10px;">
    <a href="<?= site_url('') ?>" class="col-md-1">
        <img src="../assets/icones/Entypo_e754(0)_64.png"  class="imgClass" width="40px"  alt="Extraire une base">
    </a>
    <a href="<?= site_url('') ?>" class="col-md-1 offset-1">
        <img src="../assets/icones/Entypo_e716(2)_64.png"  class="imgClass" width="40px"  alt="Imprimer">
    </a>
    <a href="<?= site_url('') ?>" class="col-md-2 offset-1">
        <img src="../assets/icones/Entypo_e716(3)_64.png"  class="imgClass" width="40px"  alt="Les missions">
    </a>
    <form class="form-inline my-2 my-lg-0 offset-2">
        <input class="form-control mr-sm-1" type="text" placeholder="recherche" aria-label="Search" id="myInput" onkeyup="functionFiltre()"/>  
    </form>
</div>
<?php
?>
    <div  class="table table-border col-md-10 offset-1 responsive">
            <table class="table table-border">
                    <thead>
                        <tr>
                            <td><b>N°</b></td>
                            <td><b>Nom</b></td>
                            <td><b>Postnom</b></td>
                            <td><b>Prenom</b></td>
                            <td><b>En mission</b></td>
                            <td><b>Durée</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        //var_dump(isset($agents));
                        if(isset($agents) == true && isset($missions) == true){
                            //$agentObj = $agents;
                            //var_dump($missions[0]);
                            foreach ($agents as $key => $value) {
                                ?>
                        <tr>
                            <td><b><?=$i; ?></b></td>
                            <td><?=$value['nom'];?></td>
                            <td><?=$value['postnom'];?></td>
                            <td><?=$value['prenom'];?></td>
                            <td><input type="checkbox"
                                <?php for ($j=0; $j < sizeof($missions); $j++)
                                    {
                                        if($missions[$j]['idAgent'] == $value['id'])
                                        {
                                            echo "checked";
                                        }
                                    }
                                ?>
                                />
                            </td>
                                
                            <td>
                                <?php for ($j=0; $j < sizeof($missions); $j++)
                                    { 
                                        if($missions[$j]['idAgent'] == $value['id'])
                                        {
                                            $dateDebut = date($missions[$j]['dateDebut']);
                                            $dateFin = date($missions[$j]['dateFin']);
                                            $firstDate = "2019-01-01";
                                            $secondDate = "2020-03-04";

                                            $dateDifference = abs(strtotime($dateFin) - strtotime($dateDebut));

                                            $years  = floor($dateDifference / (365 * 60 * 60 * 24));
                                            $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                            $days   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 *24) / (60 * 60 * 24));

                                            ?>
                                            <spam><?=$days?><i> jour(s)</i><?=" / ".$months." <i>mois</i> / ".$days."<i> An(s)</i>";?></spam>
                                            <?php
                                        }
                                    }
                                ?>
                            </td>
                            
                            <td>
                                <?php
                                    for ($j=0; $j < sizeof($missions); $j++)
                                    { 
                                        if($missions[$j]['idAgent'] == $value['id'])
                                        {
                                            ?>
                                            <a href="<?=base_url('GestionAffectationMission/voirMission/'.$missions[$j]['id'])?>" class="btn btn-primary nb-2" desabled >Mission</a>
                                            <?php
                                            break;
                                        }
                                    }
                                ?>
                                <?php
                                    for ($j=0; $j < sizeof($missions); $j++)
                                    { 
                                        if($missions[$j]['idAgent'] != $value['id'])
                                        {
                                            ?>
                                            <a href="<?=base_url('GestionAffectationMission/voirMissions/'.$missions[$j]['id'])?>" class="btn btn-success nb-2" desabled >Affecter</a>
                                            <?php
                                            break;
                                        }
                                    }
                                ?>
                            </td>
                        </tr><?php
                            $i++;
                            }
                        }
                        ?>
                    </tbody>
                 </table>
            </div>
        
    </div>
</section>
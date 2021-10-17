<h1>Mission agent</h1>
<hr>
<?php

$session = \Config\Services::session();
$_session = session();
var_dump($_session->idMission);

$itemTab = [
    'CODE MISSION',
    'OBJECTIF MISSION',
    'LIEU MISSION',
    'DATE DEBUT',
    'DATE FIN',
    'NOM AGENT'
];
?>
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
        foreach ($missions as $index => $item) {
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
        <?php /*
        $i = 0;
        foreach ($missions as $index => $item) {
            //if ($index != 'id' && $i < 23){
                //var_dump($item);
        ?>
        <tr>
            <td><?php
                foreach ($item as $key => $value) {
                    ?>
                    <td><?=$value?></td>
                    <?php
                }
            ?></td>
        </tr>
        <?php 
            $i++;
            
        } */ ?>
    </tbody>
</table>
<div data-role="page" id="pagegerermesoffres">
    <div data-role="content" id="divmesoffres">   
<?php
include "vues/entetepageavecboutonretour.html";
?>
     <legend id="test" >Mes offres au départ de l'entreprise</legend>
        <div data-role="controlgroup"id="listdepart" data-theme="b">
            <?php 
                foreach($lesOffresDepartEntreprise as $uneOffre){
                        $legende = $uneOffre['jour']."   ".$uneOffre['date']."   ".$uneOffre['heure'];  
            ?>
            <input  id="<?php echo $uneOffre['id']?>" type="checkbox" data-theme="b">
            <label  for="<?php echo $uneOffre['id']?>" data-theme="b"><?php echo $legende?></label>
            <?php }
            ?>
        </div>
        <div data-role="controlgroup"id="listarrivee"> 
            <legend>Mes offres au départ du domicile</legend>
            <?php 
            foreach($lesOffresArriveeEntreprise as $uneOffre){
                $legende = $uneOffre['jour']."   ".$uneOffre['date']."   ".$uneOffre['heure'];  
            ?>
                <input  id="<?php echo $uneOffre['id']?>" type="checkbox" data-theme="b">
                 <label for="<?php echo $uneOffre['id']?>" data-theme="b"><?php echo $legende?></label>

        <?php }
            ?>
        </div>        
            <p>
                <a  data-role="button" id="btnSupprimer" data-icon="delete">Supprimer</a>
            </p>
            <p>
               <a  href="#pageajouteroffre" data-role="button" id="btnAjouter" data-icon="plus" data-inline="true" data-mini="true">Ajouter une offre</a>
            </p>
      </div><!-- /fin content -->    
<?php    
    include "vues/pied.html";
?>
        
</div><!-- /fin page -->
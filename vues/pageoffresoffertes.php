<div data-role="page" id="pageoffresoffertes">
<?php
    include "vues/entetepageavecboutonretour.html";
?>
    <div data-role="content" > 
        <div data-role="collapsible-set" id="divliste" data-theme="c"> 
           
<?php
$i = 0; 
$jour = "";
foreach ($lesOffres as $uneOffre){
    if($jour!=$uneOffre['jour']){
        $jour=$uneOffre['jour'];
        if($i!=0){
        ?>
          </ul>
            </div><!-- /fin collapsible -->    
         <?php } ?>
            <div data-role="collapsible" >
                <h3><?php echo $jour ?></h3>
             <ul data-role="listview" id="lstoffres">
        <?php 
     }
         ?>
              <li id="<?php echo $uneOffre['id'] ?>"><a href ="#pageoffre">
                    <?php echo $uneOffre['date']." à ".$uneOffre['heure']." pour ".$uneOffre['retour']?> 
                    </a>
              </li> 
          <?php 
    $i++;   
    }
?>
      </div>  <!-- /fin dernier collapsible -->            
 </div>  <!-- /fin collapsible-set -->
 </div> <!-- fin content--> 
    <?php    
include "vues/pied.html";
?>
</div><!-- fin page-->
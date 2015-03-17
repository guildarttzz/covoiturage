<div data-role="page" id="pagemenuaccueil">
<?php
include "vues/entetepage.html";
include "vues/logo.html";
?>
 <div data-role="content" id="divinscription">    
    <div id="divmenuaccueil">
        <ul data-role="listview" >
            <li><a href="#">Voir toutes les offres arrivée entreprise</a></li>
          <!-- l'attribut rel="external" permet de faire appel à un lien externe sans passer par ajax -->  
            <li><a href="index.php?action=gereroffresdepartentreprise" rel="external">Voir toutes les offres départ entreprise</a></li>
            <li><a href="#">Gérer mes offres</a></li>
        </ul> 
    </div>
 </div>  <!-- /content -->   
    
<?php
 include "vues/pied.html";
?>
</div><!-- /page -->

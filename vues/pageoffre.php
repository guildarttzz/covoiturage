<div data-role="page" id="pageoffre"> 
<?php
include "vues/entetepageavecboutonretour.html";
?>
<div data-role="content" >  
     <div >
          <ul data-role ="listview" id="list" >
             <li id="nom">                       </li>
             <li id="prenom">                       </li>
             <li id="ramassage">                  </li>  
         </ul>
         <a href="tel:numeroTel" data-role="button" data-icon="grid"   id="tel"  data-inline="true" data-mini="true">Appeler</a>
         <a href="mailto:mail" data-role="button" data-inline="true" data-mini="true" id="mail">Contacter</a>
     </div>  
 </div><!-- /fin content -->
<?php
    include "vues/pied.html";
?>
</div><!-- /fin page -->
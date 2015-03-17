<div data-role="page" id="pageconnexion">
<?php
include "vues/entetepage.html";
include "vues/logo.html";
?>
<div data-role="content" id="divconnexion">       
   <a href="index.php?action=inscription" rel="external">Vous inscrire</a> 
    <div data-role="fieldcontain">
        <label for="login">Login </label>
        <input type="text" name="login" id="login" value="" />
        <label for="login">Mot de passe </label>
        <input type="password" name="mdp" id="mdp" value="" />
    </div>
    <div id ="message"></div>
        <p>
            <a href="#"  data-role="button" id="btnconnexion" >Connexion</a>
         </p>
    </div><!-- /content -->
    
<?php    
include "vues/pied.html";
?>
</div> <!-- /page -->
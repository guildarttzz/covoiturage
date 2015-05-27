<div data-role="page" id="pageajouteroffre">
    <div data-role="content" id="divajouteroffre">   
<?php
include "vues/entetepageavecboutonretour.html";
?>
<form id="frmoffre" action="#">
    <p></p>
    <legend>Les départs</legend>
    <select id="typeoffre" data-role="slider" data-inline="true">
        <option value="depart">Domicile</option>
        <option value="arrivee">Entreprise</option>
     </select>
     <p></p>
     <legend>Les offres</legend>
    <select id="periodicite" data-role="slider" data-inline="true">
        <option value="permanente">Permanente</option>
        <option value="date">Date</option>
     </select>
     <p></p>
     <div id="divjour">
     <legend>Les jours proposés</legend>
     <div data-role="controlgroup" data-type="horizontal" id="jour">
         <label for="lundi">Lundi</label><input type ="radio" id="lundi" name="choixjour" checked="">
         <label for="mardi">Mardi</label><input type ="radio" id="mardi" name="choixjour">
         <label for="mercredi">Mercredi</label><input type ="radio" id="mercredi" name="choixjour">
         <label for="jeudi">Jeudi</label><input type ="radio" id="jeudi" name="choixjour">
         <label for="vendredi">Vendredi</label><input type ="radio" id="vendredi" name="choixjour">
      </div>

     </div>
     <p></p>
    <div id="divdate">
        <label for="date">La Date</label>
        <input type="date" name="date" id="date" value="" class="required date"  />    
    </div>
    <p></p>
    <label for="heure">Heure de départ :</label> <input name="heure" id="heure" type="range" min="6" max="23"  value="6" data-highlight="true">
    <label for="minute">Préciser le minutage</label> <input name="minute" id="minute" type="range" min="0" max="55" step="5" value="0" data-highlight="true">
    <label for="lieu">A quel endroit ?</label>
    <p></p>
        <input type="text" name="lieu" id="lieu"  value="" class="required" />    
        <div id="divramassage">
        <p></p>
            <legend>Les points de ramassage éventuels</legend>
            <a href="#" data-role="button" data-icon="plus"  data-inline="true" id="btnnouveauramassage">nouveau point de ramassage</a>
        </div>
        <p></p>
            <input  type="button" name="btnvalideroffre" id="btnvalideroffre" value="Envoyer"  />
</form>
</div>
<?php    
    include "vues/pied.html";
?>
</div>
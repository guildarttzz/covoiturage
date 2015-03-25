<div data-role="page" id="pageinscription">
    <?php
        include "vues/enteteretour.html";
        include "vues/logo.html";
    ?>
    <div data-role="content" id="divconnexion">
        <div data-role="fieldcontain">
            <label for="nom">Nom </label>
            <input type="text" name="nom" id="nom" value="" />
            <label for="prenom">Prénom </label>
            <input type="text" name="prenom" id="prenom" value="" />
            <label for="mail">Mail </label>
            <input type="text" name="mail" id="mail" value="" />
            <label for="tel">Téléphone </label>
            <input type="tel" name="tel" id="tel" value="" />
            <fieldset data-role="controlgroup" data-type="horizontal">
                <legend>Indiquer votre service </legend>

                <input type="radio" name="type" id="type1" class="" placeholder="" value="1" checked="checked" />
                <label for="type1">Recherche</label>

                <input type="radio" name="type" id="type2" class="" placeholder="" value="2" />
                <label for="type2">Production</label>

                <input type="radio" name="type" id="type3" class="" placeholder="" value="3" />
                <label for="type3">Commercial</label>

                <input type="radio" name="type" id="type4" class="" placeholder="" value="4" />
                <label for="type4">Securite</label>
            </fieldset>
        </div>
        <div id="divinscription"></div>
        <p>
            <a href="#"  data-role="button" id="btninscription" >Envoyer</a>
        </p>
    </div><!-- /content -->
    <?php
       include "vues/pied.html";
    ?>
</div><!-- /page -->
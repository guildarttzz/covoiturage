<div data-role="page" id="pagemesoffre"> 
    <?php include "vues/entetepageavecboutonretour.html"; ?>
    <div data-role="content">  
        <div id="mesoffres">
            <p>Mes offres au départ de l'entreprise</p>
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                <?php foreach ($departs as $offre) {
                    if( $offre['idchauffeur'] == $user ){
                        echo '<input data-theme="b" type="checkbox" name="'.$offre['id'].'" id="'.$offre['id'].'"/>
                            <label for="'.$offre['id'].'">'.$offre['jour'].' '.$offre['date'].' '.$offre['heure'].'</label>';
                    }
                } ?>
                </fieldset>
            </div>
            <p>Mes offres à l'arrivée de l'entreprise</p>
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                <?php foreach ($arrivee as $offre) {
                    if( $offre['idchauffeur'] == $user ){
                        echo '<input data-theme="b" type="checkbox" name="'.$offre['id'].'" id="'.$offre['id'].'"/>
                            <label for="'.$offre['id'].'">'.$offre['jour'].' '.$offre['date'].' '.$offre['heure'].'</label>';
                    }
                } ?>
                </fieldset>
            </div>
            <a data-role="button" id="supprOffre" data-icon="delete">Supprimer</a>
        </div>          
    </div>
    <?php include "vues/pied.html"; ?>
</div>
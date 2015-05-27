<?php

// code non encore écrit qui retournera le login s'il est présent en base ou une chaine vide, 
// à faire dans une itération suivante
function verifuser($login, $mdp)
{
    $tab =  GetLesUsers();
    $user = "";
    foreach($tab as $unUser){
        if($unUser['user']==$login && $unUser['mdp']==$mdp){
            $user = $unUser['id'];
         }
    }
        
    return $user;
}
function estConnecte()
{
    return isset($_SESSION['id']);

}


// retourne un tableau trié sur les jours de la semaine croissants
function getLesOffresDepartEntreprise()
{
    $tab=array(
                array("id"=>1,
                       "idchauffeur"=>"c1",
                       "jour"=>"mardi",
                       "date"=>"permanent",
                       "heure"=>"15h",
                       "retour"=>"paris 20",
                       "nom"=>"Durand",
                       "prenom"=>"Jean",
                       "mail"=>"durand@gmail.com",
                       "tel"=>"0148592370"),
                array("id"=>2,
                        "idchauffeur"=>"c2",
                       "jour"=>"mardi",
                       "date"=>"15/02/2014",
                        "heure"=>"16h",
                       "retour"=>"Métro Robespierre",
                     "nom"=>"Duval",
                       "prenom"=>"Anne",
                     "mail"=>"duval@gmail.com",
                       "tel"=>"0688300169"),
                array("id"=>3,
                       "idchauffeur"=>"c3",
                       "jour"=>"mercredi",
                       "date"=>"26/02/2014",
                        "heure"=>"17h30",
                       "retour"=>"Bobigny Mairie",
                     "nom"=>"Ahmad",
                       "prenom"=>"Louise",
                     "mail"=>"ahmad@gmail.com",
                     "tel"=>"01458798"),
                array("id"=>4,
                        "idchauffeur"=>"c1",
                       "jour"=>"mercredi",
                       "date"=>"permanent",
                        "heure"=>"17h",
                       "retour"=>"paris 20",
                        "nom"=>"Durand",
                       "prenom"=>"Jean",
                      "mail"=>"durand@gmail.com",
                       "tel"=>"0148592370"),
                array("id"=>5,
                       "idchauffeur"=>"c2",
                       "jour"=>"vendredi",
                       "date"=>"28/02/2014",
                        "heure"=>"17h30",
                       "retour"=>"Métro Robespierre",
                     "nom"=>"Duval",
                       "prenom"=>"Anne",
                        "mail"=>"duval@gmail.com",
                       "tel"=>"0688300169"),
                array("id"=>6,
                    "idchauffeur"=>"c3",
                       "jour"=>"vendredi",
                       "date"=>"permanent",
                        "heure"=>"15h30",
                       "retour"=>"Bobigny Mairie",
                    "nom"=>"Ahmad",
                       "prenom"=>"Louise",
                     "mail"=>"ahmad@gmail.com",
                     "tel"=>"01458798"),
                        
    );
    return $tab;
    
}

function getOffreDepartEntreprise($id){
    $lesOffres = getLesOffresDepartEntreprise();
    $offre=array();
    foreach ($lesOffres as $uneOffre){
            if($uneOffre["id"]==$id)
                 $offre =  $uneOffre;
    }
    return $offre;
}
function getLesOffresArriveeEntreprise(){
    $tab=array(
                array("id"=>7,
                        "idchauffeur"=>"c1",
                       "jour"=>"lundi",
                       "date"=>"permanent",
                       "heure"=>"8h",
                       "ramassage"=> array(array("id"=>1,"lieu"=>"porte des lilas"),array("id"=>2,"lieu"=>"porte de bagnolet")),
                       "depart"=>"paris 20",
                       "nom"=>"Durand",
                       "prenom"=>"Jean",
                        "mail"=>"durand@gmail.com",
                       "tel"=>"0148592370"),
                array("id"=>8,
                       "idchauffeur"=>"c1",
                       "jour"=>"mardi",
                       "date"=>"15/02/2014",
                        "heure"=>"9h",
                      "ramassage"=> array(array("id"=>1,"lieu"=>"porte des lilas"),array("id"=>2,"lieu"=>"porte de bagnolet")),
                       "depart"=>"paris 20",
                     "nom"=>"Durand",
                       "prenom"=>"Jean",
                     "mail"=>"durand@gmail.com",
                       "tel"=>"0148592370"),
                array("id"=>9,
                    "idchauffeur"=>"c2",
                       "jour"=>"mardi",
                       "date"=>"26/02/2014",
                        "heure"=>"7h30",
                      "ramassage"=> array(array("id"=>1,"lieu"=>"Mairie de Montreuil"),array("id"=>2,"lieu"=>"A3 Villiers")),
                       "depart"=>"Métro Robespierre",
                     "nom"=>"Duval",
                       "prenom"=>"Anne",
                        "mail"=>"duval@gmail.com",
                       "tel"=>"0688300169"),
                array("id"=>10,
                      "idchauffeur"=>"c2",
                       "jour"=>"mercredi",
                       "date"=>"permanent",
                        "heure"=>"8h",
                          "ramassage"=> array(array("id"=>1,"lieu"=>"Mairie de Montreuil"),array("id"=>2,"lieu"=>"A3 Villiers")),
                       "depart"=>"Métro Robespierre",
                     "nom"=>"Duval",
                       "prenom"=>"Anne",
                        "mail"=>"duval@gmail.com",
                       "tel"=>"0688300169"),
                array("id"=>11,
                       "idchauffeur"=>"c1",
                       "jour"=>"vendredi",
                       "date"=>"28/02/2014",
                        "heure"=>"7h30",
                       "ramassage"=> array(array("id"=>1,"lieu"=>"porte des lilas"),array("id"=>2,"lieu"=>"porte de bagnolet")),
                       "depart"=>"Paris 20",
                     "nom"=>"Durand",
                       "prenom"=>"Jean",
                         "mail"=>"durand@gmail.com",
                       "tel"=>"0148592370"),
                array("id"=>12,
                       "idchauffeur"=>"c3",
                       "jour"=>"vendredi",
                       "date"=>"permanent",
                        "heure"=>"8h",
                     "ramassage"=> array(array("id"=>1,"lieu"=>"Bobigny A3"),array("id"=>2,"lieu"=>"Bondy")),
                       "depart"=>"Bobigny Mairie",
                    "nom"=>"Ahmad",
                       "prenom"=>"Louise",
                     "mail"=>"ahmad@gmail.com",
                     "tel"=>"01458798"),
                        
    );
    return $tab;
    
    
    
}
function getOffreArriveeEntreprise($id){
    $lesOffres = getLesOffresArriveeEntreprise();
    $offre=array();
    foreach ($lesOffres as $uneOffre){
         if($uneOffre["id"]==$id)
                 $offre =  $uneOffre;
    }
    return $offre;
}
/* retourne la liste des inscrits*/
function GetLesUsers(){
    $tab=array( 
                array("id"=>"c1","user"=>"jdurand","mdp"=>"aaaa"),
                array("id"=>"c2","user"=>"dduval","mdp"=>"bbbb"),
                array("id"=>"c3","user"=>"lahmad","mdp"=>"cccc"));
   return $tab;
}

function getMesOffresDepartEntreprise($id){
    $tab = getLesOffresDepartEntreprise();
    $lesOffres = array();
    foreach($tab as $uneOffre)
        if($uneOffre['idchauffeur'] == $id)
                $lesOffres[] = $uneOffre;
    return $lesOffres;    
}
function getMesOffresArriveeEntreprise($id){
    $tab = getLesOffresArriveeEntreprise();
    $lesOffres = array();
    foreach($tab as $uneOffre)
        if($uneOffre['idchauffeur'] == $id)
                $lesOffres[] = $uneOffre;
    return $lesOffres;    
}

?>

<?php

// code non encore écrit qui retournera le login s'il est présent en base ou une chaine vide, 
// à faire dans une itération suivante
function verifuser($login, $mdp)
{
     return $login;
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
?>

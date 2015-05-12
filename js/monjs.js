$(function() {
    /*********************************** Page connexion************************************/
    $('#btnconnexion').click(function(e) {
        // les deux lignes annulent le comportement par défaut du clic
        // c'est à dire href="#" qui provoquerait un rappel de la même page
        e.preventDefault();
        e.stopPropagation();
        var mdp = $("#mdp").val(); //récupère le contenue de la zone d'id mdp
        var login = $("#login").val();
        /* appel d'une fonction ajax */
        // elle prend 3 arguments :
        // 1- le nom de la fonction php qui sera exécutée
        // 2- la liste des arguments à fournir à cette fonction
        // 3- le nom de la fonction JS qui sera exécutée au "retour" du serveur 
        $.post("ajax/traiterconnexion.php", {
            // valorise les deux arguments passés à la fonction traiterconnexion
            "mdp": mdp,
            "login": login
        }, foncRetourConnexion);
    });
    /* fonction JS qui sera exécutée après le retour de l'appel ajax précedent */
    // le paramètre data représente la donnée envoyée par le serveur
    // résultat de l'appel de la fonction retourConnexion.php
    function foncRetourConnexion(data) {
        if (data.length != 0) {
            // charge la page (data-role=page) du même document dont l'id  est le sélecteur indiqué
            $.mobile.changePage("#pagemenuaccueil");
        } else {
            // sinon affichage d'un message dans la div d'id message  
            $("#message")
                .html("<p>Identifiant ou mdp incorrect</p>")
                .popup("open");
        }
    }
    /***************************************** Page inscription*******************************/
    $('#btninscription').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var mail = $("#mail").val();
        var tel = $("#tel").val();
        $.post("ajax/enregistreruser.php", {
            "nom": nom,
            "prenom": prenom,
            "mail": mail,
            "tel": tel,
            "type": $("input[type=radio][name=type]:checked").attr("value")
        }, foncRetourEnregistrement);
    });

    function foncRetourEnregistrement(data) {
        $("#divinscription").html(data);
    }

    $("#lstoffres > li").click( function() {
        var id = $(this).attr("id");
        $.ajax({
            method: "POST",
            url: "ajax/traiteroffre.php",
            data: { offre: id },
            dataType: 'json',
            success: function(json){
                var ramassage = $('<li />');
                if( json.ramassage ){
                    var listRama = $('<ul />');
                    for( var li in json.ramassage ){
                        listRama.append(
                            $('<li />').html(json.ramassage[li].lieu)
                        );
                        console.log(json.ramassage[li].lieu);
                    }

                    ramassage = 
                        $('<div />').append(
                            $('<h3 />').html('Etape(s) possible(s) sur le trajet:'),
                            listRama
                        )
                }

                var call = 
                    $('<a />')
                        .attr({
                            href: "tel:"+json.tel,
                            'data-role': "button",
                            'data-icon': "grid",
                            'data-inline':"true"
                        })
                        .html('Appeler');
                var contact = 
                    $('<a />')
                        .attr({
                            href: "mailto:"+json.mail,
                            'data-role': "button",
                            'data-inline':"true"
                        })
                        .html('Contacter');
                $('#offre')
                    .empty()
                    .append(
                        $('<ul />')
                            .attr({
                                "data-role": "listview",
                                "id": "info-user"
                            })
                            .append(
                                $('<li />').html('<a>'+json.nom+'</a>'),
                                $('<li />').html('<a>'+json.prenom+'</a>'),
                                ramassage,
                                $('<div />').append(
                                    call,
                                    contact
                                )
                            )
                    );
            },
            error: function(e){
                $('#offre')
                    .empty()
                    .append(
                        $('<p/>').html(e)
                    );
            }
        }).done( function(e){
            $('#info-user').listview();
            $('a[data-role="button"]').button();
        });
    });

    $('#supprOffre').click(function(){
        var allID = [];
        $('#mesoffres .ui-checkbox-on').each(function(){
            allID.push($(this).attr('for'));
        });

        $.ajax({
            method: "POST",
            url: "ajax/supprimermesoffres.php",
            data: { 'offres': allID },
            dataType: 'json',
            success: function(json){
                $('#mesoffres .ui-checkbox-on').each(function(){
                    $(this).parent('.ui-checkbox').remove();
                });
            },
            error: function(e){}
        });
    });
}); // fin fonction principale
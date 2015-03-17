<div data-role="page" id="pageoffresoffertes">
<?php
    include "vues/entetepage.html";
?>
<div data-role="content" id="divliste"> 
    <ul data-role="listview" id="lstoffres" >
<?php
    $jour = "";
    foreach ($lesOffres as $uneOffre){
        if($jour!=$uneOffre['jour']){
            $jour=$uneOffre['jour'];
    ?>
        <li data-role="list-diviser" data-theme="b"><?php echo $jour ?></li>
<?php 
        } //fin si
?>
           <li id="<?php echo $uneOffre['id'] ?>"><a href ="#pageoffre" ><?php echo $uneOffre['date']." à ".$uneOffre['heure']?> </a> 
<?php 
    } //fin foreach
?>
    </ul>
    </div><!-- /content -->
<?php    
    include "vues/pied.html";
?>
</div> <!-- /page -->
<div data-role="page" id="pageoffresoffertes">
    <?php
    include "vues/enteteretour.html";
    ?>
    <div data-role="content" id="divliste">
        <ul data-role="listview" id="lstoffres" >
            <?php foreach ($lesOffres as $jour => $offresJour): ?>
            <div data-role="collapsible" data-role="list-diviser" data-theme="c">
                <h3><?php echo $jour ?></h3>
                <ul data-role="listview" id="lstoffres" >
                    <?php foreach ($offresJour as $uneOffre): ?>

                        <li id="<?php echo $uneOffre['id'] ?>">
                            <a href="#pageoffre" >
                                <?php 
                                echo $uneOffre['date'] . " à " . $uneOffre['heure'] .
                                    ' pour ' . $uneOffre['retour']
                                ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php
            endforeach;
            ?>
        </ul>
    </div><!-- /content -->
    <?php include "vues/pied.html"; ?>
</div><!-- /page -->
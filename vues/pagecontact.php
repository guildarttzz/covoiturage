<div data-role="page" id="pageoffresoffertes">
    <?php include "vues/entetepageavecboutonretour.html"; ?>
    <div data-role="content" > 
        <div data-role="collapsible-set" id="divliste" data-theme="c">
            <ul data-role="listview">                
                <?php foreach ($users as $user): ?>
                    <li><?php echo $user['prenom'] ?></li>
                <?php endforeach ?>
            </ul>     
        </div> <!-- /fin collapsible-set -->
    </div> <!-- fin content--> 
    <?php include "vues/pied.html"; ?>
</div> <!-- fin page-->
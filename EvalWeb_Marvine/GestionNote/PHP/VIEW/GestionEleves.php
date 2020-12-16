<div>
<div class="colonne petitFlex">
    <div>Gestion de : </div>
    <ul>
        <li><a href="index.php?page=GestionEleves">Elèves</a></li>
        <li><a href="index.php?page=GestionEnseignants">Enseignants</a></li>
        <li><a href="index.php?page=GestionNotes">Notes</a></li>
        <li><a href="index.php?page=GestionMatieres">Matières</a></li>
    </ul> 
</div>

<div class="colonne centrer">

    <a href="index.php?page=FormEleves&mode=ajout" class="boutons">Ajouter un élève</a>

    <?php
        $eleves=ElevesManager::getList();
        foreach($eleves as $unEleve){
            echo '<div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">'.$unEleve->getNomEleve().'</div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">'.$unEleve->getPrenomEleve().'</div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">'.$unEleve->getClasse().'</div>';
                echo '<div class="icone centrer"><a class="" href = "index.php?page=FormEleves&mode=modif&id='.$unEleve->getIdEleve().'"><img src="./IMG/modifier.png" alt=""></a></div>';
                echo '<div class="espace"></div>';
                echo '<div class="icone centrer"><a class="" href = "index.php?page=ActionsEleves&mode=delete&id='.$unEleve->getIdEleve().'"><img src="./IMG/supprimer.png" alt=""></a></div>';
                echo '<div class="espace"></div>';
            echo '</div>';
        }
    ?>
</div>
</div>
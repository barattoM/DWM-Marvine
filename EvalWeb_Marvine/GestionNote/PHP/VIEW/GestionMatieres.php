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

    <a href="index.php?page=FormMatieres&mode=ajout" class="boutons">Ajouter une matière</a>

    <?php
        $matieres=MatieresManager::getList();
        foreach($matieres as $uneMatiere){
            echo '<div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">'.$uneMatiere->getLibelleMatiere().'</div>';
                echo '<div class="espace"></div>';
                echo '<div class="icone centrer"><a class="" href = "index.php?page=FormMatieres&mode=modif&id='.$uneMatiere->getIdMatiere().'"><img src="./IMG/modifier.png" alt=""></a></div>';
                echo '<div class="espace"></div>';
                echo '<div class="icone centrer"><a class="" href = "index.php?page=ActionsMatieres&mode=delete&id='.$uneMatiere->getIdMatiere().'"><img src="./IMG/supprimer.png" alt=""></a></div>';
                echo '<div class="espace"></div>';
            echo '</div>';
        }
    ?>
</div>
</div>
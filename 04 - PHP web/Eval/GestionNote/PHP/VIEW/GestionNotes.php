<div>
<?php
if (isset($_SESSION['utilisateur']) && $_SESSION['utilisateur']->getLogin() == "Proviseur") {
    echo '<div class="colonne petitFlex">
    <div>Gestion de : </div>
    <ul>
        <li><a href="index.php?page=GestionEleves">Elèves</a></li>
        <li><a href="index.php?page=GestionEnseignants">Enseignants</a></li>
        <li><a href="index.php?page=GestionNotes">Notes</a></li>
        <li><a href="index.php?page=GestionMatieres">Matières</a></li>
    </ul>
    </div>';
}

?>



<?php
// Gestion de la variable matiere qui définira qu'elle notes afficher
$matieres = MatieresManager::getList();
if (isset($_POST["matiere"])) {
    $matiere = $_POST["matiere"];
} else {
    $matiere = $matieres[0]->getLibelleMatiere();
}
?>

<div class="colonne centrer">
    
    <!-- Affichage en fonction du role -->
    <?php
if (isset($_SESSION['utilisateur']) && $_SESSION['utilisateur']->getLogin() == "Proviseur") {
    //Selection de la matiere
    echo '<form action="index.php?page=GestionNotes" method="POST">
            <select name="matiere">';

    foreach ($matieres as $uneMatiere) {
        echo '<option value="' . $uneMatiere->getLibelleMatiere() . '">' . $uneMatiere->getLibelleMatiere() . '</option>';
    }

    echo '</select>
            <input type="submit" value="Confirmer">
        </form>';
}else{
   echo '<a href="index.php?page=FormNotes&mode=ajout" class="boutons">Ajouter une note</a>';
}
?>
    <!-- Affichage des notes en fonction de la matière selectionné -->
    <?php
    if ($_SESSION['utilisateur']->getLogin() == "Proviseur") {
        $notes = SuivisManager::getList();
        foreach ($notes as $uneNote) {
            if ($matiere == $uneNote->getMatiere()->getLibelleMatiere()) {
                echo '<div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">' . $uneNote->getEleve()->getNomEleve() . '</div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">' . $uneNote->getEleve()->getPrenomEleve() . '</div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">' . $uneNote->getNote() . '</div>';
                echo '<div class="icone centrer"><a class="" href = "index.php?page=FormNotes&mode=modif&id=' . $uneNote->getIdSuivi() . '"><img src="./IMG/modifier.png" alt=""></a></div>';
                echo '<div class="espace"></div>';
                echo '<div class="icone centrer"><a class="" href = "index.php?page=ActionsNotes&mode=delete&id=' . $uneNote->getIdSuivi() . '"><img src="./IMG/supprimer.png" alt=""></a></div>';
                echo '<div class="espace"></div>';
                echo '</div>';
            }
        }
    }else{
        $notes= SuivisManager::getListByMatiere($_SESSION['utilisateur']->getMatiere());
        foreach ($notes as $uneNote) {
                echo '<div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">' . $uneNote->getEleve()->getNomEleve() . '</div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">' . $uneNote->getEleve()->getPrenomEleve() . '</div>';
                echo '<div class="espace"></div>';
                echo '<div class="centrer">' . $uneNote->getNote() . '</div>';
                echo '<div class="icone centrer"><a class="" href = "index.php?page=FormNotes&mode=modif&id=' . $uneNote->getIdSuivi() . '"><img src="./IMG/modifier.png" alt=""></a></div>';
                echo '<div class="espace"></div>';
                echo '</div>';
            
    }
}

?>
</div>
</div>
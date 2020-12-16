<?php

if (isset($_GET['id'])) // pour la suppression
{
    $matiere = MatieresManager::findById($_GET['id']);
}else{ // pour l'ajout ou la modif
    //var_dump($_POST);
    $matiere = new Matieres($_POST);
    
}
//var_dump($matiere);
switch ($_GET['mode']) {
    case "ajout":
        {
            MatieresManager::add($matiere);
            break;
        }
    case "modif":
        {   
            MatieresManager::update($matiere);
            break;
        }
    case "delete":
        {
            // Suppression en cascade
            // On récupère toutes les notes de la matière
            $listeNote=SuivisManager::getListByMatiere($matiere);
            /**** Technique de suppression en cascade */
            foreach ($listeNote as $uneNote)
            {
                SuivisManager::delete($uneNote);
            }
            MatieresManager::delete($matiere);
            break;
        }
}

header("location:index.php?page=GestionMatieres");
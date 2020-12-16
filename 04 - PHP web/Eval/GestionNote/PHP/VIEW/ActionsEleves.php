<?php

if (isset($_GET['id'])) // pour la suppression
{
    $eleve = ElevesManager::findById($_GET['id']);
}else{ // pour l'ajout ou la modif
    //var_dump($_POST);
    $eleve = new Eleves($_POST);
    
}
//var_dump($eleve);
switch ($_GET['mode']) {
    case "ajout":
        {
            ElevesManager::add($eleve);
            break;
        }
    case "modif":
        {   
            ElevesManager::update($eleve);
            break;
        }
    case "delete":
        {
            // Suppression en cascade
            // On récupère toutes les notes de l'elève
            $listeNote=SuivisManager::getListByEleve($eleve);
            /**** Technique de suppression en cascade */
            foreach ($listeNote as $uneNote)
            {
                SuivisManager::delete($uneNote);
            }
            ElevesManager::delete($eleve);
            break;
        }
}

header("location:index.php?page=GestionEleves");
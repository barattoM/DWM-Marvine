<?php

if (isset($_GET['id'])) // pour la suppression
{
    $note = SuivisManager::findById($_GET['id']);
}else{ // pour l'ajout ou la modif
    var_dump($_POST);
    $eleve=$_POST["eleve"];
    $idEleve=ElevesManager::findByNom($eleve)->getIdEleve(); // On récupérer l'id de l'élève grace au nom donné par l'utilisateur
    $note = new Suivis($_POST);
    $note->setIdEleve($idEleve);// On modifie l'objet pour lui donner l'id de l'élève
}
    
var_dump($note);
switch ($_GET['mode']) {
    case "ajout":
        {
            SuivisManager::add($note);
            break;
        }
    case "modif":
        {   
            SuivisManager::update($note);
            break;
        }
    case "delete":
        {
            SuivisManager::delete($note);
            break;
        }
}

header("location:index.php?page=GestionNotes");
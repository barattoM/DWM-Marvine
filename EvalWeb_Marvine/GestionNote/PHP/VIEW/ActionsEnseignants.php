<?php


if (isset($_GET['id'])) // pour la suppression
{
    $enseignant = UtilisateursManager::findById($_GET['id']);
}else{ // pour l'ajout ou la modif
    var_dump($_POST);
    $matiere=$_POST["matiere"];
    $idMatiere=MatieresManager::findByLibelle($matiere)->getIdMatiere(); // On récupérer l'id de la matière grace au libelle donner par l'utilisateur
    $enseignant = new Utilisateurs($_POST);
    $enseignant->setIdMatiere($idMatiere); // On modifie l'objet pour lui donner l'id de la matière
    $enseignant->setMotDePasse(crypte($_POST['motDePasse'])); // On crypte le mot de passe
}
var_dump($enseignant);
switch ($_GET['mode']) {
    case "ajout":
        {
            UtilisateursManager::add($enseignant);
            break;
        }
    case "modif":
        {   
            UtilisateursManager::update($enseignant);
            break;
        }
    case "delete":
        {
            UtilisateursManager::delete($enseignant);
            break;
        }
}

header("location:index.php?page=GestionEnseignants");
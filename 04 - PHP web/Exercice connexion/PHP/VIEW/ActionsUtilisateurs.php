<?php
//var_dump($_POST);
$p = new Utilisateurs($_POST);
//var_dump($p);
switch ($_GET['mode']) {
    case "ajoutUtilisateur":
        {
            UtilisateursManager::add($p);
            break;
        }
    case "selectUtilisateur":
        {
            $utilisateur=UtilisateursManager::findByPseudo($p->getPseudo());
            var_dump($utilisateur);
            if($utilisateur==false){
               header("location:index.php?codePage=erreurConnexion");

            }
            else{
                session_start();
                $_SESSION["pseudo"]=$p->getPseudo();
                $_SESSION["id"]=$p->getIdUtilisateur();
                $_SESSION["role"]=$p->getRole();
                header("location:index.php?codePage=erreurConnexion");
            }
            
        }
}

header("location:index.php?codePage=default");
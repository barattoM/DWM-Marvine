<?php
switch ($_GET['mode']) {
    case "selectUtilisateur": {
            $uti = UtilisateursManager::getByPseudo($_POST['pseudo']);
            if ($uti != false) {
                if (crypte($_POST['motDePasse']) == $uti->getMotDePasse()) {
                    echo 'connection reussie';
                    $_SESSION['utilisateur'] = $uti;
                    if($_POST['pseudo']=="Proviseur"){
                        header("refresh:3;url=index.php?page=MenuProviseur");
                    }else{
                        header("refresh:3;url=index.php?page=GestionNotes");
                    }   
                } else {
                    echo 'le mot de passe est incorrect';
                    header("refresh:3;url=index.php?page=default");
                }
            } else {
                echo "le pseudo n'existe pas";
                header("refresh:3;url=index.php?page=default");
            }
            break;

        }
    case "deconnexionUtilisateur": {

            session_destroy();
            echo "Vous êtes déconnecté";
            header("refresh:3;url=index.php?page=default");

        }
}

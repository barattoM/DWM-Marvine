<?php

$titrePage = "Detail employe";
$titre="Detail de l'employé";
include("./listeEmploye.php");

if (file_exists("./head.php")) {
    include("./head.php");
} else {
    echo "erreur";
}

if (file_exists("./header.php")) {
    include("./header.php");
} else {
    echo "erreur";
}

$idRecherche=$_GET["id"];
foreach ($listeEmploye as $employe){
    if ($employe->getIdEmploye() == $idRecherche)
    {
        echo '<div class="nom">'.$employe->getNom().' '.$employe->getPrenom().'</div>';
        echo '<div class="ligne">
            <div class="titre">Informations</div>
            <div class="detail">
                <ul>
                    <li>Embauché le '.$employe->getDateEmbauche()->format("d/m/Y").'</li>
                    <li>Poste '.$employe->getPoste().'</li>
                    <li>Salaire '.$employe->getSalaire().'K€</li>
                </ul>
            </div>
        </div>';
        echo'<div class="espaceHor"></div>';
        echo '<div class="ligne">
            <div class="titre">Agence</div>
            <div class="detail">
                <ul>
                    <li>'.$employe->getAgence()->getNom().'</li>
                    <li>'.$employe->getAgence()->getAdresse().'</li>
                    <li>'.$employe->getAgence()->getCodePostal().' '.$employe->getAgence()->getVille().'</li>
                    <li>'.$employe->getAgence()->getModeRestauration().'</li>
                </ul>
            </div>
        </div>';
        echo'<div class="espaceHor"></div>';
        echo '<div class="ligne">
            <div class="titre">Poste</div>
            <div class="detail">
                <ul>
                    <li>'.$employe->getService().'</li>
                    <li>'.$employe->getPoste().'</li>   
                </ul>
            </div>
        </div>';
        echo'<div class="espaceHor"></div>';
        if(count($employe->getEnfants())>0){
            echo '<div class="ligne">
            <div class="titre">Enfants</div>
            <div class="detail">
                <ul>';
                for ($i=0;$i<count($employe->getEnfants());$i++){
                    echo '<li>'.$employe->getEnfants()[$i]->getNom().' '.$employe->getEnfants()[$i]->getPrenom().' '.$employe->getEnfants()[$i]->getDateNaissance()->format("d/m/Y").'</li>';
                }    
                echo '    
                </ul>
            </div>
            </div>';
        }
        echo'<div class="espaceHor"></div>';
        echo '<a href="./listePersonnel.php">Retour</a>';
    }
}


?>

</body>

</html>
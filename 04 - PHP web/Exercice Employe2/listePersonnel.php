<?php

$titrePage = "Liste du personel";
$titre="Liste du personel";
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

echo '<div class="block">';
echo '<div id="entete">'
    . '<div class="agence">' . "Agence" . '</div>'
    . '<div class="service">' . "Service" . '</div>'
    . '<div class="nom">' . "Nom" . '</div>'
    . '<div class="prenom">' . "Prenom" . '</div>'
    . '</div>';
// echo  '<div class="espaceHor"></div>';    
for ($i = 0; $i < count($listeEmploye); $i++) {
    if($i%2==0){
        echo '<div class="employe bleu">'
        . '<a href="detail.php?id='.$listeEmploye[$i]->getIdEmploye().'">'
        . '<div class="cache">'.$listeEmploye[$i]->getIdEmploye().'</div>'
        . '<div class="agence">' . $listeEmploye[$i]->getAgence()->getNom() . '</div>'
        . '<div class="service">' . $listeEmploye[$i]->getService() . '</div>'
        . '<div class="nom">' . $listeEmploye[$i]->getNom() . '</div>'
        . '<div class="prenom">' . $listeEmploye[$i]->getPrenom() . '</div>'
        . '</div>';
    }
    else{
        echo '<div class="employe gris">'
        . '<a href="detail.php?id='.$listeEmploye[$i]->getIdEmploye().'">'
        . '<div class="cache">'.$listeEmploye[$i]->getIdEmploye().'</div>'
        . '<div class="agence">' . $listeEmploye[$i]->getAgence()->getNom() . '</div>'
        . '<div class="service">' . $listeEmploye[$i]->getService() . '</div>'
        . '<div class="nom">' . $listeEmploye[$i]->getNom() . '</div>'
        . '<div class="prenom">' . $listeEmploye[$i]->getPrenom() . '</div>'
        . '</div>';
    }
   

    // echo  '<div class="espaceHor"></div>';
}

echo '</div>';
?>

</body>

</html>
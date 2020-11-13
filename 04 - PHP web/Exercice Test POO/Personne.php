<?php
$titrePage="Personnes";

include("./listePersonne.php");

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

echo '<div class="ligne">';
$compteur = 0;
for ($i = 0; $i < count($listePersonne); $i++) {
  echo '<div class="personne colonne">' 
        .'<div class="nom">'. $listePersonne[$i]->getNom() . ' ' . $listePersonne[$i]->getNom().'</div>' 
        .'<div class="age">'.$listePersonne[$i]->getAge().'</div>' 
        . '</div>';
  $compteur++;
  if ($compteur == 4) {
    echo '</div>';
    echo  '<div class="espaceHor"></div>';
    echo '<div class="ligne">';
    $compteur=0;
  }

}

echo '</div>';
?>

</body>

</html>
<?php

$titrePage="Voiture";
$titre="Voiture";

include "head.php";
include "header.php";
include "voiture.php";

for ($i=0;$i<count($voitures);$i++){
    echo '<div class="voiture">
        <ul>
            <li>Marque : '.$voitures[$i]->getMarque().'</li>
            <li>Modele : '.$voitures[$i]->getModele().'</li>
            <li>Immatriculation : '.$voitures[$i]->getImmatriculation().'</li>
            <li>Couleur : '.$voitures[$i]->getCouleur().'</li>
            <li>Kilometres : '.$voitures[$i]->getKilometres().'</li>
        </ul>
    </div>';
}


echo '</body>
        </html>';
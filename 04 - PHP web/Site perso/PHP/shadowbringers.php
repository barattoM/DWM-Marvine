<?php

$titrePage = "Final Fantasy XIV - Shadowbringers";


/********************** Initialisation ******************************/

/********* Images contenu ********/
$image[] = "donjon.png";
$image[] = "RaidAlliance.png";
$image[] = "Defi.png";
$image[] = "DefiExtreme.png";

/********* Titres contenu ********/
$titre[] = "Donjons";
$titre[] = "Raids en Alliance";
$titre[] = "Défi";
$titre[] = "Défi extrême";

/********* Textes des contenu ********/
$texte[] = '
            <ul>
                <li>Donjon 1</li>
                <li>Donjon 2</li>
            </ul>
            
            ';
$texte[] = '<ul>
            <li>Raid en alliance 1</li>
            <li>Raid en alliance 2</li>
            </ul>';
$texte[] = '<ul>
            <li>Défi 1</li>
            <li>Défi 2</li>
            </ul>';
$texte[] = '<ul>
            <li>Défi extrême 1</li>
            <li>Défi extrême 2</li>
            </ul>';

/********* Sous Images des contenu *********/

$sousImage[] = "../Ressources/Miniature/1/1.jpg";
$sousImage[] = "../Ressources/Miniature/1/2.jpg";
$sousImage[] = "../Ressources/Miniature/1/3.jpg";
$sousImage[] = "../Ressources/Miniature/1/4.jpg";

$sousImage[] = "../Ressources/Miniature/2/1.jpg";
$sousImage[] = "../Ressources/Miniature/2/2.jpg";
$sousImage[] = "../Ressources/Miniature/2/3.jpg";
$sousImage[] = "../Ressources/Miniature/2/4.jpg";

$sousImage[] = "../Ressources/Miniature/3/1.png";
$sousImage[] = "../Ressources/Miniature/3/2.png";
$sousImage[] = "../Ressources/Miniature/3/3.png";
$sousImage[] = "../Ressources/Miniature/3/4.png";

$sousImage[] = "../Ressources/Miniature/4/1.jpg";
$sousImage[] = "../Ressources/Miniature/4/2.jpg";
$sousImage[] = "../Ressources/Miniature/4/3.jpg";
$sousImage[] = "../Ressources/Miniature/4/4.jpg";

/************ Page **********/

if (file_exists("../PHP/head.php")) {
    include("../PHP/head.php");
} else {
    echo "erreur";
}

if (file_exists("../PHP/header.php")) {
    include("../PHP/header.php");
} else {
    echo "erreur";
}

if (file_exists("../PHP/nav.php")) {
    include("../PHP/nav.php");
} else {
    echo "erreur";
}

if (file_exists("../PHP/page.php")) {
    include("../PHP/page.php");
} else {
    echo "erreur";
}

if (file_exists("../PHP/footer.php")) {
    include("../PHP/footer.php");
} else {
    echo "erreur";
}

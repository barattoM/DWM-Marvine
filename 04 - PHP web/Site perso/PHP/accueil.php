<?php

$titrePage = "Final Fantasy XIV - Accueil";

/********************** Initialisation ******************************/

/********* Images des extensions ********/
$image[] = "Shadowbringers.jpg";
$image[] = "Stormblood.jpeg";
$image[] = "Heavensward.jpeg";
$image[] = "ARealmReborn.jpg";

/********* Titres des extensions ********/
$titre[] = "Shadowbringers";
$titre[] = "Stormblood";
$titre[] = "Heavensward";
$titre[] = "A Realm Reborn";

/********* Textes des extensions ********/
$texte[] = 'Shadowbringers est la troisième extension de Final Fantasy XIV. Devenu "Guerrier des
            Ténèbres", le joueur voyage à travers le premier reflet, un monde anéanti par la lumière.
            <br>Deux nouveaux jobs s\'offrent aux joueurs :
            <ul>
                <li>Un tank : le Pistosabreur</li>
                <li>Un dps soutien : le Danseur</li>
            </ul>
            <br>Ainsi que deux races :
            <ul>
                <li>Les Viéras</li>
                <li>Les Hrothgar</li>
            </ul>';
$texte[] = 'Stormblood est la deuxième extension de Final Fantasy XIV.
            Le joueur sera amené à traverser les contrées d\'Ala Mhigo et d\'Othard afin d\'y résoudre les conflits
            avec l\'Empire Garlemarldais.
            <br>Deux nouveaux jobs s\'offrent aux joueurs :
            <ul>
                <li>Un dps cac : le Samourai</li>
                <li>Un dps magique : le Mage Rouge</li>
            </ul>
            Cette extension permet aussi aux joueurs de traverser à la nage les étendues aquatiques.';
$texte[] = 'Heavensward est la première extension de Final Fantasy XIV.
            Le joueur sera amené à explorer les régions du Coerthas et de Dravania, vestiges d\'une guerre entre les dragons et les hommes.
            Trois nouveaux jobs s\'offrent aux joueurs :
            <ul>
                <li>Un tank : le Chevalier Noir</li>
                <li>Un dps distance : le Machiniste</li>
                <li>Un healer : l\'Astromancien</li>
            </ul>
            Cette extension permet aussi aux joueurs de d\'incarner une nouvelle race: les Ao Ra.';
$texte[] = 'Final Fantasy XIV : A Realm Reborn prend place une dizaine d\'années après le 7e fléau causé par Bahamut.
            <br>Le joueur sera amené à parcourir la contrée d\'Eorzéa, un pays remplis de magie qui se relève peu à peu après le fléau qu\'elle a subit.
            Le joueur incarne un aventurier qui peut choisir parmis 9 jobs et 5 races.
            ';

/********* Sous Images *********/

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

/******************************************* Page *************************************/

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

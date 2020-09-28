<?php
/******************************************************************* FONCTION *************************************************************************** */
/**
 * Affiche le tableau entré en paramètre
 * et sépare les lettres par des espaces.
 *
 * @param   array   $tab    Tableau contentant une lettre par case.
 *
 * @return  void            Affiche le mot.
 */

function afficherTableau($tab){
    foreach($tab as $elt){
        echo $elt." ";
    }
}


/**
 *  Méthode qui prend un mot en paramètre d'entrée et qui renvoi un
 *  tableau de caractères contenant autant de case que de lettres dans
 *  le mot. Chacune de ces cases contient un _
 * 
 *
 *  @param   string   $mot    mot à coder
 * @param int $difficulte   mode de difficulté du pendu
 *
 *  @return  array    $tab    tableau contenant des _ pour chaque caractères de $mot
 */
function coderMot($mot,$difficulte){
    $tab=str_split($mot);   
    switch($difficulte){
        case 1:
            for($i=1;$i<strlen($mot)-1;$i++){
                $tab[$i]="_";
            }
            return $tab;
            break;
        case 2:
            for($i=0;$i<strlen($mot);$i++){
                    $tab[$i]="_";
                }
                return $tab;
            break;
        case 3:
            for($i=0;$i<strlen($mot);$i++){
                $tab[$i]="_";
            }
            return $tab;
            break;

    }
    
}

/**
 *  méthode qui cherche toutes les occurrences d'une lettre passée en paramètre
 *  dans un tableau de caractères passé aussi en paramètre.
 *  Cette méthode retourne toutes les positions dans un tableau
 * 
 *  @param  string   $lettre   lettre à rechercher dans le tableau
 *  @param  array    $tab      tableau de caractère où l'on va chercher la lettre
 *  @param  int      $depart   point de départ de la recherche
 *          
 *  @return array    $positions tableau contenant les positions de la lettre dans le tableau
 */
function testerLettre($lettre,$tab,$depart){
    /*for($i=$depart;$i<count($tab);$i++){
        if(strtoupper($lettre)==strtoupper($tab[$i])){
            $positions[]=$i;
        }
        
    }
    if(empty($positions)){
        $positions=[""];
    }
    return $positions;*/

    $tableau=array_slice($tab,$depart);
    $recherche=array_search($lettre,$tableau);
    if ($recherche===false){
        return [];
    }else{
        $positions[]=$recherche+$depart;
        /*for($i=$recherche+1;$i<count($tab);$i++){
            $tableau[]=$tab[$i];
        }*/

        return array_merge($positions,testerLettre($lettre,$tab,$recherche+$depart+1));
    }     
}

/**
 * méthode qui modifie le tableau passé en paramètre en
 * affectant la lettre à la position passée en paramètre
 * 
 * @param string $lettre    lettre à placer dans le tableau
 * @param array  $tab       tableau à modifier
 * @param int    $position  position à laquelle la lettre doit être placé
 * 
 * @return  array $tab      tableau modifié avec la lettre
 */
function ajouterUneLettre($lettre,$tab,$position){
    $tab[$position]=$lettre;
    return $tab;
}

/**
 * méthode qui appelle la méthode ajouterUneLettre
 * pour toutes les valeurs contenues dans la liste en paramètre
 * 
 * @param string $lettre    lettre à placer dans le tableau
 * @param array  $tab       tableau à modifier
 * @param array  $listePosition positions à laquelles la lettre doit être placé
 * 
 * @return  array   $tab    tableau modifié avec la lettre à toutes les positions fournies
 */
function ajouterLesLettres($lettre,$tab,$listePosition){
    foreach($listePosition as $elt){
        $tab=ajouterUneLettre($lettre,$tab,$elt);
    }
    return $tab;
}

/**
 * méthode qui permet d'afficher les caractères contenus dans 
 * la liste passée en paramètre à l'écran
 * 
 * @param array $listeLettres   Liste à afficher
 * 
 * @return void Affiche le contenus de la liste
 * 
 */
function afficherMauvaisesLettres($listeLettres){
    echo "Les lettres non présentes sont : ";
    foreach($listeLettres as $elt){
        echo $elt." ";
    }
}

/**
 * méthode qui permet de dessiner le pendu en fonction du nombre d’erreur 
 * 
 * @return void Affiche le pendu
 */
function dessinerPendu($nbErreur){
    switch ($nbErreur)
            {
                case 0:
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    break;
                case 1:
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "     ________         "."\n";
                    break;
                case 2:
                    Echo "                      "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "     _|_______        "."\n";
                    break;
                case 3:
                    Echo "     ________         "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "     _|_______        "."\n";
                    break;
                case 4:
                    Echo "     ________         "."\n";
                    Echo "      |     |         "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "     _|_______        "."\n";
                    break;
                case 5:
                    Echo "     ________         "."\n";
                    Echo "      |     |         "."\n";
                    Echo "      |     O         "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "     _|_______        "."\n";
                    break;
                case 6:
                    Echo "     ________         "."\n";
                    Echo "      |     |         "."\n";
                    Echo "      |     O         "."\n";
                    Echo "      |     |         "."\n";
                    Echo "      |     |         "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "     _|_______        "."\n";
                    break;
                case 7:
                    Echo "     ________          "."\n";
                    Echo "      |     |          "."\n";
                    Echo "      |     O          "."\n";
                    Echo "      |    /|\\        "."\n";
                    Echo "      |     |          "."\n";
                    Echo "      |                "."\n";
                    Echo "      |                "."\n";
                    Echo "     _|_______         "."\n";
                    break;
                case 8:
                    Echo "     ________          "."\n";
                    Echo "      |     |          "."\n";
                    Echo "      |     O          "."\n";
                    Echo "      |    /|\\        "."\n";
                    Echo "      |     |          "."\n";
                    Echo "      |    / \\        "."\n";
                    Echo "      |                "."\n";
                    Echo "     _|_______         "."\n";
                    break;
                default:
                    break;
			}
}

/**
 * méthode qui renvoi un mot en le choisissant au hasard parmi une liste de mots 
 * 
 * @return  string  $mot    le mot choisi le dictionnaire
 * 
 */
function choisirMot(){
    $dico=creer_dico();
    $nb=rand(0,count($dico)-1);
    return $dico[$nb];
}

/**
 * methode qui crée un dictionnaire
 * @return array $tabMots tableau contenant le dictionnaire
 */
function creer_dico()
{
    //Cree le dictionnaire de mots
    $tabMots[] = "AEROPORT";
    $tabMots[] = "AFFAIRE";
    $tabMots[] = "ALBUM";
    $tabMots[] = "ALPHABET";
    $tabMots[] = "AMENER";
    $tabMots[] = "AMPOULE";
    $tabMots[] = "ANCIEN";
    $tabMots[] = "ANORAK";
    $tabMots[] = "ANTENNE";
    $tabMots[] = "APPAREIL";
    $tabMots[] = "APPORTER";
    $tabMots[] = "APPUYER";
    $tabMots[] = "APRES";
    $tabMots[] = "ARC";
    $tabMots[] = "ARMOIRE";
    $tabMots[] = "ARRET";
    $tabMots[] = "ARRIERE";
    $tabMots[] = "ARRIVER";
    $tabMots[] = "ARROSER";
    $tabMots[] = "ASSIETTE";
    $tabMots[] = "ASSIS";
    $tabMots[] = "ATTACHER";
    $tabMots[] = "ATTENDRE";
    $tabMots[] = "ATTENTION";
    $tabMots[] = "ATTERRIR";
    $tabMots[] = "ATTRAPER";
    $tabMots[] = "AU";
    $tabMots[] = "AUTANT";
    $tabMots[] = "AUTO";
    $tabMots[] = "AUTOMOBILISTE";
    $tabMots[] = "AUTORADIO";
    $tabMots[] = "AUTOUR";
    $tabMots[] = "AVANCER";
    $tabMots[] = "AVANT";
    $tabMots[] = "AVEC";
    $tabMots[] = "AVION";
    $tabMots[] = "BAGAGE";
    $tabMots[] = "BAGUETTE";
    $tabMots[] = "BAIGNER";
    $tabMots[] = "BÂILLER";
    $tabMots[] = "BALLE";
    $tabMots[] = "BANC";
    $tabMots[] = "BARBE";
    $tabMots[] = "BARBOTER";
    $tabMots[] = "BARQUE";
    $tabMots[] = "BARRE";
    $tabMots[] = "BARREAU";
    $tabMots[] = "BAS";
    $tabMots[] = "BATEAU";
    $tabMots[] = "BEAUCOUP";
    $tabMots[] = "BIBLIOTHEQUE";
    $tabMots[] = "BLANC";
    $tabMots[] = "BLEU";
    $tabMots[] = "BOIS";
    $tabMots[] = "BOITE";
    $tabMots[] = "BONDIR";
    $tabMots[] = "BONNET";
    $tabMots[] = "BORD";
    $tabMots[] = "BOSSER";
    $tabMots[] = "BOTTE";
    $tabMots[] = "BOUCHER";
    $tabMots[] = "BOUCHON";
    $tabMots[] = "BOUDER";
    $tabMots[] = "BOUGER";
    $tabMots[] = "BOUSCULER";
    $tabMots[] = "BOUT";
    $tabMots[] = "BOUTEILLE";
    $tabMots[] = "BOUTON";
    $tabMots[] = "BRAS";
    $tabMots[] = "BRETELLE";
    $tabMots[] = "BRICOLAGE";
    $tabMots[] = "BRUIT";
    $tabMots[] = "BRUN";
    $tabMots[] = "BULLES";
    $tabMots[] = "BUREAU";
    $tabMots[] = "CABANE";
    $tabMots[] = "CABINET";
    $tabMots[] = "CAGOULE";
    $tabMots[] = "CAHIER";
    $tabMots[] = "CAISSE";
    $tabMots[] = "CALME";
    $tabMots[] = "CAMARADE";
    $tabMots[] = "CAMESCOPE";
    $tabMots[] = "CAMION";
    $tabMots[] = "CANARD";
    $tabMots[] = "CARNET";
    $tabMots[] = "CARREAU";
    $tabMots[] = "CARTABLE";
    $tabMots[] = "CARTON";
    $tabMots[] = "CASIER";
    $tabMots[] = "CASQUE";
    $tabMots[] = "CASQUETTE";
    $tabMots[] = "CASSE";
    $tabMots[] = "CASSER";
    $tabMots[] = "CASSEROLE";
    $tabMots[] = "CASSETTE";
    $tabMots[] = "CATALOGUE";
    $tabMots[] = "CEDE";
    $tabMots[] = "CEDEROM";
    $tabMots[] = "CEINTURE";
    $tabMots[] = "CERCEAU";
    $tabMots[] = "CHAINE";
    $tabMots[] = "CHAISE";
    $tabMots[] = "CHAISES";
    $tabMots[] = "CHANSON";
    $tabMots[] = "CHAPEAU";
    $tabMots[] = "CHARGER";
    $tabMots[] = "CHAT";
    $tabMots[] = "CHAUD";
    $tabMots[] = "CHAUSSETTE";
    $tabMots[] = "CHAUSSON";
    $tabMots[] = "CHAUSSURE";
    $tabMots[] = "CHEMISE";
    $tabMots[] = "CHERCHER";
    $tabMots[] = "CHEVILLE";
    $tabMots[] = "CHIFFRE";
    $tabMots[] = "CHOISIR";
    $tabMots[] = "CHOSE";
    $tabMots[] = "CHUCHOTER";
    $tabMots[] = "CHUTE";
    $tabMots[] = "CIGARETTE";
    $tabMots[] = "CINQ";
    $tabMots[] = "CISEAUX";
    $tabMots[] = "CLASSE";
    $tabMots[] = "CLAVIER";
    $tabMots[] = "CLE";
    $tabMots[] = "CLOU";
    $tabMots[] = "COIN";
    $tabMots[] = "COL";
    $tabMots[] = "COLERE";
    $tabMots[] = "COLLANT";
    $tabMots[] = "COLLE";
    $tabMots[] = "COLLER";
    $tabMots[] = "COLORIAGE";
    $tabMots[] = "COLORIER";
    $tabMots[] = "COMMENCER";
    $tabMots[] = "COMPARER";
    $tabMots[] = "COMPTER";
    $tabMots[] = "CONDUIRE";
    $tabMots[] = "CONSTRUIRE";
    $tabMots[] = "CONTE";
    $tabMots[] = "CONTINUER";
    $tabMots[] = "CONTRAIRE";
    $tabMots[] = "CONTRE";
    $tabMots[] = "COPAIN";
    $tabMots[] = "COPIER";
    $tabMots[] = "COQUILLAGE";
    $tabMots[] = "COQUILLETTE";
    $tabMots[] = "COQUIN";
    $tabMots[] = "CORDE";
    $tabMots[] = "CORPS";
    $tabMots[] = "COTE";
    $tabMots[] = "COU";
    $tabMots[] = "COUCHE";
    $tabMots[] = "COUDE";
    $tabMots[] = "COUDRE";
    $tabMots[] = "COULEUR";
    $tabMots[] = "COULOIR";
    $tabMots[] = "COUPER";
    $tabMots[] = "COURIR";
    $tabMots[] = "COURONNE";
    $tabMots[] = "COURT";
    $tabMots[] = "CRAIE";
    $tabMots[] = "CRAVATE";
    $tabMots[] = "CROCHET";
    $tabMots[] = "CUBE";
    $tabMots[] = "CUILLERE";
    $tabMots[] = "CUISSE";
    $tabMots[] = "CULOTTE";
    $tabMots[] = "CURIEUX";
    $tabMots[] = "CUVETTE";
    $tabMots[] = "DAME";
    $tabMots[] = "DANGER";
    $tabMots[] = "DANS";
    $tabMots[] = "DANSER";
    $tabMots[] = "DE";
    $tabMots[] = "DEBORDER";
    $tabMots[] = "DEBOUT";
    $tabMots[] = "DECHIRER";
    $tabMots[] = "DECOLLER";
    $tabMots[] = "DECORER";
    $tabMots[] = "DECOUPAGE";
    $tabMots[] = "DECOUPER";
    $tabMots[] = "DEDANS";
    $tabMots[] = "DEFENDRE";
    $tabMots[] = "DEHORS";
    $tabMots[] = "DELTAPLANE";
    $tabMots[] = "DEMANDER";
    $tabMots[] = "DEMARRER";
    $tabMots[] = "DEMOLIR";
    $tabMots[] = "DEPASSER";
    $tabMots[] = "DERNIER";
    $tabMots[] = "DERRIERE";
    $tabMots[] = "DESCENDRE";
    $tabMots[] = "DESOBEIR";
    $tabMots[] = "DESSIN";
    $tabMots[] = "DESSINER";
    $tabMots[] = "DETRUIRE";
    $tabMots[] = "DEUX";
    $tabMots[] = "DEUXIEME";
    $tabMots[] = "DEVANT";
    $tabMots[] = "DICTIONNAIRE";
    $tabMots[] = "DIFFERENCE";
    $tabMots[] = "DIFFERENT";
    $tabMots[] = "DIFFICILE";
    $tabMots[] = "DIRE";
    $tabMots[] = "DIRECTEUR";
    $tabMots[] = "DIRECTRICE";
    $tabMots[] = "DISCUTER";
    $tabMots[] = "DISPARAITRE";
    $tabMots[] = "DISTRIBUER";
    $tabMots[] = "DIX";
    $tabMots[] = "DOIGT";
    $tabMots[] = "DOIGTS";
    $tabMots[] = "DOMINO";
    $tabMots[] = "DONNER";
    $tabMots[] = "DORMIR";
    $tabMots[] = "DOS";
    $tabMots[] = "DOSSIER";
    $tabMots[] = "DOUCHE";
    $tabMots[] = "DOUCHER";
    $tabMots[] = "DOUX";
    $tabMots[] = "DROIT";
    $tabMots[] = "DU";
    $tabMots[] = "DUR";
    $tabMots[] = "EAU";
    $tabMots[] = "ECARTER";
    $tabMots[] = "ECHANGER";
    $tabMots[] = "ECHARPE";
    $tabMots[] = "ECHASSES";
    $tabMots[] = "ECHELLE";
    $tabMots[] = "ECLABOUSSER";
    $tabMots[] = "ECLAIRER";
    $tabMots[] = "ECOLE";
    $tabMots[] = "ECOUTER";
    $tabMots[] = "ECRAN";
    $tabMots[] = "ECRASER";
    $tabMots[] = "ECRIRE";
    $tabMots[] = "ECRITURE";
    $tabMots[] = "EFFACER";
    $tabMots[] = "EFFORT";
    $tabMots[] = "ELASTIQUE";
    $tabMots[] = "ELECTRICITE";
    $tabMots[] = "ELEVE";
    $tabMots[] = "EMMENER";
    $tabMots[] = "EMPORTER";
    $tabMots[] = "ENCORE";
    $tabMots[] = "ENERVE";
    $tabMots[] = "ENFANT";
    $tabMots[] = "ENFILER";
    $tabMots[] = "ENFONCER";
    $tabMots[] = "ENGIN";
    $tabMots[] = "ENLEVER";
    $tabMots[] = "ENTENDRE";
    $tabMots[] = "ENTONNOIR";
    $tabMots[] = "ENTOURER";
    $tabMots[] = "ENTREE";
    $tabMots[] = "ENTRER";
    $tabMots[] = "ENVELOPPE";
    $tabMots[] = "ENVOYER";
    $tabMots[] = "EPAIS";
    $tabMots[] = "EPAULE";
    $tabMots[] = "EPEE";
    $tabMots[] = "EQUIPE";
    $tabMots[] = "ESCABEAU";
    $tabMots[] = "ESCALADER";
    $tabMots[] = "ESCALIER";
    $tabMots[] = "ESCARGOT";
    $tabMots[] = "ESCARPIN";
    $tabMots[] = "ESSUYER";
    $tabMots[] = "ETAGERE";
    $tabMots[] = "ETANG";
    $tabMots[] = "ETIQUETTE";
    $tabMots[] = "ETROIT";
    $tabMots[] = "ETUDE";
    $tabMots[] = "ETUDIER";
    $tabMots[] = "EXPLIQUER";
    $tabMots[] = "EXTERIEUR";
    $tabMots[] = "FABRIQUER";
    $tabMots[] = "FACILE";
    $tabMots[] = "FAIRE";
    $tabMots[] = "FATIGUE";
    $tabMots[] = "FAUTE";
    $tabMots[] = "FAUTEUIL";
    $tabMots[] = "FEE";
    $tabMots[] = "FENETRE";
    $tabMots[] = "FERMER";
    $tabMots[] = "FESSE";
    $tabMots[] = "FEU";
    $tabMots[] = "FEUILLE";
    $tabMots[] = "FEUTRE";
    $tabMots[] = "FICELLE";
    $tabMots[] = "FIL";
    $tabMots[] = "FILET";
    $tabMots[] = "FILLE";
    $tabMots[] = "FILM";
    $tabMots[] = "FINIR";
    $tabMots[] = "FLECHE";
    $tabMots[] = "FLEUR";
    $tabMots[] = "FLOTTER";
    $tabMots[] = "FOIS";
    $tabMots[] = "FONCE";
    $tabMots[] = "FOND";
    $tabMots[] = "FOOTBALL";
    $tabMots[] = "FORT";
    $tabMots[] = "FOUILLER";
    $tabMots[] = "FRAPPER";
    $tabMots[] = "FREIN";
    $tabMots[] = "FROID";
    $tabMots[] = "FUSEE";
    $tabMots[] = "FUSIL";
    $tabMots[] = "GAGNER";
    $tabMots[] = "GANT";
    $tabMots[] = "GARAGE";
    $tabMots[] = "GARÇON";
    $tabMots[] = "GARDER";
    $tabMots[] = "GARDIEN";
    $tabMots[] = "GARE";
    $tabMots[] = "GAUCHE";
    $tabMots[] = "GENER";
    $tabMots[] = "GENOU";
    $tabMots[] = "GENTIL";
    $tabMots[] = "GLISSER";
    $tabMots[] = "GOLF";
    $tabMots[] = "GOMME";
    $tabMots[] = "GONFLER";
    $tabMots[] = "GOUTER";
    $tabMots[] = "GOUTTES";
    $tabMots[] = "GRAND";
    $tabMots[] = "GRIMPER";
    $tabMots[] = "GRIS";
    $tabMots[] = "GRONDER";
    $tabMots[] = "GROS";
    $tabMots[] = "GROUPE";
    $tabMots[] = "GRUE";
    $tabMots[] = "GYMNASTIQUE";
    $tabMots[] = "HABIT";
    $tabMots[] = "HANCHE";
    $tabMots[] = "HANDICAPE";
    $tabMots[] = "HAUT";
    $tabMots[] = "HELICOPTERE";
    $tabMots[] = "HEXAGONE";
    $tabMots[] = "HISTOIRE";
    $tabMots[] = "HORLOGE";
    $tabMots[] = "HUIT";
    $tabMots[] = "HUMIDE";
    $tabMots[] = "IDEE";
    $tabMots[] = "ILE";
    $tabMots[] = "IMAGE";
    $tabMots[] = "IMITER";
    $tabMots[] = "IMMEUBLE";
    $tabMots[] = "IMMOBILE";
    $tabMots[] = "INONDER";
    $tabMots[] = "INSEPARABLE";
    $tabMots[] = "INSTRUMENT";
    $tabMots[] = "INTERESSANT";
    $tabMots[] = "INTERIEUR";
    $tabMots[] = "INTRUS";
    $tabMots[] = "JALOUX";
    $tabMots[] = "JAMBES";
    $tabMots[] = "JAUNE";
    $tabMots[] = "JEAN";
    $tabMots[] = "JEU";
    $tabMots[] = "JOLI";
    $tabMots[] = "JOUER";
    $tabMots[] = "JOUET";
    $tabMots[] = "JUPE";
    $tabMots[] = "LAC";
    $tabMots[] = "LACER";
    $tabMots[] = "LACET";
    $tabMots[] = "LAINE";
    $tabMots[] = "LAISSER";
    $tabMots[] = "LARGE";
    $tabMots[] = "LAVABO";
    $tabMots[] = "LAVER";
    $tabMots[] = "LECTURE";
    $tabMots[] = "LETTRE";
    $tabMots[] = "LIERRE";
    $tabMots[] = "LIGNE";
    $tabMots[] = "LINGE";
    $tabMots[] = "LIRE";
    $tabMots[] = "LISSE";
    $tabMots[] = "LISTE";
    $tabMots[] = "LIT";
    $tabMots[] = "LITRE";
    $tabMots[] = "LIVRE";
    $tabMots[] = "LOIN";
    $tabMots[] = "LONG";
    $tabMots[] = "LUMIERE";
    $tabMots[] = "LUNETTES";
    $tabMots[] = "MADAME";
    $tabMots[] = "MAGAZINE";
    $tabMots[] = "MAGICIEN";
    $tabMots[] = "MAGIE";
    $tabMots[] = "MAGNETOSCOPE";
    $tabMots[] = "MAILLOT";
    $tabMots[] = "MAIN";
    $tabMots[] = "MAINS";
    $tabMots[] = "MAISON";
    $tabMots[] = "MAITRE";
    $tabMots[] = "MAITRESSE";
    $tabMots[] = "MAL";
    $tabMots[] = "MALADROIT";
    $tabMots[] = "MANCHE";
    $tabMots[] = "MANQUER";
    $tabMots[] = "MANTEAU";
    $tabMots[] = "MARCHE";
    $tabMots[] = "MARIONNETTE";
    $tabMots[] = "MARTEAU";
    $tabMots[] = "MATELAS";
    $tabMots[] = "MATERNELLE";
    $tabMots[] = "MELANGER";
    $tabMots[] = "MEME";
    $tabMots[] = "MENSONGE";
    $tabMots[] = "MESURER";
    $tabMots[] = "METAL";
    $tabMots[] = "METRE";
    $tabMots[] = "METTRE";
    $tabMots[] = "MEUBLE";
    $tabMots[] = "MICRO";
    $tabMots[] = "MIEUX";
    $tabMots[] = "MILIEU";
    $tabMots[] = "MINE";
    $tabMots[] = "MODELE";
    $tabMots[] = "MOINS";
    $tabMots[] = "MONTAGNE";
    $tabMots[] = "MONTER";
    $tabMots[] = "MONTRER";
    $tabMots[] = "MORCEAU";
    $tabMots[] = "MOT";
    $tabMots[] = "MOTEUR";
    $tabMots[] = "MOTO";
    $tabMots[] = "MOUCHOIR";
    $tabMots[] = "MOUFLE";
    $tabMots[] = "MOUILLE";
    $tabMots[] = "MOUILLER";
    $tabMots[] = "MOULIN";
    $tabMots[] = "MOUSSE";
    $tabMots[] = "MOYEN";
    $tabMots[] = "MUET";
    $tabMots[] = "MULTICOLORE";
    $tabMots[] = "MUR";
    $tabMots[] = "MUSCLE";
    $tabMots[] = "MUSIQUE";
    $tabMots[] = "NAGER";
    $tabMots[] = "NENUPHAR";
    $tabMots[] = "NEUF";
    $tabMots[] = "NŒUD";
    $tabMots[] = "NOIR";
    $tabMots[] = "NOM";
    $tabMots[] = "NOMBRE";
    $tabMots[] = "NOUVEAU";
    $tabMots[] = "NU";
    $tabMots[] = "NUMERO";
    $tabMots[] = "OBEIR";
    $tabMots[] = "OBJET";
    $tabMots[] = "OBLIGER";
    $tabMots[] = "ONGLE";
    $tabMots[] = "ORCHESTRE";
    $tabMots[] = "ORDINATEUR";
    $tabMots[] = "ORDRE";
    $tabMots[] = "OURS";
    $tabMots[] = "OUTIL";
    $tabMots[] = "OUVRIR";
    $tabMots[] = "PAGE";
    $tabMots[] = "PAIRE";
    $tabMots[] = "PANNE";
    $tabMots[] = "PANTALON";
    $tabMots[] = "PAPIER";
    $tabMots[] = "PARACHUTE";
    $tabMots[] = "PARCOURS";
    $tabMots[] = "PAREIL";
    $tabMots[] = "PARKING";
    $tabMots[] = "PARLER";
    $tabMots[] = "PARTAGER";
    $tabMots[] = "PARTIR";
    $tabMots[] = "PAS";
    $tabMots[] = "PASSERELLE";
    $tabMots[] = "PATAUGER";
    $tabMots[] = "PEDALO";
    $tabMots[] = "PEINDRE";
    $tabMots[] = "PEINTURE";
    $tabMots[] = "PELUCHE";
    $tabMots[] = "PENTE";
    $tabMots[] = "PERCER";
    $tabMots[] = "PERDRE";
    $tabMots[] = "PERLE";
    $tabMots[] = "PERSONNE";
    $tabMots[] = "PETIT";
    $tabMots[] = "PEU";
    $tabMots[] = "PEUR";
    $tabMots[] = "PHOTO";
    $tabMots[] = "PIED";
    $tabMots[] = "PIEDS";
    $tabMots[] = "PILOTE";
    $tabMots[] = "PINCEAU";
    $tabMots[] = "PION";
    $tabMots[] = "PLACARD";
    $tabMots[] = "PLAFOND";
    $tabMots[] = "PLAGE";
    $tabMots[] = "PLANCHE";
    $tabMots[] = "PLÂTRE";
    $tabMots[] = "PLEUVOIR";
    $tabMots[] = "PLI";
    $tabMots[] = "PLIAGE";
    $tabMots[] = "PLIER";
    $tabMots[] = "PLONGEOIR";
    $tabMots[] = "PLONGER";
    $tabMots[] = "PLUIE";
    $tabMots[] = "PLUS";
    $tabMots[] = "PNEU";
    $tabMots[] = "POCHE";
    $tabMots[] = "POIGNET";
    $tabMots[] = "POING";
    $tabMots[] = "POINT";
    $tabMots[] = "POINTE";
    $tabMots[] = "POINTU";
    $tabMots[] = "POISSON";
    $tabMots[] = "POLI";
    $tabMots[] = "POMPIERS";
    $tabMots[] = "PONT";
    $tabMots[] = "PORTE";
    $tabMots[] = "PORTEMANTEAU";
    $tabMots[] = "PORTER";
    $tabMots[] = "POSER";
    $tabMots[] = "POSTER";
    $tabMots[] = "POT";
    $tabMots[] = "POUBELLE";
    $tabMots[] = "POUCE";
    $tabMots[] = "POUSSER";
    $tabMots[] = "POUVOIR";
    $tabMots[] = "PREMIER";
    $tabMots[] = "PRENDRE";
    $tabMots[] = "PRENOM";
    $tabMots[] = "PREPARER";
    $tabMots[] = "PRES";
    $tabMots[] = "PRESENT";
    $tabMots[] = "PRESQUE";
    $tabMots[] = "PRESSER";
    $tabMots[] = "PRETER";
    $tabMots[] = "PRINCE";
    $tabMots[] = "PRISES";
    $tabMots[] = "PRIVER";
    $tabMots[] = "PROMETTRE";
    $tabMots[] = "PROPRE";
    $tabMots[] = "PUNAISE";
    $tabMots[] = "PUNIR";
    $tabMots[] = "PUZZLE";
    $tabMots[] = "PYJAMA";
    $tabMots[] = "PYRAMIDE";
    $tabMots[] = "QUAI";
    $tabMots[] = "QUATRE";
    $tabMots[] = "QUESTION";
    $tabMots[] = "RACONTER";
    $tabMots[] = "RADIATEUR";
    $tabMots[] = "RADIO";
    $tabMots[] = "RAME";
    $tabMots[] = "RAMPE";
    $tabMots[] = "RAMPER";
    $tabMots[] = "RANGER";
    $tabMots[] = "RATER";
    $tabMots[] = "RAYURE";
    $tabMots[] = "RECEVOIR";
    $tabMots[] = "RECITER";
    $tabMots[] = "RECOMMENCER";
    $tabMots[] = "RECREATION";
    $tabMots[] = "RECULER";
    $tabMots[] = "REFUSER";
    $tabMots[] = "REGARDER";
    $tabMots[] = "REINE";
    $tabMots[] = "REMETTRE";
    $tabMots[] = "REMPLACER";
    $tabMots[] = "REMPLIR";
    $tabMots[] = "RENTREE";
    $tabMots[] = "RENTRER";
    $tabMots[] = "RENVERSER";
    $tabMots[] = "REPARER";
    $tabMots[] = "REPETER";
    $tabMots[] = "REPONDRE";
    $tabMots[] = "RESPIRER";
    $tabMots[] = "RESSEMBLER";
    $tabMots[] = "RESTER";
    $tabMots[] = "RETARD";
    $tabMots[] = "REUSSIR";
    $tabMots[] = "REVENIR";
    $tabMots[] = "RIDEAU";
    $tabMots[] = "ROBE";
    $tabMots[] = "ROBINET";
    $tabMots[] = "ROI";
    $tabMots[] = "ROND";
    $tabMots[] = "ROUE";
    $tabMots[] = "ROUGE";
    $tabMots[] = "ROULADE";
    $tabMots[] = "ROULER";
    $tabMots[] = "ROUX";
    $tabMots[] = "RUBAN";
    $tabMots[] = "RUGUEUX";
    $tabMots[] = "SAGE";
    $tabMots[] = "SALADIER";
    $tabMots[] = "SALE";
    $tabMots[] = "SALLE";
    $tabMots[] = "SAUT";
    $tabMots[] = "SAUTER";
    $tabMots[] = "SAVON";
    $tabMots[] = "SCIE";
    $tabMots[] = "SEAU";
    $tabMots[] = "SEC";
    $tabMots[] = "SECHER";
    $tabMots[] = "SEMELLE";
    $tabMots[] = "SENS";
    $tabMots[] = "SENTIR";
    $tabMots[] = "SEPARER";
    $tabMots[] = "SEPT";
    $tabMots[] = "SERIEUX";
    $tabMots[] = "SERPENT";
    $tabMots[] = "SERRE";
    $tabMots[] = "SERRER";
    $tabMots[] = "SERRURE";
    $tabMots[] = "SERVIETTE";
    $tabMots[] = "SERVIR";
    $tabMots[] = "SEUL";
    $tabMots[] = "SIEGE";
    $tabMots[] = "SIESTE";
    $tabMots[] = "SILENCE";
    $tabMots[] = "SIX";
    $tabMots[] = "SOL";
    $tabMots[] = "SOLDAT";
    $tabMots[] = "SOLIDE";
    $tabMots[] = "SOMMEIL";
    $tabMots[] = "SONNER";
    $tabMots[] = "SONNETTE";
    $tabMots[] = "SORCIERE";
    $tabMots[] = "SORTIE";
    $tabMots[] = "SORTIR";
    $tabMots[] = "SOUFFLER";
    $tabMots[] = "SOULEVER";
    $tabMots[] = "SOULIGNER";
    $tabMots[] = "SOUPLE";
    $tabMots[] = "SOURD";
    $tabMots[] = "SOURIRE";
    $tabMots[] = "SOUS";
    $tabMots[] = "SPAGHETTI";
    $tabMots[] = "SPORT";
    $tabMots[] = "STYLO";
    $tabMots[] = "SUIVANT";
    $tabMots[] = "SUIVRE";
    $tabMots[] = "SUR";
    $tabMots[] = "SURFEUR";
    $tabMots[] = "TABLE";
    $tabMots[] = "TABLEAU";
    $tabMots[] = "TABLIER";
    $tabMots[] = "TABOURET";
    $tabMots[] = "TACHE";
    $tabMots[] = "TAILLE";
    $tabMots[] = "TAILLER";
    $tabMots[] = "TALON";
    $tabMots[] = "TAMBOUR";
    $tabMots[] = "TAMPON";
    $tabMots[] = "TAPER";
    $tabMots[] = "TAPIS";
    $tabMots[] = "TARD";
    $tabMots[] = "TASSE";
    $tabMots[] = "TELECOMMANDE";
    $tabMots[] = "TELEPHONE";
    $tabMots[] = "TELEVISION";
    $tabMots[] = "TENDRE";
    $tabMots[] = "TENIR";
    $tabMots[] = "TENNIS";
    $tabMots[] = "TERMINER";
    $tabMots[] = "TETE";
    $tabMots[] = "TIRER";
    $tabMots[] = "TIROIR";
    $tabMots[] = "TISSU";
    $tabMots[] = "TITRE";
    $tabMots[] = "TOBOGGAN";
    $tabMots[] = "TOILETTE";
    $tabMots[] = "TOMBER";
    $tabMots[] = "TORDU";
    $tabMots[] = "TOT";
    $tabMots[] = "TOUCHER";
    $tabMots[] = "TOUR";
    $tabMots[] = "TOURNER";
    $tabMots[] = "TOURNEVIS";
    $tabMots[] = "TRAIN";
    $tabMots[] = "TRAIT";
    $tabMots[] = "TRAMPOLINE";
    $tabMots[] = "TRANQUILLE";
    $tabMots[] = "TRANSPARENT";
    $tabMots[] = "TRANSPIRER";
    $tabMots[] = "TRANSPORTER";
    $tabMots[] = "TRAVAIL";
    $tabMots[] = "TRAVAILLER";
    $tabMots[] = "TRAVERSER";
    $tabMots[] = "TREMPER";
    $tabMots[] = "TRICHER";
    $tabMots[] = "TRICOT";
    $tabMots[] = "TRIER";
    $tabMots[] = "TROIS";
    $tabMots[] = "TROISIEME";
    $tabMots[] = "TROMPETTE";
    $tabMots[] = "TROP";
    $tabMots[] = "TROUER";
    $tabMots[] = "TROUS";
    $tabMots[] = "TROUSSE";
    $tabMots[] = "TUNNEL";
    $tabMots[] = "UN";
    $tabMots[] = "UNIFORME";
    $tabMots[] = "USE";
    $tabMots[] = "VACHE";
    $tabMots[] = "VALISE";
    $tabMots[] = "VASE";
    $tabMots[] = "VEHICULE";
    $tabMots[] = "VENIR";
    $tabMots[] = "VENTRE";
    $tabMots[] = "VERRE";
    $tabMots[] = "VERS";
    $tabMots[] = "VERSER";
    $tabMots[] = "VERT";
    $tabMots[] = "VESTE";
    $tabMots[] = "VETEMENT";
    $tabMots[] = "VIDER";
    $tabMots[] = "VIRAGE";
    $tabMots[] = "VIS";
    $tabMots[] = "VITE";
    $tabMots[] = "VITESSE";
    $tabMots[] = "VITRE";
    $tabMots[] = "VOITURE";
    $tabMots[] = "VOIX";
    $tabMots[] = "VOLER";
    $tabMots[] = "VOULOIR";
    $tabMots[] = "VOYAGE";
    $tabMots[] = "WAGON";
    $tabMots[] = "XYLOPHONE";
    $tabMots[] = "ZERO";
    $tabMots[] = "ZIGZAG";

    return $tabMots;
}

/**
 * méthode qui demande une lettre à l’utilisateur, elle vérifie que
 * le caractère saisi est une lettre et le renvoi en majuscule.
 * 
 * @return  string $lettre renvoi le caractère saisie par l'utilisateur en majuscule
 * 
 */
function demanderLettre(){
    $lettre=readline("Donnez une lettre ");
    while(!ctype_alpha($lettre)){
        echo "Saisie incorrect \n";
        $lettre=readline("Donnez une lettre ");
    }
    return strtoupper($lettre);
}

/**
 * méthode qui renvoi 1 si la partie est gagné, -1 si la partie est perdu,
 * 0 si la partie continue. Elle reçoit en paramètre le nombre d’erreurs 
 * et le tableau contenant le mot composé
 * 
 * @param   int $nbErreur   nombre d'erreurs que le joueur a fait
 * @param   array  $tab     tableau contenant le mot composé
 * 
 * @return  int    $res     retourne 1 si la partie est gagné, -1 si la partie est perdu et 0 si la partie continue 
 */
function testerGagner($nbErreur,$tab){
    if($nbErreur>=8){
        return -1;
    }
    else{
        if(array_search("_",$tab)===false){
            return 1;
        }
        else{
            return 0;
        }
    }
}

/**
 * méthode qui lance et gère une partie 
 * 
 * @param int $difficulte
 * 
 * @return void
 */
function lancerPartie($difficulte){
    $mot= choisirMot();
    $motTableau=str_split($mot);
    switch($difficulte){
        case 1:
            $nbErreur=0;
            $motCode= coderMot($mot,$difficulte);
        break;
        case 2:
            $nbErreur=2;
            $motCode= coderMot($mot,$difficulte);
        break;
        case 3:
            $nbErreur=3;
            $motCode= coderMot($mot,$difficulte);
        break;
    }
    $mauvaisesLettres=[];
    $gagne=0;
    do{
    //affichage du mot codé
        afficherTableau($motCode);
        echo "\n";
    //affichage des mauvaises lettres seulement si il y en a
        if(!empty($mauvaisesLettres)){
            afficherMauvaisesLettres($mauvaisesLettres);
        }
        echo "\n";
        
        //echo $mot;

    //Ajout des lettres

/*************************************************************************** V2 *****************************************************************************/        
        switch($difficulte){
            case 1:
                //Saisie utilisateur: demande une lettre tant que l'utilisateur entre une lettre déja donné
                $lettre=demanderLettre();
                //mode facile
                $motFacile=array_slice($motCode,1,count($motCode)-2);//on ne prend pas en compte la 1ere et la dernière lettre car elle sont déja donnée (pour palier aux mots terminant ou commençant par une lettre présentes dans le mot)
                while(in_array($lettre,$mauvaisesLettres) || in_array($lettre,$motFacile) ){ //Vérification sur $motFacile pour palier au mot contenant la même lettre que la 1ere ou dernière
                    echo "\nVous avez déja donné cette lettre, veuillez en saisir une autre\n";
                    $lettre=demanderLettre();
                }
                $positions=testerLettre($lettre,$motTableau,0);
                //Si la lettre est dans le mot on ajoute cette lettre dans le mot codé
                if(!empty($positions)){
                    $motCode=ajouterLesLettres($lettre,$motCode,$positions);
                }else{
                    $mauvaisesLettres[]=$lettre;
                    $nbErreur+=1;
                }
            break;

            case 2:
                //Saisie utilisateur: demande une lettre tant que l'utilisateur entre une lettre déja donné
                $lettre=demanderLettre();
                //mode normal
                while(in_array($lettre,$mauvaisesLettres)){
                    echo "\nVous avez déja donné cette lettre, veuillez en saisir une autre\n";
                    $lettre=demanderLettre();
                }
                //on regarde si le joueur re-rentre la même lettre qui était bonne: si la lettre a déja été donné alors on augmente le nombre d'erreur et on la renseigne dans le tableau mauvaisesLettres
                if(in_array($lettre,$motCode)===false){
                    $positions=testerLettre($lettre,$motTableau,0);
                    //Si la lettre est dans le mot on ajoute cette lettre dans le mot codé
                    if(!empty($positions)){
                        $motCode=ajouterLesLettres($lettre,$motCode,$positions);
                    }else{
                        $mauvaisesLettres[]=$lettre;
                        $nbErreur+=1;
                    }
                }else{
                    $mauvaisesLettres[]=$lettre;
                    $nbErreur+=1;
                }
                
            break;

            case 3:
                //mode difficile : pas de vérif
                $lettre=demanderLettre();
                $positions=testerLettre($lettre,$motTableau,0);   
                if(!empty($positions)){
                    //mode difficile : remplissage lettre par lettre
                        if(count(testerLettre($lettre,$motCode,0))==count($positions)){ //On regarde si dans le mot codé il reste des occurences de la lettre: on compte le nombre de postions retrouver dans les 2 tableaux si c'est le même alors la lettre n'est plus dans le mot
                            $mauvaisesLettres[]=$lettre;
                            $nbErreur+=1;
                        }else{
                            $position[0]=$positions[rand(0,count($positions)-1)]; //On récupère une position aléatoire dans les bonnes réponse
                            while($motCode[$position[0]]==$lettre){ //On boucle tant que la position d'une des occurences a déja été renseigné
                                $position[0]=$positions[rand(0,count($positions)-1)];
                            }
                            $motCode=ajouterLesLettres($lettre,$motCode,$position);
                            $position=[];
                        }        
                }
                //Si la lettre n'est pas dans le mot on ajoute la lettre dans les mauvaises lettres et on incremente le nombre d'erreurs
                else{
                    $mauvaisesLettres[]=$lettre;
                    $nbErreur+=1;
                }
            break;
        }
        
/*************************************************************************** FIN V2 *****************************************************************************/  

/****************************************************** V1 ***************************************************/    
    // //Saisie utilisateur: demande une lettre tant que l'utilisateur entre une lettre déja donné
    // $lettre=demanderLettre();
    // //mode facile
    // /*while(in_array($lettre,$mauvaisesLettres) || in_array($lettre,$motCode) ){
    //     echo "\nVous avez déja donné cette lettre, veuillez en saisir une autre\n";
    //     $lettre=demanderLettre();
    // }*/
    // //mode normal
    // /*while(in_array($lettre,$mauvaisesLettres)){
    //     echo "\nVous avez déja donné cette lettre, veuillez en saisir une autre\n";
    //     $lettre=demanderLettre();
    // }*/
    // //mode difficile : pas de vérif
    
    // $positions=testerLettre($lettre,$motTableau,0);
    // if(!empty($positions)){
    //     //mode facile
    //     /*$motCode=ajouterLesLettres($lettre,$motCode,$positions);*/
    //     //mode normal
    //     /*$motCode=ajouterLesLettres($lettre,$motCode,$positions);*/
    //     //mode difficile : remplissage lettre par lettre
    //         if(count(testerLettre($lettre,$motCode,0))==count($positions)){ //On regarde si dans le mot codé il reste des occurences de la lettre: on compte le nombre de postions retrouver dans les 2 tableaux si c'est le même alors la lettre n'est plus dans le mot
    //             $mauvaisesLettres[]=$lettre;
    //             $nbErreur+=1;
    //         }else{
    //             $position[0]=$positions[rand(0,count($positions)-1)]; //On récupère une position aléatoire dans les bonnes réponse
    //             while($motCode[$position[0]]==$lettre){ //On boucle tant que la position d'une des occurences a déja été renseigné
    //                 $position[0]=$positions[rand(0,count($positions)-1)];
    //             }
    //             $motCode=ajouterLesLettres($lettre,$motCode,$position);
    //             $position=[];
    //         }
    // }
    // //Si la lettre n'est pas dans le mot on ajoute la lettre dans les mauvaises lettres et on incremente le nombre d'erreurs
    // else{
    //     $mauvaisesLettres[]=$lettre;
    //     $nbErreur+=1;
    // }
/*********************************************************************Fin V1 ***************************************************************************/
    echo"\n";
    dessinerPendu($nbErreur);
    echo "\n";       
    $gagne=testerGagner($nbErreur,$motCode);

    }while($gagne==0);

    //affichage de fin de partie
    if($gagne==1){
        echo "Vous avez gagné, le mot était bien ".$mot;
    }else{
        echo "Vous avez perdu, le mot était ".$mot;
    }
}
/******************************************************************* FIN FONCTION *************************************************************************** */


/******************************************************************* Main ************************************************************************************/

//test afficherTableau
/*$t=["B","O","N","J","O","U","R"];
Echo "Cette méthode doit donner B O N J O U R et ca donne : ";
afficherTableau($t);*/

//Test coderMot
/*$test="bonjour";
echo "Cette méthode doit donner _ _ _ _ _ _ _ et ca donne : ";

afficherTableau(coderMot($test,3));*/

//test testerLettre
/*$t = array( 'B', 'O', 'N', 'J', 'O', 'U', 'R' );
$positions = testerLettre('O',$t,0);
foreach ($positions as $pos)
{
    echo("position : ".$pos."\n");
}*/

//test ajouterUneLettre
/*Echo "Cette méthode doit donner B O N K O U R et ca donne ";
$t = array( 'B', 'O', 'N', 'J', 'O', 'U', 'R' );
afficherTableau( ajouterUneLettre('K', $t, 3));*/

//test ajouterLesLettres
/*$motATrouver="BONJOUR";
$t = array( 'B', '_', 'N', 'J', '_', 'U', '_' );
echo "Cette méthode doit donner B O N J O U _ et ca donne ";
afficherTableau(ajouterLesLettres('O', $t, testerLettre('O', str_split($motATrouver),0)));*/

//test afficherMauvaisesLettres
/*$liste = array('A','B','C') ;
echo "Cette méthode doit donner :\n Les lettres non présentes sont A,B,C \n et ca donne \n" ;
afficherMauvaisesLettres($liste);*/

//test dessinerPendu
/*dessinerPendu(4);*/

//test choisirMot
/*echo choisirMot();*/

//test demanderLettre
/*$c = DemanderLettre();
echo $c;*/

//test testerGagner

/*$t = array( 'B', '_', 'N', 'J', 'O', 'U', 'R' );
Echo "Cette méthode doit donner -1 et ca donne " . testerGagner(9, $t)."\n";
Echo "Cette méthode doit donner 0 et ca donne " . testerGagner(3, $t)."\n";
$t[1] =  'O' ;
Echo "Cette méthode doit donner 1 et ca donne " . testerGagner(2, $t)."\n";*/

//test lancerPartie
echo "Quelle difficulté voulez vous ? ";
echo "\n 1- Facile";
echo "\n 2- Normal";
echo "\n 3- Difficile\n";
$difficulte=readline();
lancerPartie($difficulte);

/********************************************************************FIN MAIN *********************************************************************************** */
<?php

/**
 * détermine si le plateau est plein (aucune place disponible). Renvoi vrai si le plateau est plein, faux sinon
 *
 * @param array $plateau
 * @return bool
 */
function plateauPlein($plateau,$jeu)
{
    if($jeu=="M"){
        for ($i = 0; $i < count($plateau); $i++)
        {
            if (in_array(".", $plateau[$i]))
            {
                return false;
            }
        }
        return true;
    }else{
        if(in_array('.',$plateau[0])){ 
            return false;
        }
        return true;
    }
        
}

/**
 * à partir du numéro de colonne, la fonction renvoi les coordonnées de la première case disponible ou -1 si la colonne est pleine. 
 *
 * @param [array] $plateau
 * @param [int] $numCol
 * @return array    $tabPos tableau de position de la case valide ou -1 si la colonne est pleine
 */
function trouverCase($plateau,$numCol){
    for($i=(count($plateau)-1);$i>=0;$i--){
        if($plateau[$i][$numCol]=='.'){
            $tabPos[0]=$i;
            $tabPos[1]=$numCol;
            return $tabPos;
        }
    }
    return -1;
}

/**
 * converti les coordonnées A3 en [3,0].
 * Les lettres représentent les colonnes. L'utilisateur peut saisir 4B pour [4,1]
 * Le tableau renvoyé contient le n° de ligne dans la case 0 et le n° de colonne dans la case 1
 *
 * @param string $coordonnee
 * @param int    $jeu           choix du jeu
 * @return array    $tabCord    coordonnée converti
 */
function conversionPosition($coordonnee,$jeu)
{
    if($jeu=="M"){
        $coordonnee = strtoupper($coordonnee);
        if (ctype_alpha($coordonnee[0])) //La lettre est en premier
        {

            $alpha = $coordonnee[0];
            $numCol = ord($alpha) - ord("A");
            if (strlen($coordonnee) == 3) // Ligne a 2 digits
            {
                $chiffre = 10 * $coordonnee[1] + $coordonnee[2]; // on transforme [1,5] en 15
            }
            else
            {
                $chiffre = $coordonnee[1];
            }
        }
        else // La lettre est en dernier
        {
            $longueur = strlen($coordonnee);
            $alpha = $coordonnee[$longueur - 1];
            $numCol = ord($alpha) - ord("A");

            if ($longueur == 3)
            {
                $chiffre = 10 * $coordonnee[0] + $coordonnee[1];
            }
            else
            {
                $chiffre = $coordonnee[0];
            }
        }
        $tabCord[0] = $chiffre - 1;
        $tabCord[1] = $numCol;
        return $tabCord;
    }
    else{
        $coordonnee = strtoupper($coordonnee);
        $numCol = ord($coordonnee) - ord("A");
        return $numCol;
    }
}

/**
 * affiche le plateau de jeu
 *
 * @param array $plateau
 * @param char $jeu
 * @return void
 */
function afficheTableau($plateau,$jeu)
{
    //Jeu du morpion
    if($jeu=="M"){    

        echo "\n";
        $nbCol = count($plateau[0]);
        // on prepare les séparateurs et le titre
        $ligneSuperieure = "";
        $ligneIntermediaire = "";
        $titre = "";
        for ($k = 1; $k <= $nbCol; $k++)
        {
            //on commence à 1 pour afficher les numeros des colonnes
            $titre .= "\t    " . chr($k + ord('A') - 1);
            if ($k == $nbCol)
            {
                $ligneSuperieure .= "_______";
            }
            else
            {
                $ligneSuperieure .= "________";
            }
            $ligneIntermediaire .= "_______|";
        }

        //Affiche ligne par ligne
        for ($i = 0; $i < count($plateau); $i++)
        {
            if ($i == 0) //haut du tableau
            {
                echo $titre . "\n\t ";
                //ligne supérieur du tableau
                echo $ligneSuperieure . "\n";
            }
            else //Centre du tableau
            {
                //ligne intermédiaire

                echo $ligneIntermediaire . "\n";
            }
            //affichage du numéro de la ligne
            $chiffre = $i + 1;
            echo "    " . $chiffre;
            //affichage des élément du tableau
            for ($j = 0; $j < $nbCol; $j++)
            {
                echo "\t|   " . $plateau[$i][$j];
            }
            echo "\t|\n\t|";
        }
        //bas du tableau
        echo $ligneIntermediaire . "\n";
    }

    //Jeu du Puissance 4
    else{
        
        echo "\n";
        $nbCol = count($plateau[0]);
        // on prepare les séparateurs et le titre
        $ligneSuperieure = "";
        $ligneIntermediaire = "";
        $titre = "";
        for ($k = 1; $k <= $nbCol; $k++)
        {
            //on commence à 1 pour afficher les numeros des colonnes
            $titre .= "\t    " . chr($k + ord('A') - 1);
            if ($k == $nbCol)
            {
                $ligneSuperieure .= "_______";
            }
            else
            {
                $ligneSuperieure .= "________";
            }
            $ligneIntermediaire .= "_______|";
        }

        //Affiche ligne par ligne
        for ($i = 0; $i < count($plateau); $i++)
        {
            if ($i == 0) //haut du tableau
            {
                echo $titre . "\n\t ";
                //ligne supérieur du tableau
                echo $ligneSuperieure . "\n";
            }
            else //Centre du tableau
            {
                //ligne intermédiaire

                echo $ligneIntermediaire . "\n";
            }
            //affichage des élément du tableau
            for ($j = 0; $j < $nbCol; $j++)
            {
                echo "\t|   " . $plateau[$i][$j];
            }
            echo "\t|\n\t|";
        }
        //bas du tableau
        echo $ligneIntermediaire . "\n";
    }
}

function selectionPosition($plateau, $jeu)
{
    if ($jeu == "P") {
        do//boucle pour verifier si les position existe dans le plateau
        {
            do// boucle pour la saisie et verifier si la chaine est bien alpha numerique de 2 ou 3 caractères
            {

                $chaine = readline("veuillez saisir la colonne : ");
            } while (strlen($chaine) > 1 || !ctype_alpha($chaine)); // on check si il y a 1 lettre ou 1 chiffre.  TAG MODIFSELECPOS
            $position = conversionPosition($chaine, $jeu);
            $positions = trouverCase($plateau, $position);
        } while ($positions == -1);
        return $positions;
    } else {
        do {
            do//boucle pour verifier si les position existe dans le plateau
            {

                do//boucle pour verifier la position du caractere alpha au debut ou a la fin de la chaine de caractere
                {

                    do// boucle pour la saisie et verifier si la chaine est bien alpha numerique de 2 ou 3 caractères
                    {

                        $chaine = readline("veuillez saisir la position de votre pion: ");
                    } while (strlen($chaine) > 3 || strlen($chaine) == 1 || !ctype_alnum($chaine));
                } while (!ctype_alpha($chaine[0]) xor ctype_alpha($chaine[strlen($chaine) - 1]));

                $positions = conversionPosition($chaine,$jeu);
                $lig = $positions[0];
                $col = $positions[1];
            } while ($lig >= count($plateau) && $col >= count($plateau[0]));
        } while ($plateau[$lig][$col] != ".");
        return $positions;
    }
}


/******************************************* Test *********************************************************************/

/*$plateau = [[".",".",".","."],
            ["e",".",".","."],
            ["e",".",".","."]];
$res=trouverCase($plateau,0);
var_dump($res);*/
var_dump(conversionPosition("B","p"));

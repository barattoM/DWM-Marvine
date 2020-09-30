<?php
/**
 * Compte le nombre de symboles alignés successifs dans une direction à partir d'une position (cette position n'est pas comptée)
 *
 * @param [array] $plateau      Plateau de jeu
 * @param [array] $positions    La position à partir de laquelle compter
 * @param [int] $directionX     Direction sur les lignes
 * @param [int] $directionY     Direction sur les colonnes
 * @param [char] $symbole       Symbole du joueur actuel
 * @return int  Renvoie le nombre de symbole successif en suivant la direction donnée
 */
function compteAlignes($plateau,$positions,$directionX,$directionY,$symbole){
    $positionSuivanteX=$positions[0]+$directionX;
    $positionSuivanteY=$positions[1]+$directionY;
    $positions[0]=$positionSuivanteX;
    $positions[1]=$positionSuivanteY;
    if($positions[0]>=count($plateau) || $positions[1]>=count($plateau[0] || $positions[0]<0) || $positions[1]<0){ //vérification si on se trouve toujours dans le tableau, si non on arrête
        return 0;
    }
    $symboleSuivant=$plateau[$positionSuivanteX][$positionSuivanteY];   
    if($symboleSuivant!=$symbole){ //on s'arrête quand le symbole suivant est différent
        return 0;
    }else{              
        return 1+compteAlignes($plateau,$positions,$directionX,$directionY,$symbole);        
    }
}
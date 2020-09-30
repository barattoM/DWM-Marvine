<?php
function compteAlignes($plateau,$positions,$directionX,$directionY,$symbole){
    $positionSuivanteX=$positions[0]+$directionX;
    $positionSuivanteY=$positions[1]+$directionY;
    $symboleSuivant=$plateau[$positionSuivanteX][$positionSuivanteY];
    $positions[0]=$positionSuivanteX;
    $positions[1]=$positionSuivanteY;
    if($symboleSuivant!=$symbole || ){ //on s'arrête quand le symbole suivant est différent ou que la position suivante n'est pas dans le tableau
        return 0;
    }else{              
            $nbSymboleAligne+=compteAlignes($plateau,$positions,$directionX,$directionY,$symbole);
            return $nbSymboleAligne;
        
        
    }
}
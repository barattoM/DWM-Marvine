<?php


/************************************* Corps *********************************/
echo '<div class="page">
<div class="espaceHor"></div>';

//Description FF XIV

echo '<div class="texte">Final Fantasy XIV: A Realm Reborn, est un jeu de rôle en ligne massivement multijoueur
développé et édité par Square Enix. C\'est le quatorzième volet de la série principale des Final Fantasy et
le second jeu de rôle massivement multijoueur développé par Square Enix après Final Fantasy XI. Ce jeu a une
histoire particulière car deux versions se sont succédé : la version 1.0 dont les serveurs sont à présent
fermés et Final Fantasy XIV: A Realm Reborn ou version 2.0 qui est à présent la version de base du jeu.
</div>';

//Ligne

for($i=0;$i<count($titre);$i++){
    echo '<div class="extension colonne">';
    //titre de l'extension
    echo '<div class="titre">
        <h2>'.$titre[$i].'</h2>
    </div>';
    //Contenu
    echo '<div class="contenu">';
    //Image de l'extension
    echo '<div class="image">
        <img src="../Ressources/'.$image[$i].'" alt="'.$titre[$i].'">
        </div>';
    //Texte
    echo '<div class="texte">'.
            $texte[$i].
            '</div>';
    //Colonne Image
    echo '<div class="colonne">';
        echo '<div class="blocImages">';
            echo '<div class="image"><img src="'.$sousImage[0].'" alt=""></div>';
            echo '<div class="espace"></div>';
            echo '<div class="image"><img src="'.$sousImage[1].'" alt=""></div>';
        echo '</div>';
        echo '<div class="blocImages">';
            echo '<div class="image"><img src="'.$sousImage[2].'" alt=""></div>';
            echo '<div class="espace"></div>';
            echo '<div class="image"><img src="'.$sousImage[3].'" alt=""></div>';
        echo '</div>';
    echo '</div>';
    array_splice($sousImage,0,4);
    echo '</div>';
    echo '</div>';
    echo '<div class="espaceHor"></div>';
}



echo '</div>';
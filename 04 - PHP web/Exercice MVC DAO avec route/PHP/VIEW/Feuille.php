<?php

$feuille=$_GET["feuille"];

if ($feuille=="ajouter"){
    //Ajouter
    echo '<div class="page block">
        <form action="./index.php?code=traitements&traitement=ajouter" method="POST">
        <p>Libelle du Produit :</p> <input type = "text" name = "libelleProduit" />
        <p>Prix : </p><input type = "text" name = "prix" />
        <p>Date de péremption : </p><input type = "text" name = "dateDePeremption" />
        <br>
        <input class="bouton" type="submit" name="submit" value="Ajouter un produit"/>
        </form>';
        echo '<a href="./index.php?code=liste"><div class="bouton">Annuler</div></a>';
    echo '</div>';
}else if($feuille=="detail"){
    //Détail
    $id=$_GET["id"];
    $produit=ProduitsManager::findById($id);
    echo '<div class="page block">
        <div class="nom"> Libellé : '.$produit->getLibelleProduit().'</div>
        <div class="nom"> Prix : '.$produit->getPrix().'</div>
        <div class="nom"> Date de péremption : '.$produit->getDateDePeremption().'</div>
        <a href="./index.php?code=liste"><div class="bouton">Annuler</div></a>';
    echo '</div>';
}else if($feuille=="modifier"){
    //Modifier
    $id=$_GET["id"];
    $produit=ProduitsManager::findById($id);
    echo '<div class="page block">
        <form action="./index.php?code=traitements&traitement=modifier" method="POST">
        <input type = "hidden" name = "id" value="'.$id.'"/>
        <p>Libelle du Produit :</p> <input type = "text" name = "libelleProduit" value="'.$produit->getLibelleProduit().'"/>
        <p>Prix : </p><input type = "text" name = "prix" value="'.$produit->getPrix().'" />
        <p>Date de péremption : </p><input type = "text" name = "dateDePeremption" value="'.$produit->getDateDePeremption().'"/>
        <br>
        <input class="bouton" type="submit" name="submit" value="Modifier un produit"/>
        </form>';
        echo '<a href="./index.php?code=liste"><div class="bouton">Annuler</div></a>';
    echo '</div>';

}






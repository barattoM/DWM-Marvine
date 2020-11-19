<?php
$titre="Gestion de produit";
$titrePage="Ajouter un produit";
include ("./head.php");
include ("./header.php");

$id=$_GET["id"];
$produit=ProduitsManager::findById($id);
echo '<div class="page block">
    <form action="modifierTraitement.php" method="POST">
    <input type = "hidden" name = "id" value="'.$id.'"/>
    <p>Libelle du Produit :</p> <input type = "text" name = "libelleProduit" value="'.$produit->getLibelleProduit().'"/>
    <p>Prix : </p><input type = "text" name = "prix" value="'.$produit->getPrix().'" />
    <p>Date de péremption : </p><input type = "text" name = "dateDePeremption" value="'.$produit->getDateDePeremption().'"/>
    <br>
    <input class="bouton" type="submit" name="submit" value="Modifier un produit"/>
    </form>';
    echo '<a href="../../index.php"><div class="bouton">Annuler</div></a>';
echo '</div>';

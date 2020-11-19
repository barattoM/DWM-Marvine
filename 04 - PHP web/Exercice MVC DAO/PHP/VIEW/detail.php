<?php

$titre="Gestion de produit";
$titrePage="Détail du produit";
include ("./head.php");
include ("./header.php");
$id=$_GET["id"];
$produit=ProduitsManager::findById($id);
echo '<div class="page block">
    <div class="nom"> Libellé : '.$produit->getLibelleProduit().'</div>
    <div class="nom"> Prix : '.$produit->getPrix().'</div>
    <div class="nom"> Date de péremption : '.$produit->getDateDePeremption().'</div>
    <a href="../../index.php"><div class="bouton">Annuler</div></a>';
echo '</div>';
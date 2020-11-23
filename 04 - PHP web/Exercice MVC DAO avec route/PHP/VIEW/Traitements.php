<?php

$traitement = $_GET["traitement"];

if ($traitement == "ajouter") {
    $prix = intval($_POST["prix"]);
    $produit = new Produits(["libelleProduit" => $_POST["libelleProduit"], "prix" => $prix, "dateDePeremption" => $_POST["dateDePeremption"]]);
    ProduitsManager::add($produit);
    header("location:./index.php?code=liste");
} else if ($traitement == "modifier") {
    $prix = intval($_POST["prix"]);
    $id = intval($_POST["id"]);
    $produit = ProduitsManager::findById($id);
    $produit->setLibelleProduit($_POST["libelleProduit"]);
    $produit->setPrix($prix);
    $produit->setDateDePeremption($_POST["dateDePeremption"]);
    ProduitsManager::update($produit);
    header("location:./index.php?code=liste");
} else if ($traitement == "supprimer") {
    $produit = ProduitsManager::findById($_GET["id"]);
    ProduitsManager::delete($produit);
    header("location:./index.php?code=liste");
}

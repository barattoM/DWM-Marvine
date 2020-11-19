<?php
include ("./head.php");

$prix=intval($_POST["prix"]);
$id=intval($_POST["id"]);
$produit=ProduitsManager::findById($id);
$produit->setLibelleProduit($_POST["libelleProduit"]);
$produit->setPrix($prix);
$produit->setDateDePeremption($_POST["dateDePeremption"]);
ProduitsManager::update($produit);
header("location:../../index.php");
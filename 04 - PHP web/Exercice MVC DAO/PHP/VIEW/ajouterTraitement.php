<?php
include ("./head.php");

$prix=intval($_POST["prix"]);
$produit=new Produits(["libelleProduit"=>$_POST["libelleProduit"],"prix"=>$prix,"dateDePeremption"=>$_POST["dateDePeremption"]]);
ProduitsManager::add($produit);
header("location:../../index.php");
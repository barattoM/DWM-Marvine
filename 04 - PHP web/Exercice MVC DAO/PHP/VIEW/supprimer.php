<?php

include ("./head.php");

$produit=ProduitsManager::findById($_GET["id"]);
ProduitsManager::delete($produit);

header("location:../../index.php");
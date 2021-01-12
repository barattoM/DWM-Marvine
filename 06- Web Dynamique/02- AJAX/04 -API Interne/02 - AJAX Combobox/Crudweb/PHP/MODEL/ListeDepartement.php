<?php
//fichier pour appel AJAX
// include "DepartementsManager.Class.php";
// include "../Controller/Parametres.Class.php";
// include "DbConnect.class.php";
//var_dump($_POST);
// Parametres::init();
// DbConnect::init();
$idRegion=$_POST["idRegion"];
echo json_encode(DepartementsManager::getListByRegionAPI($idRegion));

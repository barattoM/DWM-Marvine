<?php
//fichier pour appel AJAX
// include "RegionsManager.Class.php";
// include "../Controller/Parametres.Class.php";
// include "DbConnect.class.php";
// Parametres::init();
// DbConnect::init();
echo json_encode(RegionsManager::getListAPI());
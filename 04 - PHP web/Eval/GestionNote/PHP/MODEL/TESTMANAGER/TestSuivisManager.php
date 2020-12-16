<?php

//Test SuivisManager

echo "recherche id = 1" . "<br>";
$obj =SuivisManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Suivis(["idMatiere" => "1", "idEleve" => "1", "note" => "25", "coefficient" => "2"]);
var_dump(SuivisManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = SuivisManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setNote(15);
SuivisManager::update($obj);
$objUpdated = SuivisManager::findById(1);
echo "Liste des objets" . "<br>";
$array = SuivisManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = SuivisManager::findById(3);
SuivisManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = SuivisManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>
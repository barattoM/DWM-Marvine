<div class="centrer">
<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?page=ActionsEleves&mode=ajout" method="POST">';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?page=ActionsEleves&mode=modif" method="POST">';
    break;
    }
}

if (isset($_GET['id']))
{
$choix = ElevesManager::findById($_GET['id']);
}
?>


    <?php if($mode != "ajout") echo  '<input name= "idEleve" value="'.$choix->getIdEleve().'"type= "hidden">';?>
    <div class="espaceHor"></div>
    <div>
        <label for="nomEleve">Nom : </label>
        <div class="espace"></div>
        <input name="nomEleve" required <?php if($mode != "ajout") echo 'value= "'.$choix->getNomEleve().'"';?>/>
    </div>
    <div class="espaceHor"></div>
    <div>
        <label for="prenomEleve">Prenom : </label>
        <div class="espace"></div>
        <input name="prenomEleve" required <?php if($mode != "ajout") echo 'value= "'.$choix->getPrenomEleve().'"';?>/>
    </div>
    <div class="espaceHor"></div>
    <div>
        <label for="classe">Classe : </label>
        <div class="espace"></div>
        <input name="classe" required <?php if($mode != "ajout") echo 'value= "'. $choix->getClasse().'"';?>/>
    </div>
    <div class="espaceHor"></div>
<?php 
// en fonction du mode, on affiche les boutons utiles
	switch ($mode) {
		case "ajout":
			{
                echo '<div><button class="boutons" type="submit" value="Ajouter">Ajouter</button>'; 
                break;
			}
		case "modif":
			{
                echo '<div><button class="boutons" type="submit" value="Modifier">Modifier</button>'; 
                break;
			}
        default:
        {
            echo '<div>';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    <div class="espace"></div>
    <button class="boutons"><a href="index.php?page=GestionEleves">Annuler</a></button>
</div>

</form>
</div>


<div class="centrer">
<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?page=ActionsMatieres&mode=ajout" method="POST">';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?page=ActionsMatieres&mode=modif" method="POST">';
    break;
    }
}

if (isset($_GET['id']))
{
$choix = MatieresManager::findById($_GET['id']);
}
?>


    <?php if($mode != "ajout") echo  '<input name= "idMatiere" value="'.$choix->getIdMatiere().'"type= "hidden">';?>
    <div class="espaceHor"></div>
    <div>
        <label for="libelleMatiere">Libellé : </label>
        <div class="espace"></div>
        <input name="libelleMatiere" required <?php if($mode != "ajout") echo 'value= "'.$choix->getLibelleMatiere().'"';?>/>
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
    <button class="boutons"><a href="index.php?page=GestionMatieres">Annuler</a></button>
</div>

</form>
</div>


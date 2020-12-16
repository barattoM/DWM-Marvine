<div class="centrer">
<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?page=ActionsNotes&mode=ajout" method="POST">';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?page=ActionsNotes&mode=modif" method="POST">';
    break;
    }
}

if (isset($_GET['id']))
{
$choix = SuivisManager::findById($_GET['id']);
}
?>


    <?php if($mode != "ajout") echo  '<input name= "idSuivi" value="'.$choix->getIdSuivi().'"type= "hidden">';?>
    <div class="espaceHor"></div>
    <!-- Si on est en ajout alors l'élève sera un menu déroulant sinon on écrit son nom dans un input texte -->
    <?php
        if($mode=="ajout"){
            $eleves=ElevesManager::getList();
            echo '<div><label for="eleve">Elève : </label>
                <div class="espace"></div>';
            echo '<select name="eleve">';
            foreach($eleves as $unEleve){
                echo '<option value="'.$unEleve->getNomEleve().'">'.$unEleve->getNomEleve().'</option>';
            }
            echo '</select></div>';
        }else{
            echo '<div>
            <label for="eleve">Elève : </label>
            <div class="espace"></div>
            <input name="eleve" required value= "'.$choix->getEleve()->getNomEleve().'"/>
            </div>';
        }
    ?>
    
    <div class="espaceHor"></div>
    <div>
        <label for="note">Note : </label>
        <div class="espace"></div>
        <input name="note" required <?php if($mode != "ajout") echo 'value= "'.$choix->getNote().'"';?>/>
    </div>
    <?php
        if($mode != "ajout"){
            echo '<input name="idMatiere" type="hidden" value= "'.$choix->getIdMatiere().'"/>';
            echo '<input name="coefficient" type="hidden" value= "'.$choix->getCoefficient().'"/>';
        }else{
            echo '<input name="idMatiere" type="hidden" value= "'.$_SESSION['utilisateur']->getMatiere()->getIdMatiere().'"/>';
            echo '<input name="coefficient" type="hidden" value= "1"/>';
        }
    ?>
        
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
    <button class="boutons"><a href="index.php?page=GestionNotes">Annuler</a></button>
</div>

</form>
</div>


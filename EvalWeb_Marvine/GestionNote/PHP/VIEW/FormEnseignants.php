<div class="centrer">
<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?page=ActionsEnseignants&mode=ajout" method="POST">';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?page=ActionsEnseignants&mode=modif" method="POST">';
    break;
    }
}

if (isset($_GET['id']))
{
$choix = UtilisateursManager::findById($_GET['id']);
}
?>


    <?php if($mode != "ajout") echo  '<input name= "idUtilisateur" value="'.$choix->getIdUtilisateur().'"type= "hidden">';?>
    <?php
        if($mode != "ajout"){
            echo '<input name="role" type= "hidden" value= "'.$choix->getRole().'"/>';
        }else{
            echo '<input name="role" type= "hidden" value= "2"/>';
        }
    ?>
    
    <div class="espaceHor"></div>
    <div>
        <label for="login">Pseudo : </label>
        <div class="espace"></div>
        <input name="login" required <?php if($mode != "ajout") echo 'value= "'.$choix->getLogin().'"';?>/>
    </div>
    <div class="espaceHor"></div>
    <div>
        <label for="nomUtilisateur">Nom : </label>
        <div class="espace"></div>
        <input name="nomUtilisateur" required <?php if($mode != "ajout") echo 'value= "'.$choix->getNomUtilisateur().'"';?>/>
    </div>
    <div class="espaceHor"></div>
    <div>
        <label for="prenomUtilisateur">Prénom : </label>
        <div class="espace"></div>
        <input name="prenomUtilisateur" required <?php if($mode != "ajout") echo 'value= "'.$choix->getPrenomUtilisateur().'"';?>/>
    </div>
    <div class="espaceHor"></div>
    <div>
        <label for="matiere">Matière : </label>
        <div class="espace"></div>
        <input name="matiere" required <?php if($mode != "ajout") echo 'value= "'. $choix->getMatiere()->getLibelleMatiere().'"';?>/>
    </div>
    <div class="espaceHor"></div>
    <div>
        <label for="motDePasse">Mot de passe : </label>
        <div class="espace"></div>
        <input name="motDePasse" required <?php if($mode != "ajout") echo 'placeholder="Saisir un mot de passe pour le modifier"';?>/>
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
    <button class="boutons"><a href="index.php?page=GestionEnseignants">Annuler</a></button>
</div>

</form>
</div>


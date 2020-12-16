<header>

    <div><img class="logo" src="./IMG/icone.jpg" alt="logo"></div>
    <div class="titre colonne centrer">
        <div class="titre centrer">Gestion des notes</div>
        <div class="soustitre centrer"><?php echo $titre ?></div>
    </div>
    <div class="centrer">
    <?php
if (empty($_SESSION['utilisateur'])) {
    echo '
        <a href="index.php?page=default">
            <div class="boutons">' .
    "Connectez-vous"
    . '</div>
        </a>';
} else {
    echo '<div class="colonne">';
    $utilisateur=$_SESSION['utilisateur'];
    if($utilisateur->getRole()==1){ //si il est proviseur
        echo '<div>Proviseur</div>';
    }else{
        echo '<div>'.$utilisateur->getNomUtilisateur()." ".$utilisateur->getPrenomUtilisateur().'</div>';
        echo '<div>'.$utilisateur->getMatiere()->getLibelleMatiere();
    }
    
    echo '<a href="index.php?page=ActionsConnexion&mode=deconnexionUtilisateur">
    ';
    echo            '<div class="boutons">' .
    "Déconnectez-vous"
        . '</div>
            </a>
            </div>';

}
?>
</div>

</header>
<div class="espaceHor blanc"></div>
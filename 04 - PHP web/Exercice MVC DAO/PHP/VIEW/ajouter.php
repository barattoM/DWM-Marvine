<?php
$titre="Gestion de produit";
$titrePage="Ajouter un produit";
include ("./head.php");
include ("./header.php");

echo '<div class="page block">
    <form action="ajouterTraitement.php" method="POST">
    <p>Libelle du Produit :</p> <input type = "text" name = "libelleProduit" />
    <p>Prix : </p><input type = "text" name = "prix" />
    <p>Date de péremption : </p><input type = "text" name = "dateDePeremption" />
    <br>
    <input class="bouton" type="submit" name="submit" value="Ajouter un produit"/>
    </form>';
    echo '<a href="../../index.php"><div class="bouton">Annuler</div></a>';
echo '</div>';



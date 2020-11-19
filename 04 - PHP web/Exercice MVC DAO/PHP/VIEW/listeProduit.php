<?php

$produits = ProduitsManager::getList();
echo '<div class="page block">
        <div class="titre"><h2>Liste des produits</h2></div>
        <div class="espaceHor"></div>
        <a href="./PHP/VIEW/ajouter.php" id="add"><div class="bouton" >Ajouter un produit</div></a>
        <div class="listeProduit block">';
            foreach($produits as $unProduit){
                echo '<div class="espaceHor"></div>';
                echo '<div class="produit">';
                echo '<div class="id">'.$unProduit->getIdProduit().'</div>';
                echo '<div class="nom">'.$unProduit->getLibelleProduit().'</div>';
                echo '<a href="./PHP/VIEW/detail.php?id='.$unProduit->getIdProduit().'"><div class="bouton">Detail</div></a>
                <a href="./PHP/VIEW/modifier.php?id='.$unProduit->getIdProduit().'"><div class="bouton">Modifier</div></a>
                <a href="./PHP/VIEW/supprimer.php?id='.$unProduit->getIdProduit().'"><div class="bouton">Supprimer</div></a>';
                echo '</div>';
            }      
        echo '</div>';
echo '</div>';


<?php


$produits = ProduitsManager::getList();
echo '<div class="page block">
        <div class="titre"><h2>Liste des produits</h2></div>
        <div class="espaceHor"></div>
        <a href="./index.php?code=feuille&feuille=ajouter" id="add"><div class="bouton" >Ajouter un produit</div></a>
        <div class="listeProduit block">';
            foreach($produits as $unProduit){
                echo '<div class="espaceHor"></div>';
                echo '<div class="produit">';
                echo '<div class="id">'.$unProduit->getIdProduit().'</div>';
                echo '<div class="nom">'.$unProduit->getLibelleProduit().'</div>';
                echo '<a href="./index.php?code=feuille&feuille=detail&id='.$unProduit->getIdProduit().'"><div class="bouton">Detail</div></a>
                <a href="./index.php?code=feuille&feuille=modifier&id='.$unProduit->getIdProduit().'"><div class="bouton">Modifier</div></a>
                <a href="./index.php?code=traitements&traitement=supprimer&id='.$unProduit->getIdProduit().'"><div class="bouton">Supprimer</div></a>';
                echo '</div>';
            }      
        echo '</div>';
echo '</div>';


<?php

class ProduitsManager
{
    public static function add(Produits $produit)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare('INSERT INTO produits(libelleProduit, prix, dateDePeremption) VALUES (:libelleProduit, :prix, :dateDePeremption)');
        $requete->bindValue(':libelleProduit', $produit->getLibelleProduit());
        $requete->bindValue(':prix', $produit->getPrix());
        $requete->bindValue(':dateDePeremption', $produit->getDateDePeremption());
        $requete->execute();
    }

    public static function update(Produits $produit)
    {
        $db = DbConnect::getDb();
        $requete = $db->prepare('UPDATE produits SET libelleProduit=:libelleProduit,prix=:prix,dateDePeremption=:dateDePeremption WHERE idProduit=:idProduit');
        $requete->bindValue(':libelleProduit', $produit->getLibelleProduit());
        $requete->bindValue(':prix', $produit->getPrix());
        $requete->bindValue(':dateDePeremption', $produit->getDateDePeremption());
        $requete->bindValue(':idProduit', $produit->getIdProduit());
        $requete->execute();
    }

    public static function delete(Produits $produit)
    {
        $db = DbConnect::getDb();
        $db->exec('DELETE FROM produits WHERE idProduit=' . $produit->getIdProduit());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $requete = $db->query('SELECT * FROM produits WHERE idProduit=' . $id);
        $result = $requete->fetch(PDO::FETCH_ASSOC);
        if ($result != false) {
            return new Produits($result);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $requete = $db->query('SELECT * FROM produits ');
        $liste = [];
        while ($result = $requete->fetch(PDO::FETCH_ASSOC)) {
            if ($result != false) {
                $liste[] = new Produits($result);
            }
        }
        return $liste;
    }
}

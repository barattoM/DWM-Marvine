<?php

class ClientsManager
{

    public static function add(Clients $client)
    {
        $db = DBConnect::getDb();
        $requete = $db->prepare('INSERT INTO clients(nom, prenom) VALUES (:nom,:prenom)');
        $requete->bindValue(':nom', $client->getNom());
        $requete->bindValue(':prenom', $client->getPrenom());
        $requete->execute();
    }

    public static function update(Clients $client)
    {
        $db = DBConnect::getDb();
        $requete = $db->prepare('UPDATE clients SET nom=:nom,prenom=:prenom WHERE idClient=:idClient');
        $requete->bindValue(':nom', $client->getNom());
        $requete->bindValue(':prenom', $client->getPrenom());
        $requete->bindValue(':idClient', $client->getIdClient());
        $requete->execute();
    }

    public static function delete(Clients $client)
    {
        $db = DBConnect::getDb();
        $db->exec('DELETE FROM clients WHERE idClient=' . $client->getIdClient());
    }

    public static function findById($id)
    {
        $db = DBConnect::getDb();
        $id = (int)$id;
        $requete = $db->query('SELECT * FROM clients WHERE idClient=' . $id);
        $result = $requete->fetch(PDO::FETCH_ASSOC);
        if ($result != false) {
            return new Clients($result);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DBConnect::getDb();
        $requete = $db->query('SELECT * FROM clients ');
        $liste = [];
        while ($result = $requete->fetch(PDO::FETCH_ASSOC)) {
            if ($result != false) {
                $liste[] = new Clients($result);
            }
        }
        return $liste;
    }
}

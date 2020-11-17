
--
-- Base de données :  baseproduits
--
DROP DATABASE IF EXISTS baseproduits;
CREATE DATABASE IF NOT EXISTS baseproduits ;
USE baseproduits;


DROP TABLE IF EXISTS produits;
CREATE TABLE IF NOT EXISTS produits (
  idProduit int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  libelleProduit varchar(50) NOT NULL,
  prix int(11) NOT NULL,
  dateDePeremption date NOT NULL
) ENGINE=InnoDB ;

DROP TABLE IF EXISTS clients;
CREATE TABLE IF NOT EXISTS clients (
  idClient int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nom varchar(50) NOT NULL,
  prenom varchar(50) NOT NULL
) ENGINE=InnoDB ;

--
-- Chargement des données de la table produits
--

INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption) VALUES(1, 'gomme', 2, '2020-11-30');
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption) VALUES(2, 'crayon', 1, '2020-11-30');
INSERT INTO clients (idClient, nom, prenom) VALUES(1, 'haze','dkoap');
INSERT INTO clients (idClient, nom, prenom) VALUES(2, 'dadz','llmez');

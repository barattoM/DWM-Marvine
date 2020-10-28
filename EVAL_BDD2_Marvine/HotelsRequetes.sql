1)	Afficher la liste des hôtels Le résultat doit faire apparaître le nom de l’hôtel et la ville

SELECT `nomHotel` AS "Nom de l'hôtel",`villeHotel` as "Vile de l'hôtel" FROM `hotels` ;

2)	Afficher la ville de résidence de Mr White Le résultat doit faire apparaître le nom, le prénom, l adresse et la ville du client

SELECT `nomClient` as "Nom du client",`prenomClient` as "Prenom du client",`adresseClient`as "Adresse du client",`villeClient` as "Ville du client" FROM `clients` WHERE `nomClient`="WHITE";

3)	Afficher la liste des stations dont l’altitude < 1000 Le résultat doit faire apparaître le nom de la station et l altitude

SELECT `nomStation` as "Nom de la station",`altitudeStation` as "Altitude de la station" FROM `stations` WHERE `altitudeStation`<1000;

4)	Afficher la liste des chambres ayant une capacité > 1 Le résultat doit faire apparaître le numéro de la chambre ainsi que la capacité

SELECT `numChambre`as "Numero de la chambre" ,`capaciteChambre` as "Capacité de la chambre"FROM `chambres` WHERE `capaciteChambre`>1;

5)	Afficher les clients n’habitant pas à Londres Le résultat doit faire apparaître le nom du client et la ville

SELECT `nomClient` as "Nom du client",`villeClient` as "Ville du client" FROM `clients` WHERE `villeClient`!="Londres";

6)	Afficher la liste des hôtels avec  leur station (Nom de la station, Nom de l’hôtel, Catégorie, Ville)

SELECT stations.nomStation as "Nom de la station",hotels.nomHotel as "Nom de l'hôtel",`categorieHotel` as "Catégorie de l'hôtel",`villeHotel` as "Ville de l'hôtel" FROM `hotels` INNER JOIN stations ON hotels.idStation=stations.idStation;

7)	 Afficher la liste des chambres et leur hôtel Le résultat doit faire apparaître le numéro de la chambre, le nom de l’hôtel, la catégorie, la ville, 

SELECT `numChambre` as "Numero de la chambre",hotels.nomHotel as "Nom de l'hôtel",hotels.categorieHotel as "Catégorie de l'hôtel",hotels.villeHotel as "Ville de l'hôtel" FROM `chambres` INNER JOIN hotels ON chambres.idHotel=hotels.idHotel; 

8)	 Afficher la liste des réservations avec le nom des clients, le résultat doit faire apparaitre la date de réservation, début et fin de séjour

SELECT clients.nomClient as "Nom du client",`dateReservationSejour` as "Date de réservation",`dateDebutSejour` as "Date du début du séjour",`dateFinSejour` as "Date de fin du séjour" FROM `reservations` INNER JOIN clients ON clients.idClient=reservations.idClient;

9)	Afficher la liste des chambres (numéro) avec le nom de l’hôtel et le nom de la station

SELECT chambres.numChambre as "Numero de la chambre",hotels.nomHotel as "Nom de l'hôtel",stations.nomStation as "Nom de la station" FROM `stations` INNER JOIN hotels ON hotels.idStation=stations.idStation INNER JOIN chambres ON chambres.idHotel=hotels.idHotel;

10)	Afficher la liste des chambres de plus d une place dans des hôtels situés sur la ville de Bretou (Numéro de chambre, nom de l’hôtel, catégorie de l’hôtel, ville de l’hôtel, capacité de la chambre)

SELECT `numChambre` as "Numero de la chambre",hotels.nomHotel as "Nom de l'hôtel" ,hotels.categorieHotel as "Catégorie de l'hôtel",hotels.villeHotel as "Ville de l'hôtel",`capaciteChambre` as "Capacité de la chambre" FROM `chambres` INNER JOIN hotels ON hotels.idHotel=chambres.idHotel WHERE hotels.villeHotel="Bretou" AND `capaciteChambre`>1 ;

11)	Compter le nombre d’hôtels par station (nom de la station, nombre d’hôtel)

SELECT nomStation AS "Nom de la station", COUNT(hotels.idHotel) AS "Nombre d'hôtel" FROM `stations` LEFT JOIN hotels ON stations.idStation=hotels.idStation GROUP BY nomStation

12)	Compter le nombre de chambres par station (nom de la station, nombre de chambres)

SELECT `nomStation` AS "Nom de la station",COUNT(chambres.IdChambre) AS "Nombre de chambres" FROM `stations` LEFT JOIN hotels ON hotels.idStation=stations.idStation LEFT JOIN chambres ON chambres.idHotel=hotels.idHotel GROUP BY `nomStation` 

13)	Compter le nombre de chambres par station ayant une capacité > 1 (nom de la station, nombre de chambres)

SELECT `nomStation` AS "Nom de la station",COUNT(chambres.IdChambre) AS "Nombre de chambres" FROM `stations` LEFT JOIN hotels ON hotels.idStation=stations.idStation LEFT JOIN chambres ON chambres.idHotel=hotels.idHotel WHERE chambres.capaciteChambre>1 GROUP BY `nomStation` 

14)	Afficher la liste des hôtels pour lesquels Mr Squire a effectué une réservation (nom de l’hôtel)

SELECT DISTINCT hotels.nomHotel AS "Nom de l'hôtel" FROM `hotels` INNER JOIN chambres ON chambres.idHotel=hotels.idHotel INNER JOIN reservations ON reservations.IdChambre=chambres.IdChambre INNER JOIN clients ON clients.idClient=reservations.idClient WHERE clients.nomClient="Squire" 

15)	Afficher la durée moyenne des réservations par station (nom de la station, durée moyenne)

SELECT nomStation AS "Nom de la station", ROUND(AVG(reservations.dateFinSejour-reservations.dateDebutSejour),2) as "Durée moyenne" FROM `stations` LEFT JOIN hotels ON stations.idStation=hotels.idStation LEFT JOIN chambres ON hotels.idHotel=chambres.idHotel LEFT JOIN reservations ON reservations.IdChambre=chambres.IdChambre GROUP BY nomStation

16)	Créer une vue qui lit les tables Station, Hôtel et Chambres appelée StationChambre

CREATE VIEW StationChambre AS
SELECT stations.`idStation`, stations.`nomStation`, stations.`altitudeStation`, hotels.`idHotel`, hotels.`nomHotel`, hotels.`categorieHotel`, hotels.`adresseHotel`, hotels.`villeHotel`, chambres.`IdChambre`, chambres.`numChambre`, chambres.`typeChambre`, chambres.`capaciteChambre`
FROM stations INNER JOIN hotels ON stations.idStation=hotels.idStation INNER JOIN chambres ON chambres.idHotel=hotels.idHotel

17)	Créer une vue qui lit les tables Station, Hôtel et Chambres en jointure gauche appelée StationChambreLeft

CREATE VIEW StationChambreLeft AS 
SELECT stations.`idStation`, stations.`nomStation`, stations.`altitudeStation`, hotels.`idHotel`, hotels.`nomHotel`, hotels.`categorieHotel`, hotels.`adresseHotel`, hotels.`villeHotel`, chambres.`IdChambre`, chambres.`numChambre`, chambres.`typeChambre`, chambres.`capaciteChambre`
FROM stations LEFT JOIN hotels ON stations.idStation=hotels.idStation LEFT JOIN chambres ON chambres.idHotel=hotels.idHotel 

18)	Ajouter un champ archivé dans la table réservation

ALTER TABLE reservations ADD archive boolean DEFAULT false

19)	Créer une procédure stockée qui modifie les enregistrements de la table réservation pour mettre archivé à oui quand la date de fin est inférieure à la date du jour appelée archivage. 

DELIMITER |
CREATE PROCEDURE archivage ()
BEGIN   
    UPDATE reservations set archive= true WHERE reservations.dateFinSejour<now();
END|
DELIMITER ;

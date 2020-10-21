executer les 2 instructions suivantes sur la base
ALTER TABLE commandes ADD cde_total int;
UPDATE commandes SET cde_total = quantiteCommande * (select prixArticle from articles where articles.idArticle = commandes.idArticle)

Affichez le contenu de la table commande. Qu y a-t-il de changé dans cette table ? Comment le total de la
commande a-t-il été calculé ? 

Ecrire des requêtes SELECT. Vous vérifierez que le résultat de la requête correspond à votre inspection des
tables correspondantes. 
A) Afficher le montant le plus élevé de commande.
SELECT max(cde_total) as "Commande la plus élevé" FROM commandes;
SELECT MAX(commandes.quantiteCommande*articles.prixArticle) as "Commande la plus élevé" FROM commandes INNER JOIN articles ON commandes.idArticle=articles.idArticle;

B) Afficher le montant moyen des commandes.
SELECT ROUND(AVG(cde_total),2) as "Moyenne des prix de commandes" FROM commandes ;
SELECT ROUND(AVG(commandes.quantiteCommande*articles.prixArticle),2) as "Moyenne des prix de commandes" FROM commandes INNER JOIN articles ON commandes.idArticle=articles.idArticle ;

C) Afficher le montant le plus bas de commande.
SELECT MIN(cde_total) as "Montant le plus bas" FROM commandes;
SELECT MIN(commandes.quantiteCommande*articles.prixArticle) as "Montant le plus bas" FROM commandes INNER JOIN articles ON commandes.idArticle=articles.idArticle;

D) Afficher le nombre de commandes qui ont été passées.
SELECT COUNT(*) FROM `commandes` ;

E) Afficher le montant moyen de commande par client
SELECT `idClient`,ROUND(AVG(`cde_total`),2) as "Montant moyen de commande" FROM `commandes` GROUP BY idClient;
SELECT `idClient`,ROUND(AVG(commandes.quantiteCommande*articles.prixArticle),2) as "Montant moyen de commande" FROM `commandes` INNER JOIN articles ON commandes.idArticle=articles.idArticle GROUP BY idClient;

F) Afficher le montant le plus élevé de commande par client.
SELECT `idClient`,MAX(`cde_total`) AS "Commande la plus élevé" FROM `commandes` GROUP BY `idClient` ;
SELECT `idClient`,MAX(commandes.quantiteCommande*articles.prixArticle) AS "Commande la plus élevé" FROM `commandes` INNER JOIN articles ON commandes.idArticle=articles.idArticle GROUP BY `idClient` ;

G) Afficher le nombre de commandes par client.
SELECT `idClient`,COUNT(*) AS "Nombres de commandes" FROM `commandes` GROUP BY `idClient`;

H) Afficher le nombre d  articles commandés en moyenne par client
SELECT `idClient`,ROUND(AVG(`quantiteCommande`),2) AS "Moyenne des articles commandé" FROM `commandes` GROUP BY `idClient`;

I) Afficher le nombre d articles commandés en moyenne par article.
SELECT `idArticle`,ROUND(AVG(`quantiteCommande`),2) AS "Nombre d'articles commandés en moyenne" FROM `commandes` GROUP BY `idArticle`; 

J) Afficher le nombre total d articles commandés par article.
SELECT `idArticle`,SUM(`quantiteCommande`) AS "Nombre total d'articles commandés" FROM `commandes` GROUP BY `idArticle`;

K) Afficher le nombre moyen d articles par client et par date.
SELECT `idClient`,`dateCommande`,ROUND(AVG(`quantiteCommande`),2) FROM commandes Group BY idClient , `dateCommande`;

L) Afficher le nombre de commandes par jour.
SELECT `dateCommande`, COUNT(*) AS "Nombre de commande" FROM `commandes` GROUP BY `dateCommande`;

M) Afficher le nombre de clients dans la table.
SELECT COUNT(*) AS "Nombre de client" FROM `clients`;

N) Afficher le nombre de clients différents qui ont passé commande.
SELECT COUNT(DISTINCT `idClient`) AS "Nombre de client qui ont passé commande" FROM `commandes`;

O) Afficher le nombre d  articles différents qui ont été commandés.
SELECT COUNT(DISTINCT `idArticle`) AS "Nombre d'article qui ont été commandé" FROM `commandes`;

P) Afficher le nombre de jours différents de commandes
SELECT COUNT(DISTINCT `dateCommande`) AS "Nombre de jour différents de commande" FROM `commandes`;
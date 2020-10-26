1. Rechercher le prénom des employés et le numéro de la région de leur département.

SELECT `prenom`,`noregion` FROM `employe` INNER JOIN dept ON employe.nodep=dept.nodept 

2.Rechercher le numéro du département, le nom du département, le nom des employés classés par numéro de département (renommer les tables utilisées)

SELECT `nodept`,dept.`nom` as "Nom du département",employe.nom FROM `dept` INNER JOIN employe ON employe.nodep=dept.nodept ORDER BY `nodept` 

3.Rechercher le nom des employés du département Distribution. 

SELECT employe.nom FROM `dept` INNER JOIN employe ON employe.nodep=dept.nodept WHERE dept.`nom`="Distribution" 

4.Rechercher le nom et le salaire des employés qui gagnent plus que leur patron, et le nom et le salaire de leur patron

SELECT `nom` AS "Nom Employé", `salaire` AS "Salaire Employé", (SELECT `nom` FROM employe WHERE `titre`="président")AS "Nom Supérieur", (SELECT `salaire` FROM employe WHERE `titre`="président")AS "Salaire supérieur" FROM `employe` WHERE `salaire` >(SELECT `salaire` FROM employe WHERE `titre`="président") 

5.Rechercher le nom et le titre des employés qui ont le même titre que Amartakaldire.

SELECT `nom`,`titre` FROM `employe` WHERE `titre`=(SELECT `titre` FROM employe WHERE nom="Amartakaldire")

6.Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus qu un seul employé du département 31, classés par numéro de département et salaire. 

SELECT `nom`,`salaire`,`nodep` FROM `employe` WHERE salaire>(SELECT Min(salaire) FROM employe WHERE `nodep`=31) ORDER BY nodep, salaire

7.Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus que tous les employés du département 31, classés par numéro de département et salaire. 

SELECT employe.`nom`,`salaire`,`nodep` FROM `employe` WHERE salaire>(SELECT MAX(salaire) FROM employe WHERE `nodep`=31) ORDER BY nodep, salaire

8.Rechercher le nom et le titre des employés du service 31qui ont un titre que l on trouve dans le département 32.

SELECT `nom`,`titre` FROM `employe` WHERE `nodep`=31 AND `titre` IN (SELECT `titre` FROM employe AS e WHERE `nodep`=32 ) 

9.Rechercher le nom et le titre des employés du service 31qui ont un titre l on ne trouve pas dans le département 32.

SELECT `nom`,`titre` FROM `employe` WHERE `nodep`=31 AND `titre` NOT IN (SELECT `titre` FROM employe AS e WHERE `nodep`=32 ) 

10.Rechercher le nom, le titre et le salaire des employés qui ont le même titre et le même salaire que Fairent.

SELECT `nom`,`titre`,`salaire` FROM `employe` WHERE titre=(SELECT `titre` FROM employe as e WHERE `nom`="Fairent") AND `salaire`=(SELECT `salaire` FROM employe as e WHERE `nom`="Fairent") 

11.Rechercher le numéro de département, le nom du département, le nom des employés, en affichant aussi les départements dans lesquels il n y a personne, classés par nuéro de département.

SELECT `nodep`,dept.`nom`,employe.`nom` FROM dept LEFT JOIN `employe` ON dept.nodept=employe.nodep ORDER BY dept.`nodept` 

12.Calculer le nombre d employés de chaque titre.

SELECT titre,COUNT(*) as "Nombre d'employés" FROM `employe` GROUP BY titre

13.Calculer la moyenne des salaires et leur somme, par région.

SELECT noregion,AVG(`salaire`) as "Moyenne des salaires",SUM(`salaire`) as "Somme des salaires"FROM `employe` INNER JOIN dept ON employe.nodep=dept.nodept GROUP BY noregion

14.Afficher les numéros des départements ayant au moins 3 employés

SELECT `nodep`,Total FROM (SELECT `nodep`,COUNT(`noemp`)as Total FROM `employe` group by `nodep`) as e WHERE Total>=3

avec Having:
SELECT nodep FROM `employe` GROUP BY `nodep` HAVING COUNT(`noemp`)>=3

15.Afficher les lettres qui sont l initiale d au moins trois employés.

Initiale:
SELECT LEFT(`nom`,1) FROM `employe` 
Somme des initiale:
SELECT init ,COUNT(*) as somme FROM (SELECT LEFT(`nom`,1) as init FROM `employe`) as i GROUP BY init
Final:
SELECT init FROM (SELECT init ,COUNT(*) as somme FROM (SELECT LEFT(`nom`,1) as init FROM `employe`) as i GROUP BY init) as e WHERE somme>=3 

Having: 
SELECT LEFT(`nom`,1) AS Initial FROM `employe`GROUP BY Initial HAVING COUNT(LEFT(`nom`,1))>2

16.Rechercher le salaire maximum et le salaire minimum parmi tous les salariés et l écart entre les deux.

SELECT MAX(`salaire`) as SalaireMax, MIN(`salaire`) as SalaireMin, MAX(`salaire`)-MIN(`salaire`) as EcartSalaire FROM `employe`

17.Rechercher le nombre de titres différents. 

SELECT COUNT(DISTINCT `titre`) as NombreTitre FROM `employe`

18.Pour chaque titre, compter le nombre d employés possédant ce titre. 

SELECT titre,COUNT(*) as "Nombre d'employés" FROM `employe` GROUP BY titre

19.Pour chaquenom dedépartement,afficher le nom du département et lenombre d employés.

SELECT noregion,dept.`nom`,COUNT(`noemp`) FROM `dept` LEFT JOIN `employe` ON dept.nodept=employe.nodep GROUP BY dept.nodept 

20.Rechercher les titres et la moyenne des salaires par titre dont la moyenne est supérieure à la moyenne des salaires des Représentants.

Moyenne des salaires par titre:
SELECT titre,AVG(`salaire`) FROM `employe` GROUP By titre

Moyenne des salaires Représentants:
SELECT AVG(`salaire`) FROM `employe` WHERE `titre`="Représentant" 

Difficile:
SELECT titre,a.i
FROM (SELECT titre, ROUND(AVG(salaire),2) as i from employe GROUP BY titre) as a
WHERE a.i>(SELECT ROUND(AVG(salaire),2) FROM employe Where titre = "représentant")

Avec Having:
SELECT `titre`,ROUND(AVG(salaire),2) FROM `employe` GROUP BY `titre` HAVING AVG(salaire)>(SELECT AVG(`salaire`) FROM `employe` WHERE `titre`="Représentant") 

21.Rechercher le nombre de salaires renseignés et le nombre de taux de commission renseignés
SELECT COUNT(`salaire`)as "Nombre de salaire renseigné",COUNT(`tauxcom`) as "Nombre de taux de commission renseigné" FROM `employe`
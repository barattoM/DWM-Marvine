CREATE USER 'util1'@'%' IDENTIFIED BY 'mdp1';
CREATE USER 'util2'@'%' IDENTIFIED BY 'mdp2';
CREATE USER 'util3'@'%' IDENTIFIED BY 'mdp3';

GRANT ALL PRIVILEGES ON exercice3.* TO 'util1'@'%' 
IDENTIFIED BY 'mdp1';

GRANT SELECT ON exercice3.* TO 'util2'@'%' 
IDENTIFIED BY 'mdp2';

GRANT SELECT ON exercice3.etudiants TO 'util3'@'%' 
IDENTIFIED BY 'mdp3';

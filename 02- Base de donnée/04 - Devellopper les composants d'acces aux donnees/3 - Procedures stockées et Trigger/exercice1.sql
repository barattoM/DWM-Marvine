DELIMITER |
CREATE PROCEDURE majuscule ()
BEGIN
    
    UPDATE etudiants set nomEtudiant= UPPER(nomEtudiant);
    UPDATE etudiants set prenomEtudiant= UPPER(prenomEtudiant);
    UPDATE enseignants set nomenseignant= UPPER(nomenseignant);
    UPDATE enseignants set prenomenseignant= UPPER(prenomenseignant);
END|
DELIMITER ;
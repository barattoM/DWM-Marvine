-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 oct. 2020 à 07:03
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `departementregion`
--
CREATE DATABASE IF NOT EXISTS `departementregion` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `departementregion`;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `idDepartement` int(11) NOT NULL AUTO_INCREMENT,
  `nomDepartement` varchar(50) NOT NULL,
  `idRegion` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDepartement`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(1, 'Ain', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(2, 'Aisne', 7);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(3, 'Allier', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(4, 'Alpes-de-Haute-Provence', 13);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(5, 'Hautes-Alpes', 13);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(6, 'Alpes-Maritimes', 13);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(7, 'Ardèche', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(8, 'Ardennes', 6);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(9, 'Ariège', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(10, 'Aube', 6);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(11, 'Aude', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(12, 'Aveyron', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(13, 'Bouches-du-Rhône', 13);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(14, 'Calvados', 9);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(15, 'Cantal', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(16, 'Charente', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(17, 'Charente-Maritime', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(18, 'Cher', 4);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(19, 'Correze', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(20, "Côte-d'Or", 2);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(21, "Côtes-d'Armor", 3);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(22, 'Creuse', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(23, 'Dordogne', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(24, 'Doubs', 2);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(25, 'Drôme', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(26, 'Eure', 9);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(27, 'Eure-et-Loir', 4);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(28, 'Finistère', 3);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(29, 'Corse-du-Sud', 5);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(30, 'Haute-Corse ', 5);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(31, 'Gard', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(32, 'Haute-Garonne', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(33, 'Gers', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(34, 'Gironde', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(35, 'Hérault', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(36, 'Ille-et-Vilaine', 3);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(37, 'Indre', 4);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(38, 'Indre-et-Loire', 4);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(39, 'Isère', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(40, 'Jura', 2);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(41, 'Landes', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(42, 'Loir-et-Cher', 4);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(43, 'Loire', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(44, 'Haute-Loire', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(45, 'Loire-Atlantique', 12);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(46, 'Loiret', 4);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(47, 'Lot', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(48, 'Lot-et-Garonne', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(49, 'Lozère', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(50, 'Maine-et-Loire', 12);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(51, 'Manche', 9);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(52, 'Marne', 6);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(53, 'Haute-Marne', 6);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(54, 'Mayenne', 12);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(55, 'Meurthe-et-Moselle', 6);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(56, 'Meuse', 6);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(57, 'Morbihan', 3);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(58, 'Moselle', 6);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(59, 'Nièvre', 2);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(60, 'Nord', 7);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(61, 'Oise', 7);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(62, 'Orne', 9);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(63, 'Pas-de-Calais', 7);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(64, 'Puy-de-Dôme', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(65, 'Pyrénées-Atlantiques', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(66, 'Hautes-Pyrénées', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(67, 'Pyrénées-Orientales', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(68, 'Bas-Rhin', 6);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(69, 'Haut-Rhin', 6);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(70, 'Rhône', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(71, 'Haute-Saône', 2);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(72, 'Saône-et-Loire', 2);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(73, 'Sarthe', 12);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(74, 'Savoie', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(75, 'Haute-Savoie', 1);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(76, 'Paris', 8);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(77, 'Seine-Maritime', 9);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(78, 'Seine-et-Marne', 8);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(79, 'Yvelines', 8);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(80, 'Deux-Sèvres', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(81, 'Somme', 7);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(82, 'Tarn', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(83, 'Tarn-et-Garonne', 11);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(84, 'Var', 13);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(85, 'Vaucluse', 13);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(86, 'Vendée', 12);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(87, 'Vienne', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(88, 'Haute-Vienne', 10);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(89, 'Vosges', 6);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(90, 'Yonne', 2);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(91, 'Territoire de Belfort', 2);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(92, 'Essonne', 8);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(93, 'Hauts-de-Seine', 8);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(94, 'Seine-Saint-Denis', 8);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(95, 'Val-de-Marne', 8);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(96, "Val-d'Oise", 8);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(97, 'Guadeloupe', 14);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(98, 'Martinique', 14);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(99, 'Guyane', 14);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(100, 'La Réunion', 14);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(101, 'Saint-Pierre-et-Miquelon', 14);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(102, 'Mayotte', NULL);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(103, 'Saint-Barthélemy', 14);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(104, 'Saint-Martin', 14);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(105, 'Terres australes et antarctiques françaises', 14);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(106, 'Wallis-et-Futuna', 14);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(107, 'Polynésie française', 14);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(108, 'Nouvelle-Calédonie', 14);
INSERT INTO `departement` (`idDepartement`, `nomDepartement`, `idRegion`) VALUES(109, 'Clipperton', 14);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `idRegion` int(11) NOT NULL AUTO_INCREMENT,
  `nomRegion` varchar(50) NOT NULL,
  `nbDepartement` int(11) NOT NULL,
  PRIMARY KEY (`idRegion`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(1, 'Auvergne-Rhône-Alpes', 12);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(2, 'Bourgogne-Franche-Comté', 8);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(3, 'Bretagne', 4);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(4, 'Centre-Val de Loire', 6);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(5, 'Corse', 2);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(6, 'Grand-Est', 10);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(7, 'Hauts-de-France', 5);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(8, 'Ile-de-France', 8);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(9, 'Normandie', 5);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(10, 'Nouvelle-Aquitaine', 12);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(11, 'Occitanie', 13);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(12, 'Pays de la Loire', 5);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(13, "Provence-Alpes-Côte d'Azur", 6);
INSERT INTO `region` (`idRegion`, `nomRegion`, `nbDepartement`) VALUES(14, 'DOM-TOM', 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE departement ADD CONSTRAINT `FK_departement_region`FOREIGN KEY (`idRegion`) REFERENCES region(idRegion);
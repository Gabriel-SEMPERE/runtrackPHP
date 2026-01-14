-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 14 jan. 2026 à 12:35
-- Version du serveur : 8.4.7
-- Version de PHP : 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jour08`
--

-- --------------------------------------------------------

--
-- Structure de la table `etage`
--

------------------------Exercice du job ------------------------------


SELECT prenom, nom, naissance
  From etudiants
  Where sexe = Femme;


----------------------------------------------------------------------


DROP TABLE IF EXISTS `etage`;
CREATE TABLE IF NOT EXISTS `etage` (
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numéro` int NOT NULL,
  `superficie` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etage`
--

INSERT INTO `etage` (`nom`, `numéro`, `superficie`) VALUES
('RDC', 0, 500),
('R+1', 1, 500);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `prenom` (`prenom`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`prenom`, `nom`, `naissance`, `sexe`, `email`) VALUES
('Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
('Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
('Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
('Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
('Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
('Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
('Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_etage` int NOT NULL,
  `capacite` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`nom`, `id_etage`, `capacite`) VALUES
('Lounge', 1, 100),
('Studio Son', 1, 5),
('Broadcasting', 2, 50),
('Bocal Peda', 2, 4),
('Coworking', 2, 80),
('Studio Video', 2, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 12 déc. 2022 à 08:37
-- Version du serveur :  5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `college`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` int(8) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sujet` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `cin`, `nom`, `email`, `sujet`, `message`) VALUES
(1, 11411064, 'ghassen', 'ghassenahmed74@gmail.com', 'efzgrgrrgfffffffffffffffffffffffffffff', 'feeeeeeeeeeezffeefefefffffffff');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `nbresalles` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `nom`, `nbresalles`) VALUES
(1, 'Technologies de l\'informatique', 20),
(2, ' Genie mecanique', 10),
(3, 'Genie des procedes', 15),
(4, 'Genie electrique', 10),
(5, 'Administration des affaires', 12);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` int(8) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `matiere1` varchar(50) NOT NULL,
  `matiere2` varchar(50) NOT NULL,
  `tel` int(8) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `poste` tinyint(1) NOT NULL DEFAULT '0',
  `id_dep` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `cin`, `nom`, `prenom`, `matiere1`, `matiere2`, `tel`, `adresse`, `poste`, `id_dep`) VALUES
(17, 12530032, 'zemzem', 'bilel', 'programmation', 'web', 22314778, 'bizerte', 0, 0),
(3, 12530032, 'zemzem', 'bilel', 'programmation', 'web', 22314778, 'bizerte', 1, 1),
(4, 11449364, 'jemmali', 'imen', 'reseau', 'atelier reseau', 27265365, 'tunis', 0, 1),
(5, 11411064, 'ouali', 'mohamed', 'design', 'vue js', 58253557, 'bizerte', 0, 2),
(6, 14253655, 'akriche', 'mohamed', 'web', 'programmation', 27265365, 'tunis', 0, 2),
(7, 11411064, 'mahdi', 'habib', 'design', 'sys', 58253557, 'bizerte', 0, 4),
(20, 12530032, 'zemzem', 'bilel', 'programmation', 'web', 22314778, 'bizerte', 0, 3),
(9, 11442233, 'samir', 'zemzem', 'recherche operationnel', 'statistique', 58253557, 'mzjmil', 0, 5),
(10, 11236548, 'bejaoui', 'zemzem', 'recherche operationnel', 'statistique', 58253557, 'mzjmil', 0, 4),
(11, 11442233, 'bejaoui', 'zemzem', 'recherche operationnel', 'statistique', 58253557, 'mzjmil', 0, 1),
(12, 11442233, 'bejaoui', 'zemzem', 'recherche operationnel', 'statistique', 58253557, 'mzjmil', 0, 3),
(14, 11442234, 'bejaoui', 'zemzem', 'recherche operationnel', 'statistique', 58253557, 'mzjmil', 0, 5),
(18, 12530032, 'zemzem', 'bilel', 'programmation', 'web', 22314778, 'bizerte', 0, 2),
(19, 12530032, 'zemzem', 'bilel', 'programmation', 'web', 22314778, 'bizerte', 0, 5),
(21, 12530032, 'zemzem', 'bilel', 'programmation', 'web', 22314778, 'bizerte', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` int(8) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `classe` varchar(30) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `tel` int(8) NOT NULL,
  `id_dep` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `cin`, `prenom`, `nom`, `classe`, `adresse`, `tel`, `id_dep`) VALUES
(6, 11440288, 'mohamed kamel', 'ben hiba', 'ge', 'corniche bizerte', 22314778, 2),
(7, 14359658, 'ghada', 'ben mabrouk', 'ti', 'manouba tunis', 55201346, 1),
(8, 11440056, 'nourredine', 'ben taher ', 'ti', 'alia bizerte', 24561550, 1),
(9, 14530032, 'nada', 'aouidet', 'ti', 'jedouba', 21004563, 1),
(10, 14352287, 'hiba', 'aouni', 'ti', 'beja', 23005632, 1),
(11, 13500422, 'wassim', 'blaili', 'aa', 'nabeul', 27265365, 5),
(27, 11411064, 'ghassen', 'ahmed', 'ti', 'cite nakhla bizerte', 58253557, 1),
(12, 12352654, 'chadi', 'ben amor', 'aa', 'mateur', 24147258, 5),
(13, 11442362, 'saloua', 'ben mohamed', 'aa', 'ariana', 27856324, 5),
(14, 11673871, 'mohamed amine', 'hkimi', 'aa', 'tunis tunis', 42463928, 5),
(15, 11652432, 'wael', 'ben abid', 'aa', 'ghar melh', 23654789, 5),
(16, 11354786, 'youssef', 'suissi', 'ti', 'tunis tuins', 21469875, 1),
(17, 1144758, 'feres', 'adouani', 'gm', 'tatouine', 28965325, 2),
(18, 12364587, 'hani', 'amri', 'gm', 'gabes', 42658935, 2),
(19, 11446323, 'naim', 'atia', 'gm', 'gabes', 56987312, 2),
(20, 11445532, 'rayen', 'ayed', 'gm', 'seliana', 53214896, 2),
(21, 11448523, 'eya', 'ben fraj', 'gm', 'zarzouna', 59632147, 2),
(22, 11442538, 'rim', 'ben hamouda', 'gp', 'manzel jmil', 20357951, 3),
(23, 13654129, 'karima', 'ben hamouda', 'gp', 'manzel abd rahmen', 57426952, 3),
(24, 13654132, 'hamza', 'ben younes', 'gp', 'bizerte', 22336658, 3),
(25, 11440032, 'chayma', 'chmissi', 'gp', 'bizerte', 33665489, 0),
(26, 12373256, 'malek', 'hizaoui', 'gp', 'tunis', 56329864, 0),
(28, 13654132, 'hamza', 'ben younes', 'gp', 'bizerte', 22336658, 0);

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

DROP TABLE IF EXISTS `inscrit`;
CREATE TABLE IF NOT EXISTS `inscrit` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `utilisateur` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numero` int(8) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_confirm` varchar(255) NOT NULL,
  `clef` varchar(200) NOT NULL,
  `courriel` varchar(200) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `autorisation` int(11) NOT NULL DEFAULT '0',
  `photo` varchar(255) NOT NULL DEFAULT 'default.png',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscrit`
--

INSERT INTO `inscrit` (`id`, `utilisateur`, `email`, `numero`, `password`, `password_confirm`, `clef`, `courriel`, `prenom`, `nom`, `ville`, `pays`, `autorisation`, `photo`) VALUES
(72, 'admin', 'ghassenahmed74@gmail.com', 58253557, '$2y$10$xV0Y6NAY.aDOCsgYVPp79.p5AcrYDULHvEuy6mDyXJ5lqbMNfMDne', '$2y$10$xV0Y6NAY.aDOCsgYVPp79.p5AcrYDULHvEuy6mDyXJ5lqbMNfMDne', 'dsi22', 'ghassen@bizerte-iset', 'ghassen', 'ahmed', 'bizerte', 'tunis', 1, 'ghassen.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

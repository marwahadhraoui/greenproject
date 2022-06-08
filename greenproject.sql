-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 juin 2022 à 18:24
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `greenproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `bin`
--

DROP TABLE IF EXISTS `bin`;
CREATE TABLE IF NOT EXISTS `bin` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `storage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `req-title` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `volume` int(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `isValid` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `request`
--

INSERT INTO `request` (`id`, `req-title`, `note`, `volume`, `categorie`, `location`, `isValid`) VALUES
(1, 'depot de dechets', 'je veux deposer les dechets', 50, 'dechets menagers', 'nabeul', 0),
(2, 'depot de dechets', 'je veux deposer mes dechets chez vous', 70, 'papiers', 'tunis', 0),
(3, 'depots dechets', 'je veux deposer les dechets', 80, 'piles', 'kef', 1);

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `waste_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `immat` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`immat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`immat`, `username`, `password`, `email`, `number`, `role`) VALUES
(1, 'Marwa Hadhraoui', '123', 'hadhraouimarwa21@gmail.com', 29386718, 'USER'),
(2, 'Marwaaaaa', '123456', 'hadhraouimarwa21@gmail.com', 29386718, 'CHAUFFEUR'),
(5, 'ala', '123', 'ala@gmail.com', 12345678, 'GARDIEN');

-- --------------------------------------------------------

--
-- Structure de la table `waste`
--

DROP TABLE IF EXISTS `waste`;
CREATE TABLE IF NOT EXISTS `waste` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `volume` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `poids` int(11) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

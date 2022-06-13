-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 13 Juin 2022 à 18:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `greenproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `bin`
--

CREATE TABLE IF NOT EXISTS `bin` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `storage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `bin`
--

INSERT INTO `bin` (`id`, `location`, `storage`) VALUES
(0, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `prise_en_charge`
--

CREATE TABLE IF NOT EXISTS `prise_en_charge` (
  `id_res_priseEnCharge` int(11) NOT NULL AUTO_INCREMENT,
  `nom_res_priseEnCharge` varchar(20) NOT NULL,
  `fonction_res_priseEnCharge` varchar(20) NOT NULL,
  PRIMARY KEY (`id_res_priseEnCharge`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `prise_en_charge`
--

INSERT INTO `prise_en_charge` (`id_res_priseEnCharge`, `nom_res_priseEnCharge`, `fonction_res_priseEnCharge`) VALUES
(1, 'SomeOne 1', 'Conducteur'),
(2, 'SomeOne 2', 'Gardien'),
(3, 'SomeOne 3', 'Conducteur'),
(4, 'SomeOne 4', 'Gardien'),
(5, 'SomeOne 5', 'Conducteur'),
(6, 'SomeOne 6', 'Gardien');

-- --------------------------------------------------------

--
-- Structure de la table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `req-title` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `volume` int(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `isValid` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `request`
--

INSERT INTO `request` (`id`, `req-title`, `note`, `volume`, `categorie`, `location`, `isValid`) VALUES
(1, 'depot dechets', 'je veux deposer les dechets', 50, 'dechets menagers', 'nabeul', 0),
(2, 'depot dechets', 'je veux deposer mes dechets chez vous', 70, 'papiers', 'tunis', 1),
(3, 'depot dechets', 'je veux deposer les dechets', 80, 'piles', 'kef', 1),
(4, 'Compaction dechets ', 'On veut réaliser une compaction des déchets ', 250, 'Plastic', 'Sousse', 1),
(5, 'Enlevement des dechets', 'On cherche a enlever les dechets', 580, 'Metal', 'Benzart', 1),
(6, 'depot dechets', 'depot d''un colume de papiers', 145, 'paper', 'Tunis', 0);

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `waste_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `driver_id`, `waste_id`) VALUES
(1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `immat` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`immat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`immat`, `username`, `password`, `email`, `number`, `role`) VALUES
(1, 'user', '123', 'user@gmail.com', 29386718, 'USER'),
(2, 'chauffeur', '123', 'chauffeur@gmail.com', 29386718, 'CHAUFFEUR'),
(5, 'gardien', '123', 'gardien@gmail.com', 12345678, 'GARDIEN');

-- --------------------------------------------------------

--
-- Structure de la table `waste`
--

CREATE TABLE IF NOT EXISTS `waste` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `volume` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `poids` int(11) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `waste`
--

INSERT INTO `waste` (`id`, `title`, `volume`, `categorie`, `poids`, `location`) VALUES
(1, 'Garage waste', 200, 'Normal', 20, 'Nabeul');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

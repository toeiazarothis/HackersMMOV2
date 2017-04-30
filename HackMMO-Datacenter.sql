
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 30 Avril 2017 à 19:49
-- Version du serveur: 10.0.28-MariaDB
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `u852249137_patri`
--

-- --------------------------------------------------------

--
-- Structure de la table `HackMMO-Datacenter`
--

CREATE TABLE IF NOT EXISTS `HackMMO-Datacenter` (
  `IP` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Guilde` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Leader` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Co-Leader` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Information` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `HackMMO-Datacenter`
--

INSERT INTO `HackMMO-Datacenter` (`IP`, `Guilde`, `Leader`, `Co-Leader`, `Information`) VALUES
('105.95.241.31', 'ICP', 'Inconnu', 'Inconnu', 'Guilde avec 0 membres sur le OwnsersData');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

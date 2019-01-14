-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 16 nov. 2018 à 22:34
-- Version du serveur :  5.7.23
-- Version de PHP :  5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `messagerie`
--
CREATE DATABASE IF NOT EXISTS `messagerie` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `messagerie`;

-- --------------------------------------------------------

--
-- Structure de la table `mail`
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expediteur` varchar(30) NOT NULL,
  `destinataire` varchar(30) NOT NULL,
  `objet` varchar(30) NOT NULL,
  `texte` longtext NOT NULL,
  `lu` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `objet` (`objet`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mail`
--

INSERT INTO `mail` (`id`, `expediteur`, `destinataire`, `objet`, `texte`, `lu`) VALUES
(23, 'mari.lena@gmail.com', 'durand.marcel@mail.com', 'test', 'de mari à durand marcel', 1),
(18, 'sz5962@mail.com', 'sz5962@gmail.com', 'Test', 'tesdf', 0),
(19, 'mari.lena@gmail.com', 'tristan.oscar@mail.com', 'test', 'Message de marilena à \r\ntristan.oscar@mail.com', 1),
(22, 'mari.lena@gmail.com', 'sz5962@gmail.com', 'test', 'test', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `nom`, `prenom`, `mail`, `telephone`) VALUES
(5, 5, '$2y$10$DMNvUcT9StGTjJUdUycth.YZMwzrDogI6pqRL7YEcVtBTN0w/Wy/2', 'Ferrand', 'Marcel', 'ferrand.marcel@mail.com', '0230251523'),
(6, 6, '$2y$10$LvQPK/d5zfSYGOsbCCsBO.QaeUrYjdQIBr19FHosMtENdG6xWyJqm', 'Tine', 'Oscar', 'titine.oscar@mail.com', '0320142536'),
(7, 7, '$2y$10$oExC0WytOin/K0xNRyYmNuRxxpqoQoum5VOzEXaf6dRHy0PiNKcNq', 'szer', 'ser', 'sz5962@mail.com', '0230251523'),
(8, 8, '$2y$10$JCGoZ5gdqLUKki7j/.lR.e/wXSMTkns79bHuBEj93M5eX5PZq.JDa', 'Tristan', 'Oscar', 'tristan.oscar@mail.com', '0230251523'),
(9, 9, '$2y$10$hAE3hDBG64KySS.WwkqPo.b8YHDLa1nHayGj7Ss1Lvq5bkbM5qUn.', 'Durand', 'Marcel', 'durand.marcel@mail.com', '03201548'),
(10, 10, '$2y$10$0NzpcMfqKBSBtKi78mjcVuNitMpOpPlaBs6.bf37d4H8iaxDl8beW', 'Mari', 'Lena', 'mari.lena@gmail.com', '0685947841'),
(11, 11, '$2y$10$RzU6PKuuoEAR0Dtp3aNcKOjnqFzi0f1x8SChzoSJsbI9j7/mmyaEC', 'ZERHOUNI', 'Souad', 'sz5962@coco.com', '0673763501');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

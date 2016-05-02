-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 02 Mai 2016 à 00:12
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tp`
--

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(32) NOT NULL,
  `sexe` varchar(32) NOT NULL,
  `date_naissance` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sexe` (`sexe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`id`, `prenom`, `sexe`, `date_naissance`) VALUES
(7, 'Natsuki', 'feminin', '1992-06-15'),
(8, 'Samir', 'masculin', '1992-04-18'),
(9, 'Tania', 'feminin', '1992-05-11'),
(14, 'Mona', 'feminin', '1961-07-02'),
(15, 'Philippe', 'masculin', '1992-03-06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 24 Janvier 2015 à 05:51
-- Version du serveur: 5.5.40
-- Version de PHP: 5.4.34-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `obackathon`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(45) NOT NULL,
  `manque` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `manque`) VALUES
(1, 'hugo', 'voiture');

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE IF NOT EXISTS `offre` (
  `idOffre` int(11) NOT NULL AUTO_INCREMENT,
  `idVendeur` int(11) NOT NULL,
  `descriptif` varchar(256) NOT NULL,
  PRIMARY KEY (`idOffre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `offre`
--

INSERT INTO `offre` (`idOffre`, `idVendeur`, `descriptif`) VALUES
(1, 1, 'dvd'),
(2, 1, 'voiture'),
(3, 1, 'offre 3'),
(4, 2, 'offre 4');

-- --------------------------------------------------------

--
-- Structure de la table `supportenvironement`
--

CREATE TABLE IF NOT EXISTS `supportenvironement` (
  `idSupport` int(11) NOT NULL AUTO_INCREMENT,
  `idOffre` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSupport`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

CREATE TABLE IF NOT EXISTS `vendeur` (
  `idVendeur` int(11) NOT NULL AUTO_INCREMENT,
  `nomVendeur` varchar(256) NOT NULL,
  PRIMARY KEY (`idVendeur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `vendeur`
--

INSERT INTO `vendeur` (`idVendeur`, `nomVendeur`) VALUES
(1, 'raph'),
(2, 'roumaissa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

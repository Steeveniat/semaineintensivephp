-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 12 Décembre 2016 à 16:32
-- Version du serveur :  5.6.33
-- Version de PHP :  7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `DATA_EVENT`
--

-- --------------------------------------------------------

--
-- Structure de la table `CONCERT`
--

CREATE TABLE `CONCERT` (
  `id_event` varchar(4) DEFAULT NULL,
  `groupe` varchar(20) DEFAULT NULL,
  `date_event` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `prix` int(3) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SPECTACLE`
--

CREATE TABLE `SPECTACLE` (
  `id_event` varchar(4) DEFAULT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `date_event` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `prix` int(3) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SPORT`
--

CREATE TABLE `SPORT` (
  `id_event` varchar(4) DEFAULT NULL,
  `sport` varchar(20) DEFAULT NULL,
  `equipes` varchar(50) DEFAULT NULL,
  `date_event` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  `prix` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `INFORAMTION`
--

-- TABLE A VOIR


-- CREATE TABLE `INFORMATION` (
--   `id_event` varchar(4) DEFAULT NULL,
--   `presentaion` text DEFAULT NULL,
-- )

-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 12 Février 2024 à 13:58
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kleestore`
--

-- --------------------------------------------------------

--
-- Structure de la table `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `topology` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `shop_link` varchar(50) NOT NULL,
  `shop_image_link` varchar(50) NOT NULL,
  `shop_call_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `shops`
--

INSERT INTO `shops` (`id`, `category`, `topology`, `name`, `adress`, `shop_link`, `shop_image_link`, `shop_call_link`) VALUES
(1, 'Franchise', 'PETIT', 'Magasin', 'Bordeaux', '', '../img/plan.png', ''),
(2, 'Franchise', 'MOYEN', 'Magasin', 'Samer', '', '../img/plan.png', ''),
(3, 'ConceptStore', 'MOYEN', 'Magasin', 'Kamurocho', '', '../img/plan.png', ''),
(4, 'Franchise', 'PETIT', 'Magasin', 'Toulouse', '', '../img/plan.png', ''),
(5, 'ConceptStore', 'GRAND', 'Magasin', 'La Force', '', '../img/plan.png', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `access_type` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image_link` varchar(50) NOT NULL,
  `shop_call_link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `access_type`, `email`, `password`, `image_link`, `shop_call_link`) VALUES
(1, 'siege', 'enzobertrand@gaming.tech', 'enzobertrand', '', ''),
(2, 'siege', 'ederveaux@gaming.tech', 'enzoderveaux', '', ''),
(3, 'siege', 'frichard@gaming.tech', 'flavienrichard', '', ''),
(4, 'siege', 'lfiard@gaming.tech', 'lorisfiard', '', ''),
(5, 'siege', 'mchamps@gaming.tech', 'manaariichamps', '', ''),
(6, 'siege', 'siege', 'siege', '', ''),
(7, 'magasin', 'magasin', 'magasin', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

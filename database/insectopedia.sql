-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 29 juin 2024 à 00:01
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `insectopedia`
--
CREATE DATABASE IF NOT EXISTS `insectopedia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `insectopedia`;

-- --------------------------------------------------------

--
-- Structure de la table `insecte`
--

CREATE TABLE `insecte` (
  `id` int(11) NOT NULL,
  `nom_vernaculaire` varchar(255) NOT NULL,
  `espece` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `regne` varchar(255) DEFAULT NULL,
  `embranchement` varchar(255) DEFAULT NULL,
  `sous_embranchement` varchar(255) DEFAULT NULL,
  `classe` varchar(255) DEFAULT NULL,
  `ordre` varchar(255) DEFAULT NULL,
  `sous_ordre` varchar(255) DEFAULT NULL,
  `famille` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `insecte`
--

INSERT INTO `insecte` (`id`, `nom_vernaculaire`, `espece`, `description`, `regne`, `embranchement`, `sous_embranchement`, `classe`, `ordre`, `sous_ordre`, `famille`, `genre`, `image`) VALUES
(2, 'Araignée sauteuse', 'Salticidae', 'Araignée trop mignonne', NULL, '', '', '', '', '', '', '', '667f1deeebb2110-32-46Screenshot_1.png'),
(3, 'Chat', 'Felix Catus', 'Poti chat trop pipou', NULL, '', '', '', '', '', '', '', '667f1f5a2bfe710-38-50Screenshot_2.png');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurice`
--

CREATE TABLE `utilisateurice` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurice`
--

INSERT INTO `utilisateurice` (`id`, `pseudo`, `mail`, `password`, `image`) VALUES
(1, 'Belynn', 'belynn@insectopedia.com', '$2y$12$njqULl7J73dRnOxB2pNzvuWI1koGUaF2p/MUQrx.xujSKuPig7Kmm', 'Array');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `insecte`
--
ALTER TABLE `insecte`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurice`
--
ALTER TABLE `utilisateurice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `insecte`
--
ALTER TABLE `insecte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateurice`
--
ALTER TABLE `utilisateurice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

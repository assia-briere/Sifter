-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 15 fév. 2023 à 20:55
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `recrutme`
--

-- --------------------------------------------------------

--
-- Structure de la table `bac`
--

CREATE TABLE `bac` (
  `IdL` int(11) NOT NULL,
  `domaine` text NOT NULL,
  `Lycce` text DEFAULT NULL,
  `dateDebut` date NOT NULL,
  `datFin` date NOT NULL,
  `Idc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `candidat-info`
--

CREATE TABLE `candidat-info` (
  `gmail` varchar(255) NOT NULL,
  `CIN` varchar(25) NOT NULL,
  `Mode-Pass` text NOT NULL,
  `first-name` text NOT NULL,
  `Last-name` text NOT NULL,
  `telephone` int(10) NOT NULL,
  `Ville` varchar(25) NOT NULL,
  `image` longblob DEFAULT NULL,
  `domaine` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cv_table`
--

CREATE TABLE `cv_table` (
  `id` int(11) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `pdf_file` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `docturat`
--

CREATE TABLE `docturat` (
  `IdD` int(11) NOT NULL,
  `domaine` text NOT NULL,
  `Faculte` text DEFAULT NULL,
  `dateDebut` date NOT NULL,
  `datFin` date NOT NULL,
  `Idc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `expert`
--

CREATE TABLE `expert` (
  `idE` int(11) NOT NULL,
  `domaine` varchar(250) NOT NULL,
  `societe` varchar(250) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `descrption` text NOT NULL,
  `Idc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `licence`
--

CREATE TABLE `licence` (
  `IdL` int(11) NOT NULL,
  `domaine` text NOT NULL,
  `Faculte` text DEFAULT NULL,
  `dateDebut` date NOT NULL,
  `datFin` date NOT NULL,
  `Idc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `master`
--

CREATE TABLE `master` (
  `IdM` int(11) NOT NULL,
  `domaine` text NOT NULL,
  `Faculte` text DEFAULT NULL,
  `dateDebut` date NOT NULL,
  `datFin` date NOT NULL,
  `Idc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recruteur-info`
--

CREATE TABLE `recruteur-info` (
  `gmail` char(250) NOT NULL,
  `CIN` varchar(25) NOT NULL,
  `Mode-Pass` char(250) NOT NULL,
  `first-name` text NOT NULL,
  `Last-name` text NOT NULL,
  `telephone` int(10) NOT NULL,
  `siociete` varchar(250) NOT NULL,
  `Ville` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `idS` int(11) NOT NULL,
  `domaine` varchar(250) NOT NULL,
  `societe` varchar(250) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `descrption` text NOT NULL,
  `Idc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bac`
--
ALTER TABLE `bac`
  ADD PRIMARY KEY (`IdL`),
  ADD KEY `Idc` (`Idc`);

--
-- Index pour la table `candidat-info`
--
ALTER TABLE `candidat-info`
  ADD PRIMARY KEY (`gmail`),
  ADD UNIQUE KEY `CIN` (`CIN`);

--
-- Index pour la table `cv_table`
--
ALTER TABLE `cv_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gmail` (`gmail`) USING BTREE;

--
-- Index pour la table `docturat`
--
ALTER TABLE `docturat`
  ADD PRIMARY KEY (`IdD`),
  ADD KEY `Idc` (`Idc`);

--
-- Index pour la table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`idE`),
  ADD KEY `Idc` (`Idc`);

--
-- Index pour la table `licence`
--
ALTER TABLE `licence`
  ADD PRIMARY KEY (`IdL`),
  ADD KEY `Idc` (`Idc`);

--
-- Index pour la table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`IdM`),
  ADD KEY `Idc` (`Idc`);

--
-- Index pour la table `recruteur-info`
--
ALTER TABLE `recruteur-info`
  ADD PRIMARY KEY (`gmail`),
  ADD UNIQUE KEY `CIN` (`CIN`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`idS`),
  ADD KEY `Idc` (`Idc`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bac`
--
ALTER TABLE `bac`
  MODIFY `IdL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cv_table`
--
ALTER TABLE `cv_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `docturat`
--
ALTER TABLE `docturat`
  MODIFY `IdD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `expert`
--
ALTER TABLE `expert`
  MODIFY `idE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `licence`
--
ALTER TABLE `licence`
  MODIFY `IdL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `master`
--
ALTER TABLE `master`
  MODIFY `IdM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `stage`
--
ALTER TABLE `stage`
  MODIFY `idS` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bac`
--
ALTER TABLE `bac`
  ADD CONSTRAINT `bac_ibfk_1` FOREIGN KEY (`Idc`) REFERENCES `candidat-info` (`CIN`);

--
-- Contraintes pour la table `cv_table`
--
ALTER TABLE `cv_table`
  ADD CONSTRAINT `cv_table_ibfk_1` FOREIGN KEY (`gmail`) REFERENCES `candidat-info` (`gmail`);

--
-- Contraintes pour la table `docturat`
--
ALTER TABLE `docturat`
  ADD CONSTRAINT `docturat_ibfk_1` FOREIGN KEY (`Idc`) REFERENCES `candidat-info` (`CIN`);

--
-- Contraintes pour la table `expert`
--
ALTER TABLE `expert`
  ADD CONSTRAINT `expert_ibfk_1` FOREIGN KEY (`Idc`) REFERENCES `candidat-info` (`CIN`);

--
-- Contraintes pour la table `licence`
--
ALTER TABLE `licence`
  ADD CONSTRAINT `licence_ibfk_1` FOREIGN KEY (`Idc`) REFERENCES `candidat-info` (`CIN`);

--
-- Contraintes pour la table `master`
--
ALTER TABLE `master`
  ADD CONSTRAINT `master_ibfk_1` FOREIGN KEY (`Idc`) REFERENCES `candidat-info` (`CIN`);

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `stage_ibfk_1` FOREIGN KEY (`Idc`) REFERENCES `candidat-info` (`CIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 15 sep. 2020 à 16:29
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_navata`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `rôles` varchar(250) NOT NULL,
  `noms` varchar(255) NOT NULL,
  `prénoms` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codepostal` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `nation` varchar(255) DEFAULT NULL,
  `naissance` date DEFAULT NULL,
  `idcard` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --
-- -- Déchargement des données de la table `users`
-- --

-- INSERT INTO `users` (`id_users`, `rôles`, `noms`, `prénoms`, `email`, `ville`, `adresse`, `codepostal`, `mdp`, `img`, `tel`, `nation`, `naissance`, `idcard`) VALUES
-- (1, '', 'Pasdeloup', 'Nathan', 'gamee8678@gmail.com', 'Marseille', 'Vélodrome', '5', '1234', '', '0', '', '0000-00-00', '0'),
-- (2, '', 'tarik daouine', 'tarol', 'fagzregrfh@g.fr', 'Paris', 'france', '10', '12345', '', NULL, NULL, NULL, NULL);

-- --
-- -- Index pour les tables déchargées
-- --

-- --
-- -- Index pour la table `users`
-- --
-- ALTER TABLE `users`
--   ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;



--
-- Indexes for table `candidatures`



CREATE TABLE `entreprise`(
	`id_entreprise` INT NOT NULL AUTO_INCREMENT,
	`nom_societe` varchar(255) NOT NULL ,
	`email_societe` varchar(255) NOT NULL ,
	`ville_societe` varchar(255) NOT NULL ,
	`adresse_societe` varchar(255) NOT NULL ,
	`codepostal_societe` INT NOT NULL ,
	`siret_societe` varchar(255) NOT NULL,
	`mdp_societe` varchar(255) NOT NULL,
	`img_societe` varchar(255) NOT NULL,
	PRIMARY KEY (`id_entreprise`)
);


CREATE TABLE `Candidatures` (
	`id_candidature` INT NOT NULL AUTO_INCREMENT,
	`date_naissance` DATE NOT NULL,
	`nationnalite` varchar(255) NOT NULL,
	`numero_identiter` INT NOT NULL,
	`diplome` varchar(255) NOT NULL,
	`diplome2` varchar(255) NOT NULL,
	`diplome3` varchar(255) NOT NULL,
	PRIMARY KEY (`id_candidature`)
);

CREATE TABLE `Concours` (
	`id_concours` INT NOT NULL AUTO_INCREMENT,
	`noms_concours` varchar(255) NOT NULL,
	`nom_entreprise` varchar(255) NOT NULL,
	`locaConcours` varchar(255) NOT NULL,
	`categorieConcours` varchar(255) NOT NULL,
	`date_concours` date NOT NULL,
	`placeConcoursPrise` INT NOT NULL,
	`placeConcoursMax` INT NOT NULL,
	`placeConcoursRestante` INT NOT NULL,
	`link_entreprise` varchar(255) NOT NULL,
	PRIMARY KEY (`id_concours`)
);
--
ALTER TABLE `candidatures`
  ADD PRIMARY KEY (`id_candidature`);

--
-- Indexes for table `concours`
--
ALTER TABLE `concours`
  ADD PRIMARY KEY (`id_concours`);
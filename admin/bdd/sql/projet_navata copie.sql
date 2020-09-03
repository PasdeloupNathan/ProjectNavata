-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 03:43 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_navata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `noms_admin` varchar(255) NOT NULL,
  `prénoms_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `mdp_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `candidatures`
--

CREATE TABLE `candidatures` (
  `id_candidature` int(11) NOT NULL,
  `date_naissance` date NOT NULL,
  `nationnalite` varchar(255) NOT NULL,
  `numero_identiter` int(11) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `diplome2` varchar(255) NOT NULL,
  `diplome3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `concours`
--

CREATE TABLE `concours` (
  `id_concours` int(11) NOT NULL,
  `noms_concours` varchar(255) NOT NULL,
  `nom_entreprise` varchar(255) NOT NULL,
  `locaConcours` varchar(255) NOT NULL,
  `categorieConcours` varchar(255) NOT NULL,
  `date_concours` date NOT NULL,
  `placeConcoursPrise` int(11) NOT NULL,
  `placeConcoursMax` int(11) NOT NULL,
  `placeConcoursRestante` int(11) NOT NULL,
  `link_entreprise` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entreprise`
--

CREATE TABLE `entreprise` (
  `id_entreprise` int(11) NOT NULL,
  `nom_societe` varchar(255) NOT NULL,
  `email_societe` varchar(255) NOT NULL,
  `ville_societe` varchar(255) NOT NULL,
  `adresse_societe` varchar(255) NOT NULL,
  `codepostal_societe` int(11) NOT NULL,
  `siret_societe` varchar(255) NOT NULL,
  `mdp_societe` varchar(255) NOT NULL,
  `img_societe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `candidat` varchar(255) NOT NULL,
  `entreprise` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `noms` varchar(255) NOT NULL,
  `prénoms` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codepostal` int(11) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `nation` varchar(255) NOT NULL,
  `naissance` date NOT NULL,
  `idcard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `noms`, `prénoms`, `email`, `ville`, `adresse`, `codepostal`, `mdp`, `img`, `tel`, `nation`, `naissance`, `idcard`) VALUES
(1, 'Pasdeloup', 'Nathan', 'gamee8678@gmail.com', 'Marseille', 'Vélodrome', 5, '1234', '', 0, '', '0000-00-00', 0),
(2, 'zzz', 'aaa', 'gamee8678@gmail.com', 'vvv', 'ggg', 5, '1234', '', 0, '', '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `candidatures`
--
ALTER TABLE `candidatures`
  ADD PRIMARY KEY (`id_candidature`);

--
-- Indexes for table `concours`
--
ALTER TABLE `concours`
  ADD PRIMARY KEY (`id_concours`);

--
-- Indexes for table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id_entreprise`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidatures`
--
ALTER TABLE `candidatures`
  MODIFY `id_candidature` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `concours`
--
ALTER TABLE `concours`
  MODIFY `id_concours` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id_entreprise` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

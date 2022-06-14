-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 juin 2022 à 07:23
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `facebook`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `daten` date NOT NULL,
  `sexe` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `prenom`, `nom`, `email`, `password`, `daten`, `sexe`) VALUES
(23, 'ronaldo', 'crisot', 'ronaldo@live.fr', '$2y$10$kFeQl6q1VTJF6.a3uj2EVOl3rPoeFZAvPkYtx2ATMTdARXh4QBYQW', '1988-12-02', 'femme'),
(24, 'abir', 'abir', 'abir@live.fr', '$2y$10$KF3LqHPfZiEiQ.8NfyJcQ.2R85T/rFJEUkG3CLnELoyJ8g09btnTO', '2000-02-01', 'femme'),
(25, 'zlzlzmmz', 'zkzkkz', 'djjdkdk@live.fr', '$2y$10$uCUd.GBEiKVNS103Ic3VBeT1ewL.lzhgVMDWytLQlXUQxnMBa..Ji', '1991-08-01', 'homme'),
(26, 'jkkldlld', 'dldlld', 'mehdilajili@gmail.com', '$2y$10$u4/EYES81m2RRXJuy.xZqu.STFxGiZMCwwdJVmkA7.xnXt6NMX1Bi', '2022-05-01', 'homme'),
(27, 'jkkldlld', 'dldlld', 'mehdilajili@gmail.com', '$2y$10$lk3lb7Nlg7GsL3r9obCCX.Ao60E2RmF915WRXMkljgvRjjKi2OXQa', '2022-05-01', 'homme');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

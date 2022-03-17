-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 mars 2022 à 14:45
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `baseamine`
--
CREATE DATABASE IF NOT EXISTS `baseamine` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `baseamine`;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) UNSIGNED NOT NULL,
  `Matricule` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Adresse` varchar(100) DEFAULT NULL,
  `Filiere` varchar(50) DEFAULT NULL,
  `Naissance` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `Matricule`, `Nom`, `Prenom`, `Adresse`, `Filiere`, `Naissance`, `Email`, `Password`) VALUES
(74, '2', 'hamdi', 'amine', 'EP.CHABBI RUE SAGHREB CITé RIADH 5', 'Amine', '2022-03-31', 'amine.hamdi@polytechnicien.tn', '12345'),
(75, '4', 'hamdi', 'amine', 'EP.CHABBI RUE SAGHREB CITé RIADH 5', 'LGL', '2022-03-31', 'amine.hamdi@polytechnicien.tn', '12345'),
(76, '12564', 'hamdi', 'amine', 'EP.CHABBI RUE SAGHREB CITé RIADH 5', 'LGL', '2021-07-07', 'amine.hamdi@polytechnicien.tn', '123456'),
(77, '0987', 'hamdi', 'amine', 'EP.CHABBI RUE SAGHREB CITé RIADH 5', 'LBI', '2020-04-01', 'amine.hamdi@polytechnicien.tn', '1234507997'),
(101, '5', 'hamdi', 'amine', 'EP.CHABBI RUE SAGHREB CITé RIADH 5', 'math', '2022-03-01', 'amine.hamdi@polytechnicien.tn', '324'),
(102, '6', 'hamdi', 'amine', 'EP.CHABBI RUE SAGHREB CITé RIADH 5', 'LGL', '2022-03-17', 'amine.hamdi@polytechnicien.tn', '123'),
(103, '7', 'hamdi', 'amine', 'EP.CHABBI RUE SAGHREB CITé RIADH 5', 'LGL', '2022-03-17', 'amine.hamdi@polytechnicien.tn', '1234'),
(104, '9', 'hamdi', 'amine', 'EP.CHABBI RUE SAGHREB CITé RIADH 5', 'math', '2022-03-17', 'amine.hamdi@polytechnicien.tn', '2345'),
(105, '12', 'hamdi', 'amine', 'EP.CHABBI RUE SAGHREB CITé RIADH 5', 'math', '2022-03-17', 'amine.hamdi@polytechnicien.tn', '125'),
(106, '13', 'hamdi', 'amine', 'EP.CHABBI RUE SAGHREB CITé RIADH 5', 'LGL', '2022-03-07', 'amine.hamdi@polytechnicien.tn', 'AAAA'),
(107, '122121', 'hamdi', 'amine', 'EP.CHABBI RUE SAGHREB CITé RIADH 5', 'LGL', '2022-03-08', 'amine.hamdi@polytechnicien.tn', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `Nom` varchar(50) NOT NULL,
  `Departement` varchar(50) DEFAULT NULL,
  `nb_groupe` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`Nom`, `Departement`, `nb_groupe`) VALUES
('Amine', 'info', 66),
('INFO', 'Informatique', 17),
('LBI', 'Informatique', 2),
('LGL', 'Informatique', 5),
('math', 'math', 0),
('PREPA', 'Informatique', 7);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Matricule` (`Matricule`),
  ADD KEY `Filiere` (`Filiere`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`Nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`Filiere`) REFERENCES `filiere` (`Nom`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 16 fév. 2025 à 17:12
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `users`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `PhoneNumber` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `email`, `password`, `PhoneNumber`) VALUES
(1, 'chaaben', 'amine', 'benchaabenamine1@gmail.com', '7d490423fd53412bb08815eecff7f67d', '28147723'),
(2, 'Jane', 'Smith', 'jane.smith@example.com', 'securepass', '23456789'),
(3, 'Michael', 'Johnson', 'michael.j@example.com', 'mikepass', '34567890'),
(4, 'Emily', 'Davis', 'emily.davis@example.com', 'emilysecure', '45678901'),
(5, 'David', 'Brown', 'david.brown@example.com', 'brownie123', '56789012'),
(6, 'Emma', 'Wilson', 'emma.wilson@example.com', 'emma2024', '67890123'),
(7, 'Chris', 'Martinez', 'chris.mart@example.com', 'martpass', '78901234'),
(8, 'Sophia', 'Anderson', 'sophia.a@example.com', 'sophia789', '89012345'),
(9, 'James', 'Garcia', 'james.g@example.com', 'jamespass', '90123456'),
(10, 'Olivia', 'Lee', 'olivia.lee@example.com', 'olivialee', '01234567'),
(11, 'John', 'Doe', 'john.doe@example.com', 'password123', '12345678');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 avr. 2026 à 16:02
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
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `codebadge1`
--

CREATE TABLE `codebadge1` (
  `id` int(11) NOT NULL,
  `code_badge` varchar(20) NOT NULL,
  `nom_badge` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `codebadge1`
--

INSERT INTO `codebadge1` (`id`, `code_badge`, `nom_badge`, `admin`) VALUES
(2, '1A490823', '', 1),
(3, '20598F08', '', 0),
(4, '8733AD08', '', 0),
(6, 'D9ECFF08', '', 0),
(10, 'DF56DBC4', '', 0),
(12, '88AB0608', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `passage`
--

CREATE TABLE `passage` (
  `id_passage` int(11) NOT NULL,
  `heure_passage` time NOT NULL,
  `date` date NOT NULL,
  `code_badge_scan` varchar(20) NOT NULL,
  `valide` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `passage`
--

INSERT INTO `passage` (`id_passage`, `heure_passage`, `date`, `code_badge_scan`, `valide`) VALUES
(1, '14:36:15', '0000-00-00', '1A490823', 0),
(2, '14:36:17', '0000-00-00', '1A490823', 0),
(3, '14:38:33', '0000-00-00', '37A350A4', 0),
(4, '14:38:34', '0000-00-00', '37A350A4', 0),
(5, '14:43:40', '2026-03-25', '1A490823', 1),
(6, '14:44:07', '2026-03-25', '37A350A4', 0),
(7, '16:11:51', '2026-03-25', '1A490823', 1),
(8, '16:12:50', '2026-03-25', '1A490823', 1),
(9, '16:15:29', '2026-03-25', '1A490823', 1),
(10, '16:16:11', '2026-03-25', '1A490823', 1),
(11, '16:16:35', '2026-03-25', '1A490823', 1),
(12, '16:16:58', '2026-03-25', '1A490823', 1),
(13, '16:18:39', '2026-03-25', '1A490823', 1),
(14, '13:39:46', '2026-04-01', '1A490823', 1),
(15, '13:42:10', '2026-04-01', '', 0),
(16, '13:42:38', '2026-04-01', '1A490823', 1),
(17, '13:42:43', '2026-04-01', '', 0),
(19, '00:00:00', '0000-00-00', '', 0),
(22, '13:50:33', '2026-04-01', '1A490823', 0),
(23, '13:51:34', '2026-04-01', '1A490823', 0),
(24, '13:51:35', '2026-04-01', '1A490823', 0),
(25, '13:53:01', '2026-04-01', '1A490823', 0),
(26, '13:53:41', '2026-04-01', '1A490823', 0),
(27, '13:54:23', '2026-04-01', '1A490823', 0),
(28, '13:55:09', '2026-04-01', '1A490823', 0),
(29, '13:55:42', '2026-04-01', '1A490823', 0),
(30, '13:55:43', '2026-04-01', '1A490823', 0),
(31, '13:56:09', '2026-04-01', '1A490823', 0),
(32, '13:56:39', '2026-04-01', '1A490823', 0),
(33, '13:56:52', '2026-04-01', '1A490823', 0),
(34, '13:57:07', '2026-04-01', '1A490823', 0),
(35, '14:04:58', '2026-04-01', '1A490823', 0),
(36, '14:05:22', '2026-04-01', '1A490823', 0),
(37, '14:05:35', '2026-04-01', 'FC0FCA08', 0),
(39, '14:11:49', '2026-04-01', '1A490823', 1),
(40, '14:12:20', '2026-04-01', '8A289B08', 0),
(41, '14:17:15', '2026-04-01', 'D2652B08', 0),
(42, '14:17:21', '2026-04-01', '1A490823', 1),
(57, '14:27:18', '2026-04-01', '1A490823', 1),
(59, '14:30:04', '2026-04-01', '1A490823', 0),
(62, '14:44:48', '2026-04-01', '1A490823', 1),
(63, '14:44:54', '2026-04-01', '3F814508', 0),
(64, '15:11:52', '2026-04-01', '123', 0),
(65, '15:12:04', '2026-04-01', '1A490823', 1),
(66, '15:12:06', '2026-04-01', '123', 0),
(67, '15:12:21', '2026-04-01', '1A490823', 1),
(68, '15:12:45', '2026-04-01', 'DF56DBC4', 1),
(69, '15:15:29', '2026-04-01', 'DF56DBC4', 1),
(70, '15:15:40', '2026-04-01', '1A490823', 1),
(71, '15:16:37', '2026-04-01', '1A490823', 1),
(72, '15:33:24', '2026-04-01', '1A490823', 1),
(73, '15:36:01', '2026-04-01', '1A490823', 1),
(74, '15:36:19', '2026-04-01', '1A490823', 1),
(75, '15:38:09', '2026-04-01', '1A490823', 1),
(76, '15:38:35', '2026-04-01', '1A490823', 1),
(77, '15:45:07', '2026-04-01', '1A490823', 1),
(78, '15:46:39', '2026-04-01', '1A490823', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `codebadge1`
--
ALTER TABLE `codebadge1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `passage`
--
ALTER TABLE `passage`
  ADD PRIMARY KEY (`id_passage`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `codebadge1`
--
ALTER TABLE `codebadge1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `passage`
--
ALTER TABLE `passage`
  MODIFY `id_passage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

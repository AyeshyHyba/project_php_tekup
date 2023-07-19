-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 juil. 2023 à 20:56
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `finddoctor`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctor`
--

CREATE TABLE `doctor` (
  `idD` int(11) NOT NULL,
  `nomD` varchar(50) NOT NULL,
  `prD` varchar(50) NOT NULL,
  `Spc` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `numT` int(8) NOT NULL,
  `mailD` varchar(50) NOT NULL,
  `pwdD` varchar(50) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `timeIn` int(2) NOT NULL,
  `timeOut` int(2) NOT NULL,
  `photoD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `doctor`
--

INSERT INTO `doctor` (`idD`, `nomD`, `prD`, `Spc`, `city`, `numT`, `mailD`, `pwdD`, `descr`, `timeIn`, `timeOut`, `photoD`) VALUES
(1, 'Ahmed', 'Mahfoudh', 'ORL', 'tunis', 29101952, 'mahfoush@gmail.com', '147147', 'Ahmed Mahfoudh médecin spécialiste en dermatologie de son état : «homme exceptionnel que la Tunisie vient de perdre !», a-t-il déploré, en exprimant sa profonde tristesse et en présentant ses condoléa', 9, 16, 'https://kapitalis.com/tunisie/wp-content/uploads/2'),
(2, 'Rachid', 'Sallami', 'dentiste', 'tunis', 99574826, 'salemi@gmail.com', 'salami123', 'La société SELLAMI RACHID spécialisée Dentistes - Chirurgiens Dentistes. La société SELLAMI RACHID est basée à Tunis.', 9, 16, 'https://media.licdn.com/dms/image/C5103AQHzI0Wx7DD');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `idp` int(11) NOT NULL,
  `nomP` varchar(50) NOT NULL,
  `prp` varchar(50) NOT NULL,
  `numTp` int(8) NOT NULL,
  `mailp` varchar(50) NOT NULL,
  `pwdp` varchar(50) NOT NULL,
  `photop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`idp`, `nomP`, `prp`, `numTp`, `mailp`, `pwdp`, `photop`) VALUES
(1, 'hyba', 'ayechy', 55896325, 'hiba@gmail.com', '159159', 'https://i.natgeofe.com/n/548467d8-c5f1-4551-9f58-6'),
(2, 'mimi', 'mariouma', 55857625, 'mimi@gmail.com', '1234', 'https://th-thumbnailer.cdn-si-edu.com/bZAar59Bdm95'),
(3, 'rayen', 'hidri', 98885325, 'rayen@gmail.com', '1478', 'https://mmo.aiircdn.com/301/642a80d98c090.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

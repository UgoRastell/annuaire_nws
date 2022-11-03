-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 nov. 2022 à 22:20
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `annuaire_nws`
--

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_prenom` varchar(255) NOT NULL,
  `student_nom` varchar(255) NOT NULL,
  `student_age` varchar(255) NOT NULL,
  `student_genre` varchar(255) NOT NULL,
  `student_diplome` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_adresse` varchar(255) NOT NULL,
  `student_numero_telephone` varchar(255) NOT NULL,
  `student_speciality` varchar(255) NOT NULL,
  `photo_student` varchar(255) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `student_speciality` (`student_speciality`),
  KEY `student_speciality_2` (`student_speciality`),
  KEY `student_speciality_3` (`student_speciality`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`student_id`, `student_prenom`, `student_nom`, `student_age`, `student_genre`, `student_diplome`, `student_email`, `student_adresse`, `student_numero_telephone`, `student_speciality`, `photo_student`) VALUES
(12, 'ufhfhf', 'hfhfhf ', 'hfhgfhfh', 'Homme', 'hfhfhgfhfh', 'fhgfhfghfghgfhf@fhfghfh.com', '4343fhfhfh', '55454345', 'Développement web', 'campgym-logo.jpg'),
(13, 'RASTELL', 'Ugo', 'dfhdh', 'Homme', 'hfdhdhd', 'svitanosdu76@gmail.com', 'svitanosdu76@gmail.com', 'dhdfhdhdh', 'Communication graphique', 'aéro.PNG'),
(15, 'RASTELL', 'Ugo', 'dfhdh', 'Homme', 'dfhdhfdh', 'svitanosdu76@gmail.com', 'svitanosdu76@gmail.com', 'dhdfhdhdh', 'Ne sais pas', 'empty-profile.png'),
(16, 'RASTELL', 'Ugo', 'fsqfsqf', 'Homme', 'qsfqfsqsfsqf', 'svitanosdu76@gmail.com', 'svitanosdu76@gmail.com', 'qsffqfqf', 'Ne sais pas', 'empty-profile.png'),
(18, 'RASTELL', 'Ugo', 'dfhdh', 'Homme', 'cvncnvcncvn', 'svitanosdu76@gmail.com', 'svitanosdu76@gmail.com', '0000000', 'Communication graphique', 'GAF.PNG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

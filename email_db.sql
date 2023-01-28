-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 16, 2023 at 06:13 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_sys`
--

DROP TABLE IF EXISTS `email_sys`;
CREATE TABLE IF NOT EXISTS `email_sys` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name_full` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `to_email` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `email_sys`
--

INSERT INTO `email_sys` (`id`, `name_full`, `username`, `email`, `password`, `to_email`, `subject`, `message`, `status`, `date`) VALUES
(1, 'sss', 'sss123', 'sss@gmail.com', '$2y$04$NOHEWaZfUrI1v2bO3qpTXuyU1bwx3gBS.e9UufewMR3x2ROr6nFpi', '', '', '', '', '2023-01-05 08:45:57'),
(2, 'Kavitha Jayakumar', 'kavitha123', 'kavithaj.mail@gmail.com', '$2y$04$XeqhQHNUyaKTjkOAIDklqOZVukcDbn/ua9GGJOll6ioy3X.h5xJU6', '', '', '', '', '2023-01-05 09:01:09'),
(26, NULL, NULL, 'sss@gmail.com', '', 'eeee@gmail.com', 'textfdvdddd', 'esfedsfddxvdvvcvcvvc', 'sent', '2023-01-06 07:42:33'),
(27, NULL, NULL, 'sss@gmail.com', '', 'tttttgbgvbgfh@gmail.com', 'textfdvdddd vbffffgg', 'cbfgdgdfgf', 'deleted', '2023-01-06 07:47:50'),
(25, NULL, NULL, 'sss@gmail.com', '', 'hghghgh@gmail.com', 'text', 'text', 'deleted', '2023-01-06 09:42:00'),
(24, NULL, NULL, 'sss@gmail.com', '', 'yyyghghg@gmail.com', 'jgjghjg', 'yhtrrdggxffb', 'sent', '2023-01-06 07:41:57'),
(18, NULL, NULL, 'nnn@gmail.com', '', 'yyy@gmail.com', 'gdfgdfg', 'uytuytytut', 'deleted', '2023-01-06 07:28:04'),
(17, NULL, NULL, 'ddd@gmail.com', '', 'ccc@gmail.com', 'gdfgdfg', 'gdgdfgfdg', 'deleted', '2023-01-06 07:30:47'),
(21, 'Kavitha Jayakumar', 'kavitha123', 'kavithaj123.mail@gmail.com', '$2y$04$4thkEk9PdUpllsEFCqROi.5M4qcR3dP7JHqHCN1FmIHdIkr86a3Cu', '', '', '', '', '2023-01-06 05:35:51'),
(19, NULL, NULL, 'uuu@gmail.com', '', 'jkjjkj@gmail.com', 'gdfgdfgfvbbv', 'gfhhfgh', 'deleted', '2023-01-06 07:33:00'),
(20, NULL, NULL, 'rere@gmail.com', '', 'trrtrt@gmail.com', 'gggghghgh', 'uuuuuuu', 'deleted', '2023-01-06 07:40:40'),
(22, 'xyz', 'xyz123', 'xyz@gmail.com', '$2y$04$ujk5RyYPQN6XT6/vgRjEouE2DC/IrPBDZjL7/a1l0q9Ryf9k6DT8C', '', '', '', '', '2023-01-06 06:33:19'),
(23, NULL, NULL, 'sss@gmail.com', '', 'yyy@gmail.com', 'bnbnbbn', 'bnnbbnbnmbn', 'deleted', '2023-01-06 09:49:08'),
(28, NULL, NULL, 'sss@gmail.com', '', 'ttttttt@gmail.com', 'subject', 'message', 'deleted', '2023-01-06 12:18:41'),
(29, NULL, NULL, 'sss@gmail.com', '', 'tytyt@gmail.com', 'yytytyty', 'g hfghgfhhfhth', 'deleted', '2023-01-06 12:20:58'),
(30, NULL, NULL, 'kavithaj.mail@gmail.com', '', 'sss@gmail.com', 'text', 'text', 'deleted', '2023-01-06 12:22:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

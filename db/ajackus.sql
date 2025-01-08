-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2025 at 11:10 AM
-- Server version: 8.3.0
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajackus`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `hire_date` date NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `youtube_video` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `department`, `hire_date`, `profile_picture`, `youtube_video`, `created_at`, `updated_at`) VALUES
(1, 'Dhiraj', 'Dhiraj', 'dhiraj.sah78@gmail.com', '8447513883', 'IT', '2025-01-08', '1508469571-10-days-morocco.jpg', 'https://www.youtube.com/', '2025-01-08 10:13:42', '2025-01-08 10:13:42'),
(2, 'Kailash', 'Chand', 'kailash.c@xyz.in', '8888888888', 'HR', '2024-12-29', '539975704-south-america.png', 'https://www.youtube.com', '2025-01-08 10:14:08', '2025-01-08 10:16:23'),
(3, 'Deepak', 'Kumat', 'deepak@gmail.com', '8765432154', 'Marketing', '2025-01-22', '2535816096-himachal-pradesh.jpg', 'http://www.youtube.com', '2025-01-08 10:14:48', '2025-01-08 10:14:48'),
(4, 'Pawan', 'Mittal', 'pawan@contify.com', '7654323456', 'Marketing', '2025-01-03', '8265066062-mt.-fuji-&-hakone.jpg', 'http://www.youtube.com', '2025-01-08 10:15:28', '2025-01-08 10:15:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

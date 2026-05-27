-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 27, 2026 at 10:30 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwelniger`
--
CREATE DATABASE IF NOT EXISTS `cwelniger` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cwelniger`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `egzaminy`
--

DROP TABLE IF EXISTS `egzaminy`;
CREATE TABLE IF NOT EXISTS `egzaminy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(150) NOT NULL,
  `data_egzaminu` datetime NOT NULL,
  `miejsce` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

DROP TABLE IF EXISTS `uzytkownicy`;
CREATE TABLE IF NOT EXISTS `uzytkownicy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `rola` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `email`, `haslo`, `imie`, `rola`) VALUES
(1, 'test@wp.pl', 'haslo123', 'Marek', 'admin'),
(2, 'user@wp.pl', 'user123', 'Ania', 'uczeń');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyniki`
--

DROP TABLE IF EXISTS `wyniki`;
CREATE TABLE IF NOT EXISTS `wyniki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `punkty` int(11) NOT NULL,
  `wynik` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wyniki`
--

INSERT INTO `wyniki` (`id`, `punkty`, `wynik`) VALUES
(1, 85, 'Zaliczony'),
(2, 40, 'Nie zaliczony');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

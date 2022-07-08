-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: feb. 03, 2021 la 11:53 AM
-- Versiune server: 10.4.17-MariaDB
-- Versiune PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `phplogin`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(9, 'Admin', '$2y$10$I2F.kMGJvOMi27C/yg5Ofe16WJ7VT1TIVEvfCpDNWvSGlo1PZhWx.', 'admin@email.com'),
(11, 'AlytuSuperStar', '$2y$10$JvlKPC9e8t2vGmMSrbt4wOHz0wQydcGk8kS.3cuMJvc1.7MwcJnjq', 'alytubatsiut@sefan.international'),
(12, 'Stefan', '$2y$10$m80BkAmb5xCFjxoLxd2j0OlzQaJVRrfHd80neyl7Fokhww.1LRZ4e', 'stefan@yahoo.com'),
(13, 'sirrius', '$2y$10$.1B3tdNNxi0HT316rCjRTOIzrs7LWvfw9clzl3nvsPebMZ1JanOqe', 'sirrius@yahoo.com'),
(14, 'Paul', '$2y$10$Y63xq8KitP66sI32gjeyQ.CIc1gQ/x1Hm8Nr7oU3HOoBKKJ6xjegW', 'paul@yahoo.com'),
(15, 'Test123', '$2y$10$7g4dn3tYqcUaEwpjOxbQlOBB/JKqawy8D8j0JmP6TVXAksEus6cpy', 'email@email.com');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

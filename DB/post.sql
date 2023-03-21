-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Apr 14, 2022 alle 20:01
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Blog`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `foto` varchar(999) DEFAULT NULL,
  `descrizione` varchar(999) DEFAULT NULL,
  `Luogo` varchar(255) DEFAULT NULL,
  `datapub` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `post`
--

INSERT INTO `post` (`id`, `foto`, `descrizione`, `Luogo`, `datapub`) VALUES
(1, 'https://scontent-amt2-1.xx.fbcdn.net/v/t1.6435-9/183728277_1067242710468299_2635927318116979033_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=a26aad&_nc_ohc=HuGfOKghbMYAX-0sRWj&_nc_ht=scontent-amt2-1.xx&oh=00_AT9k-ZbGY9XIW3tbfj8IIpWLDensyuh8wMzrnLnVEibTOQ&oe=6271D8BB', 'Questa foto è stata scattata in Spagna durante il mio Erasmus e raffigura la Piazza di Saragozza ', 'Zaragoza - Spain', NULL),
(2, 'https://scontent-amt2-1.xx.fbcdn.net/v/t1.6435-9/88013696_762752930917280_7636972578417934336_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=a26aad&_nc_ohc=uiYkB7pXkBQAX8rtkPI&_nc_ht=scontent-amt2-1.xx&oh=00_AT84c_k7XHLIOZyrrlM6oZewYPz7gKFTFGmNIUrbq_5QJw&oe=6273AEBE', 'Questa foto rappresenta la vista di un tramonto dal tetto di casa mia, durante il primo lockdown', 'Calderara di Reno (BO) - Italy', NULL),
(3, 'https://scontent-amt2-1.xx.fbcdn.net/v/t1.6435-9/68750264_615839622275279_6384690033370071040_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=9267fe&_nc_ohc=WWslP64TIDoAX_cyZKq&tn=ASvda_MP3o94Zj42&_nc_ht=scontent-amt2-1.xx&oh=00_AT8Sf13xysgvLeJbwm8clKelcQF8PA2cKiwxH7HvHMPLJw&oe=6272535E', 'Siderno, mare e vacanze. \r\nQuanto è bella l’estate? Quanto è bello nuotare nel mare calmo fresco.\r\nQuesta è pace, questa è la mia Calabria ', 'Siderno (RC) - Italy', NULL),
(4, ' https://2.bp.blogspot.com/-zQXUostpERk/WtIVHkzqh_I/AAAAAAAAA24/KJPyy7CW5PE-pvtLtdq7_bVUSky7gRHUQCLcBGAs/s1600/ab32ad774c2859011687de41bb8058fb_400x400.jpg', 'Il logo della mia ex squadra di basket, quanto mi piaceva giocare, quanto non mi manca :)', 'Calderara di Reno (BO) - Italy', '2022-04-14 19:46:51.000000');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

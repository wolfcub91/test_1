-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 06, 2023 alle 13:28
-- Versione del server: 10.4.27-MariaDB
-- Versione PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasticceria`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `dolci`
--

CREATE TABLE `dolci` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `dolci`
--

INSERT INTO `dolci` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Torna della nonna', '2023-02-04 16:59:49', '2023-02-05 18:02:30'),
(2, 'Torta 2', '2023-02-04 17:00:08', '2023-02-06 10:25:34'),
(5, 'cheesecake', '2023-02-05 14:04:45', '2023-02-05 18:03:15');

-- --------------------------------------------------------

--
-- Struttura della tabella `ingredienti`
--

CREATE TABLE `ingredienti` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `id_unita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `ingredienti`
--

INSERT INTO `ingredienti` (`id`, `nome`, `id_unita`) VALUES
(1, 'latte', 0),
(2, 'farina', 0),
(3, 'zucchero', 1),
(4, 'uova', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `ingredienti_dolci`
--

CREATE TABLE `ingredienti_dolci` (
  `id` int(11) NOT NULL,
  `id_dolce` int(11) NOT NULL,
  `id_ingrediente` int(11) NOT NULL,
  `quantita` float NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `ingredienti_dolci`
--

INSERT INTO `ingredienti_dolci` (`id`, `id_dolce`, `id_ingrediente`, `quantita`, `updated_at`, `created_at`) VALUES
(3, 16, 2, 1, '2023-02-04 16:17:39', '2023-02-04 16:17:39'),
(4, 16, 3, 1, '2023-02-04 16:17:39', '2023-02-04 16:17:39'),
(5, 16, 4, 1, '2023-02-04 16:17:39', '2023-02-04 16:17:39'),
(10, 18, 1, 1, '2023-02-04 16:18:56', '2023-02-04 16:18:56'),
(11, 18, 2, 1, '2023-02-04 16:18:56', '2023-02-04 16:18:56'),
(12, 18, 3, 1, '2023-02-04 16:18:56', '2023-02-04 16:18:56'),
(13, 18, 4, 1, '2023-02-04 16:18:56', '2023-02-04 16:18:56'),
(14, 19, 1, 1, '2023-02-04 16:19:23', '2023-02-04 16:19:23'),
(15, 19, 2, 1, '2023-02-04 16:19:23', '2023-02-04 16:19:23'),
(16, 19, 3, 1, '2023-02-04 16:19:23', '2023-02-04 16:19:23'),
(17, 19, 4, 1, '2023-02-04 16:19:23', '2023-02-04 16:19:23'),
(22, 3, 4, 1, '2023-02-04 17:00:39', '2023-02-04 17:00:39'),
(34, 6, 1, 1, '2023-02-05 14:05:17', '2023-02-05 14:05:17'),
(35, 6, 2, 1, '2023-02-05 14:05:17', '2023-02-05 14:05:17'),
(44, 5, 3, 1, '2023-02-05 18:03:15', '2023-02-05 18:03:15'),
(45, 5, 4, 1, '2023-02-05 18:03:15', '2023-02-05 18:03:15'),
(48, 1, 1, 1, '2023-02-06 06:22:55', '2023-02-06 06:22:55'),
(49, 1, 2, 1, '2023-02-06 06:22:55', '2023-02-06 06:22:55'),
(50, 2, 1, 1, '2023-02-06 06:25:34', '2023-02-06 06:25:34'),
(51, 2, 2, 1, '2023-02-06 06:25:34', '2023-02-06 06:25:34');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `updated_at`, `created_at`) VALUES
(2, 'Maria', 'maria@gmail.com', '2023-02-05 23:30:37', '$2y$10$u1uc3S2IkD/4UohYxfIGS.jvTeYzaoP9LTCvFO6Fn15f0.bN/IbDG', '2023-02-05 22:30:37', '2023-02-05 22:30:37');

-- --------------------------------------------------------

--
-- Struttura della tabella `vetrina`
--

CREATE TABLE `vetrina` (
  `id` int(11) NOT NULL,
  `id_dolce` int(11) NOT NULL,
  `prezzo` float NOT NULL,
  `prezzo_nuovo` float NOT NULL,
  `quantita` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `vetrina`
--

INSERT INTO `vetrina` (`id`, `id_dolce`, `prezzo`, `prezzo_nuovo`, `quantita`, `created_at`, `updated_at`) VALUES
(9, 1, 2.2, 0.44, 2, '2023-02-04 17:17:26', '2023-02-06 07:27:13'),
(10, 5, 2.3, 1.84, 10, '2023-02-05 18:03:37', '2023-02-06 08:27:13'),
(11, 5, 2.5, 2, 10, '2023-02-05 15:25:40', '2023-02-05 07:25:40');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `dolci`
--
ALTER TABLE `dolci`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `ingredienti`
--
ALTER TABLE `ingredienti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `ingredienti_dolci`
--
ALTER TABLE `ingredienti_dolci`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `vetrina`
--
ALTER TABLE `vetrina`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `dolci`
--
ALTER TABLE `dolci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `ingredienti`
--
ALTER TABLE `ingredienti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `ingredienti_dolci`
--
ALTER TABLE `ingredienti_dolci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `vetrina`
--
ALTER TABLE `vetrina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

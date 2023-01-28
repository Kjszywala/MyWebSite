-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Sty 2023, 21:38
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `rezerwacje`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `party_size` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `table_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `reservation`
--

INSERT INTO `reservation` (`id`, `date`, `time`, `party_size`, `name`, `phone`, `table_id`) VALUES
(1, '2023-01-28', '18:30:00', 1, 'Kamil Szywala', '6564165165', 1),
(2, '2023-01-28', '18:30:00', 2, 'Kamil Szywala', '6564165165', 1),
(3, '2023-01-28', '18:30:00', 2, 'Kamil Szywala', '6564165165', 1),
(4, '2023-01-28', '18:30:00', -1, 'Kamil Szywala', '6564165165', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `party_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `tables`
--

INSERT INTO `tables` (`id`, `party_size`) VALUES
(1, 2),
(2, 4),
(3, 4),
(4, 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `surname`, `email`, `age`, `gender`) VALUES
(9, 'Zosia', '$2y$10$JfX1zSCYVwUzk.oE2GHx1ORIJaDwt4dOoElTNO35r./L5LN0PUGZK', 'Zosia', 'Frankow', 'zos@wp.pl', 29, 'female'),
(10, 'Mariusz', '$2y$10$zrrwNpt75.TAWpgfeqBCee9nyuhnUA0XnVt5HA7ivsQQOmAohpm.O', 'Mariusz', 'Krasulak', 'krasy@wp.pl', 56, 'male'),
(11, 'Kamil', '$2y$10$riJY9xiwIXThyxpm6Wj7rOR/DOQKGYt.GQ90gq7Tp545i2wZu89j2', 'Kamil', 'Szywala', 'kjszywala@protonmail.com', 27, 'male'),
(12, 'sebastian', '$2y$10$jk9zBj2a62GVqLGMrmnLf.LyLMbvxPIlkEoeocCMXhWKVkMdZfc2W', 'sebastian', 'arendarczyk', 'kamil@wp.pl', 22, 'male'),
(13, 'kamil21063', '$2y$10$mVmd.yI/kzQEX15MCpM.f.VLwzl73heGjepbFpbwfuONBzJQddG6K', 'Kamil', 'Szczesniak', 'kam@wp.pl', 29, 'male');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_id` (`table_id`);

--
-- Indeksy dla tabeli `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

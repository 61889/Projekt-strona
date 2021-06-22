-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Cze 2021, 14:39
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kantor`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(11) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL,
  `haslo` varchar(256) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `mail` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `saldo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `imie`, `nazwisko`, `login`, `haslo`, `mail`, `saldo`) VALUES
(2, 'Michał', 'Krudysz', 'omis66', '$2y$10$7/QyiLTFTZDuOgtny.I5puJHZI6ZsVEWln2UGbU80wP1qK74l0ntG', 'michal@drontrzebownisko.pl', 1000),
(3, 'Michał', 'Krudysz', 'michalek123', '$2y$10$73cBL3ynflt0KS2AwIAHEOSv4FFuza.F.SHNB6XPklANVcGt49vd.', 'kr.mic@o2.pl', 1200),
(4, 'Michał', 'Krudysz', 'dupek123', '$2y$10$S0Um2N/qb0rvX5fXr6SxkOG57fIQWhYNOk4zNX/y7KYAyLL/L1kY6', 'dupa@dupa.pl', 1000),
(5, 'Maksymilian', 'Dziadosz', 'maksiu123', '$2y$10$Xu/dLCTewWdp8slfyILKwezRP32IwMeX30vwDKen/.hgocfYjwopy', 'maksdziadosz123@gmail.com', 1000),
(6, 'Patryk', 'Kozłowski', 'patryk123', '$2y$10$me6bpi40JtVhN32si1a0XuKdPAWH68gsa1VknTpm4HRjkNBNC2tvG', 'dup123@dupa.pl', 1000),
(7, 'Tomek', 'Nauczyciel', 'tomeczek', '$2y$10$PLWx1Xi6c5HOgt8AaOZlx.QxOIBm3JpmcGHGP0zNro/JwI2Mj4TBC', 'tomek@prezes.pl', 8750),
(8, 'Michał', 'Krudysz', 'mickr', '$2y$10$Ff2lDOgC/pi0osazGTPUwuqEHRkgbXvWpZMXWIdaPW1/S5Fjlte3.', 'info@drontrzebownisko.pl', 1864),
(9, 'Andrzej', 'Wajda', 'admin', '$2y$10$b0XnVTOXHILE7sTuvAOCwOfPQczMPjbC2oibht2eUlOR4cOm.6tR2', 'admin@admin.pl', 1423);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `transakcje`
--

CREATE TABLE `transakcje` (
  `id_zam` int(11) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `id_waluty` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `transakcje`
--

INSERT INTO `transakcje` (`id_zam`, `id_klienta`, `id_waluty`, `data`) VALUES
(1, 1, 2, '2021-06-21'),
(2, 7, 2, '2021-06-21'),
(3, 7, 2, '2021-06-21'),
(4, 7, 2, '2021-06-21'),
(5, 7, 1, '2021-06-21'),
(6, 7, 1, '2021-06-21'),
(7, 7, 1, '2021-06-21'),
(8, 7, 1, '2021-06-21'),
(9, 7, 1, '2021-06-21'),
(10, 7, 1, '2021-06-21'),
(11, 7, 1, '2021-06-21'),
(12, 7, 1, '2021-06-21'),
(13, 7, 1, '2021-06-21'),
(14, 7, 1, '2021-06-21'),
(15, 7, 1, '2021-06-21'),
(16, 7, 9, '2021-06-21'),
(17, 9, 1, '2021-06-21'),
(18, 9, 1, '2021-06-21');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `waluty`
--

CREATE TABLE `waluty` (
  `id_waluty` int(11) NOT NULL,
  `nazwa_waluty` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `kurs_kup` double NOT NULL,
  `kurs_sp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `waluty`
--

INSERT INTO `waluty` (`id_waluty`, `nazwa_waluty`, `kurs_kup`, `kurs_sp`) VALUES
(1, 'Euro', 4.5062, 0),
(2, 'Dolar amerykański', 3.7263, 0),
(3, 'Frank szwajcarski', 4.1498, 0),
(4, 'Funt brytyjski', 5.3002, 0),
(5, 'Dolar australijski', 2.8747, 2.8928),
(6, 'Juan chiński', 0.5803, 0.6023),
(7, 'Korona czeska', 0.1763, 0.1799),
(8, 'Kuna chorwacka', 0.5932, 0.6187),
(9, 'Rubel rosyjski', 0.0508, 0.0543),
(10, 'Bat tajlandzki', 0.1176, 0.1249),
(11, 'Jen japoński', 3.4305, 3.4473);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`);

--
-- Indeksy dla tabeli `transakcje`
--
ALTER TABLE `transakcje`
  ADD PRIMARY KEY (`id_zam`);

--
-- Indeksy dla tabeli `waluty`
--
ALTER TABLE `waluty`
  ADD PRIMARY KEY (`id_waluty`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `transakcje`
--
ALTER TABLE `transakcje`
  MODIFY `id_zam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `waluty`
--
ALTER TABLE `waluty`
  MODIFY `id_waluty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

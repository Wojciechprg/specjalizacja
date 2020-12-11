-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Gru 2020, 01:48
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `specjalizacja`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obecność`
--

CREATE TABLE `obecność` (
  `id` int(11) NOT NULL,
  `lekcja` text COLLATE utf8mb4_polish_ci NOT NULL,
  `wartość` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `obecność`
--

INSERT INTO `obecność` (`id`, `lekcja`, `wartość`) VALUES
(1, 'poniedzialek1', 0),
(2, 'poniedzialek2', 0),
(3, 'poniedzialek3', 0),
(4, 'poniedzialek4', 0),
(5, 'poniedzialek5', 0),
(6, 'wtorek1', 0),
(7, 'wtorek2', 0),
(8, 'wtorek3', 0),
(9, 'wtorek4', 0),
(10, 'wtorek5', 0),
(11, 'sroda1', 0),
(12, 'sroda2', 0),
(13, 'sroda3', 0),
(14, 'sroda4', 0),
(15, 'sroda5', 0),
(16, 'czwartek1', 3),
(17, 'czwartek2', 0),
(18, 'czwartek3', 0),
(19, 'czwartek4', 0),
(20, 'czwartek5', 0),
(21, 'piatek1', 3),
(22, 'piatek2', 2),
(23, 'piatek3', 1),
(24, 'piatek4', 0),
(25, 'piatek5', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczeń`
--

CREATE TABLE `uczeń` (
  `id_ucznia` int(11) NOT NULL,
  `Imie_ucznia` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Nazwisko_ucznia` text COLLATE utf8mb4_polish_ci NOT NULL,
  `kod_karty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uczeń`
--

INSERT INTO `uczeń` (`id_ucznia`, `Imie_ucznia`, `Nazwisko_ucznia`, `kod_karty`) VALUES
(1, 'Janusz', 'kowalski', 496334419);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `obecność`
--
ALTER TABLE `obecność`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uczeń`
--
ALTER TABLE `uczeń`
  ADD PRIMARY KEY (`id_ucznia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `obecność`
--
ALTER TABLE `obecność`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `uczeń`
--
ALTER TABLE `uczeń`
  MODIFY `id_ucznia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

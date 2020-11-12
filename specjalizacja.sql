-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Lis 2020, 22:22
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
-- Struktura tabeli dla tabeli `nauczyciel`
--

CREATE TABLE `nauczyciel` (
  `id_nauczyciela` int(11) NOT NULL,
  `Imie_nauczyciela` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Nazwisko_nauczyciela` text COLLATE utf8mb4_polish_ci NOT NULL,
  `kod_karty_nauczyciela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmiot`
--

CREATE TABLE `przedmiot` (
  `id_przedmiotu` int(11) NOT NULL,
  `Nazwa_przedmiotu` text COLLATE utf8mb4_polish_ci NOT NULL,
  `kod_karty` int(11) NOT NULL,
  `kod_karty_nauczyciela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

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
-- Indeksy dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
  ADD PRIMARY KEY (`id_nauczyciela`);

--
-- Indeksy dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
  ADD PRIMARY KEY (`id_przedmiotu`);

--
-- Indeksy dla tabeli `uczeń`
--
ALTER TABLE `uczeń`
  ADD PRIMARY KEY (`id_ucznia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `nauczyciel`
--
ALTER TABLE `nauczyciel`
  MODIFY `id_nauczyciela` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
  MODIFY `id_przedmiotu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `uczeń`
--
ALTER TABLE `uczeń`
  MODIFY `id_ucznia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

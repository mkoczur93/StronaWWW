-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Kwi 2019, 15:03
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uzytkownicy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE IF NOT EXISTS `kategorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategoria` text COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=7 ;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id`, `kategoria`) VALUES
(1, 'sport'),
(2, 'moda'),
(3, 'biznes'),
(4, 'komputery'),
(5, 'filmy'),
(6, 'książki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pliki`
--

CREATE TABLE IF NOT EXISTS `pliki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `telefon` int(11) NOT NULL,
  `plik` text COLLATE utf8_polish_ci NOT NULL,
  `tekst` text COLLATE utf8_polish_ci NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=6 ;

--
-- Zrzut danych tabeli `pliki`
--

INSERT INTO `pliki` (`id`, `imie`, `email`, `telefon`, `plik`, `tekst`, `id_klienta`, `cena`) VALUES
(1, 'asda', 'asdas@wp.pl', 456456456, '', 'asdadasdasd', 0, 0),
(2, 'asdas', 'asdsdads@wp.pl', 234323432, 'Array', 'asdasdasda', 0, 0),
(3, 'asdasd', 'asdasdads@wp.pl', 555666777, 'Lilie wodne.jpg', 'asdasdasd', 0, 0),
(4, 'asdsd', 'aasd@wp.pl', 123123123, 'ZachÃ³d sÅ‚oÅ„ca.jpg', 'deasdsdfsdfsdf', 0, 0),
(5, '', '', 0, '', '', 1, 70);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pochodzenie`
--

CREATE TABLE IF NOT EXISTS `pochodzenie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kraj` text COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `pochodzenie`
--

INSERT INTO `pochodzenie` (`id`, `kraj`) VALUES
(1, 'Polska'),
(2, 'USA'),
(3, 'Kanada'),
(4, 'Hiszpania');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE IF NOT EXISTS `produkty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL,
  `id_kategorie` int(11) NOT NULL,
  `id_pochodzenie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id`, `nazwa`, `cena`, `opis`, `id_kategorie`, `id_pochodzenie`) VALUES
(1, 'piłka', 20, 'rozmiar 5 halowa', 2, 1),
(2, 'buty', 50, 'na halę', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE IF NOT EXISTS `uzytkownicy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `dnipremium` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=16 ;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`, `dnipremium`, `imie`, `nazwisko`) VALUES
(1, 'adam', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly', 'adam@gmail.com', 0, 'a', 'asdasd'),
(2, 'marek', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly', 'marek@gmail.com', 15, '', ''),
(3, 'anna', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly', 'anna@gmail.com', 25, '', ''),
(4, 'andrzej', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly', 'andrzej@gmail.com', 0, '', ''),
(5, 'justyna', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly', 'justyna@gmail.com', 0, '', ''),
(6, 'kasia', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly', 'kasia@gmail.com', 12, '', ''),
(7, 'beata', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly', 'beata@gmail.com', 77, '', ''),
(8, 'jakub', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly', 'jakub@gmail.com', 0, '', ''),
(9, 'janusz', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly', 'janusz@gmail.com', 0, '', ''),
(10, 'roman', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly', 'roman@gmail.com', 23, '', ''),
(13, 'marcin12', '$2y$10$NQEwD5TRbzI.6AcHFsKvsOSD9EbMzrrT2dRxjjXK1Ob4I.o1fQHWm', 'marcin3@o2.pl', 14, '', ''),
(12, 'marcin1', '$2y$10$WA7wXFkJVHDotEa0hvrCk.Pl3412YHACUNeBMIhbqsCLnfMPgQqZC', 'marcin1@o2.pl', 14, '', ''),
(14, 'qqqqq', '$2y$10$ytlV5SpEIp3z3mVsCMYBZ.6STn2U83wRC7ceo0qJfIfyfm1eRosCm', 'sddsa@o2.pl', 14, '', ''),
(15, 'wiran', '$2y$10$TSTemy3C.nRVomPL9ckGneLuAFAIdgxp.P4wpEiSLYsQMnmXpBGqe', 'kemsi@o2.pl', 14, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

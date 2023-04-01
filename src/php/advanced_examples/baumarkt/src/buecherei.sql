-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Sep 2021 um 17:34
-- Server-Version: 10.4.19-MariaDB
-- PHP-Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `buecherei`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `buecher`
--

CREATE TABLE `buecher` (
  `BuchID` int(11) NOT NULL,
  `Autor` varchar(255) NOT NULL,
  `Herausgeber` varchar(255) NOT NULL,
  `Erscheinungsdatum` year(4) NOT NULL,
  `Titel` varchar(526) NOT NULL,
  `Verlag` varchar(526) NOT NULL,
  `ISBN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `buecher`
--

INSERT INTO `buecher` (`BuchID`, `Autor`, `Herausgeber`, `Erscheinungsdatum`, `Titel`, `Verlag`, `ISBN`) VALUES
(1, 'Platon', 'Übertr., Anm. u. Nachw. v. Manfred Fuhrmann', 1986, 'Platon Apologie des Sokrates / Kriton', 'Reclam', '978-3-15-000895-9'),
(2, 'Thomas von Aquin', 'Andreas Speer', 2005, 'Thomas von Aquin: Die Summa theologiae', 'De Gruyter', '978-3-11-017125-9'),
(3, 'John Locke', 'Peter Laslett', 1988, 'Locke: Two Treatise of Government', 'Cambridge University Press', '978-0-521-35730-2'),
(4, 'Immanuel Kant', 'Jens Timmermann', 1998, 'Immanuel Kant: Kritik der reinen Vernunft', 'Meiner', '978-3-7873-2112-4'),
(5, 'Immanuel Kant', 'Roland Wittmann, Reinhard Merkel', 2008, 'Zum ewigen Frieden: Grundlagen, Aktualität und Aussichten einer Idee von Immanuel Kant', 'Suhrkamp Taschenbuch', '978-3-518-28827-6');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `buecher`
--
ALTER TABLE `buecher`
  ADD PRIMARY KEY (`BuchID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `buecher`
--
ALTER TABLE `buecher`
  MODIFY `BuchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Mrz 2021 um 11:12
-- Server-Version: 10.1.35-MariaDB
-- PHP-Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `kurs`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `artikel`
--

CREATE TABLE `artikel` (
  `artikelID` int(11) NOT NULL,
  `artikelName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artikelGruppe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artikelPreis` decimal(10,2) NOT NULL DEFAULT '0.00',
  `artikelBeschreibung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `artikel`
--

INSERT INTO `artikel` (`artikelID`, `artikelName`, `artikelGruppe`, `artikelPreis`, `artikelBeschreibung`) VALUES
(1, 'Abendanzug', 'Kleidung', '100.50', 'schwarz'),
(2, 'Albe ', 'Kleidung', '72.00', 'rot'),
(3, 'Anorak ', 'Kleidung', '50.90', 'gelb'),
(4, 'Anzug ', 'Kleidung', '67.00', 'grün'),
(5, 'Arbeitskittel', 'Kleidung', '98.00', 'schwarz'),
(6, 'Arbeitskleid', 'Kleidung', '70.00', 'rot'),
(7, 'Ärmelschoner', 'Kleidung', '51.00', 'gelb'),
(8, 'Artischocke', 'Lebensmittel', '2.00', ''),
(9, 'Auflageprofil', 'Heimwerker', '55.00', ''),
(10, 'Avocado', 'Lebensmittel', '4.00', 'vitamireich'),
(11, 'Babykleider', 'Kleidung', '54.00', 'grün'),
(12, 'Badeanzug', 'Kleidung', '41416.00', 'schwarz'),
(13, 'Badehose', 'Kleidung', '65.00', 'rot'),
(14, 'Bademantel', 'Kleidung', '85.00', 'gelb'),
(15, 'Ballkleid', 'Kleidung', '21.00', 'grün'),
(16, 'Barret', 'Kleidung', '81.00', 'schwarz'),
(17, 'Baseballkappe', 'Kleidung', '44.00', 'rot'),
(18, 'Baseballmütze', 'Kleidung', '37.00', 'gelb'),
(19, 'Befestigungsprofil H', 'Heimwerker', '28.00', 'für Profis'),
(20, 'Befestigungsprofil ST', 'Heimwerker', '28.00', ''),
(21, 'Befestigungsprofil U', 'Heimwerker', '28.00', ''),
(22, 'Befestigungsprofil UHK', 'Heimwerker', '53.00', 'für Profis'),
(23, 'Befestigungsprofil UVK', 'Heimwerker', '42.00', ''),
(24, 'Befestigungsprofil Z', 'Heimwerker', '34.00', ''),
(25, 'Bergschuh', 'Kleidung', '97.00', 'grün'),
(26, 'Bermudashorts', 'Kleidung', '56.00', 'schwarz'),
(27, 'Bestücken', 'Heimwerker', '43.00', 'für Profis'),
(28, 'Bikini ', 'Kleidung', '69.00', 'rot'),
(29, 'Birret', 'Kleidung', '40.00', 'gelb'),
(30, 'Blattsalate ', 'Lebensmittel', '4.00', ''),
(31, 'Blaumann', 'Kleidung', '44.00', 'schwarz'),
(32, 'Blazer', 'Kleidung', '73.00', 'rot'),
(33, 'Blechplatte AAKAIW', 'Heimwerker', '41.00', ''),
(34, 'Blouson', 'Kleidung', '75.00', 'gelb'),
(35, 'Blumenerde', 'Heimwerker', '21.00', ''),
(36, 'Blumenkohl', 'Lebensmittel', '4.00', 'sehr gesund'),
(37, 'Bluse', 'Kleidung', '89.00', 'grün'),
(38, 'Bohrer', 'Heimwerker', '17.00', 'für Profis'),
(39, 'Bohrungen', 'Heimwerker', '11.00', ''),
(40, 'Broccoli', 'Lebensmittel', '9.00', ''),
(41, 'Deckprofil Fugen H', 'Heimwerker', '9.00', ''),
(42, 'Deckprofil Raster', 'Heimwerker', '53.00', 'für Profis'),
(43, 'Deo', 'Kosmetik', '14.88', ''),
(44, 'Deokristall', 'Kosmetik', '4.00', ''),
(45, 'Distelöl', 'Lebensmittel', '10.00', 'vitamireich'),
(46, 'DUO-Clip', 'Heimwerker', '40.00', ''),
(47, 'Duschbad', 'Kosmetik', '6.00', 'Bio'),
(48, 'Eckplatten gelocht', 'Heimwerker', '13.00', ''),
(49, 'Eckprofil ', 'Heimwerker', '54.00', 'für Profis'),
(50, 'Eyeliner', 'Kosmetik', '5.00', 'Ohne Tierversuche'),
(51, 'Farbbeschichten', 'Heimwerker', '44.00', ''),
(52, 'Flachprofil', 'Heimwerker', '59.00', ''),
(53, 'Fugenband schwarz', 'Heimwerker', '48.00', 'für Profis'),
(54, 'Gesichtswasser', 'Kosmetik', '5.00', ''),
(55, 'Glasfenster', 'Heimwerker', '45.00', ''),
(56, 'Glasklammer E', 'Heimwerker', '39.00', ''),
(57, 'Glasklammer N', 'Heimwerker', '26.00', 'für Profis'),
(58, 'Grüne Bohnen', 'Lebensmittel', '3.00', ''),
(59, 'Gummidichtung', 'Heimwerker', '50.00', ''),
(60, 'Gurke', 'Lebensmittel', '8.00', 'sehr gesund'),
(61, 'Gürtel ', 'Kleidung', '49.00', 'schwarz'),
(62, 'Halteprofil Glas FLA', 'Heimwerker', '11.00', ''),
(63, 'Halteprofil Glas FLI', 'Heimwerker', '43.00', 'für Profis'),
(64, 'Handcreme', 'Kosmetik', '3.00', 'Bio'),
(65, 'Helm A', 'Heimwerker', '46.00', ''),
(66, 'Helm B', 'Heimwerker', '39.00', 'für Profis'),
(67, 'ISO-Clip', 'Heimwerker', '47.00', ''),
(68, 'Jacke', 'Kleidung', '65.00', 'rot'),
(69, 'Jacket', 'Kleidung', '80.00', 'gelb'),
(70, 'Janker', 'Kleidung', '40.00', 'grün'),
(71, 'Jeans ', 'Kleidung', '90.00', 'schwarz'),
(72, 'Klammer E', 'Heimwerker', '10.00', ''),
(73, 'Klammer ESB', 'Heimwerker', '38.00', 'für Profis'),
(74, 'Klammer N', 'Heimwerker', '27.00', ''),
(75, 'Klammer NSB', 'Heimwerker', '20.00', ''),
(76, 'Klemmknopf 16mm', 'Heimwerker', '9.00', 'für Profis'),
(77, 'Klemmknopf 8mm', 'Heimwerker', '15.00', ''),
(78, 'Koffer', 'Heimwerker', '37.00', ''),
(79, 'Kohlgemüse', 'Lebensmittel', '6.00', ''),
(80, 'Körperöl', 'Kosmetik', '9.00', 'Ohne Tierversuche'),
(81, 'Latz', 'Kleidung', '46.00', 'rot'),
(82, 'Latzhose', 'Kleidung', '42.00', 'blau'),
(83, 'Lavaerde', 'Kosmetik', '9.00', ''),
(84, 'Lederhose', 'Kleidung', '90.00', 'grün'),
(85, 'Leinsamen-Öl ', 'Lebensmittel', '3.00', 'vitamireich'),
(86, 'Lidschatten', 'Kosmetik', '4.00', 'Bio'),
(87, 'Lipliner', 'Kosmetik', '2.00', 'Ohne Tierversuche'),
(88, 'Lippenpflege', 'Kosmetik', '7.00', ''),
(89, 'Lippenstifte', 'Kosmetik', '4.00', 'Bio'),
(90, 'Lotion', 'Kosmetik', '9.00', 'Ohne Tierversuche'),
(91, 'Makeup', 'Kosmetik', '2.00', ''),
(92, 'Mandeln', 'Lebensmittel', '8.00', 'Bio'),
(93, 'Mascara', 'Kosmetik', '5.00', 'Bio'),
(94, 'Maschine', 'Heimwerker', '40.00', 'für Profis'),
(95, 'Massagebänder', 'Kosmetik', '8.00', 'Ohne Tierversuche'),
(96, 'Massagebürste', 'Kosmetik', '8.00', ''),
(97, 'Massageöl', 'Kosmetik', '4.00', 'Bio'),
(98, 'Massageroller', 'Kosmetik', '9.00', 'Ohne Tierversuche'),
(99, 'Montagewinkel', 'Heimwerker', '10.00', ''),
(100, 'Nussöl ', 'Lebensmittel', '9.00', 'sehr gesund'),
(101, 'Olivenöl', 'Lebensmittel', '9.00', 'aus Bio-Anbau'),
(102, 'Öllampe', 'Heimwerker', '27.00', ''),
(103, 'Paprika', 'Lebensmittel', '9.00', 'vitamireich'),
(104, 'Pflanzenhaarfarbe', 'Kosmetik', '2.00', ''),
(105, 'Pilze', 'Lebensmittel', '6.00', ''),
(106, 'Pistazien', 'Lebensmittel', '6.00', 'sehr gesund'),
(107, 'Plattenhalter A', 'Heimwerker', '44.00', 'für Profis'),
(108, 'Plattenhalter A spez.', 'Heimwerker', '8.00', ''),
(109, 'Plattenhalter B', 'Heimwerker', '25.00', ''),
(110, 'Puder', 'Kosmetik', '9.00', 'Bio'),
(111, 'Rapsöl ', 'Lebensmittel', '3.00', 'aus Bio-Anbau'),
(112, 'Rasiercreme', 'Kosmetik', '10.00', 'Ohne Tierversuche'),
(113, 'Rasierwasser', 'Kosmetik', '3.00', ''),
(114, 'Riegelprofil', 'Heimwerker', '18.00', 'für Profis'),
(115, 'Röhre 23423', 'Heimwerker', '47.00', ''),
(116, 'Rouge', 'Kosmetik', '8.00', 'Bio'),
(117, 'Rutschsicherung', 'Heimwerker', '39.00', ''),
(118, 'Scharnieren 4098', 'Heimwerker', '32.00', 'für Profis'),
(119, 'Schraube L ', 'Heimwerker', '59.00', ''),
(120, 'Schraube N', 'Heimwerker', '27.00', ''),
(121, 'Seife', 'Kosmetik', '10.00', 'Ohne Tierversuche'),
(122, 'Seil 303', 'Heimwerker', '11.00', 'für Profis'),
(123, 'Seitenklammer L', 'Heimwerker', '46.00', ''),
(124, 'Seitenklammer R', 'Heimwerker', '31.00', ''),
(125, 'Shampoo', 'Kosmetik', '7.00', ''),
(126, 'Sicherheitsgurte', 'Heimwerker', '16.00', 'für Profis'),
(127, 'Spargel', 'Lebensmittel', '9.00', 'vitamireich'),
(128, 'Spinat', 'Lebensmittel', '3.00', ''),
(129, 'Spülung', 'Kosmetik', '10.00', 'Bio'),
(130, 'Stanzungen', 'Heimwerker', '40.00', ''),
(131, 'Stockwerkprofil', 'Heimwerker', '47.00', 'für Profis'),
(132, 'Stulpklammer', 'Heimwerker', '9.00', 'für Profis'),
(133, 'Tomaten', 'Lebensmittel', '4.00', 'sehr gesund'),
(134, 'T-Profil', 'Heimwerker', '59.00', ''),
(135, 'Tragprofil ', 'Heimwerker', '48.00', ''),
(136, 'U-Gummi für Glaspl.', 'Heimwerker', '31.00', 'für Profis'),
(137, 'Unterlagsgummi', 'Heimwerker', '6.00', ''),
(138, 'Untersichtsklammer', 'Heimwerker', '16.00', ''),
(139, 'Verbindungsteil', 'Heimwerker', '13.00', 'für Profis'),
(140, 'Verbindungsteil TSG', 'Heimwerker', '19.00', ''),
(141, 'Verbindungsteil TSV', 'Heimwerker', '13.00', ''),
(142, 'Verbindunsrohr', 'Heimwerker', '47.00', 'für Profis'),
(143, 'Walnüsse', 'Lebensmittel', '2.00', 'Fair Trande'),
(144, 'Weste', 'Kleidung', '28.00', 'schwarz'),
(145, 'Zahnbürste', 'Kosmetik', '3.00', 'Ohne Tierversuche'),
(146, 'Zahnpasta', 'Kosmetik', '10.00', ''),
(147, 'Zucchini ', 'Lebensmittel', '2.00', 'vitamireich'),
(148, 'Zuschnitte', 'Heimwerker', '24.00', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `laender`
--

CREATE TABLE `laender` (
  `LandID` int(3) NOT NULL DEFAULT '0',
  `Land` varchar(40) DEFAULT NULL,
  `Flaeche` int(11) DEFAULT NULL,
  `Einwohner` int(10) DEFAULT NULL,
  `Region` varchar(40) DEFAULT NULL,
  `Hauptstadt` varchar(40) DEFAULT NULL,
  `BIP` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `laender`
--

INSERT INTO `laender` (`LandID`, `Land`, `Flaeche`, `Einwohner`, `Region`, `Hauptstadt`, `BIP`) VALUES
(1, 'Afghanistan', 652230, 30419928, 'Westasien', 'Kabul', 228),
(2, 'Ägypten', 1001450, 83688164, 'Nordafrika', 'Kairo', 1297),
(3, 'Albanien', 28748, 3002859, 'Südosteuropa', 'Tirana', 2504),
(4, 'Algerien', 2381741, 37367226, 'Nordafrika', 'Algier', 2971),
(5, 'Andorra', 468, 85082, 'Südwesteuropa', 'Andorra la Vella', 17009),
(6, 'Angola', 1246700, 18056072, 'Südwestafrika', 'Luanda', 1550),
(7, 'Antigua und Barbuda', 443, 89018, 'Mittelamerika', 'Saint John´s', 11592),
(8, 'Äquatorialguinea', 28051, 685991, 'Zentralafrika', 'Malabo', 4086),
(9, 'Argentinien', 2780400, 42192494, 'Süd-Südamerika', 'Buenos Aires', 4380),
(10, 'Armenien', 29743, 2970495, 'Vorderasien', 'Eriwan', 1270),
(11, 'Aserbaidschan', 86600, 9493600, 'Vorderasien', 'Baku', 1279),
(12, 'Äthiopien', 1104300, 91195675, 'Nordostafrika', 'Addis Abeba', 0),
(13, 'Australien', 7741220, 22015576, 'Indischer', 'Canberra', 33629),
(14, 'Bahamas', 13880, 316182, 'Mittelamerika', 'Nassau', 18256),
(15, 'Bahrain', 760, 1248348, 'Vorderasien', 'Manama', 14728),
(16, 'Bangladesch', 143998, 161083804, 'Südasien', 'Dhaka', 408),
(17, 'Barbados', 430, 287733, 'Mittelamerika', 'Bridgetown', 10747),
(18, 'Belarus', 207600, 9643566, 'Osteuropa', 'Minsk', 3141),
(19, 'Belgien', 30528, 10438353, 'Westeuropa', 'Brüssel', 37930),
(20, 'Belize', 22966, 327719, 'Mittelamerika', 'Belmopan', 4120),
(21, 'Benin', 112622, 9598787, 'Westafrika', 'Porto Novo', 642),
(22, 'Bhutan', 38394, 716896, 'Südasien', 'Thimphu', 879),
(23, 'Bolivien', 1098581, 10290003, 'Zentral-Südamerika', 'Sucre', 1147),
(24, 'Bosnien-Herzegowina', 51197, 3879296, 'Südosteuropa', 'Sarajevo', 2429),
(25, 'Botswana', 581730, 2098018, 'Südafrika', 'Gaborone', 5951),
(26, 'Brasilien', 8514877, 199321413, 'Ost-Südamerika', 'Brasilia', 4124),
(27, 'Brunei', 5765, 408786, 'Südostasien', 'Bandar Seri Begawan', 15764),
(28, 'Bulgarien', 110879, 7037935, 'Südosteuropa', 'Sofia', 3347),
(29, 'Burkina Faso', 274200, 17275115, 'Westafrika', 'Ouagadougou', 449),
(30, 'Burundi', 27830, 10557259, 'Ostafrika', 'Bujumbura', 0),
(31, 'Chile', 756102, 17067369, 'West-Südamerika', 'Santiago de Chile', 6272),
(32, 'China', 9596961, 1343239923, 'Ostasien', 'Peking', 1544),
(33, 'Costa Rica', 51100, 4636348, 'Mittelamerika', 'San José', 4526),
(34, 'Cote d Ivoire', 322463, 21952093, 'Westafrika', 'Yamoussoukro', 886),
(35, 'Dänemark', 43094, 5543453, 'Nordeuropa', 'Kopenhagen', 49182),
(36, 'Deutschland', 357022, 81305856, 'Zentraleuropa', 'Berlin', 35075),
(37, 'Dominika', 751, 73126, 'Mittelamerika', 'Roseau', 3772),
(38, 'Dominikanische Republik', 48670, 10088598, 'Mittelamerika', 'Santo Domingo', 2383),
(39, 'Djibouti', 23200, 774389, 'Nordostafrika', 'Djibouti', 824),
(40, 'Ecuador', 283561, 15223680, 'Nord-West-Südamerika', 'Quito', 2255),
(41, 'El Salvador', 21041, 6090646, 'Mittelamerika', 'San Salvador', 2410),
(42, 'Eritrea', 117600, 6086495, 'Nordostafrika', 'Asmara', 0),
(43, 'Estland', 45228, 1274709, 'Nordosteuropa', 'Tallinn', 9112),
(44, 'Fidschi', 18274, 890057, 'Pazifik', 'Suva', 3287),
(45, 'Finnland', 338145, 5262930, 'Nordeuropa', 'Helsinki', 39098),
(46, 'Frankreich', 551500, 65630692, 'Westeuropa', 'Paris', 35727),
(47, 'Gabun', 267667, 1608321, 'Zentralafrika', 'Libreville', 6035),
(48, 'Gambia', 11295, 1840454, 'Westafrika', 'Banjul', 305),
(49, 'Georgien', 69700, 4570934, 'Vorderasien', 'Tiflis', 927),
(50, 'Ghana', 238533, 24652402, 'Westafrika', 'Accra', 495),
(51, 'Grenada', 344, 109011, 'Mittelamerika', 'Saint George´s', 4394),
(52, 'Griechenland', 131957, 10767827, 'Südosteuropa', 'Athen', 21017),
(53, 'Großbritannien', 243610, 63047162, 'Westeuropa', 'London', 38098),
(54, 'Guatemala', 108889, 14099032, 'Mittelamerika', 'Guatemala-Stadt', 1966),
(55, 'Guinea', 245857, 10884958, 'Westafrika', 'Conakry', 382),
(56, 'Guinea-Bissau', 36125, 1628603, 'Westafrika', 'Bissau', 229),
(57, 'Guyana', 214969, 741908, 'Nord-Südamerika', 'Georgetown', 1035),
(58, 'Haiti', 27750, 9801664, 'Mittelamerika', 'Port-au-Prince', 511),
(59, 'Honduras', 112090, 8296693, 'Mittelamerika', 'Tegucigalpa', 1069),
(60, 'Indien', 3287263, 1205073612, 'Südasien', 'Neu Delhi', 678),
(61, 'Indonesien', 1904569, 248645008, 'Südostasien', 'Jakarta', 1267),
(62, 'Irak', 438317, 31129225, 'Vorderasien', 'Bagdad', 1053),
(63, 'Iran', 1648195, 78868711, 'Vorderasien', 'Teheran', 2810),
(64, 'Irland', 70273, 4722028, 'Westeuropa', 'Dublin', 50303),
(65, 'Island', 103000, 313183, 'Nordeuropa', 'Reykjavik', 52063),
(66, 'Israel', 20770, 7590758, 'Vorderasien', 'Jerusalem', 18303),
(67, 'Italien', 301340, 61261254, 'Südeuropa', 'Rom', 31874),
(68, 'Jamaika', 10991, 2889187, 'Mittelamerika', 'Kingston', 3388),
(69, 'Japan', 377915, 127368088, 'Ostasien', 'Tokio', 37566),
(70, 'Jemen', 527968, 24771809, 'Vorderasien', 'Sana', 586),
(71, 'Jordanien', 89342, 6508887, 'Vorderasien', 'Amman', 2058),
(72, 'Kambodscha', 181035, 14952665, 'Südostasien', 'Phnom Penh', 317),
(73, 'Kamerun', 475440, 20129878, 'Zentralafrika', 'Yaoundé', 882),
(74, 'Kanada', 9984670, 34300083, 'Nordamerika', 'Ottawa', 34028),
(75, 'Kap Verde', 4033, 523568, 'Westafrika', 'Praia', 2479),
(76, 'Kasachstan', 2724900, 17522010, 'Zentralasien', 'Astana', 3453),
(77, 'Katar', 11586, 1951591, 'Vorderasien', 'Doha', 29800),
(78, 'Kenia', 580367, 43013341, 'Ostafrika', 'Nairobi', 513),
(79, 'Kirgisistan', 199951, 5496737, 'Vorderasien', 'Bischkek', 444),
(80, 'Kiribati', 811, 101998, 'Pazifik', 'Bairiki', 768),
(81, 'Kolumbien', 1138910, 45239079, 'Nord-West-Südamerika', 'Bogotá', 2358),
(82, 'Komoren', 2235, 737284, 'Ostafrika', 'Moroni', 620),
(83, 'Kongo', 342000, 4366266, 'Zentralafrika', 'Brazzaville', 1563),
(84, 'Kongo, Dem. Republik', 2344858, 73599190, 'Zentralafrika', 'Kinshasa', 0),
(85, 'Korea, Demokratische Volksrepublik', 120538, 24589122, 'Südostasien', '', 0),
(86, 'Korea, Republik', 99720, 48860500, 'Südostasien', '', 0),
(87, 'Kroatien', 56594, 4480043, 'Südosteuropa', 'Zagreb', 7801),
(88, 'Kuba', 110860, 11075244, 'Mittelamerika', 'Havanna', 2643),
(89, 'Kuwait', 17818, 2646314, 'Vorderasien', 'Kuwait-Stadt', 22424),
(90, 'Laos', 236800, 6586266, 'Südostasien', 'Vientiane', 451),
(91, 'Lesotho', 30355, 1930493, 'Südafrika', 'Maseru', 702),
(92, 'Lettland', 64589, 2191580, 'Nordosteuropa', 'Riga', 6559),
(93, 'Libanon', 10400, 4140289, 'Vorderasien', 'Beirut', 5434),
(94, 'Liberia', 111369, 3887886, 'Westafrika', 'Monrovia', 0),
(95, 'Libyen', 1759540, 5613380, 'Nordafrika', 'Tripolis', 5701),
(96, 'Liechtenstein', 160, 36713, 'Zentraleuropa', 'Vaduz', 95000),
(97, 'Litauen', 65300, 3525761, 'Nordosteuropa', 'Vilnius', 6853),
(98, 'Luxemburg', 2586, 509074, 'Zentraleuropa', 'Luxemburg', 77595),
(99, 'Madagaskar', 587041, 22005222, 'Südafrika', 'Antananarivo', 276),
(100, 'Malawi', 118484, 16323044, 'Südafrika', 'Lilongwe', 164),
(101, 'Malaysia', 329847, 29179952, 'Südostasien', 'Kuala Lumpur', 4930),
(102, 'Malediven', 298, 394451, 'Südasien', 'Male', 2472),
(103, 'Mali', 1240192, 15494466, 'Westafrika', 'Bamako', 444),
(104, 'Malta', 316, 409836, 'Südeuropa', 'Valletta', 14001),
(105, 'Marokko', 446550, 32309239, 'Nordafrika', 'Rabat', 1758),
(106, 'Marschall-Inseln', 181, 68480, 'Pazifik', 'Majuro', 0),
(107, 'Mauretanien', 1030700, 3359185, 'Westafrika', 'Nouakchott', 529),
(108, 'Mauritius', 2040, 1313095, 'Südostafrika', 'Port Louis', 5033),
(109, 'Mazedonien', 25713, 2082370, 'Südosteuropa', 'Skopje', 2404),
(110, 'Mexiko', 1964375, 114975406, 'Mittelamerika', 'Mexiko-Stadt', 6771),
(111, 'Mikronesien', 702, 106487, 'Westpazifik', 'Palikir', 1970),
(112, 'Moldawien', 33851, 3656843, 'Südosteuropa', 'Chisinau', 803),
(113, 'Monaco', 2, 30510, 'Westeuropa', 'Monaco', 0),
(114, 'Mongolei', 1564116, 3179997, 'Zentralasien', 'Ulan Bator', 547),
(115, 'Montenegro', 13812, 657394, 'Südosteuropa', 'Podgorica', 3800),
(116, 'Mosambik', 799380, 23515934, 'Südafrika', 'Maputo', 343),
(117, 'Myanmar', 676578, 54584650, 'Südostasien', 'Pyinmana', 160),
(118, 'Namibia', 824292, 2165828, 'Südwestafrika', 'Windhoek', 2360),
(119, 'Nepal', 147181, 29890686, 'Südasien', 'Kathmandu', 247),
(120, 'Neuseeland', 267710, 4327944, 'Pazifik', 'Wellington', 26291),
(121, 'Nicaragua', 130370, 5727707, 'Mittelamerika', 'Managua', 821),
(122, 'Niederlande', 41543, 16730632, 'Westeuropa', 'Amsterdam', 38320),
(123, 'Niger', 1267000, 16344687, 'Westafrika', 'Niamey', 268),
(124, 'Nigeria', 923768, 170123740, 'Westafrika', 'Abuja', 626),
(125, 'Norwegen', 323802, 4707270, 'Nordeuropa', 'Oslo', 61852),
(126, 'Oman', 309500, 3090150, 'Vorderasien', 'Maskat', 10316),
(127, 'Österreich', 83871, 8219743, 'Zentraleuropa', 'Wien', 39804),
(128, 'Pakistan', 796095, 190291129, 'Südasien', 'Islamabad', 591),
(129, 'Palau', 459, 21032, 'Pazifik', 'Melekeok', 6820),
(130, 'Panama', 75420, 3510045, 'Mittelamerika', 'Panama-Stadt', 4689),
(131, 'Papua-Neuguinea', 462840, 6310129, 'Westpazifik', 'Port Moresby', 660),
(132, 'Paraguay', 406752, 6541591, 'Zentral-Südamerika', 'Asunción', 1170),
(133, 'Peru', 1285216, 29549517, 'West-Südamerika', 'Lima', 2484),
(134, 'Philippinen', 30000, 103775002, 'Südostasien', 'Manila', 1079),
(135, 'Polen', 312685, 38415284, 'Zentraleuropa', 'Warschau', 8082),
(136, 'Portugal', 92090, 10781459, 'Südwesteuropa', 'Lissabon', 18105),
(137, 'Ruanda', 26338, 11689696, 'Ostafrika', 'Kigali', 235),
(138, 'Rumänien', 238391, 21848504, 'Südosteuropa', 'Bukarest', 3600),
(139, 'Russische Föderation', 17098242, 142517670, 'Osteuropa', 'Moskau', 5341),
(140, 'Salomonen', 28896, 584578, 'Pazifik', 'Honiara', 570),
(141, 'Sambia', 752618, 13817479, 'Südafrika', 'Lusaka', 537),
(142, 'Samoa', 2831, 194320, 'Pazifik', 'Apia', 1821),
(143, 'San Marino', 61, 32140, 'Südeuropa', 'San Marino Stadt', 27000),
(144, 'Sao Tome', 964, 183176, 'Westafrika', 'Sao Tomé', 419),
(145, 'Saudi-Arabien', 2149690, 26534504, 'Vorderasien', 'Riad', 11085),
(146, 'Schweden', 450295, 9103788, 'Nordeuropa', 'Stockholm', 42392),
(147, 'Schweiz', 41277, 7925517, 'Zentraleuropa', 'Bern', 52879),
(148, 'Senegal', 196722, 12969606, 'Westafrika', 'Dakar', 835),
(149, 'Serbien', 77474, 7276604, 'Südosteuropa', 'Belgrad', 4400),
(150, 'Seychellen', 455, 90024, 'Ostafrika', 'Victoria', 7504),
(151, 'Sierra Leone', 71740, 5485998, 'Westafrika', 'Freetown', 208),
(152, 'Simbabwe', 390757, 12619600, 'Südafrika', 'Harare', 1045),
(153, 'Singapur', 697, 5353494, 'Südostasien', 'Singapur', 26481),
(154, 'Slowakei', 49035, 5483088, 'Zentraleuropa', 'Bratislava', 9305),
(155, 'Slowenien', 20273, 1996617, 'Zentraleuropa', 'Ljubljana', 17606),
(156, 'Somalia', 637657, 10085638, 'Nordostafrika', 'Mogadischu', 0),
(157, 'Spanien', 505370, 47042984, 'Südwesteuropa', 'Madrid', 27074),
(158, 'Sri Lanka', 65610, 21481334, 'Südasien', 'Colombo', 1088),
(159, 'Saint Kitts und Nevis', 261, 50726, 'Mittelamerika', 'Basseterre', 10130),
(160, 'Saint Lucia', 616, 162178, 'Mittelamerika', 'Castries', 4095),
(161, 'Saint Vincent und die Grenadinen', 389, 103537, 'Mittelamerika', 'Kingstown', 3719),
(162, 'Südafrika', 1219090, 48810427, 'Südafrika', 'Pretoria', 4698),
(163, 'Sudan', 1861484, 34206710, 'Nordostafrika', 'Khartum', 718),
(164, 'Südsudan', 644329, 10625176, 'Zentralafrika', 'Juba', 0),
(165, 'Surinam', 163820, 560157, 'Nord-Südamerika', 'Paramaribo', 2452),
(166, 'Swasiland', 17364, 1386914, 'Südostafrika', 'Mbabane', 2298),
(167, 'Syrien', 185180, 22530746, 'Vorderasien', 'Damaskus', 1378),
(168, 'Tadschikistan', 143100, 7768385, 'Vorderasien', 'Duschanbe', 369),
(169, 'Taiwan', 35980, 23234936, 'Ostasien', 'Taipeh', 14860),
(170, 'Tansania', 947300, 46912768, 'Ostafrika', 'Dodoma', 323),
(171, 'Thailand', 513120, 67091089, 'Südostasien', 'Bangkok', 2665),
(172, 'Togo', 56785, 6961049, 'Westafrika', 'Lomé', 414),
(173, 'Tonga', 747, 106146, 'Pazifik', 'Nuku´alofa', 2226),
(174, 'Trinidad und Tobago', 5128, 1226383, 'Mittelamerika', 'Port of Spain', 10533),
(175, 'Tschad', 1284000, 10975648, 'Zentralafrika', 'N`Djamena', 637),
(176, 'Tschechien', 78867, 10177300, 'Zentraleuropa', 'Prag', 12304),
(177, 'Tunesien', 163610, 10732900, 'Nordafrika', 'Tunis', 3154),
(178, 'Türkei', 783562, 79749461, 'Vorderasien/Südosteuropa', 'Ankara', 4744),
(179, 'Turkmenistan', 488100, 5054828, 'Vorderasien', 'Aschgabat', 2756),
(180, 'Tuvalu', 26, 10619, 'Pazifik', 'Funafuti', 1400),
(181, 'Uganda', 241038, 33640833, 'Ostafrika', 'Kampala', 309),
(182, 'Ukraine', 603550, 44854065, 'Osteuropa', 'Kiew', 1748),
(183, 'Ungarn', 93028, 9958453, 'Zentraleuropa', 'Budapest', 10978),
(184, 'Uruguay', 176215, 3316328, 'Süd-Ost-Südamerika', 'Montevideo', 3837),
(185, 'Usbekistan', 447400, 28394180, 'Zentralasien', 'Taschkent', 419),
(186, 'Vanuatu', 12189, 256155, 'Pazifik', 'Port Vila', 1504),
(187, 'Vatikanstadt', 0, 836, 'Südeuropa', 'Vatikanstadt', 0),
(188, 'Venezuela', 912050, 28047938, 'Nord-Südamerika', 'Caracas', 4627),
(189, 'Vereinigte Arabische Emirate', 83600, 5314317, 'Vorderasien', 'Abu Dhabi', 22009),
(190, 'USA', 9826675, 313847465, 'Nordamerika', 'Washington', 41917),
(191, 'Vietnam', 331210, 91519289, 'Südostasien', 'Hanoi', 566),
(192, 'Zentralafrikanische Republik', 622984, 5057208, 'Zentralafrika', 'Bangui', 371),
(193, 'Zypern', 9251, 1138071, 'Südosteuropa', 'Nikosia', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userRole` int(11) NOT NULL DEFAULT '1',
  `userPassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`userID`, `userName`, `userEmail`, `userRole`, `userPassword`) VALUES
(1, 'Alfred', 'aa@aa.aa', 2, 'aaa'),
(2, 'Berta', 'bb@bb.bb', 2, ''),
(3, 'Chris', 'cc@cc.cc', 1, ''),
(4, 'Dora', 'dd@dd.dd', 1, ''),
(5, 'Andi', 'andi@aa.aa', 1, '$2y$12$7lSGjrA9gUc/NrFJYroBo.AKvKrviO2MqiYE6N/PVw.EmwsbhTW3m'),
(6, 'Test', 'test@test.at', 1, '$2y$12$FvMud031IAoBPpZMsFX6JuHiul7z8BhxFVL8iFT5Lo5saomieS8zu');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikelID`);

--
-- Indizes für die Tabelle `laender`
--
ALTER TABLE `laender`
  ADD PRIMARY KEY (`LandID`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

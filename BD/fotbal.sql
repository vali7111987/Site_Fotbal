-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2014 at 09:13 PM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fotbal`
--

-- --------------------------------------------------------

--
-- Table structure for table `detalii`
--

CREATE TABLE IF NOT EXISTS `detalii` (
  `id` int(11) DEFAULT NULL,
  `nume_complet` char(50) DEFAULT NULL,
  `data_fondarii` char(30) DEFAULT NULL,
  `stadion` char(30) DEFAULT NULL,
  `campionat` char(20) DEFAULT NULL,
  `presedinte` char(30) DEFAULT NULL,
  `antrenor` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detalii`
--

INSERT INTO `detalii` (`id`, `nume_complet`, `data_fondarii`, `stadion`, `campionat`, `presedinte`, `antrenor`) VALUES
(1, 'Real Madrid Club de Futbol.', '6 martie 1902', 'Santiago Bernabeu,      Madrid', 'La Liga', 'Florentino Perez', 'Carlo Ancelotti'),
(2, 'Futbol Club Barcelona', '29 noiembrie 1889', 'Camp Nou (99.786 locuri)', 'La Liga\n', 'Sandro Rosell', 'Gerardo Martino'),
(3, 'Fussball-Club Bayern Munchen e.V.', '27 februarie 1900', 'Allianz Aren (71.137 locuri)', 'Bundesliga', 'Karl Hopfner', 'Josep Guardiola'),
(4, 'Chelsea Football Club Londra', '10 martie 1905', 'Stamford Bridge,Fulham, Londra', 'Premier League', 'Roman Abramovici', 'Jose Mourinho'),
(5, 'ManchesteUnited Football Club', '1878', 'Old Traffor Manchester, Anglia', 'Premier League', 'Joel & Avram Glazer', 'Ryan Giggs'),
(6, 'Sport Lisboa e Benfica', '28 februarie 1904', 'Estadio da Luz(65.647 locuri)', 'Primeira Liga', 'Luis Filipe Vieira', 'Jorge Jesus'),
(7, 'Club Atletico de Madrid, S.A.D.', '26 aprilie 1903', 'Estadio Vicente Calder?n Madri', 'La Liga', 'Enrique Cerezo', 'Diego Simeone'),
(8, ' Valencia Club de F?tbol', '1919', 'Mestalla, Valencia, Comunidad', 'La Liga\n', 'Manuel Llorente', 'Mauricio Pellegrino'),
(9, 'Arsenal Football Club', '1886', 'Emirates Stadium (60.361 locur', 'Premier League', 'Sir John "Chips" Keswick', 'Arsene Wenger'),
(10, ' Futebol Clube do Porto', '28 septembrie 1893', 'Estadio do Dragao  (52.399 loc', 'Primeira Liga', 'Pinto da Costa', 'Vitor Pereira'),
(11, 'Associazione Calcio Milan S.p.A.', '16 decembrie 1899', 'San Siro\n(85.700 locuri)', 'Serie A\n', 'Silvio Berlusconi', 'Clarence Seedorf'),
(12, 'Olympique Lyonnais', '1899/1950', 'Stade de Gerland, Lyon (40.500', ' Ligue 1', 'Jean-Michel Aulas', 'Rami Garde'),
(13, 'Football Club Internazionale Milano SpA', ' 9 martie 1908', 'Giuseppe Meazza, Milano (80.07', 'Serie A', 'Erick Thohir', 'Walter Mazzarri'),
(14, 'FC Gelsenkirchen-Schalke 04 e.V.', '4 mai 1904', 'Veltins-Arena, Gelsenkirchen', 'Bundesliga', 'Josef Schnusenberg', 'Ralf Rangnick'),
(15, 'Ballspielverein Borussia 09 e. V. Dortmund', '19 decembrie 1909', 'Westfalenstadion  (80.645 locu', 'Bundesliga', 'Reinhard Rauball', 'Jurgen Klopp'),
(16, 'Juventus Football Club S.p.A', '1 noiembrie 1897', 'Juventus Stadium(41.254 locuri', 'Serie A', 'Andrea Agnelli', 'Antonio Conte'),
(17, 'Paris Saint-Germain', '12-Aug-70', 'Parc des Princes, Paris(48.710', ' Ligue 1', 'Nasser Al-Khela?fi', 'Laurent Blanc'),
(18, 'Fotbal Club Shakhtar Donetsk', '1936', 'Donbass Arena\n(51.504 locuri)', 'Prima Liga Ucrainian', 'Rinat Ahmetov', 'Mircea Lucescu'),
(19, 'Tottenham Hotspur Football Club', '1882', 'White Hart Lane(36.310 locuri', 'Premier League', 'Daniel Levy', 'Tim Sherwood'),
(20, 'Liverpool Football Club', '3 iunie 1892', 'Anfield,Liverpool      (45.276', 'Premier League', 'Tom Werner', 'Brendan Rodgers'),
(21, 'Futbolinyj klub Zenit', '30 mai 1925', 'Stadionul Petrovski\nSankt Pete', 'Prima Liga Rusa', 'Aleksandr Diukov', 'Sergei Semak'),
(22, 'Manchester City Football Club', '1880', 'Etihad Stadium Manchester(47.0', 'Premier League', 'Mansour bin Zayed Al Nahyan', 'Manuel Pellegrini'),
(23, 'Bayer 04 Leverkusen Fussball', '1 iulie 1904', 'BayArena\n(30.210 locuri)', 'Bundesliga', 'Michael Schade', 'Sascha Lewandowski'),
(24, 'Olympique de Marseille', '1899', 'Stade Velodrome, Marsilia(60.0', 'Ligue 1', 'Vincent Labrune', 'Jos? Anigo'),
(25, 'Sevilla Futbol Club S.A.D.', '14 octombrie 1905', 'Ramon Sanchez Pizjuan, Sevilia', 'La Liga', 'Jose Castro Carmona', 'Unai Emery'),
(26, 'Municipal Institution Football Club Rubin Kazan', '1958', 'Stadionul Central, Kazan(30.10', 'Prima Lig? Rus?', 'Alexandr Gusev', 'Gurban Berdiev'),
(27, 'Societa Sportiva Calcio Napoli SpA', '1-Aug-26', 'Stadio San Paolo,\nNapoli, Camp', 'Serie A', 'Aurelio De Laurentiis', 'Rafael Benitez'),
(28, 'Clubul Sportiv Central al Armatei Moscova', '27-Aug-11', 'Arena Himki\n(18.636 locuri)', 'Prima Liga Rusa', 'Evgheni Ghiner', 'Leonid Sluski'),
(29, 'Philips Sport Vereniging NV', '31-Aug-13', 'Philips StadionEindhoven (3500', 'Eredivisie', 'Peter Swinkels', 'Fred Rutten'),
(30, 'Amsterdamsche Football Club Ajax NV', '18 martie 1900', 'Amsterdam ArenA, Amsterdam', 'Eredivisie', 'Hennie Henrichs', 'Frank De Boer'),
(1, 'Real Madrid Club de F?tbol.', '6 martie 1902', 'Santiago Bernab?u,      Madrid', 'La Liga', 'Florentino P?rez', 'Carlo Ancelotti'),
(2, 'F?tbol Club Barcelona', '29 noiembrie 1889', 'Camp Nou (99.786 locuri)', 'La Liga\n', 'Sandro Rosell', 'Gerardo Martino'),
(3, 'Fussball-Club Bayern M?nchen e.V.', '27 februarie 1900', 'Allianz Aren (71.137 locuri)', 'Bundesliga', 'Karl Hopfner', 'Josep Guardiola'),
(4, 'Chelsea Football Club Londra', '10 martie 1905', 'Stamford Bridge,Fulham, Londra', 'Premier League', 'Roman Abramovici', 'Jose Mourinho'),
(5, 'ManchesteUnited Football Club', '1878', 'Old Traffor Manchester, Anglia', 'Premier League', 'Joel & Avram Glazer', 'Ryan Giggs (juc?tor-antrenor i'),
(6, 'Sport Lisboa e Benfica', '28 februarie 1904', 'Est?dio da Luz\n(65.647 locuri)', 'Primeira Liga', 'Lu?s Filipe Vieira', 'Jorge Jesus'),
(7, 'Club Atl?tico de Madrid, S.A.D.', '26 aprilie 1903', 'Estadio Vicente Calder?n Madri', 'La Liga', 'Enrique Cerezo', 'Diego Simeone'),
(8, ' Valencia Club de F?tbol', '1919', 'Mestalla, Valencia, Comunidad', 'La Liga\n', 'Manuel Llorente', 'Mauricio Pellegrino'),
(9, 'Arsenal Football Club', '1886', 'Emirates Stadium\n(60.361 locur', 'Premier League', 'Sir John "Chips" Keswick', 'Ars?ne Wenger'),
(10, ' Futebol Clube do Porto', '28 septembrie 1893', 'Est?dio do Drag?o\n(52.399 locu', 'Primeira Liga', 'Pinto da Costa', 'V?tor Pereira'),
(11, 'Associazione Calcio Milan S.p.A.', '16 decembrie 1899', 'San Siro\n(85.700 locuri)', 'Serie A\n', 'Silvio Berlusconi', 'Clarence Seedorf'),
(12, 'Olympique Lyonnais', '1899/1950', 'Stade de Gerland, Lyon (40.500', ' Ligue 1', 'Jean-Michel Aulas', 'R?mi Garde'),
(13, 'Football Club Internazionale Milano SpA', ' 9 martie 1908', 'Giuseppe Meazza, Milano (80.07', 'Serie A', 'Erick Thohir', 'Walter Mazzarri'),
(14, 'FC Gelsenkirchen-Schalke 04 e.V.', '4 mai 1904', 'Veltins-Arena, Gelsenkirchen', 'Bundesliga', 'Josef Schnusenberg', 'Ralf Rangnick'),
(15, 'Ballspielverein Borussia 09 e. V. Dortmund', '19 decembrie 1909', 'Westfalenstadion  (80.645 locu', 'Bundesliga', 'Reinhard Rauball', 'J?rgen Klopp'),
(16, 'Juventus Football Club S.p.A', '1 noiembrie 1897', 'Juventus Stadium\n(41.254 locur', 'Serie A', 'Andrea Agnelli', 'Antonio Conte'),
(17, 'Paris Saint-Germain', '12-Aug-70', 'Parc des Princes, Paris\n(48.71', ' Ligue 1', 'Nasser Al-Khela?fi', 'Laurent Blanc'),
(18, 'Fotbal Club Shakhtar Donetsk', '1936', 'Donbass Arena\n(51.504 locuri)', 'Prima Lig? Ucrainian', 'Rinat Ahmetov', 'Mircea Lucescu'),
(19, 'Tottenham Hotspur Football Club', '1882', 'White Hart Lane\n(36.310 locuri', 'Premier League', 'Daniel Levy', 'Tim Sherwood'),
(20, 'Liverpool Football Club', '3 iunie 1892', 'Anfield,\nLiverpool\n(45.276[1]', 'Premier League', 'Tom Werner', 'Brendan Rodgers'),
(21, 'Futbol?nyj klub Zenit', '30 mai 1925', 'Stadionul Petrovski\nSankt Pete', 'Prima Lig? Rus?', 'Aleksandr Diukov', 'Sergei Semak'),
(22, 'Manchester City Football Club', '1880', 'Etihad Stadium\nManchester\n(47.', 'Premier League', 'Mansour bin Zayed Al Nahyan', 'Manuel Pellegrini'),
(23, 'Bayer 04 Leverkusen Fu?ball', '1 iulie 1904', 'BayArena\n(30.210 locuri)', 'Bundesliga', 'Michael Schade', 'Sascha Lewandowski'),
(24, 'Olympique de Marseille', '1899', 'Stade V?lodrome, Marsilia\n(60.', 'Ligue 1', 'Vincent Labrune', 'Jos? Anigo'),
(25, 'Sevilla F?tbol Club S.A.D.', '14 octombrie 1905', 'Ram?n S?nchez Pizju?n, Sevilia', 'La Liga', 'Jos? Castro Carmona', 'Unai Emery'),
(26, 'Municipal Institution Football Club Rubin Kazan', '1958', 'Stadionul Central, Kazan\n(30.1', 'Prima Lig? Rus?', 'Alexandr Gusev', 'Gurban Berdiev'),
(27, 'Societ? Sportiva Calcio Napoli SpA', '1-Aug-26', 'Stadio San Paolo,\nNapoli, Camp', 'Serie A', 'Aurelio De Laurentiis', 'Rafael Ben?tez'),
(28, 'Clubul Sportiv Central al Armatei Moscova', '27-Aug-11', 'Arena Himki\n(18.636 locuri)', 'Prima Lig? Rus?', 'Evgheni Ghiner', 'Leonid Slu?ki'),
(29, 'Philips Sport Vereniging NV', '31-Aug-13', 'Philips Stadion\nEindhoven\n(35.', 'Eredivisie', 'Peter Swinkels', 'Fred Rutten'),
(30, 'Amsterdamsche Football Club Ajax NV', '18 martie 1900', 'Amsterdam ArenA, Amsterdam (54', 'Eredivisie', 'Hennie Henrichs', 'Frank De Boer'),
(1, 'Real Madrid Club de Futbol.', '6 martie 1902', 'Santiago Bernabeu,      Madrid', 'La Liga', 'Florentino Perez', 'Carlo Ancelotti'),
(2, 'Futbol Club Barcelona', '29 noiembrie 1889', 'Camp Nou (99.786 locuri)', 'La Liga\n', 'Sandro Rosell', 'Gerardo Martino'),
(3, 'Fussball-Club Bayern Munchen e.V.', '27 februarie 1900', 'Allianz Aren (71.137 locuri)', 'Bundesliga', 'Karl Hopfner', 'Josep Guardiola'),
(4, 'Chelsea Football Club Londra', '10 martie 1905', 'Stamford Bridge,Fulham, Londra', 'Premier League', 'Roman Abramovici', 'Jose Mourinho'),
(5, 'ManchesteUnited Football Club', '1878', 'Old Traffor Manchester, Anglia', 'Premier League', 'Joel & Avram Glazer', 'Ryan Giggs'),
(6, 'Sport Lisboa e Benfica', '28 februarie 1904', 'Estadio da Luz(65.647 locuri)', 'Primeira Liga', 'Luis Filipe Vieira', 'Jorge Jesus'),
(7, 'Club Atletico de Madrid, S.A.D.', '26 aprilie 1903', 'Estadio Vicente Calder?n Madri', 'La Liga', 'Enrique Cerezo', 'Diego Simeone'),
(8, ' Valencia Club de F?tbol', '1919', 'Mestalla, Valencia, Comunidad', 'La Liga\n', 'Manuel Llorente', 'Mauricio Pellegrino'),
(9, 'Arsenal Football Club', '1886', 'Emirates Stadium (60.361 locur', 'Premier League', 'Sir John "Chips" Keswick', 'Arsene Wenger'),
(10, ' Futebol Clube do Porto', '28 septembrie 1893', 'Estadio do Dragao  (52.399 loc', 'Primeira Liga', 'Pinto da Costa', 'Vitor Pereira'),
(11, 'Associazione Calcio Milan S.p.A.', '16 decembrie 1899', 'San Siro\n(85.700 locuri)', 'Serie A\n', 'Silvio Berlusconi', 'Clarence Seedorf'),
(12, 'Olympique Lyonnais', '1899/1950', 'Stade de Gerland, Lyon (40.500', ' Ligue 1', 'Jean-Michel Aulas', 'Rami Garde'),
(13, 'Football Club Internazionale Milano SpA', ' 9 martie 1908', 'Giuseppe Meazza, Milano (80.07', 'Serie A', 'Erick Thohir', 'Walter Mazzarri'),
(14, 'FC Gelsenkirchen-Schalke 04 e.V.', '4 mai 1904', 'Veltins-Arena, Gelsenkirchen', 'Bundesliga', 'Josef Schnusenberg', 'Ralf Rangnick'),
(15, 'Ballspielverein Borussia 09 e. V. Dortmund', '19 decembrie 1909', 'Westfalenstadion  (80.645 locu', 'Bundesliga', 'Reinhard Rauball', 'Jurgen Klopp'),
(16, 'Juventus Football Club S.p.A', '1 noiembrie 1897', 'Juventus Stadium(41.254 locuri', 'Serie A', 'Andrea Agnelli', 'Antonio Conte'),
(17, 'Paris Saint-Germain', '12-Aug-70', 'Parc des Princes, Paris(48.710', ' Ligue 1', 'Nasser Al-Khela?fi', 'Laurent Blanc'),
(18, 'Fotbal Club Shakhtar Donetsk', '1936', 'Donbass Arena\n(51.504 locuri)', 'Prima Liga Ucrainian', 'Rinat Ahmetov', 'Mircea Lucescu'),
(19, 'Tottenham Hotspur Football Club', '1882', 'White Hart Lane(36.310 locuri', 'Premier League', 'Daniel Levy', 'Tim Sherwood'),
(20, 'Liverpool Football Club', '3 iunie 1892', 'Anfield,Liverpool      (45.276', 'Premier League', 'Tom Werner', 'Brendan Rodgers'),
(21, 'Futbolinyj klub Zenit', '30 mai 1925', 'Stadionul Petrovski\nSankt Pete', 'Prima Liga Rusa', 'Aleksandr Diukov', 'Sergei Semak'),
(22, 'Manchester City Football Club', '1880', 'Etihad Stadium Manchester(47.0', 'Premier League', 'Mansour bin Zayed Al Nahyan', 'Manuel Pellegrini'),
(23, 'Bayer 04 Leverkusen Fussball', '1 iulie 1904', 'BayArena\n(30.210 locuri)', 'Bundesliga', 'Michael Schade', 'Sascha Lewandowski'),
(24, 'Olympique de Marseille', '1899', 'Stade Velodrome, Marsilia(60.0', 'Ligue 1', 'Vincent Labrune', 'Jos? Anigo'),
(25, 'Sevilla Futbol Club S.A.D.', '14 octombrie 1905', 'Ramon Sanchez Pizjuan, Sevilia', 'La Liga', 'Jose Castro Carmona', 'Unai Emery'),
(26, 'Municipal Institution Football Club Rubin Kazan', '1958', 'Stadionul Central, Kazan(30.10', 'Prima Lig? Rus?', 'Alexandr Gusev', 'Gurban Berdiev'),
(27, 'Societa Sportiva Calcio Napoli SpA', '1-Aug-26', 'Stadio San Paolo,\nNapoli, Camp', 'Serie A', 'Aurelio De Laurentiis', 'Rafael Benitez'),
(28, 'Clubul Sportiv Central al Armatei Moscova', '27-Aug-11', 'Arena Himki\n(18.636 locuri)', 'Prima Liga Rusa', 'Evgheni Ghiner', 'Leonid Sluski'),
(29, 'Philips Sport Vereniging NV', '31-Aug-13', 'Philips StadionEindhoven (3500', 'Eredivisie', 'Peter Swinkels', 'Fred Rutten'),
(30, 'Amsterdamsche Football Club Ajax NV', '18 martie 1900', 'Amsterdam ArenA, Amsterdam', 'Eredivisie', 'Hennie Henrichs', 'Frank De Boer'),
(1, 'Real Madrid Club de F?tbol.', '6 martie 1902', 'Santiago Bernab?u,      Madrid', 'La Liga', 'Florentino P?rez', 'Carlo Ancelotti'),
(2, 'F?tbol Club Barcelona', '29 noiembrie 1889', 'Camp Nou (99.786 locuri)', 'La Liga\n', 'Sandro Rosell', 'Gerardo Martino'),
(3, 'Fussball-Club Bayern M?nchen e.V.', '27 februarie 1900', 'Allianz Aren (71.137 locuri)', 'Bundesliga', 'Karl Hopfner', 'Josep Guardiola'),
(4, 'Chelsea Football Club Londra', '10 martie 1905', 'Stamford Bridge,Fulham, Londra', 'Premier League', 'Roman Abramovici', 'Jose Mourinho'),
(5, 'ManchesteUnited Football Club', '1878', 'Old Traffor Manchester, Anglia', 'Premier League', 'Joel & Avram Glazer', 'Ryan Giggs (juc?tor-antrenor i'),
(6, 'Sport Lisboa e Benfica', '28 februarie 1904', 'Est?dio da Luz\n(65.647 locuri)', 'Primeira Liga', 'Lu?s Filipe Vieira', 'Jorge Jesus'),
(7, 'Club Atl?tico de Madrid, S.A.D.', '26 aprilie 1903', 'Estadio Vicente Calder?n Madri', 'La Liga', 'Enrique Cerezo', 'Diego Simeone'),
(8, ' Valencia Club de F?tbol', '1919', 'Mestalla, Valencia, Comunidad', 'La Liga\n', 'Manuel Llorente', 'Mauricio Pellegrino'),
(9, 'Arsenal Football Club', '1886', 'Emirates Stadium\n(60.361 locur', 'Premier League', 'Sir John "Chips" Keswick', 'Ars?ne Wenger'),
(10, ' Futebol Clube do Porto', '28 septembrie 1893', 'Est?dio do Drag?o\n(52.399 locu', 'Primeira Liga', 'Pinto da Costa', 'V?tor Pereira'),
(11, 'Associazione Calcio Milan S.p.A.', '16 decembrie 1899', 'San Siro\n(85.700 locuri)', 'Serie A\n', 'Silvio Berlusconi', 'Clarence Seedorf'),
(12, 'Olympique Lyonnais', '1899/1950', 'Stade de Gerland, Lyon (40.500', ' Ligue 1', 'Jean-Michel Aulas', 'R?mi Garde'),
(13, 'Football Club Internazionale Milano SpA', ' 9 martie 1908', 'Giuseppe Meazza, Milano (80.07', 'Serie A', 'Erick Thohir', 'Walter Mazzarri'),
(14, 'FC Gelsenkirchen-Schalke 04 e.V.', '4 mai 1904', 'Veltins-Arena, Gelsenkirchen', 'Bundesliga', 'Josef Schnusenberg', 'Ralf Rangnick'),
(15, 'Ballspielverein Borussia 09 e. V. Dortmund', '19 decembrie 1909', 'Westfalenstadion  (80.645 locu', 'Bundesliga', 'Reinhard Rauball', 'J?rgen Klopp'),
(16, 'Juventus Football Club S.p.A', '1 noiembrie 1897', 'Juventus Stadium\n(41.254 locur', 'Serie A', 'Andrea Agnelli', 'Antonio Conte'),
(17, 'Paris Saint-Germain', '12-Aug-70', 'Parc des Princes, Paris\n(48.71', ' Ligue 1', 'Nasser Al-Khela?fi', 'Laurent Blanc'),
(18, 'Fotbal Club Shakhtar Donetsk', '1936', 'Donbass Arena\n(51.504 locuri)', 'Prima Lig? Ucrainian', 'Rinat Ahmetov', 'Mircea Lucescu'),
(19, 'Tottenham Hotspur Football Club', '1882', 'White Hart Lane\n(36.310 locuri', 'Premier League', 'Daniel Levy', 'Tim Sherwood'),
(20, 'Liverpool Football Club', '3 iunie 1892', 'Anfield,\nLiverpool\n(45.276[1]', 'Premier League', 'Tom Werner', 'Brendan Rodgers'),
(21, 'Futbol?nyj klub Zenit', '30 mai 1925', 'Stadionul Petrovski\nSankt Pete', 'Prima Lig? Rus?', 'Aleksandr Diukov', 'Sergei Semak'),
(22, 'Manchester City Football Club', '1880', 'Etihad Stadium\nManchester\n(47.', 'Premier League', 'Mansour bin Zayed Al Nahyan', 'Manuel Pellegrini'),
(23, 'Bayer 04 Leverkusen Fu?ball', '1 iulie 1904', 'BayArena\n(30.210 locuri)', 'Bundesliga', 'Michael Schade', 'Sascha Lewandowski'),
(24, 'Olympique de Marseille', '1899', 'Stade V?lodrome, Marsilia\n(60.', 'Ligue 1', 'Vincent Labrune', 'Jos? Anigo'),
(25, 'Sevilla F?tbol Club S.A.D.', '14 octombrie 1905', 'Ram?n S?nchez Pizju?n, Sevilia', 'La Liga', 'Jos? Castro Carmona', 'Unai Emery'),
(26, 'Municipal Institution Football Club Rubin Kazan', '1958', 'Stadionul Central, Kazan\n(30.1', 'Prima Lig? Rus?', 'Alexandr Gusev', 'Gurban Berdiev'),
(27, 'Societ? Sportiva Calcio Napoli SpA', '1-Aug-26', 'Stadio San Paolo,\nNapoli, Camp', 'Serie A', 'Aurelio De Laurentiis', 'Rafael Ben?tez'),
(28, 'Clubul Sportiv Central al Armatei Moscova', '27-Aug-11', 'Arena Himki\n(18.636 locuri)', 'Prima Lig? Rus?', 'Evgheni Ghiner', 'Leonid Slu?ki'),
(29, 'Philips Sport Vereniging NV', '31-Aug-13', 'Philips Stadion\nEindhoven\n(35.', 'Eredivisie', 'Peter Swinkels', 'Fred Rutten'),
(30, 'Amsterdamsche Football Club Ajax NV', '18 martie 1900', 'Amsterdam ArenA, Amsterdam (54', 'Eredivisie', 'Hennie Henrichs', 'Frank De Boer');

-- --------------------------------------------------------

--
-- Table structure for table `echipe`
--

CREATE TABLE IF NOT EXISTS `echipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` char(30) DEFAULT NULL,
  `idt` int(11) DEFAULT NULL,
  `stema` char(50) DEFAULT NULL,
  `valoare` int(11) DEFAULT NULL,
  `apartine` tinyint(1) DEFAULT NULL,
  `apartinator` char(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `echipe`
--

INSERT INTO `echipe` (`id`, `nume`, `idt`, `stema`, `valoare`, `apartine`, `apartinator`) VALUES
(1, 'Real Madrid CF', 1, 'Real', 159, 1, 'werty'),
(2, 'FC Barcelona', 1, 'Barcelona', 157, 1, 'werty'),
(3, 'FC Bayern Munchen', 3, 'Bayern', 154, 1, 'tomi'),
(4, 'Chelsea FC', 2, 'Chelsea', 140, 1, 'vali_tm2001'),
(5, 'Manchester United FC', 2, 'Manchester', 128, 0, NULL),
(6, 'SL Benfica', 7, 'Benfica', 128, 0, NULL),
(7, 'Club Atlético de Madrid', 1, 'Atletico', 119, 0, NULL),
(8, 'Valencia CF', 1, 'Valencia', 115, 0, NULL),
(9, 'Arsenal FC', 2, 'Arsenal', 112, 0, NULL),
(10, 'FC Porto', 7, 'Porto', 105, 0, NULL),
(11, 'AC Milan', 4, 'Milan', 98, 0, NULL),
(12, 'Olympique Lyonnais', 5, 'Olympique_Lyon', 97, 0, NULL),
(13, 'FC Internazionale Milano', 4, 'Internazionale', 95, 0, NULL),
(14, 'FC Schalke 04', 3, 'Schalke_04', 95, 0, NULL),
(15, 'Borussia Dortmund', 3, 'Borussia', 82, 0, NULL),
(16, 'Juventus Torino', 4, 'Juventus', 80, 0, NULL),
(17, 'Paris Saint-Germain', 5, 'PSG', 80, 0, 'tomi'),
(18, 'FC Shakhtar Donetsk', 9, 'Sahtior', 78, 0, NULL),
(19, 'FC Tottenham Hotspur FC', 2, 'Tottenham', 75, 0, NULL),
(20, 'Liverpool FC', 2, 'Liverpool', 58, 0, NULL),
(21, 'FC Zenit', 8, 'Zenit', 73, 0, NULL),
(22, 'Manchester City FC', 2, 'Manchester_City', 72, 0, NULL),
(23, 'Bayer 04 Leverkusen', 3, 'Bayer_Leverkusen', 70, 0, NULL),
(24, 'Olympique de Marseille', 5, 'Marseille', 70, 0, NULL),
(25, 'Sevilla FC', 1, 'Sevilla', 0, 69, NULL),
(26, 'FC Rubin Kazan', 8, 'Rubin_Kazan', 69, 0, NULL),
(27, 'SSC Napoli', 4, 'Napoli', 61, 0, NULL),
(28, 'PFC CSKA Moskva', 8, 'TSKA', 66, 0, NULL),
(29, 'PSV Eindhoven', 6, 'PSV_Eindhoven', 64, 0, NULL),
(30, 'AFC Ajax', 6, 'Ajax', 61, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mesaje`
--

CREATE TABLE IF NOT EXISTS `mesaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(30) DEFAULT NULL,
  `expeditor` char(30) DEFAULT NULL,
  `destinatar` char(30) DEFAULT NULL,
  `subiect` char(30) DEFAULT NULL,
  `mesaj` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `mesaje`
--

INSERT INTO `mesaje` (`id`, `username`, `expeditor`, `destinatar`, `subiect`, `mesaj`) VALUES
(14, 'tomi', 'tomi', 'werty', 'Tomi', 'Tomita e frumos '),
(15, 'werty', 'tomi', 'werty', 'Tomi', 'Tomita e frumos '),
(16, 'vali_tm2001', 'vali_tm2001', 'werty', 'Tomi', ' Tomita e frumos'),
(17, 'werty', 'vali_tm2001', 'werty', 'Tomi', ' Tomita e frumos'),
(18, 'tomi', 'vali_tm2001', 'tomi', 'Tranzactie respinsa', 'Nu s-a acceptat Paris Saint-Germain si 7 pentru \r\n               si  12'),
(19, 'vali_tm2001', 'vali_tm2001', 'tomi', 'Tranzactie respinsa', 'Nu s-a acceptat Paris Saint-Germain si 7 pentru \r\n               si  12'),
(20, 'tomi', 'vali_tm2001', 'tomi', 'Tranzactie acceptata', 'S-a acceptat Chelsea FC si 1 pentru \r\n               si  12'),
(21, 'vali_tm2001', 'vali_tm2001', 'tomi', 'Tranzactie acceptata', 'S-a acceptat Chelsea FC si 1 pentru \r\n               si  12');

-- --------------------------------------------------------

--
-- Table structure for table `tari`
--

CREATE TABLE IF NOT EXISTS `tari` (
  `idt` int(11) NOT NULL AUTO_INCREMENT,
  `tara` char(20) DEFAULT NULL,
  `prescurtare` char(5) DEFAULT NULL,
  PRIMARY KEY (`idt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tari`
--

INSERT INTO `tari` (`idt`, `tara`, `prescurtare`) VALUES
(1, 'Spania', 'ESP'),
(2, 'Anglia', 'ENG'),
(3, 'Germania', 'GER'),
(4, 'Italia', 'ITA'),
(5, 'Franta', 'FRA'),
(6, 'Olanda', 'NED'),
(7, 'Portugalia', 'POR'),
(8, 'Rusia', 'RUS'),
(9, 'Ucraina', 'UKR');

-- --------------------------------------------------------

--
-- Table structure for table `tranzactii`
--

CREATE TABLE IF NOT EXISTS `tranzactii` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expeditor` char(30) DEFAULT NULL,
  `destinatar` char(30) DEFAULT NULL,
  `echipe_date` text,
  `bani_dati` int(11) DEFAULT NULL,
  `echipe_primite` text,
  `bani_primiti` int(11) DEFAULT NULL,
  `acceptare` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tranzactii`
--

INSERT INTO `tranzactii` (`id`, `expeditor`, `destinatar`, `echipe_date`, `bani_dati`, `echipe_primite`, `bani_primiti`, `acceptare`, `status`) VALUES
(4, 'tomi', 'werty', 'FC Barcelona,Chelsea FC', 5, 'FC Bayern Munchen', 25, 0, 0),
(8, 'vali_tm2001', 'tomi', 'Chelsea FC', 12, 'Paris Saint-Germain', 15, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE IF NOT EXISTS `username` (
  `username` char(30) NOT NULL,
  `password` char(30) DEFAULT NULL,
  `email` char(100) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`username`, `password`, `email`, `money`) VALUES
('tomi', 'portwien7', 'vali_tm2001@yahoo.com', 193),
('vali_tm2001', 'portwien7', 'vali_tm2001@yahoo.com', 171),
('werty', 'portwien7', 'werty@yahoo.com', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

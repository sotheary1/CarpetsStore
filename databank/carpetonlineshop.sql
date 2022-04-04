-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jan 2019 um 19:53
-- Server-Version: 10.1.29-MariaDB
-- PHP-Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `carpetonlineshop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'HandMade'),
(2, 'MashineMade');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `customers`
--

INSERT INTO `customers` (`customer_id`, `first_name`, `last_name`, `user_id`, `email`) VALUES
(1, 'Sotheary', 'Seang', 'ary', 's.sotheary@gmx.ch'),
(2, 'Hadi', 'Asadi', 'hadi', 'hadi.asadi@gmx.ch'),
(3, 'Test', 'Secondtest', 'test2', 'test2.second@gmx.ch'),
(4, 'Bob', 'Hadi', 'hadi1', 'hadi1@gmail.com'),
(5, 'Bob', 'Mini', 'bob', 'bob123@gmail.com'),
(6, 'Alice', 'Small', 'alice', 'alice-small@gamil.com'),
(7, 'Test', 'One', 'onlytest', 'test.onl@gmail.com'),
(8, 'Hadi', 'Aasa', 'hadi123', 'hadi.ha@gmail.com'),
(9, 'Hadihadi', 'Sara', 'sara1', 'sara@gmail.com');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `orders`
--

INSERT INTO `orders` (`id`, `ProductID`, `customer_id`, `Amount`) VALUES
(1, 0, 1, 2510),
(2, 0, 1, 2510),
(3, 0, 1, 1650),
(4, 0, 1, 1650),
(5, 0, 1, 1650),
(6, 0, 1, 1650),
(7, 0, 1, 1650),
(8, 0, 1, 1650);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `stock`, `image`, `category_id`) VALUES
(1, 'Afschan_M', 'Dicke: 15mm\r\nGrösse: 300x150\r\nKnoten: 1\'500 /㎡\r\nKette: Wolle - Polyester\r\nUrsprung: Iran/Persien', 785, 13, 'Afschan_M.jpg', 2),
(2, 'Bakhtiari_H', 'Dicke: 12mm\r\nGrösse: 290x160\r\nKnoten: 260\'000 /㎡\r\nKette: 100% Wolle\r\nUrsprung: Iran/Persien', 1650, 10, 'Bakhtiari_H.jpg', 1),
(3, 'Bakhtiari-classic_H', 'Dicke: 10mm\r\nGrösse: 210x160\r\nKnoten: 160\'000 /㎡\r\nKette: 100% Wolle\r\nUrsprung: Iran/Persien', 860, 3, 'Bakhtiari-classic_H.jpg', 1),
(4, 'Sarooj_H', 'Dicke: 10mm\r\nGrösse: 180x120\r\nKnoten: 500\'000 /㎡\r\nKette: 100%Baumwolle\r\nUrsprung: Iran/Persien', 1980, 6, 'Sarooj_H.jpg', 1),
(5, 'Kerman-Mashahir_H', 'Dicke: 15mm\r\nGrösse: 180x120\r\nKnoten: 260\'000 /㎡\r\nKette: 100%Baumwolle\r\nUrsprung: Iran/Persien', 1580, 4, 'Kerman-Mashahir_H.jpg', 1),
(6, 'Yazd_H', 'Dicke: 9mm\r\nGrösse: 420x300\r\nKnoten: 500\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrsprung: Iran/Persien', 6890, 2, 'Yazd_H.jpg', 1),
(7, 'Kerman_H', 'Dicke: 10mm\r\nGrösse: 295x150\r\nKnoten: 550\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrsprung: Iran/Persien', 1780, 5, 'Kerman_H.jpg', 1),
(8, 'Sarooj-R_H', 'Dicke: 7mm\r\nGrösse: 428x338\r\nKnoten: 360\'000 /㎡\r\nKette: 100% Schafschurwolle\r\nUrsprung: Iran/Persien', 9980, 1, 'Sarooj-R_H.jpg', 1),
(9, 'Toranj_H', 'Dicke: 9mm\r\nGrösse: 270x146\r\nKnoten: 500\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrsprung: Iran/Persien', 2999, 6, 'Toranj_H.jpg', 1),
(10, 'Kashan-classic-H', 'Dicke: 12mm\r\nGrösse: 200x180\r\nKnoten: 260\'000 /㎡\r\nKette: 100% Wolle\r\nUrsprung: Iran/Persien', 1740, 4, 'Kashan-classic-H.jpg', 1),
(11, 'Bidjar-1_H', 'Dicke: 8mm\r\nGrösse: 240x180\r\nKnoten: 550\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrsprung: Iran/Persien', 3460, 12, 'Bidjar-1_H.jpg', 1),
(12, 'Bidjar_H', 'Dicke: 10mm\r\nGrösse: 304x199\r\nKnoten: 1\'000\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrsprung: Iran/Persien', 3850, 2, 'Bidjar_H.jpg', 1),
(13, 'Bakhtiari-2_H', 'Dicke: 8mm\r\nGrösse: 328x190\r\nKnoten: 500\'000 /㎡\r\nKette: 100% Schafschurwolle\r\nUrsprung: Iran/Persien', 2530, 10, 'Bakhtiari-2_H.jpg', 1),
(14, 'Esfahan-classic_H', 'Dicke: 9mm\r\nGrösse: 203x178\r\nKnoten: 360\'000 /㎡\r\nKette: 100% Schafschurwolle\r\nUrsprung: Iran/Persien', 1690, 6, 'Esfahan-classic_H.jpg', 1),
(15, 'Esfahan_H', 'Dicke: 6mm\r\nGrösse: 302x1980\r\nKnoten: 1\'000\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrsprung: Iran/Persien', 9000, 2, 'Esfahan_H.jpg', 1),
(16, 'Esfahan-W_M', 'Dicke: 14mm\r\nGrösse: 199x99\r\nKnoten: 1\'400 /㎡\r\nKette: Baumwolle\r\nUrsprung: Iran/Persien', 735, 12, 'Esfahan-W_M.jpg', 2),
(17, 'Esfahan-B_H', 'Dicke: 6mm\r\nGrösse: 120x75\r\nKnoten: 360\'000 /㎡\r\nKette: 100% Seide\r\nUrsprung: Iran/Persien', 800, 9, 'Esfahan-B_H.jpg', 1),
(18, 'Ghom-Kork_H', 'Dicke: 15mm\r\nGrösse: 250x195\r\nKnoten: 360\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrsprung: Iran/Persien', 2450, 3, 'Ghom-Kork_H.jpg', 1),
(19, 'Ghom_H', 'Dicke: 10mm\r\nGrösse: 93x74\r\nKnoten: 460\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrsprung: Iran/Persien', 720, 8, 'Ghom_H.jpg', 1),
(20, 'Ghom-classic_H', 'Dicke: 12mm\r\nGrösse: 302x198\r\nKnoten: 500\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrspring: Iran/Persien', 3250, 2, 'Ghom-classic_H.jpg', 1),
(21, 'Naeen_H', 'Dicke: 12mm\r\nGrösse: 280x140\r\nKnoten: 550\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrsprung: Iran/Persien', 3700, 10, 'Naeen_H.jpg', 1),
(22, 'Tabriz_H', 'Dicke: 12mm\r\nGrösse: 208x198\r\nKnoten: 360\'000 /㎡\r\nKette: 100% Baumwolle\r\nUrsprung: Iran/Persien', 2300, 5, 'Tabriz_H.jpg', 1),
(23, 'Afshan_Darbari_M', 'Dicke: 15mm\r\nGrösse: 280x140\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Hemp\r\nUrsprung: Iran/Persien', 550, 14, 'Afshan_Darbari_M.jpg', 2),
(24, 'Armani_H', 'Dicke: 12mm\r\nGrösse: 290x190\r\nKnoten: 500\'000 /㎡\r\nKette: 100%Wolle \r\nUrsprung: Iran/Persien', 2700, 8, 'Armani_H.jpg', 1),
(25, 'Esfahan-R_H', 'Dicke: 15mm\r\nGrösse: 106x70\r\nKnoten: 200\'000 /㎡\r\nKette: 100%Wolle\r\nUrsprung: Iran/Persien', 450, 4, 'Esfahan-R_H.jpg', 1),
(26, 'Esfahan-G_M', 'Dicke: 15mm\r\nGrösse: 293x202\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Polyester\r\nUrsprung: Iran/Persien', 980, 9, 'Esfahan-G_M.jpg', 2),
(27, 'Kheschti-classic_M', 'Dicke: 15mm\r\nGrösse: 200x160\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Polyester\r\nUrsprung: Iran/Persien', 390, 10, 'Kheschti-classic_M.jpg', 2),
(28, 'Beheschti_M', 'Dicke: 15mm\r\nGrösse: 300x190\r\nKnoten: 1\'200 /㎡\r\nKette: Wolle - Polyester\r\nUrsprung: Iran/Persien', 1100, 4, 'Beheschti_M.jpg', 2),
(29, 'Mooud-Mahi_M', 'Dicke: 15mm\r\nGrösse: 120x78\r\nKnoten: 200\'000 /㎡\r\nKette: 100%Wolle\r\nUrsprung: Iran/Persien', 290, 3, 'Mooud-Mahi_M.jpg', 2),
(30, 'Esfahan-S_M_Test', 'Dicke: 15mm\r\nGrösse: 180x120\r\nKnoten: 500\'000 /㎡\r\nKette: 100%Wolle\r\nUrsprung: Iran/Persien', 999123, 15, 'Esfahan-S_M.jpg', 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indizes für die Tabelle `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indizes für die Tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

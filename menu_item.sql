-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Şub 2023, 05:16:38
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `verein_admin`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `item_label` varchar(30) NOT NULL,
  `item_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `menu_item`
--

INSERT INTO `menu_item` (`id`, `parent_id`, `item_label`, `item_link`) VALUES
(1, 0, 'Home', 'Home'),
(2, 0, 'Über uns', 'About_Us'),
(3, 0, 'unsere Aktivitäten', 'Our_Activities'),
(4, 1, 'Künstler', ''),
(5, 0, 'Briefe', 'Letters'),
(6, 0, 'Mitgliedschaft', 'Membership'),
(7, 0, 'Kontakt', 'Contact');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

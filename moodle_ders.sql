-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 24 Haz 2021, 01:47:44
-- Sunucu sürümü: 10.2.37-MariaDB-cll-lve
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `moodle_ders`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veriler`
--

CREATE TABLE `veriler` (
  `id` int(11) NOT NULL,
  `tur` varchar(10) NOT NULL,
  `veri` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `veriler`
--

INSERT INTO `veriler` (`id`, `tur`, `veri`) VALUES
(2, 'ahp', '{\"adim1\": {\"kriter\": [\"1\", \"2\"], \"secenek\": [\"a\", \"b\"]}, \"adim2\": [\"1,1,0.09,11.11,1\", \"2,1,0.09,11.11,1\", \"\"], \"adim3\": [\"0.0826,0.9174\", \"0.0826,0.9174\", \"0.0826,0.9174\", \"0.0826,0.9174\", \"\"], \"adim4\": [\"1,0.38\", \"2.63,1\", \"\"], \"adim5\": [\"0.0827\", \"0.9174\"]}'),
(7, 'ahp', '{\"adim1\": {\"kriter\": [\"3\", \"1\", \"2\", \"5\", \"6\"], \"secenek\": [\"asdasd\", \"ss\", \"d\", \"1\", \"2\"]}, \"adim2\": [\"3,1,1,2,3,1,1,1,1,1,1,0.5,1,1,1,1,0.33,1,1,1,1,1,1,1,1,1\", \"1,1,1,1,1,1,1,1,1,10,1,1,1,1,1,1,1,0.1,1,1,1,1,1,1,1,1\", \"2,1,1,1,1,100,1,1,1,1,100,1,1,1,1,1,1,1,1,1,1,0.01,0.01,1,1,1\", \"5,1,1,1,1,0.1,1,1,1,1,1,1,1,1,1,0.1,1,1,1,1,0.01,10,1,10,100,1\", \"6,1,1,1,1,100,1,1,10,1,1,1,0.1,1,1,1,1,1,1,1,1,0.01,1,1,1,1\", \"\"], \"adim3\": [\"0.2611,0.2611,0.1305,0.0862,0.2611\", \"0.2,0.2,0.2,0.2,0.2\", \"0.3333,0.1667,0.1667,0.1667,0.1667\", \"0.4286,0.1429,0.1429,0.1429,0.1429\", \"0.2,0.2,0.2,0.2,0.2\", \"0.2,0.2,0.2,0.2,0.2\", \"0.2439,0.2439,0.2439,0.0244,0.2439\", \"0.2,0.2,0.2,0.2,0.2\", \"0.0714,0.7143,0.0714,0.0714,0.0714\", \"0.2,0.2,0.2,0.2,0.2\", \"0.2494,0.2494,0.2494,0.2494,0.0025\", \"0.2494,0.2494,0.2494,0.2494,0.0025\", \"0.2,0.2,0.2,0.2,0.2\", \"0.2,0.2,0.2,0.2,0.2\", \"0.4926,0.4926,0.0049,0.0049,0.0049\", \"0.0714,0.0714,0.0714,0.0714,0.7143\", \"0.2,0.2,0.2,0.2,0.2\", \"0.0714,0.0714,0.0714,0.0714,0.7143\", \"0.0096,0.0096,0.0096,0.0096,0.9615\", \"0.0452,0.4525,0.0452,0.0045,0.4525\", \"0.2494,0.2494,0.2494,0.2494,0.0025\", \"0.2439,0.2439,0.0244,0.2439,0.2439\", \"0.0714,0.7143,0.0714,0.0714,0.0714\", \"0.2,0.2,0.2,0.2,0.2\", \"0.9615,0.0096,0.0096,0.0096,0.0096\", \"\"], \"adim4\": [\"1,0.08,0.08,0.08,1\", \"12.5,1,0.09,1,1\", \"12.5,11.11,1,1,10\", \"12.5,1,1,1,1\", \"1,1,0.1,1,1\", \"\"], \"adim5\": [\"0.2249\", \"0.2542\", \"0.1511\", \"0.1464\", \"0.2231\"]}'),
(6, 'fahp', '{\"adim1\": {\"kriter\": [\"1\", \"2\"], \"secenek\": [\"a\", \"b\"]}, \"adim2\": [\"1,1,0.09,11.11,1\", \"2,1,0.09,11.11,1\", \"\"], \"adim3\": [\"0.0826,0.9174\", \"0.0826,0.9174\", \"0.0826,0.9174\", \"0.0826,0.9174\", \"\"], \"adim4\": [\"1,0.38\", \"2.63,1\", \"\"]}'),
(5, 'fahp', '{\"adim1\": {\"kriter\": [\"1\", \"2\"], \"secenek\": [\"a\", \"b\"]}, \"adim2\": [\"1,1,0.09,11.11,1\", \"2,1,0.09,11.11,1\", \"\"], \"adim3\": [\"0.0826,0.9174\", \"0.0826,0.9174\", \"0.0826,0.9174\", \"0.0826,0.9174\", \"\"], \"adim4\": [\"1,0.38\", \"2.63,1\", \"\"]}'),
(8, 'ahp', '{\"adim1\": {\"kriter\": [\"Ceebir\", \"Edebi\", \"Web Tasarim\"], \"secenek\": [\"Matematik\", \"Turkce\", \"Bilisim\"]}, \"adim2\": [\"Ceebir,1,0.17,0.18,5.88,1,0.14,5.56,7.14,1\", \"Edebi,1,0.23,0.29,4.35,1,0.44,3.45,2.27,1\", \"Web Tasarim,1,0.6,0.27,1.67,1,1,3.7,1,1\", \"\"], \"adim3\": [\"0.0804,0.4727,0.4469\", \"0.0205,0.1203,0.8592\", \"0.1364,0.1061,0.7576\", \"0.1136,0.4943,0.392\", \"0.0657,0.2857,0.6486\", \"0.1676,0.2543,0.578\", \"0.157,0.2622,0.5808\", \"0.2308,0.3846,0.3846\", \"0.1189,0.4405,0.4405\", \"\"], \"adim4\": [\"1,0.33,0.24\", \"3.03,1,0.56\", \"4.17,1.79,1\", \"\"], \"adim5\": [\"0.1403\", \"0.341\", \"0.5186\"]}'),
(9, 'fahp', '{\"adim1\": [\"Matematik\", \"Fizik\"], \"adim2\": [\"1,1,1;0.28,0.3,0.52\", \"1.92,3.33,3.57;1,1,1\", \"\"]}'),
(10, 'ahp', '{\"adim1\": {\"kriter\": [\"volkan\", \"korkmaz\", \"22\"], \"secenek\": [\"ad\", \"soyad\", \"yas\"]}, \"adim2\": [\"volkan,1,0.22,0.18,4.55,1,0.28,5.56,3.57,1\", \"korkmaz,1,3,1,0.33,1,0.11,1,9.09,1\", \"22,1,0.55,0.01,1.82,1,2,100,0.5,1\", \"\"], \"adim3\": [\"0.09,0.4095,0.5005\", \"0.0459,0.2088,0.7453\", \"0.1233,0.1918,0.6849\", \"0.4292,0.1416,0.4292\", \"0.2292,0.0764,0.6944\", \"0.4739,0.0521,0.4739\", \"0.0097,0.0177,0.9726\", \"0.2683,0.4878,0.2439\", \"0.0033,0.6645,0.3322\", \"\"], \"adim4\": [\"1,0.22,0.21\", \"4.55,1,0.32\", \"4.76,3.13,1\", \"\"], \"adim5\": [\"0.1764\", \"0.2906\", \"0.5331\"]}'),
(11, 'fahp', '{\"adim1\": [\"ali hakan\", \"isik\"], \"adim2\": [\"1,1,1;0.2,0.31,1.06\", \"0.94,3.23,5;1,1,1\", \"\"]}'),
(12, 'ahp', '{\"adim1\": {\"kriter\": [\"i\", \"u011f\", \"o\"], \"secenek\": [\"i\", \"u015f\", \"l\"]}, \"adim2\": [\"i,1,0.03,0.03,33.33,1,0.11,33.33,9.09,1\", \"u011f,1,0.1,0.11,10,1,0.14,9.09,7.14,1\", \"o,1,0.16,0.1,6.25,1,0.06,10,16.67,1\", \"\"], \"adim3\": [\"0.0148,0.4926,0.4926\", \"0.003,0.0988,0.8982\", \"0.0263,0.0965,0.8772\", \"0.0498,0.4978,0.4525\", \"0.0121,0.1214,0.8665\", \"0.088,0.112,0.8\", \"0.058,0.3623,0.5797\", \"0.009,0.0561,0.9349\", \"0.0862,0.0517,0.8621\", \"\"], \"adim4\": [\"1,0.12,0.06\", \"8.33,1,0.06\", \"16.67,16.67,1\", \"\"], \"adim5\": [\"0.0498\", \"0.1715\", \"0.7787\"]}'),
(13, 'ahp', '{\"adim1\": {\"kriter\": [\"s\", \"1\"], \"secenek\": [\"s\"]}, \"adim2\": [\"s,1\", \"1,1\", \"\"], \"adim3\": [\"1\", \"1\", \"\"], \"adim4\": [\"1,0.03\", \"33.33,1\", \"\"], \"adim5\": [\"1\"]}'),
(14, 'ahp', '{\"adim1\": {\"kriter\": [\"1\"], \"secenek\": [\"1\"]}, \"adim2\": [\"1,1\", \"\"], \"adim3\": [\"1\", \"\"], \"adim4\": [\"1\", \"\"], \"adim5\": [\"1\"]}'),
(15, 'ahp', '{\"adim1\": {\"kriter\": [\"1\"], \"secenek\": [\"1\"]}, \"adim2\": [\"1,1\", \"\"], \"adim3\": [\"1\", \"\"], \"adim4\": [\"1\", \"\"], \"adim5\": [\"1\"]}'),
(16, 'fahp', '{\"adim1\": [\"sadas\"], \"adim2\": [\"1,1,1\", \"\"]}'),
(17, 'fahp', '{\"adim1\": [\"kriter 1\", \"kriter 2\"], \"adim2\": [\"1,1,1;0.1,0.19,0.06\", \"16.67,5.26,10;1,1,1\", \"\"]}'),
(18, 'fahp', '{\"adim1\":[\"kriter1\",\"krite2\",\"kriter3\"],\"adim2\":[\"1,1,1;3,1,7;1,5,7\",\"0.14,1,0.33;1,1,1;9,3,1\",\"0.14,0.2,1;1,0.33,0.11;1,1,1\",\"\"]}'),
(19, 'ahp', '{\"adim1\":{\"secenek\":[\"a\",\"b\",\"c\"],\"kriter\":[\"1\",\"2\",\"3\"]},\"adim2\":[\"1,1,3,4,0.33,1,5,0.25,0.2,1\",\"2,1,6,7,0.17,1,8,0.14,0.13,1\",\"3,1,9,1,0.11,1,2,1,0.5,1\",\"\"],\"adim3\":[\"0.6329,0.2089,0.1582\",\"0.7143,0.2381,0.0476\",\"0.4,0.5,0.1\",\"0.7634,0.1298,0.1069\",\"0.8415,0.1403,0.0182\",\"0.4375,0.5,0.0625\",\"0.4739,0.0521,0.4739\",\"0.8571,0.0952,0.0476\",\"0.25,0.5,0.25\",\"\"],\"adim4\":[\"1,2,5\",\"0.5,1,6\",\"0.2,0.17,1\",\"\"],\"adim5\":[\"0.6141\",\"0.2855\",\"0.1005\"]}');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `veriler`
--
ALTER TABLE `veriler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `veriler`
--
ALTER TABLE `veriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
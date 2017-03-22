-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2016 at 06:18 PM
-- Server version: 5.5.52-cll
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `celiamq_celiachiamo`
--

-- --------------------------------------------------------

--
-- Table structure for table `caratteristiche`
--

CREATE TABLE IF NOT EXISTS `caratteristiche` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `descrizione` text,
  `foto` varchar(255) DEFAULT NULL,
  `ordine` int(11) DEFAULT NULL,
  `ricette` tinyint(4) DEFAULT NULL,
  `visibile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `caratteristiche`
--

INSERT INTO `caratteristiche` (`id`, `nome`, `descrizione`, `foto`, `ordine`, `ricette`, `visibile`) VALUES
(1, 'Senza Lievito', 'senza lievito naturale', '1217863612.jpg', 6, 1, 1),
(2, 'Senza Uova', '', '1217863553.jpg', 2, 1, 1),
(3, 'Senza Sale', '', '1217863573.jpg', 3, 1, 1),
(4, 'Senza Lattosio', '', '1217863538.jpg', 1, 1, 1),
(5, 'Senza Zucchero', '', '1217863595.jpg', 5, 1, 1),
(6, 'Senza Soia', '', '1217863626.jpg', 7, 1, 1),
(7, 'Biologico', '', '1217698760.jpg', 4, NULL, 1),
(8, 'Spiga Sbarrata', '', '1217698804.jpg', 8, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `categoria_id` bigint(20) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descrizione` text,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `ordine` int(11) DEFAULT NULL,
  `visibile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_FKIndex1` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `categoria_id`, `nome`, `descrizione`, `url`, `title`, `keywords`, `description`, `ordine`, `visibile`) VALUES
(1, NULL, 'Pane pizza e...', 'Pane pizza e...', 'pane-pizza-senza-glutine', 'Pane senza glutine, pizza gluten free, focacce, sostituti del pane: tutto senza glutine ma con tanta bontÃ !', 'pane senza glutine, pizza gluten free, pizzette', 'Pane senza glutine. Pizza gluten free, focacce, pizzette. In vendita on line su Celiachiamo.com, il portale internet dedicato alla celiachia. Spedizioni in tutta Italia.', 1, 1),
(2, NULL, 'Dolci e Biscotti', 'Dolci e biscotti senza glutine. Su Celiachiamo.com, il portale internet gluten free', 'dolci-biscotti-senza-glutine', 'Dolci e Biscotti senza glutine. In vendita su Celiachiamo.com, il sito internet dove la Celiachia Ã¨ una festa', 'Dolci, biscotti, senza glutine', 'Dolci e biscotti senza glutine. Su Celiachiamo.com, il portale internet gluten free dedicato alla celiachia ed ai prodotti senza glutine.', 2, 1),
(3, NULL, 'Farine', 'Farine', 'farine-senza-glutine', 'Farine senza glutine - Su Celiachiamo.com le farine gluten free per pane, pizza, dolci, e per tutti i giorni', 'Farine, farina senza glutine, gluten free', 'Farine senza glutine: su Celiachiamo.com puoi acquistare on line le migliori farine senza glutine garantite. Schar, Bi Aglut e le migliori marche. Il gluten free tutti i giorni a casa tua.', 4, 1),
(4, NULL, 'Pasta e Riso', 'Pasta e Riso', 'pasta-senza-glutine', 'Pasta e riso senza glutine: pasta fresca, ripiena o delle migliori marche gluten free. A casa tua in 24 ore', 'Pasta, pasta senza glutine, pasta gluten free, pasta fresca, pasta ripiena', 'Pasta senza glutine - Su Celiachiamo.com trovi pasta gluten free fresca, ripiena, o secca delle migliori marche: Schar, Bi Aglut e non solo. Esclusivamente prodotti garantiti senza glutine a casa tua in 24 ore.', 5, 1),
(5, NULL, 'Freschi e artigianali', 'Freschi e artigianali', 'prodotti-senza-glutine-freschi-artigianali', 'Prodotti senza glutine Freschi e artigianali. Solo cosÃ¬ Celiachia fa rima con bontÃ . A casa tua in 24 ore', 'prodotti senza glutine, freschi e artigianali, alimenti gluten free', 'Prodotti senza glutine freschi ed artigianali. A casa tua in 24 ore con corriere espresso. PerchÃ¨ Celiachia non significa rinunce. Scopri il gusto del mangiare bene con la garanzia del senza glutine.', 3, 1),
(6, NULL, 'Area Bimbi', 'Area Bimbi', 'celiachia-prodotti-per-bambini', 'Celiachia e Bambini: prodotti senza glutine per i piÃ¹ piccini. Una selezioni di prodotti gluten free di Celiachiamo.com, il portale internet dedicato alla celiachia', 'celiachia, bambini, prodotti senza glutine per bambini', 'Celiachia e bambini: una selezione dei migliori prodotti garantiti senza glutine per i piÃ¹ piccoli: biscotti, pasta, dolci rigorosamente gluten free come tutti i prodotti in vendita su Celiachiamo.com.', 6, 1),
(7, NULL, 'Varie', 'Varie', 'varie', 'Celiachiamo.com: vendita on line di prodotti senza glutine garantiti, certificati e notificati. Le migliori marche ed alimenti freschi ed artigianali. Spedizioni in tutta Italia a temperatura controllata', 'prodotti senza glutine, alimenti gluten free', 'Celiachiamo.com: il sito internet dedicato al mondo della celiachia e dei prodotti senza glutine. Trovi una selezione dei migliori prodotti gluten free garantiti. Vendita on line e spedizione in 24 ore anche a temperatura controllata.', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produttore`
--

CREATE TABLE IF NOT EXISTS `produttore` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `produttore`
--

INSERT INTO `produttore` (`id`, `nome`) VALUES
(6, 'Cose dell''altro pane'),
(7, 'Dr. Schaer'),
(8, 'Bi-Aglut'),
(9, 'Glutafin'),
(10, 'Estrella Damm'),
(14, 'Alinor'),
(15, 'Cascina Belcreda'),
(16, 'Pandea'),
(17, 'Lima'),
(18, 'GolositÃ  dal 1885'),
(19, 'Farmo'),
(20, 'Colombo'),
(21, 'Primeal'),
(22, 'Pasta D''Alessio'),
(23, 'Rapunzel'),
(24, 'Agluten'),
(25, 'Nutrifree'),
(26, 'Piaceri Mediterranei'),
(27, 'Probios'),
(28, 'Lo Conte'),
(29, 'Vital Nature'),
(30, 'Venchi'),
(31, 'Revolution'),
(32, 'La fabbrica del panforte'),
(33, 'Motta'),
(34, 'Bauli'),
(35, 'Celiachiamo LAB');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

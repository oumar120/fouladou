-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 14 nov. 2020 à 09:48
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fouladou`
--

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

DROP TABLE IF EXISTS `infos`;
CREATE TABLE IF NOT EXISTS `infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` text NOT NULL,
  `nom` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`id`, `prenom`, `nom`, `email`, `message`) VALUES
(1, 'oumar', 'balde', 'b@gmail.com', 'test'),
(2, 'oumar', 'balde', 'b@gmail.com', 'ceci est un test'),
(3, 'oumar', 'balde', 'b@gmail.com', 'encore un test'),
(4, 'oumar', 'balde', 'b@gmail.com', 'test'),
(5, 'oumar', 'balde', 'b@gmail.com', 'test'),
(6, '', '', '', ' '),
(7, 'Oumar', 'ba', 'baldeoumar093@gmail.com', ' '),
(8, 'Oumar', 'ba', 'baldeoumar093@gmail.com', ' '),
(9, 'Oumar', 'ba', 'baldeoumar093@gmail.com', ' '),
(10, 'oumar', 'balde', 'b@gmail.com', ' '),
(11, 'oumar', 'balde', 'b@gmail.com', ' '),
(12, 'oumar', 'balde', 'b@gmail.com', ' '),
(13, 'oumar', 'balde', 'b@gmail.com', ' '),
(14, 'oumar', 'balde', 'b@gmail.com', ' '),
(15, 'oumar', 'balde', 'b@gmail.com', ' '),
(16, 'oumar', 'balde', 'b@gmail.com', ' '),
(17, 'oumar', 'balde', 'b@gmail.com', ' '),
(18, 'oumar', 'balde', 'b@gmail.com', ' '),
(19, 'Oumar', 'ba', 'baldeoumar093@gmail.com', ' '),
(20, 'Oumar', 'ba', 'baldeoumar093@gmail.com', ' '),
(21, 'Oumar', 'ba', 'baldeoumar093@gmail.com', ' '),
(22, 'oumar', 'balde', 'b@gmail.com', ' '),
(23, 'oumar', 'balde', 'b@gmail.com', ' '),
(24, 'oumar', 'balde', 'b@gmail.com', ' '),
(25, 'Oumar', 'ba', 'baldeoumar093@gmail.com', ' '),
(26, 'oumar', 'balde', 'b@gmail.com', ' '),
(27, 'oumar', 'balde', 'b@gmail.com', ' '),
(28, 'oumar', 'balde', 'b@gmail.com', ' '),
(29, 'oumar', 'balde', 'b@gmail.com', ' '),
(30, 'oumar', 'balde', 'b@gmail.com', ' '),
(31, 'oumar', 'balde', 'b@gmail.com', ' '),
(32, 'oumar', 'balde', 'b@gmail.com', ' '),
(33, 'oumar', 'balde', 'b@gmail.com', ' '),
(34, 'oumar', 'balde', 'b@gmail.com', ' '),
(35, 'oumar', 'balde', 'b@gmail.com', ' '),
(36, 'oumar', 'balde', 'b@gmail.com', ' '),
(37, 'oumar', 'balde', 'b@gmail.com', ' '),
(38, 'oumar', 'balde', 'b@gmail.com', ' '),
(39, 'oumar', 'balde', 'b@gmail.com', ' '),
(40, 'oumar', 'balde', 'b@gmail.com', ' '),
(41, 'oumar', 'balde', 'b@gmail.com', ' '),
(42, 'oumar', 'balde', 'b@gmail.com', ' '),
(43, 'oumar', 'balde', 'b@gmail.com', ' '),
(44, 'oumar', 'balde', 'b@gmail.com', ' '),
(45, 'oumar', 'balde', 'b@gmail.com', ' '),
(46, 'oumar', 'balde', 'b@gmail.com', ' '),
(47, 'oumar', 'balde', 'b@gmail.com', ' '),
(48, 'oumar', 'balde', 'b@gmail.com', ' '),
(49, 'oumar', 'balde', 'b@gmail.com', ' '),
(50, 'oumar', 'balde', 'b@gmail.com', ' '),
(51, 'oumar', 'balde', 'b@gmail.com', ' '),
(52, 'oumar', 'balde', 'b@gmail.com', ' '),
(53, 'oumar', 'balde', 'b@gmail.com', ' '),
(54, 'oumar', 'balde', 'b@gmail.com', ' '),
(55, 'oumar', 'balde', 'b@gmail.com', ' '),
(56, 'oumar', 'balde', 'b@gmail.com', ' '),
(57, 'oumar', 'balde', 'b@gmail.com', ' ');

-- --------------------------------------------------------

--
-- Structure de la table `music`
--

DROP TABLE IF EXISTS `music`;
CREATE TABLE IF NOT EXISTS `music` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `titre` text NOT NULL,
  `album` text NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'ancien',
  `photo` varchar(255) NOT NULL DEFAULT 'fouladou.jpg',
  `note` int(11) NOT NULL,
  `compteur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `music`
--

INSERT INTO `music` (`id`, `nom`, `titre`, `album`, `fichier`, `status`, `photo`, `note`, `compteur`) VALUES
(10, 'Daddi bi', 'badiou', 'inconnue', 'AUD-20180514-WA0017.mp3', 'ancien', 'daddi bi.jpg', 0, 1),
(11, 'ndongo', 'chirifou', 'inconnue', 'Ndongo Dara J - Allah Yurmo YaFo shariff.mp3', 'nouveau', 'ndongo.jpg', 2, 0),
(12, 'soupi mballo', 'ngagno', 'inconnue', 'gagno.mp3', 'ancien', 'fouladou.jpg', 0, 1),
(13, 'Daddi bi', 'godol indame', 'inconnue', 'AUD-20180514-WA0015.mp3', 'ancien', 'daddi bi.jpg', 0, 1),
(15, 'Daddi bi', 'wandiya', 'inconnue', 'AUD-20180514-WA0011.mp3', 'ancien', 'daddi bi.jpg', 0, 1),
(16, 'bandi mike', 'gnalo fouladou', 'fouladou', 'Bandi Mike __ Gnalo Fouladou __ m.mp3', 'ancien', 'bandi.jpg', 5, 1),
(17, 'bandi mike', 'koddo lipperakÃ©e', 'fouladou', 'Bandi Mike Koddo LippÃ©rakÃ©Ã©.mp3', 'ancien', 'bandi.jpg', 5, 1),
(18, 'kaddu mag', 'fouladou weli yade', 'inconnue', 'FOULADOU WELI YADÃ‰ ....KADDU MAG KOLDA - YouTube[via torchbrowser.com].aac', 'ancien', 'kaddu mag.jpg', 1, 0),
(19, 'Daddi bi', 'neddi', 'inconnue', 'AUD-20180511-WA0012.mp3', 'ancien', 'daddi bi.jpg', 0, 1),
(20, 'Daddi bi', 'nafigui', 'inconnue', 'AUD-20180514-WA0008.mp3', 'ancien', 'daddi bi.jpg', 0, 1),
(21, 'bandi mike', 'thiossane', 'inconnue', 'Bandi MIke ___ Thiossane ____ okm.mp3', 'ancien', 'bandi.jpg', 5, 1),
(23, 'big bara_mc thioubado', 'diombadio', 'inconnue', 'Big Barra & Mc Thioubado  __ Diombadjo ___ m.mp3', 'ancien', 'fouladou.jpg', 0, 1),
(24, 'Mama disket', 'djiwo mini hidi fima', 'inconnue', 'Mama Disket __Djiwo Mino Hidi fiimaa___ m.mp3', 'ancien', 'fouladou.jpg', 0, 0),
(25, 'Mama disket', 'aduna diahikam', 'inconnue', 'Mama Diskete __  Adouna Diakiikam __ m.mp3', 'ancien', 'fouladou.jpg', 0, 0),
(26, 'Mama disket', 'GollÃ©', 'inconnue', 'Mamadisket ___ GollÃ© ___ m.mp3', 'ancien', 'fouladou.jpg', 0, 0),
(27, 'ndongo', 'fatoumata docteur', 'inconnue', 'AUD-20191216-WA0011.mp3', 'nouveau', 'ndongo.jpg', 2, 0),
(28, 'Mama disket', 'souzi kappe', 'inconnue', 'Mama Discket ____ Souzi KappÃ© ___ m.mp3', 'ancien', 'fouladou.jpg', 0, 0),
(29, 'Mokoba', 'basso', 'inconnue', 'Mokoba.mp3', 'ancien', 'mokoba.jpg', 2, 1),
(30, 'Daddi bi', 'Gainaako ', 'inconnue', 'AUD-20180514-WA0016.mp3', 'ancien', 'daddi bi.jpg', 0, 1),
(31, 'kadia kande', 'tongonda', 'inconnue', 'Kadia kande tongonda.mp3', 'nouveau', 'kadia.jpg', 1, 0),
(32, 'Daddi bi', 'asc hamdalaye', 'inconnue', 'AUD-20180514-WA0006.mp3', 'ancien', 'daddi bi.jpg', 0, 1),
(33, 'Daddi bi', 'mawbe mene', 'inconnue', 'AUD-20180514-WA0007.mp3', 'ancien', 'daddi bi.jpg', 0, 1),
(34, 'Daddi bi', 'Diam', 'inconnue', 'AUD-20180514-WA0009.mp3', 'ancien', 'daddi bi.jpg', 0, 1),
(35, 'Daddi bi', 'ngowre', 'inconnue', 'AUD-20180514-WA0014.mp3', 'ancien', 'daddi bi.jpg', 0, 1),
(36, 'Mama disket', 'liganoda horemaa', 'inconnue', 'babass.mp3', 'ancien', 'fouladou.jpg', 0, 0),
(37, 'bandi mike', 'djenguiyo', 'inconnue', 'BANDI MIC ,hamel.S.mp3', 'ancien', 'bandi.jpg', 5, 1),
(38, 'bandi mike', 'casamance', 'inconnue', 'bandi mike casa m.mp3', 'ancien', 'bandi.jpg', 5, 1),
(39, 'big bara & mc thioubado', 'neddi', 'inconnue', 'Big Barra & Mc Thioubado ___   NÃ©edi   ___ m.mp3', 'ancien', 'fouladou.jpg', 0, 1),
(40, 'ndongo', 'fadima', 'inconnue', 'fadima.mp3', 'ancien', 'ndongo.jpg', 4, 1),
(41, 'galissa & real dio', 'yanomi', 'inconnue', 'Galissa & Real Dio __ Yaanomi __ m.mp3', 'ancien', 'fouladou.jpg', 0, 0),
(42, 'ibrahima coumbi', 'diombadio', 'inconnue', 'IBRAHIMA COUMBIE DIOMBADIO - YouTube[via torchbrowser.com].mp3', 'ancien', 'fouladou.jpg', 0, 0),
(43, 'ibrahima coumbi', 'kododje', 'inconnue', 'IBRAHIMA KOMBIE KODODJE - YouTube[via torchbrowser.com].mp3', 'ancien', 'fouladou.jpg', 0, 0),
(44, 'ibrahima coumbi', 'adunaru', 'inconnue', 'IBRAHIMA KOUMBIE ADUNARU - YouTube[via torchbrowser.com].mp3', 'ancien', 'fouladou.jpg', 0, 0),
(45, 'ibrahima coumbi', 'gorko mbo djaladji', 'inconnue', 'IBRAHIMA KOUMBIE GORKO MO JAALADJI - YouTube[via torchbrowser.com].mp3', 'ancien', 'fouladou.jpg', 0, 0),
(46, 'kaddu mag', 'life bi', 'inconnue', 'KADDU MAG ( life bi) - YouTube[via torchbrowser.com].aac', 'ancien', 'kaddu mag.jpg', 1, 0),
(47, 'kaddu mag', 'kolda', 'inconnue', 'KADDU MAG  KOLDA - YouTube[via torchbrowser.com].aac', 'ancien', 'kaddu mag.jpg', 1, 0),
(48, 'Mokoba', 'immo ligo', 'inconnue', 'Mokoba ___ Immo Liggo ___ m.mp3', 'ancien', 'mokoba.jpg', 2, 1),
(49, 'ndongo', 'fans djidi', 'inconnue', 'NDONGO DAARA DJI.mp3', 'ancien', 'ndongo.jpg', 4, 1),
(50, 'ndongo', 'j bola', 'inconnue', 'Ndongo daara j BOLA.mp3', 'ancien', 'ndongo.jpg', 4, 1),
(51, 'ndongo', 'diambarebe', 'inconnue', 'NDONGO DIAMBARÃ‰BÃ‰.mp3', 'ancien', 'ndongo.jpg', 4, 1),
(52, 'ndongo', 'diamtane wona', 'inconnue', 'Ndongo jaamtan wona.mp3', 'ancien', 'ndongo.jpg', 4, 1),
(53, 'ndongo', 'laddÃ©', 'inconnue', 'ndongo laddÃ©.mp3', 'ancien', 'ndongo.jpg', 4, 1),
(54, 'ndongo & tipsÃ©', 'djinaabe mÃ©ne', 'inconnue', 'NDONGO TipsÃ©.mp3', 'ancien', 'kongol.jpg', 0, 0),
(55, 'ndongo', 'yero seydi', 'inconnue', 'Ndongo Yero seydi.mp3', 'ancien', 'ndongo.jpg', 4, 1),
(56, 'ndongo', 'ko minen tigui', 'inconnue', 'Ndongo_Daara___Ko_Minen_Tigi.mp3', 'ancien', 'ndongo.jpg', 4, 1),
(57, 'of king', 'defaillant', 'inconnue', 'Of King (DÃ©faillants) .mp3', 'ancien', 'fouladou.jpg', 1, 0),
(58, 'of king', 'remix', 'inconnue', 'OF KING REMIX.mp3', 'ancien', 'fouladou.jpg', 1, 0),
(59, 'ous by', 'dewgal', 'inconnue', 'Ous By - Dewgal new.mp3', 'ancien', 'fouladou.jpg', 0, 0),
(60, 'ous by', 'diayngol', 'inconnue', 'Ous By __ Diayngol .mp3', 'ancien', 'fouladou.jpg', 0, 0),
(61, 'ous by', 'diawdi', 'inconnue', 'Ousby - Diawdi.mp3', 'ancien', 'fouladou.jpg', 0, 0),
(62, 'bams', 'sarette ambulance', 'inconnue', 'test.mp3', 'ancien', 'bams.JPG', 16, 0),
(63, 'ndongo', 'sega', 'inconnue', 'Ndongo Dj Sega-1-1.mp3', 'ancien', 'ndongo.jpg', 4, 1),
(64, 'Avenir fouladou', 'diam feltarÃ©', 'inconnue', 'AUD-20180720-WA0026.mp3', 'ancien', 'avenir.jpg', 2, 0),
(65, 'Avenir fouladou', 'sangarÃ©', 'inconnue', 'AUD-20181006-WA0002.mp3', 'ancien', 'avenir.jpg', 2, 0),
(66, 'Avenir fouladou', 'conflit', 'inconnue', 'AUD-20181222-WA0082.mp3', 'ancien', 'avenir.jpg', 2, 0),
(67, 'Avenir fouladou', 'Gambie', 'inconnue', 'AUD-20190206-WA0156.mp3', 'ancien', 'avenir.jpg', 2, 0),
(68, 'Avenir fouladou', 'hommage a saidou', 'inconnue', 'AUD-20190322-WA0004.mp3', 'ancien', 'avenir.jpg', 2, 0),
(69, 'Avenir fouladou', 'djiwel bessel', 'inconnue', 'Avenir Fouladou __ DjiwÃ©l Bessel __ m-1.mp3', 'ancien', 'avenir.jpg', 2, 0),
(70, 'Avenir fouladou', 'dowri', 'inconnue', 'Avenir Fouladou __ Dowry __ m.mp3', 'ancien', 'avenir.jpg', 2, 0),
(71, 'Avenir fouladou', 'islam', 'inconnue', 'Avenir Fouladou __ L\'islam  __ m.mp3', 'ancien', 'avenir.jpg', 2, 0),
(72, 'bandi mike', 'mayani tagodani', 'inconnue', 'BANDI TAGO.mp3', 'ancien', 'bandi.jpg', 5, 1),
(73, 'bandi mike', 'sanguara', 'inconnue', 'Bandi_Mic___Sangara_(Alcohol).-1.mp3', 'ancien', 'bandi.jpg', 5, 1),
(74, 'abdou diop', 'moonde', 'inconnue', 'CLIP ABDOU DIOP MOONDE pour youtube.mp3', 'ancien', 'abdou.jpg', 21, 0),
(75, 'kadia kande', 'guido', 'inconnue', 'Kadia kande _GUIDO.mp3', 'nouveau', 'kadia.jpg', 1, 0),
(76, 'ndongo', 'bambou beybÃ©o', 'inconnue', 'NDONGO  DAARA J     bambou mbeybÃ©o.mp3', 'ancien', 'ndongo.jpg', 4, 1),
(77, 'ndongo', 'welikodoko', 'inconnue', 'NDONGO  DAARA J  WÃ©likodoko.mp3', 'ancien', 'ndongo.jpg', 4, 1),
(78, 'king & kode oumar', 'mama weli', 'inconnue', 'Velingara KING ET CODE MAAMA WELIII.mp3', 'ancien', 'king_code.jpg', 0, 0),
(79, 'ndongo', 'test', 'inconnue', 'TIPSE WÃ©li fittago \'guarÃ© guambÃ©n avec fouladou 24-mc..mp3', 'ancien', 'ndongo.jpg', 4, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 30 Avril 2017 à 19:49
-- Version du serveur: 10.0.28-MariaDB
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `u852249137_patri`
--

-- --------------------------------------------------------

--
-- Structure de la table `HackMMO-Joueur`
--

CREATE TABLE IF NOT EXISTS `HackMMO-Joueur` (
  `Inconnu` varchar(13) DEFAULT NULL,
  `Pseudo` varchar(27) DEFAULT NULL,
  `IP` varchar(15) DEFAULT NULL,
  `Reputation` varchar(6) DEFAULT NULL,
  `Rang_Special` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Informations_Sup` text,
  `Nom_De_Guilde` varchar(30) NOT NULL,
  `Blason_Guilde` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `HackMMO-Joueur`
--

INSERT INTO `HackMMO-Joueur` (`Inconnu`, `Pseudo`, `IP`, `Reputation`, `Rang_Special`, `Informations_Sup`, `Nom_De_Guilde`, `Blason_Guilde`) VALUES
('Inconnu', 'enzo7656', '253.205.254.61', '851', 'Joueur Lambda', '', '', 'BFA'),
(NULL, 'tomazzi', '191.75.49.91', '4331', 'Top 100', '', 'roots', 'ROO'),
(NULL, '1121''s', '85.48.201.167', '1182', 'Joueur Lambda', ' ', 'Lyxuz Group', 'LzG'),
(NULL, 'akudja', '213.219.254.91', '1967', 'Joueur Lambda', '', '', ''),
(NULL, 'mewdavinci', '56.9.114.107', '1278', 'Joueur Lambda', '', 'ARABIAN', 'ARB'),
(NULL, 'Dreadstone', '121.52.238.246', '1193', 'Joueur Lambda', '', '', ''),
(NULL, 'Wildcat_0525', '118.43.41.36', '406', 'Joueur Lambda', '', '', ''),
(NULL, 'pckd1939', '119.152.47.201', '986', 'Joueur Lambda', '', '', ''),
(NULL, 'Redwhinx', '142.26.213.4', '1450', 'Joueur Lambda', '', '', ''),
(NULL, 'mycropht', '20.107.110.206', '605', 'Joueur Lambda', '', '', ''),
(NULL, 'Killergod1014', '250.49.59.186', '1376', 'Joueur Lambda', '', '', ''),
(NULL, 'Obsidion', '13.99.90.147', '1451', 'Joueur Lambda', '', '', ''),
(NULL, 'beejayze', '169.197.192.113', '279', 'Joueur Lambda', '', '', ''),
(NULL, 'DankMemey', '201.13.111.32', '1105', 'Joueur Lambda', '', 'Tubig With Water', 'TWW'),
(NULL, 'Fluffy212', '82.166.106.5', '1735', 'Joueur Lambda', '', '', ''),
(NULL, 'uwilllose123', '57.77.73.178', '1843', 'Joueur Lambda', '', '', ''),
(NULL, 'Peironist', '108.36.91.59', '1074', 'Joueur Lambda', '', '', ''),
(NULL, 'pulsar', '34.100.62.193', '302', 'Joueur Lambda', '', '', ''),
(NULL, 'squidmo1', '74.33.43.220', '844', 'Joueur Lambda', '', '', ''),
(NULL, '_kuhaku_', '203.41.58.209', '855', 'Joueur Lambda', '', '', ''),
(NULL, 'gremiode', '233.48.241.158', '221', 'Joueur Lambda', '', '', ''),
(NULL, 'blkdove', '192.234.77.164', '375', 'Joueur Lambda', '', '', ''),
(NULL, 'eulero', '26.203.231.157', '1291', 'Joueur Lambda', '', '', ''),
(NULL, 'ThoqSin', '53.170.104.232', '313', 'Joueur Lambda', '', '', ''),
(NULL, 'kataratsu', '154.60.228.28', '1691', 'Joueur Lambda', '', '', ''),
(NULL, 'Wolfie69', '168.66.48.61', '4113', 'Top 100', 'Leader', 'Wolves Den', 'FUR'),
(NULL, 'emered', '28.164.93.21', '938', 'Joueur Lambda', '', '', ''),
(NULL, 'cvlad', '8.15.42.146', '1507', 'Joueur Lambda', '', 'Error', 'mrx'),
(NULL, 'iBittz', '194.237.173.16', '3425', 'Top 100', 'Modérateur brésil', 'A-Team Brazil', 'TBR'),
(NULL, 'NtEp', '30.4.112.218', '1053', 'Joueur Lambda', '', '', ''),
(NULL, 'shiyp3', '60.176.107.12', '1378', 'Joueur Lambda', '', '', ''),
(NULL, 'Zep0th', '176.62.94.181', '1258', 'Joueur Lambda', '', '', ''),
(NULL, 'Flashfire365', '246.208.126.124', '1525', 'Joueur Lambda', '', '7-zip', '7zp'),
(NULL, 'Dominator5750', '173.225.206.155', '0', 'Joueur Lambda', '', '', ''),
(NULL, 'Thorius', '112.89.124.181', '1084', 'Joueur Lambda', '', '', ''),
(NULL, 'nitram1', '211.22.240.158', '1024', 'Joueur Lambda', '', '', ''),
(NULL, 'Gonaeco', '171.51.186.55', '1221', 'Joueur Lambda', '', '', ''),
(NULL, 'Artherica', '75.106.251.201', '2890', 'Top 100', '', '', ''),
(NULL, 'Duffy1', '128.92.73.12', '1752', 'Joueur Lambda', '', '', ''),
(NULL, 'harhar112', '56.163.24.3', '638', 'Joueur Lambda', '', '', ''),
(NULL, 'bennyf2', '130.30.176.28', '699', 'Joueur Lambda', '', '', ''),
(NULL, 'joaocosme', '99.77.144.42', '3700', 'Top 100', '', '', ''),
(NULL, 'modzshick', '75.37.61.148', '1533', 'Joueur Lambda', '', 'Tubig With Water', 'TWW'),
(NULL, 'shaylla', '229.106.246.192', '478', 'Joueur Lambda', '', '', ''),
(NULL, 'Mittens', '133.52.184.73', '1182', 'Joueur Lambda', '', '', ''),
(NULL, 'Huzzar', '142.175.222.53', '1897', 'Joueur Lambda', '', 'Polish Hackerz', 'PLL'),
(NULL, 'KucJlopod', '222.154.208.180', '1045', 'Joueur Lambda', '', 'Ch1nkSec', 'UKR'),
(NULL, 'deepy_', '4.110.175.133', '1190', 'Joueur Lambda', '', 'toxic', 't0x'),
(NULL, 'IxkillxUrxvibe', '17.8.69.162', '795', 'Joueur Lambda', '', '', ''),
(NULL, 'youmight', '80.253.160.187', '1172', 'Joueur Lambda', '', '', ''),
(NULL, 'RedFred', '242.240.129.176', '882', 'Joueur Lambda', '', '', ''),
(NULL, 'Given2Fly', '205.86.141.20', '2213', 'Joueur Lambda', '', 'Isle of Fabul', 'FAB'),
(NULL, 'koss', '35.49.46.34', '1112', 'Joueur Lambda', '', '', ''),
(NULL, 'player1816', '229.121.200.233', '946', 'Joueur Lambda', '', '', ''),
(NULL, 'anonimax', '169.135.201.59', '1306', 'Joueur Lambda', '', '', ''),
(NULL, 'gramcrackr', '100.200.129.12', '423', 'Joueur Lambda', '', '', ''),
(NULL, 'andreykov84', '232.34.196.61', '762', 'Joueur Lambda', '', '', ''),
(NULL, 'Chewchewtrain', '83.134.180.223', '139', 'Joueur Lambda', '', '', ''),
(NULL, 'TheRealNoob', '90.53.211.187', '1208', 'Joueur Lambda', '', '', ''),
(NULL, 'deus1324', '253.105.103.36', '1128', 'Joueur Lambda', '', '', ''),
(NULL, 'Socket', '219.93.170.146', '942', 'Joueur Lambda', '', '', ''),
(NULL, 'NaRcissusNarc0s1s', '97.97.204.93', '2001', 'Joueur Lambda', '', 'Borneo Cyberwolf', 'CW6'),
(NULL, 'Dokolenko', '12.153.127.69', '1157', 'Joueur Lambda', '', 'IT SCIENCE GROUP', 'ISG'),
(NULL, 'arxhgos', '79.3.79.155', '1059', 'Joueur Lambda', '', '', ''),
(NULL, 'Hideo', '243.214.62.207', '2412', 'Joueur Lambda', '', '', ''),
(NULL, 'Stormeon', '199.84.201.171', '1790', 'Joueur Lambda', '', 'Dirty as Sin', 'DaS'),
(NULL, 'NuttyHackHg', '122.45.140.210', '1019', 'Joueur Lambda', '', '', ''),
(NULL, 'Vickad', '182.110.73.71', '1407', 'Joueur Lambda', '', '', ''),
(NULL, 'showki', '112.253.45.53', '1253', 'Joueur Lambda', '', '', ''),
(NULL, 'RedDredKin', '156.49.9.96', '1182', 'Joueur Lambda', '', '', ''),
(NULL, 'Sashita', '90.104.111.212', '1049', 'Joueur Lambda', '', '', ''),
(NULL, 'Anoni_hacker', '141.96.169.112', '1334', 'Joueur Lambda', '', 'anonn', 'ann'),
(NULL, 'Shattered', '126.155.83.238', '1020', 'Joueur Lambda', 'Leader', 'The Broken', 'BRK'),
(NULL, 'lp09', '9.173.185.124', '1599', 'Joueur Lambda', '', 'DeeViouS', 'DVS'),
(NULL, 'RipeJrMan', '128.115.169.189', '4838', 'Top 100', '', '', ''),
(NULL, 'NOT_USE_TEST_SPAGU', 'UNE_IP_AVEC_DES', '123', 'Joueur Lambda', '123', '123', '123'),
(NULL, 'urnom276', '220.93.202.120', '', 'Joueur Lambda', '', 'Da Hackerz', '276'),
(NULL, 'jcp24', '171.69.11.1', '686', 'Joueur Lambda', 'Attaque des membres de la FHC', 'Chaos Guild 9000', 'CG9'),
(NULL, 'Lonelyconstant', '214.117.54.35', '1315', 'Joueur Lambda', '', '', ''),
(NULL, 'tkinter ', '161.79.32.68', '1013', 'Joueur Lambda', '', '', 'KGM'),
(NULL, 'Deusex ', '103.104.79.78', '5000', 'Top 100', '', 'Élite hackers', '3LT'),
(NULL, 'Vicarvo', '143.180.226.167', '2600', 'Joueur Lambda', '', '', 'GNR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

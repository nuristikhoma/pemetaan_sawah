-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2015 at 03:53 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persawahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantulbarat`
--

CREATE TABLE IF NOT EXISTS `bantulbarat` (
  `id` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `sudutx` varchar(30) NOT NULL,
  `suduty` varchar(30) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bantulbarat`
--

INSERT INTO `bantulbarat` (`id`, `alamat`, `sudutx`, `suduty`, `lat`, `lng`) VALUES
(1, 'Sepanjang jalan Wates 1', 'sudut x: -7.874541006763842', 'sudut y: 110.2093505859375', -7.874541, 110.209351),
(2, 'Sepanjang jalan Wates 2', 'sudut x: -7.871140139099063', 'sudut y: 110.2049732208252', -7.871140, 110.204971),
(4, 'Sepanjang jalan Wates 3', 'sudut x: -7.87598636706779', 'sudut y: 110.20226955413817', -7.875986, 110.202271),
(5, 'Demangrejo', 'sudut x: -7.88404203281042', 'sudut y: 110.2133846282959', -7.884042, 110.213387);

-- --------------------------------------------------------

--
-- Table structure for table `bantulselatan`
--

CREATE TABLE IF NOT EXISTS `bantulselatan` (
  `id` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `sudutx` varchar(30) NOT NULL,
  `suduty` varchar(30) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bantulselatan`
--

INSERT INTO `bantulselatan` (`id`, `alamat`, `sudutx`, `suduty`, `lat`, `lng`) VALUES
(1, 'Sebelah jalan Parangtritis', 'sudut x: -8.002180779288686', 'sudut y: 110.31118869781494', -8.002181, 110.311188),
(2, 'Sepanjang Kali Opak 1', 'sudut x: -7.9983984871163765', 'sudut y: 110.31678915023804', -7.998398, 110.316788),
(3, 'Sepanjang Kali Opak 2', 'sudut x: -8.004114409481652', 'sudut y: 110.28970956802367', -8.004114, 110.289711),
(4, 'Dekat Pantai di Jalan Parangtritis', 'sudut x: -8.025075646325238', 'sudut y: 110.33618688583374', -8.025076, 110.336189);

-- --------------------------------------------------------

--
-- Table structure for table `bantultimur`
--

CREATE TABLE IF NOT EXISTS `bantultimur` (
  `id` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `sudutx` varchar(30) NOT NULL,
  `suduty` varchar(30) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bantultimur`
--

INSERT INTO `bantultimur` (`id`, `alamat`, `sudutx`, `suduty`, `lat`, `lng`) VALUES
(1, 'Sebelah Sungai Code Jl.Imogiri', 'sudut x: -7.874541006763842', 'sudut y: 110.38058280944824', -7.874541, 110.380585),
(2, 'Bangunharjo', 'sudut x: -7.848970049628199', 'sudut y: 110.37049770355225', -7.848970, 110.370499),
(3, 'Tamanan', 'sudut x: -7.84427230441256', 'sudut y: 110.38450956344604', -7.844272, 110.384506),
(4, 'Sebelah Jalan Imogiri Timur', 'sudut x: -7.846716839090157', 'sudut y: 110.38886547088623', -7.846717, 110.388863);

-- --------------------------------------------------------

--
-- Table structure for table `bantulutara`
--

CREATE TABLE IF NOT EXISTS `bantulutara` (
  `id` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `sudutx` varchar(30) NOT NULL,
  `suduty` varchar(30) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bantulutara`
--

INSERT INTO `bantulutara` (`id`, `alamat`, `sudutx`, `suduty`, `lat`, `lng`) VALUES
(1, 'Kasihan Karangjati', 'sudut x : -7.829955545576011', 'sudut y : 110.32127380371092', -7.829956, 110.321274),
(2, 'Bantul Utara dekat Jl.Bibis Raya', 'sudut x : -7.824481673282033', 'sudut y : 110.31678915023804', -7.824482, 110.316788),
(3, 'Persawahan Dekat Sportorium UMY', 'sudut x : -7.815298161089438', 'sudut y : 110.3233551979065', -7.815298, 110.323357),
(4, 'Persawahan samping UMY', 'sudut x : -7.810121717366493', 'sudut y : 110.31781911849976', -7.810122, 110.317818),
(5, 'Persawahan jalan UMY - Ambarbinangun', 'sudut x: -7.81481984762531', 'sudut y: 110.32988905906677', -7.814820, 110.329887),
(6, 'Persawahan jalan UMY - Ambarbinangun 2', 'sudut x: -7.818518790810535', 'sudut y: 110.32899856567383', -7.818519, 110.329002);

-- --------------------------------------------------------

--
-- Table structure for table `mengelola`
--

CREATE TABLE IF NOT EXISTS `mengelola` (
  `id_sawah` int(10) NOT NULL,
  `id_petani` int(10) NOT NULL,
  `id_kelola` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengelola`
--

INSERT INTO `mengelola` (`id_sawah`, `id_petani`, `id_kelola`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `petani`
--

CREATE TABLE IF NOT EXISTS `petani` (
  `id_petani` int(10) NOT NULL,
  `nama_petani` varchar(30) NOT NULL,
  `alamat_petani` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petani`
--

INSERT INTO `petani` (`id_petani`, `nama_petani`, `alamat_petani`) VALUES
(1, 'Acep', 'Bantul'),
(2, 'Ucup', 'Jetis');

-- --------------------------------------------------------

--
-- Table structure for table `sawah`
--

CREATE TABLE IF NOT EXISTS `sawah` (
  `id_sawah` int(11) NOT NULL,
  `luas_sawah` varchar(20) NOT NULL,
  `alamat_sawah` varchar(30) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sawah`
--

INSERT INTO `sawah` (`id_sawah`, `luas_sawah`, `alamat_sawah`, `lat`, `lng`) VALUES
(1, '100++ hektar', 'Bantul, DI Yogyakarta', -7.877666, 110.327797);

--
-- Triggers `sawah`
--
DELIMITER $$
CREATE TRIGGER `tg_sawah` AFTER UPDATE ON `sawah`
 FOR EACH ROW BEGIN 
insert into sawah (id_sawah, luas_sawah, alamat_sawah) VALUES
(new.id_sawah, new.luas_sawah, new.alamat_sawah);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_swh` BEFORE UPDATE ON `sawah`
 FOR EACH ROW BEGIN
insert into sawah (id_sawah, luas_sawah, alamat_sawah)VALUES
(old.id_sawah, old.luas_sawah, old.alamat_sawah);
end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantulbarat`
--
ALTER TABLE `bantulbarat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bantulselatan`
--
ALTER TABLE `bantulselatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bantultimur`
--
ALTER TABLE `bantultimur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bantulutara`
--
ALTER TABLE `bantulutara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mengelola`
--
ALTER TABLE `mengelola`
  ADD PRIMARY KEY (`id_kelola`);

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id_petani`);

--
-- Indexes for table `sawah`
--
ALTER TABLE `sawah`
  ADD PRIMARY KEY (`id_sawah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantulbarat`
--
ALTER TABLE `bantulbarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bantulselatan`
--
ALTER TABLE `bantulselatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bantultimur`
--
ALTER TABLE `bantultimur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bantulutara`
--
ALTER TABLE `bantulutara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sawah`
--
ALTER TABLE `sawah`
  MODIFY `id_sawah` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `mengelola`
--
ALTER TABLE `mengelola`
  ADD CONSTRAINT `mengelola_ibfk_1` FOREIGN KEY (`id_kelola`) REFERENCES `petani` (`id_petani`);

--
-- Constraints for table `sawah`
--
ALTER TABLE `sawah`
  ADD CONSTRAINT `sawah_ibfk_1` FOREIGN KEY (`id_sawah`) REFERENCES `mengelola` (`id_kelola`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

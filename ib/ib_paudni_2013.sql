-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2013 at 10:51 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ib`
--

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1', NULL, 'N;'),
('Authenticated', '27', NULL, 'N;'),
('Authenticated', '47', NULL, 'N;'),
('Authenticated', '7', NULL, 'N;'),
('Guest', '2', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Admin', 2, NULL, NULL, 'N;'),
('Authenticated', 2, NULL, NULL, 'N;'),
('Guest', 2, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitemchild`
--


-- --------------------------------------------------------

--
-- Table structure for table `ib_kursus`
--

CREATE TABLE IF NOT EXISTS `ib_kursus` (
  `ib_kursus_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ib_kursus_peserta_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_peserta_jk` int(11) NOT NULL,
  `ib_kursus_peserta_tmplahir` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_peserta_tgllahir` date NOT NULL,
  `ib_kursus_peserta_negara` int(11) NOT NULL,
  `ib_kursus_peserta_pasport` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_peserta_pasport_start` date NOT NULL,
  `ib_kursus_peserta_pasport_exp` date NOT NULL,
  `ib_kursus_peserta_alamat_ln` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_peserta_alamat_id` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_peserta_prop_id` int(11) NOT NULL,
  `ib_kursus_peserta_kabkot_id` int(11) NOT NULL,
  `ib_kursus_lbg_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_lbg_alamat` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_lbg_prop_id` int(11) NOT NULL,
  `ib_kursus_lbg_kabkot_id` int(11) NOT NULL,
  `ib_kursus_lbg_kodepos` int(11) NOT NULL,
  `ib_kursus_lbg_tlp` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_lbg_fax` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_lbg_ijin_oleh` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_lbg_ijin_oleh_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ib_kursus_lbg_ijin_no` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ib_kursus_lbg_ijin_tgl` date NOT NULL,
  `ib_kursus_lbg_ijin_start` date NOT NULL,
  `ib_kursus_lbg_ijin_exp` date NOT NULL,
  `ib_kursus_peserta_biaya` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_peserta_alasan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_peserta_jaminan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_peserta_pendidikan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_kursus_peserta_nosurat` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ib_kursus_peserta_tglsurat` date NOT NULL,
  `ib_jeniskursus` int(3) NOT NULL,
  `ib_kursus_create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ib_kursus_update_at` datetime NOT NULL,
  `ib_kursus_update_by` int(11) NOT NULL,
  `ib_kursus_status` int(11) NOT NULL,
  PRIMARY KEY (`ib_kursus_id`),
  KEY `user_id` (`user_id`),
  KEY `ib_kursus_peserta_negara` (`ib_kursus_peserta_negara`),
  KEY `ib_kursus_peserta_kabkot_id` (`ib_kursus_peserta_kabkot_id`),
  KEY `ib_kursus_peserta_prop_id` (`ib_kursus_peserta_prop_id`),
  KEY `ib_kursus_lbg_prop_id` (`ib_kursus_lbg_prop_id`),
  KEY `ib_kursus_lbg_kabkot_id` (`ib_kursus_lbg_kabkot_id`),
  KEY `ib_kursus_peserta_jk` (`ib_kursus_peserta_jk`),
  KEY `ib_jeniskursus` (`ib_jeniskursus`),
  KEY `ib_kursus_update_by` (`ib_kursus_update_by`),
  KEY `ib_kursus_status` (`ib_kursus_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `ib_kursus`
--

INSERT INTO `ib_kursus` (`ib_kursus_id`, `user_id`, `ib_kursus_peserta_name`, `ib_kursus_peserta_jk`, `ib_kursus_peserta_tmplahir`, `ib_kursus_peserta_tgllahir`, `ib_kursus_peserta_negara`, `ib_kursus_peserta_pasport`, `ib_kursus_peserta_pasport_start`, `ib_kursus_peserta_pasport_exp`, `ib_kursus_peserta_alamat_ln`, `ib_kursus_peserta_alamat_id`, `ib_kursus_peserta_prop_id`, `ib_kursus_peserta_kabkot_id`, `ib_kursus_lbg_name`, `ib_kursus_lbg_alamat`, `ib_kursus_lbg_prop_id`, `ib_kursus_lbg_kabkot_id`, `ib_kursus_lbg_kodepos`, `ib_kursus_lbg_tlp`, `ib_kursus_lbg_fax`, `ib_kursus_lbg_ijin_oleh`, `ib_kursus_lbg_ijin_oleh_name`, `ib_kursus_lbg_ijin_no`, `ib_kursus_lbg_ijin_tgl`, `ib_kursus_lbg_ijin_start`, `ib_kursus_lbg_ijin_exp`, `ib_kursus_peserta_biaya`, `ib_kursus_peserta_alasan`, `ib_kursus_peserta_jaminan`, `ib_kursus_peserta_pendidikan`, `ib_kursus_peserta_nosurat`, `ib_kursus_peserta_tglsurat`, `ib_jeniskursus`, `ib_kursus_create_at`, `ib_kursus_update_at`, `ib_kursus_update_by`, `ib_kursus_status`) VALUES
(47, 47, 'Harismo Aji, S.Si', 0, 'Malang', '1980-05-01', 2067, '01.02.03.04', '2012-01-01', '2013-01-01', 'Samhong Street 246A', 'Graha Utama Serpong Blok E, No.8', 11, 1101, 'IMLAC (Indonesia Language Center)', 'Jl. Gajayana No. 21B', 11, 1101, 34534, '3245345', '345345', 'Kepala Dinas Pendidikan Simeulue', 'Prof. Dr. Kartolo, CISA, CEH', 'DP/02001/03/2007', '2007-03-04', '2007-04-03', '2015-04-03', 'Biaya ditanggung sendiri', 'Memahami Bahasa Indonesia', 'Pimpinan Lembaga Kursus IMLAC', 'Malang International School', '34.54/03/2013', '2013-04-25', 8, '2013-04-06 18:04:14', '2013-04-27 23:07:32', 47, 107),
(67, 7, 'poui', 0, 'puiop', '2000-02-01', 7, 'pou', '2012-01-03', '2013-11-22', 'uiop', 'uiopuiop', 12, 1202, 'dfghdfgh', 'dfghdfgh', 12, 1202, 345345, '345345345', '345345345', '34563456', '', '', '2013-04-16', '2013-04-11', '2013-09-13', 'wetywety', 'ertyrty', 'sdgsdfg', 'sdfgreueryuerty', '', '0000-00-00', 17, '2013-04-08 15:58:50', '2013-04-08 17:51:19', 7, 107),
(87, 7, 'Eva Fatmawati', 1, 'Cirebon', '1980-01-13', 2067, '1234.98/2009', '2009-01-27', '2014-07-10', 'Wallstreet 34', 'Jl Merdeka 41', 32, 3274, 'Sentosa Mekar Jaya', 'Jl Diponegoro 255', 35, 3579, 65314, '0341-511460', '0341-588578', 'Kepala Dinas Pendidikan Kota Batu', 'Prof. Dr. Zainal Rofi''i, CISA, CEH', '123.65.356', '2010-02-02', '2010-02-27', '2015-03-31', 'Biaya Sendiri', 'Mempelajari Bahasa Jawa', 'Joe Satriani', 'Sarjana Akuntansi', '23.12/asdf.23', '2013-05-01', 11, '2013-04-08 22:37:48', '2013-05-08 15:56:30', 1, 47),
(107, 47, 'James Bond', 0, 'New York', '1970-02-04', 4707, '234-78678', '2011-02-01', '2014-04-04', 'asdfffd', 'asdfasdf', 34, 3402, 'fsadfasdf', 'asdfasdf', 34, 3471, 2343, '4554543', 'ddfgdsf', 'asdfasdf', '', '', '2010-02-02', '2010-03-01', '2015-04-04', 'asdfdas', 'gdgdfsg', 'adsfgasf', 'asdfgasfdg', '', '0000-00-00', 8, '2013-04-19 18:33:24', '2013-05-08 15:56:33', 47, 47),
(127, 47, 'Julia Perez', 1, 'Sydney', '2008-02-01', 267, '123-345435', '2011-02-05', '2013-12-13', 'abdabaf', 'ioykjghkghj', 19, 1901, 'ewtre', 'dfgsdfgdf', 19, 1901, 23432, 'asdfasd', 'asdfasdf', 'asdfasdf', '', '', '2010-02-12', '2010-02-12', '2013-12-13', 'asdfasdf', 'asdfasdf', 'asdfasdfasdf', 'asdfasdfasdhsdg', '', '0000-00-00', 11, '2013-04-19 19:04:36', '2013-04-19 19:04:36', 47, 7);

-- --------------------------------------------------------

--
-- Table structure for table `ib_kursus_upload`
--

CREATE TABLE IF NOT EXISTS `ib_kursus_upload` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `kursus_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `upload_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `update_by` int(11) NOT NULL,
  `file_surat` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_kuasa` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_nilek` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_kurikulum` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_aktanotaris` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_pengesahankumham` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_domisili` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_alasan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_biaya` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_jaminan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_paspor` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_cv` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_foto` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_ijazah` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_sehat` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_pernyataan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`upload_id`),
  UNIQUE KEY `kursus_id` (`kursus_id`),
  KEY `user_id` (`user_id`),
  KEY `update_by` (`update_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=328 ;

--
-- Dumping data for table `ib_kursus_upload`
--

INSERT INTO `ib_kursus_upload` (`upload_id`, `kursus_id`, `user_id`, `upload_at`, `update_at`, `update_by`, `file_surat`, `file_kuasa`, `file_nilek`, `file_kurikulum`, `file_aktanotaris`, `file_pengesahankumham`, `file_domisili`, `file_alasan`, `file_biaya`, `file_jaminan`, `file_paspor`, `file_cv`, `file_foto`, `file_ijazah`, `file_sehat`, `file_pernyataan`) VALUES
(247, 47, 47, '2013-04-19 17:39:17', '2013-05-04 18:28:00', 47, 'Nescafe Vanilla Latte 640 gr - 61 (1).jpg', 'Nescafe Mocha Latte 375 gr (kopi+krimer+Gula+Moca) - 46.jpg', 'Kitkat Green Tea 110 isi 12 pc.jpg', 'Mini Dadu Wafer Take It (1kg-146; 500gr-74; 250gr-37).jpg', 'Nestle Pink Guava 600 gr - 39,5.jpg', 'Nestea Lemon Tea 1 kg - 49,5.jpg', 'Nescafe Lemonade 640 gr - 41.jpg', 'Dark Mede (1 kg- 139, 500gr 70, 250gr 36).jpg', 'Silver Quin Bites Mede (1kg-128; 500gr-65; 250gr-33).jpg', 'Roasted Almond (1 kg 150, 500gr 75, 250gr 38).jpg', 'Cadbury Hot Chocolate 450 gr (15 Sachet @30 gr) - 52,5.jpg', 'Nestle Milo 960 gr - 55.jpg', 'Nescafe Latte 500 gr - 37,5 (1).jpg', 'Nescafe Vanilla Latte 640 gr - 61 (1).jpg', 'Delfi Hot Cocoa 20 Sachet@25 gr-41.jpg', 'my JS1000 BTB_2.jpg'),
(267, 107, 47, '2013-04-19 19:08:52', '2013-04-22 01:06:52', 47, 'Cadbury Hot Chocolate 450 gr (15 Sachet @30 gr) - 52,5.jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'my JS1000 BTB_3.jpg', 'my JS1000 BTB.jpg', 'my JS1000 BTB_1.jpg', 'my JS1000 BTB_2.jpg', 'my JS1000 BTB_3.jpg', 'my JS1000 BTB.jpg', 'my JS1000 BTB_1.jpg', 'my JS1000 BTB_2.jpg', 'my JS1000 BTB_3.jpg', 'my JS1000 BTB.jpg', 'my JS1000 BTB_1.jpg', 'my JS1000 BTB_2.jpg', 'my JS1000 BTB_3.jpg'),
(307, 87, 7, '2013-05-04 15:16:13', '2013-05-04 19:52:23', 7, 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg'),
(327, 67, 7, '2013-05-04 19:49:59', '2013-05-04 19:52:07', 7, 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ib_kursus_upload_nilai`
--

CREATE TABLE IF NOT EXISTS `ib_kursus_upload_nilai` (
  `nilai_kursus_id` int(11) NOT NULL AUTO_INCREMENT,
  `ib_kursus_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `update_by` int(11) NOT NULL,
  `v_surat` int(1) NOT NULL,
  `v_kuasa` int(1) NOT NULL,
  `v_nilek` int(1) NOT NULL,
  `v_kurikulum` int(1) NOT NULL,
  `v_aktanotaris` int(1) NOT NULL,
  `v_pengesahankumham` int(1) NOT NULL,
  `v_domisili` int(1) NOT NULL,
  `v_alasan` int(1) NOT NULL,
  `v_biaya` int(1) NOT NULL,
  `v_jaminan` int(1) NOT NULL,
  `v_paspor` int(1) NOT NULL,
  `v_cv` int(1) NOT NULL,
  `v_foto` int(1) NOT NULL,
  `v_ijazah` int(1) NOT NULL,
  `v_sehat` int(1) NOT NULL,
  `v_pernyataan` int(1) NOT NULL,
  `global_reason` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nilai_kursus_id`),
  UNIQUE KEY `upload_id` (`ib_kursus_id`),
  KEY `user_id` (`created_by`),
  KEY `update_by` (`update_by`),
  KEY `v_surat` (`v_surat`),
  KEY `v_kuasa` (`v_kuasa`),
  KEY `v_nilek` (`v_nilek`),
  KEY `v_kurikulum` (`v_kurikulum`),
  KEY `v_aktanotaris` (`v_aktanotaris`),
  KEY `v_pengesahankumham` (`v_pengesahankumham`),
  KEY `v_domisili` (`v_domisili`),
  KEY `v_alasan` (`v_alasan`),
  KEY `v_biaya` (`v_biaya`),
  KEY `v_jaminan` (`v_jaminan`),
  KEY `v_paspor` (`v_paspor`),
  KEY `v_cv` (`v_cv`),
  KEY `v_foto` (`v_foto`),
  KEY `v_ijazah` (`v_ijazah`),
  KEY `v_sehat` (`v_sehat`),
  KEY `v_pernyataan` (`v_pernyataan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=208 ;

--
-- Dumping data for table `ib_kursus_upload_nilai`
--

INSERT INTO `ib_kursus_upload_nilai` (`nilai_kursus_id`, `ib_kursus_id`, `created_by`, `create_at`, `update_at`, `update_by`, `v_surat`, `v_kuasa`, `v_nilek`, `v_kurikulum`, `v_aktanotaris`, `v_pengesahankumham`, `v_domisili`, `v_alasan`, `v_biaya`, `v_jaminan`, `v_paspor`, `v_cv`, `v_foto`, `v_ijazah`, `v_sehat`, `v_pernyataan`, `global_reason`) VALUES
(127, 107, 47, '2013-04-20 15:35:42', '2013-04-22 01:07:46', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '<ol><li>asfdasdf</li><li>ewrtwert</li></ol>'),
(147, 47, 47, '2013-04-20 17:45:14', '2013-05-07 15:15:45', 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 1, 'Tolong diupload lagi ya<br>'),
(187, 87, 7, '2013-05-04 15:16:14', '2013-05-07 13:23:20', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Tulis keterangan jika dokumen bermasalah'),
(207, 67, 7, '2013-05-04 19:49:59', '2013-05-05 14:12:18', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Tulis keterangan jika dokumen bermasalah');

-- --------------------------------------------------------

--
-- Table structure for table `ib_paud`
--

CREATE TABLE IF NOT EXISTS `ib_paud` (
  `ib_paud_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ib_paud_peserta_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_peserta_jk` int(11) NOT NULL,
  `ib_paud_peserta_tmplahir` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_peserta_tgllahir` date NOT NULL,
  `ib_paud_peserta_negara` int(11) NOT NULL,
  `ib_paud_ayah_wn` int(11) NOT NULL,
  `ib_paud_ayah_pasport` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_ayah_pasport_start` date NOT NULL,
  `ib_paud_ayah_pasport_exp` date NOT NULL,
  `ib_paud_ayah_ktp` varchar(30) NOT NULL,
  `ib_paud_ayah_ktp_start` date NOT NULL,
  `ib_paud_ayah_ktp_exp` date NOT NULL,
  `ib_paud_ibu_wn` int(11) NOT NULL,
  `ib_paud_ibu_pasport` varchar(50) NOT NULL,
  `ib_paud_ibu_pasport_start` date NOT NULL,
  `ib_paud_ibu_pasport_exp` date NOT NULL,
  `ib_paud_ibu_ktp` varchar(30) NOT NULL,
  `ib_paud_ibu_ktp_start` date NOT NULL,
  `ib_paud_ibu_ktp_exp` date NOT NULL,
  `ib_paud_peserta_surat` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_peserta_surat_tgl` date NOT NULL,
  `ib_paud_peserta_ortu_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_peserta_ortu_name_ibu` varchar(100) NOT NULL,
  `ib_paud_peserta_ortu_job` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_peserta_kk` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_peserta_tgjwb` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_peserta_alamat_ln` text NOT NULL,
  `ib_paud_peserta_alamat_id` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_peserta_prop_id` int(11) NOT NULL,
  `ib_paud_peserta_kabkot_id` int(11) NOT NULL,
  `ib_paud_lbg_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_lbg_alamat` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_lbg_prop_id` int(11) NOT NULL,
  `ib_paud_lbg_kabkot_id` int(11) NOT NULL,
  `ib_paud_lbg_kodepos` int(11) NOT NULL,
  `ib_paud_lbg_tlp` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_lbg_fax` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_lbg_ijin_oleh` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_lbg_ijin_tgl` date NOT NULL,
  `ib_paud_lbg_ijin_start` date NOT NULL,
  `ib_paud_lbg_ijin_exp` date NOT NULL,
  `ib_paud_peserta_jaminan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_paud_create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ib_paud_update_at` datetime NOT NULL,
  `ib_paud_update_by` int(11) NOT NULL,
  `ib_paud_status` int(11) NOT NULL,
  PRIMARY KEY (`ib_paud_id`),
  KEY `user_id` (`user_id`),
  KEY `ib_paud_peserta_negara` (`ib_paud_peserta_negara`),
  KEY `ib_paud_peserta_kabkot_id` (`ib_paud_peserta_kabkot_id`),
  KEY `ib_paud_peserta_prop_id` (`ib_paud_peserta_prop_id`),
  KEY `ib_paud_lbg_prop_id` (`ib_paud_lbg_prop_id`),
  KEY `ib_paud_lbg_kabkot_id` (`ib_paud_lbg_kabkot_id`),
  KEY `ib_paud_peserta_jk` (`ib_paud_peserta_jk`),
  KEY `ib_paud_update_by` (`ib_paud_update_by`),
  KEY `ib_paud_status` (`ib_paud_status`),
  KEY `ib_paud_ayah_wn` (`ib_paud_ayah_wn`),
  KEY `ib_paud_ibu_wn` (`ib_paud_ibu_wn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `ib_paud`
--

INSERT INTO `ib_paud` (`ib_paud_id`, `user_id`, `ib_paud_peserta_name`, `ib_paud_peserta_jk`, `ib_paud_peserta_tmplahir`, `ib_paud_peserta_tgllahir`, `ib_paud_peserta_negara`, `ib_paud_ayah_wn`, `ib_paud_ayah_pasport`, `ib_paud_ayah_pasport_start`, `ib_paud_ayah_pasport_exp`, `ib_paud_ayah_ktp`, `ib_paud_ayah_ktp_start`, `ib_paud_ayah_ktp_exp`, `ib_paud_ibu_wn`, `ib_paud_ibu_pasport`, `ib_paud_ibu_pasport_start`, `ib_paud_ibu_pasport_exp`, `ib_paud_ibu_ktp`, `ib_paud_ibu_ktp_start`, `ib_paud_ibu_ktp_exp`, `ib_paud_peserta_surat`, `ib_paud_peserta_surat_tgl`, `ib_paud_peserta_ortu_name`, `ib_paud_peserta_ortu_name_ibu`, `ib_paud_peserta_ortu_job`, `ib_paud_peserta_kk`, `ib_paud_peserta_tgjwb`, `ib_paud_peserta_alamat_ln`, `ib_paud_peserta_alamat_id`, `ib_paud_peserta_prop_id`, `ib_paud_peserta_kabkot_id`, `ib_paud_lbg_name`, `ib_paud_lbg_alamat`, `ib_paud_lbg_prop_id`, `ib_paud_lbg_kabkot_id`, `ib_paud_lbg_kodepos`, `ib_paud_lbg_tlp`, `ib_paud_lbg_fax`, `ib_paud_lbg_ijin_oleh`, `ib_paud_lbg_ijin_tgl`, `ib_paud_lbg_ijin_start`, `ib_paud_lbg_ijin_exp`, `ib_paud_peserta_jaminan`, `ib_paud_create_at`, `ib_paud_update_at`, `ib_paud_update_by`, `ib_paud_status`) VALUES
(47, 47, 'Sudharmono', 0, 'Surabaya', '1980-04-05', 2067, 2, 'B. 89790', '2001-03-01', '2013-12-31', '98978765456', '2010-01-01', '2015-03-06', 1, 'G. 345656', '2011-02-02', '2015-03-05', '546768970001', '2011-02-02', '2016-03-03', '45/op/678.J', '2013-05-09', 'Budi Yuwono', 'Marina', 'Wiraswasta', '4567.h.78', 'Pimpinan Lembaga PAUD', '', 'Jl. Tjut Njak Dien 234F', 11, 1101, 'TK Internasional Sukhoi', 'Jl Diponegoro 3C', 11, 1101, 345345, '3245345', '345345', 'Kepala Dinas Pendidikan Simeulue', '2013-04-09', '2013-04-01', '2014-02-28', 'asdfasdf', '2013-04-06 18:04:14', '2013-05-10 00:34:08', 1, 107),
(107, 7, 'Ahmad Dhani', 0, 'Kabul', '2009-02-05', 7, 1, 'A 23578', '2012-02-09', '2013-12-27', '4356474574756', '2010-02-04', '2015-03-04', 2, 'R 4555456', '2011-02-09', '2016-04-08', '3453475674567', '2009-02-03', '2016-04-07', 'safdasdf', '2013-05-09', 'Ali Khadafi', 'Kate Winslet', 'Swasta', '345dsdg456', 'Orang Tua', 'St. Louis 23A/34H, Kabul, Afghanistan', 'Jl Sriwijaya 356', 16, 1674, 'TK NEGERI PEMBINA', 'Jl Diponegoro 342B', 12, 1202, 534453, '34534345', '34554354', 'Kepala Dinas Pendidikan Mandailing Natal', '2008-03-28', '2008-03-28', '2020-03-05', 'asdfasdfasdf', '2013-05-04 18:53:35', '2013-05-10 00:15:05', 1, 47);

-- --------------------------------------------------------

--
-- Table structure for table `ib_paud_upload`
--

CREATE TABLE IF NOT EXISTS `ib_paud_upload` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `paud_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `upload_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `update_by` int(11) NOT NULL,
  `file_surat` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_kuasa` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_biaya` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_paspor_anak` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_aktalahir` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_paspor_ortu` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_kk` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_nikah` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_jaminan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_domisili` varchar(200) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`upload_id`),
  KEY `paud_id` (`paud_id`),
  KEY `user_id` (`user_id`),
  KEY `update_by` (`update_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=188 ;

--
-- Dumping data for table `ib_paud_upload`
--

INSERT INTO `ib_paud_upload` (`upload_id`, `paud_id`, `user_id`, `upload_at`, `update_at`, `update_by`, `file_surat`, `file_kuasa`, `file_biaya`, `file_paspor_anak`, `file_aktalahir`, `file_paspor_ortu`, `file_kk`, `file_nikah`, `file_jaminan`, `file_domisili`) VALUES
(167, 47, 47, '2013-05-04 16:07:21', '2013-05-07 13:17:10', 47, 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Nestle Pink Guava 600 gr - 39,5.jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg'),
(187, 107, 7, '2013-05-04 19:19:40', '2013-05-04 20:20:59', 7, 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg', 'Kitkat  15 gr (134;46pc, 68;23pc, 34;11pc).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ib_paud_upload_nilai`
--

CREATE TABLE IF NOT EXISTS `ib_paud_upload_nilai` (
  `nilai_paud_id` int(11) NOT NULL AUTO_INCREMENT,
  `ib_paud_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `update_by` int(11) NOT NULL,
  `v_surat` int(1) NOT NULL,
  `v_kuasa` int(1) NOT NULL,
  `v_biaya` int(1) NOT NULL,
  `v_paspor_anak` int(1) NOT NULL,
  `v_aktalahir` int(1) NOT NULL,
  `v_paspor_ortu` int(1) NOT NULL,
  `v_kk` int(1) NOT NULL,
  `v_nikah` int(1) NOT NULL,
  `v_jaminan` int(1) NOT NULL,
  `v_domisili` int(1) NOT NULL,
  `global_reason` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nilai_paud_id`),
  UNIQUE KEY `upload_id` (`ib_paud_id`),
  KEY `created_by` (`created_by`),
  KEY `update_by` (`update_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `ib_paud_upload_nilai`
--

INSERT INTO `ib_paud_upload_nilai` (`nilai_paud_id`, `ib_paud_id`, `created_by`, `create_at`, `update_at`, `update_by`, `v_surat`, `v_kuasa`, `v_biaya`, `v_paspor_anak`, `v_aktalahir`, `v_paspor_ortu`, `v_kk`, `v_nikah`, `v_jaminan`, `v_domisili`, `global_reason`) VALUES
(27, 47, 47, '2013-05-04 16:07:21', '2013-05-07 13:46:58', 1, 0, 0, 1, 0, 0, 0, 1, 1, 0, 0, 'Tulis keterangan jika dokumen bermasalah'),
(47, 107, 7, '2013-05-04 19:19:40', '2013-05-04 20:21:33', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Tulis keterangan jika dokumen bermasalah');

-- --------------------------------------------------------

--
-- Table structure for table `ib_rcountries`
--

CREATE TABLE IF NOT EXISTS `ib_rcountries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL DEFAULT '',
  `alpha_2` varchar(2) NOT NULL DEFAULT '',
  `alpha_3` varchar(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4968 ;

--
-- Dumping data for table `ib_rcountries`
--

INSERT INTO `ib_rcountries` (`id`, `country`, `alpha_2`, `alpha_3`) VALUES
(7, 'Afghanistan', 'af', 'afg'),
(27, 'Aland Islands', 'ax', 'ala'),
(47, 'Albania', 'al', 'alb'),
(67, 'Algeria', 'dz', 'dza'),
(87, 'American Samoa', 'as', 'asm'),
(107, 'Andorra', 'ad', 'and'),
(127, 'Angola', 'ao', 'ago'),
(147, 'Anguilla', 'ai', 'aia'),
(167, 'Antarctica', 'aq', ''),
(187, 'Antigua and Barbuda', 'ag', 'atg'),
(207, 'Argentina', 'ar', 'arg'),
(227, 'Armenia', 'am', 'arm'),
(247, 'Aruba', 'aw', 'abw'),
(267, 'Australia', 'au', 'aus'),
(287, 'Austria', 'at', 'aut'),
(307, 'Azerbaijan', 'az', 'aze'),
(327, 'Bahamas', 'bs', 'bhs'),
(347, 'Bahrain', 'bh', 'bhr'),
(367, 'Bangladesh', 'bd', 'bgd'),
(387, 'Barbados', 'bb', 'brb'),
(407, 'Belarus', 'by', 'blr'),
(427, 'Belgium', 'be', 'bel'),
(447, 'Belize', 'bz', 'blz'),
(467, 'Benin', 'bj', 'ben'),
(487, 'Bermuda', 'bm', 'bmu'),
(507, 'Bhutan', 'bt', 'btn'),
(527, 'Bolivia, Plurinational State of', 'bo', 'bol'),
(547, 'Bonaire, Sint Eustatius and Saba', 'bq', 'bes'),
(567, 'Bosnia and Herzegovina', 'ba', 'bih'),
(587, 'Botswana', 'bw', 'bwa'),
(607, 'Bouvet Island', 'bv', ''),
(627, 'Brazil', 'br', 'bra'),
(647, 'British Indian Ocean Territory', 'io', ''),
(667, 'Brunei Darussalam', 'bn', 'brn'),
(687, 'Bulgaria', 'bg', 'bgr'),
(707, 'Burkina Faso', 'bf', 'bfa'),
(727, 'Burundi', 'bi', 'bdi'),
(747, 'Cambodia', 'kh', 'khm'),
(767, 'Cameroon', 'cm', 'cmr'),
(787, 'Canada', 'ca', 'can'),
(807, 'Cape Verde', 'cv', 'cpv'),
(827, 'Cayman Islands', 'ky', 'cym'),
(847, 'Central African Republic', 'cf', 'caf'),
(867, 'Chad', 'td', 'tcd'),
(887, 'Chile', 'cl', 'chl'),
(907, 'China', 'cn', 'chn'),
(927, 'Christmas Island', 'cx', ''),
(947, 'Cocos (Keeling) Islands', 'cc', ''),
(967, 'Colombia', 'co', 'col'),
(987, 'Comoros', 'km', 'com'),
(1007, 'Congo', 'cg', 'cog'),
(1027, 'Congo, The Democratic Republic of the', 'cd', 'cod'),
(1047, 'Cook Islands', 'ck', 'cok'),
(1067, 'Costa Rica', 'cr', 'cri'),
(1087, 'Cote d''Ivoire', 'ci', 'civ'),
(1107, 'Croatia', 'hr', 'hrv'),
(1127, 'Cuba', 'cu', 'cub'),
(1147, 'Curacao', 'cw', 'cuw'),
(1167, 'Cyprus', 'cy', 'cyp'),
(1187, 'Czech Republic', 'cz', 'cze'),
(1207, 'Denmark', 'dk', 'dnk'),
(1227, 'Djibouti', 'dj', 'dji'),
(1247, 'Dominica', 'dm', 'dma'),
(1267, 'Dominican Republic', 'do', 'dom'),
(1287, 'Ecuador', 'ec', 'ecu'),
(1307, 'Egypt', 'eg', 'egy'),
(1327, 'El Salvador', 'sv', 'slv'),
(1347, 'Equatorial Guinea', 'gq', 'gnq'),
(1367, 'Eritrea', 'er', 'eri'),
(1387, 'Estonia', 'ee', 'est'),
(1407, 'Ethiopia', 'et', 'eth'),
(1427, 'Falkland Islands (Malvinas)', 'fk', 'flk'),
(1447, 'Faroe Islands', 'fo', 'fro'),
(1467, 'Fiji', 'fj', 'fji'),
(1487, 'Finland', 'fi', 'fin'),
(1507, 'France', 'fr', 'fra'),
(1527, 'French Guiana', 'gf', 'guf'),
(1547, 'French Polynesia', 'pf', 'pyf'),
(1567, 'French Southern Territories', 'tf', ''),
(1587, 'Gabon', 'ga', 'gab'),
(1607, 'Gambia', 'gm', 'gmb'),
(1627, 'Georgia', 'ge', 'geo'),
(1647, 'Germany', 'de', 'deu'),
(1667, 'Ghana', 'gh', 'gha'),
(1687, 'Gibraltar', 'gi', 'gib'),
(1707, 'Greece', 'gr', 'grc'),
(1727, 'Greenland', 'gl', 'grl'),
(1747, 'Grenada', 'gd', 'grd'),
(1767, 'Guadeloupe', 'gp', 'glp'),
(1787, 'Guam', 'gu', 'gum'),
(1807, 'Guatemala', 'gt', 'gtm'),
(1827, 'Guernsey', 'gg', 'ggy'),
(1847, 'Guinea', 'gn', 'gin'),
(1867, 'Guinea-Bissau', 'gw', 'gnb'),
(1887, 'Guyana', 'gy', 'guy'),
(1907, 'Haiti', 'ht', 'hti'),
(1927, 'Heard Island and McDonald Islands', 'hm', ''),
(1947, 'Holy See (Vatican City State)', 'va', 'vat'),
(1967, 'Honduras', 'hn', 'hnd'),
(1987, 'Hong Kong', 'hk', 'hkg'),
(2007, 'Hungary', 'hu', 'hun'),
(2027, 'Iceland', 'is', 'isl'),
(2047, 'India', 'in', 'ind'),
(2067, 'Indonesia', 'id', 'idn'),
(2087, 'Iran, Islamic Republic of', 'ir', 'irn'),
(2107, 'Iraq', 'iq', 'irq'),
(2127, 'Ireland', 'ie', 'irl'),
(2147, 'Isle of Man', 'im', 'imn'),
(2167, 'Israel', 'il', 'isr'),
(2187, 'Italy', 'it', 'ita'),
(2207, 'Jamaica', 'jm', 'jam'),
(2227, 'Japan', 'jp', 'jpn'),
(2247, 'Jersey', 'je', 'jey'),
(2267, 'Jordan', 'jo', 'jor'),
(2287, 'Kazakhstan', 'kz', 'kaz'),
(2307, 'Kenya', 'ke', 'ken'),
(2327, 'Kiribati', 'ki', 'kir'),
(2347, 'Korea, Democratic People''s Republic of', 'kp', 'prk'),
(2367, 'Korea, Republic of', 'kr', 'kor'),
(2387, 'Kuwait', 'kw', 'kwt'),
(2407, 'Kyrgyzstan', 'kg', 'kgz'),
(2427, 'Lao People''s Democratic Republic', 'la', 'lao'),
(2447, 'Latvia', 'lv', 'lva'),
(2467, 'Lebanon', 'lb', 'lbn'),
(2487, 'Lesotho', 'ls', 'lso'),
(2507, 'Liberia', 'lr', 'lbr'),
(2527, 'Libyan Arab Jamahiriya', 'ly', 'lby'),
(2547, 'Liechtenstein', 'li', 'lie'),
(2567, 'Lithuania', 'lt', 'ltu'),
(2587, 'Luxembourg', 'lu', 'lux'),
(2607, 'Macao', 'mo', 'mac'),
(2627, 'Macedonia, The former Yugoslav Republic of', 'mk', 'mkd'),
(2647, 'Madagascar', 'mg', 'mdg'),
(2667, 'Malawi', 'mw', 'mwi'),
(2687, 'Malaysia', 'my', 'mys'),
(2707, 'Maldives', 'mv', 'mdv'),
(2727, 'Mali', 'ml', 'mli'),
(2747, 'Malta', 'mt', 'mlt'),
(2767, 'Marshall Islands', 'mh', 'mhl'),
(2787, 'Martinique', 'mq', 'mtq'),
(2807, 'Mauritania', 'mr', 'mrt'),
(2827, 'Mauritius', 'mu', 'mus'),
(2847, 'Mayotte', 'yt', 'myt'),
(2867, 'Mexico', 'mx', 'mex'),
(2887, 'Micronesia, Federated States of', 'fm', 'fsm'),
(2907, 'Moldova, Republic of', 'md', 'mda'),
(2927, 'Monaco', 'mc', 'mco'),
(2947, 'Mongolia', 'mn', 'mng'),
(2967, 'Montenegro', 'me', 'mne'),
(2987, 'Montserrat', 'ms', 'msr'),
(3007, 'Morocco', 'ma', 'mar'),
(3027, 'Mozambique', 'mz', 'moz'),
(3047, 'Myanmar', 'mm', 'mmr'),
(3067, 'Namibia', 'na', 'nam'),
(3087, 'Nauru', 'nr', 'nru'),
(3107, 'Nepal', 'np', 'npl'),
(3127, 'Netherlands', 'nl', 'nld'),
(3147, 'New Caledonia', 'nc', 'ncl'),
(3167, 'New Zealand', 'nz', 'nzl'),
(3187, 'Nicaragua', 'ni', 'nic'),
(3207, 'Niger', 'ne', 'ner'),
(3227, 'Nigeria', 'ng', 'nga'),
(3247, 'Niue', 'nu', 'niu'),
(3267, 'Norfolk Island', 'nf', 'nfk'),
(3287, 'Northern Mariana Islands', 'mp', 'mnp'),
(3307, 'Norway', 'no', 'nor'),
(3327, 'Oman', 'om', 'omn'),
(3347, 'Pakistan', 'pk', 'pak'),
(3367, 'Palau', 'pw', 'plw'),
(3387, 'Palestinian Territory, Occupied', 'ps', 'pse'),
(3407, 'Panama', 'pa', 'pan'),
(3427, 'Papua New Guinea', 'pg', 'png'),
(3447, 'Paraguay', 'py', 'pry'),
(3467, 'Peru', 'pe', 'per'),
(3487, 'Philippines', 'ph', 'phl'),
(3507, 'Pitcairn', 'pn', 'pcn'),
(3527, 'Poland', 'pl', 'pol'),
(3547, 'Portugal', 'pt', 'prt'),
(3567, 'Puerto Rico', 'pr', 'pri'),
(3587, 'Qatar', 'qa', 'qat'),
(3607, 'Reunion', 're', 'reu'),
(3627, 'Romania', 'ro', 'rou'),
(3647, 'Russian Federation', 'ru', 'rus'),
(3667, 'Rwanda', 'rw', 'rwa'),
(3687, 'Saint Barthelemy', 'bl', 'blm'),
(3707, 'Saint Helena, Ascension and Tristan Da Cunha', 'sh', 'shn'),
(3727, 'Saint Kitts and Nevis', 'kn', 'kna'),
(3747, 'Saint Lucia', 'lc', 'lca'),
(3767, 'Saint Martin (French Part)', 'mf', 'maf'),
(3787, 'Saint Pierre and Miquelon', 'pm', 'spm'),
(3807, 'Saint Vincent and The Grenadines', 'vc', 'vct'),
(3827, 'Samoa', 'ws', 'wsm'),
(3847, 'San Marino', 'sm', 'smr'),
(3867, 'Sao Tome and Principe', 'st', 'stp'),
(3887, 'Saudi Arabia', 'sa', 'sau'),
(3907, 'Senegal', 'sn', 'sen'),
(3927, 'Serbia', 'rs', 'srb'),
(3947, 'Seychelles', 'sc', 'syc'),
(3967, 'Sierra Leone', 'sl', 'sle'),
(3987, 'Singapore', 'sg', 'sgp'),
(4007, 'Sint Maarten (Dutch Part)', 'sx', 'sxm'),
(4027, 'Slovakia', 'sk', 'svk'),
(4047, 'Slovenia', 'si', 'svn'),
(4067, 'Solomon Islands', 'sb', 'slb'),
(4087, 'Somalia', 'so', 'som'),
(4107, 'South Africa', 'za', 'zaf'),
(4127, 'South Georgia and The South Sandwich Islands', 'gs', ''),
(4147, 'South Sudan', 'ss', 'ssd'),
(4167, 'Spain', 'es', 'esp'),
(4187, 'Sri Lanka', 'lk', 'lka'),
(4207, 'Sudan', 'sd', 'sdn'),
(4227, 'Suriname', 'sr', 'sur'),
(4247, 'Svalbard and Jan Mayen', 'sj', 'sjm'),
(4267, 'Swaziland', 'sz', 'swz'),
(4287, 'Sweden', 'se', 'swe'),
(4307, 'Switzerland', 'ch', 'che'),
(4327, 'Syrian Arab Republic', 'sy', 'syr'),
(4347, 'Taiwan, Province of China', 'tw', ''),
(4367, 'Tajikistan', 'tj', 'tjk'),
(4387, 'Tanzania, United Republic of', 'tz', 'tza'),
(4407, 'Thailand', 'th', 'tha'),
(4427, 'Timor-Leste', 'tl', 'tls'),
(4447, 'Togo', 'tg', 'tgo'),
(4467, 'Tokelau', 'tk', 'tkl'),
(4487, 'Tonga', 'to', 'ton'),
(4507, 'Trinidad and Tobago', 'tt', 'tto'),
(4527, 'Tunisia', 'tn', 'tun'),
(4547, 'Turkey', 'tr', 'tur'),
(4567, 'Turkmenistan', 'tm', 'tkm'),
(4587, 'Turks and Caicos Islands', 'tc', 'tca'),
(4607, 'Tuvalu', 'tv', 'tuv'),
(4627, 'Uganda', 'ug', 'uga'),
(4647, 'Ukraine', 'ua', 'ukr'),
(4667, 'United Arab Emirates', 'ae', 'are'),
(4687, 'United Kingdom', 'gb', 'gbr'),
(4707, 'United States', 'us', 'usa'),
(4727, 'United States Minor Outlying Islands', 'um', ''),
(4747, 'Uruguay', 'uy', 'ury'),
(4767, 'Uzbekistan', 'uz', 'uzb'),
(4787, 'Vanuatu', 'vu', 'vut'),
(4807, 'Venezuela, Bolivarian Republic of', 've', 'ven'),
(4827, 'Viet Nam', 'vn', 'vnm'),
(4847, 'Virgin Islands, British', 'vg', 'vgb'),
(4867, 'Virgin Islands, U.S.', 'vi', 'vir'),
(4887, 'Wallis and Futuna', 'wf', 'wlf'),
(4907, 'Western Sahara', 'eh', 'esh'),
(4927, 'Yemen', 'ye', 'yem'),
(4947, 'Zambia', 'zm', 'zmb'),
(4967, 'Zimbabwe', 'zw', 'zwe');

-- --------------------------------------------------------

--
-- Table structure for table `ib_rjeniskelamin`
--

CREATE TABLE IF NOT EXISTS `ib_rjeniskelamin` (
  `ib_jeniskelamin_id` int(11) NOT NULL,
  `ib_jeniskelamin` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_jeniskelamin_title` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ib_jeniskelamin_huruf` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ib_jeniskelamin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ib_rjeniskelamin`
--

INSERT INTO `ib_rjeniskelamin` (`ib_jeniskelamin_id`, `ib_jeniskelamin`, `ib_jeniskelamin_title`, `ib_jeniskelamin_huruf`) VALUES
(0, 'Laki-laki', 'Mr', 'L'),
(1, 'Perempuan', 'Ms', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `ib_rjeniskursus`
--

CREATE TABLE IF NOT EXISTS `ib_rjeniskursus` (
  `jeniskursus_id` int(3) NOT NULL,
  `jeniskursus` varchar(24) DEFAULT NULL,
  PRIMARY KEY (`jeniskursus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ib_rjeniskursus`
--

INSERT INTO `ib_rjeniskursus` (`jeniskursus_id`, `jeniskursus`) VALUES
(1, 'Administrasi Perkantoran'),
(2, 'Akuntansi'),
(3, 'Akupunktur'),
(4, 'Anak Buah Kapal'),
(5, 'Asisten Perawat'),
(6, 'Baby Sitter'),
(7, 'Bahasa Belanda'),
(8, 'Bahasa Indonesia'),
(9, 'Bahasa Inggris'),
(10, 'Bahasa Italia'),
(11, 'Bahasa Jawa'),
(12, 'Bahasa Jepang'),
(13, 'Bahasa Jerman'),
(14, 'Bahasa Korea'),
(15, 'Bahasa Mandarin'),
(16, 'Bahasa Prancis'),
(17, 'Bahasa Rusia'),
(18, 'Bahasa Spanyol'),
(19, 'Bimbingan Belajar'),
(20, 'Bordir'),
(21, 'Broadcasting'),
(22, 'Care Giver'),
(23, 'Desain Grafis'),
(24, 'Desain Interior'),
(25, 'Ekspor Impor'),
(26, 'Elektronika'),
(27, 'Garment'),
(28, 'Hantaran'),
(29, 'Jurnalistik'),
(30, 'Kesetaraan'),
(31, 'Komputer'),
(32, 'Komputer Akuntansi'),
(33, 'Las'),
(34, 'Mengemudi'),
(35, 'Menjahit'),
(36, 'Mental Aritmatika'),
(37, 'Merangkai Bunga'),
(38, 'Meubeler'),
(39, 'Modeling'),
(40, 'Otomotif'),
(41, 'Pariwisata'),
(42, 'Pasar Modal'),
(43, 'Pendidik PAUD'),
(44, 'Penerbang (Pilot)'),
(45, 'Perhotelan'),
(46, 'Perikanan'),
(47, 'Perpajakan'),
(48, 'Pertamanan'),
(49, 'Pertanian'),
(50, 'Peternakan'),
(51, 'Photografi'),
(52, 'Pramugari'),
(53, 'Public Relation'),
(54, 'Public Speaking'),
(55, 'Refleksi'),
(56, 'Sablon'),
(57, 'Security'),
(58, 'Sekretaris'),
(59, 'Senam'),
(60, 'Seni Drama'),
(61, 'Seni Musik'),
(62, 'Seni Rupa'),
(63, 'Seni Tari'),
(64, 'Spa'),
(65, 'Tata Boga'),
(66, 'Tata Kecantikan Kulit'),
(67, 'Tata Kecantikan Rambut'),
(68, 'Tata Rias Pengantin'),
(69, 'Topografi'),
(99, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `ib_rlabel`
--

CREATE TABLE IF NOT EXISTS `ib_rlabel` (
  `label_id` int(1) NOT NULL AUTO_INCREMENT,
  `label` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`label_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `ib_rlabel`
--

INSERT INTO `ib_rlabel` (`label_id`, `label`) VALUES
(7, 'important'),
(27, 'warning'),
(47, 'info'),
(67, 'success');

-- --------------------------------------------------------

--
-- Table structure for table `ib_rstatus`
--

CREATE TABLE IF NOT EXISTS `ib_rstatus` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `label_id` int(1) NOT NULL,
  `desc` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`status_id`),
  KEY `status_id` (`status_id`),
  KEY `label_id` (`label_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `ib_rstatus`
--

INSERT INTO `ib_rstatus` (`status_id`, `status`, `label_id`, `desc`) VALUES
(7, 'Belum Upload', 7, 'Dengan status "Belum Upload" ini artinya pemohon belum mengupload dokumen yang akan dijadikan acuan penilaian dalam tahap berikutnya yaitu verifikasi fisik.'),
(27, 'Menunggu Verifikasi Fisik', 27, 'Pada tahap ini berarti dokumen pemohon sudah diupload, pemohon diharuskan datang ke Sub Bagian Kerjasama, Bagian Hukum dan Kepegawaian,  Direktorat Jenderal Pendidikan Anak Usia Dini, Nonformal dan Informal, Kementerian Pendidikan dan Kebudayaan dengan menunjukkan nomor pendaftaran dan dokumen asli dari dokumen-dokumen yang sudah diupload untuk dilakukan verifikasi fisik dokumen.'),
(47, 'Menunggu Persetujuan Pejabat Berwenang', 47, 'Dokumen telah diverifikasi oleh operator dan tidak ada dokumen yang bermasalah. Saat ini berkas dan dokumen sedang menunggu persetujuan dari Pejabat berwenang.'),
(67, 'Selesai', 67, ''),
(107, 'Upload Ulang', 7, 'Status "Upload Ulang" menunjukkan bahwa dokumen telah diverifikasi oleh petugas namun terdapat dokumen yang tidak memenuhi persyaratan, yaitu dokumen dengan label "TIDAK", silahkan mengupload ulang dokumen anda, klik "Upload Ulang" di halaman "Daftar IB-Kursus"'),
(127, 'Ditolak', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `ib_rstatusdokumen`
--

CREATE TABLE IF NOT EXISTS `ib_rstatusdokumen` (
  `ib_dok_status_id` int(1) NOT NULL,
  `dok_status` varchar(5) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ib_dok_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ib_rstatusdokumen`
--

INSERT INTO `ib_rstatusdokumen` (`ib_dok_status_id`, `dok_status`) VALUES
(0, 'OK'),
(1, 'TIDAK');

-- --------------------------------------------------------

--
-- Table structure for table `ib_rwniwna`
--

CREATE TABLE IF NOT EXISTS `ib_rwniwna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wn` varchar(3) NOT NULL,
  `wnlong` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ib_rwniwna`
--

INSERT INTO `ib_rwniwna` (`id`, `wn`, `wnlong`) VALUES
(1, 'WNI', 'Warga Negara Indonesia'),
(2, 'WNA', 'Warga Negara Asing');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=228 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`user_id`, `lastname`, `firstname`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Demo', 'Demo'),
(7, 'Aji', 'Harismo'),
(27, 'Fatmawati', 'Eva'),
(47, 'garut', 'dodol'),
(167, 'Gokil', 'Amih'),
(187, 'Belantara', 'Hutan'),
(207, 'Gemuk', 'Dul'),
(227, 'Juniartriarso', 'Memet');

-- --------------------------------------------------------

--
-- Table structure for table `profiles_fields`
--

CREATE TABLE IF NOT EXISTS `profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `profiles_fields`
--

INSERT INTO `profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `psr_rkabupaten_kota`
--

CREATE TABLE IF NOT EXISTS `psr_rkabupaten_kota` (
  `psr_kabkot_id` int(11) NOT NULL AUTO_INCREMENT,
  `psr_kabkot_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `psr_prop_id` int(11) NOT NULL,
  `psr_reg_id` int(11) NOT NULL,
  `psr_posted_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `psr_lastupdate` datetime NOT NULL,
  `psr_sync` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`psr_kabkot_id`),
  KEY `psr_prop_id` (`psr_prop_id`),
  KEY `psr_reg_id` (`psr_reg_id`),
  KEY `psr_prop_id_2` (`psr_prop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9472 ;

--
-- Dumping data for table `psr_rkabupaten_kota`
--

INSERT INTO `psr_rkabupaten_kota` (`psr_kabkot_id`, `psr_kabkot_name`, `psr_prop_id`, `psr_reg_id`, `psr_posted_by`, `psr_lastupdate`, `psr_sync`) VALUES
(1101, 'SIMEULUE', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1102, 'ACEH SINGKIL', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1103, 'ACEH SELATAN', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1104, 'ACEH TENGGARA', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1105, 'ACEH TIMUR', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1106, 'ACEH TENGAH', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1107, 'ACEH BARAT', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1108, 'ACEH BESAR', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1109, 'PIDIE', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1110, 'BIREUEN', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1111, 'ACEH UTARA', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1112, 'ACEH BARAT DAYA', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1113, 'GAYO LUES', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1114, 'ACEH TAMIANG', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1115, 'NAGAN RAYA', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1116, 'ACEH JAYA', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1117, 'BENER MERIAH', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1118, 'PIDIE JAYA', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1171, 'BANDA ACEH', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1172, 'SABANG', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1173, 'LANGSA', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1174, 'LHOKSEUMAWE', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1175, 'SUBULUSSALAM', 11, 0, 'admin', '2011-06-29 00:36:26', 0),
(1201, 'NIAS', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1202, 'MANDAILING NATAL', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1203, 'TAPANULI SELATAN', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1204, 'TAPANULI TENGAH', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1205, 'TAPANULI UTARA', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1206, 'TOBA SAMOSIR', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1207, 'LABUHAN BATU', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1208, 'ASAHAN', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1209, 'SIMALUNGUN', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1210, 'DAIRI', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1211, 'KARO', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1212, 'DELI SERDANG', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1213, 'LANGKAT', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1214, 'NIAS SELATAN', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1215, 'HUMBANG HASUNDUTAN', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1216, 'PAKPAK BHARAT', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1217, 'SAMOSIR', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1218, 'SERDANG BEDAGAI', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1219, 'BATU BARA', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1220, 'PADANG LAWAS UTARA', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1221, 'PADANG LAWAS', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1222, 'LABUHAN BATU SELATAN', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1223, 'LABUHAN BATU UTARA', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1224, 'NIAS UTARA', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1225, 'NIAS BARAT', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1271, 'SIBOLGA', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1272, 'TANJUNG BALAI', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1273, 'PEMATANG SIANTAR', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1274, 'TEBING TINGGI', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1275, 'MEDAN', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1276, 'BINJAI', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1277, 'PADANGSIDIMPUAN', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1278, 'GUNUNGSITOLI', 12, 0, 'admin', '2011-06-29 00:36:26', 0),
(1301, 'KEPULAUAN MENTAWAI', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1302, 'PESISIR SELATAN', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1303, 'SOLOK', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1304, 'SIJUNJUNG', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1305, 'TANAH DATAR', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1306, 'PADANG PARIAMAN', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1307, 'AGAM', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1308, 'LIMA PULUH KOTA', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1309, 'PASAMAN', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1310, 'SOLOK SELATAN', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1311, 'DHARMAS RAYA', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1312, 'PASAMAN BARAT', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1371, 'PADANG', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1372, 'KOTA SOLOK', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1373, 'SAWAH LUNTO', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1374, 'PADANG PANJANG', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1375, 'BUKITTINGGI', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1376, 'PAYAKUMBUH', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1377, 'PARIAMAN', 13, 0, 'admin', '2011-06-29 00:36:26', 0),
(1401, 'KUANTAN SINGINGI', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1402, 'INDRAGIRI HULU', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1403, 'INDRAGIRI HILIR', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1404, 'PELALAWAN', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1405, 'S I A K', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1406, 'KAMPAR', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1407, 'ROKAN HULU', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1408, 'BENGKALIS', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1409, 'ROKAN HILIR', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1410, 'KEPULAUAN MERANTI', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1471, 'PEKANBARU', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1473, 'DUMAI', 14, 0, 'admin', '2011-06-29 00:36:26', 0),
(1501, 'KERINCI', 15, 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1502, 'MERANGIN', 15, 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1503, 'SAROLANGUN', 15, 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1504, 'BATANG HARI', 15, 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1505, 'MUARO JAMBI', 15, 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1506, 'TANJUNG JABUNG TIMUR', 15, 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1507, 'TANJUNG JABUNG BARAT', 15, 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1508, 'TEBO', 15, 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1509, 'BUNGO', 15, 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1571, 'KOTA JAMBI', 15, 1, '11/06/2008  00:00:01', '2009-03-30 16:22:44', 2),
(1572, 'SUNGAI PENUH', 15, 1, '11/06/2008  00:00:01', '2009-03-30 16:22:44', 2),
(1601, 'OGAN KOMERING ULU', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1602, 'OGAN KOMERING ILIR', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1603, 'MUARA ENIM', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1604, 'LAHAT', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1605, 'MUSI RAWAS', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1606, 'MUSI BANYUASIN', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1607, 'BANYU ASIN', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1608, 'OGAN KOMERING ULU SELATAN', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1609, 'OGAN KOMERING ULU TIMUR', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1610, 'OGAN ILIR', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1611, 'EMPAT LAWANG', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1671, 'PALEMBANG', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1672, 'PRABUMULIH', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1673, 'PAGAR ALAM', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1674, 'LUBUK LINGGAU', 16, 0, 'admin', '2011-06-29 00:36:26', 0),
(1701, 'BENGKULU SELATAN', 17, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1702, 'REJANG LEBONG', 17, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1703, 'BENGKULU UTARA', 17, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1704, 'KAUR', 17, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1705, 'SELUMA', 17, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1706, 'MUKOMUKO', 17, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1707, 'LEBONG', 17, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1708, 'KEPAHIANG', 17, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1709, 'BENGKULU TENGAH', 17, 2, 'admin', '2009-04-29 17:22:56', 2),
(1771, 'KOTA BENGKULU', 17, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1801, 'LAMPUNG BARAT', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1802, 'TANGGAMUS', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1803, 'LAMPUNG SELATAN', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1804, 'LAMPUNG TIMUR', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1805, 'LAMPUNG TENGAH', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1806, 'LAMPUNG UTARA', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1807, 'WAY KANAN', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1808, 'TULANGBAWANG', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1809, 'PESAWARAN', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1810, 'PRINGSEWU', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1811, 'MESUJI', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1812, 'TULANG BAWANG BARAT', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1871, 'KOTA BANDAR LAMPUNG', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1872, 'KOTA METRO', 18, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1901, 'BANGKA', 19, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1902, 'BELITUNG', 19, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1903, 'BANGKA BARAT', 19, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1904, 'BANGKA TENGAH', 19, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1905, 'BANGKA SELATAN', 19, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1906, 'BELITUNG TIMUR', 19, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(1971, 'KOTA PANGKAL PINANG', 19, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(2101, 'KARIMUN', 21, 0, 'admin', '2011-06-29 00:36:26', 0),
(2102, 'BINTAN', 21, 0, 'admin', '2011-06-29 00:36:26', 0),
(2103, 'NATUNA', 21, 0, 'admin', '2011-06-29 00:36:26', 0),
(2104, 'LINGGA', 21, 0, 'admin', '2011-06-29 00:36:26', 0),
(2105, 'KEPULAUAN ANAMBAS', 21, 0, 'admin', '2011-06-29 00:36:26', 0),
(2171, 'B A T A M', 21, 0, 'admin', '2011-06-29 00:36:26', 0),
(2172, 'TANJUNG PINANG', 21, 0, 'admin', '2011-06-29 00:36:26', 0),
(3101, 'KEPULAUAN SERIBU', 31, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3171, 'JAKARTA SELATAN', 31, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3172, 'JAKARTA TIMUR', 31, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3173, 'JAKARTA PUSAT', 31, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3174, 'JAKARTA BARAT', 31, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3175, 'JAKARTA UTARA', 31, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3201, 'BOGOR', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3202, 'SUKABUMI', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3203, 'CIANJUR', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3204, 'BANDUNG', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3205, 'GARUT', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3206, 'TASIKMALAYA', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3207, 'CIAMIS', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3208, 'KUNINGAN', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3209, 'CIREBON', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3210, 'MAJALENGKA', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3211, 'SUMEDANG', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3212, 'INDRAMAYU', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3213, 'SUBANG', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3214, 'PURWAKARTA', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3215, 'KARAWANG', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3216, 'BEKASI', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3217, 'BANDUNG BARAT', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3271, 'KOTA BOGOR', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3272, 'KOTA SUKABUMI', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3273, 'KOTA BANDUNG', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3274, 'KOTA CIREBON', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3275, 'KOTA BEKASI', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3276, 'KOTA DEPOK', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3277, 'KOTA CIMAHI', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3278, 'KOTA TASIKMALAYA', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3279, 'KOTA BANJAR', 32, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3301, 'CILACAP', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3302, 'BANYUMAS', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3303, 'PURBALINGGA', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3304, 'BANJARNEGARA', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3305, 'KEBUMEN', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3306, 'PURWOREJO', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3307, 'WONOSOBO', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3308, 'MAGELANG', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3309, 'BOYOLALI', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3310, 'KLATEN', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3311, 'SUKOHARJO', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3312, 'WONOGIRI', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3313, 'KARANGANYAR', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3314, 'SRAGEN', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3315, 'GROBOGAN', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3316, 'BLORA', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3317, 'REMBANG', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3318, 'PATI', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3319, 'KUDUS', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3320, 'JEPARA', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3321, 'DEMAK', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3322, 'SEMARANG', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3323, 'TEMANGGUNG', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3324, 'KENDAL', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3325, 'BATANG', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3326, 'PEKALONGAN', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3327, 'PEMALANG', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3328, 'TEGAL', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3329, 'BREBES', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3371, 'KOTA MAGELANG', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3372, 'KOTA SURAKARTA', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3373, 'KOTA SALATIGA', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3374, 'KOTA SEMARANG', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3375, 'KOTA PEKALONGAN', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3376, 'KOTA TEGAL', 33, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3401, 'KULON PROGO', 34, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3402, 'BANTUL', 34, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3403, 'GUNUNG KIDUL', 34, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3404, 'SLEMAN', 34, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3471, 'KOTA YOGYAKARTA', 34, 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3501, 'PACITAN', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3502, 'PONOROGO', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3503, 'TRENGGALEK', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3504, 'TULUNGAGUNG', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3505, 'BLITAR', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3506, 'KEDIRI', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3507, 'MALANG', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3508, 'LUMAJANG', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3509, 'JEMBER', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3510, 'BANYUWANGI', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3511, 'BONDOWOSO', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3512, 'SITUBONDO', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3513, 'PROBOLINGGO', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3514, 'PASURUAN', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3515, 'SIDOARJO', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3516, 'MOJOKERTO', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3517, 'JOMBANG', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3518, 'NGANJUK', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3519, 'MADIUN', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3520, 'MAGETAN', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3521, 'NGAWI', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3522, 'BOJONEGORO', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3523, 'TUBAN', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3524, 'LAMONGAN', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3525, 'GRESIK', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3526, 'BANGKALAN', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3527, 'SAMPANG', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3528, 'PAMEKASAN', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3529, 'SUMENEP', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3571, 'KOTA KEDIRI', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3572, 'KOTA BLITAR', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3573, 'KOTA MALANG', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3574, 'PROBOLINGGO', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3575, 'PASURUAN', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3576, 'KOTA MOJOKERTO', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3577, 'KOTA MADIUN', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3578, 'SURABAYA', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3579, 'BATU', 35, 0, 'admin', '2011-06-29 00:36:26', 0),
(3601, 'PANDEGLANG', 36, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3602, 'LEBAK', 36, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3603, 'TANGERANG', 36, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3604, 'SERANG', 36, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3671, 'KOTA TANGERANG', 36, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3672, 'KOTA CILEGON', 36, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3673, 'KOTA SERANG', 36, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(3674, 'KOTA TANGERANG SELATAN', 36, 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(5101, 'JEMBRANA', 51, 7, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(5102, 'TABANAN', 51, 7, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(5103, 'BADUNG', 51, 7, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(5104, 'GIANYAR', 51, 7, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(5105, 'KLUNGKUNG', 51, 7, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(5106, 'BANGLI', 51, 7, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(5107, 'KARANG ASEM', 51, 7, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(5108, 'BULELENG', 51, 7, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(5171, 'KOTA DENPASAR', 51, 7, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(5201, 'LOMBOK BARAT', 52, 0, 'admin', '2011-06-29 00:36:26', 0),
(5202, 'LOMBOK TENGAH', 52, 0, 'admin', '2011-06-29 00:36:26', 0),
(5203, 'LOMBOK TIMUR', 52, 0, 'admin', '2011-06-29 00:36:26', 0),
(5204, 'SUMBAWA', 52, 0, 'admin', '2011-06-29 00:36:26', 0),
(5205, 'DOMPU', 52, 0, 'admin', '2011-06-29 00:36:26', 0),
(5206, 'BIMA', 52, 0, 'admin', '2011-06-29 00:36:26', 0),
(5207, 'SUMBAWA BARAT', 52, 0, 'admin', '2011-06-29 00:36:26', 0),
(5208, 'LOMBOK UTARA', 52, 0, 'admin', '2011-06-29 00:36:26', 0),
(5271, 'MATARAM', 52, 0, 'admin', '2011-06-29 00:36:26', 0),
(5272, 'BIMA', 52, 0, 'admin', '2011-06-29 00:36:26', 0),
(5301, 'SUMBA BARAT', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5302, 'SUMBA TIMUR', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5303, 'KUPANG', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5304, 'TIMOR TENGAH SELATAN', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5305, 'TIMOR TENGAH UTARA', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5306, 'BELU', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5307, 'ALOR', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5308, 'LEMBATA', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5309, 'FLORES TIMUR', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5310, 'SIKKA', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5311, 'ENDE', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5312, 'NGADA', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5313, 'MANGGARAI', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5314, 'ROTE NDAO', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5315, 'MANGGARAI BARAT', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5316, 'SUMBA TENGAH', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5317, 'SUMBA BARAT DAYA', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5318, 'NAGEKEO', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5319, 'MANGGARAI TIMUR', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5320, 'SABU RAIJUA', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(5371, 'KOTA KUPANG', 53, 0, 'admin', '2011-06-29 00:36:26', 0),
(6101, 'SAMBAS', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6102, 'BENGKAYANG', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6103, 'LANDAK', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6104, 'PONTIANAK', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6105, 'SANGGAU', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6106, 'KETAPANG', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6107, 'SINTANG', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6108, 'KAPUAS HULU', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6109, 'SEKADAU', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6110, 'MELAWI', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6111, 'KAYONG UTARA', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6112, 'KUBU RAYA', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6171, 'KOTA PONTIANAK', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6172, 'KOTA SINGKAWANG', 61, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6201, 'KOTAWARINGIN BARAT', 62, 6, '11/06/2008  00:00:01', '2009-09-11 15:27:14', 1),
(6202, 'KOTAWARINGIN TIMUR', 62, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6203, 'KAPUAS', 62, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6204, 'BARITO SELATAN', 62, 6, '11/06/2008  00:00:01', '2009-05-02 10:47:06', 2),
(6205, 'BARITO UTARA', 62, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6206, 'SUKAMARA', 62, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6207, 'LAMANDAU', 62, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6208, 'SERUYAN', 62, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6209, 'KATINGAN', 62, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6210, 'PULANG PISAU', 62, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6211, 'GUNUNG MAS', 62, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6212, 'BARITO TIMUR', 62, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6213, 'MURUNG RAYA', 62, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6271, 'KOTA PALANGKA RAYA ', 62, 6, '11/06/2008  00:00:01', '2009-09-11 15:26:19', 1),
(6301, 'TANAH LAUT', 63, 6, 'btkppkb_kalsel', '2009-03-07 11:33:18', 2),
(6302, 'KOTA BARU', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6303, 'BANJAR', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6304, 'BARITO KUALA', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6305, 'TAPIN', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6306, 'HULU SUNGAI SELATAN', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6307, 'HULU SUNGAI TENGAH', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6308, 'HULU SUNGAI UTARA', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6309, 'TABALONG', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6310, 'TANAH BUMBU', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6311, 'BALANGAN', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6371, 'KOTA BANJARMASIN', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6372, 'KOTA BANJAR BARU', 63, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6401, 'PASER', 64, 6, 'PKB_Kaltim', '2008-06-12 09:31:06', 2),
(6402, 'KUTAI BARAT', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6403, 'KUTAI KARTANEGARA', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6404, 'KUTAI TIMUR', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6405, 'BERAU', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6406, 'MALINAU', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6407, 'BULUNGAN', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6408, 'NUNUKAN', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6409, 'PENAJAM PASER UTARA', 64, 6, '11/06/2008  00:00:01', '2009-03-20 13:24:26', 2),
(6410, 'TANA TIDUNG', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6471, 'KOTA BALIKPAPAN', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6472, 'KOTA SAMARINDA', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6473, 'KOTA TARAKAN', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(6474, 'KOTA BONTANG', 64, 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(7101, 'BOLAANG MONGONDOW', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7102, 'MINAHASA', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7103, 'KEPULAUAN SANGIHE', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7104, 'KEPULAUAN TALAUD', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7105, 'MINAHASA SELATAN', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7106, 'MINAHASA UTARA', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7107, 'BOLAANG MONGONDOW UTARA', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7108, 'SIAU TAGULANDANG BIARO', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7109, 'MINAHASA TENGGARA', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7110, 'BOLAANG MONGONDOW SELATAN', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7111, 'BOLAANG MONGONDOW TIMUR', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7171, 'MANADO', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7172, 'BITUNG', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7173, 'TOMOHON', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7174, 'KOTAMOBAGU', 71, 0, 'admin', '2011-06-29 00:36:26', 0),
(7201, 'BANGGAI KEPULAUAN', 72, 0, 'admin', '2011-06-29 00:36:26', 0),
(7202, 'BANGGAI', 72, 0, 'admin', '2011-06-29 00:36:26', 0),
(7203, 'MOROWALI', 72, 0, 'admin', '2011-06-29 00:36:26', 0),
(7204, 'POSO', 72, 0, 'admin', '2011-06-29 00:36:26', 0),
(7205, 'DONGGALA', 72, 0, 'admin', '2011-06-29 00:36:26', 0),
(7206, 'TOLI-TOLI', 72, 0, 'admin', '2011-06-29 00:36:26', 0),
(7207, 'BUOL', 72, 0, 'admin', '2011-06-29 00:36:26', 0),
(7208, 'PARIGI MOUTONG', 72, 0, 'admin', '2011-06-29 00:36:26', 0),
(7209, 'TOJO UNA-UNA', 72, 0, 'admin', '2011-06-29 00:36:26', 0),
(7210, 'SIGI', 72, 0, 'admin', '2011-06-29 00:36:26', 0),
(7271, 'PALU', 72, 0, 'admin', '2011-06-29 00:36:26', 0),
(7301, 'KEPULAUAN SELAYAR', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7302, 'BULUKUMBA', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7303, 'BANTAENG', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7304, 'JENEPONTO', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7305, 'TAKALAR', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7306, 'GOWA', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7307, 'SINJAI', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7308, 'MAROS', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7309, 'PANGKAJENE DAN KEPULAUAN', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7310, 'BARRU', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7311, 'BONE', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7312, 'SOPPENG', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7313, 'WAJO', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7314, 'SIDENRENG RAPPANG', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7315, 'PINRANG', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7316, 'ENREKANG', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7317, 'LUWU', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7318, 'TANA TORAJA', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7322, 'LUWU UTARA', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7325, 'LUWU TIMUR', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7326, 'TORAJA UTARA', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7371, 'MAKASSAR', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7372, 'PARE-PARE', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7373, 'PALOPO', 73, 0, 'admin', '2011-06-29 00:36:26', 0),
(7401, 'BUTON', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7402, 'MUNA', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7403, 'KONAWE', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7404, 'KOLAKA', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7405, 'KONAWE SELATAN', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7406, 'BOMBANA', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7407, 'WAKATOBI', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7408, 'KOLAKA UTARA', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7409, 'BUTON UTARA', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7410, 'KONAWE UTARA', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7471, 'KENDARI', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7472, 'BAU-BAU', 74, 0, 'admin', '2011-06-29 00:36:26', 0),
(7501, 'BOALEMO', 75, 0, 'admin', '2011-06-29 00:36:26', 0),
(7502, 'GORONTALO', 75, 0, 'admin', '2011-06-29 00:36:26', 0),
(7503, 'POHUWATO', 75, 0, 'admin', '2011-06-29 00:36:26', 0),
(7504, 'BONE BOLANGO', 75, 0, 'admin', '2011-06-29 00:36:26', 0),
(7505, 'GORONTALO UTARA', 75, 0, 'admin', '2011-06-29 00:36:26', 0),
(7571, 'KOTA GORONTALO', 75, 0, 'admin', '2011-06-29 00:36:26', 0),
(7601, 'MAJENE', 76, 0, 'admin', '2011-06-29 00:36:26', 0),
(7602, 'POLEWALI MANDAR', 76, 0, 'admin', '2011-06-29 00:36:26', 0),
(7603, 'MAMASA', 76, 0, 'admin', '2011-06-29 00:36:26', 0),
(7604, 'MAMUJU', 76, 0, 'admin', '2011-06-29 00:36:26', 0),
(7605, 'MAMUJU UTARA', 76, 0, 'admin', '2011-06-29 00:36:26', 0),
(8101, 'MALUKU TENGGARA BARAT', 81, 0, 'admin', '2011-06-29 00:36:26', 0),
(8102, 'MALUKU TENGGARA', 81, 0, 'admin', '2011-06-29 00:36:26', 0),
(8103, 'MALUKU TENGAH', 81, 0, 'admin', '2011-06-29 00:36:26', 0),
(8104, 'BURU', 81, 0, 'admin', '2011-06-29 00:36:26', 0),
(8105, 'KEPULAUAN ARU', 81, 0, 'admin', '2011-06-29 00:36:26', 0),
(8106, 'SERAM BAGIAN BARAT', 81, 0, 'admin', '2011-06-29 00:36:26', 0),
(8107, 'SERAM BAGIAN TIMUR', 81, 0, 'admin', '2011-06-29 00:36:26', 0),
(8108, 'MALUKU BARAT DAYA', 81, 0, 'admin', '2011-06-29 00:36:26', 0),
(8109, 'BURU SELATAN', 81, 0, 'admin', '2011-06-29 00:36:26', 0),
(8171, 'AMBON', 81, 0, 'admin', '2011-06-29 00:36:26', 0),
(8172, 'TUAL', 81, 0, 'admin', '2011-06-29 00:36:26', 0),
(8201, 'HALMAHERA BARAT', 82, 0, 'admin', '2011-06-29 00:36:26', 0),
(8202, 'HALMAHERA TENGAH', 82, 0, 'admin', '2011-06-29 00:36:26', 0),
(8203, 'KEPULAUAN SULA', 82, 0, 'admin', '2011-06-29 00:36:26', 0),
(8204, 'HALMAHERA SELATAN', 82, 0, 'admin', '2011-06-29 00:36:26', 0),
(8205, 'HALMAHERA UTARA', 82, 0, 'admin', '2011-06-29 00:36:26', 0),
(8206, 'HALMAHERA TIMUR', 82, 0, 'admin', '2011-06-29 00:36:26', 0),
(8207, 'PULAU MOROTAI', 82, 0, 'admin', '2011-06-29 00:36:26', 0),
(8271, 'TERNATE', 82, 0, 'admin', '2011-06-29 00:36:26', 0),
(8272, 'TIDORE KEPULAUAN', 82, 0, 'admin', '2011-06-29 00:36:26', 0),
(9101, 'FAKFAK', 91, 0, 'admin', '2011-06-29 00:36:26', 0),
(9102, 'KAIMANA', 91, 0, 'admin', '2011-06-29 00:36:26', 0),
(9103, 'TELUK WONDAMA', 91, 0, 'admin', '2011-06-29 00:36:26', 0),
(9104, 'TELUK BINTUNI', 91, 0, 'admin', '2011-06-29 00:36:26', 0),
(9105, 'MANOKWARI', 91, 0, 'admin', '2011-06-29 00:36:26', 0),
(9106, 'SORONG SELATAN', 91, 0, 'admin', '2011-06-29 00:36:26', 0),
(9107, 'SORONG', 91, 0, 'admin', '2011-06-29 00:36:26', 0),
(9108, 'RAJA AMPAT', 91, 0, 'admin', '2011-06-29 00:36:26', 0),
(9109, 'TAMBRAUW', 91, 0, 'admin', '2011-06-29 00:36:26', 0),
(9110, 'MAYBRAT', 91, 0, 'admin', '2011-06-29 00:36:26', 0),
(9171, 'SORONG', 91, 0, 'admin', '2011-06-29 00:36:26', 0),
(9401, 'MERAUKE', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9402, 'JAYAWIJAYA', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9403, 'JAYAPURA', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9404, 'NABIRE', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9408, 'KEPULAUAN YAPEN', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9409, 'BIAK NUMFOR', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9410, 'PANIAI', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9411, 'PUNCAK JAYA', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9412, 'MIMIKA', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9413, 'BOVEN DIGOEL', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9414, 'MAPPI', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9415, 'ASMAT', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9416, 'YAHUKIMO', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9417, 'PEGUNUNGAN BINTANG', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9418, 'TOLIKARA', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9419, 'SARMI', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9420, 'KEEROM', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9426, 'WAROPEN', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9427, 'SUPIORI', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9428, 'MAMBERAMO RAYA', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9429, 'NDUGA', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9430, 'LANNY JAYA', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9431, 'MAMBERAMO TENGAH', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9432, 'YALIMO', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9433, 'PUNCAK', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9434, 'DOGIYAI', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9435, 'INTAN JAYA', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9436, 'DEIYAI', 94, 0, 'admin', '2011-06-29 00:36:26', 0),
(9471, 'JAYAPURA', 94, 0, 'admin', '2011-06-29 00:36:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `psr_rpropinsi`
--

CREATE TABLE IF NOT EXISTS `psr_rpropinsi` (
  `psr_prop_id` int(11) NOT NULL AUTO_INCREMENT,
  `psr_prop_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `psr_reg_id` int(11) NOT NULL,
  `psr_posted_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `psr_lastupdate` datetime NOT NULL,
  `psr_sync` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`psr_prop_id`),
  KEY `psr_reg_id` (`psr_reg_id`),
  KEY `psr_reg_id_2` (`psr_reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `psr_rpropinsi`
--

INSERT INTO `psr_rpropinsi` (`psr_prop_id`, `psr_prop_name`, `psr_reg_id`, `psr_posted_by`, `psr_lastupdate`, `psr_sync`) VALUES
(11, 'NANGGROE ACEH DARUSSALAM', 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(12, 'SUMATERA UTARA', 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(13, 'SUMATERA BARAT', 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(14, 'RIAU', 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(15, 'JAMBI', 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(16, 'SUMATERA SELATAN', 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(17, 'BENGKULU', 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(18, 'LAMPUNG', 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(19, 'KEPULAUAN BANGKA BELITUNG', 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(21, 'KEPULAUAN RIAU', 1, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(31, 'DKI JAKARTA', 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(32, 'JAWA BARAT', 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(33, 'JAWA TENGAH', 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(34, 'D I YOGYAKARTA', 3, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(35, 'JAWA TIMUR', 4, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(36, 'BANTEN', 2, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(51, 'BALI', 7, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(52, 'NUSA TENGGARA BARAT', 7, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(53, 'NUSA TENGGARA TIMUR', 4, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(61, 'KALIMANTAN BARAT', 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(62, 'KALIMANTAN TENGAH', 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(63, 'KALIMANTAN SELATAN', 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(64, 'KALIMANTAN TIMUR', 6, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(71, 'SULAWESI UTARA', 5, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(72, 'SULAWESI TENGAH', 5, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(73, 'SULAWESI SELATAN', 5, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(74, 'SULAWESI TENGGARA', 5, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(75, 'GORONTALO', 5, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(76, 'SULAWESI BARAT', 5, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(81, 'MALUKU', 8, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(82, 'MALUKU UTARA', 8, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(91, 'PAPUA BARAT', 8, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2),
(94, 'PAPUA', 8, '11/06/2008  00:00:01', '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `psr_rregional`
--

CREATE TABLE IF NOT EXISTS `psr_rregional` (
  `psr_reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `psr_reg_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `psr_posted_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `psr_lastupdate` datetime NOT NULL,
  `psr_sync` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`psr_reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `psr_rregional`
--

INSERT INTO `psr_rregional` (`psr_reg_id`, `psr_reg_name`, `psr_posted_by`, `psr_lastupdate`, `psr_sync`) VALUES
(1, 'Regional 1', 'fathur1', '2007-11-26 09:03:29', 2),
(2, 'Regional 2', '', '0000-00-00 00:00:00', 2),
(3, 'Regional 3', '', '2007-11-18 10:53:27', 2),
(4, 'Regional 4', '', '2007-12-21 15:26:40', 2),
(5, 'Regional 5', '', '2007-12-21 15:26:45', 1),
(6, 'Regional 6', 'admin', '2008-04-21 08:30:20', 2),
(7, 'Regional 7', 'admin', '2008-04-21 08:30:28', 2),
(8, 'Regional 8', 'admin', '2008-04-21 08:30:37', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rights`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=228 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activkey`, `create_at`, `lastvisit_at`, `superuser`, `status`) VALUES
(1, 'admin', '36c39109070798d333d4911cb197ac7d', 'paudni.ks@gmail.com', 'fdda3e49c75ad6def58cef7ab7009212', '2013-04-05 23:38:14', '2013-05-09 09:54:39', 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', '2013-04-05 23:38:14', '2013-04-05 23:16:42', 0, 1),
(7, 'orezomi', '912ec803b2ce49e4a541068d495ab570', 'harismoaji@yahoo.com', '8becffd348903853be9e86032d26ede3', '2013-04-05 23:48:23', '2013-05-09 09:48:27', 1, 1),
(27, 'amih', 'eaddaa9c16eb0ccf9601ec2dfa3df112', 'harismoaji@gmail.com', 'ed2fa5486bfdc8d908cd1c44e37020db', '2013-04-06 17:34:33', '2013-05-04 14:41:34', 0, 1),
(47, 'qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'allindonesiaofficial@gmail.com', 'ecead5ad46d7bf1720de8a10fc6a5220', '2013-04-06 18:04:14', '2013-05-07 18:31:52', 0, 1),
(167, 'amih2', '3f063fe42a6718263f6112c5e5ad143f', 'caprievas@yahoo.com', '0c378b1aaa7f7a04ae1ec6385d6cffc8', '2013-04-21 12:07:59', '2013-04-21 11:38:26', 0, 1),
(187, 'orezomi2', '15d7000797a33d7af16c9b052f852768', 'orezomi.dream@gmail.com', '0064d2e2a3beaf5130f22a2036717c0f', '2013-04-21 12:17:06', '2013-04-21 13:37:49', 0, 1),
(207, 'dul', 'c155fd19f1bc9e9e83ce15f6444609df', 'zerrojeans@yahoo.com.sg', 'd07274aff829378461e09fc13dbd8a40', '2013-04-22 01:39:35', '0000-00-00 00:00:00', 0, 0),
(227, 'memet', 'd2e2730dd03f2d41ca576729034b5bc3', 'juniartriarso@gmail.com', '6e39f58fe9e8285effed1579bb74adb3', '2013-04-22 10:00:10', '2013-04-22 09:35:22', 0, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ib_kursus`
--
ALTER TABLE `ib_kursus`
  ADD CONSTRAINT `ib_kursus_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ib_kursus_ibfk_10` FOREIGN KEY (`ib_jeniskursus`) REFERENCES `ib_rjeniskursus` (`jeniskursus_id`),
  ADD CONSTRAINT `ib_kursus_ibfk_11` FOREIGN KEY (`ib_kursus_update_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ib_kursus_ibfk_12` FOREIGN KEY (`ib_kursus_peserta_negara`) REFERENCES `ib_rcountries` (`id`),
  ADD CONSTRAINT `ib_kursus_ibfk_13` FOREIGN KEY (`ib_kursus_status`) REFERENCES `ib_rstatus` (`status_id`),
  ADD CONSTRAINT `ib_kursus_ibfk_5` FOREIGN KEY (`ib_kursus_lbg_prop_id`) REFERENCES `psr_rpropinsi` (`psr_prop_id`),
  ADD CONSTRAINT `ib_kursus_ibfk_6` FOREIGN KEY (`ib_kursus_lbg_kabkot_id`) REFERENCES `psr_rkabupaten_kota` (`psr_kabkot_id`),
  ADD CONSTRAINT `ib_kursus_ibfk_7` FOREIGN KEY (`ib_kursus_peserta_prop_id`) REFERENCES `psr_rpropinsi` (`psr_prop_id`),
  ADD CONSTRAINT `ib_kursus_ibfk_8` FOREIGN KEY (`ib_kursus_peserta_kabkot_id`) REFERENCES `psr_rkabupaten_kota` (`psr_kabkot_id`),
  ADD CONSTRAINT `ib_kursus_ibfk_9` FOREIGN KEY (`ib_kursus_peserta_jk`) REFERENCES `ib_rjeniskelamin` (`ib_jeniskelamin_id`);

--
-- Constraints for table `ib_kursus_upload`
--
ALTER TABLE `ib_kursus_upload`
  ADD CONSTRAINT `ib_kursus_upload_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `ib_kursus` (`user_id`),
  ADD CONSTRAINT `ib_kursus_upload_ibfk_3` FOREIGN KEY (`update_by`) REFERENCES `ib_kursus` (`user_id`),
  ADD CONSTRAINT `ib_kursus_upload_ibfk_4` FOREIGN KEY (`kursus_id`) REFERENCES `ib_kursus` (`ib_kursus_id`);

--
-- Constraints for table `ib_kursus_upload_nilai`
--
ALTER TABLE `ib_kursus_upload_nilai`
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_10` FOREIGN KEY (`v_kurikulum`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_11` FOREIGN KEY (`v_aktanotaris`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_12` FOREIGN KEY (`v_pengesahankumham`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_13` FOREIGN KEY (`v_domisili`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_14` FOREIGN KEY (`v_alasan`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_15` FOREIGN KEY (`v_biaya`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_16` FOREIGN KEY (`v_jaminan`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_17` FOREIGN KEY (`v_paspor`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_18` FOREIGN KEY (`v_cv`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_19` FOREIGN KEY (`v_foto`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_20` FOREIGN KEY (`v_ijazah`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_21` FOREIGN KEY (`v_sehat`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_22` FOREIGN KEY (`v_pernyataan`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_4` FOREIGN KEY (`update_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_5` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_6` FOREIGN KEY (`ib_kursus_id`) REFERENCES `ib_kursus` (`ib_kursus_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_7` FOREIGN KEY (`v_surat`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_8` FOREIGN KEY (`v_kuasa`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`),
  ADD CONSTRAINT `ib_kursus_upload_nilai_ibfk_9` FOREIGN KEY (`v_nilek`) REFERENCES `ib_rstatusdokumen` (`ib_dok_status_id`);

--
-- Constraints for table `ib_paud`
--
ALTER TABLE `ib_paud`
  ADD CONSTRAINT `ib_paud_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ib_paud_ibfk_10` FOREIGN KEY (`ib_paud_ayah_wn`) REFERENCES `ib_rwniwna` (`id`),
  ADD CONSTRAINT `ib_paud_ibfk_11` FOREIGN KEY (`ib_paud_ibu_wn`) REFERENCES `ib_rwniwna` (`id`),
  ADD CONSTRAINT `ib_paud_ibfk_2` FOREIGN KEY (`ib_paud_peserta_jk`) REFERENCES `ib_rjeniskelamin` (`ib_jeniskelamin_id`),
  ADD CONSTRAINT `ib_paud_ibfk_3` FOREIGN KEY (`ib_paud_peserta_negara`) REFERENCES `ib_rcountries` (`id`),
  ADD CONSTRAINT `ib_paud_ibfk_4` FOREIGN KEY (`ib_paud_peserta_prop_id`) REFERENCES `psr_rpropinsi` (`psr_prop_id`),
  ADD CONSTRAINT `ib_paud_ibfk_5` FOREIGN KEY (`ib_paud_peserta_kabkot_id`) REFERENCES `psr_rkabupaten_kota` (`psr_kabkot_id`),
  ADD CONSTRAINT `ib_paud_ibfk_6` FOREIGN KEY (`ib_paud_lbg_prop_id`) REFERENCES `psr_rpropinsi` (`psr_prop_id`),
  ADD CONSTRAINT `ib_paud_ibfk_7` FOREIGN KEY (`ib_paud_lbg_kabkot_id`) REFERENCES `psr_rkabupaten_kota` (`psr_kabkot_id`),
  ADD CONSTRAINT `ib_paud_ibfk_8` FOREIGN KEY (`ib_paud_update_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ib_paud_ibfk_9` FOREIGN KEY (`ib_paud_status`) REFERENCES `ib_rstatus` (`status_id`);

--
-- Constraints for table `ib_paud_upload`
--
ALTER TABLE `ib_paud_upload`
  ADD CONSTRAINT `ib_paud_upload_ibfk_1` FOREIGN KEY (`paud_id`) REFERENCES `ib_paud` (`ib_paud_id`),
  ADD CONSTRAINT `ib_paud_upload_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `ib_paud` (`user_id`),
  ADD CONSTRAINT `ib_paud_upload_ibfk_3` FOREIGN KEY (`update_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `ib_paud_upload_nilai`
--
ALTER TABLE `ib_paud_upload_nilai`
  ADD CONSTRAINT `ib_paud_upload_nilai_ibfk_1` FOREIGN KEY (`ib_paud_id`) REFERENCES `ib_paud` (`ib_paud_id`),
  ADD CONSTRAINT `ib_paud_upload_nilai_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ib_paud_upload_nilai_ibfk_3` FOREIGN KEY (`update_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `ib_rstatus`
--
ALTER TABLE `ib_rstatus`
  ADD CONSTRAINT `ib_rstatus_ibfk_1` FOREIGN KEY (`label_id`) REFERENCES `ib_rlabel` (`label_id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `psr_rkabupaten_kota`
--
ALTER TABLE `psr_rkabupaten_kota`
  ADD CONSTRAINT `psr_rkabupaten_kota_ibfk_1` FOREIGN KEY (`psr_prop_id`) REFERENCES `psr_rpropinsi` (`psr_prop_id`);

--
-- Constraints for table `psr_rpropinsi`
--
ALTER TABLE `psr_rpropinsi`
  ADD CONSTRAINT `psr_rpropinsi_ibfk_1` FOREIGN KEY (`psr_reg_id`) REFERENCES `psr_rregional` (`psr_reg_id`);

--
-- Constraints for table `rights`
--
ALTER TABLE `rights`
  ADD CONSTRAINT `Rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

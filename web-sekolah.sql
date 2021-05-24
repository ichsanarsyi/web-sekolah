-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 07:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `no_id` varchar(20) DEFAULT NULL,
  `nama_guru` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_mapel` int(2) DEFAULT NULL,
  `pendidikan` varchar(5) DEFAULT NULL,
  `foto_guru` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `no_id`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `id_mapel`, `pendidikan`, `foto_guru`) VALUES
(3, '10001', 'Putra Putra', 'Kudus', '1984-06-06', 8, 'D3', 'acc.jpg'),
(4, '10002', 'Sassan', 'Semarang', '2021-02-21', 3, 'S1', 'Quote.png'),
(5, '10003', 'Sirajuddin', 'Bekasi', '1990-01-12', 3, 'S2', 'yosi_merah_4x6.jpg'),
(6, '10004', 'Kirishima Touka', 'Tokyo', '2021-02-06', 10, 'S1', 'Pamflet_AMDIC.png'),
(7, '10005', 'Unyil Usrok', 'Bekasi', '2021-02-02', 3, 'S2', 'Fantasia_Painting(2).jpg'),
(9, '10006', 'Kazakiri Hyouka', 'Situbondo', '2020-05-06', 8, 'S1', 'Hyouka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(3) NOT NULL,
  `nama_mapel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`) VALUES
(2, 'Bahasa Indonesia'),
(3, 'Bahasa Inggris'),
(4, 'Bahasa Arab'),
(5, 'TIK'),
(6, 'Fisika Dasar'),
(7, 'Geografi'),
(8, 'Geologi'),
(10, 'Penjaskes'),
(14, 'IPA'),
(15, 'IPS'),
(16, 'Kewirausahaan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `no_id` varchar(20) DEFAULT NULL,
  `nama_siswa` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `foto_siswa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `no_id`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `kelas`, `foto_siswa`) VALUES
(2, '90001', 'Exaan', 'Semarang', '2021-02-02', 'X', 'peta-banten.jpg'),
(3, '90002', 'San San', 'Bogor', '2021-02-10', 'XII', 'Firefox-logo_svg.png'),
(4, '90003', 'Gru', 'Ciamis', '2021-02-07', 'XII', 'FA-chowking-counter-standee-30-x-45-cm-SP-just-1.jpg'),
(5, '90004', 'Udin Penyok', 'NTT', '2000-06-15', 'X', 'mmexport1385272967723.jpg'),
(6, '90005', 'Kamijou Touma', 'Grobogan', '2000-09-21', 'X', 'Kamijou_Touma_Manga_Index1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(3) NOT NULL,
  `no_id` varchar(20) DEFAULT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `no_id`, `nama_user`, `username`, `password`, `level`) VALUES
(1, '00000', 'Admin', 'admin', 'admin', 1),
(2, '10001', 'Putra Putra', 'putra', 'putra', 2),
(3, '10002', 'Sassan', 'sassan', 'sassan', 2),
(4, '10003', 'Sirajuddin', 'sirajuddin', 'sirajuddin', 2),
(5, '10004', 'Kirishima Touka', 'kirishima', 'kirishima', 2),
(6, '10005', 'Unyil', 'unyilusrok', 'unyilusrok', 2),
(7, '90001', 'Exaan', 'exaan', 'exaan', 3),
(8, '90002', 'San San', 'san', 'san', 3),
(9, '90003', 'Gru', 'gru', 'gru', 3),
(10, '90004', 'Udin Penyok', 'udinpenyok', 'udinpenyok', 3),
(11, '10006', 'Kazakiri Hyouka', 'kazakiri', 'kazakiri', 2),
(14, '90005', 'Kamijou Touma', 'kamijout', 'kamijout', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

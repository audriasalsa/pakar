-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 05:33 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_datalatih`
--

CREATE TABLE `tb_datalatih` (
  `id_datalatih` int(5) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `id_gejala` varchar(5) NOT NULL,
  `nilai` int(3) NOT NULL,
  `id_penyakit` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datalatih`
--

INSERT INTO `tb_datalatih` (`id_datalatih`, `id_pasien`, `id_gejala`, `nilai`, `id_penyakit`) VALUES
(363, 2, 'G1', 3, 'P01'),
(364, 2, 'G2', 1, 'P01'),
(365, 2, 'G3', 1, 'P01'),
(366, 2, 'G4', 4, 'P01'),
(367, 2, 'G5', 5, 'P01'),
(368, 2, 'G6', 1, 'P01'),
(369, 2, 'G7', 3, 'P01'),
(370, 2, 'G8', 4, 'P01'),
(371, 2, 'G9', 3, 'P01'),
(372, 2, 'G10', 1, 'P01'),
(373, 2, 'G11', 5, 'P01'),
(374, 2, 'G12', 1, 'P01'),
(375, 2, 'G13', 5, 'P01'),
(376, 2, 'G14', 1, 'P01'),
(377, 2, 'G15', 1, 'P01'),
(378, 2, 'G16', 1, 'P01'),
(379, 2, 'G17', 1, 'P01'),
(380, 3, 'G1', 1, 'P01'),
(381, 3, 'G2', 4, 'P01'),
(382, 3, 'G3', 1, 'P01'),
(383, 3, 'G4', 4, 'P01'),
(384, 3, 'G5', 1, 'P01'),
(385, 3, 'G6', 4, 'P01'),
(386, 3, 'G7', 1, 'P01'),
(387, 3, 'G8', 4, 'P01'),
(388, 3, 'G9', 1, 'P01'),
(389, 3, 'G10', 3, 'P01'),
(390, 3, 'G11', 5, 'P01'),
(391, 3, 'G12', 5, 'P01'),
(392, 3, 'G13', 1, 'P01'),
(393, 3, 'G14', 1, 'P01'),
(394, 3, 'G15', 1, 'P01'),
(395, 3, 'G16', 1, 'P01'),
(396, 3, 'G17', 1, 'P01'),
(397, 4, 'G1', 1, 'P02'),
(398, 4, 'G2', 1, 'P02'),
(399, 4, 'G3', 3, 'P02'),
(400, 4, 'G4', 4, 'P02'),
(401, 4, 'G5', 1, 'P02'),
(402, 4, 'G6', 1, 'P02'),
(403, 4, 'G7', 1, 'P02'),
(404, 4, 'G8', 1, 'P02'),
(405, 4, 'G9', 1, 'P02'),
(406, 4, 'G10', 1, 'P02'),
(407, 4, 'G11', 1, 'P02'),
(408, 4, 'G12', 1, 'P02'),
(409, 4, 'G13', 1, 'P02'),
(410, 4, 'G14', 4, 'P02'),
(411, 4, 'G15', 1, 'P02'),
(412, 4, 'G16', 1, 'P02'),
(413, 4, 'G17', 3, 'P02'),
(414, 5, 'G1', 1, 'P02'),
(415, 5, 'G2', 1, 'P02'),
(416, 5, 'G3', 3, 'P02'),
(417, 5, 'G4', 1, 'P02'),
(418, 5, 'G5', 1, 'P02'),
(419, 5, 'G6', 1, 'P02'),
(420, 5, 'G7', 1, 'P02'),
(421, 5, 'G8', 1, 'P02'),
(422, 5, 'G9', 3, 'P02'),
(423, 5, 'G10', 1, 'P02'),
(424, 5, 'G11', 1, 'P02'),
(425, 5, 'G12', 1, 'P02'),
(426, 5, 'G13', 1, 'P02'),
(427, 5, 'G14', 1, 'P02'),
(428, 5, 'G15', 3, 'P02'),
(429, 5, 'G16', 3, 'P02'),
(430, 5, 'G17', 1, 'P02'),
(431, 6, 'G1', 1, 'P02'),
(432, 6, 'G2', 1, 'P02'),
(433, 6, 'G3', 1, 'P02'),
(434, 6, 'G4', 4, 'P02'),
(435, 6, 'G5', 1, 'P02'),
(436, 6, 'G6', 1, 'P02'),
(437, 6, 'G7', 1, 'P02'),
(438, 6, 'G8', 1, 'P02'),
(439, 6, 'G9', 1, 'P02'),
(440, 6, 'G10', 1, 'P02'),
(441, 6, 'G11', 1, 'P02'),
(442, 6, 'G12', 1, 'P02'),
(443, 6, 'G13', 1, 'P02'),
(444, 6, 'G14', 1, 'P02'),
(445, 6, 'G15', 1, 'P02'),
(446, 6, 'G16', 3, 'P02'),
(447, 6, 'G17', 1, 'P02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datauji`
--

CREATE TABLE `tb_datauji` (
  `id_datauji` int(5) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `id_gejala` varchar(5) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datauji`
--

INSERT INTO `tb_datauji` (`id_datauji`, `id_pasien`, `id_gejala`, `nilai`) VALUES
(16, 7, 'G1', 10),
(17, 31, 'G1', 10),
(18, 7, 'G1', 10),
(19, 7, 'G1', 10),
(20, 31, 'G1', 10),
(21, 31, 'G1', 10),
(22, 31, 'G1', 10),
(23, 31, 'G2', 10),
(24, 31, 'G3', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` varchar(5) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `nama_gejala`) VALUES
('G1', 'Nyeri pada punggung'),
('G10', 'Diare'),
('G11', 'Sembelit'),
('G12', 'Mual'),
('G13', 'pendarahan diluar jadwal menstruasi'),
('G14', 'Pertumbuhan rambut tidak normal'),
('G15', 'Rambut rontok'),
('G16', 'Kelebihan Berat badan atau obesitas'),
('G17', 'Tumbuh jerawat'),
('G2', 'Nyeri Haid'),
('G3', 'Menstruasi tidak teratur'),
('G4', 'Pendarahan yang berlebihan'),
('G5', 'Rasa sakit saat berhubungan seksual'),
('G6', 'Nyeri saat BAB dan BAK'),
('G7', 'Terdapat darah pada urin dan feses'),
('G8', 'Susah Hamil'),
('G9', 'Kembung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(5) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `umur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `umur`) VALUES
(2, 'Salsa', 12),
(3, 'Audria', 13),
(4, 'Bila', 14),
(5, 'Hafshah', 20),
(6, 'Ayla', 13),
(7, 'Bila', 13),
(8, '', 0),
(9, 'Audria', 12),
(10, 'Audria', 12),
(11, 'Audria', 12),
(12, 'Bila', 13),
(13, 'Bila', 13),
(14, 'Audria', 12),
(15, 'Hafshah', 12),
(16, 'Audria', 12),
(17, 'Audria', 13),
(18, 'Audria', 12),
(19, 'Ayla', 13),
(20, 'Ayla', 13),
(21, 'Bila', 13),
(22, 'Ayla', 12),
(23, 'Audria', 20),
(24, 'Audria', 20),
(25, 'Ayla', 12),
(26, 'Ayla', 12),
(27, 'Audria', 12),
(28, 'Test', 10),
(29, 'Kekeyi', 19),
(30, 'Audria', 10),
(31, 'Audria', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` varchar(3) NOT NULL,
  `nama_penyakit` varchar(15) NOT NULL,
  `solusi_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `nama_penyakit`, `solusi_penyakit`) VALUES
('P01', 'Endometriosis', 'Terapi, pengobatan'),
('P02', 'PCOS', 'pengobatan, peraturan diet, olahraga'),
('P03', 'Kanker Serviks', 'Operasi, Radiasi, Kemoterapi'),
('P04', 'Kanker Ovarium', 'Operasi, Kemoterapi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'audriasalsa', '202cb962ac59075b964b07152d234b70', 2),
(3, 'audriahafshah', '123', 1),
(4, 'admin', '123', 1),
(5, 'adr', '202cb962ac59075b964b07152d234b70', 2),
(6, 'aylafada', 'd9b1d7db4cd6e70935368a1efb10e377', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_datalatih`
--
ALTER TABLE `tb_datalatih`
  ADD PRIMARY KEY (`id_datalatih`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `tb_datauji`
--
ALTER TABLE `tb_datauji`
  ADD PRIMARY KEY (`id_datauji`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_datalatih`
--
ALTER TABLE `tb_datalatih`
  MODIFY `id_datalatih` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=448;

--
-- AUTO_INCREMENT for table `tb_datauji`
--
ALTER TABLE `tb_datauji`
  MODIFY `id_datauji` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_datalatih`
--
ALTER TABLE `tb_datalatih`
  ADD CONSTRAINT `tb_datalatih_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejala` (`id_gejala`),
  ADD CONSTRAINT `tb_datalatih_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_datalatih_ibfk_3` FOREIGN KEY (`id_penyakit`) REFERENCES `tb_penyakit` (`id_penyakit`);

--
-- Constraints for table `tb_datauji`
--
ALTER TABLE `tb_datauji`
  ADD CONSTRAINT `tb_datauji_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `tb_gejala` (`id_gejala`),
  ADD CONSTRAINT `tb_datauji_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

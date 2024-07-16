-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 04:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbabsensisiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `IDABSEN` int(11) NOT NULL,
  `ID` int(11) DEFAULT NULL,
  `IDSISWA` int(11) DEFAULT NULL,
  `KELAS` varchar(20) NOT NULL,
  `HARI` varchar(10) NOT NULL,
  `TANGGAL` date NOT NULL,
  `KETERANGAN` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`IDABSEN`, `ID`, `IDSISWA`, `KELAS`, `HARI`, `TANGGAL`, `KETERANGAN`) VALUES
(1, 2, 6, 'X PPLG 2', 'Rabu', '2024-07-10', 'Hadir'),
(2, 1, 2, 'X PPLG 1', 'Rabu', '2024-07-10', 'Hadir'),
(3, 1, 8, 'X PPLG 2', 'Rabu', '2024-07-10', 'Hadir'),
(4, 1, 21, 'X PPLG 1', 'Rabu', '2024-07-10', 'Hadir'),
(5, 1, 21, 'X PPLG 1', 'Rabu', '2024-07-10', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `IDSISWA` int(11) NOT NULL,
  `NIS` varchar(10) NOT NULL,
  `NAMA` varchar(25) NOT NULL,
  `KELAS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`IDSISWA`, `NIS`, `NAMA`, `KELAS`) VALUES
(1, '232410179', 'ADINDA SILVIANI', 'X PPLG 1'),
(2, '232410180', 'ADZRA ALIMAH', 'X PPLG 1'),
(3, '232410181', 'ALIFIA ASMANADIA', 'X PPLG 1'),
(4, '232410182', 'ALYA SANI SYAMSIYAH', 'X PPLG 1'),
(5, '232410184', 'DIMAS ADITIYA PRATAMA', 'X PPLG 1'),
(6, '232410214', 'AI RISMAYANI', 'X PPLG 2'),
(7, '232410215', 'AINI PUTRI', 'X PPLG 2'),
(8, '232410216', 'ANGGI DWI PRATIWI', 'X PPLG 2'),
(9, '232410217', 'ARIN', 'X PPLG 2'),
(10, '232410218', 'AZMI YAZID MENDRA KURNIA', 'X PPLG 2'),
(11, '232410250', 'ANDRE RIZKI KURNIA', 'X PPLG 3'),
(12, '232410252', 'ERVIN NOPIANSYAH', 'X PPLG 3'),
(13, '232410253', 'FADLAN SYAPUTRA', 'X PPLG 3'),
(14, '232410254', 'FARIDA ARRIANI', 'X PPLG 3'),
(15, '232410255', 'FATHAN JAMIL', 'X PPLG 3'),
(16, '232410286', 'ADYA AHMAD PRAMUDYA', 'X PPLG 4'),
(17, '232410287', 'ALDA SAMROTUL FUADAH', 'X PPLG 4'),
(18, '232410288', 'ALYA DWI PEBRIA', 'X PPLG 4'),
(19, '232410289', 'ALYSSA RAMADHANIE SAPARY', 'X PPLG 4'),
(20, '232410290', 'ASRIANA RAYA KHOERATUNISA', 'X PPLG 4'),
(21, '232410186', 'GITAN TANDIANA', 'X PPLG 1'),
(22, '232410186', 'GITAN TANDIANA', 'X PPLG 1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `NAMAUSER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `USERNAME`, `PASSWORD`, `NAMAUSER`) VALUES
(1, 'suminar', 'piket', 'suminar'),
(2, 'lisye', 'piket', 'lisye'),
(3, 'admin', '090582', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`IDABSEN`),
  ADD KEY `FK_MEMILIIKI1` (`ID`),
  ADD KEY `FK_MEMILIKI` (`IDSISWA`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`IDSISWA`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `FK_MEMILIIKI1` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`IDSISWA`) REFERENCES `siswa` (`IDSISWA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

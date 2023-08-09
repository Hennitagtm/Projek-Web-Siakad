-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 05:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poltek_kampar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(45) NOT NULL,
  `nrp` varchar(45) NOT NULL,
  `nidn` varchar(45) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `gelar` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` set('L','P') NOT NULL,
  `pendidikan_terakhir` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `kode_prodi` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nrp`, `nidn`, `nama_lengkap`, `gelar`, `email`, `gender`, `pendidikan_terakhir`, `foto`, `kode_prodi`) VALUES
(1030, '1103066007', '11030660', 'Fitri', 'M.Sc', 'admin@admin.com', '', 'S2', 'Pak Fitri.jpg', 2003),
(1103, '110306006', '1103060', 'Fenty Kurnia Oktorina', 'ST.,M.Sc', 'admin@admin.com', '', 'S2', 'buk fenty.JPG', 2003),
(1108, '110824009', '1108240', 'Indah Purnama Putri', 'M.Si', 'admin@admin.com', '', 'S2', '', 2002),
(1409, '1409112062', '14091120', 'Slamet Rianto', 'M.Kom', 'admin@admin.com', '', 'S2', 'pak slamet.JPG', 2003),
(1412, '141211050', '1412110', 'Antonius J. Sihotang', 'SP', 'admin@admin.com', 'L', 'S1', '', 2001);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kaprodi`
--

CREATE TABLE `tb_kaprodi` (
  `id_kaprodi` int(50) NOT NULL,
  `kode_kaprodi` int(50) NOT NULL,
  `id_dosen` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kaprodi`
--

INSERT INTO `tb_kaprodi` (`id_kaprodi`, `kode_kaprodi`, `id_dosen`) VALUES
(100903, 1001, 1402),
(110303, 1003, 1030);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(45) NOT NULL,
  `nama_kelas` varchar(45) NOT NULL,
  `kode_prodi` int(45) NOT NULL,
  `id_dosen` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `kode_prodi`, `id_dosen`) VALUES
(202102, 'PPM 2B', 2002, 240),
(202103, 'TIF 2B', 2003, 123),
(202201, 'TPS 1B', 2001, 321),
(2020003, 'TIF 3B', 2003, 1103),
(2021002, 'PPM 2B', 2002, 1108),
(2021003, 'TIF 2B', 2003, 1030);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(45) NOT NULL,
  `nim` int(45) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` set('P','L') NOT NULL,
  `status_study` set('Aktif','Tidak Aktif') NOT NULL,
  `jenjang_study` set('D2','D3','D4') NOT NULL,
  `semester_awal` varchar(45) NOT NULL,
  `kode_prodi` int(45) NOT NULL,
  `id_semester` int(45) NOT NULL,
  `id_kelas` int(45) NOT NULL,
  `foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `nim`, `nama_lengkap`, `email`, `gender`, `status_study`, `jenjang_study`, `semester_awal`, `kode_prodi`, `id_semester`, `id_kelas`, `foto`) VALUES
(202003, 202013021, 'Apriana Malinda Tamba', 'admin@admin.com', 'P', 'Aktif', 'D3', '1', 2003, 202003, 2020, ''),
(202102, 202112012, 'Al Tusando', 'admin@admin.com', 'L', 'Aktif', 'D3', '1', 2002, 202102, 202102, ''),
(202103, 202113017, 'Hennita Gultom', 'enii200102@gmail.com', 'P', 'Aktif', 'D3', '1', 2003, 202102, 2021, 'aku.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `kode_prodi` int(45) NOT NULL,
  `kode_dikti` int(45) NOT NULL,
  `nama_prodi` varchar(45) NOT NULL,
  `jenjang` varchar(45) NOT NULL,
  `akreditasi` varchar(45) NOT NULL,
  `singkatan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`kode_prodi`, `kode_dikti`, `nama_prodi`, `jenjang`, `akreditasi`, `singkatan`) VALUES
(2001, 244, 'teknik pengolahan sawit', 'D3', 'B', 'TPS'),
(2002, 133, 'teknik perawatan perbaikan mesin', 'D3', 'B', 'PPM'),
(2003, 456, 'teknik informatika', 'D3', 'B', 'tif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_semester`
--

CREATE TABLE `tb_semester` (
  `id_semester` int(45) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `keterangan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_semester`
--

INSERT INTO `tb_semester` (`id_semester`, `semester`, `keterangan`) VALUES
(202003, 'S-6', 'Aktif'),
(202102, 'S-4', 'Aktif'),
(202201, 'S-1', 'Aktif'),
(202203, 'S-2', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama`, `jabatan`) VALUES
('202113009', '93429a0d5a7de96a4de7ebc603067074', 'Salsa Mutia', 'admin 2'),
('202113017', '93429a0d5a7de96a4de7ebc603067074', 'Hennita Gultom', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_kaprodi`
--
ALTER TABLE `tb_kaprodi`
  ADD PRIMARY KEY (`id_kaprodi`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- Indexes for table `tb_semester`
--
ALTER TABLE `tb_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210318;

--
-- AUTO_INCREMENT for table `tb_kaprodi`
--
ALTER TABLE `tb_kaprodi`
  MODIFY `id_kaprodi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110304;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2022012;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20210318;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `kode_prodi` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20012;

--
-- AUTO_INCREMENT for table `tb_semester`
--
ALTER TABLE `tb_semester`
  MODIFY `id_semester` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20220303;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

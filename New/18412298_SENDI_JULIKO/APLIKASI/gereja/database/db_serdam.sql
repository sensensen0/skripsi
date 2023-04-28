-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 03:54 PM
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
-- Database: `db_serdam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namaLengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`idAdmin`, `username`, `password`, `namaLengkap`) VALUES
(3, 'admin', 'hanabi12', 'Sendi Juliko'),
(11, 'damin', 'hanabi12', 'Juliko');

-- --------------------------------------------------------

--
-- Table structure for table `tbberita`
--

CREATE TABLE `tbberita` (
  `idBerita` int(11) NOT NULL,
  `judulBerita` varchar(100) NOT NULL,
  `isiBerita` text NOT NULL,
  `gambarCover` blob NOT NULL,
  `fileBerita` blob NOT NULL,
  `statusPublish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbberita`
--

INSERT INTO `tbberita` (`idBerita`, `judulBerita`, `isiBerita`, `gambarCover`, `fileBerita`, `statusPublish`) VALUES
(4, 'BERITA DUKACITA', 'TELAH MENINGGAL SAUDARA BLABLABLA\r\nPADA PUKUL HH:MM DAN TANGGAL DD-MM-YYYY\r\n\r\nKIRANYA TUHAN YANG MEMBERKATI DAN MENOLONG', 0x433a66616b65706174687061746f666c6f776469616772616d2e6a7067, 0x433a66616b65706174684241422049562e706466, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbdaftarbaptis`
--

CREATE TABLE `tbdaftarbaptis` (
  `idDaftarBaptis` int(11) NOT NULL,
  `tanggalDaftar` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `opsiBaptis` enum('Sidi','Selam','Percik') NOT NULL,
  `ukuranJubah` enum('S','M','L') NOT NULL,
  `uploadFoto` blob NOT NULL,
  `statusVerifikasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbdaftarbaptis`
--

INSERT INTO `tbdaftarbaptis` (`idDaftarBaptis`, `tanggalDaftar`, `username`, `opsiBaptis`, `ukuranJubah`, `uploadFoto`, `statusVerifikasi`) VALUES
(2, '2023-04-19', 'sansansan', 'Percik', 'L', 0x433a66616b65706174687061746f666c6f776469616772616d202831292e6a7067, 1),
(3, '2023-04-19', 'elsendqz', 'Selam', 'L', 0x433a66616b65706174687061746f666c6f776469616772616d2e6a7067, 1),
(4, '2023-04-21', 'radja2_5', 'Selam', 'L', 0x433a66616b657061746873757261746261707469732e6a7067, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbdaftarkelasbaptis`
--

CREATE TABLE `tbdaftarkelasbaptis` (
  `idDaftarKelasBaptis` int(11) NOT NULL,
  `tanggalDaftar` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `konfirmasi` tinyint(1) NOT NULL,
  `idSesiKelas` int(11) NOT NULL,
  `statusVerifikasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbdaftarkelasbaptis`
--

INSERT INTO `tbdaftarkelasbaptis` (`idDaftarKelasBaptis`, `tanggalDaftar`, `username`, `konfirmasi`, `idSesiKelas`, `statusVerifikasi`) VALUES
(1, '2023-04-18', 'elsendqz', 0, 2, 1),
(2, '2023-04-18', 'radja2_5', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbdaftarpemberkatan`
--

CREATE TABLE `tbdaftarpemberkatan` (
  `idDaftarPemberkatan` int(11) NOT NULL,
  `tanggalDaftar` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `namaPasangan` varchar(100) NOT NULL,
  `lampirSuratBaptis` blob NOT NULL,
  `lampirSertifikatPranikah` blob NOT NULL,
  `tanggalPemberkatan` date NOT NULL,
  `waktuPemberkatan` time NOT NULL,
  `namaOrtuPria` varchar(100) NOT NULL,
  `namaOrtuWanita` varchar(100) NOT NULL,
  `statusVerifikasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbdaftarpemberkatan`
--

INSERT INTO `tbdaftarpemberkatan` (`idDaftarPemberkatan`, `tanggalDaftar`, `username`, `namaPasangan`, `lampirSuratBaptis`, `lampirSertifikatPranikah`, `tanggalPemberkatan`, `waktuPemberkatan`, `namaOrtuPria`, `namaOrtuWanita`, `statusVerifikasi`) VALUES
(4, '2023-04-19', 'sansansan', 'Mina Myoui', 0x433a66616b65706174687061746f666c6f776469616772616d2e6a7067, 0x433a66616b65706174687061746f666c6f776469616772616d202831292e6a7067, '2023-04-20', '00:00:12', 'Messi', 'Ankara', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbdaftarpranikah`
--

CREATE TABLE `tbdaftarpranikah` (
  `idDaftarPranikah` int(11) NOT NULL,
  `tanggalDaftar` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `namaPasangan` varchar(100) NOT NULL,
  `tanggalLahirPasangan` date NOT NULL,
  `noHpPasangan` varchar(14) NOT NULL,
  `lampirSuratBaptis` blob NOT NULL,
  `idSesiKelas` int(11) NOT NULL,
  `statusVerifikasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbdaftarpranikah`
--

INSERT INTO `tbdaftarpranikah` (`idDaftarPranikah`, `tanggalDaftar`, `username`, `namaPasangan`, `tanggalLahirPasangan`, `noHpPasangan`, `lampirSuratBaptis`, `idSesiKelas`, `statusVerifikasi`) VALUES
(1, '2023-04-19', 'sansansan', 'Mina Myoui', '2001-08-20', '08978675376', 0x433a66616b65706174687061746f666c6f776469616772616d2e6a7067, 11, 1),
(5, '2023-04-19', 'radja2_5', 'Park Chaeyoung', '1997-02-11', '08978675376', 0x433a66616b657061746873757261746261707469732e6a7067, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbkelas`
--

CREATE TABLE `tbkelas` (
  `idKelas` int(11) NOT NULL,
  `namaKelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbkelas`
--

INSERT INTO `tbkelas` (`idKelas`, `namaKelas`) VALUES
(1, 'Kelas Pembaptisan'),
(2, 'Kelas Bimbingan Pranikah');

-- --------------------------------------------------------

--
-- Table structure for table `tbsesikelas`
--

CREATE TABLE `tbsesikelas` (
  `idSesiKelas` int(11) NOT NULL,
  `idKelas` int(11) NOT NULL,
  `namaSesi` varchar(50) NOT NULL,
  `hariSesi` varchar(10) NOT NULL,
  `waktuMulai` time NOT NULL,
  `waktuAkhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbsesikelas`
--

INSERT INTO `tbsesikelas` (`idSesiKelas`, `idKelas`, `namaSesi`, `hariSesi`, `waktuMulai`, `waktuAkhir`) VALUES
(1, 1, 'Sesi 1', 'Minggu', '09:30:00', '10:30:00'),
(2, 1, 'Sesi 2', 'Minggu', '18:30:00', '19:30:00'),
(11, 2, 'Sesi 1', 'Selasa', '19:00:00', '20:00:00'),
(12, 2, 'Sesi 2 ', 'Jum\'at', '19:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `namaLengkap` varchar(100) NOT NULL,
  `jenisKelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `noHp` varchar(14) NOT NULL,
  `alamatLengkap` text NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kodePos` varchar(5) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `tanggalDaftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`username`, `password`, `email`, `namaLengkap`, `jenisKelamin`, `tempatLahir`, `tanggalLahir`, `noHp`, `alamatLengkap`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kodePos`, `pekerjaan`, `tanggalDaftar`) VALUES
('elsendqz', 'eldeathnote1', 'sendiijuliko@gmail.com', 'Sendi Juliko', 'Laki-Laki', 'Pontianak', '2000-07-20', '089693204888', 'Jl. Teluk Sahang 1 No. 65', 'Kalimantan Barat', 'Pontianak', 'Pontianak Utara', 'Siantan Hilir', '78243', 'Pelajar/Mahasiswa', '2023-04-18'),
('mitsuha000', 'hanabi12', 'mitsuha@gmail.com', 'Mitsuha Taki', 'Perempuan', 'Singkawang', '2004-02-29', '08978675376', 'Jl. Budi Utomo No. 59', 'Kalimantan Barat', 'Singkawang', 'Singkawang Utara', 'Sungai Bulan', '79151', 'Pelajar/Mahasiswa', '2023-04-25'),
('radja2_5', 'hanabi12', 'marklen25@gmail.com', 'Marklen Yesael Radja', 'Laki-Laki', 'Pontianak', '2000-08-19', '089964939483', 'Jl. Teluk Betung 2', 'Kalimantan Barat', 'Pontianak', 'Pontianak Utara', 'Siantan Hilir', '78243', 'Pelajar/Mahasiswa', '2023-04-18'),
('sansansan', 'hanabi12', 'sendiijuliko@gmail.com', 'Sendi Desu', 'Laki-Laki', 'Pontianak', '2001-09-20', '089693204888', 'Jl. Perdana', 'Kalimantan Barat', 'Pontianak', 'Pontianak Selatan', 'Benua Melayu Darat', '78242', 'Pelajar/Mahasiswa', '2023-04-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tbberita`
--
ALTER TABLE `tbberita`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indexes for table `tbdaftarbaptis`
--
ALTER TABLE `tbdaftarbaptis`
  ADD PRIMARY KEY (`idDaftarBaptis`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tbdaftarkelasbaptis`
--
ALTER TABLE `tbdaftarkelasbaptis`
  ADD PRIMARY KEY (`idDaftarKelasBaptis`),
  ADD KEY `username` (`username`),
  ADD KEY `idSesiKelas` (`idSesiKelas`);

--
-- Indexes for table `tbdaftarpemberkatan`
--
ALTER TABLE `tbdaftarpemberkatan`
  ADD PRIMARY KEY (`idDaftarPemberkatan`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tbdaftarpranikah`
--
ALTER TABLE `tbdaftarpranikah`
  ADD PRIMARY KEY (`idDaftarPranikah`),
  ADD KEY `username` (`username`),
  ADD KEY `idSesiKelas` (`idSesiKelas`);

--
-- Indexes for table `tbkelas`
--
ALTER TABLE `tbkelas`
  ADD PRIMARY KEY (`idKelas`);

--
-- Indexes for table `tbsesikelas`
--
ALTER TABLE `tbsesikelas`
  ADD PRIMARY KEY (`idSesiKelas`),
  ADD KEY `idKelas` (`idKelas`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbberita`
--
ALTER TABLE `tbberita`
  MODIFY `idBerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbdaftarbaptis`
--
ALTER TABLE `tbdaftarbaptis`
  MODIFY `idDaftarBaptis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbdaftarkelasbaptis`
--
ALTER TABLE `tbdaftarkelasbaptis`
  MODIFY `idDaftarKelasBaptis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbdaftarpemberkatan`
--
ALTER TABLE `tbdaftarpemberkatan`
  MODIFY `idDaftarPemberkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbdaftarpranikah`
--
ALTER TABLE `tbdaftarpranikah`
  MODIFY `idDaftarPranikah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbkelas`
--
ALTER TABLE `tbkelas`
  MODIFY `idKelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbsesikelas`
--
ALTER TABLE `tbsesikelas`
  MODIFY `idSesiKelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbdaftarbaptis`
--
ALTER TABLE `tbdaftarbaptis`
  ADD CONSTRAINT `tbdaftarbaptis_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbuser` (`username`);

--
-- Constraints for table `tbdaftarkelasbaptis`
--
ALTER TABLE `tbdaftarkelasbaptis`
  ADD CONSTRAINT `tbdaftarkelasbaptis_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbuser` (`username`);

--
-- Constraints for table `tbdaftarpemberkatan`
--
ALTER TABLE `tbdaftarpemberkatan`
  ADD CONSTRAINT `tbdaftarpemberkatan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbuser` (`username`);

--
-- Constraints for table `tbdaftarpranikah`
--
ALTER TABLE `tbdaftarpranikah`
  ADD CONSTRAINT `tbdaftarpranikah_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tbuser` (`username`);

--
-- Constraints for table `tbsesikelas`
--
ALTER TABLE `tbsesikelas`
  ADD CONSTRAINT `tbsesikelas_ibfk_1` FOREIGN KEY (`idKelas`) REFERENCES `tbkelas` (`idKelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

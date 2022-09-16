-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 11:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_pmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mahasiswa`
--

CREATE TABLE `calon_mahasiswa` (
  `nisn` varchar(16) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `alamat_detail` varchar(50) NOT NULL,
  `kode_pos` char(6) NOT NULL,
  `nomor_handphone` char(14) NOT NULL,
  `nama_ayah` varchar(40) NOT NULL,
  `pekerjaan_ayah` varchar(35) NOT NULL,
  `pendidikan_terakhir_ayah` enum('Tidak Sekolah','SD','SLTP/Sederajat','SLTA/Sederajat','D1/D2/D3','D4/S1','S2','S3') DEFAULT NULL,
  `nama_ibu` varchar(40) NOT NULL,
  `pekerjaan_ibu` varchar(35) NOT NULL,
  `pendidikan_terakhir_ibu` enum('Tidak Sekolah','SD','SLTP/Sederajat','SLTA/Sederajat','D1/D2/D3','D4/S1','S2','S3') DEFAULT NULL,
  `jumlah_saudara` char(2) DEFAULT NULL,
  `penghasilan_bulanan` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_mahasiswa`
--

INSERT INTO `calon_mahasiswa` (`nisn`, `nama`, `email`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `provinsi`, `kabupaten`, `kecamatan`, `alamat_detail`, `kode_pos`, `nomor_handphone`, `nama_ayah`, `pekerjaan_ayah`, `pendidikan_terakhir_ayah`, `nama_ibu`, `pekerjaan_ibu`, `pendidikan_terakhir_ibu`, `jumlah_saudara`, `penghasilan_bulanan`) VALUES
('6991012001', 'Anisa Nurahma', 'anisarahma@gmail.com', 'Perempuan', 'Bandung', '1996-04-06', 'Jawa Barat', 'Bandung', 'Andir', 'Gg. Bakti 3 rt05/rw06, Kel. Garuda', '40184', '085123459996', 'Waluya', 'TNI', 'SLTA/Sederajat', 'Lina ', 'Ibu Rumah Tangga', 'D4/S1', '2', '8000000.00'),
('9991055023', 'Ade Iskandar Zulkarnaen', 'azulredhat@gmail.com', 'Laki-laki', 'Garut', '1999-09-15', 'Jawa Barat', 'Garut', 'Garut Kota', 'kp. peundeuy rt03/rw18, Kel. Margawati', '44113', '083113787848', 'Ade Cahya Sobari', 'Buruh', 'SLTP/Sederajat', 'Nawangsih', 'Ibu Rumah Tangga', 'SLTP/Sederajat', '1', '2000000.00'),
('9991070210', 'Atep Warman', 'ateppersib@gmail.com', 'Laki-laki', 'Bandung', '1999-07-12', 'Jawa Barat', 'Bandung', 'Margahayu', 'Taman Kopo Indah 1', '40226', '089956723112', 'Purgito', 'TNI', 'SLTA/Sederajat', 'Della', 'Ibu Rumah Tangga', 'Tidak Sekolah', '2', '7000000.00');

-- --------------------------------------------------------

--
-- Table structure for table `histori_akademik`
--

CREATE TABLE `histori_akademik` (
  `kode_histori` int(11) NOT NULL,
  `nisn` varchar(16) DEFAULT NULL,
  `npsn` varchar(10) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_lulus` date NOT NULL,
  `nilai_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori_akademik`
--

INSERT INTO `histori_akademik` (`kode_histori`, `nisn`, `npsn`, `tanggal_masuk`, `tanggal_lulus`, `nilai_akhir`) VALUES
(1, '6991012001', '20219324', '2012-05-14', '2015-06-15', 90),
(2, '9991070210', '20228515', '2015-03-15', '2018-04-02', 85),
(3, '9991055023', '20262128', '2015-02-12', '2018-12-03', 80);

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `kode_prodi` varchar(15) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`kode_prodi`, `nama_prodi`) VALUES
('BPI', 'Bimbingan Penyuluhan Islam'),
('KPI', 'Komunikasi dan Penyiaran Islam');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `kode_registrasi` int(11) NOT NULL,
  `nisn` varchar(16) DEFAULT NULL,
  `kode_prodi` varchar(15) NOT NULL,
  `tanggal_registrasi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`kode_registrasi`, `nisn`, `kode_prodi`, `tanggal_registrasi`) VALUES
(2106001, '6991012001', 'BPI', '2022-05-25 15:20:15'),
(2106002, '9991070210', 'KPI', '2022-05-26 15:39:12'),
(2106003, '9991055023', 'BPI', '2022-05-27 23:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah_sebelumnya`
--

CREATE TABLE `sekolah_sebelumnya` (
  `npsn` varchar(10) NOT NULL,
  `nama_sekolah` varchar(50) DEFAULT NULL,
  `jenjang` enum('SMA','SMK','D3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah_sebelumnya`
--

INSERT INTO `sekolah_sebelumnya` (`npsn`, `nama_sekolah`, `jenjang`) VALUES
('20219324', 'SMAN 9 Bandung', 'SMA'),
('20228515', 'SMK Angkasa 1 Margahayu', 'SMK'),
('20262128', 'SMKN 10 Garut', 'SMK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `histori_akademik`
--
ALTER TABLE `histori_akademik`
  ADD PRIMARY KEY (`kode_histori`),
  ADD KEY `fk_histori_mahasiswa` (`nisn`),
  ADD KEY `fk_histori_sekolah` (`npsn`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`kode_registrasi`),
  ADD UNIQUE KEY `fk_nisn` (`nisn`),
  ADD KEY `fk_registrasi_prodi` (`kode_prodi`);

--
-- Indexes for table `sekolah_sebelumnya`
--
ALTER TABLE `sekolah_sebelumnya`
  ADD PRIMARY KEY (`npsn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histori_akademik`
--
ALTER TABLE `histori_akademik`
  MODIFY `kode_histori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `kode_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2106004;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `histori_akademik`
--
ALTER TABLE `histori_akademik`
  ADD CONSTRAINT `fk_histori_mahasiswa` FOREIGN KEY (`nisn`) REFERENCES `calon_mahasiswa` (`nisn`),
  ADD CONSTRAINT `fk_histori_sekolah` FOREIGN KEY (`npsn`) REFERENCES `sekolah_sebelumnya` (`npsn`);

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `fk_registrasi_mahasiswa` FOREIGN KEY (`nisn`) REFERENCES `calon_mahasiswa` (`nisn`),
  ADD CONSTRAINT `fk_registrasi_prodi` FOREIGN KEY (`kode_prodi`) REFERENCES `program_studi` (`kode_prodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

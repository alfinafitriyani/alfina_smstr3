-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 12:55 AM
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
-- Database: `loker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`) VALUES
(21, 'Admin');

--
-- Triggers `admin`
--
DELIMITER $$
CREATE TRIGGER `check_role_admin` BEFORE INSERT ON `admin` FOR EACH ROW BEGIN
		IF (SELECT login_role FROM login WHERE login_id = NEW.admin_id) != 'Admin' THEN 
			SIGNAL SQLSTATE '45000';
		END IF;
	END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `calon_pekerja`
--

CREATE TABLE `calon_pekerja` (
  `calon_pekerja_id` int(11) NOT NULL,
  `calon_pekerja_nama_lengkap` varchar(51) NOT NULL,
  `calon_pekerja_alamat` varchar(101) DEFAULT NULL,
  `kota_id` int(11) DEFAULT NULL,
  `calon_pekerja_jenis_kelamin` enum('L','P') DEFAULT NULL,
  `calon_pekerja_tempat_lahir` varchar(51) DEFAULT NULL,
  `calon_pekerja_tanggal_lahir` date DEFAULT NULL,
  `calon_pekerja_status_pernikahan` enum('Lajang','Menikah','Janda/Duda') DEFAULT NULL,
  `calon_pekerja_email` varchar(51) NOT NULL,
  `calon_pekerja_telepon` varchar(13) DEFAULT NULL,
  `calon_pekerja_pendidikan_terakhir` enum('SD','SMP','SMA','S1','S2') DEFAULT NULL,
  `calon_pekerja_tempat_pendidikan_terakhir` varchar(51) DEFAULT NULL,
  `calon_pekerja_tempat_bekerja_terakhir` varchar(51) DEFAULT NULL,
  `calon_pekerja_pekerjaan_bekerja_terakhir` varchar(51) DEFAULT NULL,
  `calon_pekerja_file_cv` varchar(101) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calon_pekerja`
--

INSERT INTO `calon_pekerja` (`calon_pekerja_id`, `calon_pekerja_nama_lengkap`, `calon_pekerja_alamat`, `kota_id`, `calon_pekerja_jenis_kelamin`, `calon_pekerja_tempat_lahir`, `calon_pekerja_tanggal_lahir`, `calon_pekerja_status_pernikahan`, `calon_pekerja_email`, `calon_pekerja_telepon`, `calon_pekerja_pendidikan_terakhir`, `calon_pekerja_tempat_pendidikan_terakhir`, `calon_pekerja_tempat_bekerja_terakhir`, `calon_pekerja_pekerjaan_bekerja_terakhir`, `calon_pekerja_file_cv`) VALUES
(31, 'alfina fitriyani', 'Jepara', 1, 'L', 'Jepara', '2004-10-23', 'Lajang', 'alfina@gmail.com', '085727141432', 'SMA', 'SMA Negeri 1 Mayong', 'Les Belizzi', 'Asisten tutor les bahasa inggris', 'alfinafitriyani20240120015152.cv_alfina');

--
-- Triggers `calon_pekerja`
--
DELIMITER $$
CREATE TRIGGER `check_role_calon_pekerja` BEFORE INSERT ON `calon_pekerja` FOR EACH ROW BEGIN
		IF (SELECT login_role FROM login WHERE login_id = NEW.calon_pekerja_id) != 'Calon Pekerja' THEN 
			SIGNAL SQLSTATE '45000';
		END IF;
	END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(12, 'Ekonomi'),
(11, 'Hukum'),
(14, 'Kesehatan'),
(8, 'Marketing'),
(10, 'Pendidikan'),
(6, 'Pertambangan'),
(13, 'Seni dan Sastra'),
(4, 'Teknologi Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `kota_id` int(11) NOT NULL,
  `kota_nama` varchar(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kota_id`, `kota_nama`) VALUES
(1, 'Bandung'),
(4, 'DKI Jakarta'),
(14, 'Jepara'),
(15, 'Kudus'),
(11, 'Magelang'),
(7, 'Malang'),
(9, 'Pekalongan'),
(10, 'Salatiga'),
(6, 'Semarang'),
(13, 'Sukabumi'),
(5, 'Surabaya'),
(12, 'Surakarta'),
(8, 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE `lamaran` (
  `lamaran_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL,
  `calon_pekerja_id` int(11) NOT NULL,
  `lamaran_status_lolos` enum('Menunggu','Lolos','Tidak Lolos') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lamaran`
--

INSERT INTO `lamaran` (`lamaran_id`, `lowongan_id`, `calon_pekerja_id`, `lamaran_status_lolos`) VALUES
(18, 15, 31, 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(26) NOT NULL,
  `login_password` varchar(101) NOT NULL,
  `login_role` enum('Admin','Perusahaan','Calon Pekerja') NOT NULL DEFAULT 'Calon Pekerja'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_password`, `login_role`) VALUES
(21, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(29, 'alfina', 'a0eed44fc04e77ec2da2b0b526658728', 'Perusahaan'),
(31, 'alfinafitriyani', 'a0eed44fc04e77ec2da2b0b526658728', 'Calon Pekerja'),
(32, 'abadijaya', '7c18d74f95c8b4787325bc71c9dac9bb', 'Perusahaan');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `lowongan_id` int(11) NOT NULL,
  `perusahaan_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `lowongan_judul` varchar(51) NOT NULL,
  `lowongan_deskripsi` text NOT NULL,
  `lowongan_tgl_buka` date NOT NULL,
  `lowongan_tgl_tutup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`lowongan_id`, `perusahaan_id`, `kategori_id`, `lowongan_judul`, `lowongan_deskripsi`, `lowongan_tgl_buka`, `lowongan_tgl_tutup`) VALUES
(15, 29, 10, 'Guru Bahasa Inggris', 'Dicari guru bahasa inggris dengan pengalaman min 3 tahun. Tentunya sabar dalam mengajar.', '2024-01-19', '2024-01-31'),
(16, 32, 8, 'Dicari Staf Marketing', 'Menguasai Microsoft Office\r\n', '2024-01-20', '2024-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan_jobdesc`
--

CREATE TABLE `lowongan_jobdesc` (
  `lowongan_jobdesc_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL,
  `lowongan_jobdesc_isi` varchar(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lowongan_jobdesc`
--

INSERT INTO `lowongan_jobdesc` (`lowongan_jobdesc_id`, `lowongan_id`, `lowongan_jobdesc_isi`) VALUES
(14, 15, 'Guru bahasa inggris'),
(15, 16, 'Staf Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan_syarat`
--

CREATE TABLE `lowongan_syarat` (
  `lowongan_syarat_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL,
  `lowongan_syarat` varchar(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lowongan_syarat`
--

INSERT INTO `lowongan_syarat` (`lowongan_syarat_id`, `lowongan_id`, `lowongan_syarat`) VALUES
(79, 15, 'Minimal berpengalaman 3 tahun dalam mengajar bahasa inggris.'),
(80, 16, 'Menguasai Microsoft Office');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `perusahaan_id` int(11) NOT NULL,
  `perusahaan_nama` varchar(51) NOT NULL,
  `perusahaan_alamat` varchar(101) DEFAULT NULL,
  `kota_id` int(11) DEFAULT NULL,
  `perusahaan_email` varchar(51) NOT NULL,
  `perusahaan_telepon` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`perusahaan_id`, `perusahaan_nama`, `perusahaan_alamat`, `kota_id`, `perusahaan_email`, `perusahaan_telepon`) VALUES
(29, 'alfina', 'Jl.H sulkhan no.61 Mayong', 1, 'alfina', '085727141432'),
(32, 'PT. ABADI JAYA', 'Surabaya', 5, 'abadijaya@gmail.com', '085727141432');

--
-- Triggers `perusahaan`
--
DELIMITER $$
CREATE TRIGGER `check_role_perusahaan` BEFORE INSERT ON `perusahaan` FOR EACH ROW BEGIN
		IF (SELECT login_role FROM login WHERE login_id = NEW.perusahaan_id) != 'Perusahaan' THEN 
			SIGNAL SQLSTATE '45000';
		END IF;
	END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_nama` (`admin_nama`);

--
-- Indexes for table `calon_pekerja`
--
ALTER TABLE `calon_pekerja`
  ADD PRIMARY KEY (`calon_pekerja_id`),
  ADD KEY `fk_calon_pekerja_kota` (`kota_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`),
  ADD UNIQUE KEY `kategori_nama` (`kategori_nama`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota_id`),
  ADD UNIQUE KEY `kota_nama` (`kota_nama`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`lamaran_id`),
  ADD UNIQUE KEY `lowongan_id` (`lowongan_id`,`calon_pekerja_id`),
  ADD KEY `calon_pekerja_id` (`calon_pekerja_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `login_username` (`login_username`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`lowongan_id`),
  ADD KEY `fk_lowongan_perusahaan` (`perusahaan_id`),
  ADD KEY `fk_lowongan_kategori` (`kategori_id`);

--
-- Indexes for table `lowongan_jobdesc`
--
ALTER TABLE `lowongan_jobdesc`
  ADD PRIMARY KEY (`lowongan_jobdesc_id`),
  ADD KEY `fk_jobdesc_lowongan` (`lowongan_id`);

--
-- Indexes for table `lowongan_syarat`
--
ALTER TABLE `lowongan_syarat`
  ADD PRIMARY KEY (`lowongan_syarat_id`),
  ADD KEY `fk_syarat_lowongan` (`lowongan_id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`perusahaan_id`),
  ADD UNIQUE KEY `perusahaan_nama` (`perusahaan_nama`),
  ADD KEY `fk_perusahaan_kota` (`kota_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `kota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `lamaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `lowongan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lowongan_jobdesc`
--
ALTER TABLE `lowongan_jobdesc`
  MODIFY `lowongan_jobdesc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lowongan_syarat`
--
ALTER TABLE `lowongan_syarat`
  MODIFY `lowongan_syarat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_login` FOREIGN KEY (`admin_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `calon_pekerja`
--
ALTER TABLE `calon_pekerja`
  ADD CONSTRAINT `fk_calon_pekerja_kota` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`kota_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_calon_pekerja_login` FOREIGN KEY (`calon_pekerja_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_ibfk_1` FOREIGN KEY (`calon_pekerja_id`) REFERENCES `calon_pekerja` (`calon_pekerja_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lamaran_ibfk_2` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`lowongan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `fk_lowongan_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_lowongan_perusahaan` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaan` (`perusahaan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lowongan_jobdesc`
--
ALTER TABLE `lowongan_jobdesc`
  ADD CONSTRAINT `fk_jobdesc_lowongan` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`lowongan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lowongan_syarat`
--
ALTER TABLE `lowongan_syarat`
  ADD CONSTRAINT `fk_syarat_lowongan` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`lowongan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `fk_perusahaan_kota` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`kota_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_perusahaan_login` FOREIGN KEY (`perusahaan_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

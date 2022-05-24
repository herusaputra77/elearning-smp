-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 12:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning_smp5`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_kelas`
--

CREATE TABLE `absensi_kelas` (
  `id_absensi_kelas` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `tgl_absensi` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_kelas`
--

INSERT INTO `absensi_kelas` (`id_absensi_kelas`, `id_kelas`, `id_guru`, `tgl_absensi`, `jam_masuk`, `jam_keluar`, `keterangan`) VALUES
(2, 1, 1, '2022-02-18', '05:00:00', '20:00:00', 'silahkan masuk'),
(3, 1, 1, '2022-02-19', '05:00:00', '10:00:00', 'silahkan masuk 2'),
(4, 2, 1, '2022-02-18', '07:30:00', '23:00:00', 'Sepatu Kulit badak'),
(5, 2, 1, '2022-02-19', '10:00:00', '22:00:00', 'Baju Batik');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kelas`
--

CREATE TABLE `detail_kelas` (
  `id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_hari`
--

CREATE TABLE `master_hari` (
  `id_hari` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_hari`
--

INSERT INTO `master_hari` (`id_hari`, `hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jum\'at'),
(6, 'Sabtu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi_siswa`
--

CREATE TABLE `tb_absensi_siswa` (
  `id_absensi_siswa` int(11) NOT NULL,
  `id_absensi_kelas` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `jam_absensi_siswa` time NOT NULL,
  `tgl_absensi_siswa` date NOT NULL,
  `keterangan` enum('Hadir','Izin','Tidak Hadir') DEFAULT 'Hadir'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensi_siswa`
--

INSERT INTO `tb_absensi_siswa` (`id_absensi_siswa`, `id_absensi_kelas`, `id_siswa`, `jam_absensi_siswa`, `tgl_absensi_siswa`, `keterangan`) VALUES
(1, 4, 2, '06:45:04', '2022-02-18', 'Hadir'),
(2, 4, 1, '06:48:10', '2022-02-18', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nm_admin` varchar(100) NOT NULL,
  `foto_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `nm_admin`, `foto_admin`) VALUES
(1, 'yudi123', '1234', 'Yudi Pratama', 'user.png'),
(2, 'admin', '1234', 'admin Sekolah', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chat`
--

CREATE TABLE `tb_chat` (
  `id_chat` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `chat` text NOT NULL,
  `waktu` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_chat`
--

INSERT INTO `tb_chat` (`id_chat`, `id_kelas`, `id_guru`, `id_siswa`, `chat`, `waktu`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 'hai', '2022-02-21 22:35:20', '2022-02-21 15:35:20', '2022-02-21 15:35:20'),
(2, 2, 1, 0, 'iya', '2022-02-21 22:35:41', '2022-02-21 15:35:41', '2022-02-21 15:35:41'),
(3, 2, 1, 0, 'hai', '2022-02-21 23:03:09', '2022-02-21 16:03:09', '2022-02-21 16:03:09'),
(4, 2, 1, 0, 'saya', '2022-02-21 23:03:42', '2022-02-21 16:03:42', '2022-02-21 16:03:42'),
(5, 2, 0, 1, 'iya', '2022-02-21 23:53:00', '2022-02-21 16:53:00', '2022-02-21 16:53:00'),
(6, 2, 1, 0, 'janda', '2022-02-22 00:02:06', '2022-02-21 17:02:06', '2022-02-21 17:02:06'),
(7, 2, 0, 2, 'sya rika', '2022-02-22 00:27:49', '2022-02-21 17:27:49', '2022-02-21 17:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nm_guru` varchar(100) NOT NULL,
  `nip_guru` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `foto_guru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `username`, `password`, `nm_guru`, `nip_guru`, `agama`, `alamat`, `no_hp`, `jenkel`, `foto_guru`) VALUES
(1, 'neldawati', '1234', 'Neldawati, S.Pd', '171100123', 'Islam', 'Nagari Aia Tajunggg', '085656565565', 'Wanita', 'ci.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(11) NOT NULL,
  `nm_kelas` varchar(100) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `jadwal_hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `nm_kelas`, `guru_id`, `jadwal_hari`) VALUES
(1, 'VII 2', 1, 1),
(2, 'VII 1', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id` int(11) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `tgl_input_materi` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `file_materi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi_kelas`
--

CREATE TABLE `tb_materi_kelas` (
  `id_materi_kelas` int(11) NOT NULL,
  `materi_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `waktu_kirim` int(11) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nm_siswa` varchar(100) NOT NULL,
  `nipd` varchar(10) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` int(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jenkel` varchar(100) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `username`, `password`, `nm_siswa`, `nipd`, `nisn`, `tempat_lahir`, `tgl_lahir`, `nik`, `agama`, `alamat`, `no_hp`, `jenkel`, `kelas_id`, `foto`) VALUES
(1, 'budi', '1234', 'budi', '1321', '0053655730', 'Lubuk Alung', '2010-01-16', 2147483647, 'Islam', 'Nagari Aia Tajunggg', '085656565565', 'Laki-laki', 2, 'user.png'),
(2, 'rika78', '1234', 'riska', '02495024', '0075730975', 'Lubuk Alung', '2006-01-17', 2147483647, 'Islam', 'Korong Rawang', '0867674545', 'Wanita', 2, 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id_tugas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `judul_tugas` varchar(100) NOT NULL,
  `file_tugas` varchar(110) NOT NULL,
  `tgl_upload` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas_kelas`
--

CREATE TABLE `tb_tugas_kelas` (
  `id_tugas_kelas` int(11) NOT NULL,
  `tugas_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `waktu_kirim_tugas` int(11) NOT NULL,
  `tgl_dikumpul` date NOT NULL,
  `jam_dikumpul` time NOT NULL,
  `deskripsi_tugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas_siswa`
--

CREATE TABLE `tb_tugas_siswa` (
  `id_tugas_siswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_tugas_kelas` int(11) NOT NULL,
  `file_tugas_siswa` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `waktu_kumpul_tugas` int(11) NOT NULL,
  `nilai_tugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_kelas`
--
ALTER TABLE `absensi_kelas`
  ADD PRIMARY KEY (`id_absensi_kelas`);

--
-- Indexes for table `detail_kelas`
--
ALTER TABLE `detail_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_hari`
--
ALTER TABLE `master_hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `tb_absensi_siswa`
--
ALTER TABLE `tb_absensi_siswa`
  ADD PRIMARY KEY (`id_absensi_siswa`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_materi_kelas`
--
ALTER TABLE `tb_materi_kelas`
  ADD PRIMARY KEY (`id_materi_kelas`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- Indexes for table `tb_tugas_kelas`
--
ALTER TABLE `tb_tugas_kelas`
  ADD PRIMARY KEY (`id_tugas_kelas`);

--
-- Indexes for table `tb_tugas_siswa`
--
ALTER TABLE `tb_tugas_siswa`
  ADD PRIMARY KEY (`id_tugas_siswa`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_kelas`
--
ALTER TABLE `absensi_kelas`
  MODIFY `id_absensi_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_kelas`
--
ALTER TABLE `detail_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_hari`
--
ALTER TABLE `master_hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_absensi_siswa`
--
ALTER TABLE `tb_absensi_siswa`
  MODIFY `id_absensi_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_chat`
--
ALTER TABLE `tb_chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_materi_kelas`
--
ALTER TABLE `tb_materi_kelas`
  MODIFY `id_materi_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tugas_kelas`
--
ALTER TABLE `tb_tugas_kelas`
  MODIFY `id_tugas_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tugas_siswa`
--
ALTER TABLE `tb_tugas_siswa`
  MODIFY `id_tugas_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

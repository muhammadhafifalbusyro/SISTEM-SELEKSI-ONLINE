-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 20, 2020 at 03:05 AM
-- Server version: 5.7.26
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sistem_seleksi_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend`
--

CREATE TABLE `backend` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan1` varchar(100) NOT NULL,
  `jurusan2` varchar(100) NOT NULL,
  `nilai_ujian` int(5) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `backend`
--

INSERT INTO `backend` (`id`, `nama_lengkap`, `jurusan1`, `jurusan2`, `nilai_ujian`, `role`) VALUES
(5, 'Umar', 'Mobile Division', 'Back End Division', 80, 2),
(10, 'Dimas', 'Back End Division', 'Mobile Division', 70, 1),
(12, 'Yudha', 'Back End Division', 'Front End Division', 90, 1),
(13, 'Arif', 'Back End Division', 'Front End Division', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cadangan_test`
--

CREATE TABLE `cadangan_test` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan1` varchar(100) NOT NULL,
  `jurusan2` varchar(100) NOT NULL,
  `nilai_ujian` int(5) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cadangan_test`
--

INSERT INTO `cadangan_test` (`id`, `nama_lengkap`, `jurusan1`, `jurusan2`, `nilai_ujian`, `role`) VALUES
(2, 'Muhammad Hafif', 'Mobile Division', 'Back End Division', 100, 1),
(3, 'Muhyilail', 'Mobile Division', 'Back End Division', 90, 1),
(4, 'Yusup Al Maududi', 'Mobile Division', 'Back End Division', 90, 1),
(5, 'Umar', 'Mobile Division', 'Back End Division', 80, 1),
(6, 'Aziz ', 'Front End Division', 'Back End Division', 70, 1),
(7, 'Rizqi', 'Front End Division', 'Back End Division', 60, 1),
(8, 'Budi', 'Front End Division', 'Back End Division', 60, 1),
(9, 'Amar', 'Front End Division', 'Back End Division', 90, 1),
(10, 'Dimas', 'Back End Division', 'Mobile Division', 70, 1),
(11, 'Wahyudi', 'Back End Division', 'Mobile Division', 70, 1),
(12, 'Yudha', 'Back End Division', 'Front End Division', 90, 1),
(13, 'Arif', 'Back End Division', 'Front End Division', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `frontend`
--

CREATE TABLE `frontend` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan1` varchar(100) NOT NULL,
  `jurusan2` varchar(100) NOT NULL,
  `nilai_ujian` int(5) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `frontend`
--

INSERT INTO `frontend` (`id`, `nama_lengkap`, `jurusan1`, `jurusan2`, `nilai_ujian`, `role`) VALUES
(6, 'Aziz ', 'Front End Division', 'Back End Division', 70, 1),
(8, 'Budi', 'Front End Division', 'Back End Division', 60, 1),
(9, 'Amar', 'Front End Division', 'Back End Division', 90, 1),
(18, 'Abian ', 'Mobile Division', 'Front End Division', 80, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kode_masuk`
--

CREATE TABLE `kode_masuk` (
  `id` int(11) NOT NULL,
  `kode_admin` varchar(100) NOT NULL,
  `kode_santri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kode_masuk`
--

INSERT INTO `kode_masuk` (`id`, `kode_admin`, `kode_santri`) VALUES
(3, 'adminpp', 'seleksijurusan');

-- --------------------------------------------------------

--
-- Table structure for table `limit_jurusan`
--

CREATE TABLE `limit_jurusan` (
  `id` int(11) NOT NULL,
  `frontend` int(5) NOT NULL,
  `backend` int(5) NOT NULL,
  `mobile` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `limit_jurusan`
--

INSERT INTO `limit_jurusan` (`id`, `frontend`, `backend`, `mobile`) VALUES
(6, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan1` varchar(100) NOT NULL,
  `jurusan2` varchar(100) NOT NULL,
  `nilai_ujian` int(5) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `nama_lengkap`, `jurusan1`, `jurusan2`, `nilai_ujian`, `role`) VALUES
(2, 'Muhammad Hafif', 'Mobile Division', 'Back End Division', 100, 1),
(3, 'Muhyilail', 'Mobile Division', 'Back End Division', 90, 1),
(4, 'Yusup Al Maududi', 'Mobile Division', 'Back End Division', 90, 1),
(17, 'Al Busyro', 'Mobile Division', 'Front End Division', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jurusan1` varchar(100) NOT NULL,
  `jurusan2` varchar(100) NOT NULL,
  `nilai_ujian` int(5) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backend`
--
ALTER TABLE `backend`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `cadangan_test`
--
ALTER TABLE `cadangan_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend`
--
ALTER TABLE `frontend`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kode_masuk`
--
ALTER TABLE `kode_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limit_jurusan`
--
ALTER TABLE `limit_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadangan_test`
--
ALTER TABLE `cadangan_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kode_masuk`
--
ALTER TABLE `kode_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `limit_jurusan`
--
ALTER TABLE `limit_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

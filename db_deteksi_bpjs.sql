-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 11:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_deteksi_bpjs`
--

-- --------------------------------------------------------

--
-- Table structure for table `koding`
--

CREATE TABLE `koding` (
  `id` int(11) NOT NULL,
  `kode_satu` varchar(255) DEFAULT NULL,
  `kode_dua` varchar(255) DEFAULT NULL,
  `keterangan` longtext DEFAULT NULL,
  `kode_bpjs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `koding`
--

INSERT INTO `koding` (`id`, `kode_satu`, `kode_dua`, `keterangan`, `kode_bpjs`) VALUES
(1, 'E11', 'I20', '1.Jika penyakit jantung iskemik \nmerupakan komplikasi DM maka kode E11.6, untuk penyakit jantung iskemik (I20-I25) tidak dikode <br>\n2.Jika DM Tipe 2 tidak berhubungan dengan Penyakit Jantung iskemik maka dikode penyakit jantung iskemik (I20-I25) dan DM Tipe 2 tanpa komplikasi (E11.9)\n', NULL),
(2, 'E11', 'I21', '1.Jika penyakit jantung iskemik \nmerupakan komplikasi DM maka kode E11.6, untuk penyakit jantung iskemik (I20-I25) tidak dikode <br>\n2.Jika DM Tipe 2 tidak berhubungan dengan Penyakit Jantung iskemik maka dikode penyakit jantung iskemik (I20-I25) dan DM Tipe 2 tanpa komplikasi (E11.9)\n', NULL),
(3, 'E11', 'I22', '1.Jika penyakit jantung iskemik \nmerupakan komplikasi DM maka kode E11.6, untuk penyakit jantung iskemik (I20-I25) tidak dikode <br>\n2.Jika DM Tipe 2 tidak berhubungan dengan Penyakit Jantung iskemik maka dikode penyakit jantung iskemik (I20-I25) dan DM Tipe 2 tanpa komplikasi (E11.9)\n', NULL),
(4, 'E11', 'I23', '1.Jika penyakit jantung iskemik \nmerupakan komplikasi DM maka kode E11.6, untuk penyakit jantung iskemik (I20-I25) tidak dikode <br>\n2.Jika DM Tipe 2 tidak berhubungan dengan Penyakit Jantung iskemik maka dikode penyakit jantung iskemik (I20-I25) dan DM Tipe 2 tanpa komplikasi (E11.9)\n', NULL),
(5, 'E11', 'I24', '1.Jika penyakit jantung iskemik \nmerupakan komplikasi DM maka kode E11.6, untuk penyakit jantung iskemik (I20-I25) tidak dikode <br>\n2.Jika DM Tipe 2 tidak berhubungan dengan Penyakit Jantung iskemik maka dikode penyakit jantung iskemik (I20-I25) dan DM Tipe 2 tanpa komplikasi (E11.9)\n', NULL),
(6, 'E11', 'I25', '1.Jika penyakit jantung iskemik \nmerupakan komplikasi DM maka kode E11.6, untuk penyakit jantung iskemik (I20-I25) tidak dikode <br>\n2.Jika DM Tipe 2 tidak berhubungan dengan Penyakit Jantung iskemik maka dikode penyakit jantung iskemik (I20-I25) dan DM Tipe 2 tanpa komplikasi (E11.9)\n', NULL),
(7, 'N20', 'N39.0', 'Kondisi batu saluran kemih yang disertai dengan infeksi saluran kemih menggunakan kode gabungan di N20-N23 (sesuai kriteria eksklusi di sub bab N30-N39)', 'N20-N30'),
(8, 'N21', 'N39.0', 'Kondisi batu saluran kemih yang disertai dengan infeksi saluran kemih menggunakan kode gabungan di N20-N23 (sesuai kriteria eksklusi di sub bab N30-N39)', 'N20-N30'),
(9, 'N22', 'N39.0', 'Kondisi batu saluran kemih yang disertai dengan infeksi saluran kemih menggunakan kode gabungan di N20-N23 (sesuai kriteria eksklusi di sub bab N30-N39)', 'N20-N30'),
(10, 'N23', 'N39.0', 'Kondisi batu saluran kemih yang disertai dengan infeksi saluran kemih menggunakan kode gabungan di N20-N23 (sesuai kriteria eksklusi di sub bab N30-N39)', 'N20-N30'),
(11, 'N24', 'N39.0', 'Kondisi batu saluran kemih yang disertai dengan infeksi saluran kemih menggunakan kode gabungan di N20-N23 (sesuai kriteria eksklusi di sub bab N30-N39)', 'N20-N30'),
(12, 'N25', 'N39.0', 'Kondisi batu saluran kemih yang disertai dengan infeksi saluran kemih menggunakan kode gabungan di N20-N23 (sesuai kriteria eksklusi di sub bab N30-N39)', 'N20-N30'),
(13, 'N26', 'N39.0', 'Kondisi batu saluran kemih yang disertai dengan infeksi saluran kemih menggunakan kode gabungan di N20-N23 (sesuai kriteria eksklusi di sub bab N30-N39)', 'N20-N30'),
(14, 'N27', 'N39.0', 'Kondisi batu saluran kemih yang disertai dengan infeksi saluran kemih menggunakan kode gabungan di N20-N23 (sesuai kriteria eksklusi di sub bab N30-N39)', 'N20-N30'),
(15, 'N28', 'N39.0', 'Kondisi batu saluran kemih yang disertai dengan infeksi saluran kemih menggunakan kode gabungan di N20-N23 (sesuai kriteria eksklusi di sub bab N30-N39)', 'N20-N30'),
(16, 'N29', 'N39.0', 'Kondisi batu saluran kemih yang disertai dengan infeksi saluran kemih menggunakan kode gabungan di N20-N23 (sesuai kriteria eksklusi di sub bab N30-N39)', 'N20-N30'),
(17, 'N30', 'N39.0', 'Kondisi batu saluran kemih yang disertai dengan infeksi saluran kemih menggunakan kode gabungan di N20-N23 (sesuai kriteria eksklusi di sub bab N30-N39)', 'N20-N30'),
(18, 'K80', 'K83.0', '1.Jika calculus of bile duct (K80.-) dengan cholangitis dikode K80.3 Calculus of bile duct with cholangitis <br>\n2.Jika calculus of bile duct (K80.-) dengan cholangitis dan cholecystitis dikode K80.4 Calculus with cholecystitis <br>\n3.Calculus of bile duct dan cholangitis tidak dikode terpisah <br>\n4.Calculus of bile duct dan cholangitis 7 cholecystitis tidak dikode terpisah\n', 'K80.3'),
(19, 'K80', 'K83.1', '1.Jika K83.1 Obstruction of bile duct dengan K80.- Cholelithiasis maka dikode (K80.-) <br>\n2.K83.1 Obstruction of bile duct tidak dikode terpisah', 'K80'),
(20, 'G72.3', 'G72.3', 'Kondisi kelemahan otot pada diagnosis perriodic paralysis sudah termasuk dalam kode G72.3- (periodic Paraysis)', 'G72.3'),
(21, 'K35.2', 'K63.1', 'Kondisi peritonitis dan atau perforasi, abses peritoneal yang disertai apendisitis (ataupun kondisi sebaliknya) cukup menggunakan kode gabungan K35.-', 'K35.2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `study` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`, `last_login`, `foto`, `study`, `fullname`) VALUES
(1, 'admin123', 'admin@mail.com', 'admin', '2024-02-04 05:05:01', '2024-02-04 05:05:01', '2024-03-16 14:59:41', 'http://localhost/deteksi_bpjs/upload/profile/1_logoku.png', 'Management Pendidikan kesehatan', 'Rifjan ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koding`
--
ALTER TABLE `koding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koding`
--
ALTER TABLE `koding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

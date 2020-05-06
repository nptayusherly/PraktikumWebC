-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 17.53
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmahasiswa`
--

CREATE TABLE `tbmahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tbmahasiswa`
--

INSERT INTO `tbmahasiswa` (`id`, `nim`, `nama_mahasiswa`, `alamat`, `jenis_kelamin`, `jurusan`) VALUES
(1, '1808561001', 'SAFIRA\r\n', 'Cilacap', 'Perempuan', 'Sistem Informasi'),
(2, '1808561002', 'NI PUTU AMBALIKA DEWI\r\n', 'Jakarta', 'Perempuan', 'Teknik Informatika'),
(3, '1808561003', 'AYU KADEK NADYA OKTAVIANA\r\n', 'Yogyakarta', 'Perempuan', 'Sistem Informasi'),
(4, '1808561004', 'GUSTI AYU VIDJARETHA WARDANA\r\n', 'Semarang', 'Perempuan', 'Teknik Informatika'),
(5, '1808561005', 'NI KADEK AYU TASYA OKTA VIANA\r\n', 'Purwokerto', 'Perempuan', 'Sistem Informasi'),
(6, '1808561006', 'LUH PUTU EKA NADYA WATI\r\n', 'Njojog', 'Perempuan', 'Sistem Informasi'),
(7, '1808561007', 'HAIRUL LANA\r\n', 'Prapatan Ciamis', 'Laki-laki', 'Sistem Informasi'),
(8, '1808561008', 'FARIN ISTIGHFARIZKY\r\n', 'Jakarta', 'Perempuan', 'Sistem Informasi'),
(9, '1808561010', 'I MADE ARI WIDIARSANA\r\n', 'Jakarta', 'Laki-laki', 'Teknik Informatika'),
(10, '1808561011', 'MUHAMMAD FIRDAUS ZULKARNAIN\r\n', 'Jakarta', 'Laki-laki', 'Sistem Informasi'),
(11, '1808561012', 'SANG PUTU FEBRI WIRA PRATAMA\r\n', 'Medan', 'Laki-laki', 'Sistem Informasi'),
(12, '1808561013', 'I MADE SATRIA BIMANTARA\r\n', 'Palangkaraya', 'Laki-laki', 'Teknik Informatika'),
(13, '1808561014', 'KARLINA SURYA WITANTO\r\n', 'Riau', 'Perempuan', 'Sistem Informasi'),
(14, '1808561015', 'NI MADE PUTRI WAHYUNI\r\n', 'Jakarta', 'Perempuan', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbmahasiswa`
--
ALTER TABLE `tbmahasiswa`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbmahasiswa`
--
ALTER TABLE `tbmahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

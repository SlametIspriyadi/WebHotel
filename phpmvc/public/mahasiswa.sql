-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2023 pada 08.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_praktisi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `tahun` int(100) NOT NULL,
  `tingkat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `prestasi`, `tahun`, `tingkat`) VALUES
(8, 'Rizky Fajar Maulana', '22520002', 'rizky_22520002@stimata.ac.id', 'Teknologi Informasi', 'Global Game Jam Competition 2024', 2024, 'Internasional'),
(9, 'Ruby Hoshino', '22510069', 'ruby_22510069@stimata.ac.id', 'Sistem Informasi', 'Winner of Young Singer Competition', 2024, 'Internasional'),
(10, 'Kana Arima', '22310030', 'kana_22310030@stimata.ac.id', 'Manajemen Informasi', 'Winner of Internatioal Acting Competition', 2024, 'Internasional'),
(11, 'Akane Kurokawa', '22520098', 'akane_22520098@stimata.ac.id', 'Manajemen Informasi', 'Winner of World Theater Competition', 2024, 'Internasional'),
(12, 'Aqua Hoshino', '22510002', 'aqua_22510002@stimata.ac.id', 'Sistem Informasi', 'Best of National Film Making Competition', 2023, 'Nasional');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

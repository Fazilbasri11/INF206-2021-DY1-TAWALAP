-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2021 pada 20.23
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tawalap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `NamaAkun` varchar(30) NOT NULL,
  `NIKAkun` varchar(255) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `id_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `NamaAkun`, `NIKAkun`, `Password`, `Email`, `id_level`) VALUES
(2, 'admin', '1908107010011', '$2y$10$D/lYTyt1c.L4Qtw.3r4hkecvJH921kX5fzWbDONni2SBzDx2CetqG', 'admin', '1'),
(6, 'Waliam Mursyida', '1908107010015', '$2y$10$Pk4NHWptAUkZg75f.Bl4/eui6ZQtpjS0/SPEroTGxooqTttYtqBPK', '082260785750', '3'),
(7, 'M.Misbah Alvariz', '1105092708010002', '$2y$10$YvL8ssphpk55HDkRCFXuk.tle6Sx8TuOpIU5YL0p1tPontI69JVlG', '082144637249', '3'),
(8, 'Fazil Basri', '1908107010032', '$2y$10$l2qCNkMkgtleDJrHYMoAdukGjZbuou7wyLGUh7rOgkuloRfLrmC1e', 'fazil@gmail.com', '3'),
(13, 'Siti Balqis Humairah', '1908107010001', '$2y$10$G645qRxhpgHdbOfWADYScOE1gVTfEif7wgfu.E3mVt.gZ1F5g4xv.', 'balqis@gmail.com', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

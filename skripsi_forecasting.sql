-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2024 pada 15.44
-- Versi server: 10.4.32-MariaDB-log
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_forecasting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kunjungan`
--

CREATE TABLE `tabel_kunjungan` (
  `id_kunjungan` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `periode` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_pengunjung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tabel_kunjungan`
--

INSERT INTO `tabel_kunjungan` (`id_kunjungan`, `id_wisata`, `periode`, `bulan`, `tahun`, `jumlah_pengunjung`) VALUES
(759, 7, 1, 1, 2019, 521732),
(760, 7, 2, 2, 2019, 337119),
(761, 7, 3, 3, 2019, 615308),
(762, 7, 4, 4, 2019, 744848),
(763, 7, 5, 5, 2019, 346171),
(764, 7, 6, 6, 2019, 696610),
(765, 7, 7, 7, 2019, 724362),
(766, 7, 8, 8, 2019, 613891),
(767, 7, 9, 9, 2019, 551550),
(768, 7, 10, 10, 2019, 635189),
(769, 7, 11, 11, 2019, 655186),
(770, 7, 12, 12, 2019, 609401),
(771, 7, 13, 1, 2020, 694564),
(772, 7, 14, 2, 2020, 563022),
(773, 7, 15, 3, 2020, 322284),
(774, 7, 16, 4, 2020, 41219),
(775, 7, 17, 5, 2020, 44486),
(776, 7, 18, 6, 2020, 115985),
(777, 7, 19, 7, 2020, 221118),
(778, 7, 20, 8, 2020, 364295),
(779, 7, 21, 9, 2020, 288595),
(780, 7, 22, 10, 2020, 391524),
(781, 7, 23, 11, 2020, 359426),
(782, 7, 24, 12, 2020, 389254),
(783, 7, 25, 1, 2021, 179984),
(784, 7, 26, 2, 2021, 194650),
(785, 7, 27, 3, 2021, 300131),
(786, 7, 28, 4, 2021, 283517),
(787, 7, 29, 5, 2021, 264528),
(788, 7, 30, 6, 2021, 322873),
(789, 7, 31, 7, 2021, 62357),
(790, 7, 32, 8, 2021, 135495),
(791, 7, 33, 9, 2021, 272697),
(792, 7, 34, 10, 2021, 457954),
(793, 7, 35, 11, 2021, 455393),
(794, 7, 36, 12, 2021, 624603),
(795, 7, 37, 1, 2022, 509614),
(796, 7, 38, 2, 2022, 375472),
(797, 7, 39, 3, 2022, 509707),
(798, 7, 40, 4, 2022, 278142),
(799, 7, 41, 5, 2022, 722039),
(800, 7, 42, 6, 2022, 611928),
(801, 7, 43, 7, 2022, 635665),
(802, 7, 44, 8, 2022, 480157),
(803, 7, 45, 9, 2022, 571702),
(804, 7, 46, 10, 2022, 730025),
(805, 7, 47, 11, 2022, 684680),
(806, 7, 48, 12, 2022, 971378),
(807, 7, 49, 1, 2023, 1140948),
(808, 7, 50, 2, 2023, 890960),
(809, 7, 51, 3, 2023, 783419),
(810, 7, 52, 4, 2023, 647466),
(811, 7, 53, 5, 2023, 1093056),
(812, 7, 54, 6, 2023, 1108141),
(813, 7, 55, 7, 2023, 941704),
(814, 7, 56, 8, 2023, 655165),
(815, 7, 57, 9, 2023, 664328),
(816, 7, 58, 10, 2023, 751909),
(817, 7, 59, 11, 2023, 762997),
(818, 7, 60, 12, 2023, 782210),
(819, 7, 61, 1, 2024, 1173042),
(820, 7, 62, 2, 2024, 820350),
(821, 7, 63, 3, 2024, 681390),
(822, 7, 64, 4, 2024, 786033),
(823, 7, 65, 5, 2024, 990828),
(824, 7, 66, 6, 2024, 854069),
(825, 7, 67, 7, 2024, 659829),
(826, 7, 68, 8, 2024, 765198),
(827, 7, 69, 9, 2024, 561235),
(828, 7, 70, 10, 2024, 981568),
(829, 7, 71, 11, 2024, 421890),
(830, 7, 72, 12, 2024, 2568);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_wisata`
--

CREATE TABLE `tabel_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tabel_wisata`
--

INSERT INTO `tabel_wisata` (`id_wisata`, `nama_wisata`) VALUES
(7, 'Jogja');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_kunjungan`
--
ALTER TABLE `tabel_kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`),
  ADD KEY `tabel_kunjungan_ibfk_1` (`id_wisata`);

--
-- Indeks untuk tabel `tabel_wisata`
--
ALTER TABLE `tabel_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_kunjungan`
--
ALTER TABLE `tabel_kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=834;

--
-- AUTO_INCREMENT untuk tabel `tabel_wisata`
--
ALTER TABLE `tabel_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_kunjungan`
--
ALTER TABLE `tabel_kunjungan`
  ADD CONSTRAINT `tabel_kunjungan_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `tabel_wisata` (`id_wisata`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

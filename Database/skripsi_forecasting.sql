-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2023 pada 02.19
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
-- Database: `skripsi_forecasting`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jabatan`
--

CREATE TABLE `tabel_jabatan` (
  `id_jabatan` int(2) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tabel_jabatan`
--

INSERT INTO `tabel_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Admin'),
(2, 'Super Admin'),
(3, 'Kepala Dinas');

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
(373, 1, 1, 1, 2019, 15204),
(374, 1, 2, 2, 2019, 16212),
(375, 1, 3, 3, 2019, 14765),
(376, 1, 4, 4, 2019, 17817),
(377, 1, 5, 5, 2019, 19769),
(378, 1, 6, 6, 2019, 16239),
(379, 1, 7, 7, 2019, 14637),
(380, 1, 8, 8, 2019, 11256),
(381, 1, 9, 9, 2019, 15826),
(382, 1, 10, 10, 2019, 17521),
(383, 1, 11, 11, 2019, 17384),
(384, 1, 12, 12, 2019, 21899),
(385, 1, 13, 1, 2020, 18634),
(386, 1, 14, 2, 2020, 14063),
(387, 1, 15, 3, 2020, 16413),
(388, 1, 16, 4, 2020, 21216),
(389, 1, 17, 5, 2020, 21010),
(390, 1, 18, 6, 2020, 3213),
(391, 1, 19, 7, 2020, 26107),
(392, 1, 20, 8, 2020, 18208),
(393, 1, 21, 9, 2020, 20350),
(394, 1, 22, 10, 2020, 24720),
(395, 1, 23, 11, 2020, 14316),
(396, 1, 24, 12, 2020, 26419),
(397, 1, 25, 1, 2021, 19716),
(398, 1, 26, 2, 2021, 16211),
(399, 1, 27, 3, 2021, 19769),
(400, 1, 28, 4, 2021, 25797),
(401, 1, 29, 5, 2021, 23521),
(402, 1, 30, 6, 2021, 12123),
(403, 1, 31, 7, 2021, 18564),
(404, 1, 32, 8, 2021, 17763),
(405, 1, 33, 9, 2021, 24444),
(406, 1, 34, 10, 2021, 27463),
(407, 1, 35, 11, 2021, 25296),
(408, 1, 36, 12, 2021, 26917),
(435, 2, 1, 1, 2015, 5457),
(436, 2, 2, 2, 2015, 1760),
(437, 2, 3, 3, 2015, 3514),
(438, 2, 4, 4, 2015, 3322),
(439, 2, 5, 5, 2015, 5002),
(440, 2, 6, 6, 2015, 6549),
(441, 2, 7, 7, 2015, 2858),
(442, 2, 8, 8, 2015, 3666),
(443, 2, 9, 9, 2015, 2821),
(444, 2, 10, 10, 2015, 3403),
(445, 2, 11, 11, 2015, 1807),
(446, 2, 12, 12, 2015, 3609),
(447, 2, 13, 1, 2016, 2929),
(448, 2, 14, 2, 2016, 3528),
(449, 2, 15, 3, 2016, 2525),
(450, 2, 16, 4, 2016, 3363),
(451, 2, 17, 5, 2016, 5505),
(452, 2, 18, 6, 2016, 913),
(453, 2, 19, 7, 2016, 4302),
(454, 2, 20, 8, 2016, 3288),
(455, 2, 21, 9, 2016, 3093),
(456, 2, 22, 10, 2016, 4421),
(457, 2, 23, 11, 2016, 2773),
(458, 2, 24, 12, 2016, 7717),
(459, 2, 25, 1, 2017, 5663),
(460, 2, 26, 2, 2017, 4059),
(461, 2, 27, 3, 2017, 4044),
(462, 2, 28, 4, 2017, 4903),
(463, 2, 29, 5, 2017, 7034),
(464, 2, 30, 6, 2017, 235),
(465, 2, 31, 7, 2017, 19377),
(466, 2, 32, 8, 2017, 2432),
(467, 2, 33, 9, 2017, 4202),
(468, 2, 34, 10, 2017, 6273),
(469, 2, 35, 11, 2017, 2625),
(470, 2, 36, 12, 2017, 5669),
(497, 3, 1, 1, 2015, 5935),
(498, 3, 2, 2, 2015, 2150),
(499, 3, 3, 3, 2015, 2475),
(500, 3, 4, 4, 2015, 2175),
(501, 3, 5, 5, 2015, 3300),
(502, 3, 6, 6, 2015, 4464),
(503, 3, 7, 7, 2015, 21803),
(504, 3, 8, 8, 2015, 2500),
(505, 3, 9, 9, 2015, 4200),
(506, 3, 10, 10, 2015, 3150),
(507, 3, 11, 11, 2015, 1700),
(508, 3, 12, 12, 2015, 8773),
(509, 3, 13, 1, 2016, 1275),
(510, 3, 14, 2, 2016, 3375),
(511, 3, 15, 3, 2016, 4450),
(512, 3, 16, 4, 2016, 3100),
(513, 3, 17, 5, 2016, 5000),
(514, 3, 18, 6, 2016, 1250),
(515, 3, 19, 7, 2016, 11200),
(516, 3, 20, 8, 2016, 3300),
(517, 3, 21, 9, 2016, 4260),
(518, 3, 22, 10, 2016, 2222),
(519, 3, 23, 11, 2016, 3350),
(520, 3, 24, 12, 2016, 6875),
(521, 3, 25, 1, 2017, 3150),
(522, 3, 26, 2, 2017, 2400),
(523, 3, 27, 3, 2017, 3400),
(524, 3, 28, 4, 2017, 3475),
(525, 3, 29, 5, 2017, 4325),
(526, 3, 30, 6, 2017, 655),
(527, 3, 31, 7, 2017, 27022),
(528, 3, 32, 8, 2017, 1750),
(529, 3, 33, 9, 2017, 2120),
(530, 3, 34, 10, 2017, 2225),
(531, 3, 35, 11, 2017, 2150),
(532, 3, 36, 12, 2017, 8297),
(559, 4, 1, 1, 2015, 2711),
(560, 4, 2, 2, 2015, 1549),
(561, 4, 3, 3, 2015, 1767),
(562, 4, 4, 4, 2015, 1589),
(563, 4, 5, 5, 2015, 2255),
(564, 4, 6, 6, 2015, 1011),
(565, 4, 7, 7, 2015, 8638),
(566, 4, 8, 8, 2015, 1471),
(567, 4, 9, 9, 2015, 4108),
(568, 4, 10, 10, 2015, 1823),
(569, 4, 11, 11, 2015, 1826),
(570, 4, 12, 12, 2015, 9087),
(571, 4, 13, 1, 2016, 1020),
(572, 4, 14, 2, 2016, 1469),
(573, 4, 15, 3, 2016, 1622),
(574, 4, 16, 4, 2016, 1502),
(575, 4, 17, 5, 2016, 2907),
(576, 4, 18, 6, 2016, 995),
(577, 4, 19, 7, 2016, 8728),
(578, 4, 20, 8, 2016, 1250),
(579, 4, 21, 9, 2016, 2844),
(580, 4, 22, 10, 2016, 1308),
(581, 4, 23, 11, 2016, 1498),
(582, 4, 24, 12, 2016, 12479),
(583, 4, 25, 1, 2017, 1592),
(584, 4, 26, 2, 2017, 1091),
(585, 4, 27, 3, 2017, 1033),
(586, 4, 28, 4, 2017, 1885),
(587, 4, 29, 5, 2017, 2333),
(588, 4, 30, 6, 2017, 4241),
(589, 4, 31, 7, 2017, 8880),
(590, 4, 32, 8, 2017, 1088),
(591, 4, 33, 9, 2017, 3811),
(592, 4, 34, 10, 2017, 1949),
(593, 4, 35, 11, 2017, 727),
(594, 4, 36, 12, 2017, 16166),
(621, 5, 1, 1, 2015, 18918),
(622, 5, 2, 2, 2015, 2485),
(623, 5, 3, 3, 2015, 2535),
(624, 5, 4, 4, 2015, 2582),
(625, 5, 5, 5, 2015, 6369),
(626, 5, 6, 6, 2015, 7624),
(627, 5, 7, 7, 2015, 9623),
(628, 5, 8, 8, 2015, 2655),
(629, 5, 9, 9, 2015, 3914),
(630, 5, 10, 10, 2015, 2682),
(631, 5, 11, 11, 2015, 6460),
(632, 5, 12, 12, 2015, 10652),
(633, 5, 13, 1, 2016, 9168),
(634, 5, 14, 2, 2016, 3702),
(635, 5, 15, 3, 2016, 2716),
(636, 5, 16, 4, 2016, 3385),
(637, 5, 17, 5, 2016, 8719),
(638, 5, 18, 6, 2016, 4820),
(639, 5, 19, 7, 2016, 14319),
(640, 5, 20, 8, 2016, 2401),
(641, 5, 21, 9, 2016, 3861),
(642, 5, 22, 10, 2016, 3437),
(643, 5, 23, 11, 2016, 2578),
(644, 5, 24, 12, 2016, 9115),
(645, 5, 25, 1, 2017, 7690),
(646, 5, 26, 2, 2017, 2108),
(647, 5, 27, 3, 2017, 2349),
(648, 5, 28, 4, 2017, 4160),
(649, 5, 29, 5, 2017, 4574),
(650, 5, 30, 6, 2017, 5185),
(651, 5, 31, 7, 2017, 14132),
(652, 5, 32, 8, 2017, 1250),
(653, 5, 33, 9, 2017, 3048),
(654, 5, 34, 10, 2017, 2314),
(655, 5, 35, 11, 2017, 1666),
(656, 5, 36, 12, 2017, 6507);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `email` varchar(300) NOT NULL,
  `passwrd` varchar(300) NOT NULL,
  `id_jabatan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `email`, `passwrd`, `id_jabatan`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', '12345678', 2),
(2, 'Admin', 'admin@gmail.com', '12345678', 1),
(3, 'Kepala Dinas', 'kepaladinas@gmail.com', '12345678', 3);

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
(1, 'Makam Asta Tinggi'),
(2, 'Museum dan Keraton'),
(3, 'Pantai Lombang'),
(4, 'Pantai Gili Labak'),
(5, 'Water Park Sumekar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_jabatan`
--
ALTER TABLE `tabel_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tabel_kunjungan`
--
ALTER TABLE `tabel_kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`),
  ADD KEY `tabel_kunjungan_ibfk_1` (`id_wisata`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `tabel_wisata`
--
ALTER TABLE `tabel_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_jabatan`
--
ALTER TABLE `tabel_jabatan`
  MODIFY `id_jabatan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_kunjungan`
--
ALTER TABLE `tabel_kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=746;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- Ketidakleluasaan untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD CONSTRAINT `tabel_user_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tabel_jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

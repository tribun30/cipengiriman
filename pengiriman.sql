-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2020 pada 08.53
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengiriman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_cust` varchar(7) NOT NULL,
  `nama_cust` varchar(50) NOT NULL,
  `alamat_cust` text NOT NULL,
  `Kota` enum('Jakarta','Cikarang','Karawang','Bekasi') NOT NULL,
  `tlp_cust` int(15) NOT NULL,
  `email_cust` varchar(20) NOT NULL,
  `pic` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cust`, `nama_cust`, `alamat_cust`, `Kota`, `tlp_cust`, `email_cust`, `pic`) VALUES
('C001', 'PT Gemala Kempa Daya', 'Kalihurip, Kec. Cikampek, Kabupaten Karawang', 'Karawang', 4602755, 'gemalakempa@gmail.co', 'Andi'),
('C002', 'PT Inti Ganda Perdana', 'Jl. Pegangsaan Dua Km. 1.6, Kelapa Gading, RT.3/RW.4, Pegangsaan Dua, Kec. Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14250', 'Jakarta', 4602755, 'intigandaipg@gmail.c', 'Nando'),
('C003', 'PT Astra Honda Motor', 'Jl. Raya Kalimantan, Cikarang, Danau Indah, Kec. Cikarang Bar., Bekasi, Jawa Barat 17530', 'Cikarang', 6518080, 'astraahm@gmail.com', 'Indah'),
('C004', 'PT Mitra Tama Gemilang ', 'JL suka suka', 'Jakarta', 210022, 'mtg@gmail.com', 'Cici'),
('C005', 'PT Yazuho Auto ', 'JL suka suka', 'Jakarta', 210022, 'ya@gmail.com', 'Cici'),
('C006', 'PT Tozen Mechanical Products', 'JL suka suka', 'Jakarta', 210022, 'tmp@gmail.com', 'Cici'),
('C007', 'PT Ganding Toolsindo', 'JL suka suka', 'Jakarta', 210022, 'gt@gmail.com', 'Cici'),
('C008', 'PT Binerkat Tangguh Abadi', 'JL suka suka', 'Jakarta', 210022, 'bta@gmail.com', 'Cici'),
('C009', 'PT Nifasi Megah Cemerlang', 'JL suka suka', 'Jakarta', 210022, 'nmc@gmail.com', 'Cici'),
('C010', 'PT Saint Gobain Abrasive Diamas', 'JL suka suka', 'Jakarta', 210022, 'nmc@gmail.com', 'Cici'),
('G001', 'PT Teknikatama Karya Mandiri', 'Jl. Raya Bahkilong No. 88, Cikarang Selatan', 'Cikarang', 22104845, 'Jl. Bahkilong Raya N', 'Cici');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_detail`
--

CREATE TABLE `customer_detail` (
  `id_cd` int(11) NOT NULL,
  `id_cust` varchar(7) NOT NULL,
  `cust_id` varchar(7) NOT NULL,
  `jarak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer_detail`
--

INSERT INTO `customer_detail` (`id_cd`, `id_cust`, `cust_id`, `jarak`) VALUES
(1, '2', 'C001', 55),
(2, '2', 'C002', 48),
(3, '2', 'C003', 37),
(4, 'C001', 'C002', 76),
(5, 'C001', 'C003', 31),
(6, 'C002', 'G001', 44),
(7, 'C002', 'C002', 76),
(8, 'C002', 'C003', 31),
(9, 'C003', 'G001', 11),
(10, 'C003', 'C001', 51),
(11, 'C003', 'C002', 31),
(12, 'G001', 'C001', 48),
(13, 'G001', 'C002', 44),
(14, 'G001', 'C003', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jarak`
--

CREATE TABLE `jarak` (
  `id_jarak` int(11) NOT NULL,
  `tanggal_jarak` date NOT NULL,
  `id_cust` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jarak`
--

INSERT INTO `jarak` (`id_jarak`, `tanggal_jarak`, `id_cust`) VALUES
(1, '2020-05-26', 'G001'),
(2, '2020-05-26', 'C001'),
(3, '2020-05-26', 'C003'),
(4, '2020-05-26', 'C004'),
(5, '2020-05-26', 'C005'),
(6, '2020-05-26', 'C006'),
(7, '2020-05-26', 'C007'),
(8, '2020-05-26', 'C008'),
(9, '2020-05-26', 'C009'),
(10, '2020-05-26', 'C010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jarak_detail`
--

CREATE TABLE `jarak_detail` (
  `id_jd` int(11) NOT NULL,
  `id_jarak` int(11) NOT NULL,
  `id_cust` varchar(7) NOT NULL,
  `jarak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jarak_detail`
--

INSERT INTO `jarak_detail` (`id_jd`, `id_jarak`, `id_cust`, `jarak`) VALUES
(1, 1, 'G001', 0),
(2, 1, 'C001', 48),
(3, 1, 'C002', 44),
(4, 1, 'C003', 11),
(5, 1, 'C004', 7),
(6, 1, 'C005', 17),
(7, 1, 'C006', 119),
(8, 1, 'C007', 2),
(9, 1, 'C008', 7),
(10, 1, 'C009', 22),
(11, 1, 'C010', 49),
(12, 2, 'G001', 48),
(13, 2, 'C001', 0),
(14, 2, 'C002', 75),
(15, 2, 'C003', 33),
(16, 2, 'C004', 43),
(17, 2, 'C005', 50),
(18, 2, 'C006', 150),
(19, 2, 'C007', 49),
(20, 2, 'C008', 47),
(21, 2, 'C009', 56),
(22, 2, 'C010', 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_pengiriman`
--

CREATE TABLE `laporan_pengiriman` (
  `id_sj` varchar(7) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `id_produk` varchar(7) NOT NULL,
  `jml_produk` int(10) NOT NULL,
  `id_cust` varchar(7) NOT NULL,
  `biaya_kirim` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(7) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `tipe_produk` varchar(10) NOT NULL,
  `berat_produk` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `tipe_produk`, `berat_produk`) VALUES
('1', 'a', 'a', 4),
('2', 'b', 'b', 5),
('3', 'c', 'c', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `ID_SPP` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `id_cust` varchar(7) NOT NULL,
  `id_produk` varchar(7) NOT NULL,
  `jml_kirim` int(15) NOT NULL,
  `SPP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`ID_SPP`, `Tanggal`, `id_cust`, `id_produk`, `jml_kirim`, `SPP`) VALUES
(3, '2018-01-01', '2', '3', 40, ''),
(4, '2017-12-31', '10', '2', 90, ''),
(5, '2020-12-31', '1', '2', 5, ''),
(8, '2023-01-01', '2', '2', 10000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_jalan`
--

CREATE TABLE `surat_jalan` (
  `id_sj` varchar(8) NOT NULL,
  `tgl_sj` date NOT NULL,
  `id_cust` varchar(7) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_jalan`
--

INSERT INTO `surat_jalan` (`id_sj`, `tgl_sj`, `id_cust`, `status`) VALUES
('SJ-00001', '2020-05-20', '10', 0),
('SJ-00002', '2020-05-21', '1', 0),
('SJ-00003', '2020-01-31', '2', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_jalan_detail`
--

CREATE TABLE `surat_jalan_detail` (
  `id_sj_detail` int(11) NOT NULL,
  `id_sj` varchar(8) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_jalan_detail`
--

INSERT INTO `surat_jalan_detail` (`id_sj_detail`, `id_sj`, `id_produk`, `qty`) VALUES
(7, 'SJ-00002', 1, 7000),
(8, 'SJ-00002', 1, 5000),
(9, 'SJ-00001', 1, 300);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `hak_akses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password`, `hak_akses`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'ppic', 'ppic', 'ppic'),
(3, 'driver', 'driver', 'driver'),
(4, 'direktur', 'direktur', 'direktur'),
(5, 'Marketing', 'Marketing', 'Marketing');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indeks untuk tabel `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD PRIMARY KEY (`id_cd`);

--
-- Indeks untuk tabel `jarak`
--
ALTER TABLE `jarak`
  ADD PRIMARY KEY (`id_jarak`);

--
-- Indeks untuk tabel `jarak_detail`
--
ALTER TABLE `jarak_detail`
  ADD PRIMARY KEY (`id_jd`);

--
-- Indeks untuk tabel `laporan_pengiriman`
--
ALTER TABLE `laporan_pengiriman`
  ADD PRIMARY KEY (`id_sj`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`ID_SPP`);

--
-- Indeks untuk tabel `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD PRIMARY KEY (`id_sj`);

--
-- Indeks untuk tabel `surat_jalan_detail`
--
ALTER TABLE `surat_jalan_detail`
  ADD PRIMARY KEY (`id_sj_detail`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer_detail`
--
ALTER TABLE `customer_detail`
  MODIFY `id_cd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `jarak`
--
ALTER TABLE `jarak`
  MODIFY `id_jarak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jarak_detail`
--
ALTER TABLE `jarak_detail`
  MODIFY `id_jd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `ID_SPP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `surat_jalan_detail`
--
ALTER TABLE `surat_jalan_detail`
  MODIFY `id_sj_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

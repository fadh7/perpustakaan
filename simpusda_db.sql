-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2022 pada 08.36
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpusda_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `l_kritik`
--

CREATE TABLE `l_kritik` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_kritik` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `l_statistik`
--

CREATE TABLE `l_statistik` (
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_buku`
--

CREATE TABLE `m_buku` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `m_kategori_id` int(10) UNSIGNED NOT NULL,
  `pengarang` varchar(255) DEFAULT NULL,
  `jumlah_buku` int(10) UNSIGNED DEFAULT NULL,
  `nama_penerbit` varchar(255) NOT NULL,
  `isbn` varchar(55) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `sumber` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_buku`
--

INSERT INTO `m_buku` (`id`, `judul_buku`, `sinopsis`, `m_kategori_id`, `pengarang`, `jumlah_buku`, `nama_penerbit`, `isbn`, `lokasi`, `tahun`, `tanggal_masuk`, `sumber`, `harga`) VALUES
(1, 'Garis Sketsa Wajah', 'Bagaimana satu garis bisa mempengaruhi konstruktur wajah dalam sebuah sketsa', 1, 'Ozi', 1, 'Erlangga', '978-602-8136-252-6', '808.2 KUS p', 2020, '2020-11-12', 'Pembelian', 125000),
(2, 'Seni 3 Dimensi', 'Proses pembuatan karya seni 3 dimensi', 1, 'M Fadhillah', 2, 'Cahaya Mas', NULL, '297.38 Yul D (Pusling 2)', 2012, '2019-07-03', 'Sumbangan', NULL),
(3, 'Komuniaksi Masyarakat', 'Bagaimana proses komeunikasi dimasyarakat itu bisa terjadi', 2, 'Razidan', 1, 'Sastra Indonesia', '602178985-7', NULL, 2018, '2021-06-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_kategori`
--

CREATE TABLE `m_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_kategori`
--

INSERT INTO `m_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Kesenian'),
(2, 'Ilmu sosial'),
(3, 'Bahasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_role`
--

CREATE TABLE `m_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_role`
--

INSERT INTO `m_role` (`id`, `nama_role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_user`
--

CREATE TABLE `m_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `m_role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_user`
--

INSERT INTO `m_user` (`id`, `username`, `password`, `m_role_id`) VALUES
(1, 'ozi02', '1234', 1),
(2, 'fadh7', '0000', 1),
(3, 'nina', 'nina', 2),
(4, 'zidoon', 'abi', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_peminjaman`
--

CREATE TABLE `t_peminjaman` (
  `id` int(10) UNSIGNED NOT NULL,
  `m_user_id` int(10) UNSIGNED DEFAULT NULL,
  `m_buku_id` int(10) UNSIGNED DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_peminjaman`
--

INSERT INTO `t_peminjaman` (`id`, `m_user_id`, `m_buku_id`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(1, 3, 1, '2022-01-26', '2022-01-27'),
(2, 3, 2, '2022-01-26', '2022-01-28'),
(3, 2, 3, '2022-01-27', '2022-01-30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `l_kritik`
--
ALTER TABLE `l_kritik`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `l_statistik`
--
ALTER TABLE `l_statistik`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `m_buku_m_kategori` (`m_kategori_id`),
  ADD KEY `judul_buku` (`judul_buku`);

--
-- Indeks untuk tabel `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `m_role`
--
ALTER TABLE `m_role`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `m_user_m_role` (`m_role_id`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `t_peminjaman`
--
ALTER TABLE `t_peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_peminjaman_m_user` (`m_user_id`),
  ADD KEY `t_peminjaman_m_buku` (`m_buku_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `l_kritik`
--
ALTER TABLE `l_kritik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `l_statistik`
--
ALTER TABLE `l_statistik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_role`
--
ALTER TABLE `m_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_peminjaman`
--
ALTER TABLE `t_peminjaman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  ADD CONSTRAINT `m_buku_m_kategori` FOREIGN KEY (`m_kategori_id`) REFERENCES `m_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `m_user`
--
ALTER TABLE `m_user`
  ADD CONSTRAINT `m_user_m_role` FOREIGN KEY (`m_role_id`) REFERENCES `m_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `t_peminjaman`
--
ALTER TABLE `t_peminjaman`
  ADD CONSTRAINT `t_peminjaman_m_buku` FOREIGN KEY (`m_buku_id`) REFERENCES `m_buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_peminjaman_m_user` FOREIGN KEY (`m_user_id`) REFERENCES `m_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

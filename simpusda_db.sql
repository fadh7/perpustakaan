-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2022 pada 15.47
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
-- Struktur dari tabel `l_berita`
--

CREATE TABLE `l_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `l_berita`
--

INSERT INTO `l_berita` (`id`, `judul`, `keterangan`, `isi`, `foto`, `tanggal`) VALUES
(1, ' Perpusnas: 40% Perpustakaan Ada di Pulau Jawa', 'Saat ini, terdapat 164.610 perpustakaan berbagai jenis. Namun, sekitar 40% berada di Pulau Jawa.', 'Jakarta, Beritasatu.com - Keberadaan perpustakaan semakin sentral di era teknologi yang kian berkembang. Apalagi, perpustakaan memainkan peran penting dalam mewujudkan sumber daya manusia (SDM) unggul, mandiri, dan berdaya saing di era global.  Deputi Bidang Pengembangan Sumber Daya Perpustakaan Perpustakaan Nasional (Perpusnas) Deni Kurniadi mengatakan, literasi sangat ampuh membantu memulihkan ekonomi dan reformasi sosial.  ', 'post-3.jpg', '2022-03-24'),
(7, 'satu', 'dimana ada', 'seekor kucing', 'post-4.jpg', '2022-04-01'),
(8, 'Perpustakaan Daerah Kota Banjarmasin', 'Rapat Kerja Terhadap Penurunan Tunjangan Gajih', 'Rapat dihadiri oleh berbagai kalangan terkhusus para karyawan yang bekerja di sini', 'post-5.jpg', '2022-03-23'),
(12, 'kita', 'bis', 'dua', 'post-3.jpg', '2022-03-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `l_kritik`
--

CREATE TABLE `l_kritik` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subjek` enum('Request Buku','Kritik dan Saran') NOT NULL,
  `isi` text NOT NULL,
  `tanggal_kritik` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `l_kritik`
--

INSERT INTO `l_kritik` (`id`, `nama`, `email`, `phone`, `subjek`, `isi`, `tanggal_kritik`) VALUES
(1, 'namadepan namabelakang', 'satu@gmail.com', '1111111111', 'Request Buku', 'satu', '2022-02-08'),
(2, 'ivano', 'ivano123@gmail.com', '081251110552', 'Kritik dan Saran', 'bgus', '2022-02-09'),
(3, 'feny', 'feny@gmail.com', '081251110552', 'Kritik dan Saran', 'jadi gimana nih pa asep', '2022-03-16'),
(4, 'rahma', 'rahma1@gmail.com', '09888137294', 'Request Buku', 'Buku nya kurang bagus', '2022-03-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `l_rating`
--

CREATE TABLE `l_rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `bintang` int(11) NOT NULL,
  `komentar` text DEFAULT NULL,
  `m_user_id` int(10) UNSIGNED DEFAULT NULL,
  `t_peminjaman_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `l_statistik`
--

CREATE TABLE `l_statistik` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `l_statistik`
--

INSERT INTO `l_statistik` (`id`, `ip`, `os`, `browser`, `tanggal`) VALUES
(1, '::1', 'Windows 10', 'Google Chrome v.99.0.4844.51', '2022-03-16 10:59:19'),
(2, '::1', 'Windows 10', 'Google Chrome v.99.0.4844.51', '2022-03-19 15:23:16'),
(3, '::1', 'Windows 10', 'Google Chrome v.99.0.4844.51', '2022-03-21 07:59:34'),
(4, '::1', 'Windows 10', 'Google Chrome v.99.0.4844.74', '2022-03-23 09:00:11'),
(5, '::1', 'Windows 10', 'Google Chrome v.99.0.4844.74', '2022-03-24 13:44:13'),
(6, '::1', 'Windows 10', 'Google Chrome v.99.0.4844.74', '2022-03-28 17:26:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `l_struktur`
--

CREATE TABLE `l_struktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `l_struktur`
--

INSERT INTO `l_struktur` (`id`, `nama`, `jabatan`, `foto`) VALUES
(1, 'Rozi', 'Ketua Umum', 'WhatsApp Image 2022-02-09 at 09.21.06.jpeg'),
(2, 'kita1', 'satu', 'member-2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `l_tentang`
--

CREATE TABLE `l_tentang` (
  `id` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `l_tentang`
--

INSERT INTO `l_tentang` (`id`, `sejarah`, `visi`, `misi`) VALUES
(1, 'Tersusunnya peraturan perundang-undangan bidang perpustakaan dan meningkatkan kualitas layanan hukum. Mewujudkan organisasi yang efektif dan efisien dengan penerapan sistem tata laksana dan tata kerja. Meningkatkan dan mengembangkan program berbasis kinerja secara terarah, terukur, dan berkelanjutan. Meningkatkan evaluasi kinerja secara komprehensif. Mewujudkan laporan secara analitis, realistis, dan tepat waktu. Meningkatkan citra Perpusnas, hubungan antar lembaga, dan layanan informasi publik. Meningkatkan kualitas penerbitan Perpusnas.Tersusunnya peraturan perundang-undangan bidang perpustakaan dan meningkatkan kualitas layanan hukum. Mewujudkan organisasi yang efektif dan efisien dengan penerapan sistem tata laksana dan tata kerja. Meningkatkan dan mengembangkan program berbasis kinerja secara terarah, terukur, dan berkelanjutan. Meningkatkan evaluasi kinerja secara komprehensif. Mewujudkan laporan secara analitis, realistis, dan tepat waktu. Meningkatkan citra Perpusnas, hubungan antar lembaga, dan layanan informasi publik. Meningkatkan kualitas penerbitan Perpusnas.Tersusunnya peraturan perundang-undangan bidang perpustakaan dan meningkatkan kualitas layanan hukum. Mewujudkan organisasi yang efektif dan efisien dengan penerapan sistem tata laksana dan tata kerja. Meningkatkan dan mengembangkan program berbasis kinerja secara terarah, terukur, dan berkelanjutan. Meningkatkan evaluasi kinerja secara komprehensif. Mewujudkan laporan secara analitis, realistis, dan tepat waktu. Meningkatkan citra Perpusnas, hubungan antar lembaga, dan layanan informasi publik. Meningkatkan kualitas penerbitan Perpusnas.Tersusunnya peraturan perundang-undangan bidang perpustakaan dan meningkatkan kualitas layanan hukum. Mewujudkan organisasi yang efektif dan efisien dengan penerapan sistem tata laksana dan tata kerja. Meningkatkan dan mengembangkan program berbasis kinerja secara terarah, terukur, dan berkelanjutan. Meningkatkan evaluasi kinerja secara komprehensif. Mewujudkan laporan secara analitis, realistis, dan tepat waktu. Meningkatkan citra Perpusnas, hubungan antar lembaga, dan layanan informasi publik. Meningkatkan kualitas penerbitan Perpusnas.', 'Tersusunnya peraturan perundang-undangan bidang perpustakaan dan meningkatkan kualitas layanan hukum. Mewujudkan organisasi yang efektif dan efisien dengan penerapan sistem tata laksana dan tata kerja. Meningkatkan dan mengembangkan program berbasis kinerja secara terarah, terukur, dan berkelanjutan. Meningkatkan evaluasi kinerja secara komprehensif. Mewujudkan laporan secara analitis, realistis, dan tepat waktu. Meningkatkan citra Perpusnas, hubungan antar lembaga, dan layanan informasi publik. Meningkatkan kualitas penerbitan Perpusnas.', '1. Tersusunnya peraturan perundang-undangan bidang perpustakaan dan meningkatkan kualitas layanan hukum.<br> 2.Mewujudkan organisasi yang efektif dan efisien dengan penerapan sistem tata laksana dan tata kerja.<br> 3. Meningkatkan dan mengembangkan program berbasis kinerja secara terarah, terukur, dan berkelanjutan.<br> 4. Meningkatkan evaluasi kinerja secara komprehensif.<br> 5. Mewujudkan laporan secara analitis, realistis, dan tepat waktu.<br> 6. Meningkatkan citra Perpusnas, hubungan antar lembaga, dan layanan informasi publik.<br> 7. Meningkatkan kualitas penerbitan Perpusnas.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_buku`
--

CREATE TABLE `m_buku` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `cover_belakang` varchar(255) NOT NULL,
  `cover_lainnya` varchar(255) NOT NULL,
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
  `harga` int(11) DEFAULT NULL,
  `l_rating_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_buku`
--

INSERT INTO `m_buku` (`id`, `foto`, `cover_belakang`, `cover_lainnya`, `judul_buku`, `sinopsis`, `m_kategori_id`, `pengarang`, `jumlah_buku`, `nama_penerbit`, `isbn`, `lokasi`, `tahun`, `tanggal_masuk`, `sumber`, `harga`, `l_rating_id`) VALUES
(1, '08.jpg', '09.jpg', '01.jpg', 'Penulisan Karya Tulis Ilmiah bagi Pamong Belajar Bersama', 'Penulisan Karya Tulis Ilmiah bagi Pamong Belajar', 3, 'Andrea Hirarta', 11, 'Bersama', 'Feny123', 'Banjarmasin', 2021, '2022-03-23', 'Hibah', 200000, NULL),
(2, '01.jpg', '02.jpg', '03.jpg', 'Laskar Pelangi', 'Novel ini menceritakan tentang sepuluh anak Belitung yang tergabung dalam Laskar Pelangi. Mereka adalah Ikal, Mahar, Lintang, Harun, Syahdan, A Kiong, Borek, Trapani, Kucai, dan satu-satunya perempuan yaitu Sahara.', 1, 'Andrea Hirata', 6, 'tujuh', '8', 'sembilang', 10, '2022-02-11', 'Hibah', 200000, NULL),
(3, '01.jpg', '04.jpg', '06.jpg', 'Sang Pemimpi', 'Sang Pemimpi merupakan sebuah novel buah karya dari penulis Andrea Hirata. Novel Sang Pemimpi sangat kental dengan nuansa semangat juang untuk menggapai cita-cita. Perjuangan yang tidak pernah padam untuk sebuah impian berada di Kota Sorbonne, Prancis.', 2, 'Donny Dhirgantoro', 1, 'PT. Pala Alta Utama', '1204143-1341341', 'bjm', 2011, '2022-02-22', 'Hibah', 200000, NULL),
(4, '04.jpg', '', '0', '5 CM', 'Mereka adalah sahabat yang kompak, mereka selalu pergi bersama-sama. Sampai pada akhirnya Genta mengusulkan untuk tidak bertemu dan berkomunikasi selama 3 bulan.  Dalam kurun waktu 3 bulan, mereka ditempa dengan hal-hal yang baru. Pada waktu itulah yang membuat hati mereka lebih kaya dari pada sebelumnya. Pertemuan setelah 3 bulan yang penuh dengan rasa ke rinduan akhirnya terjadi dan dirayakan dengan sebuah petualangan.', 10, 'sahabat', 12, 'lagi', '8881s', 'Banjarmasin', 2021, '2022-02-23', 'Hibah', 200000, NULL),
(5, '05.jpg', '', '0', 'Perahu Kertas', 'Perahu kertas merupakan sebuah novel karya Dewi Lestari. Novel ini merupakan karya penulis yang ke-6. Novel ini bertemakan persahabatan dan percintaan kehidupan seorang remaja modern.  Novel Perahu Kertas menceritakan tentang seorang remaja yang bernama Keenan yang baru saja lulus dari SMA di Amsterdam dan terpaksa pulang ke Indonesia untuk kuliah di Bandung.', 3, 'Dewi Lestari', 2, 'sd', 'cqe31', 'sffq', 2000, '2022-02-23', 'Hibah', 150000, NULL),
(6, '06.jpg', '', '0', 'Surat Kecil Untuk Tuhan', 'Novel surat kecil untuk Tuhan menceritakan tentang perjuangan seorang gadis remaja dalam melawan penyakit kanker yang sangat ganas, yaitu Rabdomiosarkoma (Kanker Jaringan Lunak).  Dialah Gita Sessa Wanda Cantika, kita mengenalnya sebagai mantan artis cilik pada era 1998. Gadis kecil ini adalah tokoh utama dalam Novel Surat Kecil Untuk Tuhan yang di vonis menderita penyakit kanker ganas.', 3, 'Agnes Danovar', 12, 'wdw', '21gwd', 'fqef', 2001, '2022-02-23', 'Hibah', 200000, NULL),
(7, '07.jpg', '', '0', 'Negeri 5 Menara', 'Novel Negeri 5 Menara menceritakan tentang seorang pemuda yang bernama Alif yang lahir di pinggir Danau Maninjau. Alif merupakan seorang anak desa yang cerdas. Ia dan teman baiknya, Randaim mempunyai mimpi dan cita-cita yang sama.  Masuk ke SMA dan melanjutkan studi di ITB. Selama mereka bersekolah di madrasah, mereka selalu merasa cukup menerima ajaran Agama Islam dan ingin menikmati masa remajanya.', 3, ' Ahmad Fuadi', 22, 'ww', 'ww22', 'dffgw', 2011, '2022-02-23', 'Hibah', 200000, NULL),
(8, '08.jpg', '', '0', 'Ayat-Ayat Cinta', 'Novel ayat-ayat cinta ini menceritakan kisah seorang anak muda dari Indonesia yang bernama Fahri Abdullah Sidiq. Setelah selesai dari Aliyah, Fahri melanjutkan studinya di Cairo Mesir di Universitas Al-Azhar.  Di Cairo Fahri mempunyai teman satu kost yaitu Misbah, Syaiful, Rudi, dan Hamdi. Fahri mendapat gambar gembira dari salah seorang temannya. Kalau dia lulus dan telah bisa membuat sebuah tesis.', 3, 'Habiburrahman El Shizary', 2, 'PT. Pala Alta Utama', '602178985-7', 'delapan', 2002, '2022-02-16', 'Hibah', 150000, NULL),
(9, '09.jpg', '', '0', 'Dilan 1990', 'Novel Dilan 1990 menceritakan kisah tentang kisah kasih remaja sekolah tahun 90an. Dalam novel ini, tokoh Dilan adalah seorang anak SMA tahun 90an yang unik dan serampangan. Dilan juga menjadi anggota salah satu geng motor yang suka tawuran dengan geng dari sekolah lain. Dilan punya prinsip untuk tidak melakukan appaun yang dia anggap benar. Meskipun terbilang serampangan, Dilan selalu menjadi peringkat pertama di kelas.', 5, 'Pidi Baiq', 200, 'jfnsdlq', 'dfndfnq', 'gdnk', 2000, '2022-02-23', 'Hibah', 150000, NULL),
(10, '01.jpg', '', '0', 'satu', 'dua', 1, 'tiga', 4, 'lima', '6', 'tujuh', 8, '2022-03-01', 'Pembelian', 200000, NULL),
(14, '04.jpg', '05.jpg', '06.jpg', 'satu', 'dua', 3, 'tiga', 4, 'lima', 'enam', 'tujuh', 2009, '2022-03-24', 'Pembelian', 200, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_kategori`
--

CREATE TABLE `m_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_kategori`
--

INSERT INTO `m_kategori` (`id`, `nama_kategori`, `foto`) VALUES
(1, 'Bahasa', '01.jpg'),
(2, 'Seni', '02.jpg'),
(3, 'FIlsafat', '03.jpg'),
(4, 'Agama', '04.jpg'),
(5, 'Umum', '05.jpg'),
(6, 'Pobia', '06.jpg'),
(7, 'ekonomi', '02.jpg'),
(8, 'Kesenian', '01.jpg'),
(10, 'fiksi', '02.jpg');

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
  `nama_depan` varchar(25) NOT NULL,
  `nama_belakang` varchar(25) NOT NULL,
  `m_role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_user`
--

INSERT INTO `m_user` (`id`, `username`, `password`, `nama_depan`, `nama_belakang`, `m_role_id`) VALUES
(1, 'user', 'user', 'Muhammad', 'Fadhillah', 2),
(2, 'admin', 'admin123', 'ro', 'zi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_galeri`
--

CREATE TABLE `t_galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_galeri`
--

INSERT INTO `t_galeri` (`id`, `foto`, `deskripsi`, `tanggal`) VALUES
(1, '01.jpg', 'satu dua', '2022-03-22'),
(2, '01.jpg', 'Dua', '2022-03-23'),
(3, 'gallery-1.jpg', 'kita', '2022-03-24'),
(4, '01.jpg', 'astu', '2022-03-24'),
(5, '01.jpg', 's', '2022-03-24'),
(6, '01.jpg', 'a', '2022-03-24'),
(7, 'gallery-1.jpg', ',', '2022-03-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_peminjaman`
--

CREATE TABLE `t_peminjaman` (
  `id` int(10) UNSIGNED NOT NULL,
  `m_user_id` int(10) UNSIGNED NOT NULL,
  `m_buku_id` int(10) UNSIGNED NOT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `tempat_pengantaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_peminjaman`
--

INSERT INTO `t_peminjaman` (`id`, `m_user_id`, `m_buku_id`, `tanggal_pinjam`, `tanggal_kembali`, `tempat_pengantaran`) VALUES
(3, 2, 3, '2022-01-27', '2022-01-30', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `l_berita`
--
ALTER TABLE `l_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `l_kritik`
--
ALTER TABLE `l_kritik`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `l_rating`
--
ALTER TABLE `l_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `l_rating_m_user` (`m_user_id`),
  ADD KEY `l_rating_t_peminjaman` (`t_peminjaman_id`);

--
-- Indeks untuk tabel `l_statistik`
--
ALTER TABLE `l_statistik`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `l_struktur`
--
ALTER TABLE `l_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `l_tentang`
--
ALTER TABLE `l_tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `m_buku_m_kategori` (`m_kategori_id`),
  ADD KEY `judul_buku` (`judul_buku`),
  ADD KEY `m_buku_l_rating` (`l_rating_id`);

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
-- Indeks untuk tabel `t_galeri`
--
ALTER TABLE `t_galeri`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `l_berita`
--
ALTER TABLE `l_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `l_kritik`
--
ALTER TABLE `l_kritik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `l_rating`
--
ALTER TABLE `l_rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `l_statistik`
--
ALTER TABLE `l_statistik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `l_struktur`
--
ALTER TABLE `l_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `l_tentang`
--
ALTER TABLE `l_tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `m_role`
--
ALTER TABLE `m_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `t_galeri`
--
ALTER TABLE `t_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `t_peminjaman`
--
ALTER TABLE `t_peminjaman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `l_rating`
--
ALTER TABLE `l_rating`
  ADD CONSTRAINT `l_rating_m_user` FOREIGN KEY (`m_user_id`) REFERENCES `m_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `l_rating_t_peminjaman` FOREIGN KEY (`t_peminjaman_id`) REFERENCES `t_peminjaman` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  ADD CONSTRAINT `m_buku_l_rating` FOREIGN KEY (`l_rating_id`) REFERENCES `l_rating` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 03:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bea_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nip` bigint(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nip`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(5, 12345678, 'Adee', 'ade@mail.co', '$2y$10$QfVLKF.tMBw7Cxp7dhHDHeFO8BAqMSeMoPqhTITCm9BGFrBwwcRVy', '2022-10-25 08:26:51', '2022-10-25 08:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `nama`, `id_user`, `kategori`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(52, 'Berita', 0, 'berkah', 'app/image/berita/52-1666769413-sBVzD.png', 'wewewwew', '2022-10-25 23:55:52', '2022-11-08 19:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) DEFAULT NULL,
  `jawaban` text DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `pertanyaan`, `jawaban`, `kategori`, `created_at`, `updated_at`) VALUES
(5, 'Kok bumi ada?', 'yo nda tau kok tanya saya', 'Penasaran', '2022-10-27 01:26:53', '2022-10-27 01:26:53'),
(6, 'kenapa ujan turun nya air?', 'Mulanya, air menguap dari Bumi diserap oleh awan. Ketika menguap naik dari permukaan bumi ke atmosfer, air berubah dalam bentuk gas, dan kemudian berubah menjadi awan ketika mendingin dan mengembun. Di atmosfer, tetesan hujan mulai terbentuk dalam struktur berbentuk bola karena tegangan permukaan air.', 'pengiriman', '2022-10-27 01:31:11', '2022-10-27 01:31:11'),
(7, 'Kenapa bumi bulat?', 'Mulanya, air menguap dari Bumi diserap oleh awan. Ketika menguap naik dari permukaan bumi ke atmosfer, air berubah dalam bentuk gas, dan kemudian berubah menjadi awan ketika mendingin dan mengembun. Di atmosfer, tetesan hujan mulai terbentuk dalam struktur berbentuk bola karena tegangan permukaan air.', 'bencana', '2022-10-27 01:32:41', '2022-10-27 01:32:41');

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id`, `id_user`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(45, NULL, 'app/image/iklan/-1667377324-JvT4Z.png', 'Iklan bukan sembarang iklann', '2022-11-02 01:22:05', '2022-11-02 01:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `janji`
--

CREATE TABLE `janji` (
  `id` int(11) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `janji`
--

INSERT INTO `janji` (`id`, `link`, `gambar`, `created_at`, `updated_at`) VALUES
(7, 'https://drive.google.com/drive/folders/1NwBLCd4JQS3a5i8srPGNqT5EnKHI7SYG', 'app/image/janji/7-1667669682-tUCsE.png', '2022-11-05 10:34:42', '2022-11-05 10:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `komposisi`
--

CREATE TABLE `komposisi` (
  `id` int(11) NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komposisi`
--

INSERT INTO `komposisi` (`id`, `level`, `nama`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'jabatan', 'Eselon III', 1, '2022-11-08 03:05:35', '2022-11-08 03:05:35'),
(2, 'jabatan', 'Eselon IV', 4, '2022-11-08 03:06:04', '2022-11-08 03:06:04'),
(3, 'usia', 's.d 30 tahun', 21, '2022-11-08 03:12:54', '2022-11-08 03:12:54'),
(4, 'jabatan', 'PBC Pertama', 6, '2022-11-08 03:13:25', '2022-11-08 03:13:25'),
(5, 'jabatan', 'PBC Terampil', 2, '2022-11-08 03:14:02', '2022-11-08 03:14:02'),
(6, 'jabatan', 'Pelaksana Pemeriksa', 32, '2022-11-08 03:14:22', '2022-11-08 03:14:22'),
(7, 'usia', '31 s.d 40 tahun', 11, '2022-11-08 03:14:53', '2022-11-08 03:14:53'),
(8, 'usia', '41 s.d 50 tahun', 13, '2022-11-08 03:15:20', '2022-11-08 03:15:20'),
(9, 'usia', 'di atas 50 tahun', 0, '2022-11-08 03:15:58', '2022-11-08 03:15:58'),
(10, 'jenis_kelamin', 'Laki-laki', 39, '2022-11-08 03:16:51', '2022-11-08 03:16:51'),
(11, 'jenis_kelamin', 'Perempuan', 6, '2022-11-08 03:17:09', '2022-11-08 03:17:09'),
(12, 'pendidikan', 'SMA-D I', 26, '2022-11-08 03:17:40', '2022-11-08 03:17:40'),
(13, 'pendidikan', 'D III', 9, '2022-11-08 03:18:11', '2022-11-08 03:18:11'),
(14, 'pendidikan', 'DIV-S I', 7, '2022-11-08 03:18:30', '2022-11-08 03:18:30'),
(15, 'pendidikan', 'S II', 4, '2022-11-08 03:18:50', '2022-11-08 03:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `maklumat`
--

CREATE TABLE `maklumat` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maklumat`
--

INSERT INTO `maklumat` (`id`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(5, 'maklumat profil', 'app/image/maklumat/-1667273573-RTwTN.png', '2022-10-31 20:32:53', '2022-10-31 20:32:53'),
(6, 'maklumat 2', 'app/image/maklumat/-1667375875-mARsi.jpg', '2022-11-02 00:57:56', '2022-11-02 00:57:56'),
(7, 'black box', 'app/image/maklumat/-1667545029-7gAQ8.jpg', '2022-11-03 23:57:10', '2022-11-03 23:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `id_user`, `link`, `created_at`, `updated_at`) VALUES
(7, NULL, 'https://www.youtube.com/embed/Y8HeOA95UzQ', '2022-11-04 02:49:49', '2022-11-04 02:49:49'),
(8, NULL, 'https://www.youtube.com/embed/3HuyRf6tV4E', '2022-11-04 04:06:38', '2022-11-04 04:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `sop`
--

CREATE TABLE `sop` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sop`
--

INSERT INTO `sop` (`id`, `id_user`, `link`, `created_at`, `updated_at`) VALUES
(2, NULL, 'https://drive.google.com/drive/folders/1NwBLCd4JQS3a5i8srPGNqT5EnKHI7SYGew', '2022-10-27 05:31:17', '2022-10-27 23:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Tahun 2020', 'app/image/struktur/1-1667384135-JcR6G.jpg', '2022-11-02 03:13:44', '2022-11-02 03:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nip`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(37, 'Arii', 28361312, 'ade@mail.co', '$2y$10$pndsm9QZQPAY5oQiHd5b0ORKrdqad79Sqmr4VQscPZdG12lA2d8FW', NULL, '2022-10-30 19:36:26', '2022-10-30 19:36:26'),
(38, 'Dani', 123344343434, 'Dani@mail.co', '$2y$10$R5Ef79l6YBR.lwGMT/GRdepEVG4FImVy4yk7JzzM0DO.Fx7BRMFJ2', NULL, '2022-11-07 22:45:35', '2022-11-07 22:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `id_user`, `link`, `created_at`, `updated_at`) VALUES
(4, NULL, 'https://www.youtube.com/embed/71Gt46aX9Z4', '2022-11-04 04:16:05', '2022-11-04 04:16:05'),
(5, NULL, 'https://www.youtube.com/embed/NyMOOQM9ukY', '2022-11-04 04:16:36', '2022-11-04 04:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` int(11) NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `level`, `deskripsi`, `created_at`, `updated_at`) VALUES
(11, 'Visi', 'Menjadi Institusi Kepabeanan dan Cukai Terkemuka di Dunia.\r\nVisi DJBC mencerminkan cita-cita tertinggi DJBC dengan lebih baik melalui penetapan target yang menantang dan secara terus-menerus terpelihara di masa depan.', '2022-11-08 03:35:26', '2022-11-08 03:35:26'),
(12, 'Misi', 'Kami memfasilitasi perdagangan dan industri;\r\nKami menjaga perbatasan dan melindungi masyarakat Indonesia dari penyelundupan dan perdagangan illegal; \r\ndan Kami optimalkan penerimaan negara di sektor kepabeanan dan cukai.\r\nMisi ini merupakan langkah spesifik yang harus dikerjakan DJBC demi tercapainya visi DJBC. \r\nPeran serta secara keseluruhan terkait dengan besaran perdagangan, keamanan dan penerimaan merupakan satu kesatuan yang tidak terpisahkan.', '2022-11-08 03:36:00', '2022-11-08 03:36:00'),
(15, 'Motto', 'Sinergi dalam mengawasi, Melayani Sepenuh Hati.', '2022-11-08 03:38:36', '2022-11-08 03:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 'You Are The Apple In My Eyess', 'app/image/wilayah/4-1667455582-Qqwto.jpg', '2022-11-01 23:42:44', '2022-11-02 23:06:34'),
(5, 'One Piece', 'app/image/wilayah/5-1667373622-d9M9f.jpg', '2022-11-01 23:43:06', '2022-11-02 00:20:22'),
(6, 'Violet Evergarden', 'app/image/wilayah/6-1667373438-hiWD0.jpg', '2022-11-01 23:43:26', '2022-11-02 00:17:18'),
(7, 'Yoo Waiii Moo', 'app/image/wilayah/7-1667373488-jJhPF.png', '2022-11-01 23:45:46', '2022-11-02 00:18:09'),
(8, 'Sunny Goo', 'app/image/wilayah/8-1667373585-HrAUZ.jpg', '2022-11-01 23:46:00', '2022-11-02 00:19:45'),
(9, 'Nazunaa', 'app/image/wilayah/9-1667373546-fD1Ul.png', '2022-11-01 23:46:25', '2022-11-02 00:19:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `janji`
--
ALTER TABLE `janji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komposisi`
--
ALTER TABLE `komposisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maklumat`
--
ALTER TABLE `maklumat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `janji`
--
ALTER TABLE `janji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komposisi`
--
ALTER TABLE `komposisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `maklumat`
--
ALTER TABLE `maklumat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sop`
--
ALTER TABLE `sop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2025 at 04:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_hishammahdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default.jpg',
  `jabatan_singkat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Cth: Web Developer, Mahasiswa',
  `ringkasan_profil` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Link ke profil LinkedIn',
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Link ke profil GitHub',
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Link ke profil Instagram'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_lengkap`, `foto`, `jabatan_singkat`, `ringkasan_profil`, `email`, `no_hp`, `alamat`, `linkedin`, `github`, `instagram`) VALUES
(1, 'Hisham Mahdi', 'hisham.jpg', 'Mahasiswa Teknik Informatika, Web Developer, Pecinta Teknologi', 'Saya adalah seorang mahasiswa Teknik Informatika yang bersemangat dalam pengembangan web dan teknologi. Saya memiliki pengalaman membangun aplikasi web menggunakan CodeIgniter 4 dan Bootstrap 5. Saya selalu antusias untuk belajar hal baru dan berkontribusi dalam proyek yang menantang.', 'hishammahdi77@email.com', '085161619122', 'Sukabumi, Indonesia', 'https://www.linkedin.com/in/hisham-mahdi-52a177294?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app', 'https://github.com/Hisham190', 'https://www.instagram.com/hiiisham.m?igsh=MWxwMjA5cTV4eXNwbw==');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int NOT NULL,
  `id_biodata` int NOT NULL,
  `nama_keahlian` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int NOT NULL COMMENT 'Persentase 1-100'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id`, `id_biodata`, `nama_keahlian`, `level`) VALUES
(1, 1, 'CodeIgniter 4', 85),
(2, 1, 'PHP', 90),
(3, 1, 'MySQL / MariaDB', 80),
(4, 1, 'Bootstrap 5', 95),
(5, 1, 'JavaScript (Dasar)', 70),
(6, 1, 'HTML5 & CSS3', 95),
(7, 1, 'Figma (UI/UX)', 65),
(8, 1, 'Manajemen Proyek', 75);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int NOT NULL,
  `id_biodata` int NOT NULL,
  `nama_institusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Cth: S1, D3, SMK',
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_mulai` year NOT NULL,
  `tahun_selesai` year DEFAULT NULL COMMENT 'Bisa NULL jika masih kuliah',
  `deskripsi` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `id_biodata`, `nama_institusi`, `jenjang`, `jurusan`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 1, 'Universitas Muhammadiyah Sukabumi', 'S1', 'Teknik Informatika', '2023', NULL, 'Saat ini sedang menempuh semester 5 dengan pembelajaran sebanyak 20 sks.'),
(2, 1, 'SMAN 1 Cibadak', 'SMA', 'IPS', '2020', '2023', 'Lulus dengan landasan pengetahuan umum di berbagai bidang seperti ekonomi, geografi, sosiologi, dan sejarah.');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `id_biodata` int NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` enum('Organisasi','Magang','Proyek','Pekerjaan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_mulai` year NOT NULL,
  `tahun_selesai` year DEFAULT NULL COMMENT 'Bisa NULL jika masih berjalan',
  `deskripsi` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `id_biodata`, `posisi`, `nama_perusahaan`, `tipe`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 1, 'Ketua Divisi Pengembangan Web', 'Himpunan Mahasiswa Informatika', 'Organisasi', '2024', NULL, 'Bertanggung jawab memimpin tim untuk mengembangkan dan memelihara situs web resmi himpunan.'),
(2, 1, 'Web Developer Intern', 'PT. Teknologi Maju', 'Magang', '2024', '2024', 'Terlibat dalam pengembangan sistem manajemen inventaris perusahaan menggunakan framework Laravel dan React.'),
(3, 1, 'Koordinator Acara', 'Seminar Nasional IT 2023', 'Proyek', '2023', '2023', 'Mengelola dan mengkoordinasikan seluruh rangkaian acara seminar nasional.');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int NOT NULL,
  `id_biodata` int NOT NULL,
  `nama_proyek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_proyek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_proyek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'default_project.jpg',
  `deskripsi` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `id_biodata`, `nama_proyek`, `link_proyek`, `gambar_proyek`, `deskripsi`) VALUES
(1, 1, 'Aplikasi \"DompetKu\"', 'https://github.com/hishammahdi/dompetku', 'dompetku.jpg', 'Aplikasi mobile expense tracker berbasis React Native (Proyek UTS Pemrograman Mobile).'),
(2, 1, 'Sistem Informasi Himpunan', 'https://github.com/hishammahdi/web-hima', 'web-hima.jpg', 'Website resmi Himpunan Mahasiswa Informatika dibuat dengan CodeIgniter 4.'),
(3, 1, 'Desain UI Aplikasi Kuliner', 'https://www.figma.com/url-desain-anda', 'ui-kuliner.jpg', 'Desain prototipe UI/UX untuk aplikasi pencarian kuliner.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_biodata` (`id_biodata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD CONSTRAINT `keahlian_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `pengalaman_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD CONSTRAINT `portofolio_ibfk_1` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

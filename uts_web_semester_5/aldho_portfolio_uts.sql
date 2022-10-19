-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 06:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aldho_portfolio_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `judul_about` varchar(20) NOT NULL,
  `deskripsi_about` text NOT NULL,
  `cv_about` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `judul_about`, `deskripsi_about`, `cv_about`) VALUES
(1, 'Information About Me', '<p>Perkenalkan nama Saya Aldho Sukadi. Saya merupakan seorang Web Developer yang sudah berpengalaman dibidang ini selama 6 Tahun. </p>\r\n\r\n<p>Saat ini saya sedang berkuliah di Universitas Pembangunan Jaya di Fakultas Teknologi & Design dengan Jurusan Informatika, mengambil Strata 1.  Di Samping merupakan beberapa testimoni dari jasa Saya.</p>', 'CV_Aldho_Sukadi.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id_card` int(11) NOT NULL,
  `angka_card` int(3) NOT NULL,
  `isi_card` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id_card`, `angka_card`, `isi_card`) VALUES
(1, 6, 'Tahun Pengalaman'),
(2, 15, 'Project Terselesaikan'),
(3, 9, 'Website Perusahaan'),
(4, 5, 'Aplikasi POS');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id_contact_form` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id_contact_form`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'Aldho Sukadi', 'aldho.sukadi@student.upj.ac.id', 'hai saya HRD perusahaan', 'ini adalah pesan');

-- --------------------------------------------------------

--
-- Table structure for table `contact_page`
--

CREATE TABLE `contact_page` (
  `id_contact_page` int(11) NOT NULL,
  `judul_contact` varchar(20) NOT NULL,
  `sub_contact` text NOT NULL,
  `lokasi` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `pendidikan` varchar(40) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `bahasa` varchar(40) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `github` text NOT NULL,
  `youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_page`
--

INSERT INTO `contact_page` (`id_contact_page`, `judul_contact`, `sub_contact`, `lokasi`, `email`, `pendidikan`, `telp`, `bahasa`, `facebook`, `instagram`, `github`, `youtube`) VALUES
(1, 'Informasi Kontak', 'Anda dapat menghubungi saya melalui kontak form yang tertera dibawah ini.', 'Pamulang, Tangerang Selatan.', 'aldhosukadi@gmail.com', 'Universitas Pembangunan Jaya', '089656943652', 'Indonesia, English', 'facebook.com/profile.php?id=100008394519605', 'instagram.com/aldhosukadi', 'github.com/aldhos29/pemrograman_web', 'youtube.com/c/AldhoSukadi');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id_home` int(11) NOT NULL,
  `gambar_home` varchar(30) NOT NULL,
  `judul_home` varchar(50) NOT NULL,
  `deskripsi_home` text NOT NULL,
  `cv_home` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id_home`, `gambar_home`, `judul_home`, `deskripsi_home`, `cv_home`) VALUES
(1, 'hero.png', 'Trust Me, <span>Aldho</span> Is a Web Developer.', 'Hi, Nama Saya Aldho Sukadi. Saya merupakan Seorang Web Developer yang sudah berpengalaman dibidang tersebut selama hampir 6 Tahun.', 'CV_Aldho_Sukadi.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `gambar_portfolio` varchar(20) NOT NULL,
  `url_website` text NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `gambar_portfolio`, `url_website`, `nama_perusahaan`) VALUES
(1, 'haichen.jpg', 'haichentalcpowder.co.id', 'Haichen Talc Powder'),
(2, 'tgb.jpg', 'titikgarisbidang.com/prototype', 'Titik Garis Bidang'),
(3, 'ninja.jpg', 'ninjalaundry.ga', 'Ninja Laundry'),
(4, 'smk.jpg', 'sinarmultikemindo.com', 'Sinar Multi Kemindo'),
(5, 'kobayashi.jpg', 'kobayashi-id.com', 'Kobayashi ID'),
(6, 'kaolin.jpg', 'kaolinindonesia.co.id ', 'Kaolin Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id_skill` int(11) NOT NULL,
  `nama_skill` varchar(20) NOT NULL,
  `progress_persen` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id_skill`, `nama_skill`, `progress_persen`) VALUES
(1, 'html5', 95),
(2, 'css3, Bootstrap', 85),
(3, 'ReactJS', 70),
(4, 'python', 80),
(5, 'php, codeigniter', 95),
(6, 'javascript', 75);

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id_timeline` int(11) NOT NULL,
  `tahun_timeline` varchar(15) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `nama_company` varchar(40) NOT NULL,
  `deskripsi_timeline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id_timeline`, `tahun_timeline`, `jabatan`, `nama_company`, `deskripsi_timeline`) VALUES
(1, '2017 - 2018', 'Software Engineer', 'PT. Tamrin Garmen Indo', 'Di Perusahaan ini saya bekerja sebagai programmer untuk memaintenance Website Perusahaan.'),
(2, '2018 - 2019', 'Freelancer', 'DRIACOMM', 'Saat di DRIACOMM saya bekerja sebagai freelancer untuk membuat design dan website menggunakan HTML, CSS, PHP, WORDPRESS dan beberapa framework lainnya.'),
(3, '2017 - 2020', 'Rekayasa Perangkat Lunak', 'SMK Al-Amanah', 'Saya bersekolah di SMK AL-Amanah mengambil jurusan Rekayasa Perangkat Lunak Selama 3 Tahun.'),
(4, '2020 - Present', 'Informatics', 'Universitas Pembangunan Jaya', 'Saat ini saya sedang berkuliah di Universitas Pembangunan jaya mengambil Program Studi Informatika.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id_card`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id_contact_form`);

--
-- Indexes for table `contact_page`
--
ALTER TABLE `contact_page`
  ADD PRIMARY KEY (`id_contact_page`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id_timeline`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id_contact_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_page`
--
ALTER TABLE `contact_page`
  MODIFY `id_contact_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id_timeline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2017 at 03:15 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `achievement_id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`achievement_id`, `title`, `description`, `photo`) VALUES
(3, 'Juara 1 Anugerah Surya 2016', 'Untuk kategori Produk Inovasi/ alat peraga / Media pembelajaran, SMK Guna Dharma Nusantara berhasil meraih Anugerah tersebut. Dengan bangga SMK Guna Dharma Nusantara saat ini menjadi salah satu sekolah menengah kejuruan yang layak diperhitungkan di Kabupaten Bandung Timur.', 'Lomba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(3, 'Saeful Rahman', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(4, 'asdadasd', 'd12e123132131', '24a805e9353710e4c450ac8c36c792053801bbff');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(55) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `telp`, `message`, `date`) VALUES
(5, 'sdas', 'saeful13.id@gmail.com', 's0232', '2e', '2017-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_kegiatan`, `foto`) VALUES
(67, 7, 'Kunjungan 1.jpg'),
(66, 6, 'Kelulusan 9.jpg'),
(65, 6, 'Kelulusan 8.jpg'),
(64, 6, 'Kelulusan 7.jpg'),
(63, 6, 'Kelulusan 6.jpg'),
(62, 6, 'Kelulusan 5.jpg'),
(60, 6, 'Kelulusan 3.jpg'),
(59, 6, 'Kelulusan 2.jpg'),
(58, 6, 'Kelulusan 1.jpg'),
(61, 6, 'Kelulusan 4.jpg'),
(71, 7, 'Kunjungan 5.jpg'),
(70, 7, 'Kunjungan 4.jpg'),
(69, 7, 'Kunjungan 3.jpg'),
(68, 7, 'Kunjungan 2.jpg'),
(57, 5, 'bakti sosial 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kabar_terkini`
--

CREATE TABLE `kabar_terkini` (
  `id_kabar` int(11) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(150) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabar_terkini`
--

INSERT INTO `kabar_terkini` (`id_kabar`, `judul`, `keterangan`, `foto`, `tanggal`) VALUES
(5, 'SMK Guna Dharma Nusantara Berhasil meraih Juara 1 Anugerah Surya 2016', 'Kamis, 8 September 2016 adalah pelaksanaan Anugerah Surya 2016. ada beberapa agenda dalam acara tersebut, diantaranya Seminar Internasional serta pengumuman Anugerah Surya 2016 kepada para siswa guru berprestasi dalam menciptakan karya inovasi, diantaranya :\r\n\r\n1. Membuat Essay tentang \"Guru\"\r\n\r\n2. Membuat Produk Inovasi/ alat peraga / Media pembelajaran\r\n\r\nUntuk kategori Produk Inovasi/ alat peraga / Media pembelajaran, SMK Guna Dharma Nusantara berhasil meraih Anugerah tersebut. Dengan bangga SMK Guna Dharma Nusantara saat ini menjadi salah satu sekolah menengah kejuruan yang layak diperhitungkan di Kabupaten Bandung Timur.\r\n\r\nBerbagai prestasi yang telah diraih mengantarkan sekolah ini menjadi salah satu sekolah rujukan.', 'Lomba.jpg', '2017-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `tanggal` smallint(6) NOT NULL,
  `bulan` varchar(12) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jam` varchar(25) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `tempat` varchar(90) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `tanggal`, `bulan`, `tahun`, `jam`, `judul`, `tempat`) VALUES
(7, 10, '01', 2017, '07.00 - Selesai', 'Kunjungan Iindustri Jurusan Farmasi 2017', 'Kampoeng Djamu Martha Tilaar '),
(5, 13, '06', 2017, '15.00 - 18.00 WIB', 'Bakti Sosial Paskibra Guna Dharma Nusantara', 'Panti Asuhan Aisyiah'),
(6, 13, '05', 2017, '07.00 - Selesai', 'Kelulusan SMK Guna Dharma Nusantara 2017', 'SMK Guna Dharma Nusantara');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `judul` varchar(90) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `judul`, `keterangan`, `foto`, `tanggal`) VALUES
(1, 'Staff dan Guru SMK Guna Dharma Nusantara', 'Foto bersama staff dan guru SMK Guna Dharma Nusantara', '5.jpg', '2017-07-01'),
(4, 'Graduation Day', 'Graduation Day SMK Guna Dharma Nusantara 2017', '4.jpg', '2017-07-01'),
(3, 'Tim Basket', 'Tim basket SMK Guna Dharma Nusantara', '3.jpg', '2017-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(150) NOT NULL,
  `status` varchar(15) NOT NULL,
  `anak` int(11) NOT NULL,
  `jabatan` varchar(400) NOT NULL,
  `foto` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `pendidikan`, `status`, `anak`, `jabatan`, `foto`) VALUES
(2, 'Saeful  Rahman', 'Garut', '13 Desember 1995', 'Garut', 'S1', 'Pegawai', 0, 'Guru', 'photo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`achievement_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `kabar_terkini`
--
ALTER TABLE `kabar_terkini`
  ADD PRIMARY KEY (`id_kabar`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `kabar_terkini`
--
ALTER TABLE `kabar_terkini`
  MODIFY `id_kabar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

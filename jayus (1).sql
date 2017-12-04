-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Des 2017 pada 13.18
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jayus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(40) NOT NULL,
  `password_admin` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(1, 'fajri', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `judul_iklan` varchar(50) NOT NULL,
  `detail_iklan` varchar(200) NOT NULL,
  `no_hp_iklan` varchar(12) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `harga` int(12) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Not Verified',
  `img1` varchar(30) NOT NULL,
  `img2` varchar(30) NOT NULL,
  `img3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `id_member`, `judul_iklan`, `detail_iklan`, `no_hp_iklan`, `kategori`, `harga`, `status`, `img1`, `img2`, `img3`) VALUES
(1, 1, 'Ayam Broiler', 'Ayam broiler biasa untuk KFC dan MCD', '08976745445', 'Ayam', 20000, 'verified', 'images/IMG1-1.jpg', 'images/IMG1-2.jpg', 'images/IMG1-3.jpg'),
(2, 5, '   Ayam Kalkun Bronze', 'Terkenal sebagai Ayam Kalkun konsumsi', '08976745445', 'Ayam', 100000, 'Verified', 'images/IMG2-1.jpg', 'images/IMG2-2.jpg', 'images/IMG2-3.jpg'),
(3, 5, 'Ayam Bekisar', 'Ayam yang satu ini merupakan jenis unggas persilangan antara ayam hutan jantan hijau dengan ayam kampung.', '08976745445', 'Ayam', 60000, 'Verified', 'images/IMG3-1.jpg', 'images/IMG3-2.jpg', 'images/IMG3-3.jpg'),
(4, 3, 'Ayam Kampung', 'ayam peliharaan yang tidak ditangani dengan cara budidaya massal komersial serta tidak berasal-usul dari galur atau ras yang dihasilkan untuk kepentingan komersial tersebut.', '081231323', 'Ayam', 45000, 'Verified', 'images/IMG4-1.jpg', 'images/IMG4-2.jpg', 'images/IMG4-3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `username`, `nama`, `email`, `password`, `nohp`, `foto`) VALUES
(1, 'fernanda', '', 'fajri.fernanda10@gmail.com', 'f5775818dcc2cfa6e59bfdadfe25d327', '081372141269', ''),
(2, 'member1', '', 'member@gmail.com', 'member', '098877889891', ''),
(3, 'tes', 'tes', 'tes@gmail.com', '8f60c8102d29fcd525162d02eed4566b', '556677', ''),
(5, 'coba', 'cobaa', 'coba@gmail.com', 'aa08769cdcb26674c6706093503ff0a3', '0988877666', ''),
(9, 'murayyan', 'Muhammad Rayyan', 'murayyan97@gmail.com', '62ed597b338095651312245f2063ef2a', '085748009552', ''),
(14, 'lidiya', 'Maulidiya Qurrota', 'lidiya@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0812312312', ''),
(15, 'farah', 'Farah Fadhillah Abhad', 'farah@gmail.com', 'halo', '08141312213', ''),
(18, 'Username', 'Nama', 'Email', 'Password', 'No. HP', ''),
(20, 'alif', 'alifdimas', 'alif@gmail.com', 'alif', '089988786', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD CONSTRAINT `iklan_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

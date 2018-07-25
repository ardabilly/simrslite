-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 09:23 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `harga` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `harga`) VALUES
(1, 'betadin', '1000'),
(2, 'salonpas', '500'),
(3, 'Anti Biotik', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `alamat_pasien` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telp_pasien` varchar(30) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `id_poliklinik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat_pasien`, `jenis_kelamin`, `tanggal_lahir`, `telp_pasien`, `tgl_pendaftaran`, `id_poliklinik`) VALUES
(14, 'Mochamad Arda Billy', 'Kp Babakan RT03/01 Desa Cilember', 'Laki-Laki', '1999-06-06', '083819937855', '2018-07-25', 1),
(15, 'M. Kurtubi', 'Kp.Cijulang', 'Laki-Laki', '1999-10-27', '08528191818', '2018-07-25', 2),
(16, 'M. Andreas', 'Kopo Hankam', 'Laki-Laki', '2001-04-11', '08582919191', '2018-07-25', 3),
(17, 'Ewangga Arga W', 'Cinangka', 'Laki-Laki', '2001-07-19', '08382991992', '2018-07-25', 1),
(18, 'Andika Febriansyah', 'Cinangka', 'Laki-Laki', '2000-11-30', '083819937822', '2018-07-25', 2),
(19, 'Fadli Ramadhan', 'Cipayung', 'Laki-Laki', '1999-07-26', '083819937822', '2018-07-26', 3),
(20, 'M. Ambari', 'Cijulang', 'Laki-Laki', '2018-07-20', '083819937211', '2018-07-26', 2),
(21, 'Alfian M', 'Kp Babakan', 'Laki-Laki', '1990-07-24', '0896378512', '2018-07-25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `perawatan` varchar(255) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id_poliklinik` int(11) NOT NULL,
  `nama_poliklinik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`id_poliklinik`, `nama_poliklinik`) VALUES
(1, 'Poli Gigi'),
(2, 'Poli Bedah'),
(3, 'Poli Paru');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `id_poliklinik` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `id_poliklinik`, `created_at`, `updated_at`, `status`) VALUES
(11, 'Dr. Tamrin S.Pd', 'warren', 'Ib02KaZxBAGobXZ01-9skVfqZsTILXhr', '$2y$13$a85pi/3jfMqZxZI3/YzxAOloDgI9gyDqKWH3nk6A2BAC4/GwnwoVG', '', 'drwarrenarner@simrslite.com', 'Dokter', 1, 1532333085, 1532333085, 10),
(12, 'Dr. Jerry M Bargo S.H', 'jerry', 'wn54D5ep3pQ0OAFOj52V7fe5JliG3mTk', '$2y$13$btPiHmDouCA8k7K9hjwq9.el2H/Zpwe7Tqt.w2GqhSB7oTXH/Bfa.', '', 'drjerry@simrslite.com', 'Dokter', 2, 1532333169, 1532333169, 10),
(13, 'Admin SIMRS', 'admin', 'zh1gACeVOs04unsmI8uvKp3atOuez91J', '$2y$13$rYk0jIbar4NupmONYjRy5u//njSuky7/mwOdKm3O2EaKDMF0x/aQe', '', 'admin@simrslite.com', 'Admin', 1, 1532394202, 1532394202, 10),
(14, 'Dr. Yanuar S.T', 'yanuar', 'gPFL57lrzE7Bgmx0WxOkuD8hEDpN7Jnk', '$2y$13$TvQN5Lrr3K.uw0shlgjrruOqrM/yDOxDbtV8FfR.iG.qmLHo7GCDy', '', 'dryanuar@simrslite.com', 'Dokter', 3, 1532485715, 1532485715, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id_poliklinik`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id_poliklinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

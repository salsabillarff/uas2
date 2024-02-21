-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 03:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(1000) NOT NULL,
  `jenis_barang` varchar(1000) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `gambar_barang` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `jenis_barang`, `harga_barang`, `gambar_barang`) VALUES
(5, 'TAS UNDANGAN MERAH LV', 'TAS WANITA', 7000000, '01LV.png'),
(6, 'TAS WANITA CREAM LIKE ICE CREAM FENDI', 'TAS WANITA', 5000000, '02fendi.png'),
(7, 'TAS WANITA SIMPLE LOUIS VUITTON', 'TAS WANITA', 3000000, '03LV.png'),
(8, 'TAS HITAM PEKAT TORY', 'TAS WANITA', 25000000, '04tory.png'),
(9, 'TAS SATU SET GUCCI', 'TAS WANITA', 10500000, '05g.png'),
(11, 'TAS PEGANG SATU TANGAN GUCCI', 'TAS WANITA', 35000000, '07g.png'),
(13, 'TAS SLEMPANG TORY COKLAT', 'TAS WANITA', 7000000, '10tory.png'),
(14, 'TAS MEWAH HITAM', 'TAS WANITA', 10500000, '11pv.png'),
(15, 'SATU SET FRADA', 'TAS WANITA', 20000000, '12fr.png'),
(18, 'KALUNG SILVER MOTIF', 'AKSESORIS', 12000000, 'B1.jpeg'),
(19, 'SATU SET PERHIASAN UNTUK HANTARAN', 'AKSESORIS', 20500000, 'C1.jpeg'),
(21, 'MAHKOTA BUNGA KANAN KIRI', 'AKSESORIS', 65000000, 'E1.jpeg'),
(24, 'SLING BAG GIVENCY', 'TAS WANITA', 6000000, '0009gi.png'),
(25, '2 PCS TAS KEMBAR', 'TAS SEKOLAH', 2000000, 'aa0101.png'),
(26, 'TAS SEKLAH SET KIYOWO', 'TAS SEKOLAH', 5000000, 'aa0202.png'),
(27, 'TAS COPLE BESTIE', 'TAS SEKOLAH', 1500000, 'aa0303.png'),
(28, 'TAS MERAH MEMBAHANA', 'TAS SEKOLAH', 700000, 'aa0404.png'),
(29, 'TAS FREE FIRE MERAH', 'TAS SEKOLAH', 1000000, 'aa0505.png'),
(30, 'TAS HITAM ONE SET', 'TAS SEKOLAH', 5500000, 'aa0606.png'),
(31, 'TAS PUTIH ELEGANT UNISEX', 'TAS SEKOLAH', 1300000, 'aa0707.png'),
(32, 'BACK PACK HITAM', 'TAS SEKOLAH', 1000000, 'aa0808.png'),
(33, 'TAS PEGANG PINK', 'TAS SEKOLAH', 3000000, 'aa01010.png'),
(34, 'TOTEBAG BROKEN WHITE', 'TAS SEKOLAH', 7500000, 'aa0111.png'),
(35, 'SATU SET TOTEBAG MOTIF', 'TAS SEKOLAH', 4500000, 'aa0122.png'),
(36, 'KALUNG MATAHARI BERSINAR', 'AKSESORIS', 15000000, 'aaa1.jpeg'),
(37, 'JAM TANGAN PRIA WANITA CREAM', 'AKSESORIS', 2000000, 'aB02.png'),
(38, 'CINCIN EMAS KARAKTER', 'AKSESORIS', 7000000, 'D1.jpeg'),
(39, 'MAHKOTA BUNGA FULL KELILING', 'AKSESORIS', 13500000, 'F1.png'),
(40, 'GELANG INFINITY', 'AKSESORIS', 6000000, '08.png'),
(41, '4 PCS ANTING SILVER', 'AKSESORIS', 5000000, 'anting1.png'),
(42, 'PERHIASAN EMAS', 'AKSESORIS', 5000000, 'emas1.png');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` text NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jenis_barang` varchar(15) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `kembali_pembayaran` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `nama`, `alamat`, `no_hp`, `nama_barang`, `jenis_barang`, `harga_barang`, `jumlah_barang`, `total_harga`, `pembayaran`, `kembali_pembayaran`, `created_date`) VALUES
(5, 'dio', 'gang pribadi jaln bambu', '824687787', 'tas free fire merah', 'tas sekolah', 1000000, 1, 1000000, 20000000, 19000000, '2024-01-28 17:44:44'),
(7, 'amel', 'galang ', '2147483647', 'TOTEBAG BROKEN WHITE', 'TAS SEKOLAH', 7500000, 2, 15000000, 15000000, 0, '2024-01-28 19:22:41'),
(8, 'juan', 'beo ', '086563365456', 'TAS SATU SET GUCCI', 'TAS WANITA', 10500000, 1, 10500000, 10500000, 0, '2024-01-29 04:32:13'),
(9, 'SALSABILAH ROFIFAH LUBIS', 'medan', '099478472265', 'TAS WANITA CREAM LIK', 'TAS WANITA', 5000000, 2, 10000000, 10000000, 0, '2024-01-30 05:41:31'),
(10, 'SALSABILAH ROFIFAH LUBIS', 'medan', '89798978', 'TAS PEGANG PINK', 'TAS SEKOLAH', 3000000, 1, 3000000, 3000000, 0, '2024-02-19 09:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang2`
--

CREATE TABLE `keranjang2` (
  `keranjang_id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jenis_barang` varchar(15) NOT NULL,
  `harga_barang` int(8) NOT NULL,
  `jumlah_barang` int(3) NOT NULL,
  `total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keranjang2`
--

INSERT INTO `keranjang2` (`keranjang_id`, `nama`, `alamat`, `no_hp`, `nama_barang`, `jenis_barang`, `harga_barang`, `jumlah_barang`, `total_harga`) VALUES
(13, 'sals', 'jl kasuari gang sejahtera ', '085270798752', 'PERHIASAN EMAS', 'AKSESORIS', 5000000, 1, 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `nama`, `email`, `pesan`, `date`) VALUES
(0, 'sals', 'salsarofifa@gmail.com', 'bajunya real pict,murah juga ', '2024-01-29 08:39:53'),
(0, 'alisya', 'alisya@gmail.com', ' sangat baik', '2024-02-19 09:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'roberto.kakaban@yahoo.com', 'c0e024d9200b5705bc4804722636378a', '1', '2024-02-19 16:01:42'),
(2, 'siapa?', '0b635a86fd0222c4126d8bb53e631303', '[sb352218@gmail.com]', '3f70d261e08e3e6294daf28820f57e5f', '1', '2023-12-24 18:06:15'),
(3, 'iya', '00e11252db1051387c47521767296b42', 'lala@gmail.com', 'd801bccbeba8244d6f4d1764133f5b88', '1', '2023-12-23 18:53:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang2`
--
ALTER TABLE `keranjang2`
  ADD PRIMARY KEY (`keranjang_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keranjang2`
--
ALTER TABLE `keranjang2`
  MODIFY `keranjang_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

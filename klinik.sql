-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 07:58 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `kandungan_obat` varchar(250) NOT NULL,
  `golongan_obat` varchar(100) NOT NULL,
  `tglbeli_obat` datetime NOT NULL,
  `tglkl_obat` datetime NOT NULL,
  `harga_obat` int(6) NOT NULL,
  `hargajual_obat` int(6) NOT NULL,
  `stok_obat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `kandungan_obat`, `golongan_obat`, `tglbeli_obat`, `tglkl_obat`, `harga_obat`, `hargajual_obat`, `stok_obat`) VALUES
(1, 'Antibiotik', 'Antibiotik', 'Generik', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5000, 6000, 20),
(2, 'Paracetamol', 'Paracetamol', 'Generik', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10000, 12000, 10),
(3, 'Sirup', 'Paracetamol', 'Non Generik', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20000, 25000, 8);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `tmptlahir_pasien` varchar(50) NOT NULL,
  `tgllahir_pasien` datetime NOT NULL,
  `alamat_pasien` text NOT NULL,
  `telepon_pasien` varchar(16) NOT NULL,
  `pekerjaan_pasien` varchar(50) NOT NULL,
  `usia_pasien` int(3) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tmptlahir_pasien`, `tgllahir_pasien`, `alamat_pasien`, `telepon_pasien`, `pekerjaan_pasien`, `usia_pasien`, `status`) VALUES
(1, 'susi', 'Jember', '0000-00-00 00:00:00', 'Jember', '000', 'Ibu RT', 50, 2),
(2, 'susia', 'Jember', '0000-00-00 00:00:00', 'ddd', '000', 'Ibu RT', 50, 2),
(3, 'susib', 'Jember', '0000-00-00 00:00:00', 'a', '000', 'Ibu RT', 50, 0),
(4, 'budi', 'bandung', '2020-11-05 00:00:00', 'bandung', '000', 'pelajar', 20, 2),
(5, 'budi', 'Surabaya', '2020-11-16 00:00:00', 'Surabaya', '000', 'Swasta', 25, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level_user` tinyint(1) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `gender_user` tinyint(1) NOT NULL,
  `alamat_user` text NOT NULL,
  `telepon_user` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `password`, `level_user`, `nama_user`, `gender_user`, `alamat_user`, `telepon_user`) VALUES
(1, 'newadmin', '123456', 2, 'Admin magang', 1, 'sss', '099999'),
(3, 'manager', 'manager', 1, 'Manager Sukamaju', 2, 'Sukamaju', '0919999'),
(4, 'doktergigi', 'doktergigi', 3, 'Dokter Gigi', 1, 'Sukamaju', '099999'),
(5, 'admin', 'admin', 2, 'Admin Sukamaju', 2, 'Sukamaju', '099999'),
(6, 'perawat', 'perawat', 4, 'Perawat', 2, 'Surabaya', '099999'),
(7, 'kasir', 'kasir', 5, 'Kasir', 1, 'Surabaya', '099');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `id_rkmd` int(11) NOT NULL,
  `subtotal` int(7) NOT NULL,
  `diskon` int(3) NOT NULL,
  `total` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `id_rkmd`, `subtotal`, `diskon`, `total`) VALUES
(1, 1, 50000, 5000, 45000),
(2, 2, 35000, 10000, 25000),
(3, 4, 50000, 5000, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE `rekammedis` (
  `id_rkmd` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_rkmd` datetime NOT NULL,
  `keluhan` text NOT NULL,
  `tindakan` text NOT NULL,
  `saran` text NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekammedis`
--

INSERT INTO `rekammedis` (`id_rkmd`, `id_pasien`, `tgl_rkmd`, `keluhan`, `tindakan`, `saran`, `id_dokter`, `status`) VALUES
(1, 1, '2020-11-20 00:00:00', 'Sakit Gigi', 'Pemberian antibiotik', 'Hindari makanan panas', 1, 2),
(2, 4, '2020-11-14 00:00:00', 'Sakit', 'Diobati', 'Istirahat', 1, 2),
(3, 2, '2020-11-14 00:00:00', 'aaa', 'bbb', 'ccc', 1, 1),
(4, 5, '2020-11-06 00:00:00', 'Sakit gigi', 'Pemberian Obat', 'Menghindari makanan panas', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `ket_obat` text NOT NULL,
  `id_rkmd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `id_obat`, `jumlah_obat`, `ket_obat`, `id_rkmd`) VALUES
(1, 2, 5, 'Diminum setiap hari', 1),
(2, 2, 2, 'Diminum', 4),
(3, 1, 5, 'diminum\r\n', 2),
(4, 2, 2, 'Dosis rendah', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id_tarif` int(11) NOT NULL,
  `nama_tarif` varchar(100) NOT NULL,
  `tarif_dokter` int(6) NOT NULL,
  `tarif_asisten` int(6) NOT NULL,
  `tarif_klinik` int(6) NOT NULL,
  `tarif_bhp` int(6) NOT NULL,
  `total_tarif` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id_tarif`, `nama_tarif`, `tarif_dokter`, `tarif_asisten`, `tarif_klinik`, `tarif_bhp`, `total_tarif`) VALUES
(1, 'Rawat Jalan', 50000, 20000, 10000, 10000, 90000),
(2, 'Sakit Ringan', 20000, 10000, 0, 0, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `id_tarif` int(11) NOT NULL,
  `id_rkmd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD PRIMARY KEY (`id_rkmd`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_tarif`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

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
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rekammedis`
--
ALTER TABLE `rekammedis`
  MODIFY `id_rkmd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2023 at 06:47 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warga`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_blt`
--

CREATE TABLE `data_blt` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `jumlah_diterima` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_blt`
--

INSERT INTO `data_blt` (`id`, `nama`, `alamat`, `desa`, `nik`, `no_kk`, `jenis_kelamin`, `jumlah_diterima`) VALUES
(4, 'Rosmaniur Siregar', 'Dusun I', 'Sibandang', '120215420470001', '1202150707140001', 'Perempuan', 900),
(5, 'Firdaus Naibaho', 'Dusun I', 'Sibandang', '1202150610880002', '1202151611130003', 'Laki Laki', 900);

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `nama`, `ttl`, `nik`, `no_kk`, `no_hp`, `jabatan`, `pendidikan_terakhir`) VALUES
(2, 'Hurrycan Jamaru Rajagukguk', ', Taput,15-01-1971', '317503150171100010', '3175071702121025', '08221296614479', 'Kepala Desa', 'S1'),
(3, 'Harry Allaba Ompusunggu', 'Teluk Pulai Dalam, ', '120215221090002', '1202151009120011', '082167889379', 'Sekretaris Desa', 'SMK'),
(4, 'Maria Rajagukguk', 'Sibandang, ', '1202155212830001', '1202151807082158', '082151101194', 'Kaur TU', 'SMA'),
(5, 'Lengro Rajagukguk', 'Simanampang, ', '1202152412890001', '1202150203150003', '081375182704', 'KASI', 'SMA'),
(6, 'Krismon L Siregar', 'Silali, ', '1202150601990001', '3175061810180100', '082276877883', 'KASI', 'SMA'),
(7, 'Ranapati Naibaho', 'Sibandang, ', '1202152001910002', '1202151807081989', '082164669119', 'KASI', 'SMA');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `path_galeri` varchar(100) NOT NULL,
  `caption_galeri` text NOT NULL,
  `tautan_galeri` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `path_galeri`, `caption_galeri`, `tautan_galeri`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'b4a608a2860440739253d1cbc7c1b447.jpg', 'Kegiatan sosialisasi', 'https://youtu.be/1CGWg_Syj2g', 9, '2020-10-19 04:45:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nomor_keluarga` varchar(16) NOT NULL,
  `id_kepala_keluarga` int(11) NOT NULL,
  `alamat_keluarga` text NOT NULL,
  `desa_kelurahan_keluarga` varchar(30) NOT NULL,
  `kecamatan_keluarga` varchar(30) NOT NULL,
  `kabupaten_kota_keluarga` varchar(30) NOT NULL,
  `provinsi_keluarga` varchar(30) NOT NULL,
  `negara_keluarga` varchar(30) NOT NULL,
  `rt_keluarga` varchar(3) NOT NULL,
  `rw_keluarga` varchar(3) NOT NULL,
  `kode_pos_keluarga` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_keluarga`, `nomor_keluarga`, `id_kepala_keluarga`, `alamat_keluarga`, `desa_kelurahan_keluarga`, `kecamatan_keluarga`, `kabupaten_kota_keluarga`, `provinsi_keluarga`, `negara_keluarga`, `rt_keluarga`, `rw_keluarga`, `kode_pos_keluarga`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '1202151001120001', 1, 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '-', '-', '22476', 1, '2023-03-30 13:18:15', '2023-03-30 13:18:15'),
(2, '1202151308200002', 9, 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '-', '-', '22476', 1, '2023-03-30 13:20:08', '0000-00-00 00:00:00'),
(3, '1202151807082075', 7, 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '-', '-', '22476', 1, '2023-03-30 13:21:43', '0000-00-00 00:00:00'),
(4, '1202150210150003', 12, 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '-', '-', '22476', 1, '2023-03-30 13:22:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `nik_mutasi` varchar(16) NOT NULL,
  `nama_mutasi` varchar(45) NOT NULL,
  `tempat_lahir_mutasi` varchar(30) NOT NULL,
  `tanggal_lahir_mutasi` date NOT NULL,
  `jenis_kelamin_mutasi` enum('L','P') NOT NULL,
  `alamat_ktp_mutasi` text NOT NULL,
  `alamat_mutasi` text NOT NULL,
  `desa_kelurahan_mutasi` varchar(30) NOT NULL,
  `kecamatan_mutasi` varchar(30) NOT NULL,
  `kabupaten_kota_mutasi` varchar(30) NOT NULL,
  `provinsi_mutasi` varchar(30) NOT NULL,
  `negara_mutasi` varchar(30) NOT NULL,
  `rt_mutasi` varchar(3) NOT NULL,
  `rw_mutasi` varchar(3) NOT NULL,
  `agama_mutasi` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_mutasi` varchar(20) NOT NULL,
  `pekerjaan_mutasi` varchar(20) NOT NULL,
  `status_perkawinan_mutasi` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_mutasi` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_surat`
--

CREATE TABLE `permohonan_surat` (
  `id` int(11) NOT NULL,
  `nik` varchar(39) NOT NULL,
  `nama` varchar(199) NOT NULL,
  `nohp` varchar(25) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permohonan_surat`
--

INSERT INTO `permohonan_surat` (`id`, `nik`, `nama`, `nohp`, `jenis`, `status`) VALUES
(1, '1202151511810002', 'Thomson Ompusunggu', '082276619604', 'KK', 'Selesai'),
(3, '1217054107850005', 'Lasrida Sinaga', '081397625207', 'KTP', 'Ditolak'),
(4, '12021155706350001', 'Pesti Siregar', '081397655897', 'Pindah', 'Ditolak'),
(5, '1216016309600002', 'Rosmeri Siregar', '092276619604', 'KK', 'Ditangguhkan'),
(6, '12312312312', '12312wqewqe', '082133164875', 'KK', 'Ditangguhkan'),
(7, '12312312', '123123231', '213123123123', 'KTP', 'Selesai'),
(8, '123123', '123123', '123123', 'KK', 'Selesai'),
(9, '123123', '1231231', '123123123123', 'KK', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `keterangan_user` text NOT NULL,
  `status_user` enum('Admin','RT','RW') NOT NULL,
  `desa_kelurahan_user` varchar(30) NOT NULL,
  `kecamatan_user` varchar(30) NOT NULL,
  `kabupaten_kota_user` varchar(30) NOT NULL,
  `provinsi_user` varchar(30) NOT NULL,
  `negara_user` varchar(30) NOT NULL,
  `rt_user` varchar(3) NOT NULL,
  `rw_user` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `keterangan_user`, `status_user`, `desa_kelurahan_user`, `kecamatan_user`, `kabupaten_kota_user`, `provinsi_user`, `negara_user`, `rt_user`, `rw_user`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Desa', 'Admin', 'sibandang', 'Muara', 'Tapanuli Utara', 'Sumutera Utara', 'Indonesia', '-', '-', '2023-03-30 17:00:00', '2023-03-30 17:00:00'),
(9, '', '', '', 'KETUA RT04', '', '', '', '', '', '', '', '', '2023-03-30 14:34:14', '2023-03-30 17:00:00'),
(10, '', '', '', 'KETUA RW 01', '', '', '', '', '', '', '', '', '2023-03-30 17:00:00', '2023-03-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik_warga` varchar(16) NOT NULL,
  `nama_warga` varchar(45) NOT NULL,
  `tempat_lahir_warga` varchar(30) NOT NULL,
  `tanggal_lahir_warga` date NOT NULL,
  `jenis_kelamin_warga` enum('L','P') NOT NULL,
  `alamat_ktp_warga` text NOT NULL,
  `alamat_warga` text NOT NULL,
  `desa_kelurahan_warga` varchar(30) NOT NULL,
  `kecamatan_warga` varchar(30) NOT NULL,
  `kabupaten_kota_warga` varchar(30) NOT NULL,
  `provinsi_warga` varchar(30) NOT NULL,
  `negara_warga` varchar(30) NOT NULL,
  `rt_warga` varchar(3) NOT NULL,
  `rw_warga` varchar(3) NOT NULL,
  `agama_warga` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_warga` varchar(20) NOT NULL,
  `pekerjaan_warga` varchar(20) NOT NULL,
  `status_perkawinan_warga` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_warga` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `nik_warga`, `nama_warga`, `tempat_lahir_warga`, `tanggal_lahir_warga`, `jenis_kelamin_warga`, `alamat_ktp_warga`, `alamat_warga`, `desa_kelurahan_warga`, `kecamatan_warga`, `kabupaten_kota_warga`, `provinsi_warga`, `negara_warga`, `rt_warga`, `rw_warga`, `agama_warga`, `pendidikan_terakhir_warga`, `pekerjaan_warga`, `status_perkawinan_warga`, `status_warga`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '1202151511810002', 'Thomson Ompusunggu', 'Sibandang', '1981-11-15', 'P', 'Sibandang', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SD', 'Petani', 'Kawin', 'Tetap', 1, '2023-03-30 11:58:35', '2023-03-30 11:58:35'),
(2, '1217054107850005', 'Lasrida Sinaga', 'Upa Suhut', '1985-01-07', 'P', 'Upa suhut', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SMA', 'Petani', 'Kawin', 'Tetap', 1, '2023-03-30 12:00:48', '0000-00-00 00:00:00'),
(3, '1202152808030001', 'Talenta Ompusunggu', 'Sibandang', '2003-08-28', 'P', 'Sibandang', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SMA', 'Mahasiswa', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:02:51', '0000-00-00 00:00:00'),
(4, '1202152710150001', 'Arga Convium Ompusunggu', 'Sibandang', '2015-10-27', 'L', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Belum/Tidak Bekerja', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:05:03', '0000-00-00 00:00:00'),
(5, '1202154910170001', 'Amora Ompusunggu', 'Sibandang', '2017-10-09', 'L', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Belum/Tidak Bekerja', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:09:20', '0000-00-00 00:00:00'),
(6, '1202152808030001', 'Victorya Ompusunggu', 'Sibandang', '2020-08-18', 'P', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Belum/Tidak Bekerja', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:10:42', '0000-00-00 00:00:00'),
(7, '1202150107540001', 'Japulo Simamora', 'Dolok Sanggul', '1954-07-01', 'L', 'Dolok sanggul', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SD', 'Petani', 'Kawin', 'Tetap', 1, '2023-03-30 12:13:42', '0000-00-00 00:00:00'),
(8, '1202154107510002', 'Nurhaida Rajagukguk', 'Pangambatan', '1951-07-01', 'P', 'Pangambatan', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Tamat SD', 'Petani', 'Kawin', 'Tetap', 1, '2023-03-30 12:15:07', '0000-00-00 00:00:00'),
(9, '1202155106910002', 'Elen Rajagukguk', 'Pangambatan', '1991-06-11', 'P', 'Pangambatan', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SMA', 'Petani', 'Kawin', 'Tetap', 1, '2023-03-30 12:19:07', '0000-00-00 00:00:00'),
(10, '1202154209140003', 'Jevanya Ekklesia Sihombing', 'Sibandang', '2014-09-02', 'P', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Petani', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:21:06', '0000-00-00 00:00:00'),
(11, '1202156303160001', 'Yohana Ramona Ompusunggu', 'Sibandang', '2016-03-23', 'P', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Belum/Tidak Bekerja', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:22:23', '0000-00-00 00:00:00'),
(12, '3201031404790010', 'Tulus Antoni Rajagukguk', 'Medan', '1979-04-14', 'L', 'Medan', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SMA', 'Wiraswasta', 'Kawin', 'Tetap', 1, '2023-03-30 12:26:37', '0000-00-00 00:00:00'),
(13, '3201036504790008', 'Dewi Simaremare', 'Medan', '1979-04-25', 'P', 'Medan', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SMA', 'Wiraswasta', 'Kawin', 'Tetap', 1, '2023-03-30 12:30:07', '0000-00-00 00:00:00'),
(14, '3201036504100005', 'Sarah Sekauli Nurwulandari R.J', 'Bogor', '2010-04-25', 'P', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Belum/Tidak Bekerja', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:33:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `warga_has_kartu_keluarga`
--

CREATE TABLE `warga_has_kartu_keluarga` (
  `id_warga` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_blt`
--
ALTER TABLE `data_blt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `id_kepala_keluarga` (`id_kepala_keluarga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `permohonan_surat`
--
ALTER TABLE `permohonan_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD KEY `id_penduduk` (`id_warga`,`id_keluarga`),
  ADD KEY `warga_has_kartu_keluarga_ibfk_2` (`id_keluarga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_blt`
--
ALTER TABLE `data_blt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permohonan_surat`
--
ALTER TABLE `permohonan_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD CONSTRAINT `kartu_keluarga_ibfk_1` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`),
  ADD CONSTRAINT `kartu_keluarga_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD CONSTRAINT `mutasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `warga`
--
ALTER TABLE `warga`
  ADD CONSTRAINT `warga_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_2` FOREIGN KEY (`id_keluarga`) REFERENCES `kartu_keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

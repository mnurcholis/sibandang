-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2023 at 11:23 PM
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
-- Database: `db_warga`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `gambar_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `waktu_berita` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `slug_berita`, `judul_berita`, `gambar_berita`, `isi_berita`, `waktu_berita`, `user_id`) VALUES
(1, 'tenun-ulosmasyarakat-di-sibandang', '&quot;Tenun Ulos&quot;Masyarakat di Sibandang', '1a6408901d91eb043982dd3a790d86d5.jpg', '&quot;Tenun Ulos&quot;Masyarakat di Sibandang sudah sejak dahulu membuat ulos. Salah satu ulos unggulan yang dihasilkan adalah Ulos Harungguan, khusus para raja,', '2023-07-03 20:16:44', 1),
(2, 'panen-kopi-coklat', 'Panen Kopi Coklat', '909cdd995b4a16fc8c4f275425cca808.jpg', '&quot;Panen Kopi Coklat&quot; Merupakan mata pencaharian Penduduk desa Sibandang', '2023-07-03 20:18:29', 1),
(3, 'panen-mangga', 'Panen Mangga', '1f34ffbee39adcddbf8fe33c48dcb564.jpg', 'Panen Mangga merupakan salah mata pencaharian Penduduk desa Sibandang', '2023-07-03 20:18:58', 1),
(4, 'dinas-kesehatan-membagikan-susu-kepada-anak-dibawah-umur-di-kantor-desa-sibandang', 'Dinas Kesehatan membagikan Susu kepada Anak dibawah umur Di Kantor Desa Sibandang', 'b23705627fa3300c4dea41b1bf3b065f.jpg', 'Dinas Kesehatan membagikan Susu kepada Anak dibawah umur Di Kantor Desa Sibandang', '2023-07-03 20:19:42', 1),
(5, 'mengadakan-rapat-di-kantor-desa-sibandang', 'Mengadakan Rapat di Kantor Desa Sibandang', 'e503cbfc15902f4a2787c73727bfc5c0.jpg', 'Mengadakan Rapat di Kantor Desa Sibandang', '2023-07-03 20:20:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_blt`
--

CREATE TABLE `data_blt` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `jumlah_diterima` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `id_galeri` int NOT NULL,
  `path_galeri` varchar(100) NOT NULL,
  `judul_galeri` varchar(255) NOT NULL,
  `caption_galeri` text NOT NULL,
  `tautan_galeri` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `path_galeri`, `judul_galeri`, `caption_galeri`, `tautan_galeri`, `id_user`) VALUES
(3, '693a9fdd4c2fd0700968fba0d07ff3c0.jpeg', 'Di Pulau Sibandang wisatawan bisa menyaksikan proses pembuatan Ulos Harungguan di Desa Papande', 'Di Pulau Sibandang wisatawan bisa menyaksikan proses pembuatan Ulos Harungguan di Desa Papande. Ulos di desa tersebut masih dibuat dengan alat tenun tradisional. Konon, ulos dari Desa Papande tidak diperuntukan kepada orang biasa, namun hanya kepada para raja Batak. Oleh karena itu, Ulos Harungguan terkenal sebagai ulos mewah. Dalam proses pembuatannya dikerjakan oleh masyarakat lokal dari generasi muda hingga tua. Jika kamu ingin mencari ulos dengan motif yang indah dan kualitas yang baik, maka bisa berkunjung ke Desa ini.', '', 1),
(4, '9d607a663f3e9b0a90c3c8d4426640dc.jpeg', 'Panen mangga merupakan mata pencaharian Desa Sibandang yang dipanen 2 kali setahun. Dengan hasil yang memuaskan dan rasa mangga yang sangat manis', 'Panen mangga merupakan mata pencaharian Desa Sibandang yang dipanen 2 kali setahun', '', 1),
(5, '894f782a148b33af1e39a0efed952d69.jpeg', 'Kegiatan panen Coklat juga merupakan mata pencaharian Desa Sibandang, dan sudah banyak di tanam dan hasilnya sangat banyak.', 'Kegiatan panen Coklat juga merupakan mata pencaharian Desa Sibandang, dan sudah banyak di tanam dan hasilnya sangat banyak.', '', 1),
(6, '68c42382c8b93fc29c2fcb6a444aeda5.jpeg', 'Program Imunisasi anak di bawah umur ini dilaksanakan di Kantor Desa Sibandang. Para bidan desa akan datang ke Desa tersebut, memberikan obat dan menyuntik anak di bawah umur itu.', 'Program Imunisasi anak di bawah umur ini dilaksanakan di Kantor Desa Sibandang. Para bidan desa akan datang ke Desa tersebut, memberikan obat dan menyuntik anak di bawah umur itu.', '', 1),
(7, 'f74dd50cfec0f8549406fee6191d2f8d.jpeg', 'Program pembersihan dan perbaikan jalan. Yang dilakukan oleh para warga Desa Sibandang dan di tugaskan oleh Kepala Desa, demi menjaga kelestarian lingkungan tersebut', 'Program pembersihan dan perbaikan jalan. Yang dilakukan oleh para warga Desa Sibandang dan di tugaskan oleh Kepala Desa, demi menjaga kelestarian lingkungan tersebut', '', 1),
(8, 'c692562238d8c12c32434c50b96d56ae.jpeg', 'Program pembersihan dan perbaikan jalan. Yang dilakukan oleh para warga Desa Sibandang dan di tugaskan oleh Kepala Desa, demi menjaga kelestarian lingkungan tersebut', 'Program pembersihan dan perbaikan jalan. Yang dilakukan oleh para warga Desa Sibandang dan di tugaskan oleh Kepala Desa, demi menjaga kelestarian lingkungan tersebut', '', 1),
(9, 'e54cc06625bbadf12163b41a3cb92bf8.jpg', 'Jalan Menuju Desa Wisata Sibandang', 'Jalan Menuju Desa Wisata Sibandang', '', 1),
(10, '97ee3440cce820e501f35965096b4934.jpeg', 'Wisatawan Berkunjung ke Desa Sibandang', 'Wisatawan Berkunjung ke Desa Sibandang', '', 1),
(11, 'd606757a9c50dedc85e3cc90949b10ae.jpeg', 'Makan Bersama Kepala Desa dan Aparatur Desa Sibandang', 'Makan Bersama Kepala Desa dan Aparatur Desa Sibandang', '', 1),
(12, 'd683af551b56cb9d02cc44571a95f192.jpeg', 'Rapat Dengan Warga Desa Sibandang', 'Rapat Dengan Warga Desa Sibandang', '', 1),
(13, '107041c162d4bbc59398392cfc2dfd20.jpeg', 'Rapat Dengan Warga Desa Sibandang', 'Rapat Dengan Warga Desa Sibandang', '', 1),
(14, 'c51ce410c124a10e0db5e4b97fc2af39.png', 'Kegiatan Senam Lansia', 'Kegiatan Senam Lansia', '', 1),
(15, 'aab3238922bcc25a6f606eb525ffdc56.png', 'Kegiatan Gotong Royong', 'Kegiatan Gotong Royong', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_keluarga` int NOT NULL,
  `nomor_keluarga` varchar(16) NOT NULL,
  `id_kepala_keluarga` int NOT NULL,
  `alamat_keluarga` text NOT NULL,
  `desa_kelurahan_keluarga` varchar(30) NOT NULL,
  `kecamatan_keluarga` varchar(30) NOT NULL,
  `kabupaten_kota_keluarga` varchar(30) NOT NULL,
  `provinsi_keluarga` varchar(30) NOT NULL,
  `negara_keluarga` varchar(30) NOT NULL,
  `rt_keluarga` varchar(3) NOT NULL,
  `rw_keluarga` varchar(3) NOT NULL,
  `kode_pos_keluarga` varchar(5) NOT NULL,
  `id_user` int NOT NULL,
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
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int NOT NULL,
  `gambar_kuliner` varchar(255) NOT NULL,
  `judul_kuliner` varchar(255) NOT NULL,
  `slug_kuliner` varchar(255) DEFAULT NULL,
  `detail_kuliner` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `no_wa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `gambar_kuliner`, `judul_kuliner`, `slug_kuliner`, `detail_kuliner`, `harga`, `no_wa`) VALUES
(1, '79656c205e5f64c8c39b93c3f1665306.jpg', 'Dekka naniura', 'dekka-naniura', 'Dekke Naniura dalam bahasa Batak artinya ikan yang tidak dimasak melalui api / dalam Bahasa Batak: Dengke Mas na Niura. Ikan atau dalam bahasa batak disebut ihan merupakan bahan dasar pembuatan dekke naniura. Selain ikan mas segar mentah tanpa dimasak namun tidak amis', 'Rp. 85.000/kg', '82276619604'),
(2, '83cb81c38e11956ffbea3b499481c10d.jpg', 'Napidanar', 'napidanar', 'Ikan nanitombur atau tombur Batak merupakan salah satu makan khas Batak Toba yang berasal dari Sumatera Utara. Rasa dari ikan nanitombur sangat enak karena rasanya sangat mengigit di lidah. Memasak ikan nanitombur cukup mudah. Biasanya ikan yang ditombur adalah ikan mas, ikan mujahir, ikan nila atau pun lele', 'Rp. 85.000/kg', '82276619604'),
(3, '2e6ebea12498253a7f0e6fb52d620240.jpg', 'Arsik', 'arsik', 'Arsik adalah salah satu masakan khas masyarakat Batak atau yang disebut juga dekke na niarsik yang memiliki arti ikan yang dimasak hingga kering. Kata &#039;arsik&#039; berasal dari cara memasak hidangan ini yaitu mangarsik yang berarti hidangan ikan disiram-siram atau diguyur selama proses memasak.', 'Rp. 75.000/kg', '82276619604'),
(4, '4ae42a6d8a9cd06c67883bed7763a9b9.jpg', 'Ikan panggang', 'ikan-panggang', 'Ikan bakar adalah hidangan ikan yang dibakar atau dipanggang di atas api atau bara api. Hidangan ikan yang dibakar, muncul secara universal di berbagai belahan dunia. ', 'Rp.80.000/kg', '82276619604'),
(5, '1bc3e3e508d379fee2ed544cc3d709eb.jpg', 'Mie Gomak', 'mie-gomak', 'Mie Gomak merupakan salah satu dari sekian banyak kuliner khas tepian Danau Toba. Keistimewaannya tersua rasa pedas ketir dari percampuran cabai, bawang dan andaliman. Rasa ketir ini datang dari bumbu merica khas Toba bernama andaliman. Tumbuhan ini hanya bisa ditemukan di wilayah Sumatera Utara.', 'Rp. 8.000/porsi', '82276619604'),
(6, '3207082bbee62515bc2d613b4c74aafe.jpg', 'Lappet ', 'lappet', 'Lampet (dibaca: Lappet) adalah salah satu panganan tradisional masyarakat Batak yang terbuat dari tepung beras, kelapa parut, dan parutan gula aren. Campuran ini kemudian dibungkus menggunakan daun pisang dengan bentuk menyerupai limas.', 'Rp.2.000/biji', '82276619604');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int NOT NULL,
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
  `id_user` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_surat`
--

CREATE TABLE `permohonan_surat` (
  `id` int NOT NULL,
  `nik` varchar(39) NOT NULL,
  `nama` varchar(199) NOT NULL,
  `nohp` varchar(25) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `status` varchar(15) DEFAULT NULL,
  `file_lampiran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `permohonan_surat`
--

INSERT INTO `permohonan_surat` (`id`, `nik`, `nama`, `nohp`, `jenis`, `status`, `file_lampiran`) VALUES
(1, '1202151511810002', 'Thomson Ompusunggu', '082276619604', 'KK', 'Selesai', NULL),
(3, '1217054107850005', 'Lasrida Sinaga', '081397625207', 'KTP', 'Ditolak', NULL),
(4, '12021155706350001', 'Pesti Siregar', '081397655897', 'Pindah', 'Ditolak', NULL),
(5, '1216016309600002', 'Rosmeri Siregar', '092276619604', 'KK', 'Ditangguhkan', NULL),
(6, '12312312312', '12312wqewqe', '082133164875', 'KK', 'Ditangguhkan', NULL),
(7, '12312312', '123123231', '213123123123', 'KTP', 'Selesai', NULL),
(8, '123123', '123123', '123123', 'KK', 'Selesai', NULL),
(9, '123123', '1231231', '123123123123', 'KK', 'Selesai', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
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
  `id_warga` int NOT NULL,
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
  `id_user` int NOT NULL,
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
  `id_warga` int NOT NULL,
  `id_keluarga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

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
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_blt`
--
ALTER TABLE `data_blt`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_keluarga` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permohonan_surat`
--
ALTER TABLE `permohonan_surat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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

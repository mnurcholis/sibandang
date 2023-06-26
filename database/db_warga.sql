/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : db_warga

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 14/06/2023 17:38:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_blt
-- ----------------------------
DROP TABLE IF EXISTS `data_blt`;
CREATE TABLE `data_blt`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `desa` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nik` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `no_kk` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `jumlah_diterima` bigint(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_blt
-- ----------------------------
INSERT INTO `data_blt` VALUES (4, 'Rosmaniur Siregar', 'Dusun I', 'Sibandang', '120215420470001', '1202150707140001', 'Perempuan', 900);
INSERT INTO `data_blt` VALUES (5, 'Firdaus Naibaho', 'Dusun I', 'Sibandang', '1202150610880002', '1202151611130003', 'Laki Laki', 900);

-- ----------------------------
-- Table structure for data_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `data_pegawai`;
CREATE TABLE `data_pegawai`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ttl` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nik` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `no_kk` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `no_hp` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `pendidikan_terakhir` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_pegawai
-- ----------------------------
INSERT INTO `data_pegawai` VALUES (2, 'Hurrycan Jamaru Rajagukguk', ', Taput,15-01-1971', '317503150171100010', '3175071702121025', '08221296614479', 'Kepala Desa', 'S1');
INSERT INTO `data_pegawai` VALUES (3, 'Harry Allaba Ompusunggu', 'Teluk Pulai Dalam, ', '120215221090002', '1202151009120011', '082167889379', 'Sekretaris Desa', 'SMK');
INSERT INTO `data_pegawai` VALUES (4, 'Maria Rajagukguk', 'Sibandang, ', '1202155212830001', '1202151807082158', '082151101194', 'Kaur TU', 'SMA');
INSERT INTO `data_pegawai` VALUES (5, 'Lengro Rajagukguk', 'Simanampang, ', '1202152412890001', '1202150203150003', '081375182704', 'KASI', 'SMA');
INSERT INTO `data_pegawai` VALUES (6, 'Krismon L Siregar', 'Silali, ', '1202150601990001', '3175061810180100', '082276877883', 'KASI', 'SMA');
INSERT INTO `data_pegawai` VALUES (7, 'Ranapati Naibaho', 'Sibandang, ', '1202152001910002', '1202151807081989', '082164669119', 'KASI', 'SMA');

-- ----------------------------
-- Table structure for galeri
-- ----------------------------
DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri`  (
  `id_galeri` int(0) NOT NULL AUTO_INCREMENT,
  `path_galeri` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `caption_galeri` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tautan_galeri` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_user` int(0) NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NOT NULL,
  PRIMARY KEY (`id_galeri`) USING BTREE,
  INDEX `id_user`(`id_user`) USING BTREE,
  CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galeri
-- ----------------------------
INSERT INTO `galeri` VALUES (1, 'b4a608a2860440739253d1cbc7c1b447.jpg', 'Kegiatan sosialisasi', 'https://youtu.be/1CGWg_Syj2g', 9, '2020-10-19 04:45:48', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for kartu_keluarga
-- ----------------------------
DROP TABLE IF EXISTS `kartu_keluarga`;
CREATE TABLE `kartu_keluarga`  (
  `id_keluarga` int(0) NOT NULL AUTO_INCREMENT,
  `nomor_keluarga` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_kepala_keluarga` int(0) NOT NULL,
  `alamat_keluarga` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desa_kelurahan_keluarga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan_keluarga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kabupaten_kota_keluarga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `provinsi_keluarga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `negara_keluarga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rt_keluarga` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rw_keluarga` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_pos_keluarga` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_user` int(0) NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NOT NULL,
  PRIMARY KEY (`id_keluarga`) USING BTREE,
  INDEX `id_kepala_keluarga`(`id_kepala_keluarga`) USING BTREE,
  INDEX `id_user`(`id_user`) USING BTREE,
  CONSTRAINT `kartu_keluarga_ibfk_1` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `kartu_keluarga_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kartu_keluarga
-- ----------------------------
INSERT INTO `kartu_keluarga` VALUES (1, '1202151001120001', 1, 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '-', '-', '22476', 1, '2023-03-30 13:18:15', '2023-03-30 13:18:15');
INSERT INTO `kartu_keluarga` VALUES (2, '1202151308200002', 9, 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '-', '-', '22476', 1, '2023-03-30 13:20:08', '0000-00-00 00:00:00');
INSERT INTO `kartu_keluarga` VALUES (3, '1202151807082075', 7, 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '-', '-', '22476', 1, '2023-03-30 13:21:43', '0000-00-00 00:00:00');
INSERT INTO `kartu_keluarga` VALUES (4, '1202150210150003', 12, 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '-', '-', '22476', 1, '2023-03-30 13:22:45', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for mutasi
-- ----------------------------
DROP TABLE IF EXISTS `mutasi`;
CREATE TABLE `mutasi`  (
  `id_mutasi` int(0) NOT NULL AUTO_INCREMENT,
  `nik_mutasi` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_mutasi` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tempat_lahir_mutasi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lahir_mutasi` date NOT NULL,
  `jenis_kelamin_mutasi` enum('L','P') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_ktp_mutasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_mutasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desa_kelurahan_mutasi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan_mutasi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kabupaten_kota_mutasi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `provinsi_mutasi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `negara_mutasi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rt_mutasi` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rw_mutasi` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `agama_mutasi` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pendidikan_terakhir_mutasi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan_mutasi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_perkawinan_mutasi` enum('Kawin','Tidak Kawin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_mutasi` enum('Tetap','Kontrak') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_user` int(0) NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NOT NULL,
  PRIMARY KEY (`id_mutasi`) USING BTREE,
  INDEX `id_user`(`id_user`) USING BTREE,
  CONSTRAINT `mutasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for permohonan_surat
-- ----------------------------
DROP TABLE IF EXISTS `permohonan_surat`;
CREATE TABLE `permohonan_surat`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `nik` varchar(39) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nama` varchar(199) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nohp` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `jenis` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `status` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `file_lampiran` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permohonan_surat
-- ----------------------------
INSERT INTO `permohonan_surat` VALUES (1, '1202151511810002', 'Thomson Ompusunggu', '082276619604', 'KK', 'Selesai', NULL);
INSERT INTO `permohonan_surat` VALUES (3, '1217054107850005', 'Lasrida Sinaga', '081397625207', 'KTP', 'Ditolak', NULL);
INSERT INTO `permohonan_surat` VALUES (4, '12021155706350001', 'Pesti Siregar', '081397655897', 'Pindah', 'Ditolak', NULL);
INSERT INTO `permohonan_surat` VALUES (5, '1216016309600002', 'Rosmeri Siregar', '092276619604', 'KK', 'Ditangguhkan', NULL);
INSERT INTO `permohonan_surat` VALUES (6, '12312312312', '12312wqewqe', '082133164875', 'KK', 'Ditangguhkan', NULL);
INSERT INTO `permohonan_surat` VALUES (7, '12312312', '123123231', '213123123123', 'KTP', 'Selesai', NULL);
INSERT INTO `permohonan_surat` VALUES (8, '123123', '123123', '123123', 'KK', 'Selesai', NULL);
INSERT INTO `permohonan_surat` VALUES (9, '123123', '1231231', '123123123123', 'KK', 'Selesai', NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int(0) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username_user` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password_user` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan_user` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_user` enum('Admin','RT','RW') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desa_kelurahan_user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan_user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kabupaten_kota_user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `provinsi_user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `negara_user` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rt_user` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rw_user` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Desa', 'Admin', 'sibandang', 'Muara', 'Tapanuli Utara', 'Sumutera Utara', 'Indonesia', '-', '-', '2023-03-30 17:00:00', '2023-03-30 17:00:00');
INSERT INTO `user` VALUES (9, '', '', '', 'KETUA RT04', '', '', '', '', '', '', '', '', '2023-03-30 14:34:14', '2023-03-30 17:00:00');
INSERT INTO `user` VALUES (10, '', '', '', 'KETUA RW 01', '', '', '', '', '', '', '', '', '2023-03-30 17:00:00', '2023-03-30 17:00:00');

-- ----------------------------
-- Table structure for warga
-- ----------------------------
DROP TABLE IF EXISTS `warga`;
CREATE TABLE `warga`  (
  `id_warga` int(0) NOT NULL AUTO_INCREMENT,
  `nik_warga` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_warga` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tempat_lahir_warga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lahir_warga` date NOT NULL,
  `jenis_kelamin_warga` enum('L','P') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_ktp_warga` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_warga` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desa_kelurahan_warga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan_warga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kabupaten_kota_warga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `provinsi_warga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `negara_warga` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rt_warga` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rw_warga` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `agama_warga` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pendidikan_terakhir_warga` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan_warga` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_perkawinan_warga` enum('Kawin','Tidak Kawin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_warga` enum('Tetap','Kontrak') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_user` int(0) NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NOT NULL,
  PRIMARY KEY (`id_warga`) USING BTREE,
  INDEX `id_user`(`id_user`) USING BTREE,
  CONSTRAINT `warga_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of warga
-- ----------------------------
INSERT INTO `warga` VALUES (1, '1202151511810002', 'Thomson Ompusunggu', 'Sibandang', '1981-11-15', 'P', 'Sibandang', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SD', 'Petani', 'Kawin', 'Tetap', 1, '2023-03-30 11:58:35', '2023-03-30 11:58:35');
INSERT INTO `warga` VALUES (2, '1217054107850005', 'Lasrida Sinaga', 'Upa Suhut', '1985-01-07', 'P', 'Upa suhut', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SMA', 'Petani', 'Kawin', 'Tetap', 1, '2023-03-30 12:00:48', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (3, '1202152808030001', 'Talenta Ompusunggu', 'Sibandang', '2003-08-28', 'P', 'Sibandang', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SMA', 'Mahasiswa', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:02:51', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (4, '1202152710150001', 'Arga Convium Ompusunggu', 'Sibandang', '2015-10-27', 'L', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Belum/Tidak Bekerja', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:05:03', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (5, '1202154910170001', 'Amora Ompusunggu', 'Sibandang', '2017-10-09', 'L', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Belum/Tidak Bekerja', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:09:20', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (6, '1202152808030001', 'Victorya Ompusunggu', 'Sibandang', '2020-08-18', 'P', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Belum/Tidak Bekerja', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:10:42', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (7, '1202150107540001', 'Japulo Simamora', 'Dolok Sanggul', '1954-07-01', 'L', 'Dolok sanggul', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SD', 'Petani', 'Kawin', 'Tetap', 1, '2023-03-30 12:13:42', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (8, '1202154107510002', 'Nurhaida Rajagukguk', 'Pangambatan', '1951-07-01', 'P', 'Pangambatan', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Tamat SD', 'Petani', 'Kawin', 'Tetap', 1, '2023-03-30 12:15:07', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (9, '1202155106910002', 'Elen Rajagukguk', 'Pangambatan', '1991-06-11', 'P', 'Pangambatan', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SMA', 'Petani', 'Kawin', 'Tetap', 1, '2023-03-30 12:19:07', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (10, '1202154209140003', 'Jevanya Ekklesia Sihombing', 'Sibandang', '2014-09-02', 'P', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Petani', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:21:06', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (11, '1202156303160001', 'Yohana Ramona Ompusunggu', 'Sibandang', '2016-03-23', 'P', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Belum/Tidak Bekerja', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:22:23', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (12, '3201031404790010', 'Tulus Antoni Rajagukguk', 'Medan', '1979-04-14', 'L', 'Medan', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SMA', 'Wiraswasta', 'Kawin', 'Tetap', 1, '2023-03-30 12:26:37', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (13, '3201036504790008', 'Dewi Simaremare', 'Medan', '1979-04-25', 'P', 'Medan', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'SMA', 'Wiraswasta', 'Kawin', 'Tetap', 1, '2023-03-30 12:30:07', '0000-00-00 00:00:00');
INSERT INTO `warga` VALUES (14, '3201036504100005', 'Sarah Sekauli Nurwulandari R.J', 'Bogor', '2010-04-25', 'P', '-', 'Sibandang', 'Sibandang', 'Muara', 'Tapanuli Utara', 'Sumatera Utara', 'Indonesia', '001', '002', 'Kristen', 'Tidak Sekolah', 'Belum/Tidak Bekerja', 'Tidak Kawin', 'Tetap', 1, '2023-03-30 12:33:15', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for warga_has_kartu_keluarga
-- ----------------------------
DROP TABLE IF EXISTS `warga_has_kartu_keluarga`;
CREATE TABLE `warga_has_kartu_keluarga`  (
  `id_warga` int(0) NOT NULL,
  `id_keluarga` int(0) NOT NULL,
  INDEX `id_penduduk`(`id_warga`, `id_keluarga`) USING BTREE,
  INDEX `warga_has_kartu_keluarga_ibfk_2`(`id_keluarga`) USING BTREE,
  CONSTRAINT `warga_has_kartu_keluarga_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `warga_has_kartu_keluarga_ibfk_2` FOREIGN KEY (`id_keluarga`) REFERENCES `kartu_keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;

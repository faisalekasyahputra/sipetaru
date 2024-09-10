/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100425 (10.4.25-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : pju

 Target Server Type    : MySQL
 Target Server Version : 100425 (10.4.25-MariaDB)
 File Encoding         : 65001

 Date: 16/11/2023 22:58:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_meteran
-- ----------------------------
DROP TABLE IF EXISTS `tb_meteran`;
CREATE TABLE `tb_meteran`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `Kode_Meteran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Lat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Long` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Dokumentasi1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Dokumentasi2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_meteran
-- ----------------------------
INSERT INTO `tb_meteran` VALUES (1, '22450-0149383', '-2.708333333\r\n', '111.648333333333', '2023_09_27_15_53_IMG_1793.JPG', '2023_09_27_16_03_IMG_1795.JPG');

-- ----------------------------
-- Table structure for tb_pju
-- ----------------------------
DROP TABLE IF EXISTS `tb_pju`;
CREATE TABLE `tb_pju`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Kode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Nama_Ruas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `LAT` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `LONG` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Jenis_Jringan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Jenis_Bohlam` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Jenis_PJU` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Kondisi_Lampu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Kondisi_Lampu1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Kondisi_Stang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Kondisi_Tiang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Letak_Tiang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Tipe_Jalan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Pemasang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Daya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `No_KAWH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Kondisi_MCB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Jenis_MCB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Dokumentasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Jenis_Tagihan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ZONA` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Kode_Zona` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_pju
-- ----------------------------
INSERT INTO `tb_pju` VALUES ('1', '1', 'JL. Iskandar (Pancasila-Auri)', '-2.70833333333333', '111.648333333333', 'Kabel Tanah (2X10)', 'LED', 'Pemda cabang 3', '3', '0', 'Cat Hilang', 'Baik ', 'Tengah Jalan', '4/2 UD', 'Pemda', '2200', '22450-0149383', 'Baik', 'CL 20', '1.JPG', 'Meteran', 'A', 'A11');
INSERT INTO `tb_pju` VALUES ('2', '2', 'JL. Iskandar (Pancasila-Auri)', '-2.70861111111111', '111.648611111111', 'Kabel Tanah (2X10)', 'LED', 'Pemda cabang 2', '2', '0', 'Cat Hilang', 'Baik ', 'Tengah Jalan', '4/2 UD', 'Pemda', '2200', '22450-0149383', 'Baik', 'CL 20', '2.JPG', 'Meteran', 'A', 'A12');
INSERT INTO `tb_pju` VALUES ('3', '3', 'JL. Iskandar (Pancasila-Auri)', '-2.70861111111111', '111.649166666667', 'Kabel Tanah (2X10)', 'LED', 'Pemda cabang 2', '2', '0', 'Cat Hilang', 'Baik ', 'Tengah Jalan', '4/2 UD', 'Pemda', '2200', '22450-0149383', 'Baik', 'CL 20', '3.JPG', 'Meteran', 'A', 'A13');
INSERT INTO `tb_pju` VALUES ('4', '4', 'JL. Iskandar (Pancasila-Auri)', '-2.70888888888889', '111.649444444444', 'Kabel Tanah (2X10)', 'LED', 'Pemda cabang 2', '2', '0', 'Cat Hilang', 'Baik ', 'Tengah Jalan', '4/2 UD', 'Pemda', '2200', '22450-0149383', 'Baik', 'CL 20', '4.JPG', 'Meteran', 'A', 'A14');
INSERT INTO `tb_pju` VALUES ('5', '5', 'JL. Iskandar (Pancasila-Auri)', '-2.70916666666667', '111.649722222222', 'Kabel Tanah (2X10)', 'LED', 'Pemda cabang 2', '2', '0', 'Cat Hilang', 'Baik ', 'Tengah Jalan', '4/2 UD', 'Pemda', '2200', '22450-0149383', 'Baik', 'CL 20', '5.JPG', 'Meteran', 'A', 'A15');
INSERT INTO `tb_pju` VALUES ('6', '6', 'JL. Iskandar (Pancasila-Auri)', '-2.70944444444444', '111.65', 'Kabel Tanah (2X10)', 'LED', 'Pemda cabang 2', '2', '0', 'Cat Hilang', 'Baik ', 'Tengah Jalan', '4/2 UD', 'Pemda', '2200', '22450-0149383', 'Baik', 'CL 20', '6.JPG', 'Meteran', 'A', 'A16');
INSERT INTO `tb_pju` VALUES ('7', '7', 'JL. Iskandar (Pancasila-Auri)', '-2.709688', '111.650934', 'Kabel Tanah (2X10)', 'LED', 'Pemda cabang 4', '4', '0', 'Cat Hilang', 'Baik ', 'Tengah Jalan', '4/2 UD', 'Pemda', '2200', '22450-0149383', 'Baik', 'CL 20', '7.JPG', 'Meteran', 'A', 'A17');

SET FOREIGN_KEY_CHECKS = 1;

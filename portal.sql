/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : portal

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 07/01/2023 15:49:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `prodi` bigint NULL DEFAULT NULL,
  `kelas` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `semester` int NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `angkatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES (1, '2007113796', 'Pangidoan Nugroho Syahputra Harahap', 1, 'A', 6, '20230107043912jpg', '2023-01-07 07:05:05', '2023-01-07 04:39:12', '2020');
INSERT INTO `mahasiswa` VALUES (3, '1907123344', 'Ucup Surucup', 1, 'c', 8, NULL, '2023-01-07 02:38:18', '2023-01-07 02:38:18', '2019');
INSERT INTO `mahasiswa` VALUES (4, '200811939493', 'asep muasep syaipudin', 2, 'a', 6, NULL, '2023-01-07 03:10:32', '2023-01-07 03:14:13', '2020');
INSERT INTO `mahasiswa` VALUES (5, '2006324567', 'Amri maulana', 8, 'a', 6, NULL, '2023-01-07 04:02:33', '2023-01-07 04:02:33', '2020');
INSERT INTO `mahasiswa` VALUES (6, '205114321', 'Hitcha natanael Panjaitan', 5, 'a', 6, NULL, '2023-01-07 04:02:59', '2023-01-07 04:02:59', '2020');
INSERT INTO `mahasiswa` VALUES (7, '2087787687', 'reno widi', 2, 'g', 6, NULL, '2023-01-07 07:50:37', '2023-01-07 07:50:37', '2020');

-- ----------------------------
-- Table structure for prodi
-- ----------------------------
DROP TABLE IF EXISTS `prodi`;
CREATE TABLE `prodi`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `fakultas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of prodi
-- ----------------------------
INSERT INTO `prodi` VALUES (1, 'Teknik Infortmatika', '2023-01-07 07:21:13', '2023-01-07 07:21:17', 'Teknik');
INSERT INTO `prodi` VALUES (2, 'teknik mesin', '2023-01-07 03:09:40', '2023-01-07 03:09:40', 'teknik');
INSERT INTO `prodi` VALUES (3, 'teknik elektro', '2023-01-07 04:00:22', '2023-01-07 04:00:22', 'teknik');
INSERT INTO `prodi` VALUES (4, 'dokter', '2023-01-07 04:00:34', '2023-01-07 04:00:34', 'kedokteran');
INSERT INTO `prodi` VALUES (5, 'sistem informasi', '2023-01-07 04:00:58', '2023-01-07 04:00:58', 'Matematika dan Pengetahuan alam');
INSERT INTO `prodi` VALUES (6, 'kimia', '2023-01-07 04:01:11', '2023-01-07 04:01:11', 'Matematika Dan Pengetahuan Alam');
INSERT INTO `prodi` VALUES (7, 'Kewarganegaraan', '2023-01-07 04:01:31', '2023-01-07 04:01:31', 'Kependidikan dan Keguruan');
INSERT INTO `prodi` VALUES (8, 'Agroteknologi', '2023-01-07 04:01:47', '2023-01-07 04:01:47', 'Pertanian');
INSERT INTO `prodi` VALUES (9, 'Perikanan', '2023-01-07 04:01:57', '2023-01-07 04:01:57', 'Perikanan');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'edo@gmail.com', '$2y$10$0Lol4pDhcTS33F4c2yn7W.gF3hyNlNwmYKndML3jVvTbAovARGDmq', 'edo_dev', '2023-01-06 23:46:18', '2023-01-06 23:46:18');
INSERT INTO `users` VALUES (4, 'abdul@gmail.com', '$2y$10$F8NNkE8SxyQiu5QNbLUOc.JJoZukCZ6Vfe9KaW34mVii9MMvZ4hNi', 'abdul', '2023-01-07 03:43:25', '2023-01-07 03:43:25');

SET FOREIGN_KEY_CHECKS = 1;

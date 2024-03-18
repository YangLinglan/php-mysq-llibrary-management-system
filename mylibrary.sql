/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : mylibrary

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 12/04/2022 20:11:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admintable
-- ----------------------------
DROP TABLE IF EXISTS `admintable`;
CREATE TABLE `admintable`  (
  `ad_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ad_password` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`ad_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admintable
-- ----------------------------
INSERT INTO `admintable` VALUES (00001, '杨铃兰', 'yanglinglan');
INSERT INTO `admintable` VALUES (00002, '徐冰妮', 'xubingni');

-- ----------------------------
-- Table structure for booktable
-- ----------------------------
DROP TABLE IF EXISTS `booktable`;
CREATE TABLE `booktable`  (
  `book_class` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `book_id` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `book_name` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `re_name` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `book_count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`book_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of booktable
-- ----------------------------
INSERT INTO `booktable` VALUES ('科学', 'sci_01', '进化论', '徐冰妮', 10);
INSERT INTO `booktable` VALUES ('哲学', 'phy_01', '中国哲学简史', '杨铃兰', 10);

-- ----------------------------
-- Table structure for readertable
-- ----------------------------
DROP TABLE IF EXISTS `readertable`;
CREATE TABLE `readertable`  (
  `re_count` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `re_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `re_name` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `re_password` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`re_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of readertable
-- ----------------------------
INSERT INTO `readertable` VALUES ('0', 000001, '杨铃兰', 'yanglinglan');
INSERT INTO `readertable` VALUES ('0', 000002, '徐冰妮', 'xubingni');

SET FOREIGN_KEY_CHECKS = 1;

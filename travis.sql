/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50505
 Source Host           : localhost
 Source Database       : travis

 Target Server Type    : MySQL
 Target Server Version : 50505
 File Encoding         : utf-8

 Date: 06/25/2018 10:42:30 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `restful`
-- ----------------------------
DROP TABLE IF EXISTS `restful`;
CREATE TABLE `restful` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(255) DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `restful`
-- ----------------------------
BEGIN;
INSERT INTO `restful` VALUES ('1', 'put', '2018-06-22 00:00:00'), ('3', 'post', '2018-06-22 10:42:46'), ('4', 'put', '2018-06-22 10:43:29');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

/*
Navicat MySQL Data Transfer
Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : mvc1
Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001
Date: 2019-06-11 14:56:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for posts_table
-- ----------------------------
DROP TABLE IF EXISTS `posts_table`;
CREATE TABLE `posts_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of posts_table
-- ----------------------------
INSERT INTO `posts_table` VALUES ('1', 'bai 1', 'mo ta', '111');
INSERT INTO `posts_table` VALUES ('2', 'bai 2', 'mo ta', '111');
INSERT INTO `posts_table` VALUES ('4', 'bai 3', 'mo ta', '111');
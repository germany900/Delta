/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50713
Source Host           : localhost:3306
Source Database       : mvc_ejemplo

Target Server Type    : MYSQL
Target Server Version : 50713
File Encoding         : 65001

Date: 2018-10-08 13:12:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `servicio`
-- ----------------------------
DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of servicio
-- ----------------------------
INSERT INTO `servicio` VALUES ('1', 'Mantenimiento', '500');
INSERT INTO `servicio` VALUES ('2', 'Antivirus', '350');
INSERT INTO `servicio` VALUES ('3', 'Instalacion de Office 2010', '200');

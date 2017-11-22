/*
Navicat MySQL Data Transfer

Source Server         : MULTI_ONA_GRAF
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : multi911

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-11-22 01:07:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for autorizacion
-- ----------------------------
DROP TABLE IF EXISTS `autorizacion`;
CREATE TABLE `autorizacion` (
  `id_autorizacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_perfil_fk` int(11) NOT NULL,
  `id_modulo_fk` int(11) NOT NULL,
  `acceso` tinyint(10) NOT NULL,
  PRIMARY KEY (`id_autorizacion`),
  KEY `id_perfil_fk` (`id_perfil_fk`),
  KEY `id_modulo_fk` (`id_modulo_fk`),
  CONSTRAINT `autorizacion_ibfk_1` FOREIGN KEY (`id_perfil_fk`) REFERENCES `perfil` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `autorizacion_ibfk_2` FOREIGN KEY (`id_modulo_fk`) REFERENCES `modulo` (`id_modulo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of autorizacion
-- ----------------------------
INSERT INTO `autorizacion` VALUES ('1', '1', '1', '1');
INSERT INTO `autorizacion` VALUES ('2', '1', '2', '1');
INSERT INTO `autorizacion` VALUES ('3', '1', '3', '1');
INSERT INTO `autorizacion` VALUES ('4', '1', '4', '1');
INSERT INTO `autorizacion` VALUES ('5', '1', '5', '1');

-- ----------------------------
-- Table structure for modulo
-- ----------------------------
DROP TABLE IF EXISTS `modulo`;
CREATE TABLE `modulo` (
  `id_modulo` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo_fk` int(11) NOT NULL,
  `descripcion` varchar(25) NOT NULL,
  `activo` tinyint(10) NOT NULL,
  PRIMARY KEY (`id_modulo`,`id_modulo_fk`),
  KEY `id_modulo` (`id_modulo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of modulo
-- ----------------------------
INSERT INTO `modulo` VALUES ('1', '0', 'Produccion', '1');
INSERT INTO `modulo` VALUES ('2', '0', 'Inventario', '1');
INSERT INTO `modulo` VALUES ('3', '0', 'Ventas', '1');
INSERT INTO `modulo` VALUES ('4', '0', 'Estadisticas', '1');
INSERT INTO `modulo` VALUES ('5', '0', 'Clientes', '1');

-- ----------------------------
-- Table structure for perfil
-- ----------------------------
DROP TABLE IF EXISTS `perfil`;
CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_perfil` varchar(30) NOT NULL,
  `status` tinyint(20) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of perfil
-- ----------------------------
INSERT INTO `perfil` VALUES ('1', 'administrador', '1');
INSERT INTO `perfil` VALUES ('2', 'usuario', '1');

-- ----------------------------
-- Table structure for pieza
-- ----------------------------
DROP TABLE IF EXISTS `pieza`;
CREATE TABLE `pieza` (
  `id_pieza` int(10) NOT NULL AUTO_INCREMENT,
  `tipo_pieza` varchar(50) NOT NULL,
  `fabricante` varchar(50) DEFAULT NULL,
  `precio_pieza` varchar(15) DEFAULT NULL,
  `numero_pieza` varchar(10) DEFAULT NULL,
  `descripcion_pieza` varchar(150) DEFAULT NULL,
  `fec_produccion` date DEFAULT NULL,
  PRIMARY KEY (`id_pieza`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pieza
-- ----------------------------
INSERT INTO `pieza` VALUES ('5', 'Retrovisor', 'toyota', '150000', 'ret322', 'retrovisor', '2017-11-07');
INSERT INTO `pieza` VALUES ('6', 'Parachoques', 'toyota', '350000', 'pc3322', 'para choques delantero ', '2017-11-07');
INSERT INTO `pieza` VALUES ('7', 'Capo', 'toyota', '450000', 'c2333', '', '2017-10-30');
INSERT INTO `pieza` VALUES ('8', 'Techo', 'toyota', '1500000', 't1125', '', '2017-10-31');
INSERT INTO `pieza` VALUES ('16', 'Retrovisor', 'toyota', '123302', 'ret213', 'retrovisor clÃ¡sico', '2017-10-10');
INSERT INTO `pieza` VALUES ('17', 'Retrovisor', 'toyota', '25000', 'ret214', 'retrovisor ', '2017-10-12');
INSERT INTO `pieza` VALUES ('18', 'Retrovisor', 'toyota', '25000', 'ret21465', 'retrovisor ', '2017-10-24');
INSERT INTO `pieza` VALUES ('19', 'Retrovisor', 'toyota', '50000', 'ret21433', 'retrovisor ', '2017-10-20');
INSERT INTO `pieza` VALUES ('20', 'Retrovisor', 'toyota', '350000', 'ret21433', 'retrovisor ', '2017-10-19');
INSERT INTO `pieza` VALUES ('21', 'Retrovisor', 'toyota', '350000', 'ret21433', 'retrovisor ', '2017-10-25');
INSERT INTO `pieza` VALUES ('22', 'Retrovisor', 'toyota', '350000', 'ret21433', 'retrovisor ', '2017-11-08');
INSERT INTO `pieza` VALUES ('23', 'Retrovisor', 'toyota', '350000', 'ret21432', 'retrovisor ', '2017-11-09');
INSERT INTO `pieza` VALUES ('24', 'Retrovisor', 'toyota', '350000', 'ret21435', 'retrovisor ', '2017-11-10');
INSERT INTO `pieza` VALUES ('25', 'Capo', 'toyota', '450000', 'c23333', '', '2017-09-20');
INSERT INTO `pieza` VALUES ('26', 'Capo', 'toyota', '450000', 'c23342', '', '2017-10-09');
INSERT INTO `pieza` VALUES ('27', 'Capo', 'toyota', '450000', 'c23123', '', '2017-09-27');
INSERT INTO `pieza` VALUES ('28', 'Capo', 'toyota', '450000', 'c23353', '', '2017-10-12');
INSERT INTO `pieza` VALUES ('29', 'Parachoques', 'toyota', '1400000', 'pch1233', 'parachoques 1', '2017-10-09');
INSERT INTO `pieza` VALUES ('30', 'Parachoques', 'toyota', '1400000', 'pch1233', 'parachoques 1', '2017-10-04');
INSERT INTO `pieza` VALUES ('31', 'Parachoques', 'toyota', '1400000', 'pch1233', 'parachoques 1', '2017-11-06');
INSERT INTO `pieza` VALUES ('32', 'Parachoques', 'toyota', '1400000', 'pch1233', 'parachoques 1', '2017-11-14');
INSERT INTO `pieza` VALUES ('33', 'Parachoques', 'toyota', '1400000', 'pch123311', 'parachoques 1', '2017-10-16');
INSERT INTO `pieza` VALUES ('34', 'Parachoques', 'toyota', '1400000', 'pch123311', 'parachoques 123456', '2017-10-25');
INSERT INTO `pieza` VALUES ('35', 'Parachoques', 'toyota', '1400000', 'pch123311', 'parachoques 123456', '2017-09-26');
INSERT INTO `pieza` VALUES ('36', 'Parachoques', 'toyota', '1400000', 'pch123311', 'parachoques 123456', '2017-11-05');
INSERT INTO `pieza` VALUES ('37', 'Techo', 'toyota', '500000', 't1233', 'techo verde', '2017-11-14');
INSERT INTO `pieza` VALUES ('38', 'Capo', 'toyota', '1500000', 'ca1022', '', '2017-11-10');
INSERT INTO `pieza` VALUES ('39', 'Techo', 'toyota', '500000', 'te422', '', '2017-11-09');
INSERT INTO `pieza` VALUES ('42', 'Retrovisor', 'toyota', '1340000', '1223', '', '2017-09-19');
INSERT INTO `pieza` VALUES ('43', 'Retrovisor', 'toyota', '1340000', '1223', '', '2017-09-19');
INSERT INTO `pieza` VALUES ('44', 'Retrovisor', 'toyota', '1340000', '1223', '', '2017-09-19');
INSERT INTO `pieza` VALUES ('53', 'Parachoques', 'toyota', '400000', '1233', '12121', '0000-00-00');
INSERT INTO `pieza` VALUES ('54', 'Retrovisor', 'toyota', '350000', 'hu123', '', '2017-10-11');
INSERT INTO `pieza` VALUES ('58', 'Parachoques', 'toyota', '350000', 'hu123', '', '2017-10-11');
INSERT INTO `pieza` VALUES ('59', 'Parachoques', 'toyota', '350000', 'hu123', '', '2017-10-11');
INSERT INTO `pieza` VALUES ('60', 'Parachoques', 'toyota', '350000', 'hu123', '', '2017-10-11');
INSERT INTO `pieza` VALUES ('63', 'Retrovisor', 'toyota', '2500000', 'de123', '', '2017-12-20');
INSERT INTO `pieza` VALUES ('64', 'Retrovisor', 'toyota', '15000', '122', '', '2017-12-08');
INSERT INTO `pieza` VALUES ('65', 'Retrovisor', 'toyota', '', '123', '', '2017-12-06');
INSERT INTO `pieza` VALUES ('66', 'Retrovisor', 'toyota', '180000', 'retro3222', '', '2017-10-18');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` tinyint(20) NOT NULL,
  `id_perfil_fk` int(20) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `FK_id_perfil` (`id_perfil_fk`),
  CONSTRAINT `FK_id_perfil` FOREIGN KEY (`id_perfil_fk`) REFERENCES `perfil` (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('2', 'moya', 'daniel', 'nolasco', 'moya@gmail.com', '123+', '1', '1');
INSERT INTO `usuario` VALUES ('3', 'crojas', 'carlos', 'rojas', 'crojas@gmail.com', '1234', '1', '2');

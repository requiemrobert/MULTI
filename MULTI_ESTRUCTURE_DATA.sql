/*
Navicat MySQL Data Transfer

Source Server         : MULTI_ONA_GRAF
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : multi911

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-11-27 14:26:59
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of autorizacion
-- ----------------------------
INSERT INTO `autorizacion` VALUES ('1', '1', '1', '1');
INSERT INTO `autorizacion` VALUES ('2', '1', '2', '1');
INSERT INTO `autorizacion` VALUES ('3', '1', '3', '1');
INSERT INTO `autorizacion` VALUES ('4', '1', '4', '1');
INSERT INTO `autorizacion` VALUES ('5', '1', '5', '1');
INSERT INTO `autorizacion` VALUES ('6', '1', '6', '1');
INSERT INTO `autorizacion` VALUES ('7', '1', '7', '1');

-- ----------------------------
-- Table structure for cliente
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `cod_cliente` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `pref_ci_rif` varchar(5) DEFAULT NULL,
  `ci_rif` int(11) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cod_cliente`,`ci_rif`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cliente
-- ----------------------------
INSERT INTO `cliente` VALUES ('1', 'robert', 'garcia', 'V', '20914733', '2128626341', 'rogarcia@hotmail.com', 'la candelaria');
INSERT INTO `cliente` VALUES ('2', 'robert', 'pani', 'V', '21914733', '2128626341', '', '');
INSERT INTO `cliente` VALUES ('3', 'robert', 'garcia', 'V', '22914733', '2128626341', 'rogarcia@hotmail.com', 'la candelaria');
INSERT INTO `cliente` VALUES ('4', 'juan ', 'perez', 'J', '38054588', '2128626341', 'jperez91@hotmail.com', 'la candelaria');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of modulo
-- ----------------------------
INSERT INTO `modulo` VALUES ('1', '0', 'Registrar_Cliente', '1');
INSERT INTO `modulo` VALUES ('2', '0', 'Registrar_Pedidos', '1');
INSERT INTO `modulo` VALUES ('3', '0', 'Consultar_Pedidos', '1');
INSERT INTO `modulo` VALUES ('4', '0', 'Registrar_Inventario', '1');
INSERT INTO `modulo` VALUES ('5', '0', 'Listar_Inventario', '1');
INSERT INTO `modulo` VALUES ('6', '0', 'Prudctos_En_Proceso', '1');
INSERT INTO `modulo` VALUES ('7', '0', 'Registrar_Pedidos', '1');
INSERT INTO `modulo` VALUES ('8', '0', 'listar_Clientes', '1');

-- ----------------------------
-- Table structure for pedidos
-- ----------------------------
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `numero_orden` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(100) DEFAULT NULL,
  `cod_cliente_fk` int(10) DEFAULT NULL,
  `tipo_pieza` varchar(10) DEFAULT NULL,
  `cod_pieza` varchar(10) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `marca_fabricante` varchar(20) DEFAULT NULL,
  `fecha_pedido` date DEFAULT NULL,
  `estatus` varchar(20) DEFAULT NULL,
  `fec_estatus` date DEFAULT NULL,
  PRIMARY KEY (`numero_orden`)
) ENGINE=InnoDB AUTO_INCREMENT=3910 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pedidos
-- ----------------------------
INSERT INTO `pedidos` VALUES ('3896', 'robert garcia', '1', 'Retrovisor', '14', 'prueba', 'toyota', '2017-11-27', 'listo', '2017-11-27');
INSERT INTO `pedidos` VALUES ('3897', 'robert garcia', '1', 'Retrovisor', '15', '', 'toyota', '2017-11-08', 'en proceso', '2017-11-27');
INSERT INTO `pedidos` VALUES ('3898', 'robert garcia', '1', 'Parachoque', '16', '', 'toyota', '2017-11-15', 'pendiente', null);
INSERT INTO `pedidos` VALUES ('3899', 'robert garcia', '1', 'Capo', '17', '', 'toyota', '2017-11-16', 'en espera de repuest', '2017-11-27');
INSERT INTO `pedidos` VALUES ('3900', 'robert garcia', '1', 'Techo', '18', '', 'toyota', '2017-11-13', 'pendiente', null);
INSERT INTO `pedidos` VALUES ('3901', 'robert garcia', '1', 'Capo', '19', '', 'toyota', '2017-11-14', 'pausado', '2017-11-27');
INSERT INTO `pedidos` VALUES ('3902', 'robert garcia', '1', 'Retrovisor', '20', '', 'toyota', '2017-10-17', 'pendiente', null);
INSERT INTO `pedidos` VALUES ('3903', 'robert garcia', '1', 'Retrovisor', '21', '', 'toyota', '2017-10-18', 'pendiente', null);
INSERT INTO `pedidos` VALUES ('3904', 'robert garcia', '1', 'Techo', '22', '', 'toyota', '2017-10-04', 'pendiente', null);
INSERT INTO `pedidos` VALUES ('3905', 'robert garcia', '1', 'Capo', '23', '', 'toyota', '2017-09-28', 'pendiente', null);
INSERT INTO `pedidos` VALUES ('3906', 'juan  perez', '4', 'Retrovisor', '24', '', 'toyota', '2017-10-11', 'pendiente', null);
INSERT INTO `pedidos` VALUES ('3907', 'juan  perez', '4', 'Capo', '25', '', 'toyota', '2017-10-19', 'pendiente', null);
INSERT INTO `pedidos` VALUES ('3908', 'robert garcia', '1', 'Retrovisor', '26', 'graficas', 'toyota', '2017-12-06', 'pendiente', null);
INSERT INTO `pedidos` VALUES ('3909', 'robert garcia', '1', 'Techo', '27', '', 'toyota', '2017-12-14', 'pendiente', null);

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
  `cod_pieza` int(10) NOT NULL AUTO_INCREMENT,
  `numero_orden_fk` varchar(10) DEFAULT NULL,
  `tipo_pieza` varchar(50) NOT NULL,
  `marca_fabricante` varchar(50) DEFAULT NULL,
  `precio_pieza` varchar(15) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `fec_estatus` date DEFAULT NULL,
  `cod_cliente_fk` int(10) DEFAULT NULL,
  `estatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_pieza`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pieza
-- ----------------------------
INSERT INTO `pieza` VALUES ('14', '3896', 'Retrovisor', 'toyota', '1580000', null, '2017-11-27', '1', 'listo');
INSERT INTO `pieza` VALUES ('15', '3897', 'Retrovisor', 'toyota', '', null, '2017-11-27', '1', 'en proceso');
INSERT INTO `pieza` VALUES ('16', '3898', 'Parachoques', 'toyota', null, null, null, '1', 'pendiente');
INSERT INTO `pieza` VALUES ('17', '3899', 'Capo', 'toyota', '', null, '2017-11-27', '1', 'en espera de repuestos');
INSERT INTO `pieza` VALUES ('18', '3900', 'Techo', 'toyota', null, null, null, '1', 'pendiente');
INSERT INTO `pieza` VALUES ('19', '3901', 'Capo', 'toyota', '', null, '2017-11-27', '1', 'pausado');
INSERT INTO `pieza` VALUES ('20', '3902', 'Retrovisor', 'toyota', null, null, null, '1', 'pendiente');
INSERT INTO `pieza` VALUES ('21', '3903', 'Retrovisor', 'toyota', null, null, null, '1', 'pendiente');
INSERT INTO `pieza` VALUES ('22', '3904', 'Techo', 'toyota', null, null, null, '1', 'pendiente');
INSERT INTO `pieza` VALUES ('23', '3905', 'Capo', 'toyota', null, null, null, '1', 'pendiente');
INSERT INTO `pieza` VALUES ('24', '3906', 'Retrovisor', 'toyota', null, null, null, '4', 'pendiente');
INSERT INTO `pieza` VALUES ('25', '3907', 'Capo', 'toyota', null, null, null, '4', 'pendiente');
INSERT INTO `pieza` VALUES ('26', '3908', 'Retrovisor', 'toyota', null, null, null, '1', 'pendiente');
INSERT INTO `pieza` VALUES ('27', '3909', 'Techo', 'toyota', null, null, null, '1', 'pendiente');

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

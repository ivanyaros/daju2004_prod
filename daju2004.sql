-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema daju_2004
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `daju_2004` ;

-- -----------------------------------------------------
-- Schema daju_2004
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `daju_2004` DEFAULT CHARACTER SET utf8 ;
USE `daju_2004` ;

-- -----------------------------------------------------
-- Table `daju_2004`.`proveedores_clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`proveedores_clientes` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`proveedores_clientes` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `direccion_fiscal` VARCHAR(255) NULL,
  `telefono` VARCHAR(255) NULL,
  `fax` VARCHAR(255) NULL,
  `correo` VARCHAR(255) NULL,
  `pagina_web` VARCHAR(255) NULL,
  `NIF_CIF` VARCHAR(20) NULL,
  `observaciones` VARCHAR(1024) NULL,
  `proveedor_cliente` TINYINT(1) NULL DEFAULT 0,
  `visible` TINYINT(1) NOT NULL DEFAULT 1,
  `persona_contacto` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`direcciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`direcciones` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`direcciones` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `proveedores_cliente_id` INT UNSIGNED NULL,
  `direccion` VARCHAR(255) NULL,
  `telefono` VARCHAR(255) NULL,
  `fax` VARCHAR(255) NULL,
  `correo` VARCHAR(255) NULL,
  `pagina_web` VARCHAR(255) NULL,
  `observaciones` VARCHAR(2505) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_direcciones_proveedores_clientes_idx` (`proveedores_cliente_id` ASC),
  CONSTRAINT `fk_direcciones_proveedores_clientes`
    FOREIGN KEY (`proveedores_cliente_id`)
    REFERENCES `daju_2004`.`proveedores_clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`ivas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`ivas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`ivas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `valor` FLOAT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`monedas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`monedas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`monedas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `valor` FLOAT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`centros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`centros` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`centros` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `direccion` VARCHAR(255) NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`entradas_de_materiales`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`entradas_de_materiales` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`entradas_de_materiales` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `proveedores_cliente_id` INT UNSIGNED NULL,
  `referencia` VARCHAR(255) NULL,
  `observaciones` VARCHAR(255) NULL,
  `albaran` VARCHAR(255) NULL,
  `fecha_envio` DATETIME NULL,
  `centro_id` INT UNSIGNED NULL,
  `fecha_recepcion` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_entradas_material_proveedores_clientes1_idx` (`proveedores_cliente_id` ASC),
  INDEX `fk_entradas_material_centros1_idx` (`centro_id` ASC),
  CONSTRAINT `fk_entradas_material_proveedores_clientes1`
    FOREIGN KEY (`proveedores_cliente_id`)
    REFERENCES `daju_2004`.`proveedores_clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entradas_material_centros1`
    FOREIGN KEY (`centro_id`)
    REFERENCES `daju_2004`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`familias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`familias` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`familias` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`material`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`material` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`material` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `referencia_proveedor` VARCHAR(255) NULL,
  `familia_id` INT UNSIGNED NULL,
  `longitud` FLOAT NULL,
  `anchura` FLOAT NULL,
  `profundidad` FLOAT NULL,
  `color` VARCHAR(255) NULL,
  `gramaje` FLOAT NULL,
  `peso_ud` FLOAT NULL,
  `unidades_embalaje` INT UNSIGNED NULL,
  `precio` FLOAT NULL,
  `moneda_id` INT UNSIGNED NULL,
  `iva_id` INT UNSIGNED NULL,
  `observaciones` VARCHAR(1024) NULL,
  `visible` TINYINT(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  INDEX `fk_material_ivas1_idx` (`iva_id` ASC),
  INDEX `fk_material_monedas1_idx` (`moneda_id` ASC),
  INDEX `fk_material_familias1_idx` (`familia_id` ASC),
  CONSTRAINT `fk_material_ivas10`
    FOREIGN KEY (`iva_id`)
    REFERENCES `daju_2004`.`ivas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_material_monedas10`
    FOREIGN KEY (`moneda_id`)
    REFERENCES `daju_2004`.`monedas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_material_familias1`
    FOREIGN KEY (`familia_id`)
    REFERENCES `daju_2004`.`familias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`localizaciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`localizaciones` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`localizaciones` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `centro_id` INT UNSIGNED NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_localizaciones_centros1_idx` (`centro_id` ASC),
  CONSTRAINT `fk_localizaciones_centros1`
    FOREIGN KEY (`centro_id`)
    REFERENCES `daju_2004`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`materiales`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`materiales` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`materiales` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `material_id` INT UNSIGNED NULL,
  `fecha_entega` DATETIME NULL,
  `localizacione_id` INT UNSIGNED NULL,
  `entradas_de_materiale_id` INT UNSIGNED NULL,
  `bobina_lote` TINYINT(1) NULL DEFAULT 0,
  `bobinas` INT NULL,
  `bobinas_actual` INT NULL,
  `lote` VARCHAR(255) NULL,
  `numero_bobina` INT NULL,
  `taras` INT NULL,
  `taras_reales` INT NULL,
  `taras_mediciones` VARCHAR(255) NULL,
  `metros_brutos` FLOAT NULL,
  `metros_netos` FLOAT NULL,
  `metros_actuales` FLOAT NULL,
  `metros_utiles` FLOAT NULL,
  `scrap` FLOAT NULL,
  `en_uso` TINYINT(1) NULL DEFAULT 0,
  `terminado` TINYINT(1) NULL,
  `peso_ud` FLOAT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_materiales_entradas_material1_idx` (`entradas_de_materiale_id` ASC),
  INDEX `fk_materiales_material1_idx` (`material_id` ASC),
  INDEX `fk_materiales_localizaciones1_idx` (`localizacione_id` ASC),
  CONSTRAINT `fk_materiales_entradas_material1`
    FOREIGN KEY (`entradas_de_materiale_id`)
    REFERENCES `daju_2004`.`entradas_de_materiales` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_materiales_material1`
    FOREIGN KEY (`material_id`)
    REFERENCES `daju_2004`.`material` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_materiales_localizaciones1`
    FOREIGN KEY (`localizacione_id`)
    REFERENCES `daju_2004`.`localizaciones` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`proveedores_material`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`proveedores_material` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`proveedores_material` (
  `id` INT UNSIGNED NOT NULL,
  `proveedores_cliente_id` INT UNSIGNED NULL,
  `material_id` INT UNSIGNED NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_proveedores_material_proveedores_clientes1_idx` (`proveedores_cliente_id` ASC),
  INDEX `fk_proveedores_material_material1_idx` (`material_id` ASC),
  CONSTRAINT `fk_proveedores_material_proveedores_clientes1`
    FOREIGN KEY (`proveedores_cliente_id`)
    REFERENCES `daju_2004`.`proveedores_clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proveedores_material_material1`
    FOREIGN KEY (`material_id`)
    REFERENCES `daju_2004`.`material` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`producto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`producto` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`producto` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `referencia_proveedor` VARCHAR(255) NULL,
  `familia_id` INT UNSIGNED NULL,
  `precio` FLOAT NULL,
  `moneda_id` INT UNSIGNED NULL,
  `iva_id` INT UNSIGNED NULL,
  `observaciones` VARCHAR(255) NULL,
  `visible` TINYINT(1) NULL DEFAULT 1,
  `peso` FLOAT NULL,
  `cantidad` INT NULL,
  `descripcion` VARCHAR(255) NULL,
  `larga` VARCHAR(2550) NULL,
  `coste` FLOAT NULL,
  `ancho` FLOAT NULL,
  `largo` FLOAT NULL,
  `tolerancia` FLOAT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_producto_familias1_idx` (`familia_id` ASC),
  INDEX `fk_producto_monedas1_idx` (`moneda_id` ASC),
  INDEX `fk_producto_ivas1_idx` (`iva_id` ASC),
  CONSTRAINT `fk_producto_familias1`
    FOREIGN KEY (`familia_id`)
    REFERENCES `daju_2004`.`familias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_monedas1`
    FOREIGN KEY (`moneda_id`)
    REFERENCES `daju_2004`.`monedas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_ivas1`
    FOREIGN KEY (`iva_id`)
    REFERENCES `daju_2004`.`ivas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`proceso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`proceso` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`proceso` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `familia_id` INT UNSIGNED NULL,
  `precio` FLOAT NULL,
  `moneda_id` INT UNSIGNED NULL,
  `iva_id` INT UNSIGNED NULL,
  `observaciones` VARCHAR(255) NULL,
  `visible` TINYINT(1) NULL DEFAULT 1,
  `enlaces` VARCHAR(255) NULL,
  `centro_id` INT UNSIGNED NULL,
  `coste_tiempo` FLOAT NULL,
  `coste_operaciones` VARCHAR(45) NULL,
  `descripcion` VARCHAR(255) NULL,
  `larga` VARCHAR(2500) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_proceso_ivas1_idx` (`iva_id` ASC),
  INDEX `fk_proceso_monedas1_idx` (`moneda_id` ASC),
  INDEX `fk_proceso_familias1_idx` (`familia_id` ASC),
  INDEX `fk_proceso_centros1_idx` (`centro_id` ASC),
  CONSTRAINT `fk_proceso_ivas1`
    FOREIGN KEY (`iva_id`)
    REFERENCES `daju_2004`.`ivas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_monedas1`
    FOREIGN KEY (`moneda_id`)
    REFERENCES `daju_2004`.`monedas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_familias1`
    FOREIGN KEY (`familia_id`)
    REFERENCES `daju_2004`.`familias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_centros1`
    FOREIGN KEY (`centro_id`)
    REFERENCES `daju_2004`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`proceso_producto_entrada`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`proceso_producto_entrada` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`proceso_producto_entrada` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `proceso_id` INT UNSIGNED NULL,
  `producto_id` INT UNSIGNED NULL,
  `cantidad` INT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_proceso_has_producto_producto1_idx` (`producto_id` ASC),
  INDEX `fk_proceso_has_producto_proceso1_idx` (`proceso_id` ASC),
  CONSTRAINT `fk_proceso_has_producto_proceso1`
    FOREIGN KEY (`proceso_id`)
    REFERENCES `daju_2004`.`proceso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_has_producto_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `daju_2004`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'Entradas salidas productos en los procesos\n';


-- -----------------------------------------------------
-- Table `daju_2004`.`proceso_material_entrada`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`proceso_material_entrada` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`proceso_material_entrada` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `proceso_id` INT UNSIGNED NULL,
  `material_id` INT UNSIGNED NULL,
  `metros_lineales` FLOAT NULL,
  `metros_cuadrados` FLOAT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_proceso_has_material_material1_idx` (`material_id` ASC),
  INDEX `fk_proceso_has_material_proceso1_idx` (`proceso_id` ASC),
  CONSTRAINT `fk_proceso_has_material_proceso1`
    FOREIGN KEY (`proceso_id`)
    REFERENCES `daju_2004`.`proceso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_has_material_material1`
    FOREIGN KEY (`material_id`)
    REFERENCES `daju_2004`.`material` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`estados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`estados` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`estados` (
  `id` MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `descripcion` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`prioridades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`prioridades` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`prioridades` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`ordens`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`ordens` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`ordens` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `cantidad` INT NULL,
  `fecha_creacion` DATETIME NULL,
  `fecha_terminacion` DATETIME NULL,
  `estado_id` MEDIUMINT UNSIGNED NULL,
  `centro_id` INT UNSIGNED NULL,
  `proceso_id` INT UNSIGNED NOT NULL,
  `scrap` FLOAT NULL,
  `coste_operario` FLOAT NULL,
  `observaciones` VARCHAR(255) NULL,
  `prioridade_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ordenes_produccion_centros1_idx` (`centro_id` ASC),
  INDEX `fk_ordenes_produccion_estados1_idx` (`estado_id` ASC),
  INDEX `fk_ordenes_produccion_proceso1_idx` (`proceso_id` ASC),
  INDEX `fk_ordens_prioridades1_idx` (`prioridade_id` ASC),
  CONSTRAINT `fk_ordenes_produccion_centros1`
    FOREIGN KEY (`centro_id`)
    REFERENCES `daju_2004`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordenes_produccion_estados1`
    FOREIGN KEY (`estado_id`)
    REFERENCES `daju_2004`.`estados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordenes_produccion_proceso1`
    FOREIGN KEY (`proceso_id`)
    REFERENCES `daju_2004`.`proceso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordens_prioridades1`
    FOREIGN KEY (`prioridade_id`)
    REFERENCES `daju_2004`.`prioridades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = 'orden de produccion o de trabajo.\nSe relaciona con el proceso, donde se describen que tipos de materiales y productos se gastan y cuanto salen.\nquiero relacionar también las piezas ok y no ok .';


-- -----------------------------------------------------
-- Table `daju_2004`.`objetos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`objetos` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`objetos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `producto_id` INT UNSIGNED NULL,
  `numero_serie` INT NULL,
  `referencia` VARCHAR(255) NULL,
  `orden_id` INT UNSIGNED NOT NULL,
  `lote` VARCHAR(255) NULL,
  `localizacione_id` INT UNSIGNED NOT NULL,
  `coste` FLOAT NULL,
  `defectuosos` INT NULL,
  `peso` FLOAT NULL,
  `observaciones` VARCHAR(255) NULL,
  `envio_id` INT UNSIGNED NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_productos_producto1_idx` (`producto_id` ASC),
  INDEX `fk_objetos_ordens1_idx` (`orden_id` ASC),
  INDEX `fk_objetos_localizaciones1_idx` (`localizacione_id` ASC),
  CONSTRAINT `fk_productos_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `daju_2004`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_objetos_ordens1`
    FOREIGN KEY (`orden_id`)
    REFERENCES `daju_2004`.`ordens` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_objetos_localizaciones1`
    FOREIGN KEY (`localizacione_id`)
    REFERENCES `daju_2004`.`localizaciones` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`maquinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`maquinas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`maquinas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `observaciones` VARCHAR(255) NULL,
  `coste_operacion` FLOAT NULL,
  `coste_tiempo` FLOAT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`utensilios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`utensilios` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`utensilios` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`pedidos_empresas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`pedidos_empresas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`pedidos_empresas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `referencia` VARCHAR(255) NULL,
  `proveedores_cliente_id` INT UNSIGNED NULL,
  `fecha` DATETIME NULL,
  `albaran` VARCHAR(255) NULL,
  `observaciones` VARCHAR(255) NULL,
  `terminado` TINYINT(1) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pedidos_empresa_proveedores_clientes1_idx` (`proveedores_cliente_id` ASC),
  CONSTRAINT `fk_pedidos_empresa_proveedores_clientes1`
    FOREIGN KEY (`proveedores_cliente_id`)
    REFERENCES `daju_2004`.`proveedores_clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`envios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`envios` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`envios` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `proveedores_cliente_id` INT UNSIGNED NULL,
  `fecha_pedido` DATETIME NULL,
  `fecha_envio` DATETIME NULL,
  `albaran` VARCHAR(255) NULL,
  `pedidos_empresa_id` INT UNSIGNED NULL,
  `centro_id` INT UNSIGNED NULL,
  `fecha_entrega` DATETIME NULL,
  `observaciones` VARCHAR(255) NULL,
  `direccione_id` INT UNSIGNED NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_salidas_productos_proveedores_clientes1_idx` (`proveedores_cliente_id` ASC),
  INDEX `fk_salidas_productos_pedidos_empresa1_idx` (`pedidos_empresa_id` ASC),
  INDEX `fk_salidas_productos_centros1_idx` (`centro_id` ASC),
  INDEX `fk_salidas_objetos_direcciones1_idx` (`direccione_id` ASC),
  CONSTRAINT `fk_salidas_productos_proveedores_clientes1`
    FOREIGN KEY (`proveedores_cliente_id`)
    REFERENCES `daju_2004`.`proveedores_clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_salidas_productos_pedidos_empresa1`
    FOREIGN KEY (`pedidos_empresa_id`)
    REFERENCES `daju_2004`.`pedidos_empresas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_salidas_productos_centros1`
    FOREIGN KEY (`centro_id`)
    REFERENCES `daju_2004`.`centros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_salidas_objetos_direcciones1`
    FOREIGN KEY (`direccione_id`)
    REFERENCES `daju_2004`.`direcciones` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`pedidos_productos_detalle`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`pedidos_productos_detalle` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`pedidos_productos_detalle` (
  `id` INT UNSIGNED NOT NULL,
  `pedidos_empresa_id` INT UNSIGNED NULL,
  `producto_id` INT UNSIGNED NULL,
  `cantidad` INT NULL,
  `fecha` DATETIME NULL,
  `observaciones` VARCHAR(255) NULL,
  `prioridade_id` INT NULL,
  `terminado` TINYINT(1) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pedidos_empresas_producto_prioridades1_idx` (`prioridade_id` ASC),
  INDEX `fk_pedidos_productos_detalle_pedidos_empresas1_idx` (`pedidos_empresa_id` ASC),
  INDEX `fk_pedidos_productos_detalle_producto1_idx` (`producto_id` ASC),
  CONSTRAINT `fk_pedidos_empresas_producto_prioridades1`
    FOREIGN KEY (`prioridade_id`)
    REFERENCES `daju_2004`.`prioridades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_productos_detalle_pedidos_empresas1`
    FOREIGN KEY (`pedidos_empresa_id`)
    REFERENCES `daju_2004`.`pedidos_empresas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_productos_detalle_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `daju_2004`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`estados_de_ordens`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`estados_de_ordens` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`estados_de_ordens` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `orden_id` INT UNSIGNED NULL,
  `estado_id` MEDIUMINT UNSIGNED NULL,
  `fecha_inicio` DATETIME NULL,
  `fecha_fin` DATETIME NULL,
  `descripcion` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_estados_de_ordenes_ordens1_idx` (`orden_id` ASC),
  INDEX `fk_estados_de_ordenes_estados1_idx` (`estado_id` ASC),
  CONSTRAINT `fk_estados_de_ordenes_ordens1`
    FOREIGN KEY (`orden_id`)
    REFERENCES `daju_2004`.`ordens` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estados_de_ordenes_estados1`
    FOREIGN KEY (`estado_id`)
    REFERENCES `daju_2004`.`estados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`users` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `apellidos` VARCHAR(255) NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  `coste_operacion` FLOAT NULL,
  `coste_tiempo` FLOAT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`usuarios_en_estados_orden`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`usuarios_en_estados_orden` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`usuarios_en_estados_orden` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `estados_de_orden_id` INT UNSIGNED NULL,
  `user_id` INT UNSIGNED NULL,
  `parte` FLOAT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuarios_en_estados_orden_estados_de_ordens1_idx` (`estados_de_orden_id` ASC),
  INDEX `fk_usuarios_en_estados_orden_usuarios1_idx` (`user_id` ASC),
  CONSTRAINT `fk_usuarios_en_estados_orden_estados_de_ordens1`
    FOREIGN KEY (`estados_de_orden_id`)
    REFERENCES `daju_2004`.`estados_de_ordens` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_en_estados_orden_usuarios1`
    FOREIGN KEY (`user_id`)
    REFERENCES `daju_2004`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`maquinas_usadas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`maquinas_usadas` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`maquinas_usadas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `estados_de_orden_id` INT UNSIGNED NULL,
  `maquina_id` INT UNSIGNED NULL,
  `operaciones` INT NULL,
  `uso` FLOAT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_maquinas_usadas_estados_de_ordens1_idx` (`estados_de_orden_id` ASC),
  INDEX `fk_maquinas_usadas_maquinas1_idx` (`maquina_id` ASC),
  CONSTRAINT `fk_maquinas_usadas_estados_de_ordens1`
    FOREIGN KEY (`estados_de_orden_id`)
    REFERENCES `daju_2004`.`estados_de_ordens` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_maquinas_usadas_maquinas1`
    FOREIGN KEY (`maquina_id`)
    REFERENCES `daju_2004`.`maquinas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`utensilios_usados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`utensilios_usados` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`utensilios_usados` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `estados_de_orden_id` INT UNSIGNED NULL,
  `utensilio_id` INT UNSIGNED NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_utensilios_usados_estados_de_ordens1_idx` (`estados_de_orden_id` ASC),
  INDEX `fk_utensilios_usados_utensilios1_idx` (`utensilio_id` ASC),
  CONSTRAINT `fk_utensilios_usados_estados_de_ordens1`
    FOREIGN KEY (`estados_de_orden_id`)
    REFERENCES `daju_2004`.`estados_de_ordens` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_utensilios_usados_utensilios1`
    FOREIGN KEY (`utensilio_id`)
    REFERENCES `daju_2004`.`utensilios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`proceso_producto_salida`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`proceso_producto_salida` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`proceso_producto_salida` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `proceso_id` INT UNSIGNED NULL,
  `producto_id` INT UNSIGNED NULL,
  `cantidad` INT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_proceso_has_producto_producto2_idx` (`producto_id` ASC),
  INDEX `fk_proceso_has_producto_proceso2_idx` (`proceso_id` ASC),
  CONSTRAINT `fk_proceso_has_producto_proceso2`
    FOREIGN KEY (`proceso_id`)
    REFERENCES `daju_2004`.`proceso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_has_producto_producto2`
    FOREIGN KEY (`producto_id`)
    REFERENCES `daju_2004`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`materiales_entrada`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`materiales_entrada` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`materiales_entrada` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `objeto_id` INT UNSIGNED NULL,
  `materiale_id` INT UNSIGNED NULL,
  `cantidad_producida` INT NULL,
  `metros_gastados` FLOAT NULL,
  `metros_utiles` FLOAT NULL,
  `scrap` FLOAT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_objetos_has_materiales_materiales1_idx` (`materiale_id` ASC),
  INDEX `fk_objetos_has_materiales_objetos1_idx` (`objeto_id` ASC),
  CONSTRAINT `fk_objetos_has_materiales_objetos1`
    FOREIGN KEY (`objeto_id`)
    REFERENCES `daju_2004`.`objetos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_objetos_has_materiales_materiales1`
    FOREIGN KEY (`materiale_id`)
    REFERENCES `daju_2004`.`materiales` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`objetos_entrada`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`objetos_entrada` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`objetos_entrada` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `entrada_id` INT UNSIGNED NULL,
  `salida_id` INT UNSIGNED NULL,
  `cantidad_entrada` INT NULL,
  `cantidad_producida` INT NULL,
  `observaciones` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_objetos_has_objetos_objetos2_idx` (`salida_id` ASC),
  INDEX `fk_objetos_has_objetos_objetos1_idx` (`entrada_id` ASC),
  CONSTRAINT `fk_objetos_has_objetos_objetos1`
    FOREIGN KEY (`entrada_id`)
    REFERENCES `daju_2004`.`objetos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_objetos_has_objetos_objetos2`
    FOREIGN KEY (`salida_id`)
    REFERENCES `daju_2004`.`objetos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `daju_2004`.`envios_objetos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `daju_2004`.`envios_objetos` ;

CREATE TABLE IF NOT EXISTS `daju_2004`.`envios_objetos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `envio_id` INT UNSIGNED NULL,
  `objeto_id` INT UNSIGNED NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_envios_has_objetos_objetos1_idx` (`objeto_id` ASC),
  INDEX `fk_envios_has_objetos_envios1_idx` (`envio_id` ASC),
  CONSTRAINT `fk_envios_has_objetos_envios1`
    FOREIGN KEY (`envio_id`)
    REFERENCES `daju_2004`.`envios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_envios_has_objetos_objetos1`
    FOREIGN KEY (`objeto_id`)
    REFERENCES `daju_2004`.`objetos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

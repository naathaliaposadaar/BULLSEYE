-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`pais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pais` (
  `id_pais` INT NOT NULL AUTO_INCREMENT,
  `nombre_pais` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_pais`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`region`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`region` (
  `id_region` INT NOT NULL AUTO_INCREMENT,
  `nombre_region` VARCHAR(45) NOT NULL,
  `id_pais` INT NOT NULL,
  `codigo_postal` VARCHAR(45) NOT NULL,
  INDEX `id_pais_idx` (`id_pais` ASC),
  PRIMARY KEY (`id_region`),
  CONSTRAINT `pais`
    FOREIGN KEY (`id_pais`)
    REFERENCES `mydb`.`pais` (`id_pais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`seccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`seccion` (
  `id_seccion` INT NOT NULL AUTO_INCREMENT,
  `nombre_seccion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_seccion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nombre_categoria` VARCHAR(45) NOT NULL,
  `id_seccion` INT NOT NULL,
  PRIMARY KEY (`id_categoria`),
  INDEX `id_seccion_idx` (`id_seccion` ASC),
  CONSTRAINT `seccion`
    FOREIGN KEY (`id_seccion`)
    REFERENCES `mydb`.`seccion` (`id_seccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`despacho`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`despacho` (
  `id_despacho` INT NOT NULL AUTO_INCREMENT,
  `dias_despacho` INT NOT NULL,
  PRIMARY KEY (`id_despacho`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`promocion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`promocion` (
  `id_promocion` INT NOT NULL AUTO_INCREMENT,
  `porcentaje_descuento` INT NOT NULL,
  PRIMARY KEY (`id_promocion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`producto` (
  `id_ producto` INT NOT NULL,
  `nombre_producto` VARCHAR(45) NOT NULL,
  `precio_producto` INT NOT NULL,
  `stock_producto` INT NOT NULL,
  `id_categoria` INT NOT NULL,
  `id_despacho` INT NOT NULL,
  `id_promocion` INT NULL,
  PRIMARY KEY (`id_ producto`),
  INDEX `id_categoria_idx` (`id_categoria` ASC),
  INDEX `id_despacho_idx` (`id_despacho` ASC),
  INDEX `id_promocion_idx` (`id_promocion` ASC),
  CONSTRAINT `categoria`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `mydb`.`categoria` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `despacho`
    FOREIGN KEY (`id_despacho`)
    REFERENCES `mydb`.`despacho` (`id_despacho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `promocion`
    FOREIGN KEY (`id_promocion`)
    REFERENCES `mydb`.`promocion` (`id_promocion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`empresa` (
  `id_empresa` INT NOT NULL AUTO_INCREMENT,
  `rut_empresa` VARCHAR(10) NOT NULL,
  `dv_empresa` CHAR(1) NOT NULL,
  `foma_juridica` VARCHAR(45) NOT NULL,
  `tipo_empresa` VARCHAR(45) NOT NULL,
  `email_empresa` VARCHAR(45) NOT NULL,
  `direccion_empresa` VARCHAR(45) NOT NULL,
  `id_region` INT NOT NULL,
  `id_producto` INT NOT NULL,
  PRIMARY KEY (`id_empresa`),
  INDEX `region_idx` (`id_region` ASC),
  INDEX `producto_idx` (`id_producto` ASC),
  CONSTRAINT `region`
    FOREIGN KEY (`id_region`)
    REFERENCES `mydb`.`region` (`id_region`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `producto`
    FOREIGN KEY (`id_producto`)
    REFERENCES `mydb`.`producto` (`id_ producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`contacto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`contacto` (
  `id_contacto` INT NOT NULL AUTO_INCREMENT,
  `nombre_contacto` VARCHAR(45) NOT NULL,
  `email_contacto` VARCHAR(25) NOT NULL,
  `apellido_contacto` VARCHAR(45) NOT NULL,
  `telefono_contacto` DECIMAL(10,0) NOT NULL,
  `id_empresa` INT NULL,
  `tipo_usuario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_contacto`),
  INDEX `empresa_idx` (`id_empresa` ASC),
  CONSTRAINT `empresa`
    FOREIGN KEY (`id_empresa`)
    REFERENCES `mydb`.`empresa` (`id_empresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`venta` (
  `id_venta` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NULL,
  `unidades` INT NOT NULL,
  `total_venta` INT NOT NULL,
  `id_producto` INT NOT NULL,
  PRIMARY KEY (`id_venta`),
  INDEX `producto_idx` (`id_producto` ASC),
  CONSTRAINT `producto`
    FOREIGN KEY (`id_producto`)
    REFERENCES `mydb`.`producto` (`id_ producto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

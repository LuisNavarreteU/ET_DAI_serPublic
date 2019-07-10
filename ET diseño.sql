-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema saludPublica
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema saludPublica
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `saludPublica` DEFAULT CHARACTER SET utf8mb4 ;
USE `saludPublica` ;

-- -----------------------------------------------------
-- Table `saludPublica`.`EMPRESA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saludPublica`.`EMPRESA` (
  `codEm` INT NOT NULL,
  `rutEm` VARCHAR(10) NOT NULL,
  `nomEm` VARCHAR(30) NOT NULL,
  `contraseñaEM` VARCHAR(45) NOT NULL,
  `direccionEm` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codEm`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `saludPublica`.`CONTAACTO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saludPublica`.`CONTACTO` (
  `rutC` VARCHAR(10) NOT NULL,
  `nomCn` VARCHAR(45) NOT NULL,
  `correoCn` VARCHAR(45) NOT NULL,
  `telefono` INT NOT NULL,
  `codEm` INT NOT NULL,
  PRIMARY KEY (`rutC`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `saludPublica`.`PARTICULAR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saludPublica`.`PARTICULAR` (
  `codPa` INT NOT NULL,
  `rutPa` VARCHAR(10) NOT NULL,
  `contraseñaPa` VARCHAR(45) NOT NULL,
  `nomPa` VARCHAR(45) NOT NULL,
  `direccionPa` VARCHAR(45) NOT NULL,
  `correoPa` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codPa`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `saludPublica`.`EMPLEADO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saludPublica`.`EMPLEADO` (
  `rutEmpl` VARCHAR(10) NOT NULL,
  `nomEmpl` VARCHAR(45) NOT NULL,
  `contraseñaEmpl` VARCHAR(45) NOT NULL,
  `categoriaEmpl` VARCHAR(1) NOT NULL,
  PRIMARY KEY (`rutEmpl`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `saludPublica`.`MUESTRA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saludPublica`.`MUESTRA` (
  `codMu` INT NOT NULL,
  `feRecep` DATE NOT NULL,
  `temperatura` DECIMAL(3,1) NOT NULL,
  `cantMu` VARCHAR(45) NOT NULL,
  `idEm` INT NULL,
  `idPa` INT NULL,
  `rutRe` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`codMu`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `saludPublica`.`TIPOANALISIS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saludPublica`.`TIPOANALISIS` (
  `codTi` INT NOT NULL AUTO_INCREMENT,
  `nomTi` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codTi`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `saludPublica`.`RESULTADO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saludPublica`.`RESULTADO` (
  `idTi` INT NOT NULL,
  `idAn` INT NULL,
  `feReg` DATE NULL,
  `PPM` INT NULL,
  `estadoRes` BIT NULL,
  `rutEmpl` VARCHAR(10) NULL)
ENGINE = InnoDB;

INSERT INTO `saludpublica`.`tipoanalisis` (`codTi`, `nomTi`) VALUES ('1', 'Metales Pesados');
INSERT INTO `saludpublica`.`tipoanalisis` (`codTi`, `nomTi`) VALUES ('2', 'Plaguisidas');
INSERT INTO `saludpublica`.`tipoanalisis` (`codTi`, `nomTi`) VALUES ('3', 'Marea Roja');
INSERT INTO `saludpublica`.`tipoanalisis` (`codTi`, `nomTi`) VALUES ('4', 'Micotoxina');
INSERT INTO `saludpublica`.`tipoanalisis` (`codTi`, `nomTi`) VALUES ('5', 'Bacterias Nocivas');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

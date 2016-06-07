-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema proyecto
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema proyecto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET utf8 ;
USE `proyecto` ;

-- -----------------------------------------------------
-- Table `proyecto`.`invitacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`invitacion` (
  `idinvitacion` INT NOT NULL AUTO_INCREMENT,
  `cod_invi` VARCHAR(45) NULL,
  PRIMARY KEY (`idinvitacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`plan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`plan` (
  `idplan` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `precio` DECIMAL(8,5) NOT NULL,
  PRIMARY KEY (`idplan`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `acumulado` DECIMAL(8,5) NULL,
  `invitacion_idinvitacion` INT NOT NULL,
  `plan_idplan` INT NOT NULL,
  PRIMARY KEY (`idusuario`),
  INDEX `fk_usuario_invitacion_idx` (`invitacion_idinvitacion` ASC),
  INDEX `fk_usuario_plan1_idx` (`plan_idplan` ASC),
  CONSTRAINT `fk_usuario_invitacion`
    FOREIGN KEY (`invitacion_idinvitacion`)
    REFERENCES `proyecto`.`invitacion` (`idinvitacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_plan1`
    FOREIGN KEY (`plan_idplan`)
    REFERENCES `proyecto`.`plan` (`idplan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`pago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`pago` (
  `idpago` INT NOT NULL AUTO_INCREMENT,
  `inicio` DATE NULL,
  `fin` DATE NULL,
  `metodo` VARCHAR(45) NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idpago`),
  INDEX `fk_pago_usuario1_idx` (`usuario_idusuario` ASC),
  CONSTRAINT `fk_pago_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `proyecto`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

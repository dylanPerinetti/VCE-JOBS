-- MySQL Script created by DylanPerinetti
-- Tue Apr 25 09:31:21 2023
-- Model: New Model    Version: 1.0

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`vce_user_profil_type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`vce_user_profil_type` ;

CREATE TABLE IF NOT EXISTS `mydb`.`vce_user_profil_type` (
  `idvce_user_profil_type` INT NOT NULL,
  `vce_user_profil_typecol` VARCHAR(45) NULL,
  PRIMARY KEY (`idvce_user_profil_type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vce_user_statut`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`vce_user_statut` ;

CREATE TABLE IF NOT EXISTS `mydb`.`vce_user_statut` (
  `idvce_user_statut` INT NOT NULL,
  `vce_user_statut_name` VARCHAR(45) NULL,
  PRIMARY KEY (`idvce_user_statut`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vce_user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`vce_user` ;

CREATE TABLE IF NOT EXISTS `mydb`.`vce_user` (
  `idvce_user` INT NOT NULL,
  `vce_user_fname` VARCHAR(45) NULL,
  `vce_user_lname` VARCHAR(256) NULL,
  `vce_user_vdn_id` VARCHAR(7) NULL,
  `vce_user_date_hiring` DATE NULL,
  `vce_user_date_leaving` DATE NULL,
  `vce_user_idprofil_type` INT NOT NULL,
  `vce_user_idstatut` INT NOT NULL,
  PRIMARY KEY (`idvce_user`),
  INDEX `fk_vce_user_vce_user_profil_type1_idx` (`vce_user_idprofil_type` ASC) VISIBLE,
  INDEX `fk_vce_user_vce_user_statut1_idx` (`vce_user_idstatut` ASC) VISIBLE,
  CONSTRAINT `fk_vce_user_vce_user_profil_type1`
    FOREIGN KEY (`vce_user_idprofil_type`)
    REFERENCES `mydb`.`vce_user_profil_type` (`idvce_user_profil_type`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vce_user_vce_user_statut1`
    FOREIGN KEY (`vce_user_idstatut`)
    REFERENCES `mydb`.`vce_user_statut` (`idvce_user_statut`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vce_user_history`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`vce_user_history` ;

CREATE TABLE IF NOT EXISTS `mydb`.`vce_user_history` (
  `idvce_user_history` INT NOT NULL,
  `vce_user_history_date_hiring` DATE NULL,
  `vce_user_history_date_leaving` DATE NULL,
  `vce_iduser` INT NOT NULL,
  `vce_user_history_idprofil_type` INT NOT NULL,
  PRIMARY KEY (`idvce_user_history`),
  INDEX `fk_vce_user_history_vce_user_idx` (`vce_iduser` ASC) VISIBLE,
  CONSTRAINT `fk_vce_iduser`
    FOREIGN KEY (`vce_iduser`)
    REFERENCES `mydb`.`vce_user` (`idvce_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vce_device_brand`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`vce_device_brand` ;

CREATE TABLE IF NOT EXISTS `mydb`.`vce_device_brand` (
  `idvce_device_brand` INT NOT NULL,
  `vce_device_brand_name` VARCHAR(45) NULL,
  PRIMARY KEY (`idvce_device_brand`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vce_device_type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`vce_device_type` ;

CREATE TABLE IF NOT EXISTS `mydb`.`vce_device_type` (
  `idvce_device_type` INT NOT NULL,
  `vce_device_type_name` VARCHAR(45) NULL,
  PRIMARY KEY (`idvce_device_type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vce_device_model`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`vce_device_model` ;

CREATE TABLE IF NOT EXISTS `mydb`.`vce_device_model` (
  `idvce_device_model` INT NOT NULL,
  `vce_device_model_name` VARCHAR(45) NULL,
  `vce_device_idbrand` INT NOT NULL,
  `vce_device_idtype` INT NOT NULL,
  PRIMARY KEY (`idvce_device_model`),
  INDEX `fk_vce_device_model_vce_device_brand1_idx` (`vce_device_idbrand` ASC) VISIBLE,
  INDEX `fk_vce_device_model_vce_device_type1_idx` (`vce_device_idtype` ASC) VISIBLE,
  CONSTRAINT `fk_vce_device_model_vce_device_brand1`
    FOREIGN KEY (`vce_device_idbrand`)
    REFERENCES `mydb`.`vce_device_brand` (`idvce_device_brand`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vce_device_model_vce_device_type1`
    FOREIGN KEY (`vce_device_idtype`)
    REFERENCES `mydb`.`vce_device_type` (`idvce_device_type`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vce_device_statut`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`vce_device_statut` ;

CREATE TABLE IF NOT EXISTS `mydb`.`vce_device_statut` (
  `idvce_device_statut` INT NOT NULL,
  `vce_device_statut_name` VARCHAR(45) NULL,
  PRIMARY KEY (`idvce_device_statut`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vce_device`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`vce_device` ;

CREATE TABLE IF NOT EXISTS `mydb`.`vce_device` (
  `idvce_device` INT NOT NULL,
  `vce_device_serial_number` VARCHAR(45) NULL,
  `vce_device_date_purchase` DATE NULL,
  `vce_device_date_end_guaranty` DATE NULL,
  `vce_device_date_retire` DATE NULL,
  `vce_device_date_assigne` DATE NULL,
  `vce_device_date_return` DATE NULL,
  `vce_device_idstatut` INT NOT NULL,
  `vce_user_iduser` INT NOT NULL,
  `vce_device_idmodel` INT NOT NULL,
  PRIMARY KEY (`idvce_device`),
  INDEX `fk_vce_device_vce_user1_idx` (`vce_user_iduser` ASC) VISIBLE,
  INDEX `fk_vce_device_vce_device_model1_idx` (`vce_device_idmodel` ASC) VISIBLE,
  INDEX `fk_vce_device_vce_device_statue1_idx` (`vce_device_idstatut` ASC) VISIBLE,
  CONSTRAINT `fk_vce_device_vce_user1`
    FOREIGN KEY (`vce_user_iduser`)
    REFERENCES `mydb`.`vce_user` (`idvce_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vce_device_vce_device_model1`
    FOREIGN KEY (`vce_device_idmodel`)
    REFERENCES `mydb`.`vce_device_model` (`idvce_device_model`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vce_device_vce_device_statue1`
    FOREIGN KEY (`vce_device_idstatut`)
    REFERENCES `mydb`.`vce_device_statut` (`idvce_device_statut`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`vce_device_history`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`vce_device_history` ;

CREATE TABLE IF NOT EXISTS `mydb`.`vce_device_history` (
  `idvce_device_history` INT NOT NULL,
  `vce_device_history_date_assigne` DATE NULL,
  `vce_device_history_date_return` DATE NULL,
  `vce_device_history_iduser` INT NOT NULL,
  `vce_device_idvce_device` INT NOT NULL,
  PRIMARY KEY (`idvce_device_history`),
  INDEX `fk_vce_device_history_vce_device1_idx` (`vce_device_idvce_device` ASC) VISIBLE,
  CONSTRAINT `fk_vce_device_history_vce_device1`
    FOREIGN KEY (`vce_device_idvce_device`)
    REFERENCES `mydb`.`vce_device` (`idvce_device`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

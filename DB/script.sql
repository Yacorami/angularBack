-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema instrudb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema instrudb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `instrudb` DEFAULT CHARACTER SET utf8 ;
USE `instrudb` ;

-- -----------------------------------------------------
-- Table `instrudb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `instrudb`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(16) NOT NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(32) NOT NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `instrudb`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `instrudb`.`category` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `instrudb`.`instrument`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `instrudb`.`instrument` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `description` VARCHAR(1000) NULL,
  `category_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_instrument_category1_idx` (`category_id` ASC),
  CONSTRAINT `fk_instrument_category1`
    FOREIGN KEY (`category_id`)
    REFERENCES `instrudb`.`category` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `instrudb`.`invoice`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `instrudb`.`invoice` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `amount` DOUBLE NULL,
  `instrument_id` INT(11) NOT NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_invoice_instrument_idx` (`instrument_id` ASC),
  INDEX `fk_invoice_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_invoice_instrument`
    FOREIGN KEY (`instrument_id`)
    REFERENCES `instrudb`.`instrument` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_invoice_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `instrudb`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

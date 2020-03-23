-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema base_teste
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema base_teste
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `base_teste` DEFAULT CHARACTER SET utf8mb4 ;
USE `base_teste` ;

-- -----------------------------------------------------
-- Table `base_teste`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `base_teste`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(90) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `acesso` INT UNSIGNED NOT NULL DEFAULT 1,
  `dt_ultimo_acesso` DATETIME NULL,
  `status` TINYINT NOT NULL DEFAULT 1,
  `dt_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `base_teste`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `base_teste`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario_id` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `sobrenome` VARCHAR(90) NOT NULL,
  `cpf` VARCHAR(11) NULL,
  `dt_nascimento` DATE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cliente_usuario_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_cliente_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `base_teste`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema git2revision
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema git2revision
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `git2revision` DEFAULT CHARACTER SET utf8 ;
USE `git2revision` ;

-- -----------------------------------------------------
-- Table `git2revision`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `git2revision`.`users` (
  `idusers` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(60) NOT NULL,
  `pwd` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`idusers`),
  UNIQUE INDEX `usersname_UNIQUE` (`login` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `git2revision`.`news`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `git2revision`.`news` (
  `idnews` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(100) NOT NULL,
  `texte` TEXT NOT NULL,
  `newsdate` DATETIME NULL DEFAULT NOW(),
  `users_idusers` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idnews`, `users_idusers`),
  INDEX `fk_news_users_idx` (`users_idusers` ASC),
  CONSTRAINT `fk_news_users`
    FOREIGN KEY (`users_idusers`)
    REFERENCES `git2revision`.`users` (`idusers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `git2revision`.`categ`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `git2revision`.`categ` (
  `idcateg` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(45) NULL,
  PRIMARY KEY (`idcateg`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `git2revision`.`news_has_categ`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `git2revision`.`news_has_categ` (
  `news_idnews` INT UNSIGNED NOT NULL,
  `categ_idcateg` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`news_idnews`, `categ_idcateg`),
  INDEX `fk_news_has_categ_categ1_idx` (`categ_idcateg` ASC),
  INDEX `fk_news_has_categ_news1_idx` (`news_idnews` ASC),
  CONSTRAINT `fk_news_has_categ_news1`
    FOREIGN KEY (`news_idnews`)
    REFERENCES `git2revision`.`news` (`idnews`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_news_has_categ_categ1`
    FOREIGN KEY (`categ_idcateg`)
    REFERENCES `git2revision`.`categ` (`idcateg`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

<?php

require_once(__DIR__ . "/../conn/conn.php");

$databaseCreator = "CREATE DATABASE IF NOT EXISTS `terresnoires`";
$table_repros = "CREATE TABLE IF NOT EXISTS `terresnoires`.`repros` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL,
    `sex` VARCHAR(10) NOT NULL,
    `birthdate` DATE NOT NULL,
    `insert` VARCHAR(50),
    `breeder` VARCHAR(255) NOT NULL DEFAULT 'du Domaine des Terres Noires',
    `adn` TINYINT(1) DEFAULT 1,
    `mainImg` VARCHAR(255) NOT NULL DEFAULT '../src/img/repro-default.jpg',
    PRIMARY KEY(`id`)
)
ENGINE = InnoDB;";
$table_users = "CREATE TABLE IF NOT EXISTS `terresnoires`.`users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(80) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `avatar` VARCHAR(255) NOT NULL DEFAULT '../src/img/user-default.jpg',
    `role` VARCHAR(20) NOT NULL DEFAULT 'user'
    PRIMARY KEY(`id`)
    )
ENGINE = InnoDB;";

$table_litters = "CREATE TABLE IF NOT EXISTS `terresnoires`.`litters` (
    `litterId` INT NOT NULL AUTO_INCREMENT,
    `mother` INT NOT NULL DEFAULT 1,
    `father` INT NOT NULL DEFAULT 1,
    `birthdate` DATE NOT NULL DEFAULT '2020-01-01',
    `numberOfPuppies` INT NOT NULL DEFAULT 1,
    `numberOfMales` INT,
    `numberOfFemales` INT,
    `numberLOF` VARCHAR(40) NOT NULL DEFAULT 'En cours d\'acquisition',
    `display` TINYINT DEFAULT 1,
    PRIMARY KEY(`litterId`),
    FOREIGN KEY (`mother`) REFERENCES repros(id),
    FOREIGN KEY (`father`) REFERENCES repros(id)
    )
ENGINE = InnoDB;";

$conn->exec($databaseCreator);
$conn->exec($table_repros);
// $conn->exec($table_users);
$conn->exec($table_litters);

<?php

require_once(__DIR__ . "/../content/Classes/RequestPDO.php");
$conn = new RequestPDO();


$databaseCreator = "CREATE DATABASE IF NOT EXISTS `terresnoires`";
$table_repros = "CREATE TABLE IF NOT EXISTS `terresnoires`.`repros` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL,
    `sex` VARCHAR(10) NOT NULL,
    `birthdate` DATE NOT NULL,
    `insert` VARCHAR(50),
    `notmydog` TINYINT(1) NOT NULL DEFAULT FALSE,
    `breeder` VARCHAR(255) NOT NULL DEFAULT 'du Domaine des Terres Noires',
    `adn` TINYINT(1) DEFAULT 1,
    `mainImg` VARCHAR(255) NOT NULL DEFAULT '../src/img/repro-default.jpg',
    PRIMARY KEY(id)
)
ENGINE = InnoDB;";
$table_users = "CREATE TABLE IF NOT EXISTS `terresnoires`.`users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(80) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `avatar` VARCHAR(255) NOT NULL DEFAULT '../src/img/user-default.jpg',
    `role` VARCHAR(20) NOT NULL DEFAULT 'user',
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

$table_puppies = "CREATE TABLE IF NOT EXISTS `terresnoires`.`puppies` (
    `puppyID` INT NOT NULL AUTO_INCREMENT,
    `litter` INT NOT NULL,
    `name` VARCHAR(20) NOT NULL,
    `sex` VARCHAR(10) NOT NULL,
    `color` VARCHAR(50) NOT NULL DEFAULT 'Noir', 
    `necklace` VARCHAR(20) NOT NULL DEFAULT '',
    `available` VARCHAR(20) NOT NULL DEFAULT 'Disponible',
    `mainImg` VARCHAR(255) NOT NULL DEFAULT '../src/img/puppy-default.jpg',
    `display` TINYINT(1) DEFAULT 1,
    PRIMARY KEY(`puppyID`),
    FOREIGN KEY(`litter`) REFERENCES litters(litterId)
)
ENGINE = InnoDB;";

$table_diapos = "CREATE TABLE IF NOT EXISTS `terresnoires`.`diapos` (
    `diapoID` INT NOT NULL AUTO_INCREMENT,
    `path` VARCHAR(100) NOT NULL,
    `reproID` INT,
    `puppyID` INT,
    PRIMARY KEY(`diapoID`),
    FOREIGN KEY(`reproID`) REFERENCES repros(id),
    FOREIGN KEY(`puppyID`) REFERENCES puppies(puppyID)
)
ENGINE = InnoDB;";

if ($pdo = $conn->connect()) {
    $pdo->exec($databaseCreator);
    $pdo->exec($table_repros);
    $pdo->exec($table_users);
    $pdo->exec($table_litters);
    $pdo->exec($table_puppies);
    $pdo->exec($table_diapos);
} else {
    echo "Impossible de se connecter à la base de données";
}

<?php

function getAllRepros()
{
    return "SELECT * FROM `repros`";
}
function getAllReprosAreMyDogs()
{
    return "SELECT * FROM `repros` WHERE notMyDog = false";
}
function getReproFromID()
{
    return "SELECT * FROM `repros` WHERE id = :reproID";
}
function getReprosWithPuppies()
{
    return "SELECT repros.* FROM `repros` JOIN litters ON repros.id = litters.mother WHERE repros.sex = 'Female' AND litters.display = 1";
}
function createRepro()
{
    return "INSERT INTO `repros` (
        name, 
        sex, 
        birthdate, 
        `insert`, 
        breeder, 
        adn,
        notMyDog,
        mainImg) 
        VALUES (
            :name, 
            :sex, 
            :birthdate, 
            :insert, 
            :breeder, 
            :adn, 
            :notMyDog,
            :mainImg)";
}
function manageRepro()
{
    return "UPDATE `repros` SET 
    name = :name,
    sex = :sex,
    birthdate = :birthdate,
    `insert` = :insert,
    breeder = :breeder,
    adn = :adn,
    notMyDog = :notMyDog,
    mainImg = :mainImg WHERE id = :reproID";
}

function getAllMalesRepro()
{
    return "SELECT * FROM `repros` WHERE sex = 'Male'";
}
function getAllFemalesRepro()
{
    return "SELECT * FROM `repros` WHERE sex = 'Female'";
}
function deleteReproFromId()
{
    return "DELETE FROM `repros` WHERE id = :reproID";
}
function saveReproDiapo()
{
    return "INSERT INTO `diapos` (path, reproID) VALUES (:path, :reproID)";
}

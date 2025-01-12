<?php

function getAllRepros()
{
    return "SELECT * FROM `repros` WHERE retirement = false ORDER BY `sex` ASC, `birthdate` ASC";
}
function getAllRetirements()
{
    return "SELECT * FROM `repros` WHERE retirement = true ORDER BY `birthdate` ASC";
}
function getAllReprosAreMyDogs()
{
    return "SELECT * FROM `repros` WHERE notMyDog = false AND retirement = false ORDER BY `birthdate` ASC";
}
function getReproFromID()
{
    return "SELECT * FROM `repros` WHERE id = :reproID";
}
function getReprosWithPuppies()
{
    return "SELECT repros.* FROM `repros` JOIN litters ON repros.id = litters.mother WHERE repros.sex = 'Female' AND litters.display = 1";
}
function getAllMyRepros()
{
    return "SELECT * FROM `repros` WHERE notMyDog = false AND retirement = false ORDER BY sex ASC, birthdate ASC ";
}
function getAllMalesRepro()
{
    return "SELECT * FROM `repros` WHERE sex = 'Male'";
}
function getAllFemalesRepro()
{
    return "SELECT * FROM `repros` WHERE sex = 'Female'";
}
function getAllReprosOrderMale()
{
    return "SELECT * FROM `repros` ORDER BY sex DESC, birthdate ASC";
}
function getAllReprosOrderFemale()
{
    return "SELECT * FROM `repros` ORDER BY sex ASC, birthdate ASC";
}

function deleteReproFromId()
{
    return "DELETE FROM `repros` WHERE id = :reproID";
}
function saveReproDiapo()
{
    return "INSERT INTO `diapos` (path, reproID) VALUES (:path, :reproID)";
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
        retirement,
        mainImg) 
        VALUES (
            :name, 
            :sex, 
            :birthdate, 
            :insert, 
            :breeder, 
            :adn, 
            :notMyDog,
            :retirement,
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
    retirement = :retirement,
    mainImg = :mainImg WHERE id = :reproID";
}

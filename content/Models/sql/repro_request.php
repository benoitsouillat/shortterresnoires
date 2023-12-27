<?php

function getAllRepros()
{
    return "SELECT * FROM `repros`";
}
function getReproFromID()
{
    return "SELECT * FROM `repros` WHERE id = :reproID";
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
        mainImg) 
        VALUES (
            :name, 
            :sex, 
            :birthdate, 
            :insert, 
            :breeder, 
            :adn, 
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